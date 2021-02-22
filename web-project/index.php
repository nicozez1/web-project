
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viber Clothing</title>
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	
</head>

<body>
<?php
include "config.php";
include "login.php";
?>

	<!-- Logo and header -->

	<header>
	<img src="images/ViberLogo2.png" class="rounded mx-auto d-block img-fluid" alt="Header image" style="width: 15%; height: 15%;">  
		
	<div class="navbar">
		<div class="navbar-centered-Home">
			<a href="index.html.php">Home</a>
		</div>
		<div class="navbar-centered-aboutus">
			<a href="tyontekijat.html">About Us</a>
		</div>
		<div class="navbar-centered-contact">
			<a href="otayhteytta.html">Contact Us</a>
		</div>
		<div class="search-box">
			<input type="text" name="" class="search-txt" placeholder="search"/>
			<a href="#" class="search_icon"><i class="fa fa-search"></i></a>
		</div>
		<div class="buttonOstoskori_div">
			<button class="button"><i class="fa fa-shopping-cart"></i></button>
		</div>
		<div class="buttonKirjautuminen_div">
			<button class="button" onclick="openForm()">Sign In <i class="fa fa-sign-in"></i></button>
		</div>
		<div class="dropdown">
			<span>Products</span>
				<div class="dropdown-content">
				  <a href="#">Jeans</a>
				  <a href="#">Jackets</a>
				  <a href="#">Shirts</a>
				</div>
		</div>
	</div>
	
	<div class="form-popup" id="myForm">
  <form  class="form-container" method="post" action="">
    <h1>Login</h1>

    <label for="username"><b>Username</b></label>
    <input type="text" id="txt_uname" name="txt_uname" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" id="txt_pwd" name="txt_pwd" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn" name="but_submit" id="but_submit">Login</button>
    <button type="button"  class="btn cancel" onclick="closeForm()">Close</button>
	
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

    </header>
	
	
  
	<!-- Social media bar -->
  
	<div class="icon-bar">
		<a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
		<a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
		<a href="#" class="google"><i class="fa fa-google"></i></a> 	
	</div>
  
	<!-- Carousel -->
  
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3" style="margin: auto; width: 20%;">
		
			<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
				<ol class="carousel-indicators">
					<li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
				</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="6000">
					<img src="images/ViberHoodie.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item" data-bs-interval="6000">
					<img src="images/ViberJacket.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
				<div class="carousel-item" data-bs-interval="6000">
					<img src="images/ViberJeans.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				</div>
			</div>
		<a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon" area-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Footer -->

	<div class="container-fluid footer">
		<div class="row">
			<div class="col-md-6">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tyontekijat.html">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="otayhteytta.html">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="col-md-5">
				<address>Hämeen Ammattikorkeakoulu<br>HAMK PL 230 13101 Hämeenlinna<br>Phone: 040 123 321 99<br>Email: ViberClothing@example.com</address>
			</div> 
		</div>
		<p>Copyright © 2021 DreamTeam</p>  
	</div>  
		


</body>
</html>