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
    <title>Document</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js'></script>
    <noscript>JavaScript is needed to run the program</noscript>
</head>
<body>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.8.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.8.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
    <?php
     $adminuser='admin';
     $adminpwd='admin';
     session_start();
     if(isset($_SESSION['username'])){
       echo "<script>document.addEventListener('DOMContentLoaded',()=> {document.querySelector('.loginstatus .loginstatusblock').innerHTML='Hello {$_SESSION['username']}!<br><a href=logout.php>Logout</a>';});</script>";
     } else{
           echo "<script>location.href='faq.html';</script>";
     
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
                    
                 </ul>
             </div>
             <a href="cart.php" class="cart-icon"><i class='bx bx-shopping-bag'><span class='cartqty'>0</span></i></a>
             <div class='sidemenu'><i class='bx bx-menu'></i></div>
         </div>
        </nav>
        <div class='aboutus'>
            <h2>Frequently Asked Questions</h2>
            <button class='accordion'>Can you help me locate nearest Vidwan office?</button>
            <div class='panel'>
                <p>Check out the <a href='contact.html'>Contact Us</a> page for finding the nearest Vidwan office</p>
            </div>
            <button class='accordion'>How do I contact Vidwan?</button>
            <div class='panel'>
                <p>Click on the <a href='contact.html'>Contact Us</a> for contact details. Our Repreentation will reach to you within short period of time. </p>
            </div>
            <button class='accordion'>How can i pay for my order?</button>
            <div class='panel'>
                <p>Different modes of payements are available as option at the time of purchase of our Product.<br>
                We accept payment by cash and all major credit and debit cards: Visa, Visa Electron, MasterCard and American Express.<br>
                We also accept gift vouchers at the payment process.<br> </p>
            </div>
            <button class='accordion'>What is your Return Policy?</button>
            <div class='panel'>
                We will accept exchange or refund on products within a period of 14 days from the date of placing of order. Products which are to be returned,<br>
                must be unused and in their Original Condition.<br>
                Items that can be exchanged or returned include:<br>
                <ul>
                    <li>-T-Shirts</li>
                    <li>-Shirts</li>
                    <li>-Jeans</li>
                    <li>-Pants</li>
                    <li>-Waist Coat</li>
                    <li>-Skirts</li>
                    <li>-Dressing Gown</li>
                    <li>-Other Accessories</li>
                </ul>            
            </div>
            <button class='accordion'>How do i sign up/login to the Vidwan Account?</button>
            <div class='panel'>
                <p>You can register by clicking on Register Page in order to create an account.<br>
                If you have already registered for the account. You can Login by clicking the Login Page </p>
            </div>

        </div>
        <script src='index3.js'></script>
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
})

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
} 
</script>