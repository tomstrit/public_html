<?php
$servername = "localhost";
$username = "vianaconnect";
$password = "n7CNaLGU1Tg9SeZ";
$db= "vianaconnect";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
  die("Falhou a ligação: " . $conn->connect_error);
}
//echo "Ligação bem sucedida";

?>