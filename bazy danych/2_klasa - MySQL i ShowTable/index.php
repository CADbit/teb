<?php

include_once 'klasy/MySQL.php';
include_once 'klasy/ShowTable.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Baza danych</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            min-width: 100px;
        }
        td {
            padding: 5px;
        }
    </style>
</head>
<body>
<?php

    $mysql = new MySQL(include('conf.php')); // Magia :-)

    // #1 Tworzymy tabelę
   // $query = "CREATE TABLE persons (
   //     PersonID int NOT NULL AUTO_INCREMENT,
   //     LastName varchar(255) NOT NULL,
   //     FirstName varchar(255),
   //     Address varchar(255),
   //     City varchar(255),
   //     PRIMARY KEY (PersonID)
   // );";
   // if ($mysql->specialQuery($query)) { echo 'Dodano tabelę<br/>'; }
   // else { echo 'Błąd: '.$mysql->error; }

    // #2 Dodajemy nowe wpisy
//    $insert1 = "INSERT INTO `persons` (`LastName`, `FirstName`, `Address`, `City`) VALUES ('Kowalski', 'Jan', 'Walecznych 6/4', 'Lublin');";
//    $insert2 = "INSERT INTO `persons` (`LastName`, `FirstName`, `Address`, `City`) VALUES ('Iksiński', 'Tomek', 'Pogodna 3/12', 'Lublin');";
//    $insert3 = "INSERT INTO `persons` (`LastName`, `FirstName`, `Address`, `City`) VALUES ('Szczera', 'Anna', 'Nadstawna 5', 'Biała Podlaska');";
//    $insert4 = "INSERT INTO `persons` (`LastName`, `FirstName`, `Address`, `City`) VALUES ('Kowalski', 'Jurek', 'Walecznych 6/4', 'Sczecin');";
// //
//    if ($mysql->specialQuery($insert1)) { echo 'Dodano wpis<br/>'; }
//    else { echo 'Błąd: '.$mysql->error; }
//    if ($mysql->specialQuery($insert2)) { echo 'Dodano wpis<br/>'; }
//    else { echo 'Błąd: '.$mysql->error; }
//    if ($mysql->specialQuery($insert3)) { echo 'Dodano wpis<br/>'; }
//    else { echo 'Błąd: '.$mysql->error; }
//    if ($mysql->specialQuery($insert4)) { echo 'Dodano wpis<br/>'; }
//    else { echo 'Błąd: '.$mysql->error; }

    // #3 Wyświetlamy informacje
    $query = "SELECT * FROM Persons;";
    // var_dump($mysql->query($query));    
    ShowTable::show($mysql->query($query));
    echo '<br/>';

    // #4 Usuwanie
    // $id = 4;
    // $query = "DELETE FROM `persons` WHERE `persons`.`PersonID` = ".$id.";";
    // if ($mysql->specialQuery($query)) { echo 'Usunięto wpis<br/>'; }
    // else { echo 'Błąd: '.$mysql->error; }

    // #5 Edycja
   $id = 4;
   $name = "Jarek";
   $query = "UPDATE `persons` SET `FirstName` = \"".$name."\" WHERE `persons`.`PersonID` = ".$id.";";
   if ($mysql->specialQuery($query)) { echo 'Edytowano wpis<br/>'; }
   else { echo 'Błąd: '.$mysql->error; }

    $query = "SELECT * FROM Persons;";
    ShowTable::show($mysql->query($query));
    echo '<br/>';
?>
</body>
</html>