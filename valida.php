<?php include("ligacao.php")?>
<?php
@session_start();

require_once __DIR__ . '/config.php';
//require_once __DIR__ . '/../bootstrap.php';
//use classes\authentication\Authentication;
//use classes\authentication\Users;

$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);
$foto= filter_input(INPUT_POST, 'userImageURL', FILTER_SANITIZE_STRING);
$p['email']=$email;
//echo $email;


 $sql = "SELECT `CodigoAtleta`, `Nome`, `Email`, FotoPerfil, Tipo FROM `Atletas` WHERE `Email`='" . $email . "'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $_SESSION["CodigoAtleta"]=$row["CodigoAtleta"];
    $_SESSION["Tipo"]=$row["Tipo"];
    $_SESSION["Nome"]=$row["Nome"];
    $_SESSION["Email"]=$row["Email"];
    $_SESSION["FotoPerfil"]=$foto;
  }
    if($_SESSION["Tipo"]!=1){
      echo "https://vianaconnect.alunos.esmonserrate.org/perfil.php";
    }else{
      echo "https://vianaconnect.alunos.esmonserrate.org/admin";
    }

}else {
  echo  "https://vianaconnect.alunos.esmonserrate.org/register.php";
}
?>
