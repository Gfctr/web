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
    <link href="./assets/css/paper-dashboard.css" rel="stylesheet"/>


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
								<li>
									<!--<a href="../">
										<span class="sidebar-mini">V</span>
										<span class="sidebar-normal">Visão</span>
									</a>-->
								</li>
								<li>
									<a href="./">
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
									<a href="servidores">
										<span class="sidebar-mini">S</span>
										<span class="sidebar-normal">Servidores</span>
									</a>
								</li>
								<li>
									<!--<a href="updates">
										<span class="sidebar-mini">U</span>
										<span class="sidebar-normal">Updates</span>
									</a>-->
								</li>
							</ul>
						</div>
					</li>
					<!-- <li>
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
							Servidores
						</a>
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

					<div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Lista de Servidores</h4>
	                            </div>
	                            <div class="card-content table-responsive table-full-width">
	                                <table class="table">
	                                    <thead>
	                                        <tr>
	                                            <th class="text-center">#</th>
	                                            <th>Nome</th>
	                                            <th>IP</th>
                                                <th>Status</th>
                                                <th class="text-center">Anydesk</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        
	                                        <tr>
	                                            <td class="text-center">1</td>
	                                            <td>Anywhere</td>
	                                            <td>10.1.1.190</td>
	                                            <td>
                                                    <?php
														class CheckDevice3 {

															public function myOS(){
																if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87).chr(73).chr(78)))
																	return true;

																return false;
															}

															public function ping($ip_addr){
																if ($this->myOS()){
																	if (!exec("ping -n 1 -w 1 ".$ip_addr." 2>NUL > NUL && (echo 0) || (echo 1)"))
																		return true;
																} else {
																	if (!exec("ping -q -c1 ".$ip_addr." >/dev/null 2>&1 ; echo $?"))
																		return true;
																}

																return false;
															}
														}

														$ip_addr = "10.1.1.190";

														if ((new CheckDevice3())->ping($ip_addr))
															echo '<button class="btn btn-success btn-xs" type="button">Conectado</button>';
														else 
															echo '<button class="btn btn-danger btn-xs" type="button">Desconectado</button>';
													?>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-xs btn-fill" type="button" onclick="location.href='anydesk:255946352'">Abrir Conexão</button>
                                                </td>
	                                        </tr>
	                                        <tr>
	                                            <td class="text-center">2</td>
	                                            <td>Faturamento</td>
	                                            <td>10.1.1.199</td>
	                                            <td>
                                                    <?php
														class CheckDevice4 {

															public function myOS(){
																if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87).chr(73).chr(78)))
																	return true;

																return false;
															}

															public function ping($ip_addr){
																if ($this->myOS()){
																	if (!exec("ping -n 1 -w 1 ".$ip_addr." 2>NUL > NUL && (echo 0) || (echo 1)"))
																		return true;
																} else {
																	if (!exec("ping -q -c1 ".$ip_addr." >/dev/null 2>&1 ; echo $?"))
																		return true;
																}

																return false;
															}
														}

														$ip_addr = "10.1.1.199";

														if ((new CheckDevice4())->ping($ip_addr))
															echo '<button class="btn btn-success btn-xs" type="button">Conectado</button>';
														else 
															echo '<button class="btn btn-danger btn-xs" type="button">Desconectado</button>';
													?>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-xs btn-fill" type="button" onclick="location.href='anydesk:209137341'">Abrir Conexão</button>
                                                </td>
	                                        </tr>
                                            
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	                    
	                    
						<!--<div class="col-md-6">
	                        <div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Users Behavior</h4>
	                                <p class="category">24 Hours performance</p>
	                            </div>
	                            <div class="content">
	                                <div id="chartHours" class="ct-chart"></div>
	                            </div>
	                            <div class="card-footer">
	                                <div class="chart-legend">
	                                    <i class="fa fa-circle text-info"></i> Open
	                                    <i class="fa fa-circle text-danger"></i> Click
	                                    <i class="fa fa-circle text-warning"></i> Click Second Time
	                                </div>
	                                <hr>
	                                <div class="stats">
	                                    <i class="ti-reload"></i> Updated 3 minutes ago
	                                </div>
	                            </div>
	                        </div>
	                    </div>

						<div class="col-md-12">
	                        <div class="card ">
	                            <div class="card-header">
	                                <h4 class="card-title">Global Sales by Top Locations</h4>
	                                <p class="category">All products that were shipped</p>
	                            </div>
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-md-5">
	                                        <div class="table-responsive">
	                                            <table class="table">
	                                                <tbody>
	                                                    <tr>
	                                                        <td>
	                                                            <div class="flag">
	                                                                <img src="././assets/img/flags/US.png"
	                                                            </div>
	                                                        </td>
	                                                        <td>USA</td>
	                                                        <td class="text-right">
	                                                            2.920
	                                                        </td>
	                                                        <td class="text-right">
	                                                            53.23%
	                                                        </td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td>
	                                                            <div class="flag">
	                                                                <img src="././assets/img/flags/DE.png"
	                                                            </div>
	                                                        </td>
	                                                        <td>Germany</td>
	                                                        <td class="text-right">
	                                                            1.300
	                                                        </td>
	                                                        <td class="text-right">
	                                                            20.43%
	                                                        </td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td>
	                                                            <div class="flag">
	                                                                <img src="././assets/img/flags/AU.png"
	                                                            </div>
	                                                        </td>
	                                                        <td>Australia</td>
	                                                        <td class="text-right">
	                                                            760
	                                                        </td>
	                                                        <td class="text-right">
	                                                            10.35%
	                                                        </td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td>
	                                                            <div class="flag">
	                                                                <img src="././assets/img/flags/GB.png"
	                                                            </div>
	                                                        </td>
	                                                        <td>United Kingdom</td>
	                                                        <td class="text-right">
	                                                            690
	                                                        </td>
	                                                        <td class="text-right">
	                                                            7.87%
	                                                        </td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td>
	                                                            <div class="flag">
	                                                                <img src="././assets/img/flags/RO.png"
	                                                            </div>
	                                                        </td>
	                                                        <td>Romania</td>
	                                                        <td class="text-right">
	                                                            600
	                                                        </td>
	                                                        <td class="text-right">
	                                                            5.94%
	                                                        </td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td>
	                                                            <div class="flag">
	                                                                <img src="././assets/img/flags/BR.png"
	                                                            </div>
	                                                        </td>
	                                                        <td>Brasil</td>
	                                                        <td class="text-right">
	                                                            550
	                                                        </td>
	                                                        <td class="text-right">
	                                                            4.34%
	                                                        </td>
	                                                    </tr>
	                                                </tbody>
	                                            </table>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6 col-md-offset-1">
	                                        <div id="worldMap" style="height: 300px;"></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-6">
	                        <div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Tasks</h4>
	                                <p class="category">Backend development</p>
	                            </div>
	                            <div class="card-content">
	                                <div class="table-full-width table-tasks">
	                                    <table class="table">
	                                        <tbody>
	                                            <tr>
	                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1">

                                                      </label>
                                                    </div>
	                                                </td>
	                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
	                                                <td class="td-actions text-right">
														<div class="table-icons">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="ti-pencil-alt"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="ti-close"></i>
		                                                    </button>
														</div>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2">

                                                      </label>
                                                    </div>
	                                                </td>
	                                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
	                                                <td class="td-actions text-right">
														<div class="table-icons">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="ti-pencil-alt"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="ti-close"></i>
		                                                    </button>
														</div>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3">

                                                      </label>
                                                    </div>
	                                                </td>
	                                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit</td>
	                                                <td class="td-actions text-right">
														<div class="table-icons">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="ti-pencil-alt"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="ti-close"></i>
		                                                    </button>
														</div>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox4" type="checkbox">
                                                        <label for="checkbox4">

                                                      </label>
                                                    </div>
	                                                </td>
	                                                <td>Create 4 Invisible User Experiences you Never Knew About</td>
	                                                <td class="td-actions text-right">
														<div class="table-icons">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="ti-pencil-alt"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="ti-close"></i>
		                                                    </button>
														</div>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox5" type="checkbox">
                                                        <label for="checkbox5">

                                                      </label>
                                                    </div>
	                                                </td>
	                                                <td>Read "Following makes Medium better"</td>
	                                                <td class="td-actions text-right">
														<div class="icons-table">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
																<i class="ti-pencil-alt"></i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="ti-close"></i>
															</button>
														</div>

	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox6" type="checkbox">
                                                        <label for="checkbox6">

                                                      </label>
                                                    </div>
	                                                </td>
	                                                <td>Unfollow 5 enemies from twitter</td>
	                                                <td class="td-actions text-right">
														<div class="table-icons">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="ti-pencil-alt"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="ti-close"></i>
		                                                    </button>
														</div>
	                                                </td>
	                                            </tr>
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                            <div class="card-footer">
	                                <hr>
	                                <div class="stats">
	                                    <i class="fa fa-history"></i> Updated 3 minutes ago
	                                </div>
	                            </div>
	                        </div>
							<div class="card card-chat">
								<div class="card-header">
									<h4 class="card-title">Chat</h4>
									<p class="category">With Tania Andrew</p>
								</div>
								<div class="card-content">
									<ol class="chat">
										<li class="other">
											<div class="avatar">
  											  <img src="././assets/img/faces/face-2.jpg" alt="crash"/>
  										  </div>
									        <div class="msg">
										        <p>
												    Hola!
										            How are you?
											    </p>
												<div class="card-footer">
													<i class="ti-check"></i>
													<h6>11:20</h6>
												</div>
										  </div>
									    </li>
										<li class="self">
									        <div class="msg">
										        <p>
													Puff...
										        	I'm alright. How are you?
												</p>
												<div class="card-footer">
													<i class="ti-check"></i>
													<h6>11:22</h6>
												</div>
									        </div>
											<div class="avatar">
												<img src="././assets/img/default-avatar.png" alt="crash"/>
											</div>
									    </li>
										<li class="other">
											<div class="avatar">
												<img src="././assets/img/faces/face-2.jpg" alt="crash"/>
											</div>
									        <div class="msg">
									        	<p>
													I'm ok too!
												</p>
												<div class="card-footer">
													<i class="ti-check"></i>
													<h6>11:24</h6>
												</div>
										    </div>
									    </li>
										<li class="self">
									        <div class="msg">
									        	<p>
													Well, it was nice hearing from you.
												</p>
												<div class="card-footer">
													<i class="ti-check"></i>
													<h6>11:25</h6>
												</div>
									        </div>
											<div class="no-avatar"></div>
									    </li>
										<li class="self">
									        <div class="msg">
									        	<p>
													OK, bye-bye
									        		See you!
												</p>
												<div class="card-footer">
													<i class="ti-check"></i>
													<h6>11:25</h6>
												</div>
									        </div>
											<div class="avatar">
												<img src="././assets/img/default-avatar.png" alt="crash"/>
											</div>
									    </li>
									</ol>
									<hr>
									<div class="send-message">
										<div class="avatar">
											<img src="././assets/img/default-avatar.png" alt="crash"/>
										</div>
										<input class="form-control textarea" type="text" placeholder="Type here!"/>
										<div class="send-button">
											<button class="btn btn-primary btn-fill">Send</button>
										</div>
									</div>
								</div>
							</div>
	                    </div>
						<div class="col-md-6">
							<div class="card card-timeline card-plain">
								<div class="card-content">
									<ul class="timeline timeline-simple">
									    <li class="timeline-inverted">
									        <div class="timeline-badge danger">
												<i class="ti-gallery"></i>
										    </div>
									    	<div class="timeline-panel">
										        <div class="timeline-heading">
										        	<span class="label label-danger">Some title</span>
										        </div>
										        <div class="timeline-body">
										        	<p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!!   It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
										        </div>
												<h6>
													<i class="ti-time"></i>
													11 hours ago via Twitter
												</h6>
									    	</div>
									    </li>
									    <li class="timeline-inverted">
									        <div class="timeline-badge success">
											    <i class="ti-check-box"></i>
										    </div>
									    	<div class="timeline-panel">
										        <div class="timeline-heading">
										          <span class="label label-success">Another One</span>
										        </div>
										        <div class="timeline-body">
										            <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
										        </div>
									      	</div>
									    </li>
									    <li class="timeline-inverted">
									    	<div class="timeline-badge info">
											    <i class="ti-credit-card"></i>
											</div>
									    	<div class="timeline-panel">
										        <div class="timeline-heading">
										          <span class="label label-info">Another Title</span>
										        </div>
									        	<div class="timeline-body">
													<p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
													<p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
								        			<hr>
								        			<div class="dropdown">
										            	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
										            		<i class="ti-settings"></i> <span class="caret"></span>
										            	</button>
										            	<ul class="dropdown-menu dropdown-menu-left" role="menu">
											            	<li><a href="#action">Action</a></li>
											            	<li><a href="#action">Another action</a></li>
											            	<li><a href="#here">Something else here</a></li>
											            	<li class="divider"></li>
											            	<li><a href="#link">Separated link</a></li>
										            	</ul>
								        			</div>
									        	</div>
									    	</div>
									    </li>
									</ul>
								</div>
							</div>
						</div>-->
	                </div>
	            </div>
	        </div>

	        <footer class="footer">
                <div class="container-fluid"><!-- 
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
    	$(document).ready(function(){
			demo.initStatsDashboard();
			demo.initVectorMap();
			demo.initCirclePercentage();

    	});
	</script>

</html>
<?php 
ob_end_flush(); 
function comprimir_pagina($buffer) { 
$busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'); 
$reemplaza = array('>','<','\\1'); 
return preg_replace($busca, $reemplaza, $buffer); 
} 
?>