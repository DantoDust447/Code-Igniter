<?php

namespace App\Controllers;
use App\Models\MarcasModel;
class Marcas extends BaseController
{
    public function marcas(): string
    {
        $marca = new MarcasModel();
        $datos['datos'] = $marca->findAll();
        return view('vista_marcas', $datos);
    }
    public function agregarMarca()
    {
        //crear objeto tipo empleados model
        $marca = new MarcasModel();
        //recibir datos del formulario
        $datos = [
            'marca_id' => $this->request->getPost('marca_id'),
            'marca'    => $this->request->getPost('marca'),
        ];
    
        $marca->insert($datos);
        return $this->marcas();
        
    }
    public function buscarMarca($id)
    {
        $marca = new MarcasModel();
        $datos['datos'] = $marca->where(['marca_id' => $id])->first();
        return view('modificarMarcaForm', $datos); // Redirigir a la vista de marcas con los datos encontrados
    }
    public function editarMarca()
    {
        //crear objeto tipo empleados model
        $marca = new MarcasModel();
        //recibir datos del formulario
        $datos = [
            'marca_id' => $this->request->getPost('marca_id'),
            'marca'    => $this->request->getPost('marca'),
        ];
    
        $marca->update($datos['marca_id'], $datos);
        return redirect()->to('marcas'); // Redirigir a la lista de marcas
    }
    public function eliminarMarca(int $id)
    {
        //crear objeto tipo empleados model
        $marca = new MarcasModel();
        //eliminar marca por id
        $marca->delete($id);
        return redirect()->to('marcas'); // Redirigir a la lista de marcas
    }
}