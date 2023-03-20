<!-- Les includes / require after -->

<?php



include "vues/Header.php";




// <!-- Flux de contrôle (ternaire) -->



$uc = empty($_GET['uc']) ? "accueil" : $_GET["uc"]; 

switch($uc){

    case 'accueil' :
        include('vues/Accueil.php');
    break;
    case 'tours' :
        include('vues/Liste des TO.php');
    break;

}





include "vues/Footer.php";


?>