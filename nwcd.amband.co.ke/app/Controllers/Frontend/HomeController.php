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
        $this->db = \Config\Database::connect();
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
    $typeId = $this->request->getPost('type_id');

    if ($typeId) {
        // Use the already-injected model
        $ecosystems = $this->ecosystemModel->getEcosystemsByType($typeId);
        return $this->response->setJSON($ecosystems);
    }

    return $this->response->setJSON([]);
}
public function get_flora_by_ecosystem()
{
    $ecosystemId = $this->request->getPost('ecosystem_id');

    if ($ecosystemId) {
        try {
            $flora = $this->ecosystemModel->getFloraByEcosystem($ecosystemId);

            $templateRow = $this->db->table('templates')
                ->where('ecosystem_id', $ecosystemId)
                ->get()
                ->getRow();

            // Log results or return them for debugging
            log_message('debug', 'Flora count: '.count($flora));
            log_message('debug', 'TemplateRow: '.print_r($templateRow, true));

            return $this->response->setJSON([
                'flora' => $flora,
                'template' => $templateRow ? $templateRow->template : null
            ]);
        } catch (\Exception $e) {
            log_message('error', 'Error getting flora/template: '.$e->getMessage());
            return $this->response->setStatusCode(500)->setJSON(['error' => $e->getMessage()]);
        }
    }

    return $this->response->setJSON(['flora'=>[], 'template'=>null]);
}

}
