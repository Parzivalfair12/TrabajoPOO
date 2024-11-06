<?php
// Incluir el archivo de configuración de la base de datos y el controlador
require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");

// Comprobar si el formulario fue enviado mediante el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario enviados
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha_limite = $_POST['fecha_limite'];
    $estado = $_POST['estado'];
    $prioridad = $_POST['prioridad'];
    $responsable = $_POST['responsable'];
    $etiquetas = $_POST['etiquetas'];

    // Crear una instancia del controlador
    $obj = new usernameController();

    // Llamar al método actualizarTarea del controlador para realizar la actualización
    $obj->editar($id, $titulo, $descripcion, $fecha_limite, $estado, $prioridad, $responsable, $etiquetas);
} else {
    // Si no se recibió el formulario, redirigir a la página de edición o mostrar error
    echo "No se recibieron los datos del formulario correctamente.";
}
?>
