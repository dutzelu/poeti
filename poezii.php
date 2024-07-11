<?php

include "includes/header.php";
include "controllers/poezii-tag-partial.php";

?>

<div class="main_container">

            <hr class="red_hr">

            <div class="title_cat uppercase semibold center">
                <p class="title-page">Poezii</p>
            </div>

            <hr class="small_hr">

              
                <div class="row-flex-wrap-100 ml15 toatepoeziile">
					<?php foreach ($poeziiPePagina as $poezie): ?>
					
					<div class="poems">
						<div class="poem_title">
                            <p class="poem-title">
                                <?php echo $poezie['titlu'];?>
                            </p>
					    </div>
							
						<div class="poem_lirics">

						<?php strip_tags(rezumatPoezie ($poezie['continut'], 25)); ?>

                        <p><a class="read_more mt20" href="<?php echo BASE_URL . 'poezie.php/' . $aliasPoet . '/' . creare_url_din_titlu($poezie['titlu'])  . '/' . $poezie['id'];?>">citește mai mult »</a></p>

						</div>
					</div>
                    
                    <?php endforeach;?>

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



<?php include "includes/footer.php"; ?>