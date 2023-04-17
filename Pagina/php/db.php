<?php
//Configuración para acceder a base de datos
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passwordbd = "";
    $dbname = "admi_ingre";

    $conectar = mysqli_connect($hostname, $usuariodb, $passwordbd, $dbname);
    return $conectar;
}