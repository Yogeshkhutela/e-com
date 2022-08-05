<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-commerce website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <script type="text/javascript" src="mychatbot.js"></script> -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
	<div class="nav-container" id="myTopnav">
		<div class="nav-img">
			<img src="images/logo.jpg" style= "width: 50px; height: 50px;">
		</div>
<div class="nav-item">
      <form class="form" role="search">
  <input type="search" id="query" name="q"
   placeholder="Search..." aria-label="Search through site content" style="width:300px; height:30px;">
  <button type="submit"><i class="fa fa-search" ></i></button>
</form>
  </div>

		<div class="nav-item">
			<a href="#">Home</a>
		</div>
		<div class="nav-item">
			<a href="about.html">About</a>
		</div>
		<div class="nav-item">
			<a href="#">Contact</a>
		</div>
		<div class="dropdown">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
  	<?php if($_SESSION['status']==true){?>
    <a href="index.php"><?php echo $_SESSION['email'];?></a>
    <a href="logout.php">Logout</a>
    <?php }else{?>
    <a href="signup.php">Sign up</a>
    <?php } ?>
  </div>
  <div class="nav-item">
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a></div>
</div>
	</div>

	<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "nav-container") {
    x.className += " responsive";
  } else {
    x.className = "nav-container";
  }
}
</script>
	<div class="head-container">
	</div>

	<div class="grid-header">SHOP THE LOOK</div>
	<div class="grid-container">
	<div class="grid-items">
			<img src="images/img1.jpg">
			<p>Collar Formal Shirt</p>
			<div class="price">$59</div>
			<button type="submit" onclick="location.href='index.php';" value="go to file">Buy now</button>
			<button type="submit">Add to cart</button>
		</div>

		<div class="grid-items">
			<img src="images/img2.jpg" >
			<p>Black jeans</p>
			<div class="price">$99</div>
			<button type="submit">Buy now</button>
			<button type="submit">Add to cart</button>
		</div>

		<div class="grid-items">
			<img src="images/img3.jpg" >
			<p>Simple tshirt</p>
						<div class="price">$49</div>
			<button type="submit">Buy now</button>
			<button type="submit">Add to cart</button>
		</div>

		<div class="grid-items">
			<img src="images/img4.jpg" >
			<p>lined tshirt</p>
						<div class="price">$35</div>
			<button type="submit">Buy now</button>
			<button type="submit">Add to cart</button>
		</div>

		<div class="grid-items">
			<img src="images/img5.jpg">
			<p>Check tshirt</p>
						<div class="price">$29</div>
			<button type="submit">Buy now</button>
			<button type="submit">Add to cart</button>
		</div>

		<div class="grid-items">
			<img src="images/img6.jpg">
			<p>Shorts</p>
						<div class="price">$19</div>
			<button type="submit">Buy now</button>
			<button type="submit">Add to cart</button>
		</div>
	</div>

	<!-- <div> -->
		<div class="slideshow-container">
			<h1><center>DISCOVER OUR PRODUCTS</center></h1>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/three.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/two.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/one.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 2000);
}
</script>
	</div>
	<hr>



	<div class="vid-container">
		<div class="vid-img">
			<img src="images/other.jpg">
		</div>
		
		<div class="vid-text">
			<h1>Now lighter, faster and smoother</h1>
            <h3>Shopmatic has upgraded all of its webstores to Progressive Web Apps (PWAs) offering visitors an app-like experience.</h3>
		</div>  
	</div>







	

	<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">contact us</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ul>
  	 				<li><a href="#">shirts</a></li>
  	 				<li><a href="#">tshirts</a></li>
  	 				<li><a href="#">shorts</a></li>
  	 				<li><a href="#">jeans</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

</html>