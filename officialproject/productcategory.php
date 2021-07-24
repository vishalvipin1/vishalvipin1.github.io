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
        echo "<script>location.href='productcategory.html';</script>";
  
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
                <h1 id='men'>Men Clothing</h1>
            </div>
            <div class="product-center container">
                <div class="product">
                    <div class="product-header">
                        <img src='blockcolorhoodie.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart9' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Block-Coloured Hoodie</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹650</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='shortsleevesportstop.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart10' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Short-Sleeved Sports Top</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
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
                        <h3 class="price">₹650</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='vnecktshirtslim1.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart13' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>V-Neck T-Shirt Slim Fit</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹810</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='premiumcottonpoplin1.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart14' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Premium Cotton Poplin Shirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹1020</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='zippedcardigan.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart15' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Zipped Cardigan</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
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
                        <h3 class="price">₹999</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='linenbomberjacket.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart17' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Linen Bomber Jacker</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹950</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="section featured">
            <div class='title'>
                <h1 id='women'>Women Clothing</h1>
            </div>
            <div class="product-center container">
                <div class="product">
                    <div class="product-header">
                        <img src='jerseydress.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart18' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Jersey Dress</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹650</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='imitationleatherdress.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart19' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Imitation Leather Dress</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹520</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='balloonsleeveddress.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart20' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Balloon Sleeved Dress</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹850</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='silkblendknittedcardigan.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart21' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Silk-Blend Knitted Cardigan</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹650</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='crepeblouse.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart22' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Crepe Blouse</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹810</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='tailoredtrousersbeige.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart23' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Tailored Trouser</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹1020</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='denimjacket.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart24' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Denim Jacket</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹1200</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='silkblendshorts.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart25' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Silk-Blend Shorts</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹999</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='pullonsilksatintrousers.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart26' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Pull-on Silk Satin Trousers</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹950</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="section featured">
            <div class='title'>
                <h1 id='kids'>Kids Clothing</h1>
            </div>
            <div class="product-center container">
                <div class="product">
                    <div class="product-header">
                        <img src='smockeddress.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart27' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Smocked Dress</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹650</h3>
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
                        <h3 class="price">₹520</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='cottonjerseydress.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart29' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Cotton Jersey Dress</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹850</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='wovenjoggers.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart30' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Woven Joggers</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹650</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='printedtshirt.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart31' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Printed T-Shirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹810</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='flouncetrimmedwrapoverskirt.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart32' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Flounce-Trimmed Wrapover Skirt</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹1020</h3>
                    </div>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src='patternedsweatshirtshortds.jpg' alt="">
                        <ul class="icons">
                            
                            <a class='add-to-cart cart33' href='#'><span><i class="bx bx-shopping-bag"></i></span></a>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <a href='#'>
                            <h3>Patterned Sweatshirt Shorts</h3>
                        </a>
                        <div class='rating'>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <h3 class="price">₹1200</h3>
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
})


</script>