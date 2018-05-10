<!-- Damian -->

<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Data i czasy</title>
</head>
<body>

<?php
        $dzisiaj = getdate();
        $miesiac = $dzisiaj['month'];
        $dzienTyg = $dzisiaj['weekday'];
        $dzienMies = $dzisiaj['mday'];
        $rok = $dzisiaj['year'];

        $dni = Array(
            "Monday" => "Poniedziałek",
            "Tuesday" => "Wtorek",
            "Wednesday" => "Środa",
            "Thursday" => "Czwartek",
            "Friday" => "Piątek",
            "Saturday" => "Sobota",
            "Sunday" => "Niedziela",
        );

        $miesiace = Array(
            "January" => "Styczeń",
            "February" => "Luty",
            "March" => "Marzec",
            "April" => "Kwiecień",
            "May" => "Maj",
            "June" => "Czerwiec",
            "July" => "Lipiec",
            "August" => "Sierpień",
            "September" => "Wrzesień",
            "October" => "Pańdziernik",
            "November" => "Listopad",
            "December" => "Grudzień",
        );

        echo '<h1>Praca domowa daty i czas.</h1>';
        echo '<br/>';

    // print_r($dzisiaj);

    // Zadanie 1
    // Napisz skrypt, który na podstawie danych pobranych z tablicy zwróconej przez funkcję getdate() wyświetli bieżącą datę. W dacie nazwa miesiąca zostanie podana w języku polskim.


        echo 'Dzisiaj jest ' . $dzienMies . ' ' . $miesiace[$miesiac] . ' ' . $rok.' r.';
        echo '<br/>';

    // Zadanie 2 
    // Napisz skrypt któryt będzie wyświetlał bieżacy dzień tygodnia w podanej postaci: Dzisiaj jest środa.

         echo 'Dzisiaj jest ' . $dni[$dzienTyg];
         echo '<br/>';;

    // Zadanie 3  
    // Napisz skrypt wyświetlający liczbę dni, które uplyneły od początku roku oraz liczbę dni, które pozostały do końca roku.

        $dniPoczatek = $dzisiaj['yday'];
        echo 'Od początku roku mineło ' . $dniPoczatek . ' dni.';
        echo '<br/>';
        $iledni = 365;
        $dniKoniec = $iledni - $dzisiaj['yday'];
        echo 'Do końca roku pozostało ' . $dniKoniec . ' dni.';
        echo '<br/>';

    // Zadanie 4 
    // napisz skrypt, który na podstawie danych: data urodzenia 1966-09-24 obliczny ile użytkownik ma lat

         $urodziny = strtotime('1966-09-24');
         $rokUrodzin = date("Y", $urodziny);
         $rok = $dzisiaj['year'];
         $wiek = $rok - $rokUrodzin;
         echo 'Nikt ma '.$wiek.' lat';

?>
	
</body>
</html>