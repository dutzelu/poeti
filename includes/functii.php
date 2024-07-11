<?php
// Functie direct_dump

function dd ($x) {
    echo "<pre>";
        var_dump($x);
    echo "</pre>";
}


// Functie selectare poeti din tabelul personaje

$sql_poeti = "
        SELECT * 
        FROM `fcp_personaje` 
        LEFT JOIN fcp_personaje2roluri 
        ON fcp_personaje.id = fcp_personaje2roluri.personaj_id 
        WHERE rol_id=12
        ";

// Functie care inlocuieste diacriticile si alte caractere cu echivalentul ASCII

function replaceSpecialChars ($string){

    $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
    'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
    'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
    'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
    'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ă'=>'a', 'Ă'=>'A', 'ș'=>'s', 'Ș'=>'S', 'ț'=>'t', 'Ț'=>'T', 'Ţ'=>'T', 'Ş'=>'S', 'ţ'=>'t', 'ş'=>'s' );
     
    return strtr( $string, $unwanted_array );
  
  }

  function creare_url_din_titlu ($titlu_articol) {
    $titlu_articol = replaceSpecialChars ($titlu_articol);
    
    $caractere_select = ['.',',','?',';',':', '”', '„'];
    $caractere_elim = ['','','','',''];
    $titlu_articol = str_replace($caractere_select, $caractere_elim, $titlu_articol); 
  
    // reduc numarul de cuvinte, tai toate cuvintele dupa 100 de caractere
  
    if (strlen($titlu_articol) > 100  ) 
    {
      $titlu_articol = wordwrap($titlu_articol, 100);
      $titlu_articol = substr($titlu_articol, 0, strpos($titlu_articol, "\n"));
    }
  
  
    $titlu_articol = explode (" ",$titlu_articol);
     
    $titlu_articol = implode ("-",$titlu_articol);
    $titlu_articol = str_replace(' ', '', $titlu_articol);
    $titlu_articol = str_replace('(', '', $titlu_articol);
    $titlu_articol = str_replace(')', '', $titlu_articol);
     
    $titlu_articol = strtolower($titlu_articol);
  
    return trim($titlu_articol);
  }


// Functie poezie tăiată

function taiePoezie ($poem, $nr_linii) {
  
  // Sparg poezii în linii
  $linii = explode("\n", $poem);
  
  // selectez primele linii
  $primele4linii = array_slice($linii, 0,  $nr_linii);
  
  // Unesc primele linii
  $rezumatPoezie = implode("\n", $primele4linii);
  
  echo $rezumatPoezie;
}
 
function rezumatPoezie ($string, $wordsreturned)
{
    $retval = $string;  //  Just in case of a problem
    $array = explode(" ", $string);
    /*  Already short enough, return the whole thing*/
    if (count($array)<=$wordsreturned)
    {
        $retval = $string;
    }
    /*  Need to chop of some words*/
    else
    {
        array_splice($array, $wordsreturned);
        $retval = implode(" ", $array)." ...";
    }
    echo $retval;
}

 // Functie selectare articole pe o anumită categorie

function articole_din_categ($id) {
  global $conn, $articole;
  $stmt = $conn->prepare("
  select art.*, aut.nume, aut.prenume
  from fcp_articole art 
  left join fcp_autori aut
  on art.autor_id = aut.id 
  where cat_id = $id
  order by id desc"
);

$stmt->execute();
return $articole = $stmt->fetchAll(PDO::FETCH_ASSOC);

$idArticol =  NULL;
$titluArticol =  NULL;
$continutArticol =  NULL;
$numeAutorArticol =  NULL;
$prenumeAutorArticol = NULL; 
$aliasArticol = NULL;
$imagineArticol = NULL;

}


// Calculează câte poezii sunt în total

$stmt = $conn->prepare("select * from fcp_poezii");
$stmt->execute();
$total = $stmt->fetchAll(PDO::FETCH_ASSOC);

$totalPoezii = count($total);


