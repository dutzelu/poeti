<?php

include "includes/header.php";
include "controllers/articol-partial.php";

?>


	<div class="main_container">

		<hr class="red_hr">
		<div class="title_cat uppercase semibold center">
			<a href="<?php echo BASE_URL . 'categorie-articole.php/' . creare_url_din_titlu($categorie) . '/' . $categ_id; ?>">
				<p class="title-page"><?php echo $categorie;?></p>
			</a>
		</div>
		<hr class="small_hr">

		<div class="flex_start_between remove_flex768">
			<div class="first-col border_none">
				<img src="<?php echo BASE_URL . 'images/articole/' . $imagine;?>" alt="articol">

				<div class="mt25 font17 mb30">
					<p><span class="lightgray">Autor:</span> <?php echo $autor;?></p>
					<p><span class="lightgray">Publicat pe:</span> <?php echo (strftime('%d %B %Y', strtotime($dataPublicare)));?></p>
					<!-- <p><span class="lightgray">Nr vizualizari:</span> 112</p> -->
				</div>

				<div class="share_btn pb25">
					<span class="p15">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url;?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</span>
					<span class="p15">
						<a href="#" onclick="window.print();return false;"><i class="fa fa-print" aria-hidden="true"></i></a>	
					</span>
					<span class="p15">
						<a href="mailto:contact@poetiiinchisorilor.ro"><i class="fa fa-envelope" aria-hidden="true"></i></a>
					</span>
					
				</div>

				<hr class="darkgray_hr"/>

				<ul class="right article_left_side mt25 mb30">

				<?php foreach ($articoleSimilare as $similar): ?>
					<li>
						<a href="<?php echo BASE_URL . 'articole.php/' . creare_url_din_titlu($similar['titlu']) . '/' . $similar['id']; ?>">
							<span><?php echo $similar['titlu']; ?> </span> 
							<i class="fa fa-angle-double-right red" aria-hidden="true"></i>
						</a>
					</li>
				<?php endforeach;?>
				</ul>

				<hr class="smallred_hr"/>

				<ul class="right article_left_side mt25 mb30 uppercase semibold">

				<?php foreach ($categorii as $cat):?>
					<li>
						<a href="<?php echo BASE_URL . 'categorie-articole.php/' . creare_url_din_titlu($cat['nume']) . '/' . $cat['id']; ?>">
							<span><?php echo $cat['nume'];?></span> 
							<i class="fa fa-angle-double-right red" aria-hidden="true"></i>
						</a>
					</li>
				<?php endforeach; ?>
					
				</ul>
			</div>

			<div class="second-col">
				<div class="title_single_art red font23 mb30 semibold">
					<?php echo $titlu;?>
				</div>
				<div class="content_single_art">
					<?php echo $continut;?>
				</div>
				<div class="source_single_art font17 mb30 semibold">
					<span class="red">Sursa:</span>
					<span><?php echo $sursa;?></span>
				</div>
			</div>
		</div>

	</div>

	<?php

include "includes/footer.php";

?>
