<!doctype html>
<html lang="es" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Editar roles</title>
  </head>
    <body>
        <br><br><br><br>
        <div class="container"><h1>Editar Roles</h1></div>
        <br><br>
        <hr>
        <div class="container">
            <form action="<?=base_url('editarRol')?>" method="post">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Rol Id</span>
                                <input type="number" class="form-control" aria-label="Sizing example input" placeholder="<?=$datos['rol_id'];?>"
                                    aria-describedby="inputGroup-sizing-sm" id="rol_id" name="rol_id" value="<?=$datos['rol_id'];?>" readonly>
                            </div>
                            <!--nombre-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Rol</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" id="rol" name="descripcion"
                                    placeholder="Nombre del rol" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['descripcion'];?>" required>
                            </div>
                            <button type="submit" class="btn btn-outline-warning" id="add">Actualizar</button>
                        </form>
        </div>