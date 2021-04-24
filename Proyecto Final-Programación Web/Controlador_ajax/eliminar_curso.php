<?php
    require_once ("../Modelo/modelo.php");

    $Eliminar_curso=new Cursos;

    if($_POST){
        $Eliminar_curso->Codigo=$_POST["delete_id"];
        $Eliminar_curso->Eliminar();
    }

?>