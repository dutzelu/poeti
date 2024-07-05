<?php

$url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', trim($path, '/'));
$aliasPoet = $parts[count($parts) - 3];
$aliasPoezie = $parts[count($parts) - 2];
$idPoezie = $parts[count($parts) - 1];

$stmt = $conn->prepare("
    select fcp_poezii.*, fcp_personaje.nume, fcp_personaje.prenume, fcp_personaje.nume_pseudonim, fcp_personaje.alias, fcp_personaje.id as id_poet, fcp_poezii_perioadecreatie.nume as perioada_creatiei, fcp_taguri.nume as subiect,fcp_poezii_cicluri.name as ciclu, fcp_poezii_specii.nume as specie

    from fcp_poezii  

    left join fcp_personaje
    on fcp_poezii.personaj_id  = fcp_personaje.id

    left join fcp_poezii_perioadecreatie
    on fcp_poezii.perioada_creatiei_id = fcp_poezii_perioadecreatie.id

    left join fcp_taguri
    on fcp_poezii.subiect_id = fcp_taguri.id

    left join fcp_poezii_cicluri
    on fcp_poezii_cicluri.id = fcp_poezii.ciclu_id

    left join fcp_poezii_specii
    on fcp_poezii.specie_id = fcp_poezii_specii.id

    where fcp_poezii.id = :id");
$stmt->bindParam(':id', $idPoezie, PDO::PARAM_INT); 
$stmt->execute();
$datePoezie = $stmt->fetchAll(PDO::FETCH_ASSOC);
// dd($datePoezie);