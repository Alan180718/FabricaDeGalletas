<!-- <html>
<head>
<title>Conecting to MYSQL</title>
</head>
<body> -->

<?php

// $Ingredientevar = $_POST ["a"];
// $Cantidadint = $_POST ["b"];

// if($Ingredientevar === "" || $Cantidadint === ""){
//   echo json_encode("Llena todo ojt")
// }else{
//   echo json_encode("Correcto: <br>a:".$Ingredientevar."<br>b:".$Cantidadint);
// }
$Ingredientevar = $_POST ['a'];
$Cantidadint = $_POST ['b'];

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

$sql = "INSERT INTO ingredientes (Ingrediente, Cantidad)
VALUES ('$Ingredientevar', '$Cantidadint')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  
</body>

</html> -->
