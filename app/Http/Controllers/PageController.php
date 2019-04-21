<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Add magic shit here...
        return view('pages.index');
    }

    public function about()
    {
        // Add magic shit here...
        return view('pages.about');
    }

    public function contact()
    {
        // Add magic shit here...
        return view('pages.contact');
    }
}
