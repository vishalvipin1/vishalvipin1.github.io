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
    <title>HomePage</title>
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
        echo "<script>location.href='index.html';</script>";
  
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
       <img src='randomguy.png' alt='' class='randomguy-img'/>
       <div class="randomguy-content">
           <h2> <span class='discount'>50-80%</span> SALE OFF</h2>
           <h1>
               <span>Summer Vibes</span>
               <span>- Best Feeling</span>
           </h1>
           <a href='product.php' class='btn'>SHOP NOW</a>
       </div>
    </header>
    <main class='advert'>
        <section class="section advert">
            <div class="advert-center container">
                <div class="advert-box">
                    <div class="dotted">
                        <div class="content">
                            <h2>
                            <a href='productcategory.php#women'>Women <br />
                                Clothing</a>
                            </h2>
                            <h4>World's Best Brands</h4>
                        </div>
                    </div>
                    <img src='modelgirl.png' alt='' />
                </div>
                <div class="advert-box">
                    <div class="dotted">
                        <div class="content">
                            <h2>
                            <a href='productcategory.php#men'>Men <br />
                                Clothing</a>
                            </h2>
                            <h4>World's Best Brands</h4>
                        </div>
                    </div>
                    <img src='randomguy1mod.png' id='men' alt=''/>
                </div>
                <div class="advert-box">
                    <div class="dotted">
                        <div class="content">
                            <h2>
                            <a href='productcategory.php#kids'>Children <br />
                                Clothing</a>
                            </h2>
                            <h4>World's Best Brands</h4>
                        </div>
                    </div>
                    <img src='kids.png' alt='' />
                </div>
            </div>
        </section>
        <br><br><br><br><br><br><br><br><br><br>

        <section class="section featured">
            <div class='title'>
                <h1><a href='product.html'>Featured Products</a></h1>
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
                            <h3>Boy's T-Shirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">???650</h3>
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
                            <h3>Girl's Overcoat</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">???520</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='patternedresortdress.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart3' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
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
                        <h3 class="price">???850</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='fittedcardignawomen.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart4' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Fitted Cardigan</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">???999</h3>
                    </div>
                </div>
            </div>
        </section>
         
        <section class="section featured">
            <div class='title'>
                <h1><a href='productcategory.html'>Products</a></h1>
            </div>
            <div class="product-center container">
                <div class="product">
                    <div class="product-header">
                        <img src='hoodeddressinggown.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart5' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Kids' Hooded Dressing Gown</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">???650</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='checkedcottonblazer.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart6' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Checked Cotton Blazer</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">???520</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='pic3.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart7' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>

                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Coloured T-Shirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">???700</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='pic4.jpg' alt="">
                        <ul class="icons">
                            
                        <a class='add-to-cart cart8' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>

                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Jean Shorts</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">???999</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="product-banner">
                <div class="left">
                    <img src='womenshopping.jpg' alt=''>
                </div>
                <div class='right'>
                    <div class='content'>
                        <h2><span class='discount'>70%</span> SALE OFF</h2>
                        <h1>
                            <span>Collect Your</span>
                            <span>Kids Collection</span>
                        </h1>
                        <a href='productcategory.php#kids' class='btn'>Shop Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="testimonial-center container">
                <div class="testimonial">
                    <span>&ldquo;</span>
                    <p>Amazing Service, let's go!</p>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                    </div>
                    <div class='img-cover'>
                        <img src='jonathan.jpg' alt=''>
                    </div>
                    <h3>Jonathan Lyndale</h3>
                </div>
                <div class="testimonial">
                    <span>&ldquo;</span>
                    <p>Amazing Products at Affordable Rates. Must Buy!!!!</p>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                    </div>
                    <div class='img-cover'>
                        <img src='baldski.jpg' alt=''>
                    </div>
                    <h3>KSI</h3>
                </div>
                <div class="testimonial">
                    <span>&ldquo;</span>
                    <p>Just Amazing!</p>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                    </div>
                    <div class='img-cover'>
                        <img src='vikk.jpg' alt=''>
                    </div>
                    <h3>Vikk</h3>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="brands-center container">
                <div class="brand">
                    <img src='nike.png' alt=''>
                </div>
                <div class="brand">
                    <img src='lacoste.png' alt=''>
                </div>
                <div class="brand">
                    <img src='puma.png' alt=''>
                </div>
                <div class="brand">
                    <img src='adidasorigionals.png' alt=''>
                </div>
                <div class="brand">
                    <img src='handm.png' alt=''>
                </div>
                <div class="brand">
                    <img src='zara.png' alt=''>
                </div>
                <div class="brand">
                    <img src='banana.png' alt='' style='height:1rem'>
                </div>
                <div class="brand">
                    <img src='adidas.png' alt=''>
                </div>
            </div>
        </section>
    </main>
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