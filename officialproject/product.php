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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js'></script>
    <noscript>JavaScript is needed to run the program</noscript>
    <title>Document</title>
</head>
<body>
<?php
  $adminuser='admin';
  $adminpwd='admin';
  session_start();
  if(isset($_SESSION['username'])){
    echo "<script>document.addEventListener('DOMContentLoaded',()=> {document.querySelector('.loginstatus .loginstatusblock').innerHTML='Hello {$_SESSION['username']}!<br><a href=logout.php>Logout</a>';});</script>";
  } else{
        echo "<script>location.href='product.html';</script>";
  
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
        <section class="section featured">
            <div class='title'>
                <h1>Featured Products</h1>
            </div>
            <div class="product-center container">
                <div class="product">
                    <div class="product-header">
                        <img src='pic2.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart1' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
    
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Printed T-shirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Men
                        <h3 class="price">₹650</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='girlsovercoat.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart2' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
 
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Designed Overcoat</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Women
                        <h3 class="price">₹520</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='patternedresortdress.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart11' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>

                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Patterned Resort Shirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Men
                        <h3 class="price">₹850</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='roundnecktshirtblack.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart12' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>

                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Round Neck T-Shirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Men
                        <h3 class="price">₹650</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='nuloncargotrousersblack.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart34' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
  
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Nylon Cargo Trousers</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Men
                        <h3 class="price">₹810</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='sleevelesstopbeige.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart35' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>

                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Jersey Sleeveless Top</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Women
                        <h3 class="price">₹1020</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='widecottondressbeige.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart36' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>

                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Wide Cotton Dress</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Women
                        <h3 class="price">₹1200</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='voluminousresortshirt.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart16' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>

                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Voluminous Resort Shirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Women
                        <h3 class="price">₹999</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='oxfordshirtmusclefitblack.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart37' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>

                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Oxford Shirt Muscle Fit</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Men
                        <h3 class="price">₹950</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='poloshirtpattern1.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart38' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>

                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Polo Shirt Slim Fit</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Men
                        <h3 class="price">₹1100</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='sweatshirtshortsblack.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart39' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>

                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Sweatshirt Shorts</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Men
                        <h3 class="price">₹730</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='patternedtshirt1.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart40' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Patterned T-Shirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Men
                        <h3 class="price">₹999</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='patternedpoplinshirt.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart28' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Patterned Poplin Shirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Boys
                        <h3 class="price">₹900</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='printedjerseytop1.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart41' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Printed Jersey Top</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Girls
                        <h3 class="price">₹630</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='pocketdetailjerseydress.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart42' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Pocket-detail Jersey Dress</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        Girls
                        <h3 class="price">₹799</h3>
                    </div>
                </div>
            </div>
        </section>
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
});




</script>
