<?php
require_once 'Conexion.php';

class Programador extends Conexion
{
    public $pro_id;
    public $pro_grado;
    public $pro_arma;
    public $pro_nombre;
    public $pro_apellido;
    public $pro_catalogo;
    public $pro_situacion;


    public function __construct($args = [])
    {
        $this->pro_id = $args['pro_id'] ?? null;
        $this->pro_grado = $args['pro_grado'] ?? '';
        $this->pro_arma = $args['pro_arma'] ?? '';
        $this->pro_nombre = $args['pro_nombre'] ?? '';
        $this->pro_apellido = $args['pro_apellido'] ?? '';
        $this->pro_catalogo = $args['pro_catalogo'] ?? '';
        $this->pro_situacion = $args['pro_situacion'] ?? '';

    }

    public function guardar()
    {
        $sql = "INSERT INTO programadores(pro_grado, pro_arma, pro_nombre, pro_apellido, pro_catalogo) values('$this->pro_grado','$this->pro_arma','$this->pro_nombre','$this->pro_apellido','$this->pro_catalogo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from programadores where pro_situacion = 1 ";

        if ($this->pro_grado != '') {
            $sql .= " and pro_grado like '%$this->pro_grado%' ";
        }

        if ($this->pro_arma != '') {
            $sql .= " and pro_arma like '%$this->pro_arma%' ";
        }

        if ($this->pro_nombre != '') {
            $sql .= " and pro_nombre like '%$this->pro_nombre%' ";
        }

        if ($this->pro_apellido != '') {
            $sql .= " and pro_apellido like '%$this->pro_apellido%' ";
        }
        
        if ($this->pro_catalogo != null) {
            $sql .= " and pro_catalogo = $this->pro_catalogo ";
        }

        if ($this->pro_id != null) {
            $sql .= " and pro_id = $this->pro_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function mostrarProgramadores(){
        $sql = "SELECT * FROM Programadores where pro_situacion = 1";
        $resultado = self::servir($sql);
        return $resultado;

    }

    public function modificar()
    {
         $sql = "UPDATE programadores SET  pro_grado = '$this->pro_grado', pro_arma = '$this->pro_arma', pro_nombre = '$this->pro_nombre', pro_apellido = '$this->pro_apellido', pro_catalogo = '$this->pro_catalogo' where pro_id = '$this->pro_id'";

         $resultado = self::ejecutar($sql);
         return $resultado;
    }

    public function eliminar()
    {
        $sql = "UPDATE programadores SET pro_situacion = 0 where pro_id = '$this->pro_id'";

     $resultado = self::ejecutar($sql);
     return $resultado;
 }
}
