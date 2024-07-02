<?php
include 'includes/header.php';
include 'controllers/poet-partial.php';

?>
<html>
<head>
    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php


        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $stmt = $conn->prepare("Select * FROM fcp_poezii WHERE personaj_id = :id");
        $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
        $stmt->execute();
        $toatePoeziilePoetului = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $nrPoezii = count($toatePoeziilePoetului);
 
        $total_rows = $nrPoezii;
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        // $sql = "SELECT * FROM table LIMIT $offset, $no_of_records_per_page";
        // $res_data = mysqli_query($conn,$sql);
        // while($row = mysqli_fetch_array($res_data)){
        //     //here goes the data
        // }
        // mysqli_close($conn);

        $sql = "Select poezii.*, pers.alias as alias_poet
            FROM fcp_poezii poezii 
            left join fcp_personaje pers 
            on poezii.personaj_id = pers.id 
            WHERE personaj_id = :id LIMIT :offset, :no_of_records_per_page;";

        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':id',$idPoet,PDO::PARAM_INT);
        $stmt->bindParam(':offset',$offset,PDO::PARAM_INT);
        $stmt->bindParam(':no_of_records_per_page',$no_of_records_per_page,PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $result) {
            echo $result['titlu'].'<br>';
        }
        $i = 1;
    ?>
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <?php for ($i; $i<=$total_pages; $i++) {
            echo '<li><a href="?pageno=' . $i . '">' . $i . '</a></li>';
        }?>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</body>
</html>
