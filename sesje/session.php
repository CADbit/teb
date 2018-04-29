<?php
/*
 * Sesja to czas, w którym użytkownik przegląda witrynę internetową. 
 * W PHP to obiekt, który może zawierać dane dotyczące użytkownika. 
 * Najważniejsza dana, określana jako PHPSESSID, to unikalny ciąg znaków, 
 * który wysyłany jest do przeglądarki użytkownika i zapisywany na dysku w postaci ciasteczka. 
 * Dzięki sesjom możemy dowiedzieć się, 
 * jakie podstrony naszej witryny były otwierane przez użytkownika, 
 * jak długo je przeglądał itp.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>
<body>

<?php

    session_start();

    echo session_id().'<br>';

    // Zmienne sessji
//    session_register('zmienna', 'Ala'); // PHP < 5.4
//    $_SESSION['zmienna'] = 'Ala';
     #1
//    if (isset($_SESSION['zmienna'])) {
//        echo $_SESSION['zmienna'].'<br>';
//    } else {
//        echo 'Brak zmiennej'.'<br>';
//    }
    // #2
//    foreach ($_SESSION as $key => $value) {
//        echo $key.' - '.$value.'<br>';
//    }
    // #3
//    $_SESSION['tablica'] = array('login' => 'mka', 'pass' => 'teb');
    //echo var_dump($_SESSION);
    if (isset($_SESSION['ID'])) {
        echo $_SESSION['ID'];
    } else {
        $_SESSION['ID'] = rand(1000, 9999);
        echo $_SESSION['ID'];
    }

    //session_destroy();

?>

</body>
</html>
<?php
/*
 * Zadania do samodzielnego wykonania:
 * #1
 * Napisz klasę umożliwiającą włączenie sesji, zamknięcie sesji oraz w prosty sposób dodawanie zmiennych oraz ich odczyt.
 * #2
 * Na podstawie skryptu licznika opartego na cookies napisz skrypt licznika oparty na sesji.
 * #3
 * Wykorzystując sesje napisz skrypt prostego logowania użytkowników.
 * 1. Strona index.php ma sprawdzać czy jesteś zalogowany. Jeżeli nie to wyświetl panel logowania. Jeżeli tak to wyświetl link do wylogowania oraz informację: „Witaj, Imię Nazwisko, ostatnie logowanie było: dd-mm-yyyy.”
 * 2. Po wciśnięciu linku „wyloguj” sesja ma się wygasić a użytkownik ma dostać komunikat: „Wylogowałeś się”.
 */
?>

