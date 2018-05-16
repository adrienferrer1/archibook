<?php 

include './Modele/router.php';
if (isLoggedIn()!=true){
	echo "Vous n'êtes pas connectés";
}
else{
	echo '
    <div class="row">
    	<h4 class="col s6 offset-s3">Bienvenue sur ArchiBook</h4>
    </div>
    </br>
    </br>
   	<div class="row">
	    <div class="col s6 offset-s3">
	      <div class="card blue-grey darken-1">
	        <div class="card-content white-text">
	    	<div class="row">
	    		<input type="text" name="mail" id="mail" placeholder="E-mail">
	    	</div>
	    	<div class="row">
	    		<input type="password" name="password" id="password" placeholder="Mot de passe">
	    	</div>
	      </div>
	        <div class="card-action">
	    		<input class ="btn" type="submit" name="Valider">
	        </div>
	      </div>
	    </div>
  	</div>
	';
}


?>




