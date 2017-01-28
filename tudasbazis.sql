-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2017. Jan 28. 17:24
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
  `type` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `articles`
--

INSERT INTO `articles` (`id`, `ownerid`, `type`, `location`, `position`, `created`, `modified`, `title`, `text`) VALUES
(8, 4, 'normal', 4, 3, '2017-01-05 11:42:21', '2017-01-05 11:42:21', 'Ejnye-bejnye lev', '<p style="margin-left:0cm; margin-right:0cm"><span style="color:#000000"><span style="font-family:Calibri"><span style="font-size:medium">Sziasztok!</span></span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><span style="color:#000000"><span style="font-family:Calibri"><span style="font-size:medium">Elstartolt a 2017-es &eacute;v, nem is ak&aacute;rhogy. Meglepet&eacute;s nem &eacute;rt minket, az &eacute;v eleje mindig h&uacute;z&oacute;s, sok feladat, k&eacute;rd&eacute;s, k&eacute;r&eacute;s, &oacute;haj &eacute;s s&oacute;haj gener&aacute;l&oacute;dik minden csapatn&aacute;l. </span></span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><span style="font-family:Calibri"><span style="color:#000000"><span style="font-size:medium">Annak &eacute;rdek&eacute;ben, hogy a k&eacute;rd&eacute;seitekre hamar v&aacute;laszt kapjatok, a k&eacute;r&eacute;seitekre &eacute;s &eacute;szrev&eacute;teleitekre pedig min&eacute;l előbb megold&aacute;st tal&aacute;ljunk, </span></span><span style="color:#c00000"><span style="font-size:medium">k&eacute;rlek, olvass&aacute;tok el </span></span><span style="color:#000000"><span style="font-size:medium">az al&aacute;bbiakat &eacute;s ennek megfelelően j&aacute;rjatok el. </span></span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><span style="font-family:Calibri"><span style="color:#000000"><span style="font-size:medium">A BO supportot &eacute;rintő k&eacute;rd&eacute;sekben </span></span><strong><span style="color:#000000"><span style="font-size:medium">minden bejelent&eacute;st e-mailben k&eacute;rek</span></span></strong><span style="color:#000000"><span style="font-size:medium">, a </span></span></span><a href="mailto:support@profession.hu"><span style="color:#0563c1"><span style="font-family:Calibri"><span style="font-size:medium">support@profession.hu</span></span></span></a><span style="color:#000000"><span style="font-family:Calibri"><span style="font-size:medium"> e-mail c&iacute;mre. </span></span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><span style="font-family:Calibri"><span style="color:#000000"><span style="font-size:medium">K&eacute;rlek, (ha megoldhat&oacute;), ne keressetek skype-on, szem&eacute;lyesen, mobilon &eacute;s vezet&eacute;kes telefonon, &eacute;s ne &iacute;rjatok supportot ig&eacute;nylő leveleket a k&ouml;zvetlen e-mail c&iacute;memre, mert nem fogom priorban kezelni a k&eacute;r&eacute;seteket. Sőt, lehet, hogy &eacute;szre sem veszem hossz&uacute; ideig, hogy kerestetek, vagy k&uuml;ldtetek skype &uuml;zenetet, mivel a support leveleket dolgozom fel. Rendszerle&aacute;ll&aacute;s, vagy blokkol&oacute; hiba eset&eacute;n term&eacute;szetesen el&eacute;rhető vagyok telefonon (</span></span><span style="color:#000000"><span style="font-size:medium">T +36 1 430 6921</span></span> <span style="color:#000000"><span style="font-size:medium">M +36 30 485 3114</span></span><span style="color:#000000"><span style="font-size:medium">)</span></span><span style="color:#000000"><span style="font-size:medium">. </span></span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><span style="color:#000000"><span style="font-family:Calibri"><span style="font-size:medium">Tudom, n&eacute;ha idegt&eacute;pő kiv&aacute;rni, m&iacute;g v&aacute;laszt kaptok a leveletekre, de a megn&ouml;vekedett ig&eacute;nyeket idő feldolgozni, &eacute;s azzal csak lass&iacute;tjuk a folyamatot, ha t&ouml;bb csatorn&aacute;n folynak be az ig&eacute;nyek. K&eacute;rlek, figyeljetek arra is, hogy a gyorsabb &uuml;gyint&eacute;z&eacute;s rem&eacute;ny&eacute;ben ne keress&eacute;tek a BO support helyett Hujbit &eacute;s a fejlesztőket, mert a minket &eacute;rintő k&eacute;rd&eacute;sekben től&uuml;k is azt a v&aacute;laszt fogj&aacute;tok kapni, hogy &iacute;rjatok levelet a </span></span></span><a href="mailto:support@profession.hu"><span style="color:#0563c1"><span style="font-family:Calibri"><span style="font-size:medium">support@profession.hu</span></span></span></a><span style="color:#000000"><span style="font-family:Calibri"><span style="font-size:medium"> &ndash;ra. </span></span></span><span style="font-family:Wingdings"><span style="color:#000000"><span style="font-size:medium">J</span></span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><span style="color:#7030a0"><span style="font-family:Calibri"><span style="font-size:medium">Term&eacute;szetesen egy&eacute;b k&eacute;rd&eacute;sekben, amik nem a BO supporthoz tartoznak, tov&aacute;bbra is lehet Hujbi&eacute;kat, a fejlesztőket &eacute;s engem is k&ouml;zvetlen&uuml;l keresni, ahogy szokt&aacute;tok. </span></span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n\r\n<p><span style="font-size:14px">Egy kis ism&eacute;tl&eacute;s a <a href="mailto:support@profession.hu">support@profession.hu</a> e-mail c&iacute;mmel kapcsolatban (ezt is olvasd el!): </span></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><span style="font-size:14px">az e-mailek a Topdesk nevű incidenskezelőbe &eacute;rkeznek, ez&eacute;rt kapni fogsz az e-mail be&eacute;rkez&eacute;s&eacute;ről egy rendszerlevelet</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style="font-size:14px">ennek a rendszerlev&eacute;lnek a t&aacute;rgy&aacute;ban van egy incidenssz&aacute;m pl. ilyen: I1701-1330 amivel azonos&iacute;tani tudom a leveledet</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style="font-size:14px">ha eszedbe jut, hogy elfelejtett&eacute;l valamit az előző leveledben, akkor az &uacute;j e-mail t&aacute;rgy&aacute;ba m&aacute;sold be a megkapott incidenssz&aacute;mot (&iacute;gy a Topdesk &ouml;sszefűzi automatikusan az egym&aacute;shoz tartoz&oacute; leveleket, &eacute;n pedig mindent egyben l&aacute;tok)</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style="font-size:14px">minden bek&uuml;ld&ouml;tt e-mailben legyen benne az &ouml;sszes fontos inform&aacute;ci&oacute; (hirdet&eacute;s ID, aj&aacute;nlat azonos&iacute;t&oacute;, hiba&uuml;zenet sz&ouml;vege) sz&ouml;vegk&eacute;nt bem&aacute;solva (ne k&eacute;pkiv&aacute;g&aacute;st k&uuml;ldjetek)</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style="font-size:14px">amennyiben az e-mailetek hi&aacute;nyos, vagy k&eacute;pk&eacute;nt kapok pl. hirdet&eacute;s ID-kat, amit nem tudok kim&aacute;solni, vissza fogom k&uuml;ldeni a levelet adatp&oacute;tl&aacute;sra. Bocs. </span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><span style="color:#000000"><span style="font-family:Calibri"><span style="font-size:medium">K&ouml;sz&ouml;n&ouml;m, hogy figyeltek a fentiekre &eacute;s eszerint j&aacute;rtok el, &eacute;s k&ouml;sz&ouml;n&ouml;m a t&uuml;relmeteket &eacute;s a seg&iacute;ts&eacute;geteket is. </span></span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><span style="color:#000000"><span style="font-family:Calibri"><span style="font-size:medium">Ez egy &aacute;tmeneti időszak, egy&uuml;tt megoldjuk! </span></span></span><span style="font-family:Wingdings"><span style="color:#000000"><span style="font-size:medium">J</span></span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><span style="color:#000000"><span style="font-family:Times New Roman"><span style="font-size:medium"><img src="data:image/png;base64,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" style="height:137px; width:331px" /></span></span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n'),
(23, 2, 'normal', 11, 8, '2017-01-22 20:00:32', '2017-01-22 20:00:32', 'Roliii::)', '<h1 style="background-color:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><strong>kkkkkkRoli &eacute;s Kriszti</strong></h1>\r\n\r\n<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><strong>ez nemtudom mi</strong></div>\r\n\r\n<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><strong>de v&eacute;letlen megnyomtam</strong></div>\r\n\r\n<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><strong>&eacute;s mindig &uacute;j sor j&ouml;n ki</strong></div>\r\n\r\n<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><strong>jajs</strong></div>\r\n\r\n<p>na mostm&aacute;r j&oacute;</p>\r\n\r\n<p><span style="background-color:#800000">hahahahahahaha<span style="color:#ffffff">hihihihiihihihahahahahihihihhiihiha:D:&Eacute;&ndash;;;;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;;;</span></span></p>\r\n\r\n<p><span style="background-color:#800000"><span style="color:#ffffff"><input name="kaki" type="button" value="lnikell" /></span></span>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><span style="font-family:Comic Sans MS,cursive"><span style="font-size:72px">hihiihihah<a href="www.cica.hu"><img alt="" src="http://cicak-macskak.lapunk.hu/tarhely/cicak-macskak/kepek/201403/cicek.jpg" style="height:194px; width:259px" /></a><img alt="devil" src="http://localhost/ckeditor/plugins/smiley/images/devil_smile.png" style="height:23px; width:23px" title="devil" />aha</span></span></p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n'),
(26, 2, 'normal', 4, 1, '2017-01-22 21:30:45', '2017-01-22 21:30:45', '2', '<p>2</p>\r\n'),
(27, 2, 'normal', 4, 2, '2017-01-22 21:30:52', '2017-01-22 21:30:52', '1', '<p>1</p>\r\n'),
(31, 2, 'title', 11, 1, '2017-01-25 13:01:34', '2017-01-25 13:04:21', 'Ez csak egy fejléc', '<p><span style="font-size:22px"><strong>Folyamatok</strong></span></p>\r\n'),
(35, 2, 'normal', 11, 4, '2017-01-25 15:55:31', '2017-01-25 15:55:31', 'cikk2', '<p>fhruosigrl</p>\r\n'),
(36, 2, 'normal', 11, 6, '2017-01-25 15:55:46', '2017-01-25 15:55:46', 'másik1', '<p>freghrt</p>\r\n'),
(37, 2, 'title', 11, 5, '2017-01-25 15:56:08', '2017-01-25 15:56:08', 'Ez csak egy fejléc', '<p><span style="font-size:26px"><span style="font-family:Comic Sans MS,cursive"><strong>Ez egy m&aacute;sik fejl&eacute;c</strong></span></span></p>\r\n'),
(38, 2, 'normal', 11, 3, '2017-01-25 15:56:21', '2017-01-25 15:56:21', 'blablabla', '<p>fiuewhogk</p>\r\n'),
(39, 2, 'normal', 11, 7, '2017-01-25 16:11:05', '2017-01-25 16:11:05', 'tzfg', '<p>zgfugzih</p>\r\n'),
(40, 2, 'normal', 11, 2, '2017-01-28 00:49:06', '2017-01-28 00:49:06', 'hvjbdkjkvhbdfnkv', '<p>vsjknv,nsvs</p>\r\n\r\n<h1><span style="font-size:18px"><span style="background-color:#ff0000">vdv</span></span></h1>\r\n\r\n<p>db</p>\r\n\r\n<p>db</p>\r\n');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `groupmembership`
--

CREATE TABLE `groupmembership` (
  `userid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `groups`
--

CREATE TABLE `groups` (
  `groupid` int(11) NOT NULL,
  `groupname` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `groups`
--

INSERT INTO `groups` (`groupid`, `groupname`) VALUES
(1, 'BackOffice'),
(2, 'Management');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `lastname` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `lastname`, `firstname`) VALUES
(2, 'roland.botlik@profession.hu', '47bce5c74f589f4867dbd57e9ca9f808', 'Botlik', 'Roland'),
(3, 'kisnykee@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'Kun', 'Krisztina'),
(4, 'melinda.major@profession.hu', '5f0fa8b7a7397a3c1a5e746578bd3e59', 'Major', 'Melinda'),
(6, 'timea.hujber@profession.hu', '5f0fa8b7a7397a3c1a5e746578bd3e59', 'Hujber', 'Tímea');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `menu`
--

INSERT INTO `menu` (`id`, `title`, `parentId`) VALUES
(1, 'Platformok', 0),
(2, 'ÁSZF, EAT, FF', 0),
(3, 'Termékek és szolgáltatások', 0),
(4, 'Programok használata', 0),
(5, 'Értékesítés', 0),
(7, 'Hirdetésszerkesztés és szolgáltatások beállítása', 0),
(8, 'Moderálás', 0),
(9, 'Számlázás', 0),
(10, 'Ügyfélkapcsolatok', 0),
(11, 'profession.hu', 1),
(12, 'jobmonitor.hu', 1),
(13, 'munkatarsaim.hu', 1),
(14, 'mobil applikációk', 1),
(15, 'mobil munka', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `permission`
--

CREATE TABLE `permission` (
  `userid` int(11) NOT NULL,
  `permission` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `permission`
--

INSERT INTO `permission` (`userid`, `permission`) VALUES
(2, 'admin'),
(2, 'editor'),
(4, 'admin'),
(4, 'editor');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`groupid`);

--
-- A tábla indexei `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`userid`,`permission`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT a táblához `groups`
--
ALTER TABLE `groups`
  MODIFY `groupid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT a táblához `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT a táblához `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
