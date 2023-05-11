<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atividade04";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE produto SET PrecoProduto='25' WHERE id=2";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "id: " . $row["id"]. " - Name: " . $row["nomeProduto"]. " " . $row["PesoProduto"].  " " . $row["PrecoProduto"]. "<br>";
      echo "cpf: " . $row["cpf"]. " - Name: " . $row["NomePessoa"]. " " . $row["IdadePessoa"].  "<br>";
    }
  } else {
    echo "0 results";
  }

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>