<?php
session_start();

$mail = $_SESSION['mail'];
$password = $_POST['password3'];

//echo($mail);
//echo($password);

include 'fonctions_bdd.php';

insert_password($mail,$password);

header('Location: ../Vue/login_form.php');

?>