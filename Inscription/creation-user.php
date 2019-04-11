<?php

$dbhost = 'localhost';
$dbuser = 'admin';
$dbpass = 'admin';
$dbname = 'batuta';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);

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

echo $sql;

$db->query($sql);

header('Location: Bienvenue.html');


?>