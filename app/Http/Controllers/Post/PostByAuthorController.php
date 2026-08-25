<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Laravel\Head\Facades\Head;
use Illuminate\Http\Request;

class PostByAuthorController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Author $author)
    {
        $title = 'Posts from '.$author->name;

        Head::title($title)
            ->description('Read articles and posts written by ' . $author->name . ' at Kathmandu Bible Institute.');
            
        if ($author->photo) {
            Head::ogImage(url('storage/' . $author->photo));
        }

        $posts = $author->posts()->with('author')->latest()->paginate(12);

        return view('posts.author-posts', ['posts' => $posts, 'author' => $author]);
    }
}
