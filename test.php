<?php
include 'includes/db.php';
include 'includes/functii.php';
include 'controllers/home-partial.php';


foreach ($poeziiPeSubiect as $poe) {

    echo $poe['nume_poet'] . ' '. $poe['prenume_poet'] . '<br>';
    echo $poe['titlu'] .  '<br><hr>';
    echo $poe['continut'] . '<br><hr>';
}