<?php

include "includes/header.php";
include "controllers/poetipelitere-partial.php";

?>

<div class="main_container">
    <hr class="red_hr">
    <div class="title_cat uppercase semibold center">
        <p class="title-page">poeti litera <span class="red uppercase"><?php echo $litera;?></span></p>
    </div>
    <hr class="small_hr">

    <div class="all_letter flex_wrap_between">

    <?php
        foreach ($poeti as $row) {
            $id = $row['id'];
            $nume = $row['nume'] ;
            $prenume = $row['prenume'];
            $numeComplet = $nume . ' ' . $prenume;

            if ($row['avatar'] == NULL OR $row['avatar'] == '') {
                $calePoza = BASE_URL . 'images/avatare/poet-necunoscut.jpg';
            } else {
                $calePoza = BASE_URL . 'images/avatare/' . $row['avatar'];
            }
            $localitateNastere = $row['localitate_nastere'];
            $judet = $row['judet'];
            $avatar = 'images/avatare/poet-necunoscut.jpg';
            $alias = $row['alias'];
   
            $ocupatie = $row['ocupatii_socioprofesionale'];
        
            // aflu nr. de poezii
        
            $stmt = $conn->prepare("Select * FROM fcp_poezii WHERE personaj_id = $id");
            $stmt->execute();
            $poezii = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $nrPoezii = count($poezii);
        
        echo '<div class="single_poet_letter flex_start mb35 mr40 ml40">';
            echo '<a href="' . BASE_URL . 'poezii-poet.php/' . $alias . '/' . $id . '">';
             echo '<img src="' . $calePoza . '">';
            echo '</a>';
            echo '<div class="single_poet_content ml20">';
                echo '<div class="single_poet_name semibold font22 mb5">';
                echo '<a href="' . BASE_URL . 'poezii-poet.php/' . $alias . '/' . $id . '">';
                     echo $numeComplet;
                echo '</a>';
                echo '</div>';
                echo '<div class="count_poem red">';
                    echo $nrPoezii . ' poezii';
                echo '</div>';
                echo '<div class="poet_birth_location">';
                   echo'Locul nașterii: ' . $localitateNastere . ' (' . $judet . ')';
                echo '</div>';
                echo '<div class="single_poet_info2">';
                    echo 'Ocupația: ' . $ocupatie;
                echo '</div>';
            echo '</div>';
        echo '</div>';
        
        } ?>





    </div>

    <div class="mb20 letter_alphabetic center mt25 relative">
        <span class="font19 alphabetic_span_bottom">Indice alfabetic</span>
        <ul class="uppercase ml5 alphabetic_list_bottom">
        <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=A">a</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=B">b</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=C">c</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=D">d</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=E">e</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=F">f</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=G">g</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=H">h</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=I">i</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=J">j</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=K">k</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=L">l</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=M">m</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=N">n</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=O">o</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=P">p</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=Q">q</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=R">r</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=S">s</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=T">t</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=U">u</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=V">v</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=X">x</a></li>
                <li><a href="<?php echo BASE_URL;?>poeti-pe-litere.php?litera=Z">z</a></li>
        </ul>
    </div>

</div>

<!--================-->
<?php include "includes/footer.php"; ?>