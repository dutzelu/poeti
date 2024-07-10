<?php
include 'includes/db.php';
include 'includes/functii.php';
include 'controllers/home-partial.php';

for ($i = 1; $i <= 10000; $i++) {
    $class = ($i % 2 !== 0) ? '' : ' class="row pt-1 pb-1' . 'grey-background' . '"';
    echo '<div' . $class . '>';
}