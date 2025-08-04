<?php

namespace App\Models;

use CodeIgniter\Model;

class puestoModel extends Model
{
    protected $table         = 'puesto';
    protected $allowedFields = [
        'puesto_id', 'puesto'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}