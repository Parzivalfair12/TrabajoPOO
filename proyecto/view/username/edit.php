<?php
require_once("c://xampp/htdocs/proyecto/view/head/head.php");
require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");

$obj = new usernameController();
$tarea = $obj->mostrarEditar($_GET['id']); // Obtienes la tarea con el id desde el controlador
?>

<div class="container mt-5">
    <h2>Editar Tarea</h2>
    <?php if ($tarea): ?>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $tarea['id']; ?>">

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" value="<?php echo htmlspecialchars($tarea['titulo']); ?>" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" name="descripcion" required><?php echo htmlspecialchars($tarea['descripcion']); ?></textarea>
            </div>

            <div class="form-group">
                <label for="fecha_limite">Fecha Límite</label>
                <input type="datetime-local" class="form-control" name="fecha_limite" value="<?php echo $tarea['fecha_limite']; ?>" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="estado" value="<?php echo htmlspecialchars($tarea['estado']); ?>" required>
            </div>

            <div class="form-group">
                <label for="prioridad">Prioridad</label>
                <input type="text" class="form-control" name="prioridad" value="<?php echo htmlspecialchars($tarea['prioridad']); ?>" required>
            </div>

            <div class="form-group">
                <label for="responsable">Responsable</label>
                <input type="text" class="form-control" name="responsable" value="<?php echo htmlspecialchars($tarea['responsable']); ?>" required>
            </div>

            <div class="form-group">
                <label for="etiquetas">Etiquetas</label>
                <input type="text" class="form-control" name="etiquetas" value="<?php echo htmlspecialchars($tarea['etiquetas']); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    <?php else: ?>
        <p>Tarea no encontrada.</p>
    <?php endif; ?>
</div>

<?php require_once("c://xampp/htdocs/proyecto/view/head/footer.php"); ?>
