<?php
session_start();

include_once 'config.php';

if (isset($_POST['final_amount'])) 
	{

	$final_amount = $_POST['final_amount'];


	//SPRAWDZAMY OSATNIE ID ZAMÓWIENIA W TABELI ORDERS I DODAJEMY NOWY ID
	$sql = "SELECT id FROM sklep_zaliczenie.orders ORDER BY id LIMIT 1";
	$query = mysqli_query($conn, $sql);

			if (mysqli_num_rows($query) == 0)
			{

				$id = 1;

			} else 
			{

				$row = mysqli_fetch_array($query);
				$last_id = $row['id'];
				$id = $last_id + 1;

			}


	//DODAJEMY INFORMACJĘ O PRZYJĘTYM ZAMÓWIENIU
	$sql = "INSERT INTO sklep_zaliczenie.orders (id, user_id, total_price, status) VALUES ('$id','test', '$final_amount', 'W')";
	$query = mysqli_query($conn, $sql);


	//POBIERAMY OSTATNIE ID ZAMÓWIENIA Z TABELI ORDERS_LIST I DODAJEMY NOWY ID
	$sql = "SELECT DISTINCT id FROM sklep_zaliczenie.orders_list ORDER BY id DESC LIMIT 1";
	$query = mysqli_query($conn, $sql);

			if (mysqli_num_rows($query) == 0)
			{

				$id = 1;

			} else 
			{

				$row = mysqli_fetch_array($query);
				$last_id = $row['id'];
				$id = $last_id + 1;

			}


					//DODAJEMY WPIS DLA KAŻDEGO PRODUKTU W KOSZYKU
					foreach ($_SESSION['koszyk'] as $ordered_product) 
					{

						$sql = "INSERT INTO sklep_zaliczenie.orders_list (id, product_id, amount, price) VALUES ('$id', '$ordered_product[id]', '$ordered_product[amount]', '$ordered_product[product_prize]')";
						$query = mysqli_query($conn, $sql);

					}			

					unset($_SESSION['koszyk']);
					header("Location: index.php?order=1");

	}

?>