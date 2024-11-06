<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>

 <div class="container mt-5">
        <h2>Crear Tarea</h2>
        <form action="store.php" method="POST">
            <!-- Título -->
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>

            <!-- Descripción -->
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>

            <!-- Fecha de Límite -->
            <div class="mb-3">
                <label for="fecha_limite" class="form-label">Fecha Límite</label>
                <input type="datetime-local" class="form-control" id="fecha_limite" name="fecha_limite">
            </div>

            <!-- Estado -->
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-select" id="estado" name="estado">
                    <option value="Pendiente" selected>Pendiente</option>
                    <option value="En progreso">En progreso</option>
                    <option value="Completada">Completada</option>
                    <option value="Atrasada">Atrasada</option>
                </select>
            </div>

            <!-- Prioridad -->
            <div class="mb-3">
                <label for="prioridad" class="form-label">Prioridad</label>
                <select class="form-select" id="prioridad" name="prioridad">
                    <option value="Alta">Alta</option>
                    <option value="Media" selected>Media</option>
                    <option value="Baja">Baja</option>
                </select>
            </div>

            <!-- Responsable -->
            <div class="mb-3">
                <label for="responsable" class="form-label">Responsable</label>
                <input type="text" class="form-control" id="responsable" name="responsable">
            </div>

            <!-- Etiquetas -->
            <div class="mb-3">
                <label for="etiquetas" class="form-label">Etiquetas</label>
                <input type="text" class="form-control" id="etiquetas" name="etiquetas" placeholder="Ej: trabajo, importante, urgente">
                <small class="form-text text-muted">Usa comas para separar las etiquetas.</small>
            </div>

            <!-- Botón de Enviar -->
            <button type="submit" class="btn btn-primary">Crear Tarea</button>
        </form>
    </div>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>