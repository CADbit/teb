<?php

/*
 * Zasada działania plików cookie:
 * 1) Po nawiązaniu połączenia serwer wysyła do przeglądarki nagłówke 'Set-Cookie',
 *      który zawiera pliki cookie.
 * 2) Przeglądarka zapisuje plik cookie na dysku użytkownika.
 * 3) Przy kolejnym połączeniu z serwerem przeglądarka wysyła do niego 
 *      przechowywany na dysku plik cookie.
 *
 * Wygląd 'ciasteczka':
 *  setcookie(nazwa, wartość, czas_trwania, ścieżka_dostepu, domena, bezpieczeństwo, tylko_html);
 *
 * Chrome: chrome://settings/cookies | chrome://settings/siteData?search=cookie | C:\Users\Michał Kazula\AppData\Local\Google\Chrome\User Data\Default
 */

$name = 'testowe_cisteczko';
$value = 'Wiadomość testowa';
$expire = time() + 3600; // od teraz + 1h (3600s)
$path = '/';
$domain = 'localhost';
$secure = false;
$httponly = false;

// setcookie($name);
// setcookie($name, $value);
// setcookie($name, $value, $expire);
// setcookie($name, $value, $expire, $path);
// setcookie($name, $value, $expire, $path, $domain);
// setcookie($name, $value, $expire, $path, $domain, $secure);
//setcookie($name, $value, $expire, $path, $domain, $secure, $httponly)

if (isSet($_COOKIE[$name])) {
    //echo 'Wiadomość testowa.';
    var_dump($_COOKIE);
} else {
    echo 'Brak pliku cookie!';
}

?>

