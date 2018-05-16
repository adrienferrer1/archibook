<?php

ini_set('display_errors', 1);
include 'navbar.php';


echo ("<h5>Bienvenue </h5>".$_SESSION['name']." !");

?>
	<div class="container">
		<h4>Liste de mes amis : </h4>	
	      <table class="striped">
	        <thead>
	          <tr>
	              <th>Name</th>
	              <th>Item Name</th>
	              <th>Item Price</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>Alvin</td>
	            <td>Eclair</td>
	            <td>$0.87</td>
	          </tr>
	          <tr>
	            <td>Alan</td>
	            <td>Jellybean</td>
	            <td>$3.76</td>
	          </tr>
	          <tr>
	            <td>Jonathan</td>
	            <td>Lollipop</td>
	            <td>$7.00</td>
	          </tr>
	        </tbody>
	      </table>
	    </div>