<?php 
    include("database.php");
    $login = $_POST['login'];
    $password = $_POST['password'];
    $checkins2 = "SELECT * FROM admins WHERE username = '$login'";
    $checkquery2 = mysqli_query($connect, $checkins2);
    $isexist = mysqli_num_rows($checkquery2);
    if($isexist == 0){
        echo 1;
    }
    else{
        $log = mysqli_fetch_array($checkquery2);
        if($password == $log['password']){
            session_start();
            $_SESSION['auth'] = $log['username'];
            echo 'true';
        }
        else{
            echo 2;
        }
    }
        
?>