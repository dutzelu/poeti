<?php
include 'includes/db.php';
include 'includes/functii.php';
include 'controllers/home-partial.php';

function catePoezii ($id) {

    global $conn;
  
    $stmt = $conn->prepare("select *
        from fcp_poezii fp 
        left join fcp_taguri ft 
        on fp.subiect_id = ft.id 
        where ft.id = :id");
   
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute();
    $poeziiPeTag = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
    echo count($poeziiPeTag);
  }

catePoezii(12);
