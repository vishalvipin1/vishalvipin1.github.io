<?php
session_start();
if(isset($_SESSION['username'])) {
    echo "<script>alert('You are logged out!');</script>";
    session_unset();
    session_destroy();
    echo "<script>location.href='loginpage.html'</script>";
} else{
     echo "<script>location.href='loginpage.html'</script>";
}
?>