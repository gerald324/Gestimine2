<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ela Admin - HTML5 Admin Template</title>
	<meta name="description" content="Ela Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
	<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/lib/datatable/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">

		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="index_jefe_turno.html"><i class="menu-icon fa fa-check-square-o"></i>Tareas </a>
				</li>
				<li>
					<a href="trbajadores_jefe_turno"><i class="menu-icon fa fa-male"></i>Trabajadores </a>
				</li>
				<li>
					<a href="alertas.html"><i class="menu-icon fa fa-exclamation-triangle"></i>Alertas </a>
				</li><!--Esto redirecciona al aviso de alerta-->
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

	<!-- Header-->
	<header id="header" class="header">
		<div class="top-left">
			<div class="navbar-header">
				<a class="navbar-brand" href=""><img src="<?php echo base_url(); ?>/assets/images/logo.png" alt="Logo"></a>
				<a class="navbar-brand hidden" href=""><img src="<?php echo base_url(); ?>/assets/images/logo2.png" alt="Logo"></a>
				<a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
			</div>
		</div>
		<div class="top-right">
			<div class="header-menu">
				<div class="header-left">
					<div class="dropdown for-message">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-envelope"></i>
							<span class="count bg-primary">4</span>
						</button>
						<div class="dropdown-menu" aria-labelledby="message">
							<p class="red">You have 4 Mails</p>
							<a class="dropdown-item media" href="#">
								<span class="photo media-left"><img alt="avatar" src="<?php echo base_url(); ?>/assets/images/avatar/1.jpg"></span>
								<div class="message media-body">
									<span class="name float-left">Jonathan Smith</span>
									<span class="time float-right">Just now</span>
									<p>Hello, this is an example msg</p>
								</div>
							</a>
							<a class="dropdown-item media" href="#">
								<span class="photo media-left"><img alt="avatar" src="<?php echo base_url(); ?>/assets/images/avatar/2.jpg"></span>
								<div class="message media-body">
									<span class="name float-left">Jack Sanders</span>
									<span class="time float-right">5 minutes ago</span>
									<p>Lorem ipsum dolor sit amet, consectetur</p>
								</div>
							</a>
							<a class="dropdown-item media" href="#">
								<span class="photo media-left"><img alt="avatar" src="<?php echo base_url(); ?>/assets/images/avatar/3.jpg"></span>
								<div class="message media-body">
									<span class="name float-left">Cheryl Wheeler</span>
									<span class="time float-right">10 minutes ago</span>
									<p>Hello, this is an example msg</p>
								</div>
							</a>
							<a class="dropdown-item media" href="#">
								<span class="photo media-left"><img alt="avatar" src="<?php echo base_url(); ?>/assets/images/avatar/4.jpg"></span>
								<div class="message media-body">
									<span class="name float-left">Rachel Santos</span>
									<span class="time float-right">15 minutes ago</span>
									<p>Lorem ipsum dolor sit amet, consectetur</p>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="user-area dropdown float-right">
					<a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img class="user-avatar rounded-circle" src="<?php echo base_url(); ?>/assets/images/admin.jpg" alt="User Avatar">
					</a>

					<div class="user-menu dropdown-menu">
						<a class="nav-link" href="#"><i class="fa fa-user"></i>Mi Perfil</a>

						<a class="nav-link" href="#"><i class="fa fa-power-off"></i>Cerrar Sesión</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- /header -->
	<!-- Header-->

	<div class="content">
		<div class="animated fadeIn">
			<div class="row">

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<strong class="card-title">Personal del Turno</strong>
						</div>
						<div class="card-body">
							<table id="bootstrap-data-table" class="table table-striped table-bordered">
								<thead>
								<tr>
									<th>Nombre</th>
									<th>Rol</th>
									<th>Módulo</th>
									<th>Sector</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>Perforador</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Garrett Winters</td>
									<td>Detonador</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Ashton Cox</td>
									<td>Carguío</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Cedric Kelly</td>
									<td>Transporte</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Airi Satou</td>
									<td>Transporte</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Brielle Williamson</td>
									<td>Detonador</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Herrod Chandler</td>
									<td>Carguío</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Rhona Davidson</td>
									<td>Perforador</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Colleen Hurst</td>
									<td>Detonador</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Sonya Frost</td>
									<td>Perforador</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Jena Gaines</td>
									<td>Perforador</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Quinn Flynn</td>
									<td>Carguío</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Charde Marshall</td>
									<td>Transporte</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Haley Kennedy</td>
									<td>Perforador</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Tatyana Fitzpatrick</td>
									<td>Detonador</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Michael Silva</td>
									<td>Perforador</td>
									<td>
										<select name="module" id="module" class="form-control" required="true">
											<option value="1">Módulo 1</option>
											<option value="2">Módulo 2</option>
											<option value="3">Módulo 3</option>
										</select>
									</td>
									<td>
										<select name="sector" id="sector" class="form-control" required="true">
											<option value="1">Chimenea ventilación</option>
											<option value="2">Estoque Carguío</option>
											<option value="3">Galería undercut</option>
										</select>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div><!-- .animated -->
	</div><!-- .content -->


	<div class="clearfix"></div>

	<footer class="site-footer">
		<div class="footer-inner bg-white">
			<div class="row">
				<div class="col-sm-6">
					Copyright &copy; 2018 Ela Admin
				</div>
				<div class="col-sm-6 text-right">
					Designed by <a href="https://colorlib.com">Colorlib</a>
				</div>
			</div>
		</div>
	</footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/main.js"></script>


<script src="<?php echo base_url(); ?>/assets/js/lib/data-table/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/lib/data-table/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/init/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>


</body>
</html>
