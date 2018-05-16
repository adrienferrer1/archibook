<?php
//On démarre la session
session_start();
$_SESSION['isLoggedIn']=false;

include 'Modele/login_check.php';
 
//On se connecte à MySQL

//On inclut le logo du site et le menu

if (isLoggedIn()==true) {
	include 'Vue/accueil.php';
}
else{
	include 'Vue/login_form.php';
}


 
//On inclut le pied de page
//include 'vues/pied.php';
 
//On ferme la connexion à MySQL

            