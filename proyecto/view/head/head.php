<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
        echo (empty($_GET['id'])) 
        ? ((strpos($_SERVER['REQUEST_URI'],'create')) ? "Agregando nuevo usuario" : "Index")
        : ((strpos($_SERVER['REQUEST_URI'],'show')) ? "Detalles del registro ".$_GET['id'] : "Actualizar registro ".$_GET['id'] );
    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f7f6;
        padding: 0;
      }
      .navbar {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }
      .navbar-brand {
        font-weight: bold;
      }
      .navbar-nav .nav-item .nav-link {
        font-size: 1.1rem;
        padding: 10px 15px;
        transition: all 0.3s ease;
      }
      .navbar-nav .nav-item .nav-link:hover {
        background-color: #007bff;
        color: white;
      }
      .navbar-toggler {
        border-color: #007bff;
      }
      .dropdown-item:hover {
        background-color: #007bff;
        color: white;
      }
      .bg-dark {
        background-color: #343a40 !important;
      }
      .p-2 {
        padding: 10px;
      }

      h1, h2 {
        color: #343a40;
      }
      .content-container {
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
    </style>
  </head>
  <body>
    <div class="container-fluid bg-dark p-2 mb-3">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/proyecto/index.php">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tareas
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/proyecto/view/username/show.php">Listado de tareas</a></li>
                  <li><a class="dropdown-item" href="/proyecto/view/username/create.php">Agregar nuevas tareas</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </body>
</html>
