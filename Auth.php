<?php


require_once '../Input.php';
require_once '../User.php';


class Auth{

	//corect login
	

	public static function attempt($username,$password) {
		$user = User::findByUserName($username)
		if ($user == null) {
			return false;
		}
		$validPassword = password_verify($password,$user->password);
		if ($validPassword == true) {
			$_SESSION['logged_in_user'] = $user;
		}
		return ($validPassword);
		
		

		

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