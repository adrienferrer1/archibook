<?php

function insert_user($name,$lastname,$job,$mail,$password,$birthdate,$role){
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

function get_school_users($school){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$reponse = $bdd->query('SELECT name,lastname,birthdate FROM users WHERE school="'.$school.'"');
	$donnees = $reponse->fetchall();
	//$user = {$donnees[1],$donnees[2],$donnees[5]} 

	return $donnees;
}


function get_bdd(){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$reponse = $bdd->query("SELECT * FROM school_list");
	$donnees = $reponse->fetch();
	$donnees = [$donnees[0],$donnees[1]];
	return $donnees;
}

function friends_request($id_user1, $id_user2){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO friends_requests VALUES(:id_user1, :id_user2)');
	$req->execute(array(
	'id_user1' => $id_user1,	
	'id_user2' => $id_user2,
 	));
}




/*
function friend_confirmation($id_user1,$id_user2){
	$bdd = new PDO('mysql:host=localhost;dbname=ldap_school;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('UPDATE relations SET state="confirmed" WHERE id_user1 ='.$id_user1.' OR id_user1 ='.$id_user2.' AND id_user2 ='.$id_user1.' OR id_user2 ='.$id_user2.' ');
}*/


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