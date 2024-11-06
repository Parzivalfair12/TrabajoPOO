<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>

<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 40px;
            color: #333;
        }

        h3 {
            margin-top: 30px;
            color: #333;
        }

        p {
            font-size: 18px;
            color: #555;
        }

        .btn {
            font-size: 16px;
            padding: 10px 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .list-group-item {
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .list-group-item:hover {
            background-color: #f1f1f1;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            font-size: 16px;
        }

        .d-flex {
            display: flex;
            justify-content: flex-start;
            gap: 15px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        footer {
            margin-top: 40px;
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container mt-4">
        <h1>Bienvenido a la aplicación de Tareas</h1>
        <p>Administra tus tareas de manera eficiente. Puedes crear, editar, eliminar y ver las tareas pendientes.</p>

        <h2>¿Qué deseas hacer?</h2>
        <div class="d-flex">
            <a href="/proyecto/view/username/create.php" class="btn btn-primary">Crear nueva tarea</a>
            <a href="/proyecto/view/username/show.php" class="btn btn-secondary">Ver tareas</a>
        </div>


        <h3>Estadísticas</h3>
        <ul class="list-group">
            <li class="list-group-item">Tareas pendientes: 5</li>
            <li class="list-group-item">Tareas completadas: 12</li>
            <li class="list-group-item">Tareas vencidas: 3</li>
        </ul>

        <h4>Guía rápida</h4>
        <p>Para comenzar, puedes:</p>
        <ul>
            <li><strong>Crear una nueva tarea</strong> haciendo clic en "Crear nueva tarea".</li>
            <li><strong>Ver todas tus tareas</strong> en "Ver tareas".</li>
            <li><strong>Editar o eliminar</strong> tareas existentes desde la lista de tareas.</li>
        </ul>
    </div>


<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
