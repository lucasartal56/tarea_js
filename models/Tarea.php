<?php
require_once 'Conexion.php';

class Tarea extends Conexion
{
    public $ta_id;
    public $ta_nombre;
    public $ta_fecha;
    public $ta_aplicacion;
    public $ta_situacion;


    public function __construct($args = [])
    {
        $this->ta_id = $args['ta_id'] ?? null;
        $this->ta_nombre = $args['ta_nombre'] ?? '';
        $this->ta_fecha = $args['ta_fecha'] ?? '';
        $this->ta_aplicacion = $args['ta_aplicacion'] ?? '';
        $this->ta_situacion = $args['ta_situacion'] ?? '';
      
    }

    

    public function guardar()
    {
        $sql = "INSERT INTO tareas(ta_nombre, ta_fecha, ta_aplicacion) values('$this->ta_nombre','$this->ta_fecha', '$this->ta_aplicacion')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT tareas.*, aplicaciones.* FROM tareas INNER JOIN aplicaciones ON tareas.ta_aplicacion = aplicaciones.ap_id
                WHERE tareas.ta_situacion = 1";  

        if ($this->ta_nombre != '') {
            $sql .= " and ta_nombre like '%$this->ta_nombre%' ";
        }

        if ($this->ta_fecha != '') {
            $sql .= " and ta_fecha like '%$this->ta_fecha%' ";
        }

        if ($this->ta_aplicacion != '') {
            $sql .= " and ta_aplicacion like '%$this->ta_aplicacion%' ";
        }
        
        if ($this->ta_id != null) {
            $sql .= " and ta_id = $this->ta_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar()
    {
         $sql = "UPDATE tareas SET  ta_nombre = '$this->ta_nombre', ta_fecha = '$this->ta_fecha', ta_aplicacion = '$this->ta_aplicacion' where ta_id = '$this->ta_id'";

         $resultado = self::ejecutar($sql);
         return $resultado;
    }

    public function eliminar()
    {
        $sql = "UPDATE tareas SET ta_situacion = 0 where ta_id = '$this->ta_id'";

     $resultado = self::ejecutar($sql);
     return $resultado;
 }
}
