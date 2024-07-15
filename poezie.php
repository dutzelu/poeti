<?php

include "includes/header.php";
include "controllers/poezie-partial.php";

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
                <?php echo $poem['continut'];?>
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
        <p>Alte poezii de nechifor crainic</p>
    </div>

    <hr class="small_border"/>


    <ul class="flex_between other_poetries mb20">
        <li class="border_left_gray">
            <div class="semibold font23 mb10">
                <p>Noaptea învierii</p>
            </div>
            <div class="red semibold font15 mb15">
                <p>creată în temnițe și lagăre</p>
            </div>
        </li>
        <li class="border_left_gray">
            <div class="semibold font23 mb10">
                <p>Cântecul potirului</p>
            </div>
            <div class="red semibold font15 mb15">
                <p>creată în temnițe și lagăre</p>
            </div>
        </li>
        <li class="border_left_gray">
            <div class="semibold font23 mb10">
                <p>Șoim peste prăpastie</p>
            </div>
            <div class="red semibold font15 mb15">
                <p>creată în deportare</p>
            </div>
        </li>
        <li class="border_left_gray">
            <div class="semibold font23 mb10">
                <p>Prolog</p>
            </div>
            <div class="red semibold font15 mb15">
                <p>creată în deportare</p>
            </div>
        </li>
        <li class="border_left_gray">
            <div class="semibold font23 mb10">
                <p>Portret</p>
            </div>
            <div class="red semibold font15 mb15">
                <p>creată în deportare</p>
            </div>
        </li>
    </ul>

    <div class="see_all_potries right font15 semibold mb35">
        <a href="javascript:void(0)">Vezi toate poeziile acestui autor</a>
        <a class="see_all_arrow" href="javascript:void(0)"><i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
    </div>

    <div class="single_poet flex_start mb35 btn_poet">
        <img alt="poet" src="/images/nechifor_crainic.jpg">
        <div class="single_poet_content pl50 width100">
            <div class="single_poet_name border_b_red semibold font17 pr40 pb10 mb20">
                Nechifor Crainic
            </div>

            <div class="flex_start poet_info">
                <ul class="poet_info1 pr40 font17">
                    <li><span>Nascut:</span> 22 Decembrie 1889</li>
                    <li><span>Locul nasterii:</span> Bulbucata, Giurgiu</li>
                    <li><span>Ocupatia la arestare:</span> poet, profesor, ziarist</li>
                    <li><span>Intemnitat timp de:</span> 15 ani</li>
                    <li><span>Intemnitat la:</span> Jilava, Vaicaresti, Aiud</li>
                    <li><span>Data adormirii:</span> 20 August 1972</li>
                </ul>
                <ul class="poet_info2 font17">
                    <li>
                        <span>Site-uri:</span>
                        <p>Poezii Nechifor Crainic</p>
                        <p>Citate Nechifor Crainic</p>
                    </li>
                </ul>
            </div>

            <div class="poet_testimonials font15 semibold mb15 red">
                <a class="red" href="javascript:void(0)">Mărturii despre Nechifor Crainic</a>
                <a class="testimonials_arrow" href="javascript:void(0)"><i aria-hidden="true"
                                                                           class="fa fa-long-arrow-right"></i></a>
            </div>
            <button class="font18">Biografie</button>
            <button class="font18">Sinteza operei</button>
        </div>
    </div>
</div>


<?php
endforeach;
include "includes/footer.php";

?>