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
	<link href="./assets/css/demo.css" rel="stylesheet" />

	<!--  Fonts and icons     -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="./assets/css/themify-icons.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-background-color="brown" data-active-color="danger">

			<div class="logo">
				<a href="../bemmaior/" class="simple-text logo-mini">
					<b>BM</b>
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
							<li class="active">
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
							<li>
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
						Visão
					</a>
					<?php $version = file_get_contents('./version.php');
					echo $version; ?>
				</div>
				<div class="collapse navbar-collapse"></div>
			</div>
		</nav>

		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-server"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p>SRV AD</p>
											<?php
											$df = round(disk_free_space("C:") / 1024 / 1024 / 1024);
											print("$df GB");
											?>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">
										<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" rel="tooltip" title="Disco livre SRV-AD."></i>
									</div>
									<i class="ti-server"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="ti-server"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p>SRV SISTEMA</p>
											<?php
											$df = round(disk_free_space("G:") / 1024 / 1024 / 1024);
											print("$df GB");
											?>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">
										<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" rel="tooltip" title="Disco livre SRV-Banco"></i>
									</div>
									<i class="ti-server"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Card 2075 -->
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-success text-center">
											<i class="ti-zip"></i>
										</div>
									</div>

									<div class="col-xs-7">
										<div class="numbers">
											<p>v2075</p>
											<button class="btn btn-xs btn-fill" type="button">
												<?php
												$url2075 = "http://servicos.pcinformatica.com.br/autoservico/instaladores/2075_/";
												$headers = @get_headers($url2075);
												if ($headers && strpos($headers[0], '200')) {
													$url = 'http://servicos.pcinformatica.com.br/autoservico/instaladores/2075_/';
													$dadosSite = file_get_contents($url);
													$var1 = explode('<A HREF="/autoservico/instaladores/2075_/', $dadosSite);
													$var2 = explode('_PCSIS2075.ZIP"', $var1[1]);
													echo "<a href='http://servicos.pcinformatica.com.br/autoservico/instaladores/2075_/" . $var2[0] . "_PCSIS2075.ZIP'>Baixar</a>";
												} else {
													echo "Indisponível";
												};
												?>
											</button>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">
										<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" rel="tooltip" title="
											<?php
											$url2075 = "http://servicos.pcinformatica.com.br/autoservico/instaladores/2075_/";
											$headers = @get_headers($url2075);

											if ($headers && strpos($headers[0], '200')) {
												$url = 'http://servicos.pcinformatica.com.br/autoservico/instaladores/2075_/';
												$dadosSite = file_get_contents($url);
												$var1 = explode('</A><br><br> ', $dadosSite);
												$var2 = explode(" AM", $var1[1]);

												//Quando falhar no portal conferir a hora, PM ou AM
												$var3 = explode('30.', $dadosSite);
												$var4 = explode("_PCSIS2075.ZIP", $var3[1]);
												echo "30." . $var4[0] . " " . $var2[0];
											} else {
												echo "Indisponível";
											}
											?>
										"> </i>
									</div>
									<i class="ti-zip"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Card Backup -->
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-success text-center">
											<i class="ti-cloud"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>Backup Cloud</p>

											<?php
											$yesterday = date("d") - 1;
											$month = date("m");

											if (file_exists('C:/users/administrador/backup/banco'.$yesterday.$month.'.tar.gz')) {
												echo '<img src="./assets/icons/success.svg" alt="regra0" width="25%">';
											} else {
												echo '<img src="./assets/icons/error.svg" alt="" width="25%">';
											}
											?>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">
										<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" rel="tooltip" title="
											<?php
											$yesterday = date("d") - 1;
											$month = date("m");
											
											if (file_exists('C:/users/administrador/backup/banco'.$yesterday.$month.'.tar.gz')) {
												$file = ('C:/users/administrador/backup/banco'.$yesterday.$month.'.tar.gz');
												$fileSizeBytes = filesize($file);
												$fileSizeGB = ($fileSizeBytes / 1024 / 1024 / 1024);
												echo $fileSizeGB . " GB";
											} else {
												echo "Indisponível";
											}
											?>
										"></i>
									</div>
									<i class="ti-cloud"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<footer class="footer">
					<div class="container-fluid">
				</footer>
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
		demo.initOverviewDashboard();
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