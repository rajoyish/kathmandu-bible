<?php

namespace App\Http\Controllers\Advisors;

use App\Http\Controllers\Controller;
use App\Models\Advisor;
use Laravel\Head\Facades\Head;

class AdvisorController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {

        $title = 'Board of Advisors';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        $advisors = Advisor::orderBy('order', 'asc')
            ->get();

        return view('advisors.index', ['advisors' => $advisors]);
    }
}
