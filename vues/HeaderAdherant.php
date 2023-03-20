
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
        <a class="navbar-brand" href="Inscription.php"> <img src="../Images/logoComToBaleze.png" width="40px"> &nbsp; ComTO &nbsp; <img src="../Images/logoComToBaleze.png" width="40px"> </a>
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

