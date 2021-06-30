<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ejercicio para crear tablas y rubros - Borrar Item</title>
</head>
<body>
    <div class="text-center">
        <form action="../index.php?controller=Rubro&action=borrar" method="post" class="mt-4">
            <label for="Codigo">Ingrese el código del rubro a borrar: </label>
            <input type="text" for="Codigo" name="Codigo">

            <button type="submit">Confirmar</button>
            <div class="row mt-3">
                <div class="col-12">
                    <a href="../index.php" style="width: 20%;" class="btn btn-primary">Volver a la página principal</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>