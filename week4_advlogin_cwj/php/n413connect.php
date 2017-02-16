<?php
////////////////////// mysql method ///////////////////////
//
//	$dbhost = 'localhost';
//	$dbuser = 'clwjones';
//	$dbpwd  = 'clwjones';
//	$dbname = 'clwjones_db';
//
//	$conn = mysql_connect($dbhost, $dbuser, $dbpwd);
//	$db   = mysql_select_db($dbname, $conn);
//
//////////////////////////////////////////////////////////

////////////////////// mysqli method /////////////////////

	$dbhost = 'localhost';
	$dbuser = 'clwjones';
	$dbpwd  = 'clwjones';
	$dbname = 'clwjones_db';
	
	$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

	if (!$link) {
		die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}
?>