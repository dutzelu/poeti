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
							<p><span>Naționalitate: </span><span><?php echo $nationalitate;?></span></p>
							<p><span>Religie/confesiune: </span><span><?php echo $confesiune;?></span></p>
							<p><span>Ocupație: </span><span><?php echo $ocupatii; ?></span></p>
						</div>
						<div class="details_of_author mb15">
							<p><span>Data adormirii: </span><span><?php echo $dataAdormire;?></span></p>
							<p><span>Locul morții: </span><span><?php echo $loculMortii; ?></span></p>
							<p><span>Locul înmormântării: </span><span><?php echo $decesNumeCimitir; ?></span></p>
							<p><span>Părinții: </span><span>
								<?php 
									if ($prenumeMama !==NULL AND $prenumeTata !== NULL){
										echo $prenumeTata . ' și ' . $prenumeMama;
									}
								
								?></span></p>
							<p><span>Copiii: </span><span>
								<?php 
								
								if ($baieti != NULL) {
									if ($baieti == 1){
										echo 'un băiat';
									} else {
										echo $baieti . ' băieți';
									}
								}
								
								if ($baieti !== NULL AND $fete !== NULL) {
									echo ' și ';
								}

								if ($fete != NULL) {
									if ($fete == 1){
										echo 'o fată';
									} else {
										echo $fete . ' fete';
									}
								}
								
								
								?></span></p>
						</div>
					</div>
	
					<div class="about_auth mt50">

						<div class="about_auth_title mb15">
							<h3>Profesiuni, funcții și demnități publice</h3>
						</div>
						<ul class="list_of_articles mb30">
							<?php foreach ($functii as $functie) :
								echo '<li>' . $functie['data_start'] . ' - ' . $functie['data_end'] . ': ' . $functie['nume'] . '</li>';
							endforeach;?>
						</ul>

						<div class="about_auth_title mb15">
							<h3>Premii, distincții și afilieri socio-profesionale</h3>
						</div>
						<ul class="list_of_articles mb30">
							<?php foreach ($distinctii as $distinctie) :
								echo '<li>' . $distinctie['data'] . ' - ' . $distinctie['titlu_primit'] . '</li>';
							endforeach;?>
						</ul>

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