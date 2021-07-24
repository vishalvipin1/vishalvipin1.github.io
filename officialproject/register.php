<?php
if (isset($_POST['submit'])){
    $database='vidwan';
    $hostname='localhost';
    $email=$_POST["email"];
    $name=$_POST["mainname"];
    $password=$_POST["password"];
    $username=$_POST["username"];
    $sqladminuser='root';
    $sqladminpwd='';
    $conn=mysqli_connect($hostname,$sqladminuser,$sqladminpwd,$database);
    if (!$conn){
        die('Could not connect to sql');
    }
    $query1="SELECT * FROM accounts where username='$username'";
    $queryPro=mysqli_query($conn,$query1);
    $user=mysqli_fetch_array($queryPro);
    if($user){
        if($user['username']===$username){
            echo "<script>alert('Username Already Exist');</script>";
            echo "<script>location.href='register.html';</script>";
        }
    } else{
        $query2="INSERT INTO `accounts` (`userid`, `firstname`, `username`, `passwd`, `email`) VALUES (NULL, '$name', '$username', '".md5($password)."', '$email')";
        mysqli_query($conn,$query2);
        echo "<script>alert('Account Added');</script>";
        echo "<script>location.href='loginpage.html';</script>";

    }


}
?>
