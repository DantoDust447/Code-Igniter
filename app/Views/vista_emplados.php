<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <br><br><br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar empleado
    </button>
    <br><br>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar nuevos datos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--id-->
                    <form action="agregarEmpleado" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">id</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" placeholder="id"
                                aria-describedby="inputGroup-sizing-sm" id="empleado_id" name="empleado_id" required>
                        </div>
                        <!--nombre-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="nombre" name="nombre"
                                placeholder="Nombre" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--apellido-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="apellido" name="apellido"
                                placeholder="Apellido" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--telefono-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Telefono</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="telefono" name="telefono"
                                placeholder="Telefono" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--puesto-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Puesto</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="puesto_id" name="puesto_id"
                                placeholder="Puesto" aria-describedby="inputGroup-sizing-sm" required> 
                        </div>
                        <!--fecha de nacimiento-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha de Nacimiento</span>
                            <input type="date" class="form-control" aria-label="Sizing example input" id="fecha_nac" name="fecha_nac"
                                placeholder="Fecha de Nacimiento" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <button type="submit" class="btn btn-primary" id="add">Agregar</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container"><table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Puesto</th>
                <th scope="col">fecha de nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $empleado){
                ?>
            <tr>
                <td><?=$empleado['empleado_id'];?></td>
                <td><?=$empleado['nombre'];?></td>
                <td><?=$empleado['apellido'];?></td>
                <td><?=$empleado['telefono'];?></td>
                <td><?=$empleado['puesto_id'];?></td>
                <td><?=$empleado['fecha_nac'];?></td>
                <td>
                    <a href="<?=base_url('eliminarEmpleado/').$empleado['empleado_id'];?>" class="btn btn-danger" ><i class="bi bi-trash"></i></a>
                    <a href="<?=base_url('buscarEmpleado/').$empleado['empleado_id'];?>" type="button" class="btn btn-outline-light" ><i class="bi bi-search"></i></a>
                </td>
            </tr>
            <?php
        }
         ?>
        </tbody>
    </table>
    <?php
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>