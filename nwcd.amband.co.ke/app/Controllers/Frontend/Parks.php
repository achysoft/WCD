<?php

namespace App\Controllers\Frontend;

use CodeIgniter\Controller;

class Parks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model','crud');
    }

    public function index()
    {
        $data['parks'] = $this->crud->get_all_parks();
        $this->load->view('parks_view', $data);
    }
}
