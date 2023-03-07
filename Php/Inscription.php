<?php 
session_start();

include "ConnexionBDD.php";

if(isset($_POST['inscrire'])){

    if(!empty($_POST['nomA']) AND !empty($_POST['nomD']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['adresse']) AND !empty($_POST['tel']) AND !empty($_POST['ville']) ){

        $nomA = htmlspecialchars($_POST['nomA']);
        $nomD = htmlspecialchars($_POST['nomD']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $tel = htmlspecialchars($_POST['tel']);
        $ville = htmlspecialchars($_POST['ville']);
  

        // Requête SQL

        $insertion = $monPdo->prepare('INSERT INTO inscription(nomAgence, nomDirecteur, email, mdp, adresse, tel, ville)VALUES(?,?,?,?,?,?,?)');
        $insertion->execute(array($nomA, $nomD, $email, $mdp, $adresse, $tel, $ville));


        // La session de 

        $_SESSION['NomD'] = $nomD ;
        $_SESSION['email'] = $email ;
        $_SESSION['mdp'] = $mdp ;
        $_SESSION['tel'] = $tel;

    }else{

      header("Location: Accueil.php");
      
      // Afficher un message d'erreur en plus

    }

}

?>


<!-- Page spéciale pour la personne connecté  -->
<!-- Sûrement avec navbar spéciale -->
<!-- Donc Rubrique spéciale -->
<!-- Et nom du compte en haut à droite avec un menu déroulant (ou pas), avec une rubrique profile, paramètre ,   -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/StyleAdherant.css">
    <link rel="shortcut icon" href="../Images/logoComto.png" type="image/x-icon">
    <title>Votre Espace - <?php echo $_POST['nomD'] ;  ?> </title>
</head>
<body>
    
<!-- Navbar Spéciale Adhérants -->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: whitesmoke;">
        <a class="navbar-brand" href="#"> <img src="../Images/logoComToBaleze.png" width="40px"> &nbsp; ComTO &nbsp; <img src="../Images/logoComToBaleze.png" width="40px"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Histoire</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="TO.php">Listes des TO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">Mon Profil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">Commander des brochures</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">Paramètre</a>
            <!-- A l'intérieur : se déconnetcter et un mode sombre (ou pas) -->
        </li>
    </ul>
  </div>
</nav>


<br><br>


<div class="titreNom">
    
  <h1>Bienvenue sur votre espace dédié, <strong> <?php  echo $_POST['nomD'] ; ?> </strong> </h1>

</div>

    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>







