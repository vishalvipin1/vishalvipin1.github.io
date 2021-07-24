<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    $database='vidwan';
    $hostname='localhost';
    $password=md5($_POST["password"]);
    $username=$_POST["username"];
    $sqladminuser='root';
    $sqladminpwd='';
    $conn=mysqli_connect($hostname,$sqladminuser,$sqladminpwd,$database);
    if(!$conn){
        die('Could not connect to server!'.mysqli_error());
    }
    $query1="SELECT * FROM accounts WHERE username='$username'";
    $queryExec=mysqli_query($conn,$query1);
    $result=mysqli_fetch_array($queryExec);
    $count=mysqli_num_rows($queryExec);
    if($count===1){
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['email']=$result['email'];
        $_SESSION['firstname']=$result['firstname'];
        echo "<script>alert('Login Successful!'); location.href='index.php';</script>";

    } else {
        echo "<script>alert('Incorrect username or password');</script>";
        echo "<script>location.href='loginpage.html';</script>";
    }
}
?>