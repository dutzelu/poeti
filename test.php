<?php
include 'includes/db.php';
include 'includes/functii.php';



articole_din_categ(100);
dd($articole);

foreach ($articole as $articol) {
    $idArticol = $articol['id'];
    $titluArticol = $articol['titlu'];
    $continutArticol = $articol['continut'];
    $numeAutorArticol = $articol['nume'];
    $prenumeAutorArticol = $articol['prenume'];
    $imagineArticol = $articol['imagine'];
    $aliasArticol = creare_url_din_titlu ($titluArticol);		
}