<?php

// Selectare articole din baza de date dintr-o categorie

$url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', trim($path, '/'));
$idCateg= (int)$parts[count($parts) - 1];

$stmt = $conn->prepare("
        select art.*, categ.nume as nume_categorie
        from fcp_articole art
        left join fcp_articole_categorii categ
        on art.cat_id = categ.id 
        where art.cat_id = :id
        order by id desc
    ");
$stmt->bindParam(':id', $idCateg, PDO::PARAM_INT); 
$stmt->execute();
$articoleCategorie = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($articoleCategorie as $art) {
    $titluCategorie = $art['nume_categorie'];
}

// Paginatie articole din categorie

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno-1) * $no_of_records_per_page;
$total_rows = count($articoleCategorie);
$total_pages = ceil($total_rows / $no_of_records_per_page);

// Articole ale categoriei selectate pe pagină

$sql = "Select *
FROM fcp_articole
WHERE cat_id = :id 
order by id desc
LIMIT :offset, :no_of_records_per_page;";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':id',$idCateg,PDO::PARAM_INT);
$stmt->bindParam(':offset',$offset,PDO::PARAM_INT);
$stmt->bindParam(':no_of_records_per_page',$no_of_records_per_page,PDO::PARAM_INT);
$stmt->execute();
$articolePePagina = $stmt->fetchAll(PDO::FETCH_ASSOC);
$i=1;

