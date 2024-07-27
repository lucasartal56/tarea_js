<?php
require_once 'Conexion.php';

class Asignacion extends Conexion
{
    public $as_id;
    public $as_programador;
    public $as_aplicacion;
    public $as_situacion;


    public function __construct($args = [])
    {
        $this->as_id = $args['as_id'] ?? null;
        $this->as_programador = $args['as_programador'] ?? '';
        $this->as_aplicacion = $args['as_aplicacion'] ?? '';
        $this->as_situacion = $args['as_situacion'] ?? NULL ;
    }

    

    public function guardar()
    {
        $sql = "INSERT INTO asignaciones(as_programador, as_aplicacion) values('$this->as_programador','$this->as_aplicacion')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from asignaciones where as_situacion = 1 ";

        if ($this->as_programador != '') {
            $sql .= " and as_programador like '%$this->as_programador%' ";
        }

        if ($this->as_aplicacion != '') {
            $sql .= " and as_aplicacion like '%$this->as_aplicacion%' ";
        }
        
        if ($this->as_id != null) {
            $sql .= " and as_id = $this->as_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function mostrarAsignaciones()
    {
        $sql = "SELECT * FROM asignaciones where as_situacion = 1";
        $resultado = self::servir($sql);
        return $resultado;

    }

    public function modificar()
    {
         $sql = "UPDATE asignaciones SET  as_programador = '$this->as_programador', as_aplicacion = '$this->as_aplicacion' where as_id = '$this->as_id'";

         $resultado = self::ejecutar($sql);
         return $resultado;
    }


    public function eliminar()
    {
        $sql = "UPDATE asignaciones SET as_situacion = 0 where as_id = '$this->as_id'";

     $resultado = self::ejecutar($sql);
     return $resultado;
    }
}
