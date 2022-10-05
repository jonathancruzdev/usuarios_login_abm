<?php
    require_once ('../class/Roles.php');
    if(  isset($_GET['id']) ){
        $id = $_GET['id'];
        echo $id;

        $rol = new Rol();
        $rol->setId($id);

        $rol->borrar();

        header('location: ../roles/index.php');
    }

?>