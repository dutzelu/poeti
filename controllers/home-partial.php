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

$stmt = $conn->prepare("
        select citate.*, pers.nume as nume_autor, pers.prenume as prenume_autor, pers.nume_pseudonim, pers.id as id_autor, pers.alias as alias_autor, pers.avatar as avatar_autor 
        from fcp_personaje_citate citate
        left join fcp_personaje pers
        on citate.personaj_id  = pers.id 
        WHERE citate.vizibil_pi = 1
        ORDER BY RAND() LIMIT 1"
);
$stmt->execute();
$citate = $stmt->fetchAll(PDO::FETCH_ASSOC);

$citatContinut = NULL;
$citatSursa = NULL;
$autorNume = NULL;
$autorPrenume = NULL;
$autorPseundonim = NULL;
$autorId = NULL;
$autorAvatar = NULL;
$autorAlias = NULL;

foreach ($citate as $citat) {
    $citatContinut = $citat['continut'];
    $citatSursa = $citat['sursa'];
    $autorPrenume = $citat['prenume_autor'];
    $autorNume = $citat['nume_autor'];
    $autorPseudonim = $citat['nume_pseudonim'];
    $autorId = $citat['id_autor'];
    $autorAvatar = $citat['alias_autor'];
    $autorAlias = $citat['avatar_autor'];
}

// Selectare articole cu categoria Povestea Poeziei

$stmt = $conn->prepare("
        select fart.*, faut.nume, faut.prenume
        from fcp_articole fart 
        left join fcp_autori faut
        on fart.autor_id = faut.id 
        where cat_id = 4
        order by id desc
        limit 3"
);
$stmt->execute();
$articole = $stmt->fetchAll(PDO::FETCH_ASSOC);

$idArticol =  NULL;
$titluArticol =  NULL;
$continutArticol =  NULL;
$numeAutorArticol =  NULL;
$prenumeAutorArticol = NULL; 
$aliasArticol = NULL;



// Selectare un subiect de poezie random, minim 2 poezii

$stmt = $conn->prepare("
        SELECT f.*, ft.nume as nume_subiect, ft.alias as alias_subiect, fp.nume as nume_poet, fp.prenume as prenume_poet, fp.nume_pseudonim, fp.id as id_poet, fp.alias as alias_poet
        FROM fcp_poezii f
        JOIN (
            SELECT subiect_id
            FROM fcp_poezii
            GROUP BY subiect_id
            HAVING COUNT(*) > 1
            ORDER BY RAND()
            LIMIT 1
        ) AS subq ON f.subiect_id = subq.subiect_id

        left join fcp_taguri ft 
        on f.subiect_id = ft.id 

        left join fcp_personaje fp 
        on f.personaj_id = fp.id 

        limit 2"
);
$stmt->execute();
$poeziiPeSubiect = $stmt->fetchAll(PDO::FETCH_ASSOC);

$subiect = NULL;
$numePoet =NULL;
$prenumePoet = NULL;
$numePseudonim= NULL;
$aliasPoet = NULL;
$idPoet = NULL;
$titluPoezie = NULL;
$continutPoezie = NULL;

foreach ($poeziiPeSubiect as $poe) {
    $subiect = $poe['nume_subiect'];
    $numePoet = $poe['nume_poet'];
    $prenumePoet = $poe['prenume_poet'];
    $numePseudonim= $poe['nume_pseudonim'];
    $aliasPoet = $poe['alias_poet'];
    $idPoet = $poe['id_poet'];
    $titluPoezie = $poe['titlu'];
    $continutPoezie = $poe['continut'];
}

// Selectare taguri (subiecte) 

$stmt = $conn->prepare("
        select *
        from fcp_taguri ft 
        order by rand()
        limit 40"
        );
$stmt->execute();
$taguri = $stmt->fetchAll(PDO::FETCH_ASSOC);

