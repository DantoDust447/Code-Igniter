<?php

namespace App\Controllers;
use App\Models\RolesModel;
class Roles extends BaseController
{
    public function roles(): string
    {
        $rol = new RolesModel();
        $datos['datos'] = $rol->findAll();
        return view('vista_roles', $datos);
    }

    public function agregarRol()
    {
        $rol = new RolesModel();
        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];
    
        $rol->insert($datos);
        return $this->roles();
    }

    public function buscarRol($id)
    {
        $rol = new RolesModel();
        $datos['datos'] = $rol->where(['rol_id' => $id])->first();
        return view('modificarRolesForm', $datos);
    }

    public function editarRol()
    {
        $rol = new RolesModel();
        $datos = [
            'rol_id' => $this->request->getPost('rol_id'),
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];
    
        $rol->update($datos['rol_id'], $datos);
        return redirect()->to('roles');
    }

    public function eliminarRol(int $id)
    {
        $rol = new RolesModel();
        $rol->delete($id);
        return redirect()->to('roles');
    }
}