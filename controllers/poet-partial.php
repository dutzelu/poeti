<?php


// Preiau numele și id-ul poetului din URL

    $url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $path = parse_url($url, PHP_URL_PATH);
    $parts = explode('/', trim($path, '/'));
    $numePoet = $parts[count($parts) - 2];
    $idPoet = $parts[count($parts) - 1];

// Date despre poet 

    $stmt = $conn->prepare("Select fcp_personaje.*, nom_localitati.nume as localitate_nastere, nom_judete.nume as judet, fcp_confesiuni.nume as confesiune
        FROM fcp_personaje 
        LEFT JOIN nom_localitati
        ON fcp_personaje.nastere_loc_id  = nom_localitati.id
        left join nom_judete
        on nom_localitati.id_judet = nom_judete.id
        left join fcp_confesiuni
        on fcp_personaje.confesiune_id = fcp_confesiuni.id
        WHERE fcp_personaje.id = :id");

    $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
    $stmt->execute();
    $poetData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($poetData as $pd) {
        
        $numeComplet = $pd['prenume'] . ' ' . $pd['nume'];
        $numePseudonim = $pd['nume_pseudonim'];
        $fotoBiografie = BASE_URL . 'images/biografie/'. creare_url_din_titlu($pd['nume'] . ' ' . $pd['prenume']) . '.jpg';
        $poetPeFCP = 'https:/fericiticeiprigoniti.net/' . $pd['alias'];
        $aliasPoet = $pd['alias'];
        
        $formatter = new IntlDateFormatter("ro_RO", IntlDateFormatter::LONG, IntlDateFormatter::NONE);
        $dataNastere = $formatter->format(strtotime($pd['data_nastere']));
        $dataAdormire  = $formatter->format(strtotime($pd['data_adormire']));
        
        $aniInchisoare = $pd['ani_inchisoare'];
        $loculNasterii = $pd['localitate_nastere'];
        $judetulNasterii = $pd['judet'];
        $loculMortii = $pd['deces_locul_mortii'];
        $decesNumeCimitir = $pd['deces_nume_cimitir'];
        $confesiune = $pd['confesiune'];
        $ocupatii = $pd['ocupatii_socioprofesionale'];
        
    }
        
        // Poeziile poetului
        
        $stmt = $conn->prepare("Select * FROM fcp_poezii WHERE personaj_id = :id");
        
        $stmt->bindParam(':id', $idPoet, PDO::PARAM_INT); 
        $stmt->execute();
        $poezii = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $poeziiPopulare= array_slice ($poezii, 0, 25);
        $poeziiAfisateInitial= array_slice ($poezii, 0, 12);

// Poezia pe scurt

