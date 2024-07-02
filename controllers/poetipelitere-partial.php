<?php
if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    $litera = $_GET['litera'];
} else {
    $litera = 'A';
}

$nume = NULL;
$prenume = NULL;
$localitateNastere = NULL;
$judet = NULL;

$query = "
        Select fcp_personaje.*, nom_localitati.nume as localitate_nastere, nom_judete.nume as judet
        FROM fcp_personaje 
        LEFT JOIN nom_localitati
        ON fcp_personaje.nastere_loc_id  = nom_localitati.id
        left join nom_judete
        on nom_localitati.id_judet = nom_judete.id
        LEFT JOIN fcp_personaje2roluri 
        ON fcp_personaje.id = fcp_personaje2roluri.personaj_id 
        WHERE fcp_personaje2roluri.rol_id = 12 AND fcp_personaje.nume LIKE CONCAT(?, '%')";
$stmt = $pdo->prepare($query);
$stmt->bindParam(1, $litera, PDO::PARAM_STR);
$stmt->execute();
$poeti = $stmt->fetchAll(PDO::FETCH_ASSOC);







?>
