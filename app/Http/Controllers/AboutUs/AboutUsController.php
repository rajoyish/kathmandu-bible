<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Laravel\Head\Facades\Head;

class AboutUsController extends Controller
{
    public function introduction()
    {

        $title = 'Introduction';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('about-us.introduction');
    }

    public function visionPurposeAndMission()
    {
        $title = 'Vision Purpose And Mission';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('about-us.vision-purpose-mission');
    }

    public function CoreValues()
    {
        $title = 'Core Values';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('about-us.core-values');
    }

    public function statementOfFaith()
    {
        $title = 'Statement of Faith';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('about-us.statement-of-faith');
    }

    public function messageFromPresident()
    {
        $title = 'Message from the President';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('about-us.message-from-the-president');
    }
}
