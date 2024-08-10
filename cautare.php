<?php 
    include ('includes/header.php');
    include ('controllers/cautare-partial.php');

$i=1;
$a=1;
?> 


<div class="main_container">

    <hr class="red_hr">
    <div class="title-start uppercase semibold center">
        <p class="page-title">Rezultate pentru: <span class="page-title-span">"<?php echo $cautare;?>"</span></p>
    </div>



    <!-- rezultate poezii -->

    <?php 
    if ($tip == 'poezii' OR $tip == NULL):
    if ($nrCautarePoezii != 0):?>
    <div>
        <h2>În poezii<span class="result-search-span">
            (<?php 
                if($nrCautarePoezii==1) {
                    echo '1 rezultat';
                } else {
                    echo $nrCautarePoezii . ' rezultate';
                }
            
            ?>)</span></h2>
        
        <ul class="search-list">

            <?php foreach($poezii as $po):?>
            <a href="<?php echo BASE_URL . 'poezie.php/' . creare_url_din_titlu($po['titlu']) . '/' . $po['id'] . '?cautare='. $cautare;?>">
                <li class="search-list-item">
                    <div class=""> 
                        <div class="mb10">
                            <p><i aria-hidden="true" class="fa fa-caret-right red pr-1"> </i> <?php echo $po['titlu'];?></p>
                            <p class="red search-author">de 
                             <?php echo $po['prenume'] . ' ' . $po['nume']; if ($po['nume_pseudonim'] == NULL) {echo "";} else {echo ' (' . $po['nume_pseudonim'] . ')';}?>
                        </div>
                        <?php

                        
                        // afisarea paragraf care cuprinde cuvantul cautat
                        
                        $regex = '/((?:\S+\s){0,15}\S*)(' . $cautare . ')(\S*(?:\s\S+){0,15})/mi';
                        preg_match_all($regex, trim($po['continut']), $matches, PREG_SET_ORDER, 0);
                        
                        foreach ($matches as $x => $y) {
                            $cuvant_cautat_html = '<b>' . $cautare . '</b>';
                            $paragraf = str_ireplace($cautare, $cuvant_cautat_html, $y[0]);
                            
                            echo '<div>(..) ' . $paragraf . '</div>';
                        }?>
                </div>
            </li>
                </a>
            
            <?php 

            if ($tip !== 'poezii'):
                $i++; 
                if ($i >= 10) {
                    echo '<a class="rezultate_extra_cautare" href="' . BASE_URL . 'cautare.php?tip=poezii&cautare=' . $cautare . '">Vezi toate cele '.  $nrCautarePoezii . ' rezultate în poezii »</a>';

                    break;
                }
            endif;
                endforeach ;

            ?>
         
        </ul>

    </div>
    <hr class="mt20 mb20">
    <?php endif;?>
    <?php endif;?>

        
    <!-- rezultate poeti -->

    <?php 
    if ($tip == NULL):
    if ($nrCautarePoeti != 0):?>
        <div>
            <h2>În lista de poeți<span class="result-search-span">(<?php echo $nrCautarePoeti;?> rezultate)</span></h2>
            
            <ul class="search-list">

                    <li class="search-list-item">
                        <div class=""> 
                            <div>
                                 <?php include "controllers/lista-poeti.php";?>
                            </div>
                            
                    </div>
                </li>
                    </a>
                
            </ul>
        </div>
        <hr class="mt20 mb20">

    <?php endif;?>
    <?php endif;?>



    <!-- rezultate articole -->

    <?php 
    if ($tip == 'articole' OR $tip == NULL):
    if ($nrCautareArticole != 0):?>
    <div>
        <h2>În articole<span class="result-search-span">
            (<?php 
                if($nrCautareArticole==1) {
                    echo '1 rezultat';
                } else {
                    echo $nrCautareArticole . ' rezultate';
                }
            
            ?>)</span>
        </h2>
        
        <ul class="search-list">

            <?php foreach($articole as $art):?>
            <a href="<?php echo BASE_URL . 'articole.php/' . creare_url_din_titlu($art['titlu']) . '/' . $art['id'] . '?cautare='. $cautare;?>">
                <li class="search-list-item">
                    <div class=""> 
                        <div>
                            <p><i aria-hidden="true" class="fa fa-caret-right red pr-1"> </i> <?php echo $art['titlu'];?></p>
                            <p class="red search-author">de 
                             <?php echo $art['prenume_autor'] . ' ' . $art['nume_autor'];?>
                        </div>
                        <?php

                        
                        // afisarea paragraf care cuprinde cuvantul cautat
                        
                        $regex = '/((?:\S+\s){0,8}\S*)(' . $cautare . ')(\S*(?:\s\S+){0,8})/mi';
                        preg_match_all($regex, trim($art['continut']), $matches, PREG_SET_ORDER, 0);
                        
                        foreach ($matches as $x => $y) {
                            $cuvant_cautat_html = '<b>' . $cautare . '</b>';
                            $paragraf = str_ireplace($cautare, $cuvant_cautat_html, $y[0]);
                            
                            echo '<div class="mt10">(..) ' . strip_tags($paragraf, "<b>") . '</div>';
                        }?>
                </div>
            </li>
                </a>
            
            <?php 
                if ($tip !== 'articole'):
                $a++; 
                if ($a >= 5) {
                    echo '<a class="rezultate_extra_cautare" href="' . BASE_URL . 'cautare.php?tip=articole&cautare=' . $cautare . '">Vezi toate cele '.  $nrCautareArticole . ' rezultate în articole »</a>';
                    break;
                }
                endif;
                endforeach ;

            ?>
         
        </ul>

    </div>
    <?php endif;?>
    <?php endif;?>


</div>
<div class="mb30"></div>

<?php include ('includes/footer.php');?>