<?php

namespace App\Http\Controllers\Advisors;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {

        $title = 'Board of Advisors';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('advisors.index');
    }
}
