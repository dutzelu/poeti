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
    pers.nume, pers.prenume, pers.nume_pseudonim, pers.alias, pers.id as id_poet, 
    fcp_poezii_perioadecreatie.nume as perioada_creatiei, 
    fcp_taguri.nume as tag, fcp_taguri.id as tag_id,
    fcp_poezii_cicluri.name as nume_ciclu, 
    fcp_poezii_specii.nume as specie, 
    fcp_poezii_rime.nume as nume_rima, 
    fcp_poezii_picioaremetrice.nume as nume_picior_metric,
    fcp_articole.id id_articol_comentariu, fcp_articole.titlu as titlu_articol_comentariu, fcp_articole.continut as continut_articol_comentariu

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

    left join fcp_articole
    on fcp_articole.id = fcp_poezii.comentariu_articol_id 

    left join fcp_poezii_picioaremetrice
    on fcp_poezii_picioaremetrice.id  = fcp_poezii.picior_metric_id 
    where fcp_poezii.id = :id

");
$stmt->bindParam(':id', $idPoezie, PDO::PARAM_INT); 
$stmt->execute();
$datePoezie = $stmt->fetchAll(PDO::FETCH_ASSOC);
// dd($datePoezie);

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