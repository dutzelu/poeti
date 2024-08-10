<?php

include "includes/header.php";
include "controllers/poezie-partial.php";

$cautare = isset( $_GET['cautare']) ? $_GET['cautare'] : NULL;
$cuvant_cautat_html = '<b>' . $cautare . '</b>';

?>
<div class="main_container">

    <hr class="big_gray_hr"/>

    <div class="poetry_content pl40 pr40">

        <?php foreach ($datePoezie as $poem): ?>
        <div class="poetry_txt">
            <div class="uppercase red semibold font15 mb15">
                <p><?php echo '<a class="red" href="' . BASE_URL . 'fisa-biografica.php/' . $poem['alias'] . '/' . $poem['id_poet'] . '">';
                echo $poem['prenume'] . ' ' . $poem['nume']; if ($poem['nume_pseudonim'] == NULL) {echo "";} else {echo ' (' . $poem['nume_pseudonim'] . ')';}?></a></p>
            </div>
            <div class="semibold font29 mb5">
                <p><?php echo $poem['titlu'];?></p>
            </div>
            <div class="sublink-poezie">
                <p><?php if ($poem['titlu_varianta'] != NULL) {echo $poem['titlu_varianta'];}?></p>
            </div>
            <div class="poem_content">
                <?php 

                // subliniere cu bold cuvant cautat
                $continut = str_ireplace($cautare, $cuvant_cautat_html, $poem['continut']); 
                echo $continut;
                ?>
            </div>
            <div class="border-top"></div>
            <div class="source_poetry font17">
                <p class="author-title">Poezie culeasă de: <?php echo $poem['sursa_culegator'];?></span>
                </p>
                <p class="author-title">Sursa: <span class="italic author-description"> <?php echo $poem['sursa_titlu'];?></span>
                </p>
            </div>
            <!-- <div class="alternative_poetry">
                <p class="alternative_title">Varianta : </p>
                <ul class="alternative_ul">
                    <li class="alternative_link active-href"> 1</li>
                    |
                    <li class="alternative_link"> 2</li>
                    |
                    <li class="alternative_link"> 3</li>
                    |
                    <li class="alternative_link"> 4</li>
                    |
                    <li class="alternative_link"> 5</li>
                    |
                    <li class="alternative_link"> 6</li>
                    |
                    <li class="alternative_link"> 7</li>
                    |
                </ul>
            </div> -->
        </div>

        <div class="details_poetry relative mt40">
            <div class="absolute more_details_poetry red uppercase">
                Detalii poezie
            </div>
<!-- 
            <div class="structure_poetry mb20">
                <div class="poetry_subtitle uppercase semibold font15 mb10 red">
                    Nr,. variante poezie : --db--
                </div>

            </div> -->

            <div class="structure_poetry mb20 red">
                <div class="poetry_subtitle uppercase semibold font15 mb10">
                    Perioada creației
                </div>
                <ul class="poetry_subcategory">
                    <li><?php echo $poem['perioada_creatiei'];?></li>
                </ul>
            </div>

            <div class="structure_poetry mb20">
                <div class="poetry_subtitle uppercase semibold font15 mb10">
                    Subiectul poeziei
                </div>
                <ul class="poetry_subcategory">
                    <li>
                        <a href="<?php echo BASE_URL . 'teme.php/' . creare_url_din_titlu($poem['tag']) . '/' . $poem['tag_id']; ?>">
                            <?php echo $poem['tag'];?>
                        </a>
                    </li>
                </ul>
            </div>
            
        <?php if ($nrTaguriSecundare != NULL):?>
            <div class="structure_poetry mb20">
                <div class="poetry_subtitle uppercase semibold font15 mb10">
                    Subiecte secundare
                </div>
                <ul class="poetry_subcategory">
                    <?php foreach ($taguriSecundare as $tags):?>
                         <li><a href="<?php echo BASE_URL . 'teme.php/' . creare_url_din_titlu($tags['nume']) . '/' . $tags['id']; ?>"><?php echo $tags['nume'];?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        <?php endif;?>

            <div class="structure_poetry mb20">
                <div class="poetry_subtitle uppercase semibold font15 mb10">
                    Data si locul creației
                </div>
                <ul class="poetry_subcategory">
                    <li><?php echo $poem['data_creatiei'] . ' ' . $poem['locul_creatiei'];?></li>
                </ul>
            </div>

            <div class="structure_poetry mb20">
                <div class="poetry_subtitle uppercase semibold font15 mb10">
                    Ciclul poeziei
                </div>
                <ul class="poetry_subcategory">
                    <li><?php echo $poem['nume_ciclu'];?></li>
                </ul>
            </div>


            <div class="structure_poetry mb20">
                <div class="poetry_subtitle uppercase semibold font15 mb10">
                    Specia poeziei
                </div>
                <ul class="poetry_subcategory">
                    <li><?php echo $poem['specie'];?></li>
                </ul>
            </div>

            <div class="structure_poetry mb20">
                <div class="poetry_subtitle uppercase semibold font15 mb10">
                    Structura strofei
                </div>
                <ul class="poetry_subcategory">
                    <li>distih</li>
                </ul>
            </div>

            <div class="structure_poetry mb20">
                <div class="poetry_subtitle uppercase semibold font15 mb10">
                    Rima
                </div>
                <ul class="poetry_subcategory">
                    <li><?php echo $poem['nume_rima'];?></li>
                </ul>
            </div>

            <div class="structure_poetry mb20">
                <div class="poetry_subtitle uppercase semibold font15 mb10">
                    Picior metric
                </div>
                <ul class="poetry_subcategory">
                    <li><?php echo $poem['nume_picior_metric'];?></li>
                </ul>
            </div>

            <div class="structure_poetry">
                <div class="poetry_subtitle uppercase semibold font15">
                    Numar de strofe: <span class="red"><?php echo $poem['nr_strofe'];?></span>
                </div>
            </div>

         <!-- <div class="poetry_visualization">
             Număr accesări : 58
         </div> -->

        </div>

    </div>
<!-- Variante audio

    <div class="section_audio_poetry">
        <div class="audio_version_no pb10">
            <div class="audio_poetry uppercase semibold font17">
                <p>Interpretare audio <span class="silver">[varianta 1]</span></p>
            </div>

            <hr class="big_gray_hr"/>

            <div class="content_audio_version">
                <iframe frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/269559820&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=false"
                        width="100%"></iframe>
            </div>

            <hr class="big_gray_hr"/>
        </div>

        <div class="audio_version_no pb10">
            <div class="audio_poetry uppercase semibold font17">
                <p>Interpretare audio <span class="silver">[varianta 2]</span></p>
            </div>

            <hr class="big_gray_hr"/>

            <div class="content_audio_version">
                <iframe frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/269559820&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=false"
                        width="100%"></iframe>
            </div>

            <hr class="big_gray_hr"/>
        </div>

    </div> -->


    <div class="poetry_story flex_between mb35">
        <div class="poetry_story_txt">
            <div class="poetry_story_title uppercase font17 semibold">
                <p>povestea poeziei</p>
            </div>
            <div class="poetry_story_content">
            <?php echo $poem['continut_povestea_poeziei'];?>
            </div>
        </div>
        <div class="poetry_story_comment">
            <div class="poetry_story_title uppercase font17 semibold">
                <p>comentariu</p>
            </div>
            <div class="poetry_story_content">
                <?php echo $poem['continut_articol_comentariu'];?>
            </div>
        </div>
    </div>

    <div class="event_title uppercase font19">
            <p>Alte poezii de <?php echo $poem['prenume'] . ' ' . $poem['nume']; if ($poem['nume_pseudonim'] == NULL) {echo "";} else {echo ' (' . $poem['nume_pseudonim'] . ')';}?>
                </p>
    </div>

    <hr class="small_border"/>


    <ul class="flex_between other_poetries mb20">
        <?php foreach ($cinciPoeziiPoet as $cinci):?>
            <div class="cinciPoezii">
                <a href="<?php echo BASE_URL . 'poezie.php/' . $poem['alias'] . '/' . creare_url_din_titlu($cinci['titlu'] . '/' . $cinci['id']);?>">
            <li class="border_left_gray">
                <div class="semibold font23 mb10">
                    <p><?php echo $cinci['titlu'];?></p>
                </div>
                <div class="red semibold font15 mb15">
                    <p>creată: <?php echo $cinci['perioada_creatiei'];?></p>
                </div>
            </li>
        </a>
        </div>
        <?php endforeach;?>
    </ul>

    <div class="see_all_potries right font15 semibold mb35">
        <a href="<?php echo BASE_URL . 'poezii-poet.php/' . $poem['alias'] . '/' . $idPoet;?>">Vezi toate poeziile acestui autor <i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
    </div>

    <div class="single_poet flex_start mb35 btn_poet">
        <img width="300" alt="poet" src="<?php echo $fotoBiografie;?>">
        <div class="single_poet_content pl50 width100">
            <div class="single_poet_name border_b_red semibold font17 pr40 pb10 mb20">
                <p><?php echo '<a class="red" href="' . BASE_URL . 'fisa-biografica.php/' . $poem['alias'] . '/' . $poem['id_poet'] . '">';
                echo $poem['prenume'] . ' ' . $poem['nume']; if ($poem['nume_pseudonim'] == NULL) {echo "";} else {echo ' (' . $poem['nume_pseudonim'] . ')';}?></a>
                </p>
            </div>

            <div class="flex_start poet_info">
                <ul class="poet_info1 pr40 font17">
                           <li><span>Data nașterii: </span><span><?php echo $dataNastere;?></span></li>
							<li><span>Locul nașterii: </span><span><?php echo $loculNasterii . ', jud. ' . $judetulNasterii;?></span></li>
							<li><span>Naționalitate: </span><span><?php echo $nationalitate;?></span></li>
							<li><span>Religie/confesiune: </span><span><?php echo $confesiune;?></span></li>
							<li><span>Ocupație: </span><span><?php echo $ocupatii; ?></span></li>
                </ul>
                <ul class="poet_info2 font17">
                    <li>
                        <span>Site-uri:</span>
                        <p>--db--</p>
                        <p>--db--</p>
                    </li>
                </ul>
            </div>

            <div class="poet_testimonials font15 semibold mb15 red">
                <a class="red" href="https://fericiticeiprigoniti.net/<?php echo $aliasPoet;?>">Mărturii despre Nechifor Crainic</a>
                <a class="testimonials_arrow" href="javascript:void(0)">
                    <i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
            </div>
            <button onclick="document.location='<?php echo BASE_URL . 'biografie-poet.php/' . $aliasPoet . '/' . $idPoet; ?>'" class="font18">Biografie</button>
        </div>
    </div>
</div>


<?php
endforeach;
include "includes/footer.php";

?>