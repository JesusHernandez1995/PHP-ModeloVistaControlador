<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Creando un nuevo artículo</title>
</head>
<body>
    <div class="text-center">
        <form action="index.php?controller=Articulo&action=insertar" method="post" class="mt-4">
            <!-- Descripción del artículo -->
            <label for="Descripcion">Ingrese la descripción del artículo: </label>
            <input type="text"  class="mt-3" for="Descripcion" name="Descripcion" required>
            <br>
            <!-- Precio -->
            <label for="Precio">Ingrese el precio del artículo: </label>
            <input type="text"  class="my-3" for="Precio" name="Precio" required>
            <br>
            <!-- Seleccionar rubro -->
            <label for="codigorubro">Seleccione el rubro del artículo: </label>
            <select name="codigorubro" >
            <?php
                for($i=0; $i<count($datos); $i++){
                    echo "<option value=\"" . $datos[$i]['Codigo'] . "\">" . $datos[$i]['Descripcion'] . "</option>";
                }
            ?>
            </select>
            <br>
            <button type="submit" class="mt-3">Confirmar</button>
            <div class="row mt-3">
                <div class="col-12">
                    <a href="../index.php" style="width: 20%;" class="btn btn-primary">Volver a la página principal</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>