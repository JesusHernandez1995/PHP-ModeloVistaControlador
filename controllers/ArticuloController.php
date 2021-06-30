<?php 

class ArticuloController{
    // Método que se encarga de obtener los articulos y llamar a la vista mostrar_articulos
    public function mostrar()
    {
        // Llamamos al archivo donde nos conectamos con la base de datoss
        require_once('database/db.php');
        
        // Llamamos al modelo del controlador donde nos conectaremos con la base de datos y los distintos métodos
        require_once("models/Articulo.php");
        
        // Procedemos a crear el objeto Articulo (llamando al Modelo Articulo)
        $articulo = new Articulo();
        
        // Obtenemos los rubros para pasárselos a la vista
        $datos = $articulo->getArticulos();
        
        // Llamamos a la vista mostrar_articulos.php para pintar los articulos
        require_once("views/mostrar_articulos.php");
    }

    // Método que se encarga de obtener todos los rubros para mostrarlos en un <select>
    public function obtenerRubros()
    {
        // Llamamos al archivo donde nos conectamos con la base de datoss
        require_once('database/db.php');
    
        // Llamamos al modelo del controlador donde nos conectaremos con la base de datos y los distintos métodos
        require_once("models/Rubro.php");
        
        // Procedemos a crear el objeto Rubro (llamando al Modelo Rubro)
        $rubro = new Rubro();
        
        // Obtenemos los rubros para pasárselos a la vista
        $datos = $rubro->getRubros();

        // Llamamos a la vista crear_articulo.php
        require_once("views/crear_articulo.php");
    }

    // Método que se encarga de insertar un nuevo artículo en la tabla
    public function insertar()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // Llamamos al archivo donde nos conectamos con la base de datoss
            require_once('database/db.php');
        
            // Llamamos al modelo del controlador donde nos conectaremos con la base de datos y los distintos métodos
            require_once("models/Articulo.php");
        
            // Procedemos a crear el objeto Articulo (llamando al Modelo Articulo)
            $nuevo = new Articulo();
        
            // Insertamos un nuevo Articulo en la base de datos
            $nuevo->insertArticulos($_POST['Descripcion'], $_POST['Precio'], $_POST['codigorubro']);
        }
    }
}

?>