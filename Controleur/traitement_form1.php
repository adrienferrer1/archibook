<?php
session_start();
$_SESSION['mail'] = $_POST['mail'];

include 'fonctions_bdd.php';

if (is_subbed($_SESSION['mail']) == '') {
	header('Location: ../Vue/sub_error.php');
}
else{
	header('Location: ../Vue/enter_pw.php');
}

?>