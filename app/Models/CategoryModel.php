<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    /**
     * -------------------------------------------
     * TABLE
     * -------------------------------------------
     */
    protected $table = 'category';

    /**
     * -------------------------------------------
     * ALLOWED FIELDS
     * -------------------------------------------
     */
    protected $allowedFields = [
        'id',
        'idUser',
        'description',
    ];

    /**
     * -------------------------------------------
     * RETURN TYPE DATAS
     * -------------------------------------------
     */
    protected $returnType = 'array';
}
