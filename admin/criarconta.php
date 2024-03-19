<?php
require "../ligacao.php";

$primeiro=$_GET["Primeiro ome"]; $ultimo=$_GET["Ultimo ome"]; $email=$_GET["Email"]; $passe=$_GET["Palavra passe"]; $confirmpasse=$_GET["Repetir palavra passe"];
$sql = "INSERT INTO `Atletas`
VALUES (?, ?, ?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("ssi", $primeiro, $ultimo, $email, $passe, $confirmpasses);
if ($stmt->execute() === TRUE) {
  $last_id = $conn->insert_id;
  echo "O novo registo foi criado com o id: $last_id";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
