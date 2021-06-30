<?php       /* -------- Modelo Rubro ---------  */

class Rubro{
    private $lista_rubros;
    private $db;

    // Nos conectamos con la base de datos
    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->lista_rubros = array();
    }

    // SET NAMES indica qué conjunto de caracteres utilizará el cliente para enviar declaraciones SQL al servidor.
    private function setNames()
    {
        return $this->db->query("SET NAMES 'utf8'");
    }

    // Obtenemos TODOS los rubros de la base de datos y lo guardamos en $lista_rubros para pintarlo en la vista
    public function getRubros()
    {
        self::setNames();
        $query = "SELECT Codigo, Descripcion FROM rubros";
        foreach ($this->db->query($query) as $rubro){
            $this->lista_rubros[] = $rubro; 
        }
        $this->db->close();
        return $this->lista_rubros;
    }

    // Obtenemos un rubro de la base de datos de acuerdo a su ID
    public function getRubroById($id)
    {
        self::setNames();
        $query = "SELECT Descripcion FROM rubros WHERE Codigo='$id'";
        $registro = $this->db->query($query);
        $this->db->close();
        return $registro;
    }

    // Insertamos un nuevo rubro en la tabla rubro en la base de datos. 
    public function insertRubros($nombre)
    {
        self::setNames();
        $query = "INSERT INTO rubros (Descripcion) VALUES ('$nombre')";
        $result = $this->db->query($query);
        $this->db->close();

        if($result)        return true;
        else               return false;
    }

    // Eliminamos un rubro de la tabla rubro en la base de datos. 
    public function borrarRubro($id)
    {
        self::setNames();
        $query = "SELECT Descripcion FROM rubros WHERE Codigo='$id'";
        $registro = $this->db->query($query);
        if($this->db->error)    die();
        
        if($reg = $registro->fetch_array()){
            $query = "DELETE FROM rubros WHERE Codigo='$id'";
            $result = $this->db->query($query);
            if($this->db->error)    die();

            echo 'El rubro que se eliminó es:'.$reg['Descripcion'];
        } else {
            echo 'No existe un rubro con ese código';
        }
        $this->db->close();
    }

    public function modificarRubro($id, $descripcion)
    {
        self::setNames();
        $query = "UPDATE rubros SET Descripcion='$descripcion' WHERE Codigo='$id'";
        $registro = $this->db->query($query);

        if($this->db->error)    die();
        echo 'Se modificó la descripcion del rubro';
        $this->db->close();
    }
}

?>