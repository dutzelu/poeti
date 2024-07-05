<?php

include "includes/header.php";
include "controllers/poet-partial.php";

?>

<div class="main_container">
    <div class="flex_start_between remove_flex768">
        <div class="first-col-biografy">
            <div class="display-flex-se mb20">
              <img src="<?php echo $fotoBiografie; ?>" alt="<?php echo $numeComplet . ' (' . $numePseudonim . ')';?>">
                </div>
                <div class="name_of_author center mb20">
                    <p class="uppercase"><?php echo $numeComplet;?></p>
                    <p class="uppercase"><?php if ($numePseudonim == NULL) {echo "";} else {echo '(' . $numePseudonim . ')';}?></p>
                </div>
            <?php include 'controllers/menu-biografic.php';?>
        </div>
        <div class="second-col-biografy">
            <div class="second-wrapper" style="border-left: none">
                <div class="flex_start_between mb30 remove_flex992">
                    <div class="custom_name_of_author">
                        <h2><?php echo $numeComplet;?>
                            <?php if ($numePseudonim == NULL) {echo "";} else {echo '(' . $numePseudonim . ')';}?>
                        </h2>
                    </div>
                </div>
                <!--        recopiat fisa carcerala-->
                <div class="carcer-title">
                    <h3>Sumar represiune politica </h3>
                    <p>Prizonier de razboi timp de <span> 2 ani</span> in perioada <span>1943-1944</span> la <span>Oranki, Manastarca </span>
                    </p>
                    <p>Detinut politic timp de <span>13 ani</span> in perioada <span>1947-1963</span></p>
                    <p>Intemnitat la <span>Jilava, Vacaresti, Aiud, MAI</span></p>
                    <p>Domiciliu obligatoriuefectuat in perioada <span>1963-1965</span> la <span>Rachitoasa</span></p>
                </div>
                <!--        ============-->
                <div class="carcer-title">
                    <h3>Intinerariu detentie</h3>
                </div>
                <div class="carcer-time">
                    <!--          head-->
                    <div class="carcer-head">
                        <div class="prison-time">Perioada</div>
                        <span class="prison-time-left"></span>
                        <span class="prison-time-right"></span>
                        <div class="prison-years">1947-1963</div>
                    </div>
                    <!--    body        ==============-->
                    <div>
                        <ol>
                            <li><p><span class="red">MAI, Inchisoarea C  </span> | 3 iunie 1945 - 2 mai 1946</p></li>
                            <li><p><span class="red">Jilava (P) </span> | (Mai 1946). <br>
<!--                                todo nu isi are rostul br-->
                                Transfer intermediar  in vederea punerii pe rol a procesului</p></li>
                            <li><p><span class="red">Arestul tribunalui militar bucuresti </span> | mai 1946</p></li>
                            <li><p><span class="red">Aiud (p) </span> | 3 iunie 1945 - 2 mai 1946</p></li>
                            <li><p><span class="red">Vacaresti (P) </span> |august 1952- septembrie 1952 <br>
                                Transferat pentru tratament T.B.C.</p></li>
                            <li><p><span class="red">Jilava (p) </span></p></li>
                        </ol>
                    </div>
   <!--          head-->
                    <div class="carcer-head">
                        <div class="prison-time">Perioada</div>
                        <span class="prison-time-left"></span>
                        <span class="prison-time-right"></span>
                        <div class="prison-years">1947-1963</div>
                    </div>
                    <!--    body        ==============-->
                    <div>
                        <ol>
                            <li><p><span class="red">MAI, Inchisoarea C  </span> | 3 iunie 1945 - 2 mai 1946</p></li>
                            <li><p><span class="red">Jilava (P) </span> | (Mai 1946). <br>
<!--                                todo nu isi are rostul br-->
                                Transfer intermediar  in vederea punerii pe rol a procesului</p></li>
                            <li><p><span class="red">Arestul tribunalui militar bucuresti </span> | mai 1946</p></li>
                            <li><p><span class="red">Aiud (p) </span> | 3 iunie 1945 - 2 mai 1946</p></li>
                            <li><p><span class="red">Vacaresti (P) </span> |august 1952- septembrie 1952 <br>
                                Transferat pentru tratament T.B.C.</p></li>
                            <li><p><span class="red">Jilava (p) </span></p></li>
                        </ol>
                    </div>
   <!--          head-->
                    <div class="carcer-head">
                        <div class="prison-time">Perioada</div>
                        <span class="prison-time-left"></span>
                        <span class="prison-time-right"></span>
                        <div class="prison-years">1947-1963</div>
                    </div>
                    <!--    body        ==============-->
                    <div>
                        <ol>
                            <li><p><span class="red">MAI, Inchisoarea C  </span> | 3 iunie 1945 - 2 mai 1946</p></li>
                            <li><p><span class="red">Jilava (P) </span> | (Mai 1946). <br>
<!--                                todo nu isi are rostul br-->
                                Transfer intermediar  in vederea punerii pe rol a procesului</p></li>
                            <li><p><span class="red">Arestul tribunalui militar bucuresti </span> | mai 1946</p></li>
                            <li><p><span class="red">Aiud (p) </span> | 3 iunie 1945 - 2 mai 1946</p></li>
                            <li><p><span class="red">Vacaresti (P) </span> |august 1952- septembrie 1952 <br>
                                Transferat pentru tratament T.B.C.</p></li>
                            <li><p><span class="red">Jilava (p) </span></p></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

<?php include "includes/footer.php"; ?>