<?php

session_start();

require 'fonctions_bdd.php';

$_SESSION['mail'] = $_POST['mail'];

$mail = $_SESSION['mail'];


if (is_subbed($_SESSION['mail']) == '') {
	header('Location: ../Vue/sub_error.php');
}
else if (is_subbed($_SESSION['mail']) != '' && has_password($mail)==true){
	header('Location: ../Vue/already_subbed.php');
}
else{
	header('Location: ../Vue/enter_pw.php');
}

?>