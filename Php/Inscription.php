<?php include "Header.php"; ?>
<?php 


include "ConnexionBDD.php";


if(isset($_POST['inscrire'])){

    if(!empty($_POST['nomA']) AND !empty($_POST['nomD']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['adresse']) AND !empty($_POST['tel']) AND !empty($_POST['ville']) AND !empty($_POST['licence'])){

        $nomA = htmlspecialchars($_POST['nomA']);
        $nomD = htmlspecialchars($_POST['nomD']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $tel = htmlspecialchars($_POST['tel']);
        $ville = htmlspecialchars($_POST['ville']);
        $licence = htmlspecialchars($_POST['licence']);

        // Requête SQL

        $insertion = $monPdo->prepare('INSERT INTO inscription(nomAgence, nomDirecteur, email, mdp, adresse, tel, ville, licence)VALUES(?,?,?,?,?,?,?,?)');

        $insertion->execute(array($nomA, $nomD, $email, $mdp, $adresse, $tel, $ville, $licence));


    }else{


      echo "Dégagez oh";

    }


}


?>

<br><br>

<h1>Bienvenue </h1>

<br><br>

