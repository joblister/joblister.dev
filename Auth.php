<?php


require_once '../Input.php';
require_once '../User.php';

if(session_status() !=PHP_SESSION_ACTIVE){

	session_start();
}

class Auth{

	//corect login
	

	public static function attempt($attemptedUsername, $attemptedPassword) {
		$user = User::findByUserName($attemptedUsername);
		if ($user == null) {
			return false;
		}
		
		$validPassword = password_verify($attemptedPassword,$user->password);
		if ($validPassword == true) {
			$_SESSION['logged_in_user'] = $user;

		}

		return false;
		

	}
		
	public static function check(){
			
		return isset($_SESSION['logged_in_user']);

	} 
                               

	public static function user() {

		return $_SESSION['logged_in_user'];
		
	}

	public static function logout() {

		// clear $_SESSION array
    	session_unset();

    	// delete session data on the server and send the client a new cookie
    	session_regenerate_id(true);

	}



}





?>