<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body>
        <head>
 <!---------------------------Head------------------------------------------->
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

            
<style>
/*----CSS----*/
/*---------HEADER--------*/
{
  box-sizing: 10px;
}

body {
  margin: 0;
}

    

/*--------------------TopBar-----------------*/
  /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #7e9edd;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #000000;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #a9c1ed;
  color: black;
}

 /*------------------- background ----------------------*/   
body {
  background: #324b69; /* fallback for old browsers */}  

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color:#a9c1ed;
  padding: 10px;
  font: Serif;
  text-align: center;
  color: #000000;
}
    
    h2{
    color: black;
    text-align: center;
    font-size:50px; 
    margin-right: 20px;
    } 
    
    .buttonex2 
{
  display: inline-block;
  border-radius: 4px;
  background-color:#324b69  ;
  border: none;
  color:white;
  text-align: center;
  font-size: 20px;
  font-family: serif;
  padding: 10px;
  width: 110px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: absolute;
  top: 25px;
  left: 1100px;
}
    
.buttonex2 span 
{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonex2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0px;
  right: -20px;
  transition: 0.5s;
}

.buttonex2:hover span {
  padding-right: 25px;
}

.buttonex2:hover span:after {
  opacity: 1;
  right: 0;
}
    
    /*Sign in*/    
    
.buttonex3 
{
  display: inline-block;
  border-radius: 4px;
  background-color:#324b69  ;
  border: none;
  color:white;
  text-align: center;
  font-size: 20px;
  font-family: serif;
  padding: 10px;
  width: 110px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: absolute;
  top: 25px;
  left: 970px;
}
    
.buttonex3 span 
{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonex3 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0px;
  right: -20px;
  transition: 0.5s;
}

.buttonex3:hover span {
  padding-right: 25px;
}

.buttonex3:hover span:after {
  opacity: 1;
  right: 0;
}
    

    
    
    
    
    
    
    
    
    

* {box-sizing:border-box}
/* Slideshow container */
.slideshow-container {
  max-width: 1300px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
    
    

    
    
    
    
/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #324b69;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #324b69;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color:#a9c1ed;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #a9c1ed;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
    </style>
</head>

<div class="header">
<h1>P H A R M A</h1>
</div>
        
<!----------------TopBar----------------->
 <div class="topnav">
  <a href="Home.php">Home</a>
  <a href="Store.php">Store</a>
     <a href="cart.php">Cart</a>
     <a href="Ask%20for%20Medical%20Advise.php">Ask Us</a>
     <a href="Feed%20back.php">Feedback</a>
</div>

        

        
          <a href="register.php" target="_self">
            <button class="buttonex2" style="vertical-align:middle">Sign In</button> 
        </a>
        
        <a href="pro.php" target="_self">
            <button class="buttonex3" style="vertical-align:middle">Log In</button> 
        </a>
        
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="PHARM.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="PHARM%202.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="PHARM%203.png" style="width:100%">
    <div class="text"></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
        
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}        
</script>
    
    
    
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>PHARMA Products </h2>
      <h5>What we sell ?, Dec 7, 2017</h5>
      <img src="bg1.jpg" style="width:100%">
      <p>50% Discount for all first visitors</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h2>Our Offers</h2>
      <h5>For who have an account with us, Sep 2, 2017</h5>
      <img src="bg3.jpg" style="width:100%">
      <p>All Kinds of Beauty Product</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About US</h2>
      <img src="About%20us.jpg" style="width:100%">
      <p>Opened from 22\3\2013</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <img src="bg2.jpg" style="width:100%">
      <img src="bg4.png" style="width:100%">
      <img src="bg5.png" style="width:100%">
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>FaceBook : pharma<br>
         Twitter : @pharma <br>
         Instgram : @PHARMA
        </p>
    </div>
  </div>
</div>



    

        

 
        
       
        

            

        
</body>
</html>