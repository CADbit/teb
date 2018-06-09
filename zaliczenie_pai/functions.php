<?php

require 'config.php';

function getProductNameById($product_id)

{
	$sql = "SELECT * FROM sklep_zaliczenie.products WHERE id = '$id'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$product_name = $row['name'];

	return $product_name;

}

function getProductPlatformById($product_id, $conn)

{
	$sql = "SELECT * FROM sklep_zaliczenie.products WHERE id = '$product_id'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);

	$platform_id = $row['platform_id'];

	$sql= "SELECT * FROM sklep_zaliczenie.product_platforms WHERE id = '$platform_id'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$platform_name = $row['name'];

	echo $platform_name;

}
	
?>