<?php

// Selectare articol din baza de date 

$url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', trim($path, '/'));
$aliasArticol = $parts[count($parts) - 2];
$idArticol= (int)$parts[count($parts) - 1];

$stmt = $conn->prepare("
        select art.*, categ.nume as nume_categorie, autori.nume as nume_autor, autori.prenume as prenume_autor
        from fcp_articole art
        left join fcp_articole_categorii categ
        on art.cat_id = categ.id 
        left join fcp_autori autori
        on art.autor_id  = autori.id 
        where art.id = :id
    ");
$stmt->bindParam(':id', $idArticol, PDO::PARAM_INT); 
$stmt->execute();
$dateArticol = $stmt->fetchAll(PDO::FETCH_ASSOC);

$categorie =NULL;
$nume_autor = NULL;
$imagine = NULL;
$titlu = NULL;
$continut = NULL;
$sursa = NULL;

foreach ($dateArticol as $articol) {
    $categorie = $articol['nume_categorie'];
    $categ_id = $articol['cat_id'];
    $autor = $articol['nume_autor'] . ' ' . $articol['prenume_autor'];
    $imagine = $articol['imagine'];
    $titlu = $articol['titlu'];
    $continut = $articol['continut'];
    $sursa = $articol['sursa_titlu'];
    $dataPublicare = $articol['data_publicare'];
}

// selectare alte articole pe aceeași tema 

$stmt = $conn->prepare("
        select *
        from fcp_articole
        where cat_id = :categ
        order by id desc
        Limit 10
    ");
$stmt->bindParam(':categ',  $categ_id, PDO::PARAM_INT); 
$stmt->execute();
$articoleSimilare = $stmt->fetchAll(PDO::FETCH_ASSOC);


// selectare toate categoriile

$stmt = $conn->prepare("
        select *
        from fcp_articole_categorii
        where is_published = 1
    ");
$stmt->execute();
$categorii = $stmt->fetchAll(PDO::FETCH_ASSOC);

