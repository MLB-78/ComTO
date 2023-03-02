<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="shortcut icon" href="Images/logoComto.png" type="image/x-icon">
    <title>ComTO - Accueil</title>
</head>
<body>
    
<?php include "header.php" ?>

<div class="accueil">



</div>

<!-- Btn connexion ou inscription avec JS (Guettez script NARUTO)-->
<div class="bloc">

    <div class="lesBoutons">
            
        <div class="btn1">
            
            <button type="button" class="btn btn-outline-primary" id="connexion">Connexion</button>
            
            
        </div>
    
        &nbsp;&nbsp;
    
        <div class="btn2">
            
            <button type="button" class="btn btn-outline-warning" id="inscription">Inscription</button>
            
          
        </div>

            
    </div>        
   
</div>

    <br><br>

    
<div class="bloc2">
        
    <h2>Se connecter</h2>

    <br>
    <!-- Formulaire (connexion) -->

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email *</label>
            <input type="email" class="form-control" id="email" placeholder="Saisissez votre e-mail personnel" require="required">
        
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de Passe *</label>
            <input type="password" class="form-control" id="mdp" placeholder="Saisissez votre e-mail personnel" require="required">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Se souvenir</label>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
    
    
            
</div>

<!-- Formulaire (inscription) -->


<div class="bloc3">

<h2>S'inscrire</h2>

<br>

<form>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Nom de l'agence*</label>
      <input type="text" class="form-control" id="">
    </div>
    <div class="form-group col-md-6">
      <label for="">Nom et Prénom du Directeur</label>
      <input type="text" class="form-control" id="">
    </div>
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="">Email de l'agence*</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="">Mot de Passe *</label>
      <input type="password" class="form-control" id="mdp" name="mdp">
    </div>
  </div>
  <div class="form-group">
    <label for="">Adresse *</label>
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="15 rue de la mortadelle">
  </div>
  <div class="form-group">
    <label for="">N° de téléphone de l'agence *</label>
    <input type="text" class="form-control" id="tel" name="tel" placeholder="06 XX XX XX 51">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Ville *</label>
      <input type="text" class="form-control" id="ville" name="ville">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Type d'agence</label>
      <select id="inputState" class="form-control">
        <option selected> -- Sélectionnez une option -- </option>
        <option >Agence de Voyage</option>
        <option >Commerce</option>
        <option >Petite entreprise</option>
        <option >Moyenne entreprise</option>
        <option >Grandes entreprise</option>
        <option >Autres</option>
       
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="">N° de licence</label>
      <input type="text" class="form-control" id="">
    </div>
  </div>

  <small class="form-text text-muted">Veillez à bien vérifier la fiabilité de vos informations</small>

  <br>
  
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

</div>

<br><br>



<?php include "Footer.php"; ?>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="Blocs.js"></script>

</body>
</html>