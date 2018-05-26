<!doctype html>
<html lang="PL>
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>GAMER - przykładowy sklep z grami komputerowymi</title>

    <style>

    .logo {
    	background: linear-gradient(to right, #003284 , #0045b7);
    	/*height: 150px; */
    	border-radius: 10px;
    	color: white;
    	box-shadow: 2px 3px 5px 1px rgba(0,0,0,0.3) ;
    }

    .content {

    	border-radius: 10px;
    }

    .menu {
    	background: linear-gradient(to right, #003284 , #0045b7);
    	border-radius: 10px;
    	margin-top: 20px;
    	margin-bottom: 20px;
    	color: white;
    	box-shadow: 2px 3px 5px 1px rgba(0,0,0,0.3);
    	font-size: 12px;
    	height: 200px;

    }

    .stopka {
    	background: linear-gradient(to right, #003284 , #0045b7);
    	border-radius: 10px;
    	height: 50px;
    	color: white;
    	box-shadow: 2px 3px 5px 1px rgba(0,0,0,0.3) ;
    }

    .box {

    	background: linear-gradient(to right, #003284 , #0045b7);
    	height: 250px;
    	margin-top: 20px;
    	margin-bottom: 20px;
    	border-radius: 10px;
    	color: white;
    	box-shadow: 2px 3px 5px 1px rgba(0,0,0,0.3) ;
    }

    .opis {
    	padding-top: 30px;
    	overflow: hidden;
    	height: 200px;
    	padding-left: 10px;
    	font-size: 13px;

    }

    .image {

    	width: 150px;
    	padding-top: 30px;

    }

    .amount {
    	padding-top: 30px;
    }

    .order-btn {
    	margin-top: 20px;
    }

    .price {
    	color: #28a745;
    	font-weight: bold;
    	font-size: 22px;
    }

    .filter {
    	padding-top: 20px;
    }

    .filter-check-box {
    	margin-right: 10px;

    }

    .filtruj-btn {
    	margin-bottom: 20px;

    }

   	</style>
  
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-12 logo text-center"><img class="img-fluid" src="logo.png"></div>
    	</div>
    	<div class="row">
    		<div class="col-8 content">
    			<div class="col-12 box">
    				<div class="row">
	    				<div class="col-3"><img class="image" src="gra.jpg"></div>
	    				<div class="col-6 opis">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. </div>
	    				<div class="col-3 amount">
	    					<p class="price">109,99 PLN</p>
	    					<input id="textinput" name="textinput" type="text" placeholder="1" class="form-control input-md">
  							<span class="help-block">Liczba sztuk</span>
  							<button id="singlebutton" name="singlebutton" class="btn btn-success order-btn">Zamawiam</button>
  						</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-4 menu text-center filter"><div style="margin-bottom: 20px;"><strong>FILTRUJ:</strong></div>
    				<div class="row" style="margin: auto;">
		    			<div style="margin-bottom: 10px;" class="filter-check-box"><strong>Platforma:</strong></div>
							<div class="checkbox filter-check-box">
							   <label for="ps4">
							     <input type="checkbox" name="ps4" id="ps4" value="ps4">
							     PS4
							   </label>
							</div>
							<div class="checkbox filter-check-box">
							   <label for="pc">
							     <input type="checkbox" name="pc" id="pc value="pc">
							     PC
							   </label>
							</div>
						</div>
						<div class="row" style="margin: auto;">
						<div style="margin-bottom: 10px;" class="filter-check-box"><strong>Kategoria:</strong></div>
							<div class="checkbox filter-check-box">
							   <label for="checkboxes-0">
							     <input type="checkbox" name="checkboxes" id="checkboxes-0" value="fps">
							     FPS
							   </label>
							</div>
							<div class="checkbox filter-check-box">
							   <label for="checkboxes-1">
							     <input type="checkbox" name="checkboxes" id="checkboxes-1" value="strategiczne">
							     Strategiczne
							   </label>
							</div>
							<div class="checkbox filter-check-box">
							   <label for="checkboxes-2">
							     <input type="checkbox" name="checkboxes" id="checkboxes-2" value="sportowe">
							     Sportowe
							   </label>
							</div><br>
						</div>
						<hr style="border-color: white;">
						<button id="filtruj" name="filtruj" class="btn btn-primary filtruj-btn">Filtruj</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-12 stopka text-center"><span class="align-middle">Bartłomiej Mazurek - aplikacja na zaliczenie PAI</span></div>
	    	</div>
	    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>