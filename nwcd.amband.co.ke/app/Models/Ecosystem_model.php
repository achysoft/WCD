<?php

namespace App\Models;

use CodeIgniter\Model;

class Ecosystem_model extends Model
{
    protected $table = 'ecosystem';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    /**
     * Get species totals grouped by ecosystem.
     *
     * @return array
     */
    public function get_totals()
    {
        return $this->db->table('flora_species')
                        ->select('ecosystem_id, COUNT(*) as total_species')
                        ->groupBy('ecosystem_id')
                        ->get()
                        ->getResultArray();
    }

    /**
     * Get all ecosystem types.
     *
     * @return array
     */
    public function getEcosystemsType()
    {
        return $this->db->table('ecosystemtypes')->get()->getResult();
    }

    /**
     * Get ecosystems by type ID (for AJAX filtering).
     *
     * @param int $typeId
     * @return array
     */
public function getEcosystemsByType($typeId)
{
    return $this->db->table('ecosystem')
                    ->where('type_id', $typeId)
                    ->get()
                    ->getResult(); // keep as objects for your current JS
}
public function getFloraByEcosystem($ecosystemId)
{
    return $this->db->table('flora_species')
                    ->where('ecosystem_id', $ecosystemId)
                    ->get()
                    ->getResultArray();
}

}

