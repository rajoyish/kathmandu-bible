<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
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

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);
        SEOMeta::setDescription($excerpt);
        OpenGraph::setDescription($excerpt);
        OpenGraph::addImage($postImage);

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
