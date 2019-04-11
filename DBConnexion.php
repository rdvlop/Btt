<?php

$host = "localhost"; 
$user = "root";
$mdp = "root";
$bdd = "batuta";
$mysqli;

function connection() {
    echo "<p>connexion...</p>"
    $mysqli = new mysqli($host, $user, $mdp, $bdd ) ;
    echo "<p>connecté...</p>"
    if ( $mysqli->connect_errno ) {
        die ("<p> Impossible de connecter à $bdd : " . $mysqli->connect_error . " </p>" ) ; 
    }
    return $mysqli;
}



   
?>
