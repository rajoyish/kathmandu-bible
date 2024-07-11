<?php

namespace App\Http\Controllers\BoardMember;

use App\Http\Controllers\Controller;
use App\Models\Member;
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

        $members = Member::orderBy('order', 'asc')
            ->get();

        return view('board-members.index', ['members' => $members]);
    }
}
