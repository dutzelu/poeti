
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

	      <link rel="stylesheet" href="<?php echo BASE_URL;?>css/responsive.css">
	      <link rel="stylesheet" href="<?php echo BASE_URL;?>css/style.css">
	      <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>css/slick.css"/>
	      <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>css/slick-theme.css"/>


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
										<a href="#">
											Despre proiect
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown_list">
											<!-- active_link -->
											<li><a href="<?php echo BASE_URL; ?>articole.php/povestea-proiectului-poetii-inchisorilor/42">Povestea proiectului</a></li>
											<li><a href="<?php echo BASE_URL; ?>articole.php/obiective-invatam-istorie-si-cultivam-memorie/46">Obiective</a></li>
											<li><a href="<?php echo BASE_URL; ?>articole.php/echipa-noastra/43">echipa noastră</a></li>
											<li><a href="<?php echo BASE_URL; ?>articole.php/conditii-de-preluare-si-citare/44">drepturi de preluare</a></li>
										</ul>
									</li>
									<li class="angle_down">
										<a href="<?php echo BASE_URL; ?>articole.php/continutul-si-logica-proiectului-poetii-inchisorilor/45">Ce oferim</a>
									</li>
									<li><a href="<?php echo BASE_URL; ?>articole.php/cateva-moduri-prin-care-ne-poti-sustine-sau-prin-care-poti-deveni-parte-din-echipa/47">Sustine</a></li>
									<li><a href="<?php echo BASE_URL; ?>articole.php/contact/48">Contact</a></li>
								</ul>
							</nav>

							<p class="fcp"><a class="uppercase" href="https://fericiticeiprigoniti.net" target="_blank">fcp</a></p>
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
												echo '<li><a href="' . BASE_URL . 'poezii-poet.php/' . $poet['alias'] . '/' . $poet['id'] . '"><img src="' . BASE_URL . 'images/avatare/' . $poet['avatar'] . '" alt = "' . $poet['prenume'] . ' '  . $poet['nume'] . '"></a></li>';
											}  							
										?>
											 
										</ul>
									</div>
									<div>
										<ul class="items_list">

										<?php 
											foreach ($poetiSlide2 as $poet) {
												echo '<li><a href="' . BASE_URL . 'poezii-poet.php/' . $poet['alias'] . '/' . $poet['id'] . '"><img src="' . BASE_URL . 'images/avatare/' . $poet['avatar'] . '" alt = "' . $poet['prenume'] . ' '  . $poet['nume'] . '"></a></li>';
											}  							
										?>
									
										</ul>
									</div>
								</div>
								<div class="alphabetic mb20">
									<ul class="alphabetic_list">
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=A">a</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=B">b</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=C">c</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=D">d</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=E">e</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=F">f</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=G">g</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=H">h</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=I">i</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=J">j</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=K">k</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=L">l</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=M">m</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=N">n</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=O">o</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=P">p</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=Q">q</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=R">r</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=S">s</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=T">t</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=U">u</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=V">v</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=X">x</a></li>
										<li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=Z">z</a></li>
									</ul>
									<div class="douaBtnHeader">
										<a class="poetiPeLitere" href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=A">Poeți pe litere »</a>
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