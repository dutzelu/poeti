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
    
    <!--    nr rezultate -->
    <div class="display-flex red-box">
        <h3 class="red-box-title"><?php echo $nrPoeziiTag;?> rezultate</h3>
    </div>
    <!--    rezultate-->
    <div class="container">
        <div class="row mt-1">
            <div class="row-flex-wrap">
                <div class="result-title-container">
                    <div class="semibold mb5">
                        <p class="result-title">Unde sunt cei care nu mai sunt</p>
                    </div>
                    <div class="sublink-result">
                        <p><span class="red">Nichifor Crainic  </span>| 6 strofe</p>
                        <p>Creata in detentie | 5 septembrie 1952</p>
                        <p>Penitenciarul Jilava</p>
                    </div>
                    <div class="poem_content">
                        <p style="font-size: var(--f-standard)!important; color: var(--font-grey-2) !important">
                            Întrebat-am vîntul, zburătorul<br/>
                            Bidiviu pe care-aleargă norul dsa ads dsadsa<br/>
                            Către-albastre margini de pămînt:<br/>
                            Unde sînt cei care nu mai sînt?<br/>
                            Unde sînt cei care nu mai sînt?
                        </p>
                        <div class="read_more">
                            <a href="poezie.html">Citește mai departe</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-flex-wrap">
                <div class="result-title-container">
                    <div class="semibold mb5">
                        <p class="result-title">Unde sunt cei care nu mai sunt</p>
                    </div>
                    <div class="sublink-result">
                        <p><span class="red">Nichifor Crainic  </span>| 6 strofe</p>
                        <p>Creata in detentie | 5 septembrie 1952</p>
                        <p>Penitenciarul Jilava</p>
                    </div>
                    <div class="poem_content">
                        <p style="font-size: var(--f-standard)!important; color: var(--font-grey-2) !important">
                            Întrebat-am vîntul, zburătorul<br/>
                            Bidiviu pe care-aleargă norul dsa ads dsadsa<br/>
                            Către-albastre margini de pămînt:<br/>
                            Unde sînt cei care nu mai sînt?<br/>
                            Unde sînt cei care nu mai sînt?
                        </p>
                        <div class="read_more">
                            <a href="poezie.html">Citește mai departe</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-flex-wrap">
                <div class="result-title-container">
                    <div class="semibold mb5">
                        <p class="result-title">Unde sunt cei care nu mai sunt</p>
                    </div>
                    <div class="sublink-result">
                        <p><span class="red">Nichifor Crainic  </span>| 6 strofe</p>
                        <p>Creata in detentie | 5 septembrie 1952</p>
                        <p>Penitenciarul Jilava</p>
                    </div>
                    <div class="poem_content">
                        <p style="font-size: var(--f-standard)!important; color: var(--font-grey-2) !important">
                            Întrebat-am vîntul, zburătorul<br/>
                            Bidiviu pe care-aleargă norul dsa ads dsadsa<br/>
                            Către-albastre margini de pămînt:<br/>
                            Unde sînt cei care nu mai sînt?<br/>
                            Unde sînt cei care nu mai sînt?
                        </p>
                        <div class="read_more">
                            <a href="poezie.html">Citește mai departe</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--    border-->
    <div class="border-grey"></div>
    <!--    rezultate 2-->
    <div class="container">
        <div class="row mb-2">
            <div class="row-flex-wrap-100">
                <div class="result-title-container">
                    <div class="semibold mb5">
                        <p class="result-title">Unde sunt cei care nu mai sunt</p>
                    </div>
                    <div class="sublink-result">
                        <p><span class="red">Nichifor Crainic  </span>| 6 strofe</p>
                        <p>Creata in detentie | 5 septembrie 1952</p>
                        <p>Penitenciarul Jilava</p>
                    </div>
                    <div class="poem_content">
                        <p style="font-size: var(--f-standard)!important; color: var(--font-grey-2) !important">
                            Întrebat-am vîntul, zburătorul<br/>
                            Bidiviu pe care-aleaas (...)<br/>
                            Către-albastre margini de pămînt:<br/>
                            Unde sînt cei care nu mai sînt?<br/>
                        </p>
                        <div class="read_more">
                            <a href="poezie.html">Citește mai departe</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-flex-wrap-100">
                <div class="result-title-container">
                    <div class="semibold mb5">
                        <p class="result-title">Unde sunt cei care nu mai sunt</p>
                    </div>
                    <div class="sublink-result">
                        <p><span class="red">Nichifor Crainic  </span>| 6 strofe</p>
                        <p>Creata in detentie | 5 septembrie 1952</p>
                        <p>Penitenciarul Jilava</p>
                    </div>
                    <div class="poem_content">
                        <p style="font-size: var(--f-standard)!important; color: var(--font-grey-2) !important">
                            Întrebat-am vîntul, zburătorul<br/>
                            Bidiviu pe care-aleargă (...))<br/>
                            Către-albastre margini de pămînt:<br/>
                            Unde sînt cei care nu mai sînt?<br/>
                        </p>
                        <div class="read_more">
                            <a href="poezie.html">Citește mai departe</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php include ('includes/footer.php');?> 
