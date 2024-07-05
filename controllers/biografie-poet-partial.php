<?php

$url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', trim($path, '/'));
$aliasPoet = $parts[count($parts) - 3];
$aliasPoezie = $parts[count($parts) - 2];
$idPoezie = $parts[count($parts) - 1];

$stmt = $conn->prepare("
        select fcp_articole.*,fcp_autori.nume as nume_autor
        from fcp_articole 
        left join fcp_autori
        on fcp_articole.autor_id = fcp_autori.id 
        where cat_id = 100 and personaj_id = :id
    ");
$stmt->bindParam(':id', $idPoezie, PDO::PARAM_INT); 
$stmt->execute();
$dateBiografie = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>