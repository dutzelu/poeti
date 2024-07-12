<?php 
include "includes/header.php";
include "controllers/tematica-partial.php";
?>

<div class="main_container">
 
    <hr class="red_hr">

    <div class="title_cat uppercase semibold center">
        <p class="title-page">tematica poeziei carcerale</p>
    </div>

    <hr class="small_hr">
    <div class="mb20 letter_alphabetic center mt25 relative">

        <ul class="uppercase ml5 alphabetic_list_bottom">
        <li><a class="<?php if ($litera == 'A') {echo 'active-link';}?>" href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=A">a</a></li>
                <li><a class="<?php if ($litera == 'B') {echo 'active-link';}?>" href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=B">b</a></li>
                <li><a class="<?php if ($litera == 'C') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=C">c</a></li>
                <li><a class="<?php if ($litera == 'D') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=D">d</a></li>
                <li><a class="<?php if ($litera == 'E') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=E">e</a></li>
                <li><a class="<?php if ($litera == 'F') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=F">f</a></li>
                <li><a class="<?php if ($litera == 'G') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=G">g</a></li>
                <li><a class="<?php if ($litera == 'H') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=H">h</a></li>
                <li><a class="<?php if ($litera == 'I') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=I">i</a></li>
                <li><a class="<?php if ($litera == 'J') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=J">j</a></li>
                <li><a class="<?php if ($litera == 'K') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=K">k</a></li>
                <li><a class="<?php if ($litera == 'L') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=L">l</a></li>
                <li><a class="<?php if ($litera == 'M') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=M">m</a></li>
                <li><a class="<?php if ($litera == 'N') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=N">n</a></li>
                <li><a class="<?php if ($litera == 'O') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=O">o</a></li>
                <li><a class="<?php if ($litera == 'P') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=P">p</a></li>
                <li><a class="<?php if ($litera == 'Q') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=Q">q</a></li>
                <li><a class="<?php if ($litera == 'R') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=R">r</a></li>
                <li><a class="<?php if ($litera == 'S') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=S">s</a></li>
                <li><a class="<?php if ($litera == 'T') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=T">t</a></li>
                <li><a class="<?php if ($litera == 'U') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=U">u</a></li>
                <li><a class="<?php if ($litera == 'V') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=V">v</a></li>
                <li><a class="<?php if ($litera == 'X') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=X">x</a></li>
                <li><a class="<?php if ($litera == 'Z') {echo 'active-link';}?>"  href="<?php echo BASE_URL;?>tematica-poeziei-carcerale.php?litera=Z">z</a></li>
        </ul>
    </div>

    <div class="poeti-letter">
        <?php echo $litera;?>
    </div>
    <div class="row mb-3">
        <ul class="tematica">
            <?php foreach ($taguri as $tag) {

                    catePoezii($tag['id']);

                    echo '<li><a href="' . BASE_URL . 'teme.php/' . creare_url_din_titlu($tag['nume']) . '/' . $tag['id'] . '">' . $tag['nume'] . ' <span class="red">(' . $nrPoezii . ')</span></a></li>';
            }?>
            </ul>
    </div>

</div>

<?php 
include "includes/footer.php";
?>