<?php

include_once 'functions.php';

session_start();

if (isset($_POST['amount']) && isset($_POST['product_id']) && isset($_POST['product_prize']) && isset($_POST['product_name'])) 
{


	$amount = $_POST['amount'];
	$product_id = $_POST['product_id'];
	$product_prize = $_POST['product_prize'];
	$product_name = $_POST['product_name'];

			if (empty($_SESSION['koszyk'])) 
			{
				$_SESSION['koszyk'][0]['id'] = $product_id;
				$_SESSION['koszyk'][0]['amount'] = $amount;
				$_SESSION['koszyk'][0]['name'] = $product_name;
				$_SESSION['koszyk'][0]['product_prize'] = $product_prize;

				header("Location: index.php?success=1");

			} elseif (!empty($_SESSION['koszyk'])) 
			{
				$current = count($_SESSION['koszyk']);
				$n = $current;

				$_SESSION['koszyk'][$n]['id'] = $product_id;
				$_SESSION['koszyk'][$n]['amount'] = $amount;
				$_SESSION['koszyk'][$n]['name'] = $product_name;
				$_SESSION['koszyk'][$n]['product_prize'] = $product_prize;

				header("Location: index.php?success=1");

			}

}


?>