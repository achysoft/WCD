<?php

namespace App\Controllers\Frontend;

use CodeIgniter\Controller;
use App\Models\Crud_model;

class HomeController extends Controller
{
  public function index()
{
    $parkModel = new Crud_model();
    $reserveModel = new Crud_model();

    $data['parks'] = $parkModel->setTable('parks')->findAll();
    $data['reserves'] = $reserveModel->setTable('reserves')->findAll();

    return view('frontend/home', $data);
}

    public function parks()
    {
         $parkModel = new Crud_model();
         $data['parks'] = $parkModel->setTable('parks')->findAll();
        return view('landscape/parks_view', $data);
    }

    public function reserves()
    {
        return view('landscape/reserves_view');
    }
}
