<?php

// Selectare 3 poezii random din baza de date

$stmt = $conn->prepare("
    SELECT fcp_poezii.id as id_poezie, fcp_poezii.titlu, fcp_poezii.continut, fcp_personaje.nume, fcp_personaje.prenume, fcp_personaje.nume_pseudonim, fcp_personaje.alias, fcp_personaje.id as id_poet
    FROM fcp_poezii 
    LEFT JOIN fcp_personaje
    ON fcp_poezii.personaj_id = fcp_personaje.id 
    WHERE fcp_poezii.perioada_creatiei_id = 4 AND fcp_poezii.is_published = 0
    ORDER BY RAND() LIMIT 3"
);
$stmt->execute();
$poeziiHome3 = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Selectare citat random