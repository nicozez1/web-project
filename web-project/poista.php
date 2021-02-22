<?php
	include "config2.php";
	try{
	$stmt = $con->prepare("DELETE FROM tuotteet WHERE id = ?");
	$stmt->bind_param("i", $_GET['id']);
	$stmt->execute();
	$stmt->close();
	header('Location: home.php');
	exit;
	} catch(Exception $e) {
	error_log($e->getMessage());
	exit('Poistamisessa tapahtui virhe :(');
  	}
?>