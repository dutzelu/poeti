
<?php

setlocale(LC_TIME, 'ro_RO');
include "db.php";
include "functii.php";
include "controllers/slider-header.php";
?>

<!DOCTYPE html>
<html lang="ro">
	<head>
		<meta charset="utf-8">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
	      <title>Poeții închisorilor</title>
	      <!--Slick-->
	      <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>css/slick.css"/>
	      <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>css/slick-theme.css"/>

	      <link rel="stylesheet" href="<?php echo BASE_URL;?>css/style.css">
	      <link rel="stylesheet" href="<?php echo BASE_URL;?>css/responsive.css">

	      <!--font-awesome-->
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

	<header>
			<div class="mt25 mob_remove_mg">
				<div class="main_container mob_remove_padd">
					<div class="two" style="margin: 0">
						<div class="logop">
							<a href="<?php echo BASE_URL;?>index.php">
								<img class="max-width" src="<?php echo BASE_URL;?>images/Logo_header_PI@2x.png" alt="logo">
							</a>
						</div>
					</div>
					<div class="three">
						<div class="flex_startp width100 pos_rel disp_block mb30">
							<div class="flex_startp searchp">
								<button type="button" class="hide_md menu_mobile"></button>
								<div class="searchp_form">
									<form method="POST">
										<div class="flex_centerp active_input">
											<input type="text" name="input-search" class="input_searchp"
												   placeholder="Caută o poezie sau un poet">
											<button type="submit" class="button_searchp"></button>
										</div>
									</form>
								</div>
								<div class="logo_mobie">
									<a href="index.html">
										<img class="max-width" src="images/logo-mobile.png" alt="logo">
									</a>
								</div>
							</div>
							<nav class="nav_widthp">
								<ul class="list_style">
									<li class="angle_down">
										<a href="index.html">
											Despre proiect
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown_list">
											<li class="active_link"><a href="index.html">Povestea proiectului</a></li>
											<li><a href="index.html">echipa noastră</a></li>
											<li><a href="index.html">drepturi de preluare</a></li>
										</ul>
									</li>
									<li class="angle_down">
										<a href="bibliografie.html">
											Bibliografie
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown_list">
											<li class="active_link"><a href="index.html">Povestea proiectului</a></li>
											<li><a href="index.html">echipa noastră</a></li>
											<li><a href="index.html">drepturi de preluare</a></li>
										</ul>
									</li>
									<li><a href="index.html">Sustine</a></li>
									<li><a href="index.html">Contact</a></li>
								</ul>
							</nav>

							<p class="fcp"><a class="uppercase" href="index.html">fcp</a></p>
						</div>
						<div class="set_tablet_max_width">
							<div class="mob_logo">
								<a href="index.html">
									<img class="max-width" src="images/logo.jpg" alt="logo">
								</a>
							</div>
							<div class="right_col">
								<div class="slick_carousel">
									<div>
										<ul class="items_list">

										<?php 
											foreach ($poetiSlide1 as $poet) {
												echo '<li><a href="' . BASE_URL . 'poet.php/' . $poet['alias'] . '/' . $poet['id'] . '"><img src="' . BASE_URL . $poet['avatar'] . '" alt = "' . $poet['prenume'] . ' '  . $poet['nume'] . '"></a></li>';
											}  							
										?>
											 
										</ul>
									</div>
									<div>
										<ul class="items_list">

										<?php 
											foreach ($poetiSlide2 as $poet) {
												echo '<li><a href="' . BASE_URL . 'poet.php/' . $poet['alias'] . '/' . $poet['id'] . '"><img src="' . BASE_URL . $poet['avatar'] . '" alt = "' . $poet['prenume'] . ' '  . $poet['nume'] . '"></a></li>';
											}  							
										?>
									
										</ul>
									</div>
								</div>
								<div class="alphabetic mb20">
									<ul class="alphabetic_list">
										<li><a href="poeti-pe-litere.html">a</a></li>
										<li><a href="poeti-pe-litere.html">b</a></li>
										<li><a href="poeti-pe-litere.html">c</a></li>
										<li><a href="poeti-pe-litere.html">d</a></li>
										<li><a href="poeti-pe-litere.html">e</a></li>
										<li><a href="poeti-pe-litere.html">f</a></li>
										<li><a href="poeti-pe-litere.html">g</a></li>
										<li><a href="poeti-pe-litere.html">h</a></li>
										<li><a href="poeti-pe-litere.html">i</a></li>
										<li><a href="poeti-pe-litere.html">j</a></li>
										<li><a href="poeti-pe-litere.html">k</a></li>
										<li><a href="poeti-pe-litere.html">l</a></li>
										<li><a href="poeti-pe-litere.html">m</a></li>
										<li><a href="poeti-pe-litere.html">n</a></li>
										<li><a href="poeti-pe-litere.html">o</a></li>
										<li><a href="poeti-pe-litere.html">p</a></li>
										<li><a href="poeti-pe-litere.html">q</a></li>
										<li><a href="poeti-pe-litere.html">r</a></li>
										<li><a href="poeti-pe-litere.html">s</a></li>
										<li><a href="poeti-pe-litere.html">t</a></li>
										<li><a href="poeti-pe-litere.html">u</a></li>
										<li><a href="poeti-pe-litere.html">v</a></li>
										<li><a href="poeti-pe-litere.html">x</a></li>
										<li><a href="poeti-pe-litere.html">z</a></li>
									</ul>
									<div class="douaBtnHeader">
										<a class="poetiPeLitere" href="poeti-pe-litere.php">Poeți pe litere »</a>
										<a class="PoeziiHeader" href="<?php echo BASE_URL;?>poezii.php">Poezii »</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php include 'menu.php';?>

				</div>
			</div>
		</header>