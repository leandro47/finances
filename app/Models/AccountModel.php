<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    /**
     * -------------------------------------------
     * TABLE
     * -------------------------------------------
     */
    protected $table = 'account';

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
