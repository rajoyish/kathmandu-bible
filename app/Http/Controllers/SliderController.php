<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $sliders = Slider::select('photo')->latest()->get();

        return view('home.index', ['sliders' => $sliders]);
    }
}
