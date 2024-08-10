<?php

$url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', trim($path, '/'));
$aliasPoet = $parts[count($parts) - 3];
$aliasPoezie = $parts[count($parts) - 2];
$idPoezie = $parts[count($parts) - 1];

$stmt = $conn->prepare("
    select 
    fcp_poezii.*, 
    pers.nume, pers.prenume, pers.nume_pseudonim, pers.alias, pers.id as id_poet, pers.biografie_poza,
    fcp_poezii_perioadecreatie.nume as perioada_creatiei, 
    fcp_taguri.nume as tag, fcp_taguri.id as tag_id,
    fcp_poezii_cicluri.name as nume_ciclu, 
    fcp_poezii_specii.nume as specie, 
    fcp_poezii_rime.nume as nume_rima, 
    fcp_poezii_picioaremetrice.nume as nume_picior_metric,
    art1.id as id_articol_comentariu, art1.titlu as titlu_articol_comentariu, art1.continut as continut_articol_comentariu,
    art2.id as id_povestea_poeziei, art2.titlu as titlu_povestea_poezie, art2.continut as continut_povestea_poeziei

    from fcp_poezii  

    left join fcp_personaje pers
    on fcp_poezii.personaj_id  = pers.id

    left join fcp_poezii_perioadecreatie
    on fcp_poezii.perioada_creatiei_id = fcp_poezii_perioadecreatie.id

    left join fcp_taguri
    on fcp_poezii.subiect_id = fcp_taguri.id

    left join fcp_poezii_cicluri
    on fcp_poezii_cicluri.id = fcp_poezii.ciclu_id

    left join fcp_poezii_specii
    on fcp_poezii.specie_id = fcp_poezii_specii.id

    left join fcp_poezii_rime
    on fcp_poezii.rima_id = fcp_poezii_rime.id

    left join fcp_articole art1
    on art1.id = fcp_poezii.comentariu_articol_id 

    left join fcp_articole art2
    on art2.id = fcp_poezii.povestea_poeziei_id

    left join fcp_poezii_picioaremetrice
    on fcp_poezii_picioaremetrice.id  = fcp_poezii.picior_metric_id 
    where fcp_poezii.id = :id

");
$stmt->bindParam(':id', $idPoezie, PDO::PARAM_INT); 
$stmt->execute();
$datePoezie = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($datePoezie as $poem) {
    $idPoet = $poem['id_poet'];
}

// selectare subiecte secundare pentru poezie

$stmt = $conn->prepare("
    select ft.id, ft.nume
    from fcp_taguri2entitati fte 
    left join fcp_taguri ft 
    on fte.tag_id = ft.id 
    where fte.poezie_id = :id
");
$stmt->bindParam(':id', $idPoezie, PDO::PARAM_INT); 
$stmt->execute();
$taguriSecundare = $stmt->fetchAll(PDO::FETCH_ASSOC);
$nrTaguriSecundare = count($taguriSecundare);

// selectare 5 poezii random de la poet

$stmt = $conn->prepare("
        select fp.*, fpp.nume as perioada_creatiei
        from fcp_poezii fp
        left join fcp_poezii_perioadecreatie fpp 
        on fp.perioada_creatiei_id = fpp.id 
        where fp.personaj_id = :id
        order by rand()
        limit 5
");
$stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
$stmt->execute();
$cinciPoeziiPoet = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Date despre Poet

$stmt = $conn->prepare("
select fp.*, nl.nume as localitate_nastere, nj.nume as judet, fc.nume as confesiune, fn.nume as nationalitate 
from fcp_personaje fp 
left join nom_localitati nl 
on fp.nastere_loc_id = nl.id 
left join nom_judete nj 
on nl.id_judet = nj.id 
left join fcp_confesiuni fc 
on fp.confesiune_id = fc.id 
left join fcp_nationalitati fn 
on fp.nationalitate_id = fn.id 
where fp.id = :id  
");

$stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
$stmt->execute();
$poetData = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($poetData as $pd) {
  
  $numeComplet = $pd['prenume'] . ' ' . $pd['nume'];
  $numePseudonim = $pd['nume_pseudonim'];
  if ($pd['biografie_poza'] != NULL) {
      $fotoBiografie = BASE_URL . 'images/biografie/'. creare_url_din_titlu($pd['nume'] . ' ' . $pd['prenume']) . '.jpg';
    } else {
      $fotoBiografie = BASE_URL . 'images/avatare/poet-necunoscut.jpg';
  }
  $poetPeFCP = 'https:/fericiticeiprigoniti.net/' . $pd['alias'];
  $aliasPoet = $pd['alias'];
  $dataNastere =  strftime('%d %B %Y', strtotime($pd['data_nastere']));
  $dataAdormire  =  strftime('%d %B %Y', strtotime($pd['data_adormire']));
  $aniInchisoare = $pd['ani_inchisoare'];
  $loculNasterii = $pd['localitate_nastere'];
  $judetulNasterii = $pd['judet'];
  $loculMortii = $pd['deces_locul_mortii'];
  $decesNumeCimitir = $pd['deces_nume_cimitir'];
  $confesiune = $pd['confesiune'];
  $ocupatii = $pd['ocupatii_socioprofesionale'];
  $confesiune = $pd['confesiune'];
  $nationalitate = $pd['nationalitate'];
  $prenumeTata = $pd['prenume_tata'];
  $prenumeMama = $pd['prenume_mama'];
  $baieti = $pd['count_copii_b'];
  $fete = $pd['count_copii_f'];
}