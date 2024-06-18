<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class GalleryIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $title = 'Gallery';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        $galleries = Gallery::select('cover_photo', 'title', 'slug', 'photos')->latest()->get();

        return view('galleries.index', ['galleries' => $galleries]);
    }
}
