<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link ref='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Purchase Completed</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <noscript>JavaScript is needed to run the program</noscript>
</head>
<body>
<?php
  $database='vidwan';
  $hostname='localhost';
  $sqladminuser='root';
  $sqladminpwd='';
  $newData='';
  error_reporting(E_ALL ^ E_WARNING); 
  session_start();
  if(isset($_SESSION['username'])){
    echo "<script>document.addEventListener('DOMContentLoaded',()=> {document.querySelector('.loginstatus .loginstatusblock').innerHTML='Hello {$_SESSION['username']}!<br><a href=logout.php>Logout</a>';});</script>";
  }
  $customername=$_POST['name'];
  $nickname=$_POST['nickname'];
  $email=$_POST['email'];
  $productNumber=$_POST['numofprod'];
  $dateofpurchase=$_POST['dateofpurchase'];
  $conn=mysqli_connect($hostname,$sqladminuser,$sqladminpwd,$database);
  if(!$conn){
      die('Could not connect to server');
  }
  $sql="INSERT INTO `transactions` (`name`, `nickname`, `purchaseDate`, `email`, `numofproducts`) VALUES ('$customername', '$nickname', '$dateofpurchase', '$email', '$productNumber')";
  $result=mysqli_query($conn,$sql);
  if($result){
      
      echo "<script>console.log('Purchase Successful');</script>";
      
  } else{
      echo "<script>console.log('Failed to insert data into database')</script>";
  }
  
   
?>

    <header id='home' class='header'>
        <nav class="nav">
         <div class="navigation container">
             <div class='logo'>
                 <h1><a href='index.php'>Vidwan</a></h1>
             </div>
             <div class="menu">
                 <div class="top-nav">
                     <div class="logo">
                         <h1><a href='index.php'>Vidwan</a></h1>
                     </div>
                     <div class="close">
                         <i class='bx bx-x' ></i>
                     </div>
                 </div>
                 <ul class='nav-list'>
                     <li class='nav-item'>
                         <a href="index.php" class="nav-link">Home</a>
                     </li>
                     <li class='nav-item'>
                         <a href="product.php" class="nav-link">Product</a>
                     </li>
                     <li class='nav-item'>
                         <a href="about.php" class="nav-link">About</a>
                     </li>
                     <li class='nav-item'>
                         <a href="contact.php" class="nav-link">Contact</a>
                     </li>
                     <li class='nav-item'>
                         <a href="account.php" class="nav-link">Account</a>
                     </li>
                     <li class='nav-item'>
                        <a href="cart.php" class="nav-link icon"><i class='bx bx-shopping-bag'><span class='cartqty'>0</span></i>
                        </a>
                     </li>
                     <li class='loginstatus'>
                        <div class='loginstatusblock'>Hello User</div>
                    </li>
                    
                 </ul>
             </div>
             <a href="cart.php" class="cart-icon"><i class='bx bx-shopping-bag'><span class='cartqty'>0</span></i></a>
             <div class='sidemenu'><i class='bx bx-menu'></i></div>
         </div>
        </nav>
        <script src='index3.js'></script>
        <div class='orderCancel' style='padding:50px; margin-top:50px;'>
        <h1>Your Order was successful, You will receive the notification shortly.....</h1>
        <h3>Shop more at Vidwan!</h3>
        <h3>Please contact us if you have any questions?</h3>
        <h3><u>Email us</u>: helpdesk@something.com, helpdesk2@something.com</h3>
        <h3><u>Call us</u>: +91-123-456-7890</h3>
        <h3>Visit our Main Page for more offers and wide range of products</h3>
        <h3>Thank you for shopping with us!</h3>
        <h3>Click <a href="index.php">here</a> to go back to our Home Page<h3>
        </div>
        </header>
        <footer class="footer">
            <footer class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Company</h4>
                        <ul>
                            <li><a href='about.php'>About Us</a></li>
                            <li><a href='register.html'>My Account</a></li>
                            <li><a href='contact.php'>Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Get Help</h4>
                        <ul>
                            <li><a href='faq.php'>FAQ</a></li>
                            <li><a href='exchangeandreturn.php'>Exchange and Returns</a></li>
                            <li><a href='delivery.php'>Delivery Information</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href='https://www.instagram.com/vishalvipin1/'><i class='fab fa-instagram'></i></a>
                            <a href='https://www.pinterest.com/vishalvipin123/'><i class='fab fa-pinterest'></i></a>
                            <a href='#'><i class='fab fa-facebook-f'></i></a>
                            <a href='https://twitter.com/vishaalvipin'><i class='fab fa-twitter'></i></a>
                            <a href='https://www.linkedin.com/in/vishaalvipin/'><i class='fab fa-linkedin-in'></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </footer>
</body>
</html>
<script>
    //Navigation menu on other devices(resposive)
const menu=document.querySelector('.menu');
const navOpen=document.querySelector('.sidemenu');
const navClose=document.querySelector('.close');
const navBar=document.querySelector('.nav'); 
const navLeft=menu.getBoundingClientRect().left;

navOpen.addEventListener('click', () => {
    if (navLeft < 0) {
        menu.classList.add('show');
        document.body.classList.add('show');
        navBar.classList.add('show');
    }
});
navClose.addEventListener('click', () => {
    if (navLeft < 0) {
        menu.classList.remove('show');
        document.body.classList.remove('show');
        navBar.classList.remove('show');
    }
});

//Fix navigation
const navHeight=navBar.getBoundingClientRect().height;

window.addEventListener('scroll',()=> {
    const scrollHeight=window.pageYOffset;
    if (scrollHeight>navHeight) {
        navBar.classList.add('fix-nav');
    }
    else {
        navBar.classList.remove('fix-nav');
    }
});


</script>