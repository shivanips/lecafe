<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "debian-sys-maint";
	$dbpass = "5hKR2pnjQ7O5RxF9";
	$dbname = "online";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
	if($conn){
		echo "Datbase Connected";
	}
	else
	{
		echo "Error DB ";
	}
	return $conn;
}
?>