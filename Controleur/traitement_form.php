<?php

//echo '<h4> Merci '.$_POST['login1'].' de vous être connecté';
include 'fonctions_bdd.php';
include 'fonctions_str_control.php';

$mail = $_POST['mail'];
$pw = $_POST['password'];

$_SESSION['mail'] = $mail;

ini_set('display_errors', 1);
if (check_user($mail,$pw)==true){
	$_SESSION['isLoggedIn'] = true;
	header('Location : ./test.php');
	//header('Location : http://localhost/archibook1/Vue/accueil.php');
}
else{
	header('Location : ./test.php');
	//header('Location : http://localhost/archibook1/Vue/login_error.php');
} 


//add_user('test','test','test','test@test.com','testtest','2012-12-12','tester');










