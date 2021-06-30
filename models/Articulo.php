<?php       /* -------- Modelo Articulo ---------  */

class Articulo{
    private $lista_articulos;
    private $db;

    // Nos conectamos con la base de datos
    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->lista_articulos = array();
    }

    // SET NAMES indica qué conjunto de caracteres utilizará el cliente para enviar declaraciones SQL al servidor.
    private function setNames()
    {
        return $this->db->query("SET NAMES 'utf8'");
    }

    // Obtenemos TODOS los articulos de la base de datos y lo guardamos en $lista_articulos para pintarlo en la vista
    public function getArticulos()
    {
        self::setNames();
        $query = "SELECT Codigo, Descripcion, Precio FROM articulos";
        foreach ($this->db->query($query) as $articulo){
            $this->lista_articulos[] = $articulo; 
        }
        $this->db->close();
        return $this->lista_articulos;
    }

    // Insertamos un nuevo rubro en la tabla rubro en la base de datos. 
    public function insertArticulos($nombre, $precio, $rubro)
    {
        self::setNames();
        $query = "INSERT INTO articulos (Descripcion, Precio, CodigoRubros) VALUES ('$nombre', '$precio', '$rubro')";
        $result = $this->db->query($query);
        $this->db->close();

        if($result)        return true;
        else               return false;
    }
}

?>