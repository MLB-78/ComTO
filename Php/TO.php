<link rel="stylesheet" href="../Styles/Style.css">

<?php include "Header.php";  ?>
<!-- Inclure sa page connexion -->
<?php include "ConnexionBDD.php";  ?>
<?php 


// Séléctionnez toutes la tables TO

// nouvelle variable req qui est égale à la variable monPdo dans connexionBDD.php
// Tu lui prépare la requête pour ici : (séléctionner)
$req=$monPdo->prepare("select * from tours ");
// Sa c'est un truc
$req->setFetchMode(PDO::FETCH_OBJ);
// Tu executes ta requête
$req->execute();
// Tu créer une nouvelle variable pour mettre req dedans 
// fetchAll = tu affiches tout
$TO=$req->fetchAll();


?>


<br><br>



<div class="container">
    
    
    <div class="accueil">
        
        <h1>Listes des Tours Opérateurs </h1>
    </div>

    
    <table class="table table-striped table-light">

        <thead>
            <tr>
        <th scope="col">Numéro</th>
        <th scope="col">Tours Opérateurs</th>
        <th scope="col">Pays Cibles</th>
    </tr>
</thead>

<tbody>
    
    <?php 

foreach($TO as $To){
    
    
// Tu as séléctionnez toutes la table tours donc tu as juste  
// à préciser à ta variable qui contient tout plus le nom de ta tables existantes

            echo"
            
            <tr>
            <th scope='row'>$To->num</th>
            <td>$To->tours</td>
            <td>$To->pays_cible</td>
            </tr>
            
            ";

        }

?>

    </tbody>
    </table>

</div>

<br><br>

<?php include "Footer.php"; ?>


