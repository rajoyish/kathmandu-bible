<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class PostIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {

        $title = 'Posts';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        $posts = Post::select('title', 'slug', 'excerpt', 'thumbnail', 'author_id')
            ->with('author')->latest()
            ->get();

        return view('posts.index', ['posts' => $posts]);
    }
}
