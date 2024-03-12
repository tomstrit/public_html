<?php
@session_start();

      $_SESSION["CodigoAtleta"]=null;
      $_SESSION["Nome"]=null;
      $_SESSION["Email"]=null;
      $_SESSION["FotoPerfil"]=null;
      $_SESSION["Tipo"]=null;

      header('Location: https://vianaconnect.alunos.esmonserrate.org/admin');
?>