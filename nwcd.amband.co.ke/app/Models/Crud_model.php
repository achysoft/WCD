<?php

namespace App\Models;

use CodeIgniter\Model;

class Crud_model extends Model
{
    protected $table;
    protected $primaryKey = 'id';
    protected $useTimestamps = false;
    protected $returnType = 'array';

    /**
     * Set the table name dynamically.
     *
     * @param string $tableName
     * @return $this
     */
    public function setTable(string $tableName)
    {
        $this->table = $tableName;
        return $this;
    }
}
