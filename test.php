<?php
include 'includes/db.php';
include 'includes/functii.php';
include 'controllers/home-partial.php';

$cautare = 'iad';

 // Căutare 

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
 $cautari = $stmt->fetchAll(PDO::FETCH_ASSOC);
 

dd($rows);