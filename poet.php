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

					<ul class="custom_list_of_author">
						<a href="javascript:;"><li>Biografie</li></a>
						<a href="javascript:;"><li>Fișă biografică</li></a>
						<a href="javascript:;"><li>Fișă carcerală</li></a>
						<a href="javascript:;"><li>Itinerariu detenție</li></a>
						<a href="javascript:;"><li>Poezii</li></a>
					</ul>
				</div>
				<div class="second_col add_border_left">
					<div class="custom_name_of_author max_width_full mb20">
						<h2><?php echo $numeComplet;?></h2>
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

			<div class="top_color"></div>

			<div class="flex_start_between remove_flex768 mb35">
				<div class="first_col">
					<div class="lirics_title right">
						<h2>Poezii</h2>
					</div>
					<div class="most_popular right mb10">
						<p>cele mai</p>
						<p>populare</p>
					</div>
					<ul class="list_of_articles right remove_column_count mb30">

					<?php
						foreach ($poeziiPopulare as $poezie) {
							echo '<li><a href="' . BASE_URL . 'poezii.php/' . $aliasPoet . '/' . creare_url_din_titlu($poezie['titlu'])  . '/' . $poezie['id'] . '">' . $poezie['titlu'] . '</a></li>' ;
						}
					?>
					
					</ul>
				</div>
				<div class="second_col">
					<div class="set_on_column mt25">

					<?php
					foreach ($poeziiAfisateInitial as $poezie) {
						echo '<div class="poems">';
							echo '<div class="poem_title mb10">';
								echo '<h4>' . $poezie['titlu'] . '</h4>';
							echo '</div>';
							
							echo '<div class="poem_lirics">';

							taiePoezie ($poezie['continut'], 1);

								echo '<a class="citesteMaiMult red mt10" href="' . BASE_URL . 'poezii.php/' . $aliasPoet . '/' . creare_url_din_titlu($poezie['titlu'])  . '/' . $poezie['id'] . '">' . 'citește mai mult »</a>';

							echo '</div>';
						echo '</div>';

					}
					?>

					</div>
					<div class="list_completed mb10">
						<p>lista completă</p>
					</div>
					<ul class="custom_pagination">
						<li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li class="hide_xs"><a href="#">5</a></li>
						<li class="hide_xs"><a href="#">6</a></li>
						<li class="hide_xs"><a href="#">7</a></li>
						<li class="hide_xs"><a href="#">8</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

<?php include "includes/footer.php"; ?>