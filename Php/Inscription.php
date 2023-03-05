<!-- Front pour l'inscription -->
<!-- à inclure dans le fichier Accueil.php -->


<!-- Back pour l'inscription -->

<?php 


if(isset($_POST['inscription'])){

    if(!empty($_POST['nomA']) AND !empty($_POST['nomD']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['adresse']) AND !empty($_POST['tel']) AND !empty($_POST['ville']) AND !empty($_POST['licence'])){



    }else{


        echo "Sa marche ap";

    }


}


?>