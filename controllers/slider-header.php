<?php

// include "../includes/header.php";
  

// Selectare poeti in meniul de sus

$poeti_meniu = "
        Select fcp_personaje.nume, fcp_personaje.prenume, fcp_personaje.avatar, fcp_personaje.alias, fcp_personaje.id
        FROM fcp_personaje 
        LEFT JOIN fcp_meniuri2personaje 
        ON fcp_personaje.id = fcp_meniuri2personaje.personaj_id 
        WHERE fcp_meniuri2personaje.meniu_id = 1
        ";
$stmt = $conn->query($poeti_meniu);
$poeti = $stmt->fetchAll(PDO::FETCH_ASSOC);
$poetiSlide1= array_slice ($poeti, 0, 16);
$poetiSlide2= array_slice ($poeti, -16);

// dd($poetiSlide1);