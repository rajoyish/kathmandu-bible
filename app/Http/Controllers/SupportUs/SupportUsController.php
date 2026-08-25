<?php

namespace App\Http\Controllers\SupportUs;

use App\Http\Controllers\Controller;
use Laravel\Head\Facades\Head;
use Illuminate\Http\Request;

class SupportUsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $title = 'Support Us';

        Head::title($title)->description("Read about " . $title . " at Kathmandu Bible Institute.");

        return view('support-us.index');
    }
}
