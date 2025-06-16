<?php

namespace App\Controllers\Frontend;

use CodeIgniter\Controller;
use App\Models\Crud_model;

class HomeController extends Controller
{
     public function index()
    {
        $parkModel = new Crud_model();
        $data['parks'] = $parkModel->findAll();
        return view('frontend/home', $data);
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
