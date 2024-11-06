<?php
require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha_limite = $_POST['fecha_limite'];
$estado = $_POST['estado'];
$prioridad = $_POST['prioridad'];
$responsable = $_POST['responsable'];
$etiquetas = $_POST['etiquetas'];

$obj = new usernameController();
$result = $obj->guardar($titulo, $descripcion, $fecha_limite, $estado, $prioridad, $responsable, $etiquetas);

if ($result) {
    echo "Tarea guardada con éxito.";
}
?>
