<?php

//echo '<h4> Merci '.$_POST['login1'].' de vous être connecté';
include 'fonctions_bdd.php';
include 'fonctions_str_control.php';

session_start();

$mail = $_POST['mail'];
$pw = $_POST['password'];

print_r(get_user_data($mail));

$user_data = get_user_data($mail);
$_SESSION['name'] = $user_data[0];
$_SESSION['lastname'] = $user_data[1];
$_SESSION['job'] = $user_data[2];
$_SESSION['mail'] = $user_data[3];
$_SESSION['birthdate'] = $user_data[4];
$_SESSION['role'] = $user_data[5];
$_SESSION['school'] = $user_data[6];




$_SESSION['mail'] = $mail;

ini_set('display_errors', 1);
if (check_user($mail,$pw)==true){
	$_SESSION['isLoggedIn'] = true;
	header('Location: ../Vue/accueil.php');
	exit;
}
else{
	header('Location: ../Vue/login_error.php');
	//header('Location : http://localhost/archibook1/Vue/login_error.php');
	exit;
} 


//add_user('test','test','test','test@test.com','testtest','2012-12-12','tester');










