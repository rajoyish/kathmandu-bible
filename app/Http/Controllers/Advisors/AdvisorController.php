<?php

namespace App\Http\Controllers\Advisors;

use App\Http\Controllers\Controller;
use App\Models\Advisor;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

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

        $advisors = Advisor::orderBy('order', 'asc')
            ->get();

        return view('advisors.index', ['advisors' => $advisors]);
    }
}
