<?php

namespace App\Models;

use CodeIgniter\Model;

class empleadosModel extends Model
{
    protected $table         = 'empleados';
    protected $primaryKey    = 'empleado_id';
    protected $allowedFields = [
        'empleado_id', 'nombre', 'apellido', 'telefono', 'puesto_id', 'fecha_nacimiento'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}