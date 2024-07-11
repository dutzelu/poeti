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
        Select *
        FROM fcp_taguri ft 
        WHERE ft.nume LIKE CONCAT(?, '%')";
$stmt = $pdo->prepare($query);
$stmt->bindParam(1, $litera, PDO::PARAM_STR);
$stmt->execute();
$taguri = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Calculează câte poezii sunt pe fiecare tag

function catePoezii ($id) {

    global $conn, $nrPoezii;
  
    $stmt = $conn->prepare("select *
        from fcp_poezii fp 
        left join fcp_taguri ft 
        on fp.subiect_id = ft.id 
        where ft.id = :id");
   
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute();
    $poeziiPeTag = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
    return $nrPoezii = count($poeziiPeTag);
  }
  



