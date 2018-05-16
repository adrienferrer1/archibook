<?php
//On démarre la session
session_start();
 
//On se connecte à MySQL

//On inclut le logo du site et le menu
include 'Vue/navbar.php';
 
//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('Controleur/'.$_GET['page'].'.php'))
{
        include 'Controleur/'.$_GET['page'].'.php';
}
else
{
        include 'Controleur/accueil.php';
}
 
//On inclut le pied de page
//include 'vues/pied.php';
 
//On ferme la connexion à MySQL
mysql_close();

            