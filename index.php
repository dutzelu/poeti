<?php

include "includes/header.php";
include "controllers/home-partial.php";

?>

		<div class="main_container">
			<div class="testimonal_section flex_space_between pt25 pb25 mb35">
				<div class="center red font28" style="width:28%";>
					<p>
						<?php 
						echo $autorPrenume . ' <span class="uppercase">' . $autorNume . '</span>';
						if ($autorPseudonim != NULL) {echo ' (' . $autorPseudonim . ')' ;}?>
					</p>	
				</div>
				<div style="width:12%;">
					<?php 			
					echo '<img class="pozaCitat" src="' . BASE_URL . 'images/avatare/' . $autorAvatar . '.jpg"/>';?>
				</div>
				<div class="quotation_mark relative pl50 pr60" style="width:60%";>
					<p><?php echo $citatContinut;?></p>
					<p><?php echo $citatSursa;?></p>
				</div>				
			</div>

			<div class="poem_section">

				<?php foreach ($poeziiHome3 as $poem): ?>
					<div class="pl40 pr35 pt10 pb25 mb35 border_left_gray child_poem_section relative">
						<div class="content_poem">
							<div class="uppercase red semibold font15 mb15">
				<!-- Autor -->
				<?php
							echo '<a class="red" href="' . BASE_URL . 'fisa-biografica.php/' . $poem['alias'] . '/' . $poem['id_poet'] . '">';
							echo $poem['prenume'] . ' ' . $poem['nume']; if ($poem['nume_pseudonim'] == NULL) {echo "";} else {echo ' (' . $poem['nume_pseudonim'] . ')';}?></a>
							</div>
				<!-- Titlu -->
							<div class="semibold mb20">
								<?php echo '<a class="poem-title" href="' . BASE_URL . 'poezie.php/' . $poem['alias'] . '/' . creare_url_din_titlu($poem['titlu'])  . '/' . $poem['id_poezie'] . '" style="color: black">' . $poem['titlu'];?></a>
							</div>
				<!-- Continut -->
							<div class="poem_content">
									<?php echo taiePoezie($poem['continut'], 4);?>
							</div>
						</div>
						<!-- Citeste mai mult -->
						<div class="read_more">
							<?php echo '<a href="' . BASE_URL . 'poezie.php/' . $poem['alias'] . '/' . creare_url_din_titlu($poem['titlu'])  . '/' . $poem['id_poezie'] . '">' . 'citește mai mult »</a>'; ?>
						</div>					
					</div>
				
				<?php endforeach; ?>

				 
 
			</div>

			<div class="events_section mb35">
				<div class="event_title uppercase font19">
					<p>Evenimente</p>
				</div>
				<div class="content_evens flex_start_between">
					<div class="content_evens_child">
						<div class="mb35">
							<img src="images/events.jpg" alt="events"/>
						</div>
						<div class="semibold font20 text_content_event">
							<p>Transfigurarea suferinței prin rugăciune şi poezie - Mesajul Patriarhului Daniel la Colocviul de literatură creştină</p>
						</div>
						<div class="red read_more_red">
							<a href="javascript:void(0)" class="red">citește mai departe</a>
						</div>
					</div>
					<div class="content_evens_child">
						<div class="mb35">
							<img src="images/events.jpg" alt="events"/>
						</div>
						<div class="semibold font20 text_content_event">
							<p>Transfigurarea suferinței prin rugăciune şi poezie - Mesajul Patriarhului Daniel la Colocviul de literatură creştină</p>
						</div>
						<div class="red read_more_red">
							<a href="javascript:void(0)" class="red">citește mai departe</a>
						</div>
					</div>
					<div class="content_evens_child">
						<div class="mb35">
							<img src="images/events.jpg" alt="events"/>
						</div>
						<div class="semibold font20 text_content_event">
							<p>Transfigurarea suferinței prin rugăciune şi poezie - Mesajul Patriarhului Daniel la Colocviul de literatură creştină Transfigurarea suferinței prin rugăciune şi poezie - Mesajul Patriarhului Daniel la Colocviul de literatură creştină</p>
						</div>
						<div class="red read_more_red">
							<a href="javascript:void(0)" class="red">citește mai departe</a>
						</div>
					</div>
				</div>
			</div>

			<hr class="red_hr"/>

			<div class="syntheses_section flex_start_between relative">
				<div class="syntheses_left pl40 pt50">
					<div class="uppercase font43 mb100 zindex10 relative">
						<p><span class="red">Fenomenul</span> poeziei carcerale</p>	
					</div>
					<div class="mb100 font23 mobile_hidden short_poem zindex10 relative">
						<p class="relative" style="display: inline-block; font-size: 23px">
								Ne vom întoarce într-o zi,<br/>
 								Ne vom întoarce neapărat.<br/> 
 								Vor fi apusuri aurii,<br/>
 								Cum au mai fost cînd am plecat.
 						</p>
					</div>					
				</div>

				<div class="syntheses_right">
					<div class="content_syntheses_right mt15 pt10 flex_start_between">
						<div class="img_syntheses_right center">
							<img src="images/sinteza.png" alt="">
						</div>
						<div class="txt_syntheses_right ml20">
							<div class="font22 semibold mb20 title_txt_right">
<!--								culoare temporara pana se apbroba-->
								<a href="pagina-articol.html" style="color: black">În ce condiții s-a născut poezia din închisori</a>
							</div>
							<div class="gray font17 details_txt_right">
								<p>În libertate timpul este un dar preţios care îţi permite să faci tot ce doreşti. În închisoare timpul... </p>
							</div>							
						</div>
					</div>

					<div class="content_syntheses_right mt15 pt10 flex_start_between">
						<div class="img_syntheses_right center">
							<img src="images/sinteza.png" alt="">
						</div>
						<div class="txt_syntheses_right ml20">
							<div class="font22 semibold mb20 title_txt_right">
<!--								culoare temporara pana se aproba-->
								<a href="pagina-articol.html" style="color: black">În ce condiții s-a născut poezia din închisori</a>
							</div>
							<div class="gray font17 details_txt_right">
								<p>În libertate timpul este un dar preţios care îţi permite să faci tot ce doreşti. În închisoare timpul... </p>
							</div>							
						</div>
					</div>
					
					<div class="flex_start font22 semibold mt15 pt10 pb20 more_articles mobile_block">
<!--						<p>Circularea poeziilor prin închisori <span class="red">&raquo;</span></p>-->
						<p style="font-size: 20px">Ce au reprezentat poetii si poezia lor pentru patimitorii din inchisori <span class="red">&raquo;</span></p>
					</div>				

				</div>

				<div class="absolute more_syntheses flex_start_between">
					<div class="triangle_red"></div>
					<div class="more_syntheses_bg">
						<a href="javascript:void(0)" class="uppercase">Vezi toate sintezele</a>
					</div>
				</div>
			</div>

			<hr class="gray-border"/>

			<div class="thematic_poems">
				<div class="title_thematic_poems semibold uppercase center font32 pb50 pt30">
					<p>Poezii cu subiectul <span class="red">foamea</span></p>
				</div>
				<div class="content_thematic_poems">
<!--					pt10 pb25 mb35-->
					<div class="pl40 pr35  pb20 mb25 border_left_gray child_poem_section relative">
						<div class="content_poem">
							<div class="uppercase red semibold font15 mb15">
								<p>Radu Gyr</p>
							</div>
							<div class="semibold font29 mb20">
								<p>Știu că sunt lut</p>
							</div>
							<div class="poem_content">
								<p>Ştiu că sunt lut, dar nu ştiu cine 
								mi-a pus în piept albine stranii,
								să-mi scoată mir din mărăcine,
								din bălării, împărtăşanii.</p>
								<p>Minunea mea se-ntâmplă vie
								din mofturi mici şi biete fleacuri…
								Un colţ de-al meu e-o-mpărăţie,
								o zi de-a mea răsfrânge veacuri.</p>
								<p>De nu strâng mările în braţe,
								prin câte-o baltă tot deretic
								și gheara mea tot stă să-nhaţe
								din orice taină câte-un petic.</p>
								<p>Și dacă-ncălecat pe-o rază
								ea nu mă urcă-n cer, încalțe</p>
							</div>
						</div>
						<div class="read_more absolute">
							<a href="javascript:void(0)">Citește mai departe</a>
						</div>
					</div>
					<div class="pl40 pr35  pb20 mb25 border_left_gray child_poem_section relative">
						<div class="content_poem">
							<div class="uppercase red semibold font15 mb15">
								<p>Radu Gyr</p>
							</div>
							<div class="semibold font29 mb20">
								<p>Știu că sunt lut</p>
							</div>
							<div class="poem_content">
								<p>Ştiu că sunt lut, dar nu ştiu cine 
								mi-a pus în piept albine stranii,
								să-mi scoată mir din mărăcine,
								din bălării, împărtăşanii.</p>
								<p>Minunea mea se-ntâmplă vie
								din mofturi mici şi biete fleacuri…
								Un colţ de-al meu e-o-mpărăţie,
								o zi de-a mea răsfrânge veacuri.</p>
								<p>De nu strâng mările în braţe,
								prin câte-o baltă tot deretic
								și gheara mea tot stă să-nhaţe
								din orice taină câte-un petic.</p>
								<p>Și dacă-ncălecat pe-o rază
								ea nu mă urcă-n cer, încalțe</p>
							</div>
						</div>
						<div class="read_more absolute">
							<a href="javascript:void(0)">Citește mai departe</a>
						</div>
					</div>
					<div class="pl40 pr35  pb20 mb25 border_left_darkgray child_poem_section relative">
						<div class="uppercase font15 semibold mb35">
<!--							<span class="red font23 title_lspacing">Tematica</span><br/> poeziei carcerale-->
							<span class="red font23 title_lspacing">
								<a href="tematica-poeziei-carcerale.html" style="color: var(--red-1)">
								Tematica</a></span><br/> poeziei carcerale
						</div>
						<ul class="thematic_list mb20">
							<li>Adevărul</li>
							<li>pribegia</li>
							<li>prietenia</li>
							<li>bucuria</li>
							<li>Adevărul</li>
							<li>pribegia</li>
							<li>prietenia</li>
							<li>bucuria</li>
							<li>Adevărul</li>
							<li>pribegia</li>
							<li>prietenia</li>
							<li>bucuria</li>
							<li>Adevărul</li>
							<li>pribegia</li>
							<li>prietenia</li>
							<li>bucuria</li>
							<li>Adevărul</li>
							<li>pribegia</li>
							<li>prietenia</li>
							<li>bucuria</li>
							<li>Adevărul</li>
							<li>pribegia</li>
							<li>prietenia</li>
						</ul>
						<div class="see_all_thematic absolute">
							<a href="javascript:void(0)">Vezi toate subiectele &raquo;</a>
						</div>
					</div>
				</div>
			</div>

			<div class="video_section flex_space_between mb35">
				<div class="uppercase font32 title_video_section">
<!--					temporar-->
<!--					<p>videoteca</p>-->
					<a href="videoteca.html" style="color: white">videotecă</a>
				</div>
				<div class="video_section_list">
					<ul>
						<li style="padding-right: 5px"><a href="videoteca.html">conferințe</a></li>
						<li style="padding:0 10px"><a href="videoteca.html">concerte</a></li>
						<li style="padding-left: 5px"><a href="videoteca.html">documentare</a></li>
					</ul>
				</div>
			</div>

			<div class="content_video_section mb20">
				<div class="pl40 pr35 pt10 pb25 border_left_gray child_poem_section child_poem-index">
					<div class="center">
						<a href="javascript:void(0)">
							<img src="images/video1.jpg" alt="">
						</a>
					</div>
					<div class="semibold red mt15 uppercase font15">
						<a href="javascript:void(0)" class="red">video</a>
					</div>
					<div class="font20 video_desc semibold mt15">
						<p>Cu Iisus in celula (concert Tudor Gheorghe)</p>
					</div>
				</div>

				<div class="pl40 pr35 pt10 pb25 border_left_gray child_poem_section">
					<div class="center">
						<a href="javascript:void(0)">
							<img src="images/video1.jpg" alt="">
						</a>
					</div>
					<div class="semibold red mt15 uppercase font15">
						<a href="javascript:void(0)" class="red">video</a>
					</div>
					<div class="font20 video_desc semibold mt15">
						<p>Dan Vasilescu (Trupa Acum) - Colindul robului de Valeriu Gafencu</p>
					</div>
				</div>

				<div class="pl40 pr35 pt10 pb25 border_left_gray child_poem_section">
					<div class="uppercase font23 red semibold mb35">
						<p>Alte interpretări</p>
					</div>
					<ul class="other_interpretations font19 semibold">
						<li>Avem o țară (de Radu Gyr)- interpretează maicile de la Mănăstirea Dervent</li>
						<li>Colind (de Radu Gyr)</li>
						<li>Cedry2k - Ridică-te, Gheorghe, ridică-te, Ioane! de Radu Gyr</li>
						<li>Îndemn la luptă - Radu Gyr </li>
					</ul>
				</div>
			</div>

			<hr class="red_hr mb20">

			<div class="comm_section relative pb25">
				<span class="red semibold font34 uppercase">Comemorări</span>
				<span class="font18 center letterspacing7">ale poeților din<br/> inchisorile comuniste</span>
				<span class="uppercase current_month font23">luna octombrie</span>
			</div>

			<div class="all_poets pl10">
				<div class="single_poet flex_start mb35">
					<img src="images/poet.jpg" alt="poet">
					<div class="single_poet_content ml20">
						<div class="single_poet_name semibold font29 mb20">
							Nechifor crainic
						</div>
						<div class="single_poet_info1 font15 red">
							11 octombrie
						</div>
						<div class="single_poet_info2 font15">
							57 de aani de la trecerea la Domnul
						</div>
					</div>
				</div>

				<div class="single_poet flex_start mb35">
					<img src="images/poet.jpg" alt="poet">
					<div class="single_poet_content ml20">
						<div class="single_poet_name semibold font29 mb20">
							Nechifor crainic
						</div>
						<div class="single_poet_info1 font15 red">
							11 octombrie
						</div>
						<div class="single_poet_info2 font15">
							57 de aani de la trecerea la Domnul
						</div>
					</div>
				</div>

				<div class="single_poet flex_start mb35">
					<img src="images/poet.jpg" alt="poet">
					<div class="single_poet_content ml20">
						<div class="single_poet_name semibold font29 mb20">
							Nechifor crainic
						</div>
						<div class="single_poet_info1 font15 red">
							11 octombrie
						</div>
						<div class="single_poet_info2 font15">
							57 de aani de la trecerea la Domnul
						</div>
					</div>
				</div>

				<div class="single_poet flex_start mb35">
					<img src="images/poet.jpg" alt="poet">
					<div class="single_poet_content ml20">
						<div class="single_poet_name semibold font29 mb20">
							Nechifor crainic
						</div>
						<div class="single_poet_info1 font15 red">
							11 octombrie
						</div>
						<div class="single_poet_info2 font15">
							57 de aani de la trecerea la Domnul
						</div>
					</div>
				</div>

				<div class="single_poet flex_start mb35">
					<img src="images/poet.jpg" alt="poet">
					<div class="single_poet_content ml20">
						<div class="single_poet_name semibold font29 mb20">
							Nechifor crainic
						</div>
						<div class="single_poet_info1 font15 red">
							11 octombrie
						</div>
						<div class="single_poet_info2 font15">
							57 de aani de la trecerea la Domnul
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include "includes/footer.php"; ?>
