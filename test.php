<?php
include 'includes/db.php';
include 'includes/functii.php';

$idPoet =25;

$stmt = $conn->prepare("Select * FROM fcp_personaje WHERE id = :id");
$stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
$stmt->execute();
$poetData = $stmt->fetchAll(PDO::FETCH_ASSOC);
// dd($poetData);
echo $poetData[0]['nume'];
// dd($aliasuri);