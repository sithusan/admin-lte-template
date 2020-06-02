<?php
    include('connect.php');
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from user where username='$username' and password ='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) === 1){
        $_SESSION['username'] = $username;
        header("Location:index.php");
    }else{
        $_SESSION['error'] = 'User Invalid/Username and password does not match';
        header("location:login.php");
    }

?>