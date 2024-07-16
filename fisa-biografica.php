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
	
					<div class="about_auth mt30">

						<div class="about_auth_title mb15">
							<h3>Profesiuni, funcții, demnități publice și afilieri politice</h3>
						</div>
						<ul class="list_of_articles mb30">
							<?php foreach ($functii as $functie) :
								echo '<li>' . $functie['data_inceput'];
								
								if($functie['data_sfarsit'] != NULL){
									echo ' - ' . $functie['data_sfarsit'];
								}
								
								echo ': ' . $functie['nume_realizare'] . '</li>';
							endforeach;?>
						</ul>

						<div class="about_auth_title mb15">
							<h3>Premii, distincții și afilieri socio-profesionale</h3>
						</div>
						<ul class="list_of_articles mb30">
						<?php foreach ($distinctii as $distinctie) :
								echo '<li>' . $distinctie['data_inceput'];
								
								if($distinctie['data_sfarsit'] != NULL){
									echo ' - ' . $distinctie['data_sfarsit'];
								}
								
								echo ': ' . $distinctie['nume_realizare'] . '</li>';
							endforeach;?>
						</ul>

						<div class="about_auth_title mb15">
							<h3>Opera</h3>
						</div>
						<ul class="list_of_articles mb30">
							<?php foreach ($operaPoetului as $opera) :
									echo '<li>';

									if ($opera['backup_bAutor'] != NULL OR $opera['backup_bAutor'] !='') {
										echo $opera['backup_bAutor'];
									}

									echo ', <em>' . $opera['titlu'] . '</em>';

									 if ($opera['subtitlu'] != NULL) {
										echo ', ' . $opera['subtitlu'] . '</em>';
									 } else {echo '</em>';}

									 if ($opera['nume_editura1'] != NULL) {
									 echo ', Editura ' . $opera['nume_editura1'];
									 } 

									 if ($opera['nume_editura2'] != NULL) {
										echo ', Editura ' . $opera['nume_editura2'];
									 }
									 
									 if ($opera['backup_localitate'] != NULL) {
										 echo ', ' . $opera['backup_localitate'];
									 }

									 if ($opera['anul_publicatiei'] !=NULL ) {
										 echo ' ' . $opera['anul_publicatiei'];
									 }

									 $nr_pagini = (int)$opera['nr_pagini'];
									 if ($nr_pagini != NULL || $nr_pagini != 0) {
										 echo ', ' . $opera['nr_pagini'] . ' pag.';
									 }

									echo '</li>';
								endforeach;?>
							</ul>

						<div class="about_auth_title mb15">
							<h3>Cărți despre poet</h3>
						</div>
						<ul class="list_of_articles mb30">
						<?php foreach ($cartiDesprePoet as $carte) :
									echo '<li>';

									if ($carte['backup_bAutor'] != NULL OR $carte['backup_bAutor'] !='') {
										echo $carte['backup_bAutor'] . ', ';
									}

									echo '<em>' . $carte['titlu'] . '</em>';

									 if ($carte['subtitlu'] != NULL) {
										echo ', ' . $carte['subtitlu'] . '</em>';
									 } else {echo '</em>';}

									 if ($carte['nume_editura1'] != NULL) {
									 echo ', Editura ' . $carte['nume_editura1'];
									 } 

									 if ($carte['nume_editura2'] != NULL) {
										echo ', Editura ' . $carte['nume_editura2'];
									 }
									 
									 if ($carte['backup_localitate'] != NULL) {
										 echo ', ' . $carte['backup_localitate'];
									 }

									 if ($carte['anul_publicatiei'] !=NULL ) {
										 echo ' ' . $carte['anul_publicatiei'];
									 }

									 $nr_pagini = (int)$carte['nr_pagini'];
									 if ($nr_pagini != NULL || $nr_pagini != 0) {
										 echo ', ' . $carte['nr_pagini'] . ' pag.';
									 }

									echo '</li>';
								endforeach;?>
						</ul>

					</div>
				</div>
			</div>	

<?php include "includes/footer.php"; ?>