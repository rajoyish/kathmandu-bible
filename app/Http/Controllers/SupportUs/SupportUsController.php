<?php

namespace App\Http\Controllers\SupportUs;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class SupportUsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $title = 'Support Us';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('support-us.index');
    }
}
