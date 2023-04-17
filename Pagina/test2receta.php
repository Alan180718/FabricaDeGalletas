<?php
$recetavar = $_POST ['a'];
$Ingredintevar = $_POST ['b'];
$Cantidadint = $_POST ['c'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admi_ingr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO recetas (cantidadd,ingredientess,recetass)
VALUES ('$Cantidadint','$Ingredintevar','$recetavar')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>