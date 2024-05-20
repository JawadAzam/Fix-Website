<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fix Website</title>
  <meta charset="utf-8"/> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale =1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<style>

.myButton {
	position: relative; 
width: 100px; 
left: 627px;
top: 70px3B;
color: white;
font-size: 20px;
height: 50px;
line-height: 50px;
margin: 20px 0px;
display: block;
background-image: linear-gradient(45deg, teal, darkCyan);
border-radius: 25px;
box-shadow: 0px 0px 10px lightSeaGreen, 0px 0px 30px darkCyan;
cursor: pointer;
}

</style>
  </head>
  <body>
    <section id="banner">
<?php
session_start();

if (isset($_SESSION['Your Username'])) {
echo '<h2 align="center" style="color: white; font-size: 35px;"> Welcome: ' . $_SESSION['Your Username'] . '</h2>'.
                                         '<form action="logout.php" method="POST">
                                         <button type="submit" name="submit" value="submit" class="myButton">Sign Out</button>
                                         </form>';
}
?>
    <div class="banner-text">
    <h1>Fix</h1>                            
    <p>Phone Repair & Service </p>
    <div class="banner-btn">
    <a href="Test1.html"><span></span>Apply now</a>
   <a href="repair request.html"><span></span>Request</a>
  </div>
  </div>
  </section>

    <div id="sideNav">
    <nav>
    <ul>
        <li><a href="#banner">Home</a></li>
	<li><a href="#feature">Features</a></li>
	<li><a href="#service">Services</a></li>
        <li><a href="#footer">Contact Us</a></li>
        <li><a href="feedback.html">Feedback</a></li>
        
    
	
    </ul>
    </nav>
    </div>
    <div id="menuBtn">
    <img src="images/menu.png" id="menu">
    </div>

    <section id="feature">

    <div class="title-text">
    <p>FEATURES</p>
    <h1>Why Choose Us</h1>
    </div>
    <div class="feature-box">

    <div class="features">
        <h1>Fast Service</h1>
	  <div class="features-desc">
	   <div class="feature-icon">
	     <i class="fa fa-mobile"></i>
    </div>
	 <div class="feature-text">
	   <p>“Everybody has a need for speed and you actually make
	   your product, or service, or services more attractive when 
	   you do them fast.” – Brian Tracy
	 
	  Customers just want to have personalized service
	  and speedy resolutions to their problems.
	  Companies with a humane outlook and practice 
	  in speed in customer service would be more likely
	  to gain and retain a larger number of customers.
	  Thats why the fast service in fix is important. 

     
	 </p>
	 </div>
	</div>
	
	<h1>Low Price</h1>
	<div class="features-desc">
	 <div class="feature-icon">
	   <i class="fa fa-inr"></i>
	 </div>
	 <div class="feature-text">
	 <p>
	 After examining your Phone, your technician 
	 will confirm the total costs for repair. 
	 In some cases, but make sure that you will get the 
     best repair with the best price.	 

     
	 </p>
	 </div>
	</div>
	
	<h1>High-Quality</h1>
	<div class="features-desc">
	 <div class="feature-icon">
	   <i class="fa fa-check-square-o"></i>
	 </div>
	 <div class="feature-text">
	 <p>Quality is critical to satisfying your customers 
	 and retaining their loyalty so they continue 
	 to buy from you in the future. Quality products
	 make an important contribution to long-term revenue 
	 and profitability. So we will make sure that we serve 
	 you with the best.

     
	 </p>
	 </div>
	</div>
	
 </div>
 
 <div class="features-img">
    <img src="images/11.jpg">
 </div>
</div>
</section>
<section id="service">
<div class="title-text">
<p>SERVICES</p>
 <h1>We Provide Better</h1>
</div>
<div class="service-box">
<div class="single-service">


<img src="images/5.jpg">
  <div class="overlay"></div>
  <div class="service-desc">
       <h3>Repairs & Physical Damage</h3>
	   <hr>
	   <p>  Cracked screen (front only),
Liquid or water damage,
Back of the phone is cracked,
Application or system is unresponsive,
Device slow or unresponsive to touch,
Display image distorted or blurred,
Display pixels or spots,
Display showing missing or incorrect colour or tint. </p>
  </div>
</div>
<div class="single-service">
<img src="images/1.jpg">
  <div class="overlay"></div>
  <div class="service-desc">
       <h3>Battery & Charging</h3>
	   <hr>
	   <p> 
Battery replacement,
Application or system is unresponsive,
Device slow or unresponsive to touch,
No video, but product has power,
Not starting up as expected,
Device frozen or unresponsive,
Power adapter not working as expected,
Display not working as expected,
Unable to power off or shut down.  </p>
  </div>
</div>
<div class="single-service">
<img src="images/8.jpg">
  <div class="overlay"></div>
  <div class="service-desc">
       <h3>Device Performance</h3>
	   <hr>
	   <p>  Device frozen or unresponsive,
Unable to update or restore,
System performance slower than expected,
Unable to send or receive emails,
Forgotten passcode or disabled device,
App doesn't work as expected,
Application or system is unresponsive,
Device slow or unresponsive to touch. </p>
  </div>
</div>
<div class="single-service">
<img src="images/7.jpg">
   <div class="overlay"></div>
   <div class="service-desc">
       <h3>Apps & Features</h3>
	   <hr>
	   <p>  Mail questions or troubleshooting,
Application unresponsive or quits unexpectedly,
Application is missing,
App doesn't work as expected,
Backing up or restoring data from a backup,
Content not playing as expected,
Downloading or displaying album artwork. </p>
  </div>
</div>
</div>
</section>

<section id="footer">

<div class="title-text">
<p>Contact Us</p>
</div>

<div class="footer-row">
<div class="footer-left">
    <h1> Opening Hours  </h1>
	<p><i class="fa fa-clock-o"></i>Monday to Friday
	- 9 AM to 9 PM</p>
	<p><i class="fa fa-clock-o"></i>Saturday and Sunday
	- 8 AM to 11 PM</p>
	
</div>

<div class="footer-right">
<h1> Get In Touch </h1>
<p>#30 abc Colony zxy Vihar in <i class="fa fa-map-marker"></i></p>
<p>NeverLand@gmail.com<i class="fa fa-paper-plane"></i> </p>
<p>+01 1123456789<i class="fa fa-phone"></i> </p>
</div>
</div>

<div class="social-links">
<i class="fa fa-facebook"></i>
<i class="fa fa-instagram"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-youtube-play"></i>
<p>Copyright Jawad's and Sara's company FIX ^_^ </p>
</div>
</section>

<script>
var menuBtn = document.getElementById("menuBtn")
var sideNav = document.getElementById("sideNav")
var menu = document.getElementById("menu")

sideNav.style.right = "-250px";   


menuBtn.onclick = function(){
if(sideNav.style.right == "-250px"){
sideNav.style.right = "0";
menu.src = "images/close.png";
}
else{
sideNav.style.right =  "-250px";
menu.src = "images/menu.png";
}

}
var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 1000,
	speedAsDuration: true
});


   </script>

  </body>
</html>






















