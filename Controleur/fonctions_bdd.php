<?php

function add_full_user($name,$lastname,$job,$mail,$password,$birthdate,$role){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO users VALUES(:id, :name, :lastname, :job, :mail, :password, :birthdate, :role)');
	$req->execute(array(
	'id' => null,	
	'name' => $name,
	'lastname' => $lastname,
	'job' => $job,
	'mail' => $mail,
	'password' => $password,
	'birthdate' => $birthdate,
	'role' => $role,
	));
}


function get_bdd(){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$reponse = $bdd->query("SELECT * FROM school_list");
	$donnees = $reponse->fetch();
	$donnees = [$donnees[0],$donnees[1]];
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
	if ($response[0] == $password){
		return true;
	}
	else{
		return false;
	}



}

//POUR L'INSTANT, CETTE FONCTION FAIT LA MEME CHOSE QUE LA PRECEDENTE
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