let btnConnexion = document.getElementById('connexion');
let btnInscription = document.getElementById('inscription');
let connexion = document.querySelector('.bloc2');
let inscription = document.querySelector('.bloc3');

btnInscription.addEventListener("click", function() {

    connexion.style.display = "none";
    inscription.style.display = "block";

});

btnConnexion.addEventListener("click", function() {

    inscription.style.display = "none";
    connexion.style.display = "block";

});