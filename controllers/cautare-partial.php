<?php 

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $cautare = $_POST['input'];
}

if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    $cautare = $_GET['cautare'];
    $tip = $_GET['tip'];
} else {
    $tip = NULL;
}


// Cautare in titlu si continutul poeziei

    $cautare_cu_tag = "%$cautare%";
    $sql = "
    SELECT po.id, po.titlu, po.continut, pers.id AS autor_id, pers.nume, pers.prenume, pers.nume_pseudonim, pers.alias
    FROM fcp_poezii po
    LEFT JOIN fcp_personaje pers 
    ON po.personaj_id = pers.id
    WHERE po.continut LIKE :cautare OR po.titlu LIKE :cautare";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cautare', $cautare_cu_tag, PDO::PARAM_STR);
    $stmt->execute();
    $poezii= $stmt->fetchAll(PDO::FETCH_ASSOC);
    $nrCautarePoezii = count($poezii);
    
    // Cautare in articole
    
    $cautare_cu_tag = "%$cautare%";
    $sql = "
    select fa.id, fa.titlu, fa.continut, fac.nume as nume_categorie, faut.nume as nume_autor, faut.prenume as prenume_autor
    from fcp_articole fa 
    left join fcp_articole_categorii fac 
    on fa.cat_id = fac.id 
    left join fcp_autori faut
    on fa.autor_id = faut.id 
    where fa.titlu like :cautare or fa.continut like :cautare";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cautare', $cautare_cu_tag, PDO::PARAM_STR);
    $stmt->execute();
    $articole= $stmt->fetchAll(PDO::FETCH_ASSOC);
    $nrCautareArticole = count($articole);
    
    // Cautare in poeti
    
    $cautare_cu_tag = "%$cautare%";
    $sql = "
    SELECT fcp_personaje.*, nom_localitati.nume AS localitate_nastere, nom_judete.nume AS judet
    FROM fcp_personaje 
    LEFT JOIN fcp_personaje2roluri 
    ON fcp_personaje.id = fcp_personaje2roluri.personaj_id 
    LEFT JOIN nom_localitati
    ON fcp_personaje.nastere_loc_id = nom_localitati.id
    LEFT JOIN nom_judete
    ON nom_localitati.id_judet = nom_judete.id
    WHERE fcp_personaje2roluri.rol_id = 12 
    AND (fcp_personaje.nume LIKE :cautare OR fcp_personaje.prenume LIKE :cautare OR fcp_personaje.nume_pseudonim LIKE :cautare);";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cautare', $cautare_cu_tag, PDO::PARAM_STR);
    $stmt->execute();
    $poeti= $stmt->fetchAll(PDO::FETCH_ASSOC);
    $nrCautarePoeti = count($poeti);
    