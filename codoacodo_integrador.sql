-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2022 a las 03:48:17
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codoacodo_integrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `Id` tinyint(4) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`Id`, `Nombre`) VALUES
(1, 'Administrador'),
(2, 'Orador'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Clave` varchar(60) NOT NULL,
  `Estado` enum('Inactivo','Activo','Baneado') NOT NULL,
  `FechaCreacion` datetime DEFAULT current_timestamp(),
  `Avatar` varchar(1024) NOT NULL,
  `IdTipoUsuario` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Apellido`, `Correo`, `Clave`, `Estado`, `FechaCreacion`, `Avatar`, `IdTipoUsuario`) VALUES
(1, 'Harriot', 'Ben-Aharon', 'hbenaharon0@bing.com', 'H77ixOx', 'Inactivo', '2022-11-28 22:41:24', 'assets/images/profile/default.jpg', 3),
(2, 'Pauly', 'Sowman', 'psowman1@mail.ru', '3gVnCWN9I8Z', 'Inactivo', '2022-03-24 02:23:26', 'assets/images/profile/default.jpg', 3),
(3, 'Juieta', 'Durling', 'jdurling2@nsw.gov.au', 'vilLJ7kx8', 'Inactivo', '2021-12-15 21:43:06', 'assets/images/profile/default.jpg', 3),
(4, 'Hadria', 'Kipling', 'hkipling3@google.de', 'XhkBzz', 'Inactivo', '2022-06-20 20:55:57', 'assets/images/profile/default.jpg', 3),
(5, 'Helsa', 'Josovich', 'hjosovich4@istockphoto.com', '1Zb4xe4wSiT', 'Inactivo', '2021-10-22 19:13:49', 'assets/images/profile/default.jpg', 3),
(6, 'Virginie', 'Woffinden', 'vwoffinden5@va.gov', '0N6i3PKd', 'Inactivo', '2021-02-22 20:06:15', 'assets/images/profile/default.jpg', 3),
(7, 'Richy', 'Taffarello', 'rtaffarello6@pagesperso-orange.fr', 'ZRIwIX9pT', 'Inactivo', '2021-06-15 09:37:58', 'assets/images/profile/default.jpg', 3),
(8, 'Briana', 'Breton', 'bbreton7@over-blog.com', 'QhaLsiQ', 'Inactivo', '2021-06-13 22:48:37', 'assets/images/profile/default.jpg', 3),
(9, 'Kinsley', 'Vasilyonok', 'kvasilyonok8@bandcamp.com', 'O4XMbd', 'Inactivo', '2022-07-26 03:14:01', 'assets/images/profile/default.jpg', 3),
(10, 'Zebedee', 'Crolla', 'zcrolla9@tuttocitta.it', '9EEC8z3gm', 'Inactivo', '2021-01-16 00:16:12', 'assets/images/profile/default.jpg', 3),
(11, 'Felix', 'Steffan', 'fsteffana@japanpost.jp', 'jxolCm', 'Inactivo', '2022-06-29 18:20:47', 'assets/images/profile/default.jpg', 3),
(12, 'Reggie', 'Cant', 'rcantb@weather.com', 'yjEZo3', 'Inactivo', '2021-05-01 07:45:38', 'assets/images/profile/default.jpg', 3),
(13, 'Merill', 'Ickowicz', 'mickowiczc@japanpost.jp', 'Vm9Bl2aOgXj', 'Inactivo', '2021-11-15 01:08:10', 'assets/images/profile/default.jpg', 3),
(14, 'Rochell', 'Sparry', 'rsparryd@multiply.com', 'f07dX2Dx', 'Inactivo', '2021-06-15 12:14:19', 'assets/images/profile/default.jpg', 3),
(15, 'Scarlet', 'Jaquemar', 'sjaquemare@php.net', 'JYc4Rcl00', 'Inactivo', '2022-03-11 15:32:55', 'assets/images/profile/default.jpg', 3),
(16, 'Jenda', 'Chatelet', 'jchateletf@lulu.com', 'RIxxyv', 'Inactivo', '2022-03-10 23:08:38', 'assets/images/profile/default.jpg', 3),
(17, 'Sibilla', 'Mcwhinney', 'smcwhinneyg@artisteer.com', '7pCfIF09NXQ', 'Inactivo', '2021-07-07 22:20:45', 'assets/images/profile/default.jpg', 3),
(18, 'Guntar', 'Kolin', 'gkolinh@linkedin.com', 'q3BdrI', 'Inactivo', '2022-04-24 01:54:55', 'assets/images/profile/default.jpg', 3),
(19, 'Paulie', 'Jeskins', 'pjeskinsi@dell.com', 'UuhgrPqv1', 'Inactivo', '2022-05-15 11:38:37', 'assets/images/profile/default.jpg', 3),
(20, 'Dionisio', 'Matskevich', 'dmatskevichj@pbs.org', 'HqLeeDEUV4X', 'Inactivo', '2022-12-27 11:58:50', 'assets/images/profile/default.jpg', 3),
(21, 'Hercules', 'Rois', 'hroisk@jalbum.net', 'uqkBSf0JmW8', 'Inactivo', '2021-06-30 12:15:11', 'assets/images/profile/default.jpg', 3),
(22, 'Estel', 'Connett', 'econnettl@foxnews.com', 'xWSQNQtuRqtc', 'Inactivo', '2022-06-20 05:55:20', 'assets/images/profile/default.jpg', 3),
(23, 'Tabor', 'Pittford', 'tpittfordm@umich.edu', 'BmIuaWnJy39i', 'Inactivo', '2022-02-25 19:47:44', 'assets/images/profile/default.jpg', 3),
(24, 'Bibi', 'Piddlehinton', 'bpiddlehintonn@reference.com', 'dD4LTc', 'Inactivo', '2021-03-27 10:27:50', 'assets/images/profile/default.jpg', 3),
(25, 'Waylan', 'Krystof', 'wkrystofo@prlog.org', '7I5U8rng8V', 'Inactivo', '2021-10-29 07:55:38', 'assets/images/profile/default.jpg', 3),
(26, 'Lyon', 'Mackie', 'lmackiep@wordpress.org', 'Tafd2Fv', 'Inactivo', '2021-12-08 02:57:25', 'assets/images/profile/default.jpg', 3),
(27, 'Laney', 'McDougal', 'lmcdougalq@sciencedirect.com', '243cNXE9R', 'Inactivo', '2021-05-16 14:51:32', 'assets/images/profile/default.jpg', 3),
(28, 'Tally', 'Dugall', 'tdugallr@go.com', 'aZakoOavP', 'Inactivo', '2022-08-01 00:15:13', 'assets/images/profile/default.jpg', 3),
(29, 'Rois', 'Minico', 'rminicos@yelp.com', '3b8tB4NyWU6', 'Inactivo', '2022-04-06 20:59:34', 'assets/images/profile/default.jpg', 3),
(30, 'Holden', 'Caghy', 'hcaghyt@nifty.com', '2laK7ceCN9V3', 'Inactivo', '2021-02-28 21:17:05', 'assets/images/profile/default.jpg', 3),
(31, 'Helyn', 'Castard', 'hcastardu@parallels.com', 'RDiDnQlD', 'Inactivo', '2022-06-09 10:18:30', 'assets/images/profile/default.jpg', 3),
(32, 'Lotti', 'Copelli', 'lcopelliv@epa.gov', 'FAunvlyiDli9', 'Inactivo', '2021-04-30 00:01:22', 'assets/images/profile/default.jpg', 3),
(33, 'Camella', 'Vannoort', 'cvannoortw@goo.gl', '6YMw41O9k', 'Inactivo', '2022-05-09 18:19:20', 'assets/images/profile/default.jpg', 3),
(34, 'Angelique', 'Gurr', 'agurrx@desdev.cn', 'DGfRLH9uuLw', 'Inactivo', '2022-05-07 00:44:57', 'assets/images/profile/default.jpg', 3),
(35, 'Bevon', 'Morsley', 'bmorsleyy@barnesandnoble.com', 'UPgKDU0dPXn', 'Inactivo', '2022-12-10 13:19:45', 'assets/images/profile/default.jpg', 3),
(36, 'Ilaire', 'Lyddiatt', 'ilyddiattz@latimes.com', '0d4MKWpW', 'Inactivo', '2021-05-22 12:52:55', 'assets/images/profile/default.jpg', 3),
(37, 'Sheilakathryn', 'Knowlden', 'sknowlden10@cbc.ca', 'zCYdkMcw', 'Inactivo', '2022-03-29 18:56:22', 'assets/images/profile/default.jpg', 3),
(38, 'Cammie', 'Blader', 'cblader11@odnoklassniki.ru', 'CQh327o0', 'Inactivo', '2022-09-14 08:40:56', 'assets/images/profile/default.jpg', 3),
(39, 'Moses', 'Elleton', 'melleton12@intel.com', 'YKDjrnrHgMKX', 'Inactivo', '2021-04-22 22:29:27', 'assets/images/profile/default.jpg', 3),
(40, 'Camey', 'Iddison', 'ciddison13@comsenz.com', 'EYpyrE', 'Inactivo', '2021-01-09 14:31:25', 'assets/images/profile/default.jpg', 3),
(41, 'Philomena', 'Muro', 'pmuro14@tripod.com', 'b393Ec9', 'Inactivo', '2022-10-20 08:48:41', 'assets/images/profile/default.jpg', 3),
(42, 'Arch', 'Castells', 'acastells15@biglobe.ne.jp', 'qRw7yx', 'Inactivo', '2022-10-17 19:43:03', 'assets/images/profile/default.jpg', 3),
(43, 'Leonard', 'Blakebrough', 'lblakebrough16@netvibes.com', '5ZJRoEXKZ', 'Inactivo', '2021-02-27 12:26:31', 'assets/images/profile/default.jpg', 3),
(44, 'Keriann', 'Devonald', 'kdevonald17@webnode.com', 'BkLR8zzNX9qJ', 'Inactivo', '2021-07-04 06:29:54', 'assets/images/profile/default.jpg', 3),
(45, 'Roda', 'Spellar', 'rspellar18@360.cn', 'FQS5vHWGIRJ', 'Inactivo', '2021-10-03 20:00:22', 'assets/images/profile/default.jpg', 3),
(46, 'Torre', 'MacInherney', 'tmacinherney19@netlog.com', 'C9cuD1Pe', 'Inactivo', '2021-06-04 18:50:50', 'assets/images/profile/default.jpg', 3),
(47, 'Brig', 'Matussow', 'bmatussow1a@goo.gl', 'm8FNPkcvUZ', 'Inactivo', '2022-10-08 20:53:19', 'assets/images/profile/default.jpg', 3),
(48, 'Scot', 'Graver', 'sgraver1b@npr.org', 'JtGijUkB78Xe', 'Inactivo', '2022-10-19 22:59:45', 'assets/images/profile/default.jpg', 3),
(49, 'Dorine', 'Aicken', 'daicken1c@elpais.com', 'ZQmFLNN8mo', 'Inactivo', '2021-04-08 18:34:09', 'assets/images/profile/default.jpg', 3),
(50, 'Hube', 'Doudny', 'hdoudny1d@uol.com.br', 'YthcjF', 'Inactivo', '2021-01-05 01:50:07', 'assets/images/profile/default.jpg', 3),
(51, 'Niccolo', 'Tyer', 'ntyer1e@live.com', 'SESK89p', 'Inactivo', '2021-08-12 04:43:55', 'assets/images/profile/default.jpg', 3),
(52, 'Jenica', 'Carss', 'jcarss1f@webnode.com', '0ysBY3k', 'Inactivo', '2021-04-08 10:04:03', 'assets/images/profile/default.jpg', 3),
(53, 'Wolf', 'Clears', 'wclears1g@bloglines.com', 'o1xWfSpU', 'Inactivo', '2021-04-21 02:43:24', 'assets/images/profile/default.jpg', 3),
(54, 'Raf', 'Longland', 'rlongland1h@multiply.com', 'OxvXYxC', 'Inactivo', '2022-06-20 14:49:24', 'assets/images/profile/default.jpg', 3),
(55, 'Kristi', 'Cettell', 'kcettell1i@booking.com', 'sWLvGD', 'Inactivo', '2022-09-04 14:39:33', 'assets/images/profile/default.jpg', 3),
(56, 'Elbertine', 'Ilive', 'eilive1j@cbsnews.com', 'hGkEQL6', 'Inactivo', '2022-05-29 22:59:19', 'assets/images/profile/default.jpg', 3),
(57, 'Gilbert', 'Lindenboim', 'glindenboim1k@prnewswire.com', '79eRqWe', 'Inactivo', '2022-11-28 01:49:05', 'assets/images/profile/default.jpg', 3),
(58, 'Conni', 'Rockey', 'crockey1l@studiopress.com', 'uOa22IZsYBu', 'Inactivo', '2021-12-09 07:54:50', 'assets/images/profile/default.jpg', 3),
(59, 'Rickie', 'Willgoose', 'rwillgoose1m@indiatimes.com', 'TyOlrni', 'Inactivo', '2021-12-12 06:39:32', 'assets/images/profile/default.jpg', 3),
(60, 'Rosetta', 'Walles', 'rwalles1n@jiathis.com', '8GzWVyPZ', 'Inactivo', '2022-03-17 05:52:35', 'assets/images/profile/default.jpg', 3),
(61, 'Shelley', 'Bickerdike', 'sbickerdike1o@time.com', 'QvdV15V', 'Inactivo', '2022-06-24 15:37:02', 'assets/images/profile/default.jpg', 3),
(62, 'Warden', 'Teanby', 'wteanby1p@goodreads.com', 'pe6zus6r3', 'Inactivo', '2021-02-04 06:43:24', 'assets/images/profile/default.jpg', 3),
(63, 'Wallace', 'Blunsum', 'wblunsum1q@nifty.com', '5NEPDF', 'Inactivo', '2022-11-25 00:10:09', 'assets/images/profile/default.jpg', 3),
(64, 'Corey', 'Sapshed', 'csapshed1r@google.com.au', 'BjACun', 'Inactivo', '2021-09-02 04:45:29', 'assets/images/profile/default.jpg', 3),
(65, 'Axe', 'Widocks', 'awidocks1s@tumblr.com', 'TfWLu4kFPU', 'Inactivo', '2022-07-17 07:20:55', 'assets/images/profile/default.jpg', 3),
(66, 'Vilma', 'Boggers', 'vboggers1t@t-online.de', 'TNSavel', 'Inactivo', '2022-02-10 01:44:38', 'assets/images/profile/default.jpg', 3),
(67, 'Astrid', 'Wrist', 'awrist1u@apple.com', 'MI3118ipxS4', 'Inactivo', '2021-04-30 11:10:03', 'assets/images/profile/default.jpg', 3),
(68, 'Catha', 'Eate', 'ceate1v@fc2.com', '2wTMVfSY', 'Inactivo', '2022-06-17 17:08:27', 'assets/images/profile/default.jpg', 3),
(69, 'Franni', 'Scanderet', 'fscanderet1w@xinhuanet.com', 'BFRnDDURyBo', 'Inactivo', '2021-06-16 13:26:00', 'assets/images/profile/default.jpg', 3),
(70, 'Allistir', 'Elen', 'aelen1x@icq.com', 'LKJaejsi', 'Inactivo', '2022-12-22 05:00:07', 'assets/images/profile/default.jpg', 3),
(71, 'Larisa', 'Pranger', 'lpranger1y@51.la', 'lTt0aJAZh', 'Inactivo', '2022-01-25 16:17:44', 'assets/images/profile/default.jpg', 3),
(72, 'Moe', 'Mouncher', 'mmouncher1z@nih.gov', 'lwB4ALZz2lMI', 'Inactivo', '2022-04-08 23:51:59', 'assets/images/profile/default.jpg', 3),
(73, 'Jennee', 'Pembery', 'jpembery20@aol.com', 'qMdQdfWvs', 'Inactivo', '2022-10-20 22:50:24', 'assets/images/profile/default.jpg', 3),
(74, 'Frazier', 'McDaid', 'fmcdaid21@com.com', 'exw2vrYfO', 'Inactivo', '2022-02-09 17:15:57', 'assets/images/profile/default.jpg', 3),
(75, 'Morissa', 'Yeardley', 'myeardley22@github.io', 'cmJPVYK1YfW', 'Inactivo', '2022-03-19 05:29:40', 'assets/images/profile/default.jpg', 3),
(76, 'Marietta', 'Eynaud', 'meynaud23@unesco.org', 'mAMQdFZV', 'Inactivo', '2021-08-16 00:21:12', 'assets/images/profile/default.jpg', 3),
(77, 'Alma', 'Shemming', 'ashemming24@yellowbook.com', 'eTm7gTHKb24', 'Inactivo', '2022-08-16 23:27:24', 'assets/images/profile/default.jpg', 3),
(78, 'Nev', 'Shenton', 'nshenton25@google.it', 'FcAQFPOjg', 'Inactivo', '2022-07-05 00:08:32', 'assets/images/profile/default.jpg', 3),
(79, 'Tish', 'Bellord', 'tbellord26@canalblog.com', '0OkMmxJ7X5Gt', 'Inactivo', '2022-05-06 20:54:45', 'assets/images/profile/default.jpg', 3),
(80, 'Minnnie', 'Burd', 'mburd27@woothemes.com', 'QOt4VvQB83', 'Inactivo', '2022-04-12 16:35:52', 'assets/images/profile/default.jpg', 3),
(81, 'Calypso', 'Emor', 'cemor28@elegantthemes.com', '3nsFoYo2', 'Inactivo', '2022-09-05 04:17:11', 'assets/images/profile/default.jpg', 3),
(82, 'Bev', 'Overell', 'boverell29@chron.com', 'ANjYww', 'Inactivo', '2021-08-12 01:42:42', 'assets/images/profile/default.jpg', 3),
(83, 'Rozalie', 'Prawle', 'rprawle2a@cdc.gov', 'EKN4waBH', 'Inactivo', '2022-05-22 06:31:11', 'assets/images/profile/default.jpg', 3),
(84, 'Whittaker', 'Wigg', 'wwigg2b@hhs.gov', '64ZYL5Z', 'Inactivo', '2022-06-12 11:44:11', 'assets/images/profile/default.jpg', 3),
(85, 'Mable', 'Dent', 'mdent2c@bigcartel.com', 'P4pTFf38fQhZ', 'Inactivo', '2022-10-16 22:34:18', 'assets/images/profile/default.jpg', 3),
(86, 'Orton', 'Mapledoore', 'omapledoore2d@ifeng.com', 'yCV8KuoHP', 'Inactivo', '2022-02-23 13:18:11', 'assets/images/profile/default.jpg', 3),
(87, 'Alano', 'O\'Bradane', 'aobradane2e@tinypic.com', 'IVqWmPi', 'Inactivo', '2022-04-30 13:01:29', 'assets/images/profile/default.jpg', 3),
(88, 'Virgie', 'Harbidge', 'vharbidge2f@mail.ru', '7PtygehRcK', 'Inactivo', '2022-10-18 21:58:28', 'assets/images/profile/default.jpg', 3),
(89, 'Aime', 'Storrar', 'astorrar2g@uiuc.edu', 'bqwRggeRnEjZ', 'Inactivo', '2021-05-01 20:17:46', 'assets/images/profile/default.jpg', 3),
(90, 'Justino', 'Smedley', 'jsmedley2h@oaic.gov.au', 'CxrhXK9m5A', 'Inactivo', '2022-05-21 22:02:57', 'assets/images/profile/default.jpg', 3),
(91, 'Zilvia', 'Goater', 'zgoater2i@bigcartel.com', 'vNJ4huV', 'Inactivo', '2022-01-23 18:53:23', 'assets/images/profile/default.jpg', 3),
(92, 'Noelani', 'Hagergham', 'nhagergham2j@networkadvertising.org', '9LccrQ', 'Inactivo', '2022-05-10 08:35:28', 'assets/images/profile/default.jpg', 3),
(93, 'Geno', 'Duligall', 'gduligall2k@lycos.com', '67IQe8Tr', 'Inactivo', '2021-02-09 08:00:22', 'assets/images/profile/default.jpg', 3),
(94, 'Vaughan', 'Ruddell', 'vruddell2l@stumbleupon.com', '0KS5vdq', 'Inactivo', '2022-05-30 01:48:33', 'assets/images/profile/default.jpg', 3),
(95, 'Myrwyn', 'Beasley', 'mbeasley2m@vistaprint.com', 'oUrEFcZ9', 'Inactivo', '2021-10-19 14:54:02', 'assets/images/profile/default.jpg', 3),
(96, 'Margot', 'Lettsom', 'mlettsom2n@ft.com', 'yoWV0ye', 'Inactivo', '2022-11-04 12:58:35', 'assets/images/profile/default.jpg', 3),
(97, 'Karl', 'Warrington', 'kwarrington2o@forbes.com', 'X1U2P6b', 'Inactivo', '2022-09-22 14:00:12', 'assets/images/profile/default.jpg', 3),
(98, 'Augusta', 'Mulcock', 'amulcock2p@ifeng.com', 'FP4yVF', 'Inactivo', '2022-01-30 17:01:16', 'assets/images/profile/default.jpg', 3),
(99, 'Konstance', 'Eliyahu', 'keliyahu2q@hao123.com', 'iubqXZ3YvXC', 'Inactivo', '2021-11-10 11:06:50', 'assets/images/profile/default.jpg', 3),
(100, 'Oralee', 'Size', 'osize2r@xinhuanet.com', 'QCvh3UB', 'Inactivo', '2022-04-13 02:39:13', 'assets/images/profile/default.jpg', 3),
(101, 'Ana', 'Gonzalez', 'cliente@cliente.com', '123', 'Inactivo', '2022-04-13 02:39:13', 'assets/images/profile/default.jpg', 3),
(102, 'Bill', 'Gates', 'orador@orador.com', '123', 'Inactivo', '2022-04-13 02:39:13', 'assets/images/profile/orador.jpg', 2),
(103, 'Nicolás', 'Calcagno', 'admin@admin.com', '123', 'Inactivo', '2022-04-13 02:39:13', 'assets/images/profile/administrador.jpg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdTipoUsuario` (`IdTipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`IdTipoUsuario`) REFERENCES `tipo_usuario` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
