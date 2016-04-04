<?php
session_start();
require_once '../Log.php';
require_once '../Auth.php';
require_once '../User.php';


Auth::logout();

?>






<!DOCTYPE html>
<html lang="en">
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'> 
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/joblister.css">
<head>
	<meta charset="UTF-8">
	<title>Log Out</title>
	<style>
		#block1{
			background-color: #199AEE;
			height:20em;
			left:24em;
			z-index: 1;
		}

		#block2 {
			height: 20em;
    		left: 23em;
    		top: 20em;
    		z-index: 2;
    		background-color: #08486E;
		}

		#block3 {
    		height: 20em;
    		left: 23em;
    		top: 20em;
		    z-index: 2;
		    background-color: #07ABF3;
		}
		#block4 {
			height: 20em;
    		left: -7em;
    		top: 0em;
    		z-index: 2;
    		background-color: #115FA1;
		}

		#block5 {
			height: 20em;
    		right: 7em;
    		z-index: 2;
    		background-color: #199AEE;
		}

		.logout-txt{
			    position: relative;
    			text-align: center;
    			right: 8em;
    			top: 1em;
    			z-index: 0;
		}
		.hal {
			
    		top: -250px;
			
		}

		#bye {
			position: relative;
    		top: -7em;
    		left: 10px;
    		z-index: 0;
		}
		
		@media (max-width: 400px) {
			#block1{
			background-color: #199AEE;
			height:20em;
			left:24em;
			z-index: 1;
		}

		#block2 {
			height: 20em;
    		left: 23em;
    		top: 20em;
    		z-index: 2;
    		background-color: #08486E;
		}

		#block3 {
    		height: 20em;
    		left: 23em;
    		top: 20em;
		    z-index: 2;
		    background-color: #07ABF3;
		}

		#block4 {
			height: 20em;
    		left: -7em;
    		top: 0em;
    		z-index: 2;
    		background-color: #115FA1;
		}

		.logout-txt{
			position: relative;
    		text-align: center;
    		right: 8em;
    		top: 1em;
    		z-index: 0;
		}
		.hal {
			
    		top: -250px;
			
		}

		#bye {
			position: relative;
    		top: -7em;
    		left: 10px;
    		z-index: 0;
		}

		#block5 {
			height: 20em;
    		right: 7em;
    		z-index: 2;
    		background-color: #199AEE;
		}


		}
		


	</style>
</head>
<body>
	<div id="block1" class="col-sm-2 blue-block">
	</div>

	<div id="block2" class="col-sm-2 blue-block2">
	</div>

	<div id="block3" class="col-sm-2 blue-block3">
	</div>

	<div id="block4" class="col-sm-2 blue-block4">
	</div>

	<div id="block5" class="col-sm-2 blue-block5">
	</div>




	
	
    <img class="hal" src="/img/hal.gif" alt="HAL 9000">
      
	<h1 id="bye" class='logout-txt'>Farewell..</h1>



<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
"use strict";

	var exitLogout =setInterval(function newDoc() {
   window.location.assign("index.php")
}, 2000);


$("#block1").animate({
    left: "=250px",
    bottom:  "=100px"
}, 500);





	
	   
	

	


</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>