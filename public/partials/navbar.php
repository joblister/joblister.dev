
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    	  <form method="POST">
    	  <div class="sign-in">
    	  	<h2 class="sign-txt">Log In</h2>
	        <label for "username"></label>
	        <input  id="username" type="text" placeholder="Enter your username" name="user_name"><br>
	        <label for "password"></label>
	        <input id="password" type="password" placeholder="Enter your password" name="password"><br>
	        <button  id="sign-in-btn" type="button" class="btn btn-default">sign in</button>
	      </div>
	      <p id='no-member'>Not a member?</p>
	      <p class='sign-up-link'><a href="users.create.php">Sign Up!</a></p>
	    </form>
    </div>
  </div>
</div>

<nav class="navbar navbar-default">
	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
			<li><a href="index.php" id=''>Home</a></li>
			<li><a href=""  id='' >Account</a></li>
			<li><a href=""  id='' >Create</a></li>
			<li><a href=""  id='' >Logout</a></li>
			<li><a  data-toggle="modal" data-target=".bs-example-modal-sm">Sign In/Sign Up</a></li>
		  </ul>	     
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
</nav>
