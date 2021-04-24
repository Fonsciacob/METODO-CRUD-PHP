<?php
    require_once ("../Modelo/modelo.php");

    $Add_Curso = new Cursos;

    if($_POST){
        $Add_Curso->Nombre=$_POST["name"];
        $Add_Curso->Precio=$_POST["price"];
        $Add_Curso->Codigo=$_POST["code"];

        $Add_Curso->Crear(); 
    }

?>