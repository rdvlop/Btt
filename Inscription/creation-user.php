<?php


//require "../DBConnexion.php" ;

$host = "localhost"; 
$user = "root";
$mdp = "root";
$bdd = "Batuta";
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

$mysqli=connexion();

$passwdConf = $_POST['passwd-conf'];
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$newsletter = $_POST['newsletter'];
$newsletter = $newsletter === 'on' ? true : false;
$gender = $gender === 'Un homme' ? 1 : 2;

$sql = 'INSERT INTO T_USER(USER_LOGIN, USER_FIRSTNAME, USER_LASTNAME, USER_EMAIL, USER_PASSWORD, USER_BIRTH, USER_GENDER, USER_NEWSLETTER) VALUES ("'
. $username . '", "'
. $firstname . '", "'
. $lastname . '", "'
. $email . '", sha1("' . $passwd . '"), "'
. $birthday . '", '
. $gender . ', '
. $newsletter . ')';


$result = $mysqli->query ($sql);

if ( ! $result ){ 
    header('Location: inscription.html');
} else {
    header('Location: Bienvenue.html');}


?>