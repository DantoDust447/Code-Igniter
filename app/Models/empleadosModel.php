<?php

namespace App\Models;

use CodeIgniter\Model;

class empleadosModel extends Model
{
    protected $table         = 'emplados';
    protected $primaryKey    = 'empleado_id';
    protected $allowedFields = [
        'empleado_id', 'nombre', 'apellido', 'telefono', 'puesto_id', 'fecha_nac'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}