<?php

include "includes/header.php";
include "controllers/poet-partial.php";

?>

<div class="main_container">
    <div class="flex_start_between remove_flex768">
        <div class="first-col-biografy">
            <div class="display-flex-se mb20">
            <img src="<?php echo $fotoBiografie; ?>" alt="<?php echo $numeComplet . ' (' . $numePseudonim . ')';?>">
            </div>
            <div class="name_of_author center mb20">
                <p class="uppercase"><?php echo $numeComplet;?></p>
                <p class="uppercase"><?php if ($numePseudonim == NULL) {echo "";} else {echo '(' . $numePseudonim . ')';}?></p>
            </div>

        <?php include 'controllers/menu-biografic.php';?>

            <div class="display-flex-end">
                <p class="result-search-span" style="padding: 0.6rem 0.9rem ">Cele mai populare</p>
            </div>
            <ul class="sidebar-poem-links">

            <?php
				foreach ($poeziiPopulare as $poezie) {
					echo '<li><a href="' . BASE_URL . 'poezie.php/' . $aliasPoet . '/' . creare_url_din_titlu($poezie['titlu'])  . '/' . $poezie['id'] . '">' . $poezie['titlu'] . '</a><i aria-hidden="true" class="fa fa-caret-right poem-icon"></i></li>' ;
				}
			?>
            </ul>
        </div>
        <div class="second-col-biografy">
            <div class="second-wrapper">
                <div class="flex_start_between remove_flex992">
                        <div class="custom_name_of_author">
                            <h2><?php echo $numeComplet;?></h2>
                            <div class="sublink-result">
                                <p style="color: var(--font-grey-2)"><span class="red">Toate poeziile (<?php echo $nrPoezii;?>) | </span> Poezii carcerale (<?php echo $nrPoeziiDetentie;?>)</p>
                            </div>
                        </div>
                </div>
              
                <div class="row">
                    <div class="row-flex-wrap-100 ml15">

					<?php foreach ($poeziiPePagina as $poezie): ?>
					
					<div class="poems">
						<div class="poem_title">
                        <p class="poem-title">
							<?php echo $poezie['titlu'];?>
                        </p>
						</div>
							
						<div class="poem_lirics">

						<?php rezumatPoezie ($poezie['continut'], 25); ?>

							<p><a class="read_more mt20" href="<?php echo BASE_URL . 'poezie.php/' . $aliasPoet . '/' . creare_url_din_titlu($poezie['titlu'])  . '/' . $poezie['id'];?>">citește mai mult »</a></p>

						</div>

					</div>

                    <?php endforeach;?>

                    </div>
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
        </div>
    </div>


</div>
<?php include "includes/footer.php"; ?>