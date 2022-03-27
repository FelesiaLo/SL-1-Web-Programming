<?php
    session_start();

    if(isset($_POST['Login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(($username == isset($_SESSION['usernameSession'])) && 
            ($password == isset($_SESSION['passwordSession']))){
            header("location:home.php");
        }else{
            echo "Maaf Anda gagal login, pastikan username dan password sesuai</br>";
            echo "<a href='login.php'>Login</a></br>";
            echo "<a href='register.php'>Register</a></br>";
        }
    }
?>