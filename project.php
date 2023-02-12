<?php 
session_start();

	include("connection.php");
	include("functions.php");

	//$user_data = check_login($con);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link rel="stylesheet" href="text.css">
</head>
<body>
    <header>
        
<div class="slideshow-container">

    <div class="mySlides fade">
      
      <img src="image1.jpg" style="width:100%">
      <div class="text">.</div>
    </div>
    
    
    <div class="mySlides fade">
      
      <img src="catnew.jpg" style="width: 100%">
      <div class="text">.</div>
    </div>
    
    <div class="mySlides fade">
      
      <img src="image2.jpg" style="width:100%">
      <div class="text">.</div>
    </div>
    
    </div>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    
    
    
    <script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 3000); 
    }
    </script>
        
         
        <div class="title">
           <h1>FourPaws</h1>
          
            <div class="center">
                <ul>
                <input type="checkbox" id="show">
                <label for="show" class="show-btn">LOGIN</label>
                  <div class="close">
                    
                    <label for="show" class="close-button" >&times</label>
                   <div class="text">
                      Login Form
                   </div>
                   <form action="login.php" method="post" class="loginpage">
                      <div class="data">
                         <label>Username</label>
                         <input type="text" name="user_name" id="user_name" required>
                      </div>
                      <div class="data">
                         <label>Password</label>
                         <input type="password" name="password" id="password" required>
                      </div>
                      <div class="forgot-pass">
                         <a href="#">Forgot Password?</a>
                      </div>
                      <div class="btn">
                         <div class="inner"></div>
                         <button type="submit">Login</button>
                      </div>
                      <div class="signup-link">
                         Not a member? <a href="signup.php">Signup now</a>
                      </div>
                   </form>          
           </div>
                </div>
           
            <div class="center2">
                <a href="signup.php">SIGNUP</a></ul>
        </div>
        
        </div>
      
        

  <div class = is layout divsion flex box column></div>
        <div class="container">
              <h1>ABOUT</h1></div>
        
     <div class="content">
      <div class="block">
        <h3>Welcome to our Pet Adoption website! <br>
          We are dedicated to helping animals in need find loving forever homes. Our goal is to match the right<br>
           pet with the right family, and to ensure that every animal is given the love and care they deserve.<br>
          <br>
          We believe that every pet deserves a second chance and a happy life, and we work tirelessly to make <br>that a
           reality for as many animals as possible. <br>
          <br>
          We are passionate about animal welfare and are committed to promoting responsible pet ownership. <br><br>
          If you're interested in adopting a pet, please take a look at our available animals and fill out an adoption application.<br>
          <br>
          Thank you for choosing to adopt, and for giving a furry friend a second chance at happiness!.
        </h3>
     </div>

           <img src="pet.gif" alt="gif">
          </div>
        
      
</header>
<div class="frames">
    <h2 >Need Best friend???</h2>
    <h3>Adopt a pet....</h3>
   </div>
   <div class="frnd">
    <div>
        <img src="row1.jpg" alt="pic q">
    </div>
    <div>
        <img src="row2.jpg" alt="pic q">
    </div>
    <div>
        <img src="rabbit.jpg" alt="pic q">
    </div>
    <div>
        <img src="row4.jpg" alt="pic q">
    </div>
   </div>
   <div class="adv">
    <img src="add.png" alt="dog">
    
    <a class="banner-link" href="signup.html">
      <button class="adopt-love-cta" type="button">Adopt a pet</button>
    </a>
   </div>
   
   
   
   
   
   
   <footer class="footer">
    <div class="foot">
     
     <img src ="paw-removebg-preview.jpg">
     <p>FourPaws@2023</p>
    </div>

  

    <div class="col3">
      <h5>Overview</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="project.php" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="signup.php" class="nav-link p-0 text-muted">SignUp</a></li>
        <li class="nav-item mb-2"><a href= "Faqs.html">FAQs</a></li>
        <li class="nav-item mb-2"><a href= "login.php">Explore</a></li>
       
      </ul>
    </div>

    <div class="col31">
      <h5>About</h5>
      <p>FourPaws! <br>
        Your One-Stop Shop for Adopting a Furry Friend.<br>
        Make a Difference: By adopting a pet,<br>
         you are not only giving a furry friend a second chance at happiness, <br>
         but also making a positive impact on the community.<br>
          You're saving a life and reducing pet homelessnes.</p>
      </ul>
    </div>
    <div class="row2"id="c">
      <h5>Contact Us</h5>
      <li>
        9718260722
      </li>
      <li> 9667224435</li>
      <li>9540937616</li>
      <img src="mail.jpg" alt="mail">
      <img src="call.jpg" alt="call">
      <p>fourpaws@gmail.com</p>
    </div>
   </footer>
   
   
  
     </body>
</html>