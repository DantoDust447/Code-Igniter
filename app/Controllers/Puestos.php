<?php

namespace App\Controllers;
use App\Models\PuestoModel;
class Puestos extends BaseController
{
    public function puestos(): string
    {
        $puestos = new PuestoModel();
        $datos['datos'] = $puestos->findAll();
        return view('vista_puesto', $datos);
    }
    public function agregarPuesto()
    {
        $puestos = new PuestoModel();
        $datos = [
            'puesto_id' => $this->request->getPost('puesto_id'),
            'puesto'    => $this->request->getPost('puesto'),
        ];
    
        $puestos->insert($datos);
        return redirect()->to('puestos');
    }
    public function buscarPuesto($id)
    {
        $puestos = new PuestoModel();
        $datos['datos'] = $puestos->where(['puesto_id' => $id])->first();
        return view('modificarPuestoForm', $datos);
    }
    public function editarPuesto()
    {
        $puestos = new PuestoModel();
        $datos = [
            'puesto_id' => $this->request->getPost('puesto_id'),
            'puesto'    => $this->request->getPost('puesto'),
        ];
        //print_r($datos);
        $puestos->update($datos['puesto_id'], $datos);
        return redirect()->to('puestos');
    }
    public function eliminarPuesto(int $id)
    {
        $puestos = new PuestoModel();
        //eliminar puesto por id
        $puestos->delete($id);
        return redirect()->to('puestos'); // Redirigir a la lista de puestos
    }
}