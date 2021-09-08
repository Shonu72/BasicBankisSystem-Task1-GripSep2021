<?php

// Connecting to database 
$servername = "localhost";
$username = "id17554001_bankofspark";
$password = "(mTX9R51_|[Gv/a1";
$database = "id17554001_bankofsparks";

$conn = mysqli_connect($servername, $username, $password, $database);


	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>