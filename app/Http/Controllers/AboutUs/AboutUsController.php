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

    public function visionPurposeAndMission()
    {
        $title = 'Vision Purpose And Mission';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('about-us.vision-purpose-mission');
    }

    public function CoreValues()
    {
        $title = 'Core Values';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('about-us.core-values');
    }

    public function statementOfFaith()
    {
        $title = 'Statement of Faith';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('about-us.statement-of-faith');
    }
}
