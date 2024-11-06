<?php
class usernameModel {
    private $PDO;

    public function __construct() {
        require_once("c://xampp/htdocs/proyecto/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion(); 
    }

    public function crearTarea($titulo, $descripcion, $fecha_limite, $estado = 'Pendiente', $prioridad = 'Media', $responsable = null, $etiquetas = null) {
        $sql = "INSERT INTO Tarea (titulo, descripcion, fecha_limite, estado, prioridad, responsable, etiquetas)
                VALUES (:titulo, :descripcion, :fecha_limite, :estado, :prioridad, :responsable, :etiquetas)";
        
        $stmt = $this->PDO->prepare($sql);  
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':fecha_limite', $fecha_limite);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':prioridad', $prioridad);
        $stmt->bindParam(':responsable', $responsable);
        $stmt->bindParam(':etiquetas', $etiquetas);
        
        if ($stmt->execute()) {
            return $this->PDO->lastInsertId();
        } else {
            return false;
        }
    }

    public function eliminarTarea($id) {
        $query = "DELETE FROM Tarea WHERE id = :id";
        $stmt = $this->PDO->prepare($query);  
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function obtenerTareas() {
        $query = "SELECT * FROM Tarea";
        $stmt = $this->PDO->query($query);  
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editarTarea($id, $titulo, $descripcion, $fecha_limite, $estado, $prioridad, $responsable, $etiquetas) {
        $sql = "UPDATE Tarea SET 
                titulo = :titulo, 
                descripcion = :descripcion, 
                fecha_limite = :fecha_limite, 
                estado = :estado, 
                prioridad = :prioridad, 
                responsable = :responsable, 
                etiquetas = :etiquetas
                WHERE id = :id";
        
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':fecha_limite', $fecha_limite);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':prioridad', $prioridad);
        $stmt->bindParam(':responsable', $responsable);
        $stmt->bindParam(':etiquetas', $etiquetas);
    
        return $stmt->execute();
    }

    public function obtenerTareaPorId($id) {
        $sql = "SELECT * FROM Tarea WHERE id = :id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }
}
?>
