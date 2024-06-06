<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function introduction()
    {
        return view('about-us.introduction');
    }
}
