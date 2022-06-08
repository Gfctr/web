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
							<li class="active">
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
						Balança
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
					<div class="col-md-6">
						<div class="card ">
							<div class="card-header">
								<h4 class="card-title">Alteração de Dados</h4>
							</div>
							<div class="card-content">

								<?php
								if (file_exists("C:/toledo/ITENSMGV.txt")) {

									$source_file = 'C:/toledo/ITENSMGV.txt';
									$dest_file = 'C:/toledo/.backup/ITENSMGV.txt';

									date_default_timezone_set("America/Sao_Paulo");
									$databackup = date("d-m-Y H-i-s");

									if (!is_file($dest_file)) {
										copy($source_file, $dest_file);	
										rename("C:/toledo/.backup/ITENSMGV.txt", "C:/toledo/.backup/ITENSMGV $databackup.txt");
									}

									$arquivo = file('C:/toledo/ITENSMGV.txt');
									foreach ($arquivo as $indice => $conteudo) {
										$novo[] = $conteudo;
									}

									foreach ($novo as $conteudo) {
										$conteudo2 = substr($conteudo, 0, 3);
										$conteudo = substr($conteudo, 3);

										if ($conteudo2 == '161' || $conteudo2 == '160') {
											$conteudo2 = '010';
										}
										$contnovo = $conteudo2 . $conteudo;
										$arqnovo[] = $contnovo;
									}

									$str = implode("", $arqnovo);
									$name = 'C:/toledo/ITENSMGV.txt';
									$file = fopen($name, 'w+');
									fwrite($file, $str);
									fclose($file);
									print "<div class='progress'> <div class='progress-bar bar2'></div> </div>";

									$today = date("d");
									$dia = "20";
									$month = date("m");
									$mes = "11";
									$result1 = ($today + $dia);
									$result2 = ($month + $mes);
									print "<b>Senha do dia:</b> " . $result1 . $result2;
									print "<br><a href='./assets/links/download.php'>Baixar arquivo alterado!</a>";
								} else
									echo "Arquivo ITENSMGV não existe!";
								?>

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