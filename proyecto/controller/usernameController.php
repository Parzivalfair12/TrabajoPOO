<?php
require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");

class usernameController {
    private $model;

    public function __construct() {
        $this->model = new usernameModel(); 
    }

    public function guardar($titulo, $descripcion, $fecha_limite, $estado, $prioridad, $responsable, $etiquetas) {
        $this->model->crearTarea($titulo, $descripcion, $fecha_limite, $estado, $prioridad, $responsable, $etiquetas);
        
        $tareas = $this->model->obtenerTareas();
        require_once("c://xampp/htdocs/proyecto/view/username/show.php");  
    }

    public function eliminar($id) {
        // Verifica si la tarea existe antes de eliminar
        $result = $this->model->eliminarTarea($id);
        if (!$result) {
          echo "Error al eliminar la tarea";
        } 
        $tareas = $this->model->obtenerTareas();
        require_once("c://xampp/htdocs/proyecto/view/username/show.php");  
    }

    public function mostrarEditar($id) {
        $tarea = $this->model->obtenerTareaPorId($id);
        if ($tarea) {
            return $tarea; // Retorna la tarea
        } else {
            echo "Tarea no encontrada.";
            return null; // Retorna null si no se encuentra la tarea
        }
    }
    
    
    
    public function editar($id, $titulo, $descripcion, $fecha_limite, $estado, $prioridad, $responsable, $etiquetas) {
        $this->model->editarTarea($id, $titulo, $descripcion, $fecha_limite, $estado, $prioridad, $responsable, $etiquetas);
       $tareas = $this->model->obtenerTareas();
        require_once("c://xampp/htdocs/proyecto/view/username/show.php");  
    }
}
?>

