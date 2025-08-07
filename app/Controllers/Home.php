<?php

namespace App\Controllers;
use App\Models\EmpleadosModel;
use App\Models\PuestoModel;
class Home extends BaseController
{
    //vistas
    public function index(): string
    {
        return view('welcome_message');
    }
    public function empleados(): string
    {
        $empleados = new EmpleadosModel();
        $datos['datos'] = $empleados->findAll();
        return view('vista_emplados', $datos);
    }

    //acciones
    public function agregarEmplado()
    {
        //crear objeto tipo empleados model
        $empleados = new EmpleadosModel();
        //recibir datos del formulario
        $datos = [
            'empleado_id' => $this->request->getPost('empleado_id'),
            'nombre'      => $this->request->getPost('nombre'),
            'apellido'    => $this->request->getPost('apellido'),
            'telefono'    => $this->request->getPost('telefono'),
            'puesto_id'   => $this->request->getPost('puesto_id'),
            'fecha_nacimiento'   => $this->request->getPost('fecha_nac')
        ];
    
        $empleados->insert($datos);
        return redirect()->to('empleados'); // Redirigir a la lista de empleados
        
    }
    public function eliminarEmpleado(int $id)
    {
        //crear objeto tipo empleados model
        $empleados = new EmpleadosModel();
        //eliminar empleado por id
        $empleados->delete($id);
        return redirect()->to('empleados'); // Redirigir a la lista de empleados
    }
    public function buscarEmpleado($id)
    {
        $empleados = new EmpleadosModel();
        $datos['datos'] = $empleados->where(['empleado_id' => $id])->first();
        return view('modificarEmpleadosForm', $datos); // Redirigir a la vista de empleados con los datos encontrados
    }
    public function editarEmpleado()
    {
        //crear objeto tipo empleados model
        $empleados = new EmpleadosModel();
        //recibir datos del formulario
        $datos = [
            'empleado_id' => $this->request->getPost('empleado_id'),
            'nombre'      => $this->request->getPost('nombre'),
            'apellido'    => $this->request->getPost('apellido'),
            'telefono'    => $this->request->getPost('telefono'),
            'puesto_id'   => $this->request->getPost('puesto_id'),
            'fecha_nacimiento'   => $this->request->getPost('fecha_nac')
        ];
        //actualizar datos
        $empleados->update($datos['empleado_id'], $datos);
        return redirect()->to('empleados'); // Redirigir a la lista de empleados
    }
}
