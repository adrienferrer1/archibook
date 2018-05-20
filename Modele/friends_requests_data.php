<?php
include '../Controleur/fonctions_bdd.php';

print_r(friends_requests($_POST['id_user1'],$_POST['id_user2']));

?>