<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Laravel\Head\Facades\Head;
use Illuminate\Http\Request;

class PostIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {

        $title = 'Posts';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        $posts = Post::select('title', 'slug', 'excerpt', 'thumbnail', 'author_id', 'created_at')
            ->with('author')->latest()
            ->paginate(12);

        return view('posts.index', ['posts' => $posts]);
    }
}
