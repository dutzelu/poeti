<?php 
include ('includes/header.php');
include ('controllers/teme-partial.php');

;?> 

<div class="main_container">

    <hr class="red_hr">

    <div class="title_cat uppercase semibold center">
        <p class="title-page">
            
        <?php if (isset($tagId)) {
            echo  "Poezii cu tema: " . '<span class="red">' .  $numeTag . '</span>';
        }
        ?>
        </p>
    </div>

    <div class="border-bottom-big"></div>

    <div  class="filter-ul">
           <p class="center"> 
            <?php if ($nrPoeziiTag == 1) {
                        echo $nrPoeziiTag . ' rezultat';} 
                        else {echo $nrPoeziiTag . ' rezultate';} 
            ?> |
           
           <a class="red" href="<?php echo BASE_URL . 'tematica-poeziei-carcerale.php?litera=A';?>">  vezi toate subiectele &raquo;</a> </p>
    </div>


    <div class="sectiune_teme">
            <?php foreach($poeziiPeTag as $tagP):

            $continut =$tagP['continut'];

            ?>
                <div class="poezie_tag">
                        <div class="semibold mb5">
                            <p class="result-title"><?php echo $tagP['titlu'];?></p>
                        </div>
                        <div class="sublink-result">
                            <p><span class="red">
                                <?php echo $tagP['prenume'] . ' ' . $tagP['nume'];?>  
                                <?php if ($tagP['nume_pseudonim'] == NULL) {echo "";} else {echo '(' . $tagP['nume_pseudonim'] . ')';}?> </span>| 
                                <?php echo $tagP['nr_strofe'];?>x strofe</p>
                            <!-- <p>Creata in detentie | 5 septembrie 1952</p>
                            <p>Penitenciarul Jilava</p> -->
                        </div>
                        <div class="poem_content">
                            <?php echo $continut;?>
                        </div>
                        <div class="read_more_red">
                            <a href="<?php echo BASE_URL . 'poezie.php/' . $tagP['alias_autor'] . '/' . creare_url_din_titlu($tagP['titlu']) . '/' . $tagP['id'];?>">Citește mai departe</a>
                        </div>
                </div>
            <?php endforeach;?>
                           
    </div>
        

</div>

<?php include ('includes/footer.php');?> 
