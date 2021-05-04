<?php

$conn = mysqli_connect('localhost','root','','software_engineering_assignment_2');

if (mysqli_connect_errno())
	{echo "Database Not Connected: " . mysqli_connect_error();}
?>