-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 apr 2020 om 12:35
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
(1, 'Smartphone', 'Smartphone om mee te bellen, appen, sociale media te bekijken en nog meer!', 1),
(2, 'Laptop', 'Laptop om op internet te kijken, om code te schrijven en nog veel meer!', 1),
(3, 'Tablet', 'Een grotere telefoon.', 1);

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
  `houseNumber_addon` varchar(3) DEFAULT NULL,
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
(1, 'male', 'Tim', 'van', 'Andel', 'Hoepmakersstraat', 19, NULL, '4233 GM', 'Ameide', '0621907968', 'timvanandel@gmail.com', '123', 'yes'),
(2, 'Other', 'klant', '', '2', 'de straat', 1, 'A', '1234AB', 'STAD', '0612345678', 'email@email.com', '1234', 'no');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(50) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `color` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `category_id`, `price`, `color`, `weight`, `active`) VALUES
(1, 'Iphone 11 64 GB', 'Het 6,1 inch Liquid Retina scherm van iPhone 11 is even groot als dat van iPhone Xr,<br>maar dit toestel heeft allerlei nieuwe functies.<br>Zo zet je grote groepen mensen of een weids landschap op de foto met de groothoeklens.', 1, '650.00', 'Zwart', '194 gram', 1),
(2, 'iPhone 11 Pro 256 GB', 'Apple iPhone 11 Pro zit in een herkenbaar jasje, maar vol vernieuwing.<br>Het ontwerp aan de voorkant kennen we van Apple iPhone Xs.<br>De verandering op de achterkant is echter niet te missen:<br>de camera, het zijn er 3.', 1, '1300.00', 'Midnight Green', '188 gram', 1),
(3, 'Iphone SE 2020 64GB', 'Zoek je een betaalbare iPhone?<br>Dan is deze iPhone SE 2020 een interessant model.<br>In vergelijking met andere Apple-telefoons heeft de SE 2020 namelijk een betaalbare prijs,<br>terwijl hij net zo snel is als de iPhones uit 2019.', 1, '500.00', 'Rood', '184 gram', 1),
(4, 'MacBook Pro 13 Inch', 'De MacBook Pro (2019) heeft een sneller geheugen, geavanceerde graphics,<br>razendsnelle opslag en een baanbrekende Touch Bar,<br>waarmee je soepeler dan ooit van idee naar resultaat gaat.', 2, '1400.00', 'Space Grey', '1370 gram', 1),
(5, 'MacBook Pro 16 Inch', 'Bij de nieuwe MacBook Pro 16 inch heeft power de hoogste prioriteit.<br>Ongekende prestaties,<br>een groter 16?inch Retina-display en een batterij die de hele dag meegaat1.<br>Je krijgt dus alles voor elkaar, waar je ook bent.', 2, '2450.00', 'Space Grey', '2000 gram', 1),
(6, 'MacBook Air 13 Inch', 'De buiten­gewoon dunne en lichte MacBook Air is nu krachtiger dan ooit.<br>Hij heeft een schitterend Retina-display, een nieuw Magic Keyboard, Touch ID,<br>tot twee keer zo snelle processors, snellere graphics en twee keer zoveel opslag­capaciteit.', 2, '1200.00', 'Space Grey', '1290 gram', 1),
(7, 'Ipad Pro 128 GB', 'In het voorjaar van 2020 heeft Apple de nieuwste iPad Pro gelanceerd.<br>Deze iPad is onder andere beschikbaar in de 11 inch (2020) 128GB Space Grey variant.<br>De tablet is voorzien van luxe technologieën en heeft een super modern design!', 3, '890.00', 'Zwart', '471 gram', 1),
(8, 'Ipad Air 256 GB', 'Apple iPad Air (3e generatie, 2019) 256GB Wifi Space Gray gebruik je<br>als vervanger voor je laptop dankzij de krachtige A12 bionic-chip.<br>Deze processor is zo krachtig dat je zonder haperingen in meerdere apps tegelijkertijd werkt.<br>Op het ruime 10,', 3, '880.00', 'Zwart', '464 gram', 1),
(9, 'Ipad Mini 64 GB', 'Apple iPad Mini 5 Wifi 64GB neem je dankzij het compacte formaat gemakkelijk mee.<br>Hij is voorzien van de nieuwste en snelste processor met A12 bionic chip.<br>Daardoor navigeer je tot 3x sneller door je favoriete apps dan met zijn oudere broertje Apple', 3, '350.00', 'Space Grey', '300 gram', 1);

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
(1, 1, 'iphone11.jpg', 1),
(2, 2, 'iphone11pro.jpg', 1),
(3, 3, 'iphoneSE.jpg', 1),
(4, 4, 'macbook_13.jpg', 1),
(5, 5, 'macbook_16.jpg', 1),
(6, 6, 'macbook_air.jpg', 1),
(7, 7, 'ipad_pro.jpg', 1),
(8, 8, 'ipad_air.jpg', 1),
(9, 9, 'ipad_mini.jpg', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(100) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `street` varchar(70) NOT NULL,
  `houseNumber` int(4) NOT NULL,
  `houseNumber_addon` varchar(4) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `price` int(100) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `delivery` enum('ophalen','bezorgen_thuis','bezorgen_anders','') NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `customer_id`, `date`, `street`, `houseNumber`, `houseNumber_addon`, `zipCode`, `city`, `country`, `payment_method`, `price`, `paid`, `delivery`, `status`) VALUES
(1, 1, '2020-04-24 11:47:40', 'Hoepmakersstraat', 19, '', '4233 GM', 'Ameide', '0621907968', 'achteraf', 7505, 0, 'bezorgen_thuis', 'In Behandeling'),
(2, 2, '2020-04-24 11:57:41', 'de straat', 1, 'A', '1234AB', 'STAD', '0612345678', 'achteraf', 655, 0, 'bezorgen_thuis', 'In Behandeling');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `id` int(50) NOT NULL,
  `order_id` int(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`id`, `order_id`, `product_id`, `amount`) VALUES
(1, 1, 3, 0),
(2, 1, 2, 0),
(3, 1, 1, 0),
(4, 1, 6, 0),
(5, 1, 5, 0),
(6, 1, 4, 0),
(7, 2, 1, 0);

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
  `password` varchar(255) NOT NULL,
  `admin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `firstName`, `middleName`, `lastName`, `birthDate`, `e-mailadres`, `password`, `admin`) VALUES
(1, 'Tim', 'van', 'Andel', '2004-06-28', 'timvanandel@gmail.com', 'admin', '1');

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
-- Indexen voor tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD KEY `id` (`id`);

--
-- Indexen voor tabel `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD KEY `id` (`id`);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
