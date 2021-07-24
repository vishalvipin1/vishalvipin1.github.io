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
<?php
  $adminuser='admin';
  $adminpwd='admin';
  session_start();
  if(isset($_SESSION['username'])){
    echo "<script>document.addEventListener('DOMContentLoaded',()=> {document.querySelector('.loginstatus .loginstatusblock').innerHTML='Hello {$_SESSION['username']}!<br><a href=logout.php>Logout</a>';});</script>";
  } else{
        echo "<script>location.href='exchangeandreturn.html';</script>";
  
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
    <div class='aboutus'>
        <h2>Exchange and Return</h2>
        <div class='erp'>
        <h4 class='subheading'>Return Process</h4>
        <p>You have 14 days for exchange and return of product<br>
        The product must be returned to the main office as soon as possible in the same condition as supplied in the original packing.<br>
        The product invoice must be carried at the process, products cannot be returned without the invoice due to Safety Reasons.<br>
        Return process can be done online by contacting the Customer Care, and the further process with be informed on the day of returning the product.<br>
        Make sure the Barcode of the product is not damaged, before calling the customer care for Return Process.<br>
        If damaged, please contact the Customer Care through Email for generation of new Barcode.<br>
        Pickup Option is provided if Representative is unable to Reach to you through Phone:<br>
        <ol>
            <li>-Make sure the Address is correct and is eligible for the Pickup Option.</li>
            <li>-Products will be collected if it Satisfies the Above Mentioned Conditions.</li>
            <li>-Money will be Returned within a week from the date of Return of Product.</li>
        </ol>
        </p>
        <h4 class='subheading'>Exchange Process</h4>
        <p>If any products needs to be exchanged due to following reasons:<br>
            <ol>
                <li>-Manufacturing Defect</li>
                <li>-Wrong Product</li>
                <li>-Not convinced with the Product</li>
                <li>-Product Description contain Wrong Information</li>
                <li>-Size Doesnt match Accourding to your Requirements</li>
                <li>-Change in Opinion</li>
            </ol>
            Please contact the Customer Care for Further Instructions. Exchange Process remains same as the Return Process.<br>
            Once the money is Returned, contact the Customer Care in confirming the Desired Product of Same Price.<br>
        </p>
        <h4 class='subheading'>Cancellation Process</h4>
        <p>If any order needs to be cancelled, You can Contact Customer Care during Work Hours and within 3 Hours of having Delivered the Product.<br>
        Please note that Orders outside of the Specified Periods, cannot be Accepted as the Orders will have been processsed and can only be Cancelled through Return/Exchange Process.<br></p>
        <h4 class='subheading'>Policies</h4>
        <p>Products that must be returned, should be taken Reasonable Care and not be used. The products must be in their Original Conditions.<br>
        We will not be responsible for any Loss or Damage caused to the Item during the process and may reject the Request to Return, Exchange or Refund.<br>
        In according to the Industry Standards, the Following Porducts are allowed for the Exchange/Return/Cancellation Process:<br>
            <ol>
                <li>-T-Shirts</li>
                <li>-Shirts</li>
                <li>-Jeans</li>
                <li>-Pants</li>
                <li>-Waist Coat</li>
                <li>-Skirts</li>
                <li>-Dressing Gown</li>
                <li>-Other Accessories</li>
            </ol>
        The Products other than those mentioned above, will not be accepted, and also not Responsible for the Damage caused.<br>
            </p>
        </div>
    </div>
     </header>
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