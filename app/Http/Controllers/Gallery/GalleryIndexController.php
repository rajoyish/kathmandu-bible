<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Laravel\Head\Facades\Head;

class GalleryIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $title = 'Gallery';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        $galleries = Gallery::select('cover_photo', 'title', 'slug', 'photos')->latest()->get();

        return view('galleries.index', ['galleries' => $galleries]);
    }
}
