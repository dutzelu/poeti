<?php
include "includes/header.php";
include "controllers/categorie-articole-partial.php";

?>

<div class="main_container">
    <hr class="red_hr">
    <div class="title_cat uppercase semibold center">
        <p class="title-page"><?php echo $titluCategorie;?></p>
    </div>
    <hr class="small_hr">
    <div class="container">
    <ul class="categorieArticole">
    <?php foreach ($articolePePagina as $articol): ?>
        <li>
        <div class="row pt-1 pb-1">
            <div class="col-7">
                <a href="<?php echo BASE_URL . 'articole.php/' . creare_url_din_titlu($articol['titlu']) . '/' . $articol['id'];?>">
                    <h2 class="title-h2 pl-2 pt-1"><?php echo $articol['titlu'];?></h2>
                </a>
                <div class="text-para p-2 content-article" >
                    <?php echo substr(strip_tags($articol['continut']), 0, 500) . "...";?>
                </div>
                <div class="info-link">
                    <a href="<?php echo BASE_URL . 'articole.php/' . creare_url_din_titlu($articol['titlu']) . '/' . $articol['id'];?>" class="p-2 bold-videoteca">citește mai departe
                        <i class="fa fa-angle-double-right info-icon" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-5">
                <div class="img-book">
                <a href="<?php echo BASE_URL . 'articole.php/' . creare_url_din_titlu($articol['titlu']) . '/' . $articol['id'];?>">
                    <img src="<?php 
                        
                        if ($articol['imagine'] != NULL) {
                            echo BASE_URL . 'images/articole/' . $articol['imagine'];?>" alt="<?php echo $articol['titlu'];
                        } else {
                            echo BASE_URL . 'images/articole/articol.jpg';?>" alt="<?php echo $articol['titlu'];

                        }
                        
                    ?>" class="picture-info">
                </a>
                </div>
            </div>
        </div>
        </li>
    <?php endforeach;?>
    </ul> 

       
       

    </div>


    <!--        pagination-->
    <div class="text-center m-3">

        <ul class="custom_pagination">
            <li><a href="?pageno=1">Prima</a></li>
            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><i aria-hidden="true" class="fa fa-angle-double-left"></i></a>
            </li>
            <?php for ($i; $i<=$total_pages; $i++) {
                echo '<li><a href="?pageno=' . $i . '">' . $i . '</a></li>';
            }?>
            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"><i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
            </li>
            <li><a href="?pageno=<?php echo $total_pages; ?>">Ultima</a></li>
        </ul>

    </div>

</div>

<?php
include "includes/footer.php";

?>