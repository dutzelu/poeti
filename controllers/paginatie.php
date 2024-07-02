<?php

        foreach ($poeziiPePagina as $poezie) {
            echo $result['titlu'].'<br>';
        }
        $i = 1;
    ?>
    <ul class="custom_pagination">
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
