<!DOCTYPE html>
<html>
    <body> 
        <head>
 <!---------------------------Head------------------------------------------->
<title>Thanks</title>
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

/* Style the header */
.header {
  background-color:aliceblue;
  padding: 10px;
  font: Serif;
  text-align: center;
  color: #000000;
}

    
/*--------------------TopBar-----------------*/
  /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #46b3e6;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #4d80e4;
  color: black;
}
    
    .buttonex2 
{
  display: inline-block;
  border-radius: 4px;
  background-color:#46b3e6  ;
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
  background-color:#46b3e6  ;
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

 /*------------------- background ----------------------*/   
body {
  background: #2e279d; /* fallback for old browsers */}  

    
    
Thanks
    {
    color: aliceblue;
    font-family: serif;
    display: block;
    text-align: center;
    height: 10px;
    width: 1220px;
    line-height: 530px;
    font-size:70px;
  } 
    
    
    text1
    {
    color:aliceblue;
    font-family: serif;
    display: block;
    text-align: center;
    height: 10px;
    width: 1220px;
    line-height: 650px;
    font-size:25px;
    }

    img.e1
        { 
        position: absolute;
        left: 540px;
        top:  200px;
        }
    
    
.buttonex1 {
  display: inline-block;
  border-radius: 4px;
  background-color:#46b3e6  ;
  border: none;
  color:#2e279d ;
  text-align: center;
  font-size: 28px;
 font-family: serif;
  padding: 20px;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: absolute;
  top: 550px;
  left: 490px;
    
}

.buttonex1 span 
{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonex1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0px;
  right: -20px;
  transition: 0.5s;
}

.buttonex1:hover span {
  padding-right: 25px;
}

.buttonex1:hover span:after {
  opacity: 1;
  right: 0;
}
    
    </style>
            </head>

      
<!-------------HTML---------------------->
<!------------Header------------------->
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
        <img class="e1" src="Mark.png" width="150" height="150" > 
        
        <Thanks>Thanks For Asking</Thanks>
        
        <text1>Check your E-mail usually to read the Answer</text1>
        
        <a href="Home.php" target="_self"><button class="buttonex1" style="vertical-align:middle"><span>Back to Home</span></button> </a>
        
        <a href="register.php" target="_self">
            <button class="buttonex2" style="vertical-align:middle">Sign In</button> 
        </a>
        
        <a href="pro.php" target="_self">
            <button class="buttonex3" style="vertical-align:middle">Log In</button> 
        </a>

</body>
</html>