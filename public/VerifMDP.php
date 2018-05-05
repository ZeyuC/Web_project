<?php
include("Modele.php");
include("Vue.php");
$mdp = $_POST['mdp'];

if(verif_mdp($mdp)) {
    config();
    header('Location: Profil.php');
}
else {
    entete();
    bandeau();
    affiche_erreur("Le mot de passe entré est eronné.");
    affiche_info('Veuillez-essayer de nouveau <a href="Connexion.php">ici</a>.');
}
