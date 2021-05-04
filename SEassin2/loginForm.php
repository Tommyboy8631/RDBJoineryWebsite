<?php

// i know this isnt very safe but didnt make a login so didnt have hashed passwords
include_once "dataBase.php";

if(isset($_POST['login-submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $task = "SELECT * FROM loginsystem WHERE username='$username' AND password='$password';";

    if(empty($username) || empty($password)){
        header("Location: ./login.php?error=missingitem");
        exit(); 
    }else{
        $results = mysqli_query($conn, $task);
        $resultsCheck = mysqli_num_rows($results);
        if(!$resultsCheck == 0){
            //success (i know this is safe but tried to do it the better way and kept failing ran out of time
            header("Location: ./private.php?name=".$username);
            exit();
        }else{
            //failed
            header("Location: ./login.php?error=wrong_password_or_username");
            exit();
        }
    }



    header("Location: ./index.php?error=too_the_end");
    exit();
}else{
    header("Location: ./index.php?error=naughty");
    exit();
}