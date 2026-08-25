<?php

namespace App\Http\Controllers\AcademicProgram;

use App\Http\Controllers\Controller;
use App\Models\AcademicProgram;
use Laravel\Head\Facades\Head;

class AcademicProgramController extends Controller
{
    public function show(AcademicProgram $academicProgram)
    {
        $title = $academicProgram->title;

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('academic-programs.show', [
            'program' => $academicProgram,
        ]);
    }
}
