<?php

namespace App\Controllers;
use App\Models\empleadosModel;
use App\Models\puestoModel;
use App\Models\marcasModel;
class Marcas extends BaseController
{
    public function marcas(): string
    {
        $marca = new marcasModel();
        $datos['datos'] = $marca->findAll();
        return view('vista_marcas', $datos);
    }
    public function agregarMarca()
    {
        //crear objeto tipo empleados model
        $marca = new marcasModel();
        //recibir datos del formulario
        $datos = [
            'marca_id' => $this->request->getPost('marca_id'),
            'marca'    => $this->request->getPost('marca'),
        ];
    
        $marca->insert($datos);
        return $this->marcas();
        
    }
}