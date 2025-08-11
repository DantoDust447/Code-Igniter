<?php

namespace App\Models;

use CodeIgniter\Model;

class RolesModel extends Model
{
    protected $table         = 'roles';
    protected $primaryKey    = 'rol_id';
    protected $allowedFields = [
        'rol_id', 'nombre', 'descripcion'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}