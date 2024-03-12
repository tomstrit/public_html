<?php @session_start(); 

if(!isset($_SESSION["CodigoAtleta"])){
	header('Location: https://vianaconnect.alunos.esmonserrate.org/login.php');
}
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title class="tbTitle">VianaConnect</title>
		<link rel="icon" type="imagens/x-icon" href="imagens/logo.png"/>
		<!-- Custom fonts for this template-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		</link>
		<!-- Custom styles for this template-->
		<link href="admin/css/sb-admin-2.css" rel="stylesheet">
		<!-- ========================================================= -->
		<link rel="stylesheet" href="admin/tabelas/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="admin/tabelas/assets/css/datatables.min.css">
	</head>
	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">
			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
					<div class="sidebar-brand-icon">
						<img src="imagens/logopequeno.png">
					</div>
					<div class="sidebar-brand-text mx-3">VianaConnect</div>
				</a>
				<!-- Divider -->
				<hr class="sidebar-divider my-0">
				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="editperfil.php">
					<i class="fas fa-fw fa-user-edit"></i>
						<span>Editar perfil</span>
					</a>
				</li>
				<!-- Divider -->
				<hr class="sidebar-divider">
				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link" href="logout.php">
						<i class="fas fa-fw fa-leave"></i>
						<span>Log Out</span>
					</a>
				</li>
				<!-- Divider -->
				<hr class="sidebar-divider">
				<li class="nav-item ">
					<a class="nav-link" href="index.php">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Outra coisa</span>
					</a>
				</li>
				<!-- Divider -->
				<hr class="sidebar-divider">
				<!-- Sidebar Toggler (Sidebar) -->
				<div class="text-center d-none d-md-inline">
					<button class="rounded-circle border-0" id="sidebarToggle"></button>
				</div>
			</ul>
			<!-- End of Sidebar -->
			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">
				<!-- Main Content -->
				<div id="content">
					<!-- Begin Page Content -->
					<div class="container-fluid">
						<br>
					    <div class="row">
					        <div class="col-lg-12">
					            <div style="display: flex; align-items: center; justify-content: flex-end;">
					                <h1 class="h3 mb-2 text-black-800 tbTitle">
					                    <span style="font-size: 36px; font-weight: bold;"><i>Olá <?=$_SESSION["Nome"]?>!</i></span>
					                </h1>
					                <img src="<?=$_SESSION["FotoPerfil"]?>" alt="Foto de Perfil" style="width: 120px; height: 120px; border-radius: 50%; margin-left: 15px;">
					            </div>
					        </div>
							<h2>Suas provas realizadas:</h2>
							<!-- =======  Data-Table  = Start  ========================== -->
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="data_table">
										<table id="example" class="table table-striped table-bordered">
											<thead class="table titleTable">
												<tr>
													<th>Prova</th>
													<th>Data</th>
													<th>Tempo</th>
													<th>Classificação Geral</th>
													<th>Classificação Escalão</th>
													<th>
														<button type="button" class="btn btn-info" id="bnew" data-toggle="modal" data-target="#frmIU" data-do="i">
															<i class="fas fa-fw fa-plus"></i>
														</button>
														<button type="button" class="btn btn-info" id="bcsv" data-toggle="modal" data-target="#frmCSV" data-do="c">
															<i class="fas fa-fw fa-inbox"></i>
														</button>
													</th>
												</tr>
											</thead>
											<tbody id="bodyTable">
												<tr>
													<td>Meia Maratona Manuela Machado</td>
													<td>21/01/2024</td>
													<td>01:12:34</td>
													<td>1º</td>
													<td>1º</td>
													<td>
														<button type="button" class="btn btn-outline-info bedit" data-toggle="modal" data-target="#frmIU" data-do="e">
															<i class="fas fa-fw fa-pen"></i>
														</button>
														<button type="button" class="btn btn-outline-info bdel" data-toggle="modal" data-target="#frmD" data-do="d">
															<i class="fas fa-fw fa-trash"></i>
														</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- =======  Data-Table  = End  ===================== -->
					    </div>
					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- End of Main Content -->
				<!-- Footer -->
				<footer class="sticky-footer bg-white">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>Copyright &copy; VianaConnect 2024</span>
						</div>
					</div>
				</footer>
				<!-- End of Footer -->
			</div>
			<!-- End of Content Wrapper -->
		</div>
		<!-- End of Page Wrapper -->
		<!-- ============ Java Script Files  ================== -->
		<script src="admin/vendor/jquery/jquery.min.js"></script>
		<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Core plugin JavaScript-->
		<script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
		<!-- Custom scripts for all pages-->
		<script src="admin/js/sb-admin-2.min.js"></script>
		<!-- Page level plugins -->
		<script src="admin/vendor/chart.js/Chart.min.js"></script>
		<script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
		<script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="admin/tabelas/assets/js/datatables.min.js"></script>
		<script src="admin/tabelas/assets/js/pdfmake.min.js"></script>
		<script src="admin/tabelas/assets/js/vfs_fonts.js"></script>
		<script src="admin/tabelas/assets/js/custom.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
		<script id="textAreaS">
			//caixa de mensagens
			$(document).ready(function() {
				$('#textAreaN').summernote();
			});
		</script>
	</body>
</html>