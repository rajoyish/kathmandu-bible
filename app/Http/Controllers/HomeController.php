<?php

namespace App\Http\Controllers;

use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function indexSlider()
    {
        $sliders = Slider::select('photo')->latest()->get();

        return view('home.index', ['sliders' => $sliders]);
    }
}
