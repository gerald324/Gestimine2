<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
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
					<a href="index"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
				</li>
				<li>
					<a href="alertas"><i class="menu-icon fa fa-exclamation-triangle"></i>Alertas </a>
				</li><!--Esto redirecciona al aviso de alerta-->
				<li>
					<a href=<?php echo "cronograma"?>><i class="menu-icon fa fa-clipboard"></i><?php echo "Cronograma"?></a>
				</li>
				<li>
					<a href=<?php echo "plan_minero"?>><i class="menu-icon fa fa-clipboard"></i><?php echo "Plan Minero"?></a>
				</li>
				<li>
					<a href=<?php echo "perforacion"?>><i class="menu-icon fa fa-clipboard"></i><?php echo "Perforación"?></a>
				</li>
				<li>
					<a href=<?php echo "tronadura"?>><i class="menu-icon fa fa-clipboard"></i><?php echo "Tronadura"?></a>
				</li>
				<li>
					<a href=<?php echo "carguio"?>><i class="menu-icon fa fa-clipboard"></i><?php echo "Carguío"?></a>
				</li>
				<li>
					<a href=<?php echo "transporte"?>><i class="menu-icon fa fa-clipboard"></i><?php echo "Transporte"?></a>
				</li>
				<li>
					<a href=<?php echo "datos_mina"?>><i class="menu-icon fa fa-clipboard"></i><?php echo "Datos de Mina"?></a>
				</li>

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
				<a class="navbar-brand" href="./"><img src="<?php echo base_url(); ?>/assets/images/logo.png" alt="Logo"></a>
				<a class="navbar-brand hidden" href="./"><img src="<?php echo base_url(); ?>/assets/images/logo2.png" alt="Logo"></a>
				<a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
			</div>
		</div>
		<div class="top-right">
			<div class="header-menu">
				<div class="header-left">
					<button class="search-trigger"><i class="fa fa-search"></i></button>
					<div class="form-inline">
						<form class="search-form">
							<input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
							<button class="search-close" type="submit"><i class="fa fa-close"></i></button>
						</form>
					</div>

					<div class="dropdown for-notification">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-bell"></i>
							<span class="count bg-danger">3</span>
						</button>
						<div class="dropdown-menu" aria-labelledby="notification">
							<p class="red">You have 3 Notification</p>
							<a class="dropdown-item media" href="#">
								<i class="fa fa-check"></i>
								<p>Server #1 overloaded.</p>
							</a>
							<a class="dropdown-item media" href="#">
								<i class="fa fa-info"></i>
								<p>Server #2 overloaded.</p>
							</a>
							<a class="dropdown-item media" href="#">
								<i class="fa fa-warning"></i>
								<p>Server #3 overloaded.</p>
							</a>
						</div>
					</div>

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
						<a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

						<a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

						<a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

						<a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- /header -->
	<!-- Header-->
	<!--
		<div class="breadcrumbs">
			<div class="breadcrumbs-inner">
				<div class="row m-0">
					<div class="col-sm-4">
						<div class="page-header float-left">
							<div class="page-title">
								<h1>Dashboard</h1>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="page-header float-right">
							<div class="page-title">
								<ol class="breadcrumb text-right">
									<li><a href="#">Dashboard</a></li>
									<li><a href="#">Table</a></li>
									<li class="active">Basic table</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	-->
	<div class="content">
		<div class="animated fadeIn">
			<div class="row">

				<!-- NO BORRAR LO QUE SIGUE----------------------------------------------------------------------------------------------------------------------------------------->
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<strong class="card-title"><?php echo "Datos de Mina"; ?></strong>
							<button onclick="window.location.href='/Gestimine2/Planificador/editar'" type="button" class="btn btn-primary" style="float:right"><?php echo "Editar"?></button>
						</div>
						<div class="card-body">
							<table class="table">
								<!--thead class="thead-dark">
								<?php /*<tr>
									<th scope="col">#</th>
									<th scope="col">Infraestructura</th>
									<th scope="col">Sección</th>
									<th scope="col">Área</th>
									<th scope="col">Total</th>
									<th scope="col">Año 1</th>
									<th scope="col">Año 2</th>
									<th scope="col">Año 3</th>
									<th scope="col">Total</th>
								</tr-->*/ ;?>
								</thead-->
								<tbody>
								<tr>
									<th scope="row">1</th>
									<td><?php echo "Densidad Estéril"?></td>
									<td><?php echo "2.7"?></td>
									<td><?php echo "t/m3"?></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td><?php echo "Densidad Mineral"?></td>
									<td><?php echo "2.8"?></td>
									<td><?php echo "t/m3"?></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td><?php echo "Densidad con Dilusión"?></td>
									<td><?php echo "2.4"?></td>
									<td><?php echo "t/m3"?></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td><?php echo "Ley Estéril"?></td>
									<td><?php echo "0.2"?></td>
									<td><?php echo "%"?></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td><?php echo "Ley Mineral"?></td>
									<td><?php echo "0.7"?></td>
									<td><?php echo "%"?></td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td><?php echo "Ley Diluída"?></td>
									<td><?php echo "0.5"?></td>
									<td><?php echo "%"?></td>
								</tr>
								</tbody>
							</table>

						</div>
					</div>
				</div>
				<!-- NO BORRAR LO DE ARRIBA --------------------------------------------------------------------------------------------------------------------------------------------------->
				<?php /*LO DE MÁS ABAJO: MODULO*/?>
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<!--strong class="card-title"><?php echo "Módulo 1"; ?></strong-->
							<button onclick="window.location.href='/Gestimine2/Planificador/editar'" type="button" class="btn btn-primary" style="float:right"><?php echo "Editar"?></button>
						</div>
						<div class="card-body">
							<table class="table">
								<?php /*<thead class="thead-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Infraestructura</th>
									<th scope="col">Sección</th>
									<th scope="col">Área</th>
									<th scope="col">Total</th>
									<th scope="col">Año 1</th>
									<th scope="col">Año 2</th>
									<th scope="col">Año 3</th>
									<th scope="col">Total</th>
								</tr>
								</thead>*/
								?>
								<tbody>
								<tr>
									<th scope="row">1</th>
									<td><?php echo "Mineral Recuperado de los Módulos"; ?></td>
									<td><?php echo " "?></td>
									<td><?php echo " "?></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td><?php echo "Mineral Recuperado de los Pilares"; ?></td>
									<td><?php echo " "?></td>
									<td><?php echo "t"?></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td><?php echo "Ritmo de Extracción"; ?></td>
									<td><?php echo " "?></td>
									<td><?php echo "t/día"?></td>
								</tr>
								</tbody>
							</table>

						</div>
					</div>
				</div>
				<?php /*FIN DE MODULO
				Generar más módulos segun existan más módulos en base de datos
 				Generarlos antes de los totales de abajo
 				*/?>
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<table class="table">
								<thead class="thead-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col"><?php echo "Perforación"?></th>
								</tr>
								</thead>
								<tr>
									<th scope="row"> </th>
									<td><?php echo "Profundidad del tiro"?></td>
									<td><?php echo "3.2"?></td>
									<td><?php echo "m."?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>

				<?php /*PRODUCCION*/?>
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<strong class="card-title"><?php echo "Producción"; ?></strong>
							<button onclick="window.location.href='/Gestimine2/Planificador/editar'" type="button" class="btn btn-primary" style="float:right"><?php echo "Editar"?></button>
						</div>
						<div class="card-body">
							<table class="table">
								<tbody>
								<tr>
									<th scope="row">1</th>
									<td><?php echo "25"; ?></td>
									<td><?php echo "m2"; ?></td>
									<td><?php echo "25"; ?></td>
									<td><?php echo "Cantida de perforaciones"; ?></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td><?php echo "16"; ?></td>
									<td><?php echo "m2"; ?></td>
									<td><?php echo "25"; ?></td>
									<td><?php echo "cantidad de perforaciones"; ?></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td><?php echo "9"; ?></td>
									<td><?php echo "m2"; ?></td>
									<td><?php echo "13"; ?></td>
									<td><?php echo "cantidad de perforaciones"; ?></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td><?php echo "6.25"; ?></td>
									<td><?php echo "m2"; ?></td>
									<td><?php echo "8"; ?></td>
									<td><?php echo "cantidad de perforaciones"; ?></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td><?php echo "26"; ?></td>
									<td><?php echo "m2"; ?></td>
									<td><?php echo "27"; ?></td>
									<td><?php echo "cantidad de perforaciones"; ?></td>
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
<script src="assets/js/main.js"></script>


</body>
</html>