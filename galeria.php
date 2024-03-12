<?php 
include("ligacao.php");
@session_start();
?>
<!DOCTYPE html>
<html lang="pt">
    
    <head>
        <?php include "head.html";?>
        <link href='calendario/css/maincore.css' rel='stylesheet' />
        <link href='calendario/css/maindaygrid.css' rel='stylesheet' />
        <link rel="stylesheet" href="calendario/css/style.css">
    </head>

    <body id="page-top">
        <?php include "menu.php";?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Galeria</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- Fotos-->
        <div class="galeria">
            <?php
                $sql = "SELECT `CodigoFoto`, `Nome`, `Ficheiro`, `CodigoProva` FROM `Fotos`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
            ?>
            <div class="imagem">
                <img src="<?=$row["Ficheiro"];?>" alt="<?=$row["CodigoProva"];?>">
            </div>
            <?php
                }
                }
            ?>
        </div>
        <?php include "rodape.html";?>
    </body>
</html>
