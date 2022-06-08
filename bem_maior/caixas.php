<?php ob_start('comprimir_pagina'); ?>
<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Bem Maior</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />

	<!--  Paper Dashboard core CSS    -->
	<link href="./assets/css/paper-dashboard.css" rel="stylesheet" />

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="./assets/css/demo.css" type="text/css" rel="stylesheet" />

	<!--  Fonts and icons     -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="./assets/css/themify-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/bar.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-background-color="brown" data-active-color="danger">
			
			<div class="logo">
				<a href="../bemmaior/" class="simple-text logo-mini">
					BM
				</a>

				<a href="../bemmaior/" class="simple-text logo-normal">
					<b>Bem Maior</b>
				</a>
			</div>
			<?php $itens = file_get_contents('./assets/links/user.php');
			echo $itens; ?>
			<ul class="nav">
				<li class="active">
					<a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
						<i class="ti-panel"></i>
						<p>Dashboard
							<b class="caret"></b>
						</p>
					</a>
					<div class="collapse in" id="dashboardOverview">
						<ul class="nav">
							<li>
								<a href="./">
									<span class="sidebar-mini">V</span>
									<span class="sidebar-normal">Visão</span>
								</a>
							</li>
							<li>
								<a href="balanca">
									<span class="sidebar-mini">B</span>
									<span class="sidebar-normal">Balança</span>
								</a>
							</li>
							<li class="active">
								<a href="caixas">
									<span class="sidebar-mini">C</span>
									<span class="sidebar-normal">Caixas</span>
								</a>
							</li>
							<li>
								<a href="updates">
									<span class="sidebar-mini">U</span>
									<span class="sidebar-normal">Updates</span>
								</a>
							</li>
						</ul>
					</div>
				</li>				
			</ul>
		</div>
	</div>

	<div class="main-panel">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-minimize">
					<button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar bar1"></span>
						<span class="icon-bar bar2"></span>
						<span class="icon-bar bar3"></span>
					</button>
					<a class="navbar-brand" href="#Dashboard">
						Caixas
					</a>
					<?php $version = file_get_contents('../version.php'); echo $version; ?>
				</div>
				<div class="collapse navbar-collapse">

					<form class="navbar-form navbar-left navbar-search-form" role="search">
				</div>
			</div>
		</nav>

		<div class="content">
			<div class="container-fluid">
				<div class="row">

					<!-- Caixa 21 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 21</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa21" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa21").load("./assets/links/caixas/caixa21/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Caixa 22 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 22</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa22" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa22").load("./assets/links/caixas/caixa22/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Caixa 23 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 23</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa23" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa23").load("./assets/links/caixas/caixa23/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Caixa 24 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 24</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa24" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa24").load("./assets/links/caixas/caixa24/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Caixa 25 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 25</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa25" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa25").load("./assets/links/caixas/caixa25/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Caixa 26 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 26</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa26" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa26").load("./assets/links/caixas/caixa26/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Caixa 27 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 27</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa27" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa27").load("./assets/links/caixas/caixa27/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Caixa 28 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 28</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa28" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa28").load("./assets/links/caixas/caixa28/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Caixa 29 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 29</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa29" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa29").load("./assets/links/caixas/caixa29/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Caixa 30 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 30</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa30" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa30").load("./assets/links/caixas/caixa30/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Caixa 31 -->
					<div class="col-lg-2 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p><b>CX 31</b></p>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">

										<span id="caixa31" class="text-center">
											<script type="text/javascript">
												var auto_refresh = setInterval(
													function() {
														$("#caixa31").load("./assets/links/caixas/caixa31/ping.php").fadeIn("slow");
													}, 10000); // refreshing after every 15000 milliseconds
											</script>
										</span>

									</div>
									<i class="ti-desktop"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>

	</div>
	</div>
</body>

<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
<script src="././assets/js/jquery.min.js" type="text/javascript"></script>
<script src="././assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="././assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="././assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Forms Validations Plugin -->
<script src="././assets/js/jquery.validate.min.js"></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src="././assets/js/es6-promise-auto.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="././assets/js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="././assets/js/bootstrap-datetimepicker.js"></script>

<!--  Select Picker Plugin -->
<script src="././assets/js/bootstrap-selectpicker.js"></script>

<!--  Switch and Tags Input Plugins -->
<script src="././assets/js/bootstrap-switch-tags.js"></script>

<!-- Circle Percentage-chart -->
<script src="././assets/js/jquery.easypiechart.min.js"></script>

<!--  Charts Plugin -->
<script src="././assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="././assets/js/bootstrap-notify.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src="././assets/js/sweetalert2.js"></script>

<!-- Vector Map plugin -->
<script src="././assets/js/jquery-jvectormap.js"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Wizard Plugin    -->
<script src="././assets/js/jquery.bootstrap.wizard.min.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src="././assets/js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src="././assets/js/jquery.datatables.js"></script>

<!--  Full Calendar Plugin    -->
<script src="././assets/js/fullcalendar.min.js"></script>

<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src="././assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
<script src="././assets/js/demo.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		demo.initStatsDashboard();
		demo.initVectorMap();
		demo.initCirclePercentage();
	});
</script>

</html>
<?php
ob_end_flush();
function comprimir_pagina($buffer)
{
	$busca = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
	$reemplaza = array('>', '<', '\\1');
	return preg_replace($busca, $reemplaza, $buffer);
}
?>