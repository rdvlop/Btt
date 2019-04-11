<?php


function connexion() {
    $host = "localhost";
    $user = "root";
    $mdp = "root";
    $bdd = "Batuta";

    
    $mysqli = new mysqli($host, $user, $mdp, $bdd) ;
    if ( $mysqli->connect_errno ) {
        die ("<p> Impossible de connecter à $bdd : " . $mysqli->connect_error . " </p>" ) ; 
    }
    return $mysqli;
}
   
?>
