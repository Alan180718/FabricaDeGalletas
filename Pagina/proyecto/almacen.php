<?php

$ingrediente = isset($_POST['txt_ingrediente']) ? $_POST['txt_ingrediente'] : '';
$cantidad = isset($_POST['int_cantidad']) ? $_POST['int_cantidad'] : '';

try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=admi_ingr", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO ingredientes(ingrediente, cantidad) VALUES(?,?)');
    $pdo->bindParam(1, $ingrediente);
    $pdo->bindParam(2, $cantidad);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}