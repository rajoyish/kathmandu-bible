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
}
