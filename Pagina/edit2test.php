<?php
$IDrecetavar = $_POST ['a'];
$Chosesomething = $_POST ['b'];
$Newtext = $_POST ['c'];

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


$sql = "UPDATE recetas set $Chosesomething = '$Newtext' WHERE id = $IDrecetavar";
//$sql = "DELETE FROM recetas WHERE id = $IDrecetavar"; 
//$IDrecetavar //(cantidadd,ingredientess,recetass)
//VALUES ('$Cantidadint','$Ingredintevar','$recetavar')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>