<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Laravel\Head\Facades\Head;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $title = 'Our Faculty';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        $faculties = Faculty::orderBy('order', 'asc')
            ->get();

        return view('faculty.index', ['faculties' => $faculties]);
    }
}
