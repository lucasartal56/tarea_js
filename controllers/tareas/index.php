<?php
require '../../models/Tarea.php';
header('Content-Type: application/json; charset=UTF-8');

$metodo = $_SERVER['REQUEST_METHOD'];
$tipo = $_REQUEST['tipo'];

// echo json_encode($_POST);
// exit;
try {
    switch ($metodo) {
        case 'POST':
            $tarea = new Tarea($_POST);
            switch ($tipo) {
                case '1':

                    $ejecucion = $tarea->guardar();
                    $mensaje = "Guardado Satisfactoriamente";
                    break;

                case '2':

                    $ejecucion = $tarea->modificar();
                    $mensaje = "Modificado Satisfactoriamente";
                    break;

                case '3':

                    $ejecucion = $tarea->eliminar();
                    $mensaje = "Eliminado Satisfactoriamente";
                    break;

                default:

                    break;
            }
            
            http_response_code(200);
            echo json_encode([
                "mensaje" => $mensaje,
                "codigo" => 1,

            ]);
            break;

        case 'GET':
            http_response_code(200);
            $tarea = new Tarea($_GET);
            $tareas = $tarea->buscar();
            echo json_encode($tareas);
            break;

        default:
            http_response_code(405);
            echo json_encode([
                "mensaje" => "Método inválido",
                "codigo" => 9,
            ]);
            break;
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "detalle" => $e->getMessage(),
        "mensaje" => "Error de ejecución",
        "codigo" => 0,
    ]);
}

exit;
