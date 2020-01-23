<?php

    $username = $_POST['user'];
        
    $password = $_POST['pass'];

    $con = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"login");
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$username);



    $result = mysqli_query($con,"select * from username = '$username' and password = '$password' " )
        or exit(header("Location:../index.php"));
    $row = mysqli_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password ){
        echo "Congratsss,you have logged in".$row['username'];
        
    }else{
        echo "Yout username or password are incorrect";
    }





?>
