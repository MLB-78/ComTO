<?php
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



        // La session de 


    } else {

      header("Location: Accueil.php");
      
      // Afficher un message d'erreur en plus

    }

}



class Inscription{

  private $numCompte;
  private $nomA;
  private $nom;
  private $numCompte;
  private $numCompte;
  private $numCompte;
  private $numCompte;


  public static function add(To $to) :int {


 
 

  }




}

?>







