<!doctype html>
<html lang="en" data-bs-theme="dark">

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
        Agregar puesto
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
                    <form action="agregarPuesto" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">id</span>
                            <input type="number" class="form-control" aria-label="Sizing example input"
                                placeholder="puesto_id" aria-describedby="inputGroup-sizing-sm" id="puesto_id"
                                name="puesto_id" required>
                        </div>
                        <!--nombre-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Puesto</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="puesto"
                                name="puesto" placeholder="Marca" aria-describedby="inputGroup-sizing-sm" required>
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
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $empleado){
                ?>
                <tr>
                    <td><?=$empleado['puesto_id'];?></td>
                    <td><?=$empleado['puesto'];?></td>
                    <td>
                        <a href="<?=base_url('eliminarPuesto/'.$empleado['puesto_id'])?>" class="btn btn-outline-info"><i class="bi bi-trash3"></i></a>
                        <a href="<?=base_url('buscarPuesto/'.$empleado['puesto_id'])?>" class="btn btn-outline-light"><i class="bi bi-pen"></i></a>
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