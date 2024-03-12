<?php
@session_start();
if(!isset($_SESSION["Tipo"])){
    header('Location: https://vianaconnect.alunos.esmonserrate.org/login.php');
}else{
    if($_SESSION["Tipo"]!=1){
        header('Location: https://vianaconnect.alunos.esmonserrate.org/admin/erro.php');
    }
}
?>