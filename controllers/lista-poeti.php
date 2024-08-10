
    <?php
        foreach ($poeti as $poet) {
            $id = $poet['id'];
            $nume = $poet['nume'] ;
            $prenume = $poet['prenume'];
            $numeComplet = $nume . ' ' . $prenume;

            if ($poet['avatar'] == NULL OR $poet['avatar'] == '') {
                $calePoza = BASE_URL . 'images/avatare/poet-necunoscut.jpg';
            } else {
                $calePoza = BASE_URL . 'images/avatare/' . $poet['avatar'];
            }
            $localitateNastere = $poet['localitate_nastere'];
            $judet = $poet['judet'];
            $avatar = 'images/avatare/poet-necunoscut.jpg';
            $alias = $poet['alias'];
   
            $ocupatie = $poet['ocupatii_socioprofesionale'];
        
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
                     if ($poet['nume_pseudonim'] == NULL) {echo "";} else {echo ' (' . $poet['nume_pseudonim'] . ')';}
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
        
        } 
    ?>