<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $galleries = Gallery::select('cover_photo', 'title', 'slug', 'photos')->latest()->get();

        return view('galleries.index', ['galleries' => $galleries]);
    }
}
