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
    <div class="container"><h1>Editar Puestos</h1></div>
    <br><br>
    <hr>
    <div class="container">
        <form action="<?=base_url('editarMarca')?>" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Marca Id</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" placeholder="<?=$datos['marca_id'];?>"
                                aria-describedby="inputGroup-sizing-sm" id="puesto_id" name="marca_id" value="<?=$datos['marca_id'];?>" readonly>
                        </div>
                        <!--nombre-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Marca</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="puesto" name="marca"
                                placeholder="Nombre" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['marca'];?>" required>
                        </div>
                        <button type="submit" class="btn btn-outline-warning" id="add">Actualizar</button>
                    </form>
    </div>
    
  </body>
</html>