<?php

namespace App\Controllers\Frontend;

use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend/home');
    }

    public function about()
    {
        return view('frontend/about');
    }

    public function contact()
    {
        return view('frontend/contact');
    }
}
