<?php
 
if(isset($_POST['git-submit'])){


    include_once 'dataBase.php';


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];

    $datetimeValue = date("Y-m-d h:i:sa");

    $task2 = "INSERT INTO contactus (name, email, phone) VALUES ('$name', '$email', '$phone');";

    if(empty($name) || empty($email) || empty($phone)){
        header("Location: contactUs.php?error=missinginfo");
        exit();

    }else{
        mysqli_query($conn, $task2);

        header("Location: contactUs.php?name=".$name);
        exit();
    }
}else{
    header("Location: ./index.php?error=naughty");
    exit();
}
