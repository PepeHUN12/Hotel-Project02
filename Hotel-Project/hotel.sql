-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Máj 16. 13:30
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.0.14

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
-- Tábla szerkezet ehhez a táblához `guests`
--

CREATE TABLE `guests` (
  `GuestID` int(32) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `guests`
--

INSERT INTO `guests` (`GuestID`, `FirstName`, `LastName`, `PhoneNumber`, `Email`, `Password`) VALUES
(239, 'teszt', 'teszt', 2147483647, 'teszt@gmail.com', 'asd123'),
(782, 'Péter', 'Patyi', 12345, 'petike@gmail.com', 'asd'),
(860, 'Zoltán', 'Lipovniczky ', 12345, 'zoli@gmail.com', 'asd'),
(958, 'Olivér ', 'Szabó', 12345, 'oliver@gmail.com', 'asd');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `reservations`
--

CREATE TABLE `reservations` (
  `ReservationID` int(32) NOT NULL,
  `GuestID` int(32) DEFAULT NULL,
  `FromDate` date DEFAULT NULL,
  `ToDate` date DEFAULT NULL,
  `RoomID` int(32) DEFAULT NULL,
  `RoomName` varchar(255) DEFAULT NULL,
  `Bill` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `reservations`
--

INSERT INTO `reservations` (`ReservationID`, `GuestID`, `FromDate`, `ToDate`, `RoomID`, `RoomName`, `Bill`) VALUES
(390, 860, '2022-05-19', '2022-05-22', 11, 'Tenger oldali szoba', 1045),
(729, 860, '2022-05-11', '2022-05-21', 19, 'Családi szoba', 3520);

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
  `ReservationID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `rooms`
--

INSERT INTO `rooms` (`ID`, `Name`, `Price`, `Size`, `Bed`, `Adult`, `Child`, `Services`, `ReservationID`) VALUES
(1, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', NULL),
(2, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', NULL),
(3, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', NULL),
(4, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', NULL),
(5, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', NULL),
(6, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', NULL),
(7, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', NULL),
(8, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', NULL),
(9, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', NULL),
(10, 'Egyszemélyes szoba', 100, 15, 'Egyszemélyes ágy', 1, 0, 'Wifi,TV', NULL),
(11, 'Tenger oldali szoba', 300, 40, 'Francia ágy', 2, 2, 'Wifi,TV', NULL),
(12, 'Tenger oldali szoba', 300, 40, 'Francia ágy', 2, 2, 'Wifi,TV', NULL),
(13, 'Tenger oldali szoba', 300, 40, 'Francia ágy', 2, 2, 'Wifi,TV', NULL),
(14, 'Tenger oldali szoba', 300, 40, 'Francia ágy', 2, 2, 'Wifi,TV', NULL),
(15, 'Tenger oldali szoba', 300, 40, 'Francia ágy', 2, 2, 'Wifi,TV', NULL),
(16, 'Prémium szoba', 550, 45, 'Francia ágy', 2, 2, 'Wifi,TV,Szauna,Jacuzzi', NULL),
(17, 'Prémium szoba', 550, 45, 'Francia ágy', 2, 2, 'Wifi,TV,Szauna,Jacuzzi', NULL),
(18, 'Prémium szoba', 550, 45, 'Francia ágy', 2, 2, 'Wifi,TV,Szauna,Jacuzzi', NULL),
(19, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', NULL),
(20, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', NULL),
(21, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', NULL),
(22, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', NULL),
(23, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', NULL),
(24, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', NULL),
(25, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', NULL),
(26, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', NULL),
(27, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', NULL),
(28, 'Családi szoba', 350, 45, 'Francia ágy', 4, 2, 'Wifi,TV', NULL),
(29, 'Kétszemélyes szoba', 200, 30, 'Francia ágy', 2, 0, 'Wifi,TV', NULL),
(30, 'Kétszemélyes szoba', 200, 30, 'Francia ágy', 2, 0, 'Wifi,TV', NULL),
(31, 'Kétszemélyes szoba', 200, 30, 'Francia ágy', 2, 0, 'Wifi,TV', NULL),
(32, 'Kétszemélyes szoba', 200, 30, 'Francia ágy', 2, 0, 'Wifi,TV', NULL),
(33, 'Kétszemélyes szoba', 200, 30, 'Francia ágy', 2, 0, 'Wifi,TV', NULL),
(34, 'Kétszemélyes szoba', 200, 20, 'Francia ágy', 2, 0, 'Wifi,TV', NULL),
(35, 'Kétszemélyes szoba', 200, 20, 'Francia ágy', 2, 0, 'Wifi,TV', NULL),
(36, 'Kétszemélyes szoba', 200, 20, 'Francia ágy', 2, 0, 'Wifi,TV', NULL),
(37, 'Kétszemélyes szoba', 200, 20, 'Francia ágy', 2, 0, 'Wifi,TV', NULL),
(38, 'Kétszemélyes szoba', 200, 20, 'Francia ágy', 2, 0, 'Wifi,TV', NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`GuestID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- A tábla indexei `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`ReservationID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
