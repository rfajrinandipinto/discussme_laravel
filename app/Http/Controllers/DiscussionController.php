<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function index() {
        return view('discussions.index');
    }

    public function show() {
        return view('discussions.show');
    }
}
