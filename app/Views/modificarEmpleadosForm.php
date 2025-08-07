<!doctype html>
<html lang="es" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Editar empleados</title>
  </head>
  <body>
    <br><br><br><br>
    <div class="container"><h1>Editar Empleados</h1></div>
    <br><br>
    <hr>
    <div class="container">
        <form action="<?=base_url('editarEmpleado')?>" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">id</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" placeholder="<?=$datos['empleado_id'];?>"
                                aria-describedby="inputGroup-sizing-sm" id="empleado_id" name="empleado_id" value="<?=$datos['empleado_id'];?>" readonly>
                        </div>
                        <!--nombre-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="nombre" name="nombre"
                                placeholder="Nombre" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['nombre'];?>" required>
                        </div>
                        <!--apellido-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="apellido" name="apellido"
                                placeholder="Apellido" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['apellido'];?>" required>
                        </div>
                        <!--telefono-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Telefono</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="telefono" name="telefono"
                                placeholder="Telefono" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['telefono'];?>" required>
                        </div>
                        <!--puesto-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Puesto</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="puesto_id" name="puesto_id"
                                placeholder="Puesto" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['puesto_id'];?>" required> 
                        </div>
                        <!--fecha de nacimiento-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha de Nacimiento</span>
                            <input type="date" class="form-control" aria-label="Sizing example input" id="fecha_nac" name="fecha_nac"
                                placeholder="Fecha de Nacimiento" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['fecha_nacimiento'];?>" required>
                        </div>
                        <button type="submit" class="btn btn-outline-warning" id="add">Actualizar</button>
                    </form>
    </div>
    
  </body>
</html>