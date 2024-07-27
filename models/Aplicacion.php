<?php
require_once 'Conexion.php';

class Aplicacion extends Conexion
{
    public $ap_id;
    public $ap_nombre;
    public $ap_descripcion;
    public $ap_situacion;


    public function __construct($args = [])
    {
        $this->ap_id = $args['ap_id'] ?? null;
        $this->ap_nombre = $args['ap_nombre'] ?? '';
        $this->ap_descripcion = $args['ap_descripcion'] ?? '';
        $this->ap_situacion = $args['ap_situacion'] ?? NULL ;
    }

    

    public function guardar()
    {
        $sql = "INSERT INTO aplicaciones(ap_nombre, ap_descripcion) values('$this->ap_nombre','$this->ap_descripcion')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from aplicaciones where ap_situacion = 1 ";

        if ($this->ap_nombre != '') {
            $sql .= " and ap_nombre like '%$this->ap_nombre%' ";
        }

        if ($this->ap_descripcion != '') {
            $sql .= " and ap_descripcion like '%$this->ap_descripcion%' ";
        }
        
        if ($this->ap_id != null) {
            $sql .= " and ap_id = $this->ap_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function mostrarAplicaciones(){
        $sql = "SELECT * FROM Aplicaciones where ap_situacion = 1";
        $resultado = self::servir($sql);
        return $resultado;

    }
    public function modificar()
    {
         $sql = "UPDATE aplicaciones SET  ap_nombre = '$this->ap_nombre', ap_descripcion = '$this->ap_descripcion' where ap_id = '$this->ap_id'";

         $resultado = self::ejecutar($sql);
         return $resultado;
    }


    public function eliminar()
    {
        $sql = "UPDATE aplicaciones SET ap_situacion = 0 where ap_id = '$this->ap_id'";

     $resultado = self::ejecutar($sql);
     return $resultado;
    }
}
