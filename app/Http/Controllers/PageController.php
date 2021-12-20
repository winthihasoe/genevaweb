<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Show Index Page 
    public function index()
    {
        return view('index');
    }

    // Show About Page
    public function about()
    {
        return view('about');
    }

    // Show Service Page
    public function service()
    {
        return view('service');
    }

    // Show Training Page
    public function training()
    {
        return view('training');
    }

    // Show Knowledge Page
    public function knowledge()
    {
        return view('knowledge');
    }
}
