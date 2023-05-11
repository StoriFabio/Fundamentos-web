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

$sql = "DELETE FROM produto WHERE id=3";
$sql = "DELETE FROM pessoa WHERE id=1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["NomeProduto"]. " " . $row["PesoProduto"].  " " . $row["PrecoProduto"]. "<br>";
    echo "cpf: " . $row["cpf"]. " - Name: " . $row["NomePessoa"]. " " . $row["IdadePessoa"].  "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>