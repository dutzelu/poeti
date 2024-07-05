<?php

include "includes/header.php";
include "controllers/poet-partial.php";
include "controllers/biografie-poet-partial.php";
$autor_biografie = NULL;
$continut = NULL;
$sursa_titlu = NULL;
?>

		<div class="main_container">
			<div class="flex_start_between remove_flex768">
				<div class="first_col">
					<div class="portret mb20 display-flex-se">
							<img src="<?php echo $fotoBiografie; ?>" alt="<?php echo $numeComplet . ' (' . $numePseudonim . ')';?>">
					</div>
					<div class="name_of_author center mb20">
						<p class="uppercase"><?php echo $numeComplet;?></p>
						<p class="uppercase"><?php if ($numePseudonim == NULL) {echo "";} else {echo '(' . $numePseudonim . ')';}?></p>
					</div>
					<?php include 'controllers/menu-biografic.php';?>

				</div>
				<div class="second_col" >
					<div class="flex_start_between mb10 remove_flex992">
						<div class="custom_name_of_author">
							<h2><?php echo $numeComplet;?>
								<?php if ($numePseudonim == NULL) {echo "";} else {echo '(' . $numePseudonim . ')';}?>
							</h2>
						</div>

					</div>
					<div class="title_of_page mb20">
						<h2><span>Biografie</span></h2>
					</div>

					<div class="mb30">
						<?php
							foreach ($dateBiografie as $biografie) {
								echo $continut = $biografie['continut'];
								$autor_biografie = $biografie['nume_autor'];
								$sursa_titlu = $biografie['sursa_titlu'];
							}
						?>
					</div>
					<div class="author_of_article mb30">
						<div class="name_of_author">
							<h3><span>Autor: </span><span><?php echo $autor_biografie;?></span></h3>
							<h3><span>Sursa: </span><span><?php echo $sursa_titlu;?></span></h3>
						</div>
					</div>

				</div>

			</div>
 
		</div>

		<?php include "includes/footer.php"; ?>
