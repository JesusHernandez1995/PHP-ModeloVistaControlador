<?php 

/* ------------------------------- Controlador Frontal ------------------------------ */

// Obtenemos la acción seleccionada.
if (!empty($_GET[ 'action' ]))      $action = $_GET [ 'action' ];

// Obtenemos el controlador.
if (!empty($_GET[ 'controller' ]))  {
    $controllerName = $_GET ['controller'];
    // Establecemos el path de los controladores
    $controllerPath = 'controllers/'.$controllerName.'Controller.php';
    // Llamamos al controlador correspondiente
    require $controllerPath;
    
    // Creamos el objeto y llamamos a la acción correspondiente
    $controllerName = $controllerName.'Controller';
    $controller = new $controllerName;
    $controller->$action();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Artículos y Rubros</title>
</head>
<body>
    <div class="text-center">
        <div class="row mt-5" >
            <div class="col-12">
                <h2 class="mb-3">Bienvenidos a la interfaz gráfica de Rubros y Artículos</h2>
                <span>Seleccione las siguientes acciones a realizar</span> 
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <a href="index.php?controller=Articulo&action=obtenerRubros" style="width: 12%;" class="btn btn-primary">Crear artículo</a>
                <a href="views/insertar_rubro.php" style="width: 12%;" class="btn btn-primary">Insertar rubro</a>
                <a href="views/borrar_rubro.php" style="width: 12%;" class="btn btn-primary">Borrar rubro</a>
                <a href="views/modificar_rubro.php" style="width: 12%;" class="btn btn-primary">Modificar rubro</a>
                <a href="index.php?controller=Rubro&action=mostrar" style="width: 15%;" class="btn btn-primary">Mostrar todos los rubros</a>
                <a href="index.php?controller=Articulo&action=mostrar" style="width: 18%;" class="btn btn-primary">Mostrar todos los artículos</a>
            </div>
        </div>
    </div>
</body>
</html>