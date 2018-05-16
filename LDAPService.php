<?php

//$mail = $_POST['mail'];
//echo(get_extension($mail));
//echo ('<br>');

//print_r(get_bdd());



function get_extension($mail){
	$test = explode("@",$mail);
	return $test[1];
}

function get_id($mail){
	$test = explode("@",$mail);
	return $test[0];
}


function get_bdd(){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$reponse = $bdd->query("SELECT * FROM school_list");
	$donnees = $reponse->fetch();
	$donnees = [$donnees[0],$donnees[1]];
	return $donnees;
}

// Eléments d'authentification LDAP
$ldaprdn  = 'uname';     // DN ou RDN LDAP
$ldappass = 'password';  // Mot de passe associé


// LDAP variables
$ldaphost = "ldap.forumsys.com";  // votre serveur LDAP
$ldapport = 389;                 // votre port de serveur LDAP

// Connexion LDAP
$ldapconn = ldap_connect($ldaphost, $ldapport)
          or die("Impossible de se connecter au serveur LDAP $ldaphost");

echo "Connexion au serveur LDAP..."."<br>";
echo ($ldapconn);
echo "<br>";


$BIND_DN = "cn=read-only-admin,dc=example,dc=com";
$BIND_PW = "password";

//$test = ldap_bind (ldap_connect($ldaphost, $ldapport), $BIND_DN, $BIND_PW);

//print_r($test);


?>