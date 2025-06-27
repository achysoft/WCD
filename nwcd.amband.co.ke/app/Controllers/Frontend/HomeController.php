<?php

namespace App\Controllers\Frontend;

use CodeIgniter\Controller;
use App\Models\Crud_model;
use App\Models\Ecosystem_model;

class HomeController extends Controller
{
    protected $ecosystemModel;

    public function __construct()
    {
        $this->ecosystemModel = new Ecosystem_model();
    }

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

    public function ongoingProjects()
    {
        $model = new Crud_model();
        $data['projects'] = $model->setTable('ongoing_projects')->findAll();

        return view('conservation/ongoing_projects_view', $data);
    }

    public function flora()
    {
        $totals = $this->ecosystemModel->get_totals(); // returns array of rows

        $species_by_ecosystem = [];
        foreach ($totals as $row) {
            $species_by_ecosystem[$row['ecosystem_id']] = $row['total_species'];
        }

        $data['mountain']    = $species_by_ecosystem[1] ?? 0;
        $data['savannah']    = $species_by_ecosystem[2] ?? 0;
        $data['coastal']     = $species_by_ecosystem[3] ?? 0;
        $data['desert']      = $species_by_ecosystem[4] ?? 0;
        $data['wetland']     = $species_by_ecosystem[5] ?? 0;
        $data['forest']      = $species_by_ecosystem[6] ?? 0;
        $data['freshwater']  = $species_by_ecosystem[7] ?? 0;
        $data['marine']      = $species_by_ecosystem[8] ?? 0;

        $data['ecosystemTypes'] = $this->ecosystemModel->getEcosystemsType();

        return view('biodiversity/flora_view', $data);
    }

  public function get_ecosystems_by_type()
{
    $type_id = $this->request->getPost('type_id');

    if (!$type_id) {
        return $this->response->setJSON(['error' => 'No type_id received']);
    }

    $ecosystems = $this->ecosystemModel->getEcosystemsByType($type_id);

    return $this->response->setJSON($ecosystems);
}

}
