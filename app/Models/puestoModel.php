<?php

namespace App\Models;

use CodeIgniter\Model;

class PuestoModel extends Model
{
    protected $table         = 'puestos';
    protected $primaryKey    = 'puesto_id';
    protected $allowedFields = [
        'puesto_id', 'puesto'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}