<?php

function insert_user($name,$lastname,$job,$mail,$password,$birthdate,$role,$school){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO users VALUES(:id, :name, :lastname, :job, :mail, :password, :birthdate, :role, :school)');
	$req->execute(array(
	'id' => null,	
	'name' => $name,
	'lastname' => $lastname,
	'job' => $job,
	'mail' => $mail,
	'password' => $password,
	'birthdate' => $birthdate,
	'role' => $role,
	'school' => $school,
	));
}
function get_user_data($mail){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$reponse = $bdd->query('SELECT name,lastname,job,mail,birthdate,role,school FROM users WHERE mail="'.$mail.'"');
	$donnees = $reponse->fetch();
	//$user = {$donnees[1],$donnees[2],$donnees[5]} 

	return $donnees;
}
function get_school_users($school){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$reponse = $bdd->query('SELECT name,lastname,birthdate FROM users WHERE school="'.$school.'"');
	$donnees = $reponse->fetchall();
	//$user = {$donnees[1],$donnees[2],$donnees[5]} 

	return $donnees;
}
function add_user($mail,$password){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO users VALUES(:mail, :password)');
	$req->execute(array(
	'id' => null,	
	'mail' => $mail,
	'password' => $password,
	));
}
function check_user($mail,$password){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$donnees = $bdd->query('SELECT password FROM users WHERE mail="'.$mail.'"');
	$response = $donnees->fetch();
	//$donnees = $reponse->fetch();
	if ($response[0] == $password && $password != ''){
		return true;
	}
	else{
		return false;
	}
}
function update_profile($name,$lastname,$job,$birthdate,$role){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO users VALUES(:id, :name, :lastname, :job, :birthdate, :role)');
	$req->execute(array(
	'id' => null,	
	'name' => $name,
	'lastname' => $lastname,
	'job' => $job,
	'birthdate' => $birthdate,
	'role' => $role,
	));
}
?>