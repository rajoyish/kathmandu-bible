<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Laravel\Head\Facades\Head;
use Illuminate\Http\Request;

class PostShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Post $post)
    {
        $title = $post->title;
        $excerpt = $post->excerpt;
        $postImage = url('storage/'.$post->thumbnail);

        Head::title($title);
        Head::description($excerpt);
        Head::ogImage($postImage);

        $similarPostsByAuthor = $post->author->posts()
            ->where('id', '!=', $post->id)
            ->take(3)
            ->get();

        return view('posts.show', [
            'post' => $post,
            'similarPosts' => $similarPostsByAuthor,
        ]);
    }
}
