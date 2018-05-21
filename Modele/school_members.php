<?php
include '../Controleur/fonctions_bdd.php';
session_start();


$users = get_school_users($_SESSION['school']);



echo "
	<h6>Liste des membres de mon école : </h6>
		<table class='striped card blue lighten-3'>
		<thead>
			<tr>
				<td><p style='Font-Weight: Bold;'>Nom</p></td>
				<td><p style='Font-Weight: Bold;'>Prénom</p></td>
				<td><p style='Font-Weight: Bold;'>Date de naissance</p></td>
				<td><p style='Font-Weight: Bold;'>Image de profil</p></td>
			</tr>	
		</thead>	
		<tbody>
";
for ($i=0; $i < sizeof($users); $i++) { 
	echo "
		<tr>
			<td>".$users[$i][0]."</td>
			<td>".$users[$i][1]."</td>
			<td>".$users[$i][2]."</td>
			<td><img style='width:40x;height:40px;' src='https://cdn1.iconfinder.com/data/icons/rcons-user-action/512/user-512.png'></td>
		</tr>
		";
}
echo "
		</tbody>
	</table>
";
?>