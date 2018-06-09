<?php

error_reporting(0);

// PRODUCTS

if (isset($_POST['wszystko'])) {

		$query = "SELECT * FROM sklep_zaliczenie.products";
		$result = mysqli_query($conn, $query);

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

// PRODUCTS

if (!isset($_POST['pc']) && !isset($_POST['ps4']) && !isset($_POST['fps']) && !isset($_POST['strategiczne']) && !isset($_POST['sportowe'])) {

		$query = "SELECT * FROM sklep_zaliczenie.products";
		$result = mysqli_query($conn, $query);

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

// PRODUCTS PS4
if (!isset($_POST['pc']) && isset($_POST['ps4']) && !isset($_POST['fps']) && !isset($_POST['strategiczne']) && !isset($_POST['sportowe'])) {

		$query = "SELECT * FROM sklep_zaliczenie.products WHERE platform_id = '1'";
		$result = mysqli_query($conn, $query);

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

// PRODUCTS PC
if (isset($_POST['pc']) && !isset($_POST['ps4']) && !isset($_POST['fps']) && !isset($_POST['strategiczne']) && !isset($_POST['sportowe'])) {

		$query = "SELECT * FROM sklep_zaliczenie.products WHERE platform_id = '2'";
		$result = mysqli_query($conn, $query);

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

// FPS
if (!isset($_POST['pc']) && !isset($_POST['ps4']) && isset($_POST['fps']) && !isset($_POST['strategiczne']) && !isset($_POST['sportowe'])) {

		$query = "SELECT * FROM sklep_zaliczenie.products WHERE category_id = '1'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == "") {

			$_GET['show'] = 1;

		}

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

// STRATEGICZNE
if (!isset($_POST['pc']) && !isset($_POST['ps4']) && !isset($_POST['fps']) && isset($_POST['strategiczne']) && !isset($_POST['sportowe'])) {

		$query = "SELECT * FROM sklep_zaliczenie.products WHERE category_id = '2'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == "") {

			$_GET['show'] = 1;

		}

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

// SPORTOWE
if (!isset($_POST['pc']) && !isset($_POST['ps4']) && !isset($_POST['fps']) && !isset($_POST['strategiczne']) && isset($_POST['sportowe'])) {

		$query = "SELECT * FROM sklep_zaliczenie.products WHERE category_id = '3'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == "") {

			$_GET['show'] = 1;

		}

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

//PS4 

// SPORTOWE PS4
if (!isset($_POST['pc']) && isset($_POST['ps4']) && !isset($_POST['fps']) && !isset($_POST['strategiczne']) && isset($_POST['sportowe'])) {

		$query = "SELECT * FROM sklep_zaliczenie.products WHERE category_id = '3' AND platform_id = '1'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == "") {

			$_GET['show'] = 1;

		}

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

// STRATEGICZNE PS4
if (!isset($_POST['pc']) && isset($_POST['ps4']) && !isset($_POST['fps']) && isset($_POST['strategiczne']) && !isset($_POST['sportowe'])) {


		$query = "SELECT * FROM sklep_zaliczenie.products WHERE category_id = '2' AND platform_id = '1'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == "") {

			$_GET['show'] = 1;

		}

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

// FPS PS4
if (!isset($_POST['pc']) && isset($_POST['ps4']) && isset($_POST['fps']) && !isset($_POST['strategiczne']) && !isset($_POST['sportowe'])) {


		$query = "SELECT * FROM sklep_zaliczenie.products WHERE category_id = '1' AND platform_id = '1'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == "") {

			$_GET['show'] = 1;

		}

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

//PC

//PC FPS
if (isset($_POST['pc']) && !isset($_POST['ps4']) && isset($_POST['fps']) && !isset($_POST['strategiczne']) && !isset($_POST['sportowe'])) {


		$query = "SELECT * FROM sklep_zaliczenie.products WHERE category_id = '1' AND platform_id = '2'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == "") {

			$_GET['show'] = 1;

		}

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

//PC STRATEGICZNE
if (isset($_POST['pc']) && !isset($_POST['ps4']) && !isset($_POST['fps']) && isset($_POST['strategiczne']) && !isset($_POST['sportowe'])) {


		$query = "SELECT * FROM sklep_zaliczenie.products WHERE category_id = '2' AND platform_id = '2'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == "") {

			$_GET['show'] = 1;

		}

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

//PC SPORTOWE
if (isset($_POST['pc']) && !isset($_POST['ps4']) && !isset($_POST['fps']) &&!isset($_POST['strategiczne']) && isset($_POST['sportowe'])) {


		$query = "SELECT * FROM sklep_zaliczenie.products WHERE category_id = '3' AND platform_id = '2'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == "") {

			$_GET['show'] = 1;

		}

		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {

		$product[$i][0] = $row['id'];
		$product[$i][1] = $row['description'];
		$product[$i][2] = $row['price'];
		$product[$i][3] = $row['name'];
		$i++;
	}

	$product_length = count($product);

}

?>