<?php


// NTS i dont really know why this is not connecting .... come back too
$dbName = "localhost";
$dbUserName = "thomas.swiers";
$dbPassword = "SJ9SLHH5";
$dbFile = "thomasswiers";

$conn = mysqli_connect($dbName, $dbUserName, $dbPassword, $dbFile);

if (mysqli_connect_error())
	{echo "Database Not Connected: " . mysqli_connect_error();}
?>
