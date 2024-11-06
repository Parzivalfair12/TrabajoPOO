<?php
require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $id = $_GET['id'];

    $obj = new usernameController();

    $obj->eliminar($id);
?>
