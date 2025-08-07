<?php

namespace App\Models;

use CodeIgniter\Model;

class marcasModel extends Model
{
    protected $table         = 'marcas';
    protected $primaryKey    = 'marca_id';
    protected $allowedFields = [
        'marca_id', 'marcas'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}