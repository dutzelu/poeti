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


if ($nrPoeziiTag == 0) {

    $stmt = $conn->prepare("select * from fcp_taguri where id = :id;");
    $stmt->bindParam(':id', $tagId, PDO::PARAM_INT); 
    $stmt->execute();
    $tagData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($tagData as $tag) {
        $numeTag = $tag['nume'];
    }
} else {
    foreach($poeziiPeTag as $tagP) {
        $numeTag = $tagP['tag'];
    }
}

