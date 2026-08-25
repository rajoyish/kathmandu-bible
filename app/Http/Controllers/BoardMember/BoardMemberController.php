<?php

namespace App\Http\Controllers\BoardMember;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Laravel\Head\Facades\Head;

class BoardMemberController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $title = 'Board of Members';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        $members = Member::orderBy('order', 'asc')
            ->get();

        return view('board-members.index', ['members' => $members]);
    }
}
