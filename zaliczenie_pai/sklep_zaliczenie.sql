-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Cze 2018, 11:44
-- Wersja serwera: 10.1.31-MariaDB
-- Wersja PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep_zaliczenie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `total_price` float NOT NULL,
  `status` varchar(1) COLLATE utf8_polish_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders_list`
--

CREATE TABLE `orders_list` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `platform_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_polish_ci NOT NULL,
  `stock_amount` int(11) NOT NULL,
  `price` float NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `platform_id`, `category_id`, `name`, `description`, `stock_amount`, `price`, `created`, `modified`) VALUES
(1, 1, 1, 'Resident Evil 7', 'Resident Evil 7: Biohazard is a survival horror game developed and published by Capcom, released in January 2017 for Windows, PlayStation 4, and Xbox One, and in May 2018 for the Nintendo Switch. The player controls Ethan Winters as he searches for his wife in a derelict plantation occupied by the cannibal Baker family, solving puzzles and fighting enemies. It is the first main series game to use a first-person view.', 50, 109.99, '2018-06-08 18:25:25', '0000-00-00 00:00:00'),
(2, 1, 3, 'Fifa 18', 'FIFA 18 is a football simulation video game in the FIFA series of video games, developed and published by Electronic Arts and was released worldwide on 29 September 2017 for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360, Xbox One and Nintendo Switch. It is the 25th instalment in the FIFA series. Real Madrid forward Cristiano Ronaldo appears as the cover athlete of the regular edition. Ronaldo Nazario appears on the icon edition of the game.', 500, 99, '2018-06-08 18:27:34', '0000-00-00 00:00:00'),
(3, 2, 2, 'Civilization 5', 'Sid Meier\'s Civilization V is a 4X video game in the Civilization series developed by Firaxis Games. The player leads a civilization from prehistoric times into the future on a procedurally generated map, attempting to achieve one of a number of different victory conditions through research, exploration, diplomacy, expansion, economic development, government and military conquest. ', 100, 89.99, '2018-06-08 18:31:01', '0000-00-00 00:00:00'),
(4, 2, 1, 'Doom', 'Doom is a first-person shooter video game developed by id Software and published by Bethesda Softworks. A reboot of the Doom franchise, it is the fourth title in the main series and the first major installment since Doom 3 in 2004. It was released worldwide on Microsoft Windows, PlayStation 4, and Xbox One on May 13, 2016 and is powered by id Tech 6. A port for Nintendo Switch, co-developed with Panic Button, was released on November 10, 2017', 150, 69.99, '2018-06-08 18:32:55', '0000-00-00 00:00:00'),
(5, 2, 2, 'Sim City', 'SimCity is an open-ended city-building video game series originally designed by Will Wright. The first game in the series, SimCity, was published by Maxis in 1989. The success of SimCity sparked the creation of several sequels and many other spin-off \"Sim\" titles, including 2000\'s The Sims, which itself became a best-selling computer game and franchise.', 50, 59.99, '2018-06-08 18:36:16', '0000-00-00 00:00:00'),
(6, 2, 3, 'Football Manager 18', 'Football Manager 2018 is a 2017 football management simulation video game developed by Sports Interactive and published by Sega which was released worldwide on November 10, 2017 for Microsoft Windows, macOS, Linux and the Nintendo Switch version released on April 13, 2018. For the first time in the series, all three versions of the game, FM 18 for PC, Mac and Linux', 150, 99.99, '2018-06-08 18:37:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`) VALUES
(1, 'FPS'),
(2, 'STRATEGICZNE'),
(3, 'SPORTOWE');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_platforms`
--

CREATE TABLE `product_platforms` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `product_platforms`
--

INSERT INTO `product_platforms` (`id`, `name`) VALUES
(1, 'PS4'),
(2, 'PC');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `firstname` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `created`, `modified`) VALUES
('test', 'Janusz', 'Testowy', 'test@gmail.com', '2018-06-03 09:14:45', '0000-00-00 00:00:00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_fk0` (`user_id`);

--
-- Indeksy dla tabeli `orders_list`
--
ALTER TABLE `orders_list`
  ADD KEY `orders_list_fk0` (`id`),
  ADD KEY `orders_list_fk1` (`product_id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_fk0` (`platform_id`),
  ADD KEY `products_fk1` (`category_id`);

--
-- Indeksy dla tabeli `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `product_platforms`
--
ALTER TABLE `product_platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `product_platforms`
--
ALTER TABLE `product_platforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `orders_list`
--
ALTER TABLE `orders_list`
  ADD CONSTRAINT `orders_list_fk0` FOREIGN KEY (`id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orders_list_fk1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ograniczenia dla tabeli `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_fk0` FOREIGN KEY (`platform_id`) REFERENCES `product_platforms` (`id`),
  ADD CONSTRAINT `products_fk1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
