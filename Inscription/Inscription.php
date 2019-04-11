<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title> S'inscrire | Batuta.fr </title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<div class="wrapper">
			<div class="logo">
				<img src="logo.jpg" alt="" />
			</div>
			<ul class="nav-area">
				<li><a href="..\Accueil\Accueil.html"> ACCUEIL </a></li>
				<li><a href="..\À propos de nous\Aproposdenous.html"> À PROPOS DE NOUS </a></li>
				<li><a href="..\Catalogue\Catalogue.html"> GALERIE </a></li>
				<li><a href="..\Contact\Contact.html"> CONTACTS </a></li>
				<li><a href="..\Connexion\Connexion.html"> CONNEXION </a></li>
				<li><a href="Inscription.html"> S'INSCRIRE </a></li>
			</ul>
		</div>
	</header>
	<div class="inscription">
		<h2> <b> INSCRIPTION </b> </h2>
		<h3> <b> Veuillez renseigner les champs ci-dessous pour rejoindre l'équipe Batuta : </b> </h3>
		<form action="creation-user.php" method="POST">
			<p> Nom d'utilisateur : </p>
			<input name="username" type="text" placeholder="Entrez votre nom d'utilisateur" required>
			<p> Nom : </p>
			<input name="lastname" type="text" placeholder="Entrez votre nom de famille" required>
			<p> Prénom : </p>
			<input name="firstname" type="text" placeholder="Entrez votre prénom" required>
			<p> E-mail : </p>
			<input name="email" type="email" placeholder="Entrez votre adresse e-mail" required>
			<p> Mot de passe : </p>
			<input name="passwd" type="password" placeholder="Entrez votre mot de passe" required>
			<p> Confirmez votre mot de passe : </p>
			<input name="passwd-conf" type="password" placeholder="Entrez à nouveau votre mot de passe" required>
			<p> Date de naissance : </p>
			<input name="birthday" id="Date-de-naissance" type="date" min="1920-01-01" max="2019-01-01" required/>
			<div> </div>
			<p> Vous êtes : </p>
			<select name="gender" id="Sexe" required>
				<option disabled selected value>Sexe</option>
				<option value="Un homme"> <b> Un homme </b> </option>
				<option value="Une femme"> <b> Une femme </b> </option>
			</select>
			<p><input name="newsletter" type="checkbox"> J'accepte de recevoir les nouvelles offres de Batuta par e-mail </p>
			<input name="" type="submit" value="Créer un compte">
			<div class="sign-up">
				<a href="..\Accueil\Accueil.html"
					style="margin-right:0px; font-size:15px; font-family: Tahoma, Geneva, sans-serif;"> Retour à la page d'accueil
				</a>
			</div>
		</form>
	</div>
    


</body>

</html>

<?php

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

	$result =  $mysqli->query ($sql)

	header('Location: Bienvenue.html');
		
	$mysqli->close();  

?>