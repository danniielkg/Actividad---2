<?php

include("conexion.php");

$pnom = $_POST["txtpnombre"];
$snom = $_POST["txtsnombre"];
$pape = $_POST["txtpapellido"];
$sape = $_POST["txtsapellido"];
$edad = $_POST["txtedad"];
$ciu = $_POST["txtciudad"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: principal.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "INSERT INTO clientes(primer nombre, segundo nombre, primer apellido, segundo apellido, edad, ciudad) values ('$pnom','$snom','$pape','$sape','$edad','$ciu')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE clientes SET nombre='$nom',edad='$edad',telefono='$tel' WHERE codigo=$cod";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM clientes WHERE codigo=$cod";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>