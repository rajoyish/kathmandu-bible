<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Slider;

class HomeController extends Controller
{
    public function __invoke()
    {

        $sliders = Slider::select('photo')->latest()->get();

        $galleries = Gallery::select('cover_photo', 'title', 'slug', 'photos')->take(3)->latest()->get();

        return view('home.index', ['sliders' => $sliders, 'galleries' => $galleries]);

        return view('galleries.index', ['galleries' => $galleries]);
    }
}
