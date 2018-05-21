<?php

include 'navbar.php';

?>
	<div class="row container">
		<div class="col s4">
			<?php include "../Modele/received_requests.php"; ?>		
		</div>
		<div class="col s4">
			<?php include '../Modele/friends_list.php'; ?>
		</div>
		<div class="col s4">
			<?php include "../Modele/friends_requests_list.php"; ?>
		</div>
		<div class="col s12">
			<h6>Modifier mes informations :</h6>
			<form method="post" action="">
				<input type="text" name="name" placeholder="Prénom">
				<input type="text" name="name" placeholder="Nom">

				



			</form>
		</div>



		<div class="col s12">
			<?php //include "../Modele/my_comments.php"; ?>
		</div>
	</div>