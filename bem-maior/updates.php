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
			<!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
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
							<li>
								<a href="caixas">
									<span class="sidebar-mini">C</span>
									<span class="sidebar-normal">Caixas</span>
								</a>
							</li>
							<li class="active">
								<a href="updates">
									<span class="sidebar-mini">U</span>
									<span class="sidebar-normal">Updates</span>
								</a>
							</li>
						</ul>
					</div>
					<!--<div class="version">
						<span>v 5.0</span>
					</div>
				</li>


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
					</li>
					<li>
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
	                </li>-->
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
						Updates
					</a>
					<?php $version = file_get_contents('../version.php'); echo $version; ?>
				</div>
				<div class="collapse navbar-collapse">

					<form class="navbar-form navbar-left navbar-search-form" role="search">
						<!--<div class="input-group">
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
														$("#caixa21").load("./assets/links/caixas/caixa21/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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
														$("#caixa22").load("./assets/links/caixas/caixa22/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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
														$("#caixa23").load("./assets/links/caixas/caixa23/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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
														$("#caixa24").load("./assets/links/caixas/caixa24/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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
														$("#caixa25").load("./assets/links/caixas/caixa25/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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
														$("#caixa26").load("./assets/links/caixas/caixa26/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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
														$("#caixa27").load("./assets/links/caixas/caixa27/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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
														$("#caixa28").load("./assets/links/caixas/caixa28/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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
														$("#caixa29").load("./assets/links/caixas/caixa29/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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
														$("#caixa30").load("./assets/links/caixas/caixa30/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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
														$("#caixa31").load("./assets/links/caixas/caixa31/get_version.php").fadeIn("slow");
													}, 60000); // atualizacao a cada 60s
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