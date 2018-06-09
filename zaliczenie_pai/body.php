<?php 
session_start(); 

error_reporting(0);

// KOSZYK JAKO PUSTA TABLICA
if (!isset($_SESSION['koszyk'])) {$_SESSION['koszyk'] = array();}

?>

<!doctype html>
<html lang="PL">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GAMER - przykładowy sklep z grami komputerowymi</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

  </head>
  <body onload="currentDate()">
    <div class="container">
    	<div class="row">
    		<div class="col-12 logo text-center"><img class="img-fluid" src="logo.png"></div>
    	</div>
      <div id="data" style="font-weight: bold; color: #003284; margin-top: 15px;"></div>
      <div class="row filter">
        <div class="col-3">
          <form action="index.php" method="post">
            <div class="form-group">
              <label class="col-md-6 control-label" for="checkboxes"><strong>Platforma</strong></label>
              <div class="col-md-6">
                <label class="checkbox-inline" for="checkboxes-0">
                  <input type="checkbox" name="ps4" id="ps4" value="ps4">
                  PS4
                </label>
                <label class="checkbox-inline" for="checkboxes-1">
                  <input type="checkbox" name="pc" id="pc" value="pc">
                  PC
                </label>
              </div>
            </div>
        </div>
        <div class="col-6">
              <div class="form-group">
              <label class="col-md-7 control-label" for="checkboxes"><strong>Kategoria</strong></label>
              <div class="col-md-7">
                <label class="checkbox-inline" for="checkboxes-0">
                  <input type="checkbox" name="fps" id="fps" value="fps">
                  FPS
                </label>
                <label class="checkbox-inline" for="checkboxes-1">
                  <input type="checkbox" name="strategiczne" id="strategiczne" value="strategiczne">
                  STRATEGICZNE
                </label>
                <label class="checkbox-inline" for="checkboxes-1">
                  <input type="checkbox" name="sportowe" id="sportowe" value="sportowe">
                  SPORTOWE
                </label>
                <label class="checkbox-inline" for="checkboxes-1">
                  <input type="checkbox" name="wszystko" id="wszystko" value="wszystko">
                  POKAŻ WSZYSTKO
                </label>
              </div>
             </div>
          </div>
          <div class="col-3">
            <button type="submit" id="filtruj" name="filtruj" class="btn btn-primary filtruj-btn">Filtruj</button>
          </form>
          <button type="button" class="btn btn-primary filtruj-btn" data-toggle="modal" data-target="#koszyk">Koszyk <strong>(<?php echo count($_SESSION['koszyk']); ?>)</strong></button>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-12 content">
            <?php

                //KOMUNIKAT POPRAWNEGO DODANIA PRODUKTU DO KOSZYKA
                if (isset($_GET['success'])) 
                {

                    if($_GET['success'] == 1) 
                    {
                      echo "<div class='alert alert-success alert-dismissible fade show' role='alert' style='margin-top: 20px;'>
                              <strong>Nowy produkt został dodany do koszyka</strong>
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";
                    }

                }

                //KOMUNIKAT POPRAWNEGO ZŁOŻENIA ZAMÓWIENIA
                if (isset($_GET['order'])) 
                {

                    if($_GET['order'] == 1) 
                    {
                      echo "<div class='alert alert-success alert-dismissible fade show' role='alert' style='margin-top: 20px;'>
                              <strong>Zamówienie zostało przyjęte! </strong>Dziękujemy za zakupy i zapraszamy ponownie.
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";
                    }

                }

                //KOMUNIKAT GDY BRAK PRODUKTÓW O DANYCH KRYTERIACH

                if (isset($_GET['show'])) 
                {

                    if($_GET['show'] == 1) 
                    {
                      echo "<div class='alert alert-warning alert-dismissible fade show' role='alert' style='margin-top: 20px;'>
                              <strong>Brak wyników! </strong>W bazie sklepu brak produktów o podanych parametrach
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";
                    }

                }

                //CZYŚCIMY KOSZYK
                if (isset($_GET['wyczysc'])) {

                    if ($_GET['wyczysc'] == 1) {

                      unset($_SESSION['koszyk']);
                      header("Location: index.php");
                      echo "<div class='alert alert-success alert-dismissible fade show' role='alert' style='margin-top: 20px;'>
                              <strong>Koszyk zakupów został opróżniony</strong>
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";

                      }
                }

                ?>
          </div>
        </div>
    	<div class="row">
    		<div class="col-12 content">
    
                <?php 

                //POBIERAMY Z BAZY DANYCH INFORMACJE O WSZYSTKICH PRODUKTACH
                for ($i=0; $i < $product_length; $i++): 

                ?>

                <div class="col-12 box">
                    <div class="row box-title">
                        <div class="col-6"><h2><?php echo $product[$i][3];?> - platforma <?php getProductPlatformById($product[$i][0], $conn); ?> </h2></div>
                        <div class="col-6 text-right"><p class="price"><?php echo $product[$i][2]; ?> PLN</p></div>
                    </div>
              				<div class="row">
          	    				<div class="col-2"><img class="image" src="product_img/<?php echo $product[$i][0]; ?>.jpg"></div>
          	    				<div class="col-7 opis"><?php echo $product[$i][1]; ?> </div>
          	    				<div class="col-3 amount">
                            <form action="koszyk.php" method="post">
	    					                <input id="amount" name="amount" type="text" class="form-control input-md" value="1">
                                <input type="hidden" value="<?php echo $product[$i][0];?>" name="product_id">
                                <input type="hidden" value="<?php echo $product[$i][2];?>" name="product_prize">
                                <input type="hidden" value="<?php echo $product[$i][3];?>" name="product_name">
  							                 <span class="help-block">Liczba sztuk</span><br>
  							                 <button type="submit" id="order" name="order" class="btn btn-success order-btn">Do koszyka</button>
                            </form>
            						</div>
              				</div>
                </div>

               <?php endfor; ?>

	    	  </div>
        </div>
      </div>
      <div class="container">
	    	<div class="row">
	    		<div class="col-12 stopka text-center">Bartłomiej Mazurek - aplikacja na zaliczenie PAI</div>
	    	</div>
	    </div>

    <!-- KOSZYK -->
    <!-- Modal -->
    <div class="modal fade" id="koszyk" tabindex="-1" role="dialog" aria-labelledby="koszyk" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="koszyk">Podsumowanie zamówienia</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Lp</th>
                  <th scope="col">Produkt</th>
                  <th scope="col">Ilość</th>
                  <th scope="col">Cena</th>
                </tr>
              </thead>
              <tbody>

                <?php

                    //POBIERAMY ZAWARTOŚĆ KOSZYKA Z ZAKUPAMI
                    $summary = 0;
                    $i = 0;
                    foreach ($_SESSION['koszyk'] as $produkt)

                    {

                      $i++;
                      $summary += ($produkt['product_prize'] * $produkt['amount']);
                      echo '<tr><td>'.$i.'</td><td>'.$produkt['name'].'</td><td>'.$produkt['amount'].'</td><td>'.$produkt['product_prize'].'</td></tr>';
                    }
                ?>
              </tbody>
            </table>
            <?php echo "<div style='font-size: 25px;'><strong>Podsumowanie</strong>: ".$summary." PLN</div>"; ?>
          </div>
          <div class="modal-footer">
            <form action="zamowienie.php" method="post">
              <a href='index.php?wyczysc=1' class='btn btn-info' role='button'>Opróżnij</a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
              <input type="hidden" name="final_amount" value="<?php echo $summary; ?>">
              <button type="submit" class="btn btn-success">Zamawiam</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>

  <script>

    $(document).ready(function() {
        $('#ps4').on('change', function() {
          $('#pc').not(this).prop('checked', false);
          $('#wszystko').not(this).prop('checked', false);  
          });

        $('#pc').on('change', function() {
          $('#ps4').not(this).prop('checked', false);
          $('#wszystko').not(this).prop('checked', false);  
          });

        $('#fps').on('change', function() {
          $('#strategiczne').not(this).prop('checked', false);
          $('#sportowe').not(this).prop('checked', false);
          $('#wszystko').not(this).prop('checked', false);  
          });

        $('#strategiczne').on('change', function() {
          $('#fps').not(this).prop('checked', false);
          $('#sportowe').not(this).prop('checked', false);
          $('#wszystko').not(this).prop('checked', false);  
          });

         $('#sportowe').on('change', function() {
          $('#fps').not(this).prop('checked', false);
          $('#strategiczne').not(this).prop('checked', false);
          $('#wszystko').not(this).prop('checked', false);  
          });

         $('#wszystko').on('change', function() {
          $('#fps').not(this).prop('checked', false);
          $('#strategiczne').not(this).prop('checked', false);
          $('#sportowe').not(this).prop('checked', false);  
          });

         $('#wszystko').on('change', function() {
          $('#ps4').not(this).prop('checked', false);
          $('#pc').not(this).prop('checked', false);  
          });

    });

  </script>
</html>