<?php

include "includes/header.php";
include "controllers/poet-partial.php";
?>

		<div class="main_container">
			<div class="flex_start_between remove_flex768">
				<div class="first_col remove_border_right">
					<div class="portret mb20">
						<img src="<?php echo $fotoBiografie; ?>" alt="<?php echo $numeComplet . ' (' . $numePseudonim . ')';?>">
					</div>
					<div class="name_of_author center mb20">
						<p class="uppercase"><?php echo $numeComplet;?></p>
						<p class="uppercase"><?php if ($numePseudonim == NULL) {echo "";} else {echo '(' . $numePseudonim . ')';}?></p>
					</div>

					<?php include 'controllers/menu-biografic.php';?>

				</div>
				<div class="second_col add_border_left">
					<div class="custom_name_of_author max_width_full mb20">
						<h2><?php echo $numeComplet;?>
						<?php if ($numePseudonim == NULL) {echo "";} else {echo '(' . $numePseudonim . ')';}?>
						</h2>
					</div>
					<div class="flex_start_between set_width_45">
						<div class="details_of_author mb15">
							<p><span>Data nașterii: </span><span><?php echo $dataNastere;?></span></p>
							<p><span>Locul nașterii: </span><span><?php echo $loculNasterii . ', jud. ' . $judetulNasterii;?></span></p>
							<p><span>Religia: </span><span><?php echo $confesiune;?></span></p>
							<p><span>Ocupație: </span><span><?php echo $ocupatii; ?></span></p>
							<p><span>Data adormirii: </span><span><?php echo $dataAdormire;?></span></p>
							<p><span>Locul morții: </span><span><?php echo $loculMortii; ?></span></p>
							<p><span>Locul înmormântării: </span><span><?php echo $decesNumeCimitir; ?></span></p>
						</div>
						<div class="details_of_author mb15">
							<p><span>Ocupația la arestare: </span><span></span></p>
							<p><span>Număr de condamnări: </span><span><?php ?></span></p>
							<p><span>Condamnat la: </span><span><?php ?> de ani </span></p>
							<p><span>Întemnițat timp de: </span><span><?php echo $aniInchisoare;?> ani</span></p>
							<p><span>Întemnițat la: </span><span><?php ?></span></p>
						</div>
					</div>
					<div class="author_confess mb20">
						<a href="<?php echo $poetPeFCP;?>" class="custom_go_to_page"><span>Mărturii despre <?php echo $numeComplet;?></span></a>
					</div>
					<div class="about_auth">
						<div class="about_auth_title mb15">
							<h3>Opera</h3>
						</div>
						<ul class="list_of_articles mb30">
							<li><a href="javascript:;">-</a></li>

						</ul>
						<div class="about_auth_title mb15">
							<h3>Cărți despre poet</h3>
						</div>
						<ul class="list_of_articles mb30">
							<li><a href="javascript:;">-</a></li>
						</ul>
					</div>
				</div>
			</div>	

<?php include "includes/footer.php"; ?>