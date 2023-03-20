<?php

class Tours{

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



}


?>