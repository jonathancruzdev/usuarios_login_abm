<?php
    require_once ('../class/Roles.php');
    if(  isset($_GET['id']) ){
        $id = $_GET['id'];

        $rol = new Rol();
        $rol->setId($id);

        $rol->borrar();

        header('location: ../roles/');
    }

?>