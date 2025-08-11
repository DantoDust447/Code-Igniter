<?php

namespace App\Controllers;
use App\Models\TipoEquipoModel;
class TipoEquipo extends BaseController
{
    public function TipoEquipo(): string
    {
        $tipoEquipo = new TipoEquipoModel();
        $datos['datos'] = $tipoEquipo->findAll();
        return view('vista_tipo_equipo', $datos);
    }

    public function agregarTipoEquipo()
    {
        $tipoEquipo = new TipoEquipoModel();
        $datos = [
            'nombre' => $this->request->getPost('nombre'),
        ];
    
        $tipoEquipo->insert($datos);
        return $this->tipoEquipo();
    }

    public function buscarTipoEquipo($id)
    {
        $tipoEquipo = new TipoEquipoModel();
        $datos['datos'] = $tipoEquipo->where(['tipo_id' => $id])->first();
        return view('modificarTipoEquipoForm', $datos);
    }

    public function editarTipoEquipo()
    {
        $tipoEquipo = new TipoEquipoModel();
        $datos = [
            'tipo_id' => $this->request->getPost('tipo_id'),
            'nombre' => $this->request->getPost('nombre'),
        ];
    
        $tipoEquipo->update($datos['tipo_id'], $datos);
        return redirect()->to('tipo_equipo');
    }

    public function eliminarTipoEquipo(int $id)
    {
        $tipoEquipo = new TipoEquipoModel();
        $tipoEquipo->delete($id);
        return redirect()->to('TipoEquipo');
    }
}