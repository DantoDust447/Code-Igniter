<?php

namespace App\Controllers;
use App\Models\empleadosModel;
use App\Models\puestoModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function empleados(): string
    {
        // Load the view for empleados
        //crear objeto tipo empleados model
        $empleados = new empleadosModel();
        //buscar datos
        $datos['datos'] = $empleados->findAll();
        return view('vista_emplados', $datos);
    }
    public function puestos(): string
    {
        // Load the view for puestos
        //crear objeto tipo puesto model
        $puestos = new puestoModel();
        //buscar datos
        $datos['datos'] = $puestos->findAll();
        return view('vista_puesto', $datos);
    }
    public function agregarEmplado()
    {
        //crear objeto tipo empleados model
        $empleados = new empleadosModel();
        //recibir datos del formulario
        $datos = [
            'empleado_id' => $this->request->getPost('empleado_id'),
            'nombre'      => $this->request->getPost('nombre'),
            'apellido'    => $this->request->getPost('apellido'),
            'telefono'    => $this->request->getPost('telefono'),
            'puesto_id'   => $this->request->getPost('puesto_id'),
            'fecha_nac'   => $this->request->getPost('fecha_nac')
        ];
    
        $empleados->insert($datos);
        return $this->empleados();
        
    }
    public function eliminarEmpleado(int $id): string
    {
        //crear objeto tipo empleados model
        $empleados = new empleadosModel();
        //eliminar empleado por id
        $empleados->delete($id);
        return $this->empleados(); // Redirigir a la lista de empleados
    }
    public function buscarEmpleado($id)
    {
        $empleados = new empleadosModel();
        $datos['datos'] = $empleados->where(['empleado_id' => $id])->first();
        return view('modificarEmpleadosForm', $datos); // Redirigir a la vista de empleados con los datos encontrados
    }
    public function editarEmpleado()
    {
        //crear objeto tipo empleados model
        $empleados = new empleadosModel();
        //recibir datos del formulario
        $datos = [
            'empleado_id' => $this->request->getPost('empleado_id'),
            'nombre'      => $this->request->getPost('nombre'),
            'apellido'    => $this->request->getPost('apellido'),
            'telefono'    => $this->request->getPost('telefono'),
            'puesto_id'   => $this->request->getPost('puesto_id'),
            'fecha_nac'   => $this->request->getPost('fecha_nac')
        ];
        //actualizar datos
        $empleados->update($datos['empleado_id'], $datos);
        return $this->index(); // Redirigir a la lista de empleados
    }
}
