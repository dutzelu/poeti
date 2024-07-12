<?php

$url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', trim($path, '/'));
$tagId = $parts[count($parts) - 1];

// Selectare poezii din db cu un subiect anume (tag)
$stmt = $conn->prepare("
    select poe.*, tag.nume as tag, pers.nume, pers.prenume, pers.nume_pseudonim, pers.alias as alias_autor
    from fcp_poezii poe
    left join fcp_taguri tag
    on poe.subiect_id = tag.id 
    left join fcp_personaje pers 
    on poe.personaj_id = pers.id 
    where poe.subiect_id = :id
");

$stmt->bindParam(':id', $tagId, PDO::PARAM_INT); 
$stmt->execute();
$poeziiPeTag = $stmt->fetchAll(PDO::FETCH_ASSOC);
$nrPoeziiTag = count($poeziiPeTag);

foreach($poeziiPeTag as $tagP) {
    $numeTag = $tagP['tag'];
}

// Paginatie poezii poet


if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 40;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_rows = $totalPoezii;
$total_pages = ceil($total_rows / $no_of_records_per_page);


// Poezii ale poetului selectate pe pagina 

$sql = "Select *
    FROM fcp_poezii 
    LIMIT :offset, :no_of_records_per_page;";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':offset',$offset,PDO::PARAM_INT);
$stmt->bindParam(':no_of_records_per_page',$no_of_records_per_page,PDO::PARAM_INT);
$stmt->execute();
$poeziiPePagina = $stmt->fetchAll(PDO::FETCH_ASSOC);
$i=1;
