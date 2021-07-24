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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link ref='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet"> 
    <title>Document</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    error_reporting(0);
    $adminuser='admin';
    $adminpwd='';
    $database='vidwan';
    $server='locahost';
    session_start();
    $session=$_SESSION['username'];
     if(isset($_SESSION['username'])){
        echo "<script>document.addEventListener('DOMContentLoaded',()=> {document.querySelector('.loginstatus .loginstatusblock').innerHTML='Hello {$_SESSION['username']}!<br><a href=logout.php>Logout</a>';});</script>";
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
        <div class='wrapper'>
            <h2>Payment Form</h2>
            <form method='post' autocomplete='off'>
                <h4 style='margin-top:-70px'>Account</h4>
                <div class='input-group'>
                    <div class='input-box'>
                        <input type='text' placeholder='Full Name' required class='name1' id='customername' required>
                        
                    </div>
                    <div class='input-box'>
                        <input type='text' placeholder='Nick Name' required class='name1' id='nickName' required>
                        
                    </div>
                </div>
                <div class='input-group'>
                    <div id='input-box'>
                        <input type='email' placeholder='Email Address' required class='name' id='emailaddress' required>
                    </div>
                </div>
                
                <div class='input-group'>
                    <div class='input-box'>
                        <h4>Date of Birth</h4>
                        <input type='text' placeholder='DD' class='dob' id='date' required>
                        <input type='text' placeholder='MM' class='dob' id='month' required>
                        <input type='text' placeholder='YYYY' class='dob' id='year' required>
                    </div>
                    <br>
                    <div class='input-box'>
                        <h4>Gender</h4>
                        <input type='radio' id='g1' name='gender' checked class='radio'><label for='g1'>Male</label>
                        <input type='radio' id='g2' name='gender' checked class='radio'><label for='g2'>Female</label>
                    </div>
                </div>
                <div class='input-group'>
                    <div class='input-box'>
                        <h4>Payment Details</h4>
                        <input type='radio' name='pay' id='bc1' checked class='radio' required>
                        <label for='bc1'><span><i class='fab fa-cc-visa'></i> <i class='fab fa-cc-mastercard'></i> <i class='fab fa-cc-amex'></i>  Credit Card/Debit Card</span></label>
                        
                    </div>
                </div>
                <br>
                <div class='input-group'>
                    <div class='input-box'>
                        <input type='tel' placeholder='Card Number' required class='name'>
                        
                    </div>
                    <br>
                </div>
                <div class='input-group'>
                    <div class='input-box'>
                        <input type='tel' placeholder='Card CVC' required class='name'>
                        
                    </div>
                    <br>
                    <div class='input-box'>
                        <select>
                            <option>01 June</option>
                            <option>02 June</option>
                            <option>03 June</option>
                        </select>
                        <br>
                        <br>
                        <select>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                            <option>2028</option>
                        </select>
                    </div>
                    <div class='input-box'>
                    <h3 id='noofproducts'></h3>
                    </div>
                </div>
                <br>
                <div class='input-group'>
                    <div class='input-box'>
                        <button type='submit' name='newSubmitButton' id='finalsubmit'>PAY NOW</button>
                        <a href='purchaseCancel.php'><button type='submit' name='cancelButton' id='canceltransaction'>CANCEL</button></a>
                    </div>
                </div>
            </form>
        </div>
    </header>
    <script src='index3.js'></script>
    <script>
        
        document.addEventListener('DOMContentLoaded',()=>{
            var numofprod=parseInt(localStorage.getItem('cartNumbers'));
            document.getElementById('noofproducts').innerHTML=`No. of products: ${numofprod}`;
            var cancelButton=document.getElementById('canceltransacion');
            if(isset(cancelButton)){
                location.href='purchaseCancel.php';
            }
        })
        $(document).ready(function(){
            $("#finalsubmit").click(function(){
                var name=$("#customername").val();
                var email=$("#emailaddress").val();
                var nickname=$("#nickName").val();
                var todayDate = new Date().toISOString().slice(0, 10);
                var numofprod=parseInt(localStorage.getItem('cartNumbers'));
                $.ajax({
                    url:'purchaseComplete.php',
                    method:'POST',
                    data:{
                        name:name,
                        email:email,
                        nickname:nickname,
                        numofprod:numofprod,
                        dateofpurchase:todayDate
                    },
                   success:function(data){
                       localStorage.clear();
                       alert('Data Entered Successfully');
                       location.href='purchaseComplete.php';
                   }
                });
            });
        });
    </script>
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