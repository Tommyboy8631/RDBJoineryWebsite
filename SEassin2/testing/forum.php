<?php 
session_start(); 
require ('connect.php');
// Establish a connection

/* note $conn variable comes from the connect.php file */

if (isset($_GET['message']))
{$user=$conn->real_escape_string($_GET['user']);
 $message=$conn->real_escape_string($_GET['message']);
 $date=date('Y-m-d H:i:s');
}

$sql="INSERT INTO forum(user, message, date) VALUES('$user','$message','$date')";
$conn->query($sql);
echo "Forum message added";

mysqli_close($conn);				//close connection to database
?>
