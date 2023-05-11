<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atividade04";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO produto (NomeProduto) VALUES ('Arroz')";
$sql = "INSERT INTO produto (PesoProduto) VALUES ('5')";
$sql = "INSERT INTO produto (PrecoProduto) VALUES ('10')";

$sql = "INSERT INTO pessoa (NomePessoa) VALUES ('Maria')";
$sql = "INSERT INTO pessoa (IdadePessoa) VALUES ('20')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>