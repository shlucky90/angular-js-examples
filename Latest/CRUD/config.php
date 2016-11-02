<?php
/*
Site : http:www.smarttutorials.net
Author :muni
*/
//site specific configuration declartion
define( 'BASE_PATH', 'http://localhost/tutorialspoint/AJS/Latest/CRUD/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'tutorials');
define('DB_USERNAME','root');
define('DB_PASSWORD','');


$mysqli  = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
	echo("Failed to connect, the error message is : ". mysqli_connect_error());
	exit();
}