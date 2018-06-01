<?php

include 'fonctions_bdd.php';
session_start();

$mail = $_SESSION['mail'];
$password = $_POST['password3'];

$password = secure_string($password);

echo($mail);

insert_password($mail,$password);

header('Location: ../Vue/login_form.php');

?>