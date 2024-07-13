<?php 
include ('includes/header.php');
include ('controllers/filtre-poezii-partial.php');

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

    <div>
        <ul class="filter-ul display-flex-sb">
            <li class="filter-item red">Filtreaza poezii</li>
            <li class="filter-item"><?php echo $totalPoezii;?> de poezii / <?php echo $poeziiDetentie;?> create în detenție</li>
        </ul>
    </div>

    <!--filtre-->
<!--     
    <div class="container">
        <div class="row">
            <div class="row-flex-wrap">
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <div>
                                <input class="form-input" id="autor" name="form-input" placeholder="Autor" type="text"/>
                            </div>
                            <div>
                                <input class="form-input-simple" id="titlu" name="form-input" placeholder="Titlu"
                                       type="text"/>
                            </div>
                            <div>
                                <input class="form-input-simple" id="continut" name="form-input" placeholder="Continut"
                                       type="text"/>
                            </div>
                            <div>
                                <input class="form-input-simple" id="subiect" name="form-input" placeholder="Subiect"
                                       type="text">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="row-flex-wrap">
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <div>
                                <form>
                                    <select class="form-input-select" id="poetry" name="country">
                                        <option value="au">Perioada creatiei</option>
                                        <option value="ca">Canada</option>
                                        <option value="usa">USA</option>
                                    </select>
                                </form>
                            </div>
                            <div>
                                <form>
                                    <select class="form-input-select" id="poetry-2" name="country">
                                        <option value="au">Specia poeziei</option>
                                        <option value="ca">Canada</option>
                                        <option value="usa">USA</option>
                                    </select>
                                </form>
                            </div>

                            <div>
                                <input class="form-input-simple" id="place" name="form-input"
                                       placeholder="Locul creatiei"
                                       type="text">
                            </div>
                            <div>
                                <input class="form-input-simple" id="date" name="form-input" placeholder="Data creatiei"
                                       type="text">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="row-flex-wrap">
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <div>
                                <input class="form-input-simple" id="lyrics" name="form-input" placeholder="Nr. strofe"
                                       type="text"/>
                            </div>
                            <div>
                                <input class="form-input-simple" id="variant" name="form-input"
                                       placeholder="Nr. variante"
                                       type="text"/>
                            </div>
                            <button class="reset-btn">Resetare</button>
                            <br>
                            <button class="filter-btn">Filtreaza</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
     -->
    <!--    nr rezultate -->
    <div class="display-flex red-box">
        <h3 class="red-box-title"><?php echo $totalPoezii;?> rezultate</h3>
    </div>
    <div class="mt30 sectiune_teme">
        <?php foreach ($poeziiPePagina as $poezie):

        $continut =$poezie['continut'];

        ?>
            <div class="poezie_tag">
                    <div class="semibold mb5">
                        <p class="result-title"><?php echo $poezie['titlu'];?></p>
                    </div>
                    <div class="sublink-result">
                        <p><span class="red">
                            <?php echo $poezie['prenume'] . ' ' . $poezie['nume'];?>  
                            <?php if ($poezie['nume_pseudonim'] == NULL) {echo "";} else {echo '(' . $poezie['nume_pseudonim'] . ')';}?> </span>| 
                            <?php echo $poezie['nr_strofe'];?>x strofe</p>
                        <!-- <p>Creata in detentie | 5 septembrie 1952</p>
                        <p>Penitenciarul Jilava</p> -->
                    </div>
                    <div class="poem_content">
                        <?php echo $continut;?>
                    </div>
                    <div class="read_more_red">
                        <a href="<?php echo BASE_URL . 'poezie.php/' . $poezie['alias'] . '/' . creare_url_din_titlu($poezie['titlu']) . '/' . $poezie['id'];?>">Citește mai departe</a>
                    </div>
            </div>
        <?php endforeach;?>        
    </div>

    <div class="text-center m-3">
        <ul class="custom_pagination">
            <li><a href="?pageno=1">Prima</a></li>
            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><i aria-hidden="true" class="fa fa-angle-double-left"></i></a>
            </li>
            <?php for ($i; $i<=$total_pages; $i++) {
                echo '<li><a href="?pageno=' . $i . '">' . $i . '</a></li>';
            }?>
            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"><i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
            </li>
            <li><a href="?pageno=<?php echo $total_pages; ?>">Ultima</a></li>
        </ul>
    </div>


</div>

<?php include ('includes/footer.php');?> 
