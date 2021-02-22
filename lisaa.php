<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="" method="post">
    <label for="nimi">Nimi:</label><br>
    <input type="text" id="nimi" name="nimi" value="" required><br>
    <label for="merkki">Merkki:</label><br>
    <input type="text" id="merkki" name="merkki" value="" required><br>
    <label for="hinta">Hinta:</label><br>
    <input type="text" id="hinta" name="hinta" value="" required><br><br>
    <input type="submit" value="Lisää">
</form>

</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nimi']) && !empty($_POST['merkki']) && !empty($_POST['hinta'])){

    include "config2.php";
	$nimi = $con->real_escape_string($_POST['nimi']);
    $merkki = $con->real_escape_string($_POST['merkki']);
    $hinta = $con->real_escape_string($_POST['hinta']);
	try{
	$stmt = $con->prepare("INSERT INTO tuotteet (nimi, merkki, hinta) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $nimi, $merkki, $hinta);
	$stmt->execute();
	$stmt->close();
	header('Location: home.php');
	exit;
	} catch(Exception $e) {
	error_log($e->getMessage());
	exit('Lisäämisessä tapahtui virhe :(');
  	}
}
?>