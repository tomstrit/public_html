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
                        <h1 class="mx-auto my-0 text-uppercase">Atletas Vianenses</h1>
                    </div>
                </div>
            </div>
        </header>
        <br>
        <!-- Atletas-->

        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php
                    $sql = "SELECT `CodigoVianense`, `Nome`, `Descricao`, `Foto` FROM `AtletasVianenses`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?=$row["Foto"];?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row["Nome"];?></h5>
                            <p class="card-text"><?=$row["Descricao"];?></p>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    }
                ?>
            </div>
        </div>
    
        <?php include "rodape.html";?>
    </body>
</html>
