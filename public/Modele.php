<?php
session_start();
require '../vendor/autoload.php';
include("config.php");
include("db.php");
/* Fonction qui renvoie l'utilisateur sur la page de login si besoin */
function verif_authent() {
    global $AUTHENT;
    if($AUTHENT == 1)
        if(!$_SESSION['nomuser']) {
        header('Location: Connexion.php');
        }
}

function config() {
    global $dbName, $dbUser, $dbPassword;
    $_SESSION['nombase'] = $dbName;
    $_SESSION['nomuser'] = $dbUser;
    $_SESSION['mdp'] = $dbPassword;
}

function verif_mdp($mdp) {
    $connection = db_connect();
    $users = db_fetchAll_Users($connection);
    foreach ($users as $user){
        if (($testmdp=$user->getMdp()) == $mdp){
            return true;
        }
    }
    return false;
    }

function detruire_session() {
    session_destroy();
}




