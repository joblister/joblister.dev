<?php 

session_start();
if(isset($_SESSION['logged_in_user'])){
  var_dump($_SESSION['logged_in_user']);
}
var_dump('test');
var_dump($_SESSION['logged_in_user']);

?>
