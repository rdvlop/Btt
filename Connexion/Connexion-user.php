<?php

session_start();

require "../DBConnexion.php" ;

$mysqli=connexion();

$email = $_POST['email'];
$password = $_POST['password'];
    
$sql='SELECT *
FROM t_user
Where t_user.USER_EMAIL= "' . $email . '" AND t_user.USER_PASSWORD= sha1("' . $password .'")';
        

$result = $mysqli->query ($sql);

if ( $result->num_rows > 0 ) { 
    $_SESSION["email"] = $email ;                  
    header('Location: ../Accueil/Accueil2.html');
} else {
    header('Location: Connexion.html');
}





?>