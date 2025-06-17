<?php

namespace App\Models;

use CodeIgniter\Model;

class Crud_model extends Model
{
    protected $table; // Set dynamically
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'latitude', 'longitude', 'icon_url', 'location',
        'size_km', 'establishment', 'major_species', 'govenance_status', 'description'
    ];
    protected $useTimestamps = false; // Enable if using created_at/updated_at
    protected $returnType = 'array'; // 'object' if you prefer objects

    /**
     * Dynamically set the table name.
     *
     * @param string $tableName
     * @return $this
     */
    public function setTable($tableName)
    {
        $this->table = $tableName;
        return $this;
    }
}
