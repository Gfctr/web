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
			<!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="../bemmaior/" class="simple-text logo-mini">
					<b>BM</b>
				</a>

				<a href="../bemmaior/" class="simple-text logo-normal">
					<b>Bem Maior</b>
				</a>
			</div>

			<?php $itens = file_get_contents('./assets/links/user.php'); echo $itens; ?>

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
	<!--<li>
						<a data-toggle="collapse" href="#componentsExamples">
							<i class="ti-package"></i>
							<p>Downloads
							   <b class="caret"></b>
							</p>
						</a>
						<div class="collapse" id="componentsExamples">
							<ul class="nav">
	                            <li>
									<a href="2075.php">
										<span class="sidebar-mini">AS</span>
										<span class="sidebar-normal">2075</span>
									</a>
								</li>
								<li>
									<a href="dlls2075.php">
										<span class="sidebar-mini">DLL</span>
										<span class="sidebar-normal">DLLs 2075</span>
									</a>
								</li>
								<li>
									<a href="dllsclisitef.php">
										<span class="sidebar-mini">DLL</span>
										<span class="sidebar-normal">DLLs CliSitef</span>
									</a>
								</li>
	                        <li>
									<a href="./components/grid.html">
										<span class="sidebar-mini">GS</span>
										<span class="sidebar-normal">Grid System</span>
									</a>
								</li>
	                            <li>
									<a href="./components/panels.html">
										<span class="sidebar-mini">P</span>
										<span class="sidebar-normal">Panels</span>
									</a>
								</li>
	                            <li>
									<a href="./components/sweet-alert.html">
										<span class="sidebar-mini">SA</span>
										<span class="sidebar-normal">Sweet Alert</span>
									</a>
								</li>
	                            <li>
									<a href="./components/notifications.html">
										<span class="sidebar-mini">N</span>
										<span class="sidebar-normal">Notifications</span>
									</a>
								</li>
	                            <li>
									<a href="./components/icons.html">
										<span class="sidebar-mini">I</span>
										<span class="sidebar-normal">Icons</span>
									</a>
								</li>
	                            <li>
									<a href="./components/typography.html">
										<span class="sidebar-mini"><i class="ti-panel"></i></span>
										<span class="sidebar-normal">Typography</span>
									</a>
								</li>
	            </ul>
			</div>
		</li>-->
	<!--<li>
						<a data-toggle="collapse" href="#formsExamples">
	                        <i class="ti-clipboard"></i>
	                        <p>
								Forms
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="formsExamples">
							<ul class="nav">
								<li>
									<a href="./forms/regular.html">
										<span class="sidebar-mini">Rf</span>
										<span class="sidebar-normal">Regular Forms</span>
									</a>
								</li>
								<li>
									<a href="./forms/extended.html">
										<span class="sidebar-mini">Ef</span>
										<span class="sidebar-normal">Extended Forms</span>
									</a>
								</li>
								<li>
									<a href="./forms/validation.html">
										<span class="sidebar-mini">Vf</span>
										<span class="sidebar-normal">Validation Forms</span>
									</a>
								</li>
	                            <li>
									<a href="./forms/wizard.html">
										<span class="sidebar-mini">W</span>
										<span class="sidebar-normal">Wizard</span>
									</a>
								</li>
	                        </ul>
	                    </div>
	                </li>
	                <li>
						<a data-toggle="collapse" href="#tablesExamples">
	                        <i class="ti-view-list-alt"></i>
	                        <p>
								Table list
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="tablesExamples">
							<ul class="nav">
								<li>
									<a href="./tables/regular.html">
										<span class="sidebar-mini">RT</span>
										<span class="sidebar-normal">Regular Tables</span>
									</a>
								</li>
								<li>
									<a href="./tables/extended.html">
										<span class="sidebar-mini">ET</span>
										<span class="sidebar-normal">Extended Tables</span>
									</a>
								</li>
								<li>
									<a href="./tables/bootstrap-table.html">
										<span class="sidebar-mini">BT</span>
										<span class="sidebar-normal">Bootstrap Table</span>
									</a>
								</li>
								<li>
									<a href="./tables/datatables.net.html">
										<span class="sidebar-mini">DT</span>
										<span class="sidebar-normal">DataTables.net</span>
									</a>
								</li>
	                        </ul>
	                    </div>
	                </li>
					<li>
						<a data-toggle="collapse" href="#mapsExamples">
	                        <i class="ti-map"></i>
	                        <p>
								Maps
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="mapsExamples">
							<ul class="nav">
								<li>
									<a href="./maps/google.html">
										<span class="sidebar-mini">GM</span>
										<span class="sidebar-normal">Google Maps</span>
									</a>
								</li>
								<li>
									<a href="./maps/vector.html">
										<span class="sidebar-mini">VM</span>
										<span class="sidebar-normal">Vector maps</span>
									</a>
								</li>
								<li>
									<a href="./maps/fullscreen.html">
										<span class="sidebar-mini">FSM</span>
										<span class="sidebar-normal">Full Screen Map</span>
									</a>
								</li>
	                        </ul>
	                    </div>
	                </li>
					<li>
	                    <a href="./charts.html">
	                        <i class="ti-bar-chart-alt"></i>
	                        <p>Charts</p>
	                    </a>
	                </li>
					<li>
	                    <a href="./calendar.html">
	                        <i class="ti-calendar"></i>
	                        <p>Calendar</p>
	                    </a>
	                </li>
					<li>
						<a data-toggle="collapse" href="#pagesExamples">
	                        <i class="ti-gift"></i>
	                        <p>
								Pages
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="pagesExamples">
							<ul class="nav">
								<li>
									<a href="./pages/timeline.html">
										<span class="sidebar-mini">TP</span>
										<span class="sidebar-normal">Timeline Page</span>
									</a>
								</li>
								<li>
									<a href="./pages/user.html">
										<span class="sidebar-mini">UP</span>
										<span class="sidebar-normal">User Page</span>
									</a>
								</li>
								<li>
									<a href="./pages/login.html">
										<span class="sidebar-mini">LP</span>
										<span class="sidebar-normal">Login Page</span>
									</a>
								</li>
								<li>
									<a href="./pages/register.html">
										<span class="sidebar-mini">RP</span>
										<span class="sidebar-normal">Register Page</span>
									</a>
								</li>
								<li>
									<a href="./pages/lock.html">
										<span class="sidebar-mini">LSP</span>
										<span class="sidebar-normal">Lock Screen Page</span>
									</a>
								</li>
	                        </ul>
	                    </div>
	                </li>
	            </ul>
	    	</div>
	    </div>-->

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
					<?php $version = file_get_contents('../version.php'); echo $version; ?>
				</div>
				<div class="collapse navbar-collapse">

					<!--<form class="navbar-form navbar-left navbar-search-form" role="search">							
						<div class="input-group">
	    						<span class="input-group-addon"><i class="fa fa-search"></i></span>
	    						<input type="text" value="" class="form-control" placeholder="Search...">
	    					</div>
	    				</form>

	                <ul class="nav navbar-nav navbar-right">
	                        <li>
	                            <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
	                                <i class="ti-panel"></i>
									<p>Stats</p>
	                            </a>
	                        </li>
	                        <li class="dropdown">
	                            <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
	                                <i class="ti-bell"></i>
	                                <span class="notification">5</span>
									<p class="hidden-md hidden-lg">
										Notifications
										<b class="caret"></b>
									</p>
	                            </a>
	                            <ul class="dropdown-menu">
	                                <li><a href="#not1">Notification 1</a></li>
	                                <li><a href="#not2">Notification 2</a></li>
	                                <li><a href="#not3">Notification 3</a></li>
	                                <li><a href="#not4">Notification 4</a></li>
	                                <li><a href="#another">Another notification</a></li>
	                            </ul>
	                        </li>
							<li>
	                            <a href="#settings" class="btn-rotate">
									<i class="ti-settings"></i>
									<p class="hidden-md hidden-lg">
										Settings
									</p>
	                            </a>
	                        </li>
	                    </ul>-->
				</div>
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
											$df = round(disk_free_space("//10.1.1.10/Instalaveis") / 1024 / 1024 / 1024);
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
											$df = round(disk_free_space("//10.1.1.200/sistema") / 1024 / 1024 / 1024);
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

					<!-- Card CliSitef
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
											<p>vCliSitef</p>
											<button class="btn btn-xs btn-fill" type="button"><a href="https://www.softwareexpress.com.br/distri/aplicativos/vrs6/clisitefwin32.zip">Baixar</a></button>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">
										<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" rel="tooltip" title="Última versão CliSitef."></i>
									</div>
									<i class="ti-zip"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					Dólar
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-success text-center">
											<i class="ti-wallet"></i>
										</div>
									</div>
									<div class="col-xs-7" id="dolar" align="right">
										<script type="text/javascript">
											var auto_refresh = setInterval(
												function() {
													$('#dolar').load('./assets/links/dolar.php').fadeIn("slow");
												}, 1000); // refreshing after every 15000 milliseconds
										</script>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">
										<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" rel="tooltip" title="Última cotação do dólar."></i>
									</div>
									<i class="ti-calendar"></i> Dólar Hoje
								</div>
							</div>
						</div>
					</div>

					Card Placas
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-success text-center">
											<i class="ti-files"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>MataBurro</p>
											<script>
												function mataburro() {
													$.ajax({
														type: "POST",
														url: './assets/links/mataburro.php',
														data: {
															action: 'call_this'
														},
													});
												}
											</script>
											<button class="btn btn-xs btn-fill" type="button" onclick="demo.showSwal('success-message'); mataburro()">Atualizar</button>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">
										<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" rel="tooltip" title="Placa de Preços."></i>
									</div>
									<i class="ti-files"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div>

					Card Excel
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-success text-center">
											<i class="ti-files"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>Excel Produtos</p>
											<button class="btn btn-xs btn-fill" type="button"><a href="./assets/docs/Produtos.xlsx">Baixar</a></button>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<hr />
								<div class="stats">
									<div class="pull-right" style="position:relative; display:inline-block;">
										<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" rel="tooltip" title="Excel Produtos"></i>
									</div>
									<i class="ti-files"></i>
									<div class="my-inline-block" id="campaign-name4"></div>
								</div>
							</div>
						</div>
					</div> -->

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
											$today = date("d");
											$yesterday = date("d") - 1;
											$month = date("m");

											if (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_0' . $yesterday . $month . '22_2035.tar.gz')) {
												echo '<img src="./assets/icons/success.svg" alt="regra0" width="25%">';
											} elseif (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_' . $yesterday . $month . '22_2035.tar.gz')) {
												echo '<img src="./assets/icons/success.svg" title="regra1" alt="regra1" width="25%">';
											}/*elseif (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_' . $yesterday . $month . '22_2035.tar.gz')) {
												echo '<img src="./assets/icons/success.svg" title="regra2" alt="" width="25%">';
											} elseif (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_' . $yesterday . $month . '21_2000.tar.gz')) {
												echo '<img src="./assets/icons/success.svg" alt="" width="25%">';
											} elseif (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_0' . $yesterday . $month . '21_2000.tar.gz')) {
												echo '<img src="./assets/icons/success.svg" alt="" width="25%">';
											}*/ else {
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
											$today = date("d");
											$yesterday = date("d") - 1;
											$month = date("m");
											$year = date("y");

											if (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_0' . $yesterday . $month . '22_2035.tar.gz')) {
												$file = ('//10.1.1.200/export/cloud/USER_FULL_WINT_0' . $yesterday . $month . '22_2035.tar.gz');
												$fileSizeBytes = filesize($file);												
												$fileSizeGB = ($fileSizeBytes / 1024 / 1024 / 1024);
												echo $fileSizeGB ." GB";
											} elseif (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_' . $yesterday . $month . '22_2035.tar.gz')) {
												$file = ('//10.1.1.200/export/cloud/USER_FULL_WINT_' . $yesterday . $month . '22_2035.tar.gz');
												$fileSizeBytes = filesize($file);												
												$fileSizeGB = ($fileSizeBytes / 1024 / 1024 / 1024);
												echo $fileSizeGB ." GB";
											}/*elseif (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_' . $yesterday . $month . '22_2035.tar.gz')) {
												$file = ('//10.1.1.200/export/cloud/USER_FULL_WINT_' . $yesterday . $month . '22_2035.tar.gz');
												$fileSizeBytes = filesize($file);
												$fileSizeGB = ($fileSizeBytes / 1024 / 1024 / 1024);
												echo $fileSizeGB . " GB";
												
											}elseif (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_' . $yesterday . $month . '21_2000.tar.gz')) {
												$url = '//10.1.1.200/export/cloud/USER_FULL_WINT_' . $yesterday . $month . '21_2000.tar.gz';

												$file = ('//10.1.1.200/export/cloud/USER_FULL_WINT_' . $yesterday . $month . '21_2000.tar.gz');
												$fileSizeBytes = filesize($file);
												$fileSizeGB = ($fileSizeBytes / 1024 / 1024 / 1024);
												echo $fileSizeGB . " GB";
											} elseif (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_0' . $yesterday . $month . '21_2000.tar.gz')) {
												$url = '//10.1.1.200/export/cloud/USER_FULL_WINT_0' . $yesterday . $month . '21_2000.tar.gz';

												$file = ('//10.1.1.200/export/cloud/USER_FULL_WINT_0' . $yesterday . $month . '21_2000.tar.gz');
												$fileSizeBytes = filesize($file);
												$fileSizeGB = ($fileSizeBytes / 1024 / 1024 / 1024);
												echo $fileSizeGB . " GB";
											}
											elseif (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_' . $today . $month . '21_1900.tar.gz')) {
												$url = '//10.1.1.200/export/cloud/USER_FULL_WINT_' . $today . $month . '21_1900.tar.gz';
												$dadosArquivo = file_get_contents($url);
												$var1 = explode('successfully completed at', $dadosArquivo);
												$var2 = explode('elapsed', $var1[1]);
												echo $var2[0];
											}
											elseif (file_exists('//10.1.1.200/export/cloud/USER_FULL_WINT_0' . $today . $month . '21_1900.tar.gz')) {
												$url = '//10.1.1.200/export/cloud/USER_FULL_WINT_0' . $today . $month . '21_1900.tar.gz';
												$dadosArquivo = file_get_contents($url);
												$var1 = explode('successfully completed at', $dadosArquivo);
												$var2 = explode('elapsed', $var1[1]);
												echo $var2[0];
											}*/ else {
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
					<!--<div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-danger text-center">
	                                            <i class="ti-pulse"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Errors</p>
												<?php /*
													$url = 'https://www.infomoney.com.br/cotacoes/oi-oibr4/';
													$dadosArquivo = file_get_contents($url);
													$var1 = explode('<div class="value">', $dadosArquivo);
													$var2 = explode('</p>', $var1[1]);
													echo $var2[0];*/
												?>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-timer"></i> In the last hour
									</div>
								</div>
	                        </div>
	                    </div>
	                <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-info text-center">
	                                            <i class="ti-twitter-alt"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Followers</p>
	                                            +45
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-reload"></i> Updated now
									</div>
								</div>
	                        </div>
	                    </div>
	                </div>
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-7">
											<div class="numbers pull-left">
												$34,657
											</div>
										</div>
										<div class="col-xs-5">
											<div class="pull-right">
												<span class="label label-success">
		 											+18%
												</span>
											</div>
										</div>
									</div>
									<h6 class="big-title">total earnings <span class="text-muted">in last</span> ten <span class="text-muted">quarters</span></h6>
		                            <div id="chartTotalEarnings"></div>
								</div>
								<div class="card-footer">
									<hr>
									<div class="footer-title">Financial Statistics</div>
									<div class="pull-right">
										<button class="btn btn-info btn-fill btn-icon btn-sm">
											<i class="ti-plus"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-7">
											<div class="numbers pull-left">
												169
											</div>
										</div>
										<div class="col-xs-5">
											<div class="pull-right">
												<span class="label label-danger">
		 											-14%
												</span>
											</div>
										</div>
									</div>
									<h6 class="big-title">total subscriptions <span class="text-muted">in last</span> 7 days</h6>
		                            <div id="chartTotalSubscriptions"></div>
								</div>
								<div class="card-footer">
									<hr>
									<div class="footer-title">View all members</div>
									<div class="pull-right">
										<button class="btn btn-default btn-fill btn-icon btn-sm">
											<i class="ti-angle-right"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-7">
											<div class="numbers pull-left">
												8,960
											</div>
										</div>
										<div class="col-xs-5">
											<div class="pull-right">
												<span class="label label-warning">
		 											~51%
												</span>
											</div>
										</div>
									</div>
									<h6 class="big-title">total downloads <span class="text-muted">in last</span> 6 years</h6>
		                            <div id="chartTotalDownloads" ></div>
								</div>
								<div class="card-footer">
									<hr>
									<div class="footer-title">View more details</div>
									<div class="pull-right">
										<button class="btn btn-success btn-fill btn-icon btn-sm">
											<i class="ti-info"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="card card-circle-chart" data-background-color="blue">
								<div class="card-header text-center">
	                                <h5 class="card-title">Dashboard</h5>
	                                <p class="description">Monthly sales target</p>
	                            </div>
								<div class="card-content">
									<div id="chartDashboard" class="chart-circle" data-percent="70">70%</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card card-circle-chart" data-background-color="green">
								<div class="card-header text-center">
	                                <h5 class="card-title">Orders</h5>
	                                <p class="description">Completed</p>
	                            </div>
								<div class="card-content">
									<div id="chartOrders" class="chart-circle" data-percent="34">34%</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card card-circle-chart" data-background-color="orange">
								<div class="card-header text-center">
	                                <h5 class="card-title">New Visitors</h5>
	                                <p class="description">Out of total number</p>
	                            </div>
								<div class="card-content">
									<div id="chartNewVisitors" class="chart-circle" data-percent="62">62%</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card card-circle-chart" data-background-color="brown">
								<div class="card-header text-center">
	                                <h5 class="card-title">Subscriptions</h5>
	                                <p class="description">Monthly newsletter</p>
	                            </div>
								<div class="card-content">
									<div id="chartSubscriptions" class="chart-circle" data-percent="10">10%</div>
								</div>
							</div>
						</div> 
					</div>
                </div>-->
				</div>
				<footer class="footer">
					<div class="container-fluid">
						<!-- 
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="https://blog.creative-tim.com">
                                   Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.inovetecnologia.com.br">Inove TI</a>
                    </div>
                </div>-->
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