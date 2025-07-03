<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Crud_model;
use CodeIgniter\HTTP\ResponseInterface;

class LandscapeController extends BaseController
{
    protected $crud;

    public function __construct()
    {
        $this->crud = new Crud_model();
        $this->crud->setTable('parks');
    }

    public function parks()
    {
          $data = [
            'title' => 'Parks',
            'subTitle' => 'Operations - Parks',
        ];
        return view('backend/parks',$data);
    }

    public function getParks()
    {
        return $this->response->setJSON(['data' => $this->crud->findAll()]);
    }

    public function savePark()
    {
        $id = $this->request->getPost('id');
        $data = $this->request->getPost([
            'name', 'latitude', 'longitude', 'icon_url', 'location',
            'size_km', 'establishment', 'major_species',
            'govenance_status', 'description'
        ]);

        if ($id) {
            $this->crud->update($id, $data);
        } else {
            $this->crud->insert($data);
        }

        return $this->response->setJSON(['status' => 'success']);
    }

    public function deletePark($id)
    {
        $this->crud->delete($id);
        return $this->response->setJSON(['status' => 'deleted']);
    }
}
