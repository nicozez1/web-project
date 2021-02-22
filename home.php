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
    <head><link rel="stylesheet" href="css/style.css"></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    

<form action = "lisaa.php" method="post"><input type="submit" value="Lisää tuote"></form><br>

<?php

    include "config2.php";

	$sql = "SELECT * FROM tuotteet";
	$result = mysqli_query($con, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		
		echo "<table id='tuotelista'>
				<tr>
					<th>ID</th>
					<th>Nimi</th> 
					<th>Merkki</th>
					<th>Hinta</th>
					<th></th>
					<th></th>
				</tr>";
		
		while($row = mysqli_fetch_assoc($result)) {
			
			echo '<tr>
					<td>'. $row["id"] .'</td>
					<td>'. $row["nimi"] .'</td>
					<td>'. $row["merkki"] .'</td>
					<td>'. $row["hinta"] .'</td>
					<td><form action = "poista.php?id='.$row["id"].'" method="post"><input type="submit" onclick="return confirm(\'Haluatko varmasti poistaa kohteen?\');" value="Poista"></form></td>
					<td><form action = "muokkaa.php?id='.$row["id"].'" method="post"><input type="submit" value="Muokkaa"></form></td>
				</tr>';
		}
		echo "</table>";
		
	} else {

		echo "Ei ole tuotteita :(";
	}
	
	mysqli_close($con);
?>

</body>
</html>