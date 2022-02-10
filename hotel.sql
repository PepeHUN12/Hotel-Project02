-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Feb 10. 13:20
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `hotel`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rooms`
--

CREATE TABLE `rooms` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Size` int(11) DEFAULT NULL,
  `Bed` varchar(255) DEFAULT NULL,
  `Adult` int(11) DEFAULT NULL,
  `Child` int(11) DEFAULT NULL,
  `Services` varchar(255) DEFAULT NULL,
  `Availability` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `rooms`
--

INSERT INTO `rooms` (`ID`, `Name`, `Price`, `Size`, `Bed`, `Adult`, `Child`, `Services`, `Availability`) VALUES
(1, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', 1),
(2, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', 1),
(3, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', 1),
(4, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', 1),
(5, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', 1),
(6, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', 1),
(7, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', 1),
(8, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', 1),
(9, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', 1),
(10, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', 1),
(11, 'Tenger oldali szoba', 300, 40, 'Francia ágy', 2, 2, 'Wifi,TV', 1),
(12, 'Tenger oldali szoba', 300, 40, 'Francia ágy', 2, 2, 'Wifi,TV', 1),
(13, 'Tenger oldali szoba', 300, 40, 'Francia ágy', 2, 2, 'Wifi,TV', 1),
(14, 'Tenger oldali szoba', 300, 40, 'Francia ágy', 2, 2, 'Wifi,TV', 1),
(15, 'Tenger oldali szoba', 300, 40, 'Francia ágy', 2, 2, 'Wifi,TV', 1),
(16, 'Prémium szoba', 550, 45, 'Francia ágy', 2, 2, 'Wifi,TV,Szauna,Jacuzzi', 1),
(17, 'Prémium szoba', 550, 45, 'Francia ágy', 2, 2, 'Wifi,TV,Szauna,Jacuzzi', 1),
(18, 'Prémium szoba', 550, 45, 'Francia ágy', 2, 2, 'Wifi,TV,Szauna,Jacuzzi', 1),
(19, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', 1),
(20, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', 1),
(21, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', 1),
(22, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', 1),
(23, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', 1),
(24, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', 1),
(25, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', 1),
(26, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', 1),
(27, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', 1),
(28, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', 1),
(29, 'Kétszemélyes szoba', 200, 30, 'Francia ágy', 2, 0, 'Wifi,TV', 1),
(30, 'Kétszemélyes szoba', 200, 30, 'Francia ágy', 2, 0, 'Wifi,TV', 1),
(31, 'Kétszemélyes szoba', 200, 30, 'Francia ágy', 2, 0, 'Wifi,TV', 1),
(32, 'Kétszemélyes szoba', 200, 30, 'Francia ágy', 2, 0, 'Wifi,TV', 1),
(33, 'Kétszemélyes szoba', 200, 30, 'Francia ágy', 2, 0, 'Wifi,TV', 1);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `rooms`
--
ALTER TABLE `rooms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
