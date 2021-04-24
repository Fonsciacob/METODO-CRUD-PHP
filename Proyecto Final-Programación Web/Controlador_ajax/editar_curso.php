<?php
    require_once ("../Modelo/modelo.php");

    $Conectar = new Cursos;

    if($_POST){
        $Conectar->Nombre=$_POST["edit_name"];
        $Conectar->Precio=$_POST["edit_price"];
        $Conectar->Codigo=$_POST["edit_code"];

        $Conectar->Actualizar(); 
    }

?>