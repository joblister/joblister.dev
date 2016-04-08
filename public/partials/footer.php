

<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job Lister</title>
	<!-- order matters, my own stylesheet must go unederneath -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'> 
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/joblister.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


	<!---external personalized stylesheet-->
	<style type="text/css">

  		* {
  			margin: 0;
		}

		#richards-row, #dons-row{
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		html, body {
  			height: 100%;
		}

		.page-wrap {
  			min-height: 100%;
		  /* equal to footer height */
  			margin-bottom: -142px; 
		}

		.page-wrap:after {
		  content: "";
		  display: block;
		}

		.site-footer, .page-wrap:after {
		  height: 142px; 
		  margin-bottom: 0px;
		}

		.footer-txt {
			text-align: center;
			color:#EDEDE1;
			margin-top: 0px ;
		}

		 h2.footer-txt {
			margin-bottom: 0px ;
			padding-top: 1%;
		}

		.navbar-fixed-bottom {
			padding-bottom: 1%;
			position: absolute ;
		}

		.twitter-icon {
			color:#EDEDE1;
			margin-right: 10px;
		}

		.facebook-icon {
			color:#EDEDE1;
			margin-right: 10px;
		}

		.linked-icon {
			color:#EDEDE1;
			margin-right: 10px;
		}

		.mail-icon {
			color:#EDEDE1;
			margin-right: 10px;
		}

		#footer-icons1 {
			margin-left:36%;

		}

		#footer-icons2 {
			margin-left:37%;
		}

		.twitter-icon:hover {
			color:#849189;
			margin-right: 10px;
		}

		.facebook-icon:hover {
			color:#849189;
			margin-right: 10px;
		}

		.linked-icon:hover {
			color:#849189;
			margin-right: 10px;
		}

		.mail-icon:hover {
			color:#849189;
			margin-right: 10px;
		}

		@media (max-width: 400px) {
			
			* {
	  			margin: 0;
			}
			html, body {
	  			height: 100%;
			}

			.page-wrap {
	  			min-height: 100%;
			  /* equal to footer height */
	  			margin-bottom: -142px; 
			}

			.page-wrap:after {
			  content: "";
			  display: block;
			}

			.site-footer, .page-wrap:after {
			  height: 200px; 
			  margin-bottom: 0px;
			  padding-bottom: 50px;
			}

			.footer-txt {
				text-align: center;
				color:#EDEDE1;
				margin-top: 0px ;
			}

			 h2.footer-txt {
				margin-bottom: 0px ;
				padding-top: 1%;
			}

			.navbar-fixed-bottom {
				padding-bottom: 1%;
				position: absolute ;
			}

			.twitter-icon {
				color:#EDEDE1;
				margin-right: 10px;
			}

			.facebook-icon {
				color:#EDEDE1;
				margin-right: 10px;
			}

			.linked-icon {
				color:#EDEDE1;
				margin-right: 10px;
			}

			.mail-icon {
				color:#EDEDE1;
				margin-right: 10px;
			}

			#footer-icons1 {
				margin-left:36%;

			}

			#footer-icons2 {
				margin-left:37%;
			}

			.twitter-icon:hover {
				color:#849189;
				margin-right: 10px;
			}

			.facebook-icon:hover {
				color:#849189;
				margin-right: 10px;
			}

			.linked-icon:hover {
				color:#849189;
				margin-right: 10px;
			}

			.mail-icon:hover {
				color:#849189;
				margin-right: 10px;
			}
   
		}

		@media (max-width: 1000px) {

			* {
	  			margin: 0;
			}

			html, body {
	  			height: 100%;
			}

			.page-wrap {
	  			min-height: 100%;
			  /* equal to footer height */
	  			margin-bottom: -142px; 
			}

			.page-wrap:after {
			  content: "";
			  display: block;
			}

			.site-footer, .page-wrap:after {
			  height: 200px; 
			  margin-bottom: 0px;
			  padding-bottom: 50px;
			}

			.footer-txt {
				text-align: center;
				color:#EDEDE1;
				margin-top: 0px !important;
			}

			 h2.footer-txt {
				margin-bottom: 0px !important;
				padding-top: 1%;
			}

			.navbar-fixed-bottom {
				padding-bottom: 1%;
				position: absolute !important;
			}

			.twitter-icon {
				color:#EDEDE1;
				margin-right: 10px;
			}

			.facebook-icon {
				color:#EDEDE1;
				margin-right: 10px;
			}

			.linked-icon {
				color:#EDEDE1;
				margin-right: 10px;
			}

			.mail-icon {
				color:#EDEDE1;
				margin-right: 10px;
			}

			#footer-icons1 {
				margin-left:36%;

			}

			#footer-icons2 {
				margin-left:37%;
			}

			.twitter-icon:hover {
				color:#849189;
				margin-right: 10px;
			}

			.facebook-icon:hover {
				color:#849189;
				margin-right: 10px;
			}

			.linked-icon:hover {
				color:#849189;
				margin-right: 10px;
			}

			.mail-icon:hover {
				color:#849189;
				margin-right: 10px;
			}
   
		}

		#footer-icons1,#footer-icons2{
			margin: 0 auto;
			
		}

   </style>  

<nav class="navbar navbar-default site-footer">
  <div class="container">
  	<h2 class='footer-txt'>Created By</h2>
  	<div class="row">
  		<div class="col-md-6" id="richards-row">
			<h3 class='footer-txt'>Richard De Los Santos</h3>
		<div id='footer-icons1'>
			<a href="https:/twitter.com/lowliferichard"><i  class="fa fa-twitter fa-2x twitter-icon" target="_blank"></i></a>
			<a href=""><i class="fa fa-facebook-official fa-2x facebook-icon"></i></a>
			<a href=""><i class="fa fa-linkedin-square fa-2x linked-icon"></i></a>
			<a href=""><i class="fa fa fa-envelope-o fa-2x mail-icon"></i></a>
		</div>
  		</div>
  		<div class="col-md-6" id="dons-row">
			<h3 class='footer-txt'>Don Moore</h3>
		<div id='footer-icons2'>
			<a href=""><i class="fa fa-twitter fa-2x twitter-icon"></i></a>
			<a href=""><i class="fa fa-facebook-official fa-2x facebook-icon"></i></a>
			<a href=""><i class="fa fa-linkedin-square fa-2x linked-icon"></i></a>
			<a href=""><i class="fa fa fa-envelope-o fa-2x mail-icon"></i></a>
		</div>
  		</div>
  	</div>
  </div> <!-- end container -->
</nav>
</div class="page-wrap">

