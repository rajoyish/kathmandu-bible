<?php

namespace App\Http\Controllers\AcademicProgram;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class AcademicProgramController extends Controller
{
    public function certificateInTheology()
    {
        $title = 'Certificate in Theology (C. Th.)';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('academic-programs.certificate-in-theology-c-th');
    }

    public function diplomaInTheology()
    {
        $title = 'Diploma in Theology (Dip. Th.)';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('academic-programs.diploma-in-theology-dip-th');
    }

    public function bachelorOfTheology()
    {
        $title = 'Bachelor of Theology (B. Th.)';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('academic-programs.bachelor-of-theology-b-th');
    }

    public function mAInChristianMissions()
    {
        $title = 'M.A. in Christian Missions';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('academic-programs.m-a-in-christian-missions');
    }
}
