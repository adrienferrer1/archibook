<?php

//echo '<h4> Merci '.$_POST['login1'].' de vous être connecté';
include 'LDAPService.php';
include 'fonctions_bdd.php';

$mail = $_POST['mail'];
$pw = $_POST['password'];

$_SESSION['mail'] = $mail;
$_SESSION['login_success']=null;

$ldap_synchro_call = true;

if (check_user($mail,$pw)==true){
	$_SESSION['login_success'] = "";
	header_location('profile.php');
}
else{
	$_SESSION['login_success']="Connexion échouée, veuillez réessayer";
	header_location('index.html');
} 


add_user('test','test','test','test@test.com','testtest','2012-12-12','tester');


/*
function check_user($mail,$pw){
	if ($ldap_synchro_call==true) {
		return true;
	}
	else{
		return false;
	}
}

if (check_user($mail,$pw)==true){
	header_location();
}
else{
	echo "Echec de la connexion";
}

*/








