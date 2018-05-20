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
		<div class="col s4">
			<?php include "../Modele/my_comments.php"; ?>
		</div>
	</div>