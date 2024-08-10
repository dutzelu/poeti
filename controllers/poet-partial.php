<?php

// declar nule
$numeComplet = NULL;
$fotoBiografie = NULL;
$numePseudonim = NULL;
$poetPeFCP = NULL;
$aliasPoet = NULL;
$dataNastere = NULL;
$dataAdormire  = NULL;
$aniInchisoare = NULL;
$loculNasterii = NULL;
$judetulNasterii = NULL;
$loculMortii = NULL;
$decesNumeCimitir = NULL;
$confesiune = NULL;
$ocupatii = NULL;
$dataNastere = NULL;
$dataAdormire = NULL;

// Preiau numele și id-ul poetului din URL

    $url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $path = parse_url($url, PHP_URL_PATH);
    $parts = explode('/', trim($path, '/'));
    $numePagina = $parts[count($parts) - 3];
    $numePoet = $parts[count($parts) - 2];
    $idPoet = $parts[count($parts) - 1];

// Date despre poet 

    $stmt = $conn->prepare("
        select fp.*, nl.nume as localitate_nastere, nj.nume as judet, fc.nume as confesiune, fn.nume as nationalitate 
        from fcp_personaje fp 
        left join nom_localitati nl 
        on fp.nastere_loc_id = nl.id 
        left join nom_judete nj 
        on nl.id_judet = nj.id 
        left join fcp_confesiuni fc 
        on fp.confesiune_id = fc.id 
        left join fcp_nationalitati fn 
        on fp.nationalitate_id = fn.id 
        where fp.id = :id  
    ");

    $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
    $stmt->execute();
    $poetData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($poetData as $pd) {
        
        $numeComplet = $pd['prenume'] . ' ' . $pd['nume'];
        $numePseudonim = $pd['nume_pseudonim'];
        $fotoBiografie = BASE_URL . 'images/biografie/'. creare_url_din_titlu($pd['nume'] . ' ' . $pd['prenume']) . '.jpg';
        $poetPeFCP = 'https:/fericiticeiprigoniti.net/' . $pd['alias'];
        $aliasPoet = $pd['alias'];
        $dataNastere =  strftime('%d %B %Y', strtotime($pd['data_nastere']));
        $dataAdormire  =  strftime('%d %B %Y', strtotime($pd['data_adormire']));
        $aniInchisoare = $pd['ani_inchisoare'];
        $loculNasterii = $pd['localitate_nastere'];
        $judetulNasterii = $pd['judet'];
        $loculMortii = $pd['deces_locul_mortii'];
        $decesNumeCimitir = $pd['deces_nume_cimitir'];
        $confesiune = $pd['confesiune'];
        $ocupatii = $pd['ocupatii_socioprofesionale'];
        $confesiune = $pd['confesiune'];
        $nationalitate = $pd['nationalitate'];
        $prenumeTata = $pd['prenume_tata'];
        $prenumeMama = $pd['prenume_mama'];
        $baieti = $pd['count_copii_b'];
        $fete = $pd['count_copii_f'];
    }
        
// Poeziile poetului afisate initial
        
    $stmt = $conn->prepare("Select * FROM fcp_poezii WHERE personaj_id = :id");
    
    $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
    $stmt->execute();
    $poezii = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $poeziiPopulare= array_slice ($poezii, 0, 25);
    $poeziiAfisateInitial= array_slice ($poezii, 0, 12);
        
// Toate Poeziile poetului 
    
    $stmt = $conn->prepare("Select poezii.*, pers.alias as alias_poet
    FROM fcp_poezii poezii 
    left join fcp_personaje pers 
    on poezii.personaj_id = pers.id 
    WHERE personaj_id = :id
    
    ");
    
    $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
    $stmt->execute();
    $toatePoeziilePoetului = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $nrPoezii = count($toatePoeziilePoetului);
    // dd($nrPoezii);
        
// Toate Poeziile create in temnita 
    
    $stmt = $conn->prepare("
        SELECT *
        FROM fcp_poezii fp 
        WHERE fp.personaj_id  = :id and fp.perioada_creatiei_id =4
        ");
    
    $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
    $stmt->execute();
    $poeziiInDetentie = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $nrPoeziiDetentie = count($poeziiInDetentie);
        
// Functii si demnitati publice
    
        $stmt = $conn->prepare("
            SELECT rsp.realizare_tip_id, rsp.nume_realizare, rsp.data_inceput, rsp.data_sfarsit 
            FROM fcp_personaje_realizari_socioprofesionale rsp 
            INNER JOIN fcp_personaje_realizari_tipuri rt ON rsp.realizare_tip_id = rt.id
            WHERE rsp.personaj_id =:id AND rsp.realizare_tip_id = 1;
            ");
        
        $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
        $stmt->execute();
        $functii = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $nrFunctii = count($functii);
        
// Afilieri socio-profesionale
    
        $stmt = $conn->prepare("
            SELECT rsp.realizare_tip_id, rsp.nume_realizare, rsp.data_inceput, rsp.data_sfarsit 
            FROM fcp_personaje_realizari_socioprofesionale rsp 
            INNER JOIN fcp_personaje_realizari_tipuri rt ON rsp.realizare_tip_id = rt.id
            WHERE rsp.personaj_id =:id AND rsp.realizare_tip_id = 2;
            ");
        
        $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
        $stmt->execute();
        $afilieri = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $nrAfilieri = count($afilieri);
        
// Distincții

    $stmt = $conn->prepare("
            SELECT rsp.realizare_tip_id, rsp.nume_realizare, rsp.data_inceput, rsp.data_sfarsit 
            FROM fcp_personaje_realizari_socioprofesionale rsp 
            INNER JOIN fcp_personaje_realizari_tipuri rt ON rsp.realizare_tip_id = rt.id
            WHERE rsp.personaj_id =:id AND rsp.realizare_tip_id = 3;
    ");

    $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
    $stmt->execute();
    $distinctii = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $nrDistinctii = count($distinctii);
        
// Premii

    $stmt = $conn->prepare("
            SELECT rsp.realizare_tip_id, rsp.nume_realizare, rsp.data_inceput, rsp.data_sfarsit 
            FROM fcp_personaje_realizari_socioprofesionale rsp 
            INNER JOIN fcp_personaje_realizari_tipuri rt ON rsp.realizare_tip_id = rt.id
            WHERE rsp.personaj_id =:id AND rsp.realizare_tip_id = 4;
    ");

    $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
    $stmt->execute();
    $premii = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $nrPremii = count($premii);
        
// Afilieri politice

    $stmt = $conn->prepare("
            SELECT rsp.realizare_tip_id, rsp.nume_realizare, rsp.data_inceput, rsp.data_sfarsit 
            FROM fcp_personaje_realizari_socioprofesionale rsp 
            INNER JOIN fcp_personaje_realizari_tipuri rt ON rsp.realizare_tip_id = rt.id
            WHERE rsp.personaj_id =:id AND rsp.realizare_tip_id = 5;
    ");

    $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
    $stmt->execute();
    $politice = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $nrPolitice = count($politice);

        

// Paginatie poezii poet


if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_rows = $nrPoezii;
$total_pages = ceil($total_rows / $no_of_records_per_page);


// Poezii ale poetului selectate pe pagina 

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
$poeziiPePagina = $stmt->fetchAll(PDO::FETCH_ASSOC);
$i=1;

// Opera poetului

$stmt = $conn->prepare("
    select fbc.*, fpc.*,fbe1.nume as nume_editura1, fbe2.id as nume_editura2
    from fcp_biblioteca_carti fbc

    left join fcp_personaje2carti fpc 
    on fpc.carte_id = fbc.id 

    left join fcp_biblioteca_edituri fbe1 
    on fbc.editura_id = fbe1.id 

    left join fcp_biblioteca_edituri fbe2 
    on fbc.editura2_id = fbe2.id

    where fpc.personaj_id = :id and fpc.carte_tip = 1

    order by fbc.anul_publicatiei DESC

");

$stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
$stmt->execute();
$operaPoetului = $stmt->fetchAll(PDO::FETCH_ASSOC);
$nrOperaPoetului = count($operaPoetului);


// Carti despre Poet

$stmt = $conn->prepare("
    select fbc.*, fpc.*,fbe1.nume as nume_editura1, fbe2.id as nume_editura2
    from fcp_biblioteca_carti fbc

    left join fcp_personaje2carti fpc 
    on fpc.carte_id = fbc.id 

    left join fcp_biblioteca_edituri fbe1 
    on fbc.editura_id = fbe1.id 

    left join fcp_biblioteca_edituri fbe2 
    on fbc.editura2_id = fbe2.id

    where fpc.personaj_id = :id and fpc.carte_tip = 2
    order by fbc.anul_publicatiei DESC

");

$stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
$stmt->execute();
$cartiDesprePoet = $stmt->fetchAll(PDO::FETCH_ASSOC);
$nrCartiDesprePoet = count($cartiDesprePoet);

