<?php

namespace App\Http\Controllers\BoardMember;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class BoardMemberController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $title = 'Board of Members';

        SEOMeta::setTitle($title);
        OpenGraph::setTitle($title);

        return view('board-members.index');
    }
}
