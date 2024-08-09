<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $title = 'Our Faculty';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        $faculties = Faculty::orderBy('order', 'asc')
            ->get();

        return view('faculty.index', ['faculties' => $faculties]);
    }
}
