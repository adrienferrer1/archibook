<?php

include 'navbar.php';

?>
	<div class="row container">
		<div class="container col xl4 l4 m6">
			<?php include "../Modele/received_requests.php"; ?>		
		</div>
		<div class="container col xl8 l8 m6">
			<?php include '../Modele/comment_form.php'; ?>
		</div>
	</div>
	<div class="row container">
		<div class="container col xl12 l12 m12">
			<?php include "../Modele/comments.php"; ?>
		</div>
	</div>