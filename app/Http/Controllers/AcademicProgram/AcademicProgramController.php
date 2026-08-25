<?php

namespace App\Http\Controllers\AcademicProgram;

use App\Http\Controllers\Controller;
use Laravel\Head\Facades\Head;

class AcademicProgramController extends Controller
{
    public function certificateInTheology()
    {
        $title = 'Certificate in Theology (C. Th.)';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('academic-programs.certificate-in-theology-c-th');
    }

    public function diplomaInTheology()
    {
        $title = 'Diploma in Theology (Dip. Th.)';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('academic-programs.diploma-in-theology-dip-th');
    }

    public function bachelorOfTheology()
    {
        $title = 'Bachelor of Theology (B. Th.)';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('academic-programs.bachelor-of-theology-b-th');
    }

    public function mAInChristianMissions()
    {
        $title = 'M.A. in Christian Missions';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('academic-programs.m-a-in-christian-missions');
    }
}
