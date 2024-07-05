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
            <div class="wrapper-right">
                <div class="flex_start_between mb10 remove_flex992">
                    <div class="custom_name_of_author">
                    <h2><?php echo $numeComplet;?>
						<?php if ($numePseudonim == NULL) {echo "";} else {echo '(' . $numePseudonim . ')';}?>
						</h2>
                    </div>
                </div>
                <div class="carcer-title">
                    <h3>Sumar represiune politica </h3>
                    <p>Prizonier de razboi timp de <span> 2 ani</span> in perioada <span>1943-1944</span> la <span>Oranki, Manastarca </span>
                    </p>
                    <p>Detinut politic timp de <span>13 ani</span> in perioada <span>1947-1963</span></p>
                    <p>Intemnitat la <span>Jilava, Vacaresti, Aiud, MAI</span></p>
                    <p>Domiciliu obligatoriuefectuat in perioada <span>1963-1965</span> la <span>Rachitoasa</span></p>
                </div>

                <div class="carcer-title">
                    <h3>Fisa Carcerala</h3>
                </div>
                <div class="carcer">
                    <div>
                        <ul class="display-flex-end">
                            <li id="open" style="cursor: pointer">Extinde fise |</li>
                            <li id="close" style="cursor: pointer"> Restrange fise</li>
                        </ul>
                    </div>
                    <!--                    first-->
                    <div class="carcer-header">
                        <div class="carcer-left">
                            <ul>
                                <li> 1943 |<span> Condamnare</span></li>
                            </ul>
                        </div>
                        <div class="carcer-right">
                            <button class="btn-carcer" id="first-btn"><i aria-hidden="true"
                                class="fa fa-angle-double-right click-icon"
                                id="first-icon"></i>
                            </button>
                        </div>

                    </div>
                    <div class="hidden" id="first-text">
                        <div class="hidden-content">
                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Perioada de detentie :</span> 20ianuarie 1943-14
                                    august 1943 (7luni)</p>

                            </div>
                            <!--                            <p><span>Data de arestare </span> 20 ianuarie 1943</p>-->
                            <p><span>Arestat la varsta de: </span> X ani</p>
                            <p><span>Arestat(a) la data de </span> 14.03.1952, <span>de catre</span> M.A.I. Regionala
                                Pitesti </p>
                            <p><span>In baza mandatului nr ...,din ..., emis de catre</span> UM 0366 Pitesti</p>

                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Statutul social la momentul arestarii </span></p>
                            </div>
                            <p><span>Ocupatia : </span> profesor</p>
                            <p><span>Starea civila : </span> casatorit</p>
                            <p><span>Nume sot(ie) : </span> Aglaia</p>
                            <p><span>Ultimul loc de munca :</span> Facultatea de Teologie</p>
                            <p><span>Apartenenta politica conform organelor represive:</span>apolitic(in trecut
                                legionara)</p>
                            <p><span>Originea sociala :</span></p>
                            <p><span>Averea detinuta :</span></p>
                            <p><span>Domiciliu la arestare :</span> Jud. Galati,Com. Faurei, Str. Crizantemelor nr.3</p>

                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Statutul social la momentul arestarii </span></p>
                            </div>
                            <p><span>Tip condamnare/ detentie: </span> preventiva</p>
                            <p><span>Condamnat la  : </span> 15 ani de munca silnica / munca silnica pe viata</p>
                            <p><span>Nr. sentinta si instanta de condamnare : </span> 183/14.03.1945 Tribunalul Militar
                                Bucuresti</p>
                            <p><span>Fapta de condamnare :</span> uneltire contra ordinii sociale</p>
                            <p><span>Descrierea pe scurt a faptei:</span></p>
                            <p><span>Incadrarea legala a faptei :</span></p>
                            <p><span>Perioada desfasurari pedepsei :</span>14.03.1952 -06.06.1962</p>
                            <p><span>Tip recurs :</span></p>
                            <p><span>Nr. sentinta si instanta de recurs :</span></p>
                            <p><span>Condamnare recurs :</span></p>

                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Intionerariu detentie </span></p>
                            </div>
                            <p><span>MAI, Inchisoarea C <i class="fa fa-angle-double-right"></i>
Jilava (P) <i class="fa fa-angle-double-right"></i> Arestul Tribunalului Militar Bucuresti <i
                                        class="fa fa-angle-double-right"></i> Aiud (P) <i
                                        class="fa fa-angle-double-right"></i> Vacaresti (P) <i
                                        class="fa fa-angle-double-right"></i> Jilava (P)
                            </span></p>

                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Data iesire din detentie </span></p>
                            </div>
                            <p><span>Tip iesire din detentie : </span> gratiat prin decretul nr. 154 / 1963</p>

                            <p><span>Data iesirii :</span> 20 august 1963</p>

                        </div>
                    </div>
                    <div class="carcer-header">
                        <div class="carcer-left">
                            <ul>
                                <li> 1943 |<span> Arest preventiv</span></li>
                            </ul>
                        </div>
                        <div class="carcer-right">
                            <button class="btn-carcer" id="second-btn"><i aria-hidden="true"
                                                                          class="fa fa-angle-double-right click-icon"
                                                                          id="second-icon"></i>
                            </button>
                        </div>

                    </div>
                    <!--                    second-->
                    <div class="hidden" id="second-text">
                        <div class="hidden-content">
                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Perioada de detentie :</span> 20ianuarie 1943-14
                                    august 1943 (7luni)</p>

                            </div>
                            <p><span>Data de arestare </span> 20 ianuarie 1943</p>
                            <p><span>Arestat la varsta de: </span> X ani</p>
                            <p><span>Arestat(a) la data de </span> 14.03.1952, <span>de catre</span> M.A.I. Regionala
                                Pitesti> </p>
                            <p><span>In baza mandatului nr ...,din ..., emis de catre</span> UM 0366 Pitesti</p>

                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Statutul social la momentul arestarii </span></p>
                            </div>
                            <p><span>Ocupatia : </span> profesor</p>
                            <p><span>Starea civila : </span> casatorit</p>
                            <p><span>Nume sot(ie) : </span> Aglaia</p>
                            <p><span>Ultimul loc de munca :</span> Facultatea de Teologie</p>
                            <p><span>Apartenenta politica conform organelor represive:</span>apolitic(in trecut
                                legionara)</p>
                            <p><span>Originea sociala :</span></p>
                            <p><span>Averea detinuta :</span></p>
                            <p><span>Domiciliu la arestare :</span> Jud. Galati,Com. Faurei, Str. Crizantemelor nr.3</p>

                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Statutul social la momentul arestarii </span></p>
                            </div>
                            <p><span>Tip condamnare/ detentie: </span> preventiva</p>
                            <p><span>Condamnat la  : </span> 15 ani de munca silnica / munca silnica pe viata</p>
                            <p><span>Nr. sentinta si instanta de condamnare : </span> 183/14.03.1945 Tribunalul Militar
                                Bucuresti</p>
                            <p><span>Fapta de condamnare :</span> uneltire contra ordinii sociale</p>
                            <p><span>Descrierea pe scurt a faptei:</span></p>
                            <p><span>Incadrarea legala a faptei :</span></p>
                            <p><span>Perioada desfasurari pedepsei :</span>14.03.1952 -06.06.1962</p>
                            <p><span>Tip recurs :</span></p>
                            <p><span>Nr. sentinta si instanta de recurs :</span></p>
                            <p><span>Condamnare recurs :</span></p>

                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Intionerariu detentie </span></p>
                            </div>
                            <p><span>MAI, Inchisoarea C <i class="fa fa-angle-double-right"></i>
Jilava (P) <i class="fa fa-angle-double-right"></i> Arestul Tribunalului Militar Bucuresti <i
                                        class="fa fa-angle-double-right"></i> Aiud (P) <i
                                        class="fa fa-angle-double-right"></i> Vacaresti (P) <i
                                        class="fa fa-angle-double-right"></i> Jilava (P)
                            </span></p>

                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Data iesire din detentie </span></p>
                            </div>
                            <p><span>Tip iesire din detentie : </span> gratiat prin decretul nr. 154 / 1963</p>

                            <p><span>Data iesirii :</span> 20 august 1963</p>

                        </div>
                    </div>
                    <!--                    third-->
                    <div class="carcer-header">
                        <div class="carcer-left">
                            <ul>
                                <li> 1943 |<span> Condamnare</span></li>
                            </ul>
                        </div>
                        <div class="carcer-right">
                            <button class="btn-carcer" id="third-btn"><i aria-hidden="true"
                                                                         class="fa fa-angle-double-right click-icon"
                                                                         id="third-icon"></i>
                            </button>
                        </div>

                    </div>
                    <div class="hidden" id="third-text">
                        <div class="hidden-content">
                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Perioada de detentie :</span> 20ianuarie 1943-14
                                    august 1943 (7luni)</p>

                            </div>
                            <p><span>Data de arestare </span> 20 ianuarie 1943</p>
                            <p><span>Arestat la varsta de: </span> X ani</p>
                            <p><span>Arestat(a) la data de </span> 14.03.1952, <span>de catre</span> M.A.I. Regionala
                                Pitesti> </p>
                            <p><span>In baza mandatului nr ...,din ..., emis de catre</span> UM 0366 Pitesti</p>


                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Statutul social la momentul arestarii </span></p>
                            </div>
                            <p><span>Ocupatia : </span> profesor</p>
                            <p><span>Starea civila : </span> casatorit</p>
                            <p><span>Nume sot(ie) : </span> Aglaia</p>
                            <p><span>Ultimul loc de munca :</span> Facultatea de Teologie</p>
                            <p><span>Apartenenta politica conform organelor represive:</span>apolitic(in trecut
                                legionara)</p>
                            <p><span>Originea sociala :</span></p>
                            <p><span>Averea detinuta :</span></p>
                            <p><span>Domiciliu la arestare :</span> Jud. Galati,Com. Faurei, Str. Crizantemelor nr.3</p>

                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Statutul social la momentul arestarii </span></p>
                            </div>
                            <p><span>Tip condamnare/ detentie: </span> preventiva</p>
                            <p><span>Condamnat la  : </span> 15 ani de munca silnica / munca silnica pe viata</p>
                            <p><span>Nr. sentinta si instanta de condamnare : </span> 183/14.03.1945 Tribunalul Militar
                                Bucuresti</p>
                            <p><span>Fapta de condamnare :</span> uneltire contra ordinii sociale</p>
                            <p><span>Descrierea pe scurt a faptei:</span></p>
                            <p><span>Incadrarea legala a faptei :</span></p>
                            <p><span>Perioada desfasurari pedepsei :</span>14.03.1952 -06.06.1962</p>
                            <p><span>Tip recurs :</span></p>
                            <p><span>Nr. sentinta si instanta de recurs :</span></p>
                            <p><span>Condamnare recurs :</span></p>

                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Intionerariu detentie </span></p>
                            </div>
                            <p><span>MAI, Inchisoarea C <i class="fa fa-angle-double-right"></i>
Jilava (P) <i class="fa fa-angle-double-right"></i> Arestul Tribunalului Militar Bucuresti <i
                                        class="fa fa-angle-double-right"></i> Aiud (P) <i
                                        class="fa fa-angle-double-right"></i> Vacaresti (P) <i
                                        class="fa fa-angle-double-right"></i> Jilava (P)
                            </span></p>


                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Data iesire din detentie </span></p>
                            </div>
                            <p><span>Tip iesire din detentie : </span> gratiat prin decretul nr. 154 / 1963</p>

                            <p><span>Data iesirii :</span> 20 august 1963</p>

                        </div>
                    </div>
                    <!--                    fourth-->
                    <div class="carcer-header">
                        <div class="carcer-left">
                            <ul>
                                <li> 1943 |<span> Condamnare</span></li>
                            </ul>
                        </div>
                        <div class="carcer-right">
                            <button class="btn-carcer" id="fourth-btn"><i aria-hidden="true"
                                                                          class="fa fa-angle-double-right click-icon"
                                                                          id="fourth-icon"></i>
                            </button>
                        </div>

                    </div>
                    <div class="hidden" id="fourth-text">
                        <div class="hidden-content">
                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Perioada de detentie :</span> 20ianuarie 1943-14
                                    august 1943 (7luni)</p>

                            </div>
                            <p><span>Data de arestare </span> 20 ianuarie 1943</p>
                            <p><span>Arestat la varsta de: </span> X ani</p>
                            <p><span>Arestat(a) la data de </span> 14.03.1952, <span>de catre</span> M.A.I. Regionala
                                Pitesti> </p>
                            <p><span>In baza mandatului nr ...,din ..., emis de catre</span> UM 0366 Pitesti</p>


                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Statutul social la momentul arestarii </span></p>
                            </div>
                            <p><span>Ocupatia : </span> profesor</p>
                            <p><span>Starea civila : </span> casatorit</p>
                            <p><span>Nume sot(ie) : </span> Aglaia</p>
                            <p><span>Ultimul loc de munca :</span> Facultatea de Teologie</p>
                            <p><span>Apartenenta politica conform organelor represive:</span>apolitic(in trecut
                                legionara)</p>
                            <p><span>Originea sociala :</span></p>
                            <p><span>Averea detinuta :</span></p>
                            <p><span>Domiciliu la arestare :</span> Jud. Galati,Com. Faurei, Str. Crizantemelor nr.3</p>


                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Statutul social la momentul arestarii </span></p>
                            </div>
                            <p><span>Tip condamnare/ detentie: </span> preventiva</p>
                            <p><span>Condamnat la  : </span> 15 ani de munca silnica / munca silnica pe viata</p>
                            <p><span>Nr. sentinta si instanta de condamnare : </span> 183/14.03.1945 Tribunalul Militar
                                Bucuresti</p>
                            <p><span>Fapta de condamnare :</span> uneltire contra ordinii sociale</p>
                            <p><span>Descrierea pe scurt a faptei:</span></p>
                            <p><span>Incadrarea legala a faptei :</span></p>
                            <p><span>Perioada desfasurari pedepsei :</span>14.03.1952 -06.06.1962</p>
                            <p><span>Tip recurs :</span></p>
                            <p><span>Nr. sentinta si instanta de recurs :</span></p>
                            <p><span>Condamnare recurs :</span></p>

                            <!--                            4-->
                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Intionerariu detentie </span></p>
                            </div>

                            <p><span>MAI, Inchisoarea C <i class="fa fa-angle-double-right"></i>
                                Jilava (P) <i class="fa fa-angle-double-right"></i> Arestul Tribunalului Militar Bucuresti <i
                                        class="fa fa-angle-double-right"></i> Aiud (P) <i
                                        class="fa fa-angle-double-right"></i> Vacaresti (P) <i
                                        class="fa fa-angle-double-right"></i> Jilava (P)
                            </span></p>


                            <div class="hidden-subtitle">
                                <p><span class="hidden-content-title">Data iesire din detentie </span></p>
                            </div>
                            <p><span>Tip iesire din detentie : </span> gratiat prin decretul nr. 154 / 1963</p>

                            <p><span>Data iesirii :</span> 20 august 1963</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--btn top-->
        <button id="myBtn" onclick="topFunction()" title="Go to top">
            <svg aria-hidden="true" focusable="false" height="1em"
                 preserveAspectRatio="xMidYMid meet"
                 style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                 viewBox="0 0 24 24"
                 width="1em"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g fill="none">
                    <path d="M4 15l8-8l8 8" stroke="#626262" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2"/>
                </g>
            </svg>
        </button>
    </div>


</div>
<?php include "includes/footer.php"; ?>
<script>
	const firstBtn = document.getElementById('first-btn');
	const firstText = document.getElementById('first-text');
	const firstIcon = document.getElementById('first-icon');
	const secondBtn = document.getElementById('second-btn');
	const secondText = document.getElementById('second-text');
	const secondIcon = document.getElementById('second-icon');
	const thirdBtn = document.getElementById('third-btn');
	const thirdText = document.getElementById('third-text');
	const thirdIcon = document.getElementById('third-icon');
	const fourthBtn = document.getElementById('fourth-btn');
	const fourthText = document.getElementById('fourth-text');
	const fourthIcon = document.getElementById('fourth-icon');

	const allBtn = document.querySelectorAll('.btn-carcer');
	const hidden = document.querySelectorAll('.hidden');
	const activeText = document.querySelectorAll('.active-text');
	const allIcons = document.querySelectorAll('.click-icon');
	const open = document.getElementById('open');
	const close = document.getElementById('close');
	console.log(close);

	open.addEventListener("click", () => {
		allBtn.forEach((item) => {
			item.classList.add('black');
			hidden.forEach((el) => {
				el.classList.add('active-text');
				// if (el.classList.contains('active-text')){
				//     el.classList.remove('active-text')
				// }
				allIcons.forEach((i) => {
					if (i.classList.contains('fa-angle-double-right')) {
						i.classList.add('fa-rotate-90');
						i.classList.add('active-icon');
					}
				});
			});

		});
	});

	close.addEventListener("click", () => {
		allBtn.forEach((b) => {
			b.classList.remove('black');
		});
		hidden.forEach((item) => {
			if (item.classList.contains('active-text')) {
				item.classList.remove('active-text');
			}
			allIcons.forEach((i) => {
				if (i.classList.contains('fa-rotate-90')) {
					i.classList.remove('fa-rotate-90');
					i.classList.remove('active-icon');
				}
			});
		});
	});
	firstBtn.addEventListener("click", () => {
		firstText.classList.toggle('active-text');
		if (firstIcon.classList.contains('fa-angle-double-right')) {
			firstIcon.classList.toggle('fa-rotate-90');
			firstIcon.classList.toggle('active-icon');
		}
		firstBtn.classList.toggle('black');
	});
	secondBtn.addEventListener("click", () => {
		secondText.classList.toggle('active-text');
		if (secondIcon.classList.contains('fa-angle-double-right')) {
			secondIcon.classList.toggle('fa-rotate-90');
			secondIcon.classList.toggle('active-icon');
		}
		secondBtn.classList.toggle('black')
		;
	});
	thirdBtn.addEventListener("click", () => {
		thirdText.classList.toggle('active-text');
		if (thirdIcon.classList.contains('fa-angle-double-right')) {
			thirdIcon.classList.toggle('fa-rotate-90');
			thirdIcon.classList.toggle('active-icon');
		}
		thirdBtn.classList.toggle('black');
	});
	fourthBtn.addEventListener("click", () => {
		fourthText.classList.toggle('active-text');
		if (fourthIcon.classList.contains('fa-angle-double-right')) {
			fourthIcon.classList.toggle('fa-rotate-90');
			fourthIcon.classList.toggle('active-icon');
		}
		fourthBtn.classList.toggle('black');
	});


</script>
<script>
	//Get the button
	var mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction();
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>


