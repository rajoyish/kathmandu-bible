<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class AboutUsController extends Controller
{
    public function introduction()
    {
        $title = 'Introduction';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('about-us.introduction');
    }
}
