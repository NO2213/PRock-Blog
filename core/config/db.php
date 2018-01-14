<?php

#LOCAL
define('PR_DBHOST', 'localhost');
define('PR_DBUSER', 'root');
define('PR_DBPASS', '');
define('PR_DATABASE', 'tutor_blog_core');

function db_connect()
{
	$mysqli = mysqli_connect(PR_DBHOST, PR_DBUSER, PR_DBPASS, PR_DATABASE)  or die("Error " . mysqli_error($mysqli));
	return $mysqli;
}

$mysqli = db_connect();

?>