<?php




// Paginatie poezii poet


if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 40;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_rows = $totalPoezii;
$total_pages = ceil($total_rows / $no_of_records_per_page);


// Poezii ale poetului selectate pe pagina 

$sql = "Select*
    FROM fcp_poezii 
    LIMIT :offset, :no_of_records_per_page;";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':offset',$offset,PDO::PARAM_INT);
$stmt->bindParam(':no_of_records_per_page',$no_of_records_per_page,PDO::PARAM_INT);
$stmt->execute();
$poeziiPePagina = $stmt->fetchAll(PDO::FETCH_ASSOC);
$i=1;
