<?php 

class RubroController{
    // Método que se encarga de obtener los rubros y llamar a la vista mostrar_rubros
    public function mostrar()
    {
        // Llamamos al archivo donde nos conectamos con la base de datoss
        require_once('database/db.php');
        
        // Llamamos al modelo del controlador donde nos conectaremos con la base de datos y los distintos métodos
        require_once("models/Rubro.php");
        
        // Procedemos a crear el objeto Rubro (llamando al Modelo Rubro)
        $rubro = new Rubro();
        
        // Obtenemos los rubros para pasárselos a la vista
        $datos = $rubro->getRubros();
        
        // Llamamos a la vista mostrar_rubros.php para pintar los rubros
        require_once("views/mostrar_rubros.php");
    }

    // Método que se encarga de insertar un nuevo rubro
    public function insertar()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // Llamamos al archivo donde nos conectamos con la base de datoss
            require_once('database/db.php');
        
            // Llamamos al modelo del controlador donde nos conectaremos con la base de datos y los distintos métodos
            require_once("models/Rubro.php");
        
            // Procedemos a crear el objeto Rubro (llamando al Modelo Rubro)
            $nuevo = new Rubro();
        
            // Insertamos un nuevo rubro en la base de datos
            $nuevo->insertRubros($_POST['Descripcion']);
        }
    }

    // Método que se encarga de borrar un rubro en particular de acuerdo a su id
    public function borrar()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // Llamamos al archivo donde nos conectamos con la base de datoss
            require_once('database/db.php');
        
            // Llamamos al modelo del controlador donde nos conectaremos con la base de datos y los distintos métodos
            require_once("models/Rubro.php");
        
            // Procedemos a crear el objeto Rubro (llamando al Modelo Rubro)
            $rubro = new Rubro();
        
            // Insertamos un nuevo rubro en la base de datos
            $rubro->borrarRubro($_POST['Codigo']);
        }
    }

    // Método que se encarga de obtener la descripcion del rubro a modificar
    public function obtener()
    {   
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // Llamamos al archivo donde nos conectamos con la base de datoss
            require_once('database/db.php');
        
            // Llamamos al modelo del controlador donde nos conectaremos con la base de datos y los distintos métodos
            require_once("models/Rubro.php");
        
            // Procedemos a crear el objeto Rubro (llamando al Modelo Rubro)
            $rubro = new Rubro();
        
            // Obtenemos el rubro a modificar según su ID 
            $register = $rubro->getRubroById($_POST['Codigo']);

            // Si existe el rubro, mandamos mensaje 
            if(!$reg = $register->fetch_array()){
                echo 'No existe un rubro con ese código';
            } 

            // Llamamos a la vista mostrar_info_rubro_a_modificar.php para mostrar la descripción del rubro a modificar
            require_once("views/mostrar_info_rubro_a_modificar.php");
        } 
    }
    
    public function modificar()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Llamamos al archivo donde nos conectamos con la base de datoss
            require_once('database/db.php');
        
            // Llamamos al modelo del controlador donde nos conectaremos con la base de datos y los distintos métodos
            require_once("models/Rubro.php");
        
            // Procedemos a crear el objeto Rubro (llamando al Modelo Rubro)
            $rubro = new Rubro();
        
            // Modificamos el rubro
            $reg = $rubro->modificarRubro($_POST['Codigo'], $_POST['Descripcion']);
        }
    }
}


?>