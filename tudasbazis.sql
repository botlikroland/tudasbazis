-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2016. Nov 06. 19:23
-- Kiszolgáló verziója: 10.1.16-MariaDB
-- PHP verzió: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `tudasbazis`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `ownerid` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `articles`
--

INSERT INTO `articles` (`id`, `ownerid`, `created`, `modified`, `title`, `text`) VALUES
(3, 2, '2016-10-22 21:22:34', '2016-10-28 17:24:39', 'Cím adat egy2', 'szia roli vagyok és ez az első cikk hihihihahaha\r\njejeje\r\nez már a harmadik sor\r\nűúűú'),
(4, 2, '2016-10-27 18:27:53', '0000-00-00 00:00:00', 'Cím adat 2', 'asdasdsadadsad'),
(7, 2, '2016-10-28 17:35:08', '2016-10-28 17:35:08', 'asddsa', 'dsa');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `lastname` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `lastname`, `firstname`) VALUES
(2, 'roli@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'Botlik', 'Roland'),
(3, 'kisnykee', '00a3a38e79b300f9538b952c0f2cb9ff', 'Kun', 'Krisztina');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT a táblához `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
