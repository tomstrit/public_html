<?php 
include("ligacao.php");
@session_start();
?>
<!DOCTYPE html>
<html lang="pt">
	<head> <?php include "head.html";?>
		<link href='calendario/css/maincore.css' rel='stylesheet' />
		<link href='calendario/css/maindaygrid.css' rel='stylesheet' />
		<link rel="stylesheet" href="calendario/css/style.css">
	</head>
	<body id="page-top"> <?php include "menu.php";?>
		<!-- Masthead-->
		<header class="masthead">
			<div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
				<div class="d-flex justify-content-center">
					<div class="text-center">
						<h1 class="mx-auto my-0 text-uppercase">Localização LoRa</h1>
					</div>
				</div>
			</div>
		</header> <?php include "rodape.html";?>
	</body>
</html>