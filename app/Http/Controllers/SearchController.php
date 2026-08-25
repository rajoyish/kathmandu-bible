<?php

namespace App\Http\Controllers;

use App\Models\AcademicProgram;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;
use Laravel\Head\Facades\Head;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = $request->input('q', '');

        Head::title('Search Results - ' . config('app.name'))
            ->description('Search results for ' . $query);

        if (empty(trim($query))) {
            return view('search.index', [
                'query' => $query,
                'posts' => collect(),
                'programs' => collect(),
                'galleries' => collect(),
            ]);
        }

        $term = "%{$query}%";

        // Query optimization: Selecting only necessary columns, avoiding N+1 by eager loading 'author' for posts
        $posts = Post::with('author:id,name,slug,photo,email')
            ->select('id', 'author_id', 'title', 'slug', 'excerpt', 'thumbnail', 'created_at')
            ->where('title', 'like', $term)
            ->orWhere('excerpt', 'like', $term)
            ->latest()
            ->limit(20)
            ->get();

        $programs = AcademicProgram::select('id', 'title', 'slug', 'description', 'badge_title', 'badge_color')
            ->where('title', 'like', $term)
            ->orWhere('description', 'like', $term)
            ->orderBy('order_column')
            ->limit(10)
            ->get();

        $galleries = Gallery::select('id', 'title', 'slug', 'description', 'cover_photo', 'created_at')
            ->where('title', 'like', $term)
            ->orWhere('description', 'like', $term)
            ->latest()
            ->limit(10)
            ->get();

        return view('search.index', [
            'query' => $query,
            'posts' => $posts,
            'programs' => $programs,
            'galleries' => $galleries,
        ]);
    }
}
