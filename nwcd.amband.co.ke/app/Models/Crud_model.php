<?php

namespace App\Models;

use CodeIgniter\Model;

class Crud_model extends Model
{
    protected $table = 'parks'; // Important!
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name', 'latitude', 'longitude', 'icon_url', 'location',
        'size_km', 'establishment', 'major_species', 'govenance_status', 'description'
    ];
}
