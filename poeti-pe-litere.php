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

            if ($row['avatar'] == trim("images/avatare/")) {
                $calePoza = BASE_URL . 'images/avatare/poet-necunoscut.jpg';
            } else {
                $calePoza = BASE_URL . $row['avatar'];
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
            echo '<a href="' . BASE_URL . 'poet.php/' . $alias . '/' . $id . '">';
             echo '<img src="' . $calePoza . '">';
            echo '</a>';
            echo '<div class="single_poet_content ml20">';
                echo '<div class="single_poet_name semibold font22 mb5">';
                echo '<a href="' . BASE_URL . 'poet.php/' . $alias . '/' . $id . '">';
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
            <li><a href="index.html">a</a></li>
            <li><a href="index.html">b</a></li>
            <li><a href="index.html">c</a></li>
            <li><a href="index.html">d</a></li>
            <li><a href="index.html">e</a></li>
            <li><a href="index.html">f</a></li>
            <li><a href="index.html">g</a></li>
            <li><a href="index.html">h</a></li>
            <li><a href="index.html">i</a></li>
            <li><a href="index.html">j</a></li>
            <li><a href="index.html">k</a></li>
            <li><a href="index.html">l</a></li>
            <li><a href="index.html">m</a></li>
            <li><a href="index.html">n</a></li>
            <li><a href="index.html">o</a></li>
            <li><a href="index.html">p</a></li>
            <li><a href="index.html">q</a></li>
            <li><a href="index.html">r</a></li>
            <li><a href="index.html">s</a></li>
            <li><a href="index.html">t</a></li>
            <li><a href="index.html">u</a></li>
            <li><a href="index.html">v</a></li>
            <li><a href="index.html">x</a></li>
            <li><a href="index.html">z</a></li>
        </ul>
    </div>

</div>

<!--================-->
<?php include "includes/footer.php"; ?>