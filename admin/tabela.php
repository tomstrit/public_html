<?php @session_start();?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title class="tbTitle">VianaConnect: Admin</title>
		<link rel="icon" type="image/x-icon" href="../imagens/logo.png" />
		<!-- Custom fonts for this template-->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		</link>
		<!-- Custom styles for this template-->
		<link href="css/sb-admin-2.css" rel="stylesheet">
		<!-- ========================================================= -->
		<link rel="stylesheet" href="tabelas/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="tabelas/assets/css/datatables.min.css">
	</head>
	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">
			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   				 <!-- Sidebar - Brand -->
   				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
   				    <div class="sidebar-brand-icon">
   				        <img src="../imagens/logopequeno.png">
   				    </div>
   				    <div class="sidebar-brand-text mx-3">VianaConnect</div>
   				</a>

    			<!-- Divider -->
    			<hr class="sidebar-divider">

				<li class="nav-item">
					<a class="nav-link" href="geriratletas.php">
						<i class="fas fa-fw fa-running"></i>
						<span>Atletas</span>
					</a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<i class="fas fa-fw fa-calendar"></i>
						<span>Provas</span>
					</a>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="gerirprovas.php">Adicionar Provas</a>
							<a class="collapse-item" href="gerirtipolocal.php">Adicionar tipo de local</a>
							<a class="collapse-item" href="gerirtipoprova.php">Adicionar tipo de prova</a>
							<a class="collapse-item" href="gerirdorsal.php">Adicionar dorsal</a>
						</div>
					</div>
				</li>

    			<!-- Divider -->
    			<hr class="sidebar-divider">

    			<li class="nav-item">
    			    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    			        <i class="fas fa-solid fa-map"></i>
    			        <span>LoRa</span>
    			    </a>
    			    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    			        <div class="bg-white py-2 collapse-inner rounded">
    			            <a class="collapse-item" href="gerirlora.php">Gerir LoRa</a>
							<a class="collapse-item" href="gerirpercurso.php">Gerir percursos</a>
							<a class="collapse-item" href="gerirposicao.php">Gerir posição</a>
    			        </div>
    			    </div>
    			</li>

    			<!-- Divider -->
    			<hr class="sidebar-divider">

				<li class="nav-item">
        			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesSite" aria-expanded="true" aria-controls="collapsePagesSite">
            			<i class="fas fa-solid fa-window-maximize"></i>
            			<span>Site</span>
        			</a>
        			<div id="collapsePagesSite" class="collapse" aria-labelledby="headingPagesSite" data-parent="#accordionSidebar">
            			<div class="bg-white py-2 collapse-inner rounded">
                			<a class="collapse-item" href="gerirdesportos.php">Gerir desportos</a>
							<a class="collapse-item" href="geriratletasvianenses.php">Gerir atletas vianenses</a>
                			<a class="collapse-item" href="gerirfotos.php">Gerir fotos</a>
							<a class="collapse-item" href="/index.php">Ir para o site</a>
            			</div>
        			</div>
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
					<!-- Topbar -->
					<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					    <!-- Sidebar Toggle (Topbar) -->
					    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					        <i class="fa fa-bars"></i>
					    </button>

					    <!-- Topbar Search -->
					    <form
					        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
					        <div class="input-group">
					            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar..."
					                aria-label="Search" aria-describedby="basic-addon2">
					            <div class="input-group-append">
					                <button class="btn btn-primary" type="button">
					                    <i class="fas fa-search fa-sm"></i>
					                </button>
					            </div>
					        </div>
					    </form>
					    <!-- Topbar Navbar -->
					    <ul class="navbar-nav ml-auto">
					        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
					        <li class="nav-item dropdown no-arrow d-sm-none">
					            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
					                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                <i class="fas fa-search fa-fw"></i>
					            </a>
					            <!-- Dropdown - Messages -->
					            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
					                aria-labelledby="searchDropdown">
					                <form class="form-inline mr-auto w-100 navbar-search">
					                    <div class="input-group">
					                        <input type="text" class="form-control bg-light border-0 small"
					                            placeholder="Search for..." aria-label="Search"
					                            aria-describedby="basic-addon2">
					                        <div class="input-group-append">
					                            <button class="btn btn-primary" type="button">
					                                <i class="fas fa-search fa-sm"></i>
					                            </button>
					                        </div>
					                    </div>
					                </form>
					            </div>
					        </li>
					        <!-- Nav Item - User Information -->
					        <li class="nav-item dropdown no-arrow">
					            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
					                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                <span class="mr-2 d-none d-lg-inline text-gray-600 small" id="Nome">...</span>
					                <img class="img-profile rounded-circle" id="FotoPerfil" src="...">
					            </a>
					        </li>
					    </ul>
					</nav>
					<!-- End of Topbar -->
					<!-- Begin Page Content -->
					<div class="container-fluid">
						<h1 class="h3 mb-2 text-gray-800 tbTitle">Adicionar provas:</h1>
						<!-- =======  Data-Table  = Start  ========================== -->
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="data_table">
										<table id="example" class="table table-striped table-bordered">
											<thead class="table titleTable">
												<tr>
													<th>Name</th>
													<th>
														<button type="button" class="btn btn-info" id="bnew" data-toggle="modal" data-target="#frmIU" data-do="i">
															<i class="fas fa-fw fa-plus"></i>
														</button>
														<button type="button" class="btn btn-info" id="bcsv" data-toggle="modal" data-target="#frmCSV" data-do="c">
															<i class="fas fa-fw fa-inbox"></i>
														</button>
													</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody id="bodyTable">
												<tr>
													<td>Tiger Nixon</td>
													<td>
														<a href='' title='ver' class="bsee">
															<button type="button" class="btn btn-outline-info" data-do="e">
															<i class="fas fa-solid fa-eye"></i>
															</button>
														</a>
														<button type="button" class="btn btn-outline-info bedit" data-toggle="modal" data-target="#frmIU" data-do="e">
															<i class="fas fa-fw fa-pen"></i>
														</button>
														<button type="button" class="btn btn-outline-info bdel" data-toggle="modal" data-target="#frmD" data-do="d">
															<i class="fas fa-fw fa-trash"></i>
														</button>
													</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- =======  Data-Table  = End  ===================== -->
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
		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>
		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>
		<!-- The Modal Inserir ou Actualizar-->
		<div class="modal" id="frmIU">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="" method="post">
						<input type="hidden" id="do" name="do" value="ci">
						<!-- Modal Header -->
						<div class="modal-header">
							<h1 class="modal-title" id="frmIOTitulo">Add/Update</h1>
							<button type="button" class="close" data-dismiss="modal">×</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<h3 class="tbTitle">Some text to enable scrolling..</h3>
							<div class="row">
								<div class="col-sm-12" id="frmIOH3">
									<div class="text">
										<div class="form-group">
											<label id="textL">Text input:</label>
											<input type="text" class="form-control required" id="txtTarefa" value="">
										</div>
									</div>
									<div class="password">
										<div class="form-group">
											<label id="passL">Pass input:</label>
											<input type="password" class="form-control required" id="passN" value="">
										</div>
									</div>
									<div class="select">
										<div class="form-group">
											<label id="selectL">List:</label>
											<select class="form-select" id="selectLst">
												<option value="icon-atom">ÁtomoXXX [icon-atom]</option>
											</select>
										</div>
									</div>
									<div class="date">
										<div class="form-group">
											<label id="dataL">Date:</label>
											<input type="datetime-local" class="form-control required" name="txtData" id="txtData" value="txtData">
										</div>
									</div>
									<div class="textArea">
										<div class="form-group">
										<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
											<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
											<label id="textAreaL">Text area:</label>
											<textarea id="textAreaN">...</textarea>
										</div>
									</div>
									<div class="check">
										<div class="form-group">
											<div class="checkbox">
												<label>
													<input type="checkbox" id="checkN" checked>checkbox sample <br>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<div class="form-group">
								<p id="teste"></p>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								<button class="btn btn-primary" aria-hidden="true" type="submit">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- The Modal delete-->
		<div class="modal fade" id="frmD">
			<div class="modal-dialog">
				<form action="" method="post">
					<input type="hidden" name="do" value="cd">
					<input type="hidden" id="deleteKey" name="id" value="">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Confirmation</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body" id="perguntaT">
							<p>Do you want delete the record?</p>
							<p id="delId"></p>
							<p id="delText"></p>
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- The Modal import-->
		<div class="modal" id="frmCSV">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="" method="post">
						<input type="hidden" name="do" value="csv">
						<!-- Modal Header -->
						<div class="modal-header">
							<h1 class="modal-title" id="frmITitulo">Import</h1>
							<button type="button" class="close" data-dismiss="modal">×</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<h3 class="tbTitle">Table Title</h3>
							<p> The fields must be imported on this order: <code id="importLst">First,Secund,Third,Last</code>
							</p>
							<p> You may add a <code>,</code> on the end of the line </p>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="comment">Lines to be added:</label>
										<textarea class="form-control" rows="10" id="txtCSV" name="txtCSV"></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<input type="checkbox" id="doUpdate" name="doUpdate">
										<label for="comment">Se existe o registo actualiza-o:</label>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<div class="form-group">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								<button class="btn btn-primary" aria-hidden="true" type="submit">Import</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- ============ Java Script Files  ================== -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Core plugin JavaScript-->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
		<!-- Custom scripts for all pages-->
		<script src="js/sb-admin-2.min.js"></script>
		<!-- Page level plugins -->
		<script src="vendor/chart.js/Chart.min.js"></script>
		<script src="vendor/datatables/jquery.dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="tabelas/assets/js/datatables.min.js"></script>
		<script src="tabelas/assets/js/pdfmake.min.js"></script>
		<script src="tabelas/assets/js/vfs_fonts.js"></script>
		<script src="tabelas/assets/js/custom.js"></script>
		<script src="/js/code/config.js"></script>
		<script src="/js/code/valida.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
		<script id="textAreaS">
			//caixa de mensagens
			$(document).ready(function() {
				$('#textAreaN').summernote();
			});
		</script>
		<script>
			renderAutentica()
		</script>
    </body>
</html>