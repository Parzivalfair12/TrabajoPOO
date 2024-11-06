<?php require_once("c://xampp/htdocs/proyecto/view/head/head.php"); ?>

<div class="container mt-5">
    <h2>Listado de Tareas</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha de Creación</th>
                <th>Fecha Límite</th>
                <th>Estado</th>
                <th>Prioridad</th>
                <th>Responsable</th>
                <th>Etiquetas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($tareas as $tarea): ?>
            <tr>
                <td><?php echo $tarea['id']; ?></td>
                <td><?php echo $tarea['titulo']; ?></td>
                <td><?php echo $tarea['descripcion']; ?></td>
                <td><?php echo $tarea['fecha_creacion']; ?></td>
                <td><?php echo $tarea['fecha_limite']; ?></td>
                <td><?php echo $tarea['estado']; ?></td>
                <td><?php echo $tarea['prioridad']; ?></td>
                <td><?php echo $tarea['responsable']; ?></td>
                <td><?php echo $tarea['etiquetas']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $tarea['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="delete.php?id=<?php echo $tarea['id']; ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once("c://xampp/htdocs/proyecto/view/head/footer.php"); ?>
