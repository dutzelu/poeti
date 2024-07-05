
<div class="fisa-biografica">
    <ul class="list-links" id="test">
        <a class="<?php if ($numePagina=='poezii-poet.php') {echo 'active-href';}?>" href="<?php echo BASE_URL . 'poezii-poet.php/' . $aliasPoet . '/' . $idPoet;?>"><li class="list-links-items active-link-item">Poezii</li></a>
       
        <a class="<?php if ($numePagina=='fisa-biografica.php') {echo 'active-href';}?>"  href="<?php echo BASE_URL . 'fisa-biografica.php/' . $aliasPoet . '/' . $idPoet;?>"><li class="list-links-items ">Fisa biografica</li></a>
        
        <a class="<?php if ($numePagina=='fisa-carcerala.php') {echo 'active-href';}?>"  href="<?php echo BASE_URL . 'fisa-carcerala.php/' . $aliasPoet . '/' . $idPoet;?>"><li class="list-links-items ">Fisa carcerală</li></a>
       
        <a class="<?php if ($numePagina=='itinerariu-detentie.php') {echo 'active-href';}?>" href="<?php echo BASE_URL . 'itinerariu-detentie.php/' . $aliasPoet . '/' . $idPoet;?>"><li class="list-links-items ">Itinerariu detenție</li></a>
       
        <a class="<?php if ($numePagina=='biografie-poet.php') {echo 'active-href';}?>"  href="<?php echo BASE_URL . 'biografie-poet.php/' . $aliasPoet . '/' . $idPoet;?>"><li class="list-links-items ">Biografie</li></a>
    </ul>
</div>