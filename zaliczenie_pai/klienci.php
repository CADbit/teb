<?php include_once 'klienci_controller.php';?>

<!doctype html>
<html lang="PL>
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>GAMER - przykładowy sklep z grami komputerowymi</title>

    <link rel="stylesheet" href="style.css">
  
  </head>
  <body>
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-12 logo text-center"><img class="img-fluid" src="logo.png"></div>
        </div>
        <div class="row">
            <div class="col-12 stopka" style="margin-bottom: 15px;">
                <form class="form-inline justify-content-center" action="dodaj.php" method="post">
                      <div class="form-group">
                        <label class="form-info" for="dodaj_imie">Imię: </label>
                        <input type="text" class="form-control" name="dodaj_imie">
                      </div>
                      <div class="form-group">
                        <label class="form-info" for="dodaj_nazwisko">Nazwisko: </label>
                        <input type="text" class="form-control" name="dodaj_nazwisko">
                      </div>
                      <div class="form-group">
                        <label class="form-info" for="dodaj_email">Email: </label>
                        <input type="email" class="form-control" name="dodaj_email">
                      </div>
                      <button type="submit" class="btn btn-primary form-btn">Dodaj</button>
                </form>
            </div>
        </div>

        <?php 

        if (isset($_GET['success'])) {

            if ($_GET['success'] == 2) {

                echo "<div class='alert alert-success';><strong>Operacja powiodła się!</strong> Klient został usunięty z bazy danych</div>";

            } elseif ($_GET['success'] == 1) {

                echo "<div class='alert alert-success';><strong>Operacja powiodła się!</strong> Klient został dodany do bazy danych</div>";

            }

        }

        if (isset($_GET['error'])) {

            if ($_GET['error'] == 2) {

                echo "<div class='alert alert-danger';><strong>Operacja nie powiodła się!</strong> Klient nie został usunięty z bazy danych</div>";

            } elseif ($_GET['error'] == 1) {

                echo "<div class='alert alert-danger';><strong>Operacja nie powiodła się!</strong> Klient nie został dodany do bazy danych</div>";

            }

        }

        ?>


        <div class="row">
            <div class="col-12">
                <table class="table tabela">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Imię</th>
                        <th>Nazwisko</th>
                        <th>Email</th>
                        <th>Edycja</th>
                      </tr>
                    </thead>
                    <tbody>


                        <?php 

                    foreach ($klienci_table as $klienci):

                    echo "<tr><td>".$klienci['id']."</td><td>".$klienci['firstname']."</td><td>".$klienci['lastname']."</td><td>".$klienci['email']."</td><td><a href='usun.php?uid=".$klienci['id']."' class='btn btn-primary' role='button'>USUŃ</a></td></tr>";

                    endforeach; 
                    ?>

                    </tbody>
                  </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12"
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