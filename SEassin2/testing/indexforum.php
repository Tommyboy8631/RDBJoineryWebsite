<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP and MYSQL</title>
</head>

<body>
<h2>My First Forum</h2>

<?php
   require('connect.php');


if (mysqli_connect_errno())
	{echo "Database Not Connected: " . mysqli_connect_error();}


    $sql = "SELECT * FROM forum";
    
    $result = $conn->query($sql);

    if (!$result)
    {
        die("Could not get data ".mysqli_error($conn));
    }

    while ($row = $result->fetch_assoc())
    { echo $row['user'].',  '.$row['date'].'</br>';
    echo  $row['message'].'</br>';
    echo '-------------------------------'.'</br>';
    
    }

    $conn->close();
?>

<form method="get" action="forum.php">
<p>User:
    <label for="user"></label>
    <input type="text" name="user" id="user" />
    <br />
</p>
<p>Message:
    <label for="message"></label>
    <textarea name="message" id="message" cols="45" rows="5"></textarea>
</p>
<p>
    <input type="submit" name="submit" id="submit" value="Post message" />
    <br />
</p>
</form>

</body>
</html>



