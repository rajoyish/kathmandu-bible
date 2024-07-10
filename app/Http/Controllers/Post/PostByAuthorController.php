<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class PostByAuthorController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Author $author)
    {
        $title = 'Posts from '.$author->name;

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        $posts = $author->posts()->with('author')->latest()->paginate(12);

        return view('posts.author-posts', ['posts' => $posts, 'author' => $author]);
    }
}
