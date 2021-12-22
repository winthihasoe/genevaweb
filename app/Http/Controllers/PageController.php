<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use App\Models\Service;
use App\Models\Training;
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
        $servicePosts = Service::latest()->get();
        return view('service', compact('servicePosts'));
    }

    // Show Training Page
    public function training()
    {
        $trainingPosts = Training::latest()->get();
        return view('training', compact('trainingPosts'));
    }

    // Show Knowledge Page
    public function knowledge()
    {
        $knowledgePosts = Knowledge::latest()->get();
        return view('knowledge', compact('knowledgePosts'));
    }
}
