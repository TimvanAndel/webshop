-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 mrt 2020 om 13:25
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `category_name`, `description`, `active`) VALUES
(1, 'tafellamp', 'Tafellampen zijn binnenlampen voor op tafel.', 1),
(2, 'buitenlamp', 'Buitenlampen zijn lampen voor buiten op tafel.', 1),
(3, 'designlamp', 'Designlampen zijn lampen voor binnen.', 1),
(4, 'bureaulamp', 'bureaulampen zijn lampen voor binnen op je bureau.', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(20) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `houseNumber` int(5) NOT NULL,
  `houseNumber_addon` varchar(3) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `e-mailadres` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `newsletter_subscription` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `customer`
--

INSERT INTO `customer` (`id`, `gender`, `firstName`, `middleName`, `lastName`, `street`, `houseNumber`, `houseNumber_addon`, `zipCode`, `city`, `phone`, `e-mailadres`, `password`, `newsletter_subscription`) VALUES
(1, 'male', 'Tim', 'van', 'Andel', 'Hoepmakersstraat', 19, 'Hoe', '4233 GM', 'Ameide', '0621907968', 'tim.van.andel@gmail.com', '123123123', 'yes');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `category_id`, `price`, `color`, `weight`, `active`) VALUES
(1, 'Arstid', 'De lampenkap van textiel geeft een zacht en decoratief licht. Lichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit. Gebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmat', 1, '39.95', 'wit', '300 gr', 1),
(2, 'Buitenlamp', 'De lampenkap van textiel geeft een zacht en decoratief licht.<br><br>Lichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.<br><b>Gebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmat', 2, '29.95', 'zwart', '200', 1),
(3, 'Gans-lamp', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmat', 3, '39.95', 'multi', '300', 1),
(4, 'Giraf-lamp', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmat', 3, '39.95', 'goud/wit', '300', 1),
(5, 'Hektar', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmat', 4, '39.95', 'zwart', '300', 1),
(6, 'Jesse', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmat', 4, '39.95', 'zwart', '300', 1),
(7, 'Lampje', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmat', 3, '39.95', 'zwart', '300', 1),
(8, 'Llahra', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmat', 1, '39.95', 'zwart/wit', '300', 1),
(9, 'Struisvogel-lamp', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmat', 3, '39.95', 'goud', '300', 1),
(10, 'Tim', 'is leuke lamp', 3, '99', 'wit', '7100', 1),
(11, 'Tim', 'is leuke lamp', 3, '99', 'wit', '7100', 1),
(12, '', '', 0, '', '', '', 0),
(13, '', '', 0, '', '', '', 0),
(14, '', '', 0, '', '', '', 0),
(15, '', '', 0, '', '', '', 0),
(16, '', '', 0, '', '', '', 0),
(17, '', '', 0, '', '', '', 0),
(18, '', '', 0, '', '', '', 0),
(19, 'Tim', 'is leuke lamp', 3, '99', 'wit', '7100 gr', 1),
(20, 'Tim', 'is leuke lamp', 3, '99', 'wit', '7100 gr', 1),
(21, 'Tim', 'is leuke lamp', 1, '99', 'zwart', '100', 1),
(22, '', '', 0, '', '', '', 0),
(23, '', '', 0, '', '', '', 0),
(24, '', '', 0, '', '', '', 0),
(25, '', '', 0, '', '', '', 0),
(26, '', '', 0, '', '', '', 0),
(27, '', '', 0, '', '', '', 0),
(28, '', '', 0, '', '', '', 0),
(29, '', '', 0, '', '', '', 0),
(30, '', '', 0, '', '', '', 0),
(31, 'Tim', '1231', 1, '39.95', '123', '123', 1),
(32, 'Tim', '123', 99, '9', '99', '99', 99),
(33, 'Tim', '123', 99, '9', '99', '99', 99),
(34, 'Tim', '123', 99, '9', '99', '99', 99),
(35, 'Tim', '123', 99, '9', '99', '99', 99),
(36, 'Tim', '123', 99, '9', '99', '99', 99),
(37, 'Tim', '123', 99, '9', '99', '99', 99),
(38, 'Tim', '123', 99, '9', '99', '99', 99),
(39, 'Tim', '123', 99, '9', '99', '99', 99),
(40, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(41, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(42, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(43, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(44, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(45, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(46, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(47, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(48, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(49, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(50, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(51, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(52, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(53, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(54, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(55, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(56, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(57, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(58, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(59, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(60, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(61, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(62, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(63, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(64, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(65, 'lamp', 'lamp', 1, '11', '11', '11', 1),
(66, '.....3123', '1', 2, '123', '123', '123', 1),
(67, '.....3123', '1', 2, '123', '123', '123', 1),
(68, '.....3123', '1', 2, '123', '123', '123', 1),
(69, '12333333', '123', 12, '123', '12', '12', 12),
(70, '12333333', '123', 12, '123', '12', '12', 12);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_image`
--

CREATE TABLE `product_image` (
  `id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image`, `active`) VALUES
(1, 1, 'arstid.jpg', 1),
(2, 2, 'buitenlamp.jpg', 1),
(3, 2, 'buitenlamp2.jpg', 1),
(4, 3, 'gans.jpg', 1),
(5, 4, 'giraf.jpg', 1),
(6, 4, 'giraf2.jpg', 1),
(7, 5, 'hektar.jpg', 1),
(8, 6, 'jesse.png', 1),
(9, 7, 'lampje.jpg', 1),
(10, 8, 'llahra.png', 1),
(11, 9, 'struisvogel.jpg', 1),
(12, 69, '346536.jpg', 12),
(13, 69, '346536.jpg', 12);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `middleName` varchar(10) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `birthDate` date NOT NULL,
  `e-mailadres` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `firstName`, `middleName`, `lastName`, `birthDate`, `e-mailadres`, `password`) VALUES
(1, 'Tim', '123', 'van Andel', '2020-02-27', 'tim.van.andel.2004@gmail.com', '123123'),
(2, 'Tim', '2', 'Andel', '2019-12-01', 'tim.van.ande@gmail.com', '123123123123');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e-mailadres` (`e-mailadres`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e-mailadres` (`e-mailadres`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT voor een tabel `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
