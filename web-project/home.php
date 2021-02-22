<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!doctype html>
<html>
    <head>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
	
	</head>
    <body>
	
	<header>
		
		<img src="images/ViberLogo2.png" class="rounded mx-auto d-block img-fluid" alt="Header image" style="width: 15%; height: 15%;">
		
        <h1>Product management</h1>
		<div class="navbar">
			
				<form method='post' action="">
					<input type="submit" value="Logout" name="but_logout">
				</form>
			
			
				<form action = "lisaa.php" method="post">
					<input type="submit" value="Add Product">
				</form>
				<br>
			
		</div>
		
	</header>
	
	<div class="container-fluid footer">
		<p>Copyright © 2021 DreamTeam</p>  
	</div> 
	
<?php

    include "config2.php";

	$sql = "SELECT * FROM tuotteet";
	$result = mysqli_query($con, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		
		echo "<div id = margin><table id='tuotelista'>
				<tr>
					<th>ID</th>
					<th>Name</th> 
					<th>Brand</th>
					<th>Price</th>
					<th></th>
					<th></th>
				</tr>";
		
		while($row = mysqli_fetch_assoc($result)) {
			
			echo '<tr>
					<td>'. $row["id"] .'</td>
					<td>'. $row["nimi"] .'</td>
					<td>'. $row["merkki"] .'</td>
					<td>'. $row["hinta"] .'</td>
					<td><form action = "poista.php?id='.$row["id"].'" method="post"><input type="submit" onclick="return confirm(\'Haluatko varmasti poistaa kohteen?\');" value="Remove"></form></td>
					<td><form action = "muokkaa.php?id='.$row["id"].'" method="post"><input type="submit" value="Edit"></form></td>
				</tr>';
		}
		echo "</div></table>";
		
	} else {

		echo "Ei ole tuotteita :(";
	}
	
	mysqli_close($con);
?>

</body>
</html>