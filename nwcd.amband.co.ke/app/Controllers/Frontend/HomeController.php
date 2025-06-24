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
    public function policyPublications()
{
    $model = new Crud_model();
    $perPage = 5;
    $page = (int) ($this->request->getGet('page') ?? 1);
    $offset = ($page - 1) * $perPage;

    $data['publications_list'] = $model->setTable('policy_publications')
        ->limit($perPage, $offset)
        ->find();

    $total = $model->setTable('policy_publications')->countAll();

    $data['current_page'] = $page;
    $data['total_pages'] = ceil($total / $perPage);

    return view('policy/policy_publications_view', $data);
}

}
