<?php
	
	$csnev=$_POST["csnev"];
	$vnev=$_POST["vnev"];
	$telsz=$_POST["telsz"];
	$em=$_POST["em"];
	$anev=$_POST["anev"];
	$akiev=$_POST["akiev"];
	$problem=$_POST["problem"];
  $con = mysqli_connect("localhost", "root", "", "csabi_garage");
	mysqli_query($con, "INSERT INTO `programalas`(`Csaladnev`, `Vezeteknev`, `Telefonszam`, `email`, `auto_nev`, `auto_kiadasi_ev`, `problema`)
	VALUES ('$csnev','$vnev','$telsz','$em','$anev','$akiev','$problem')");
	header('Location: http://localhost/kosz.html');
	
?>
