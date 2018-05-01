-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 12:49 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useri`
--

-- --------------------------------------------------------

--
-- Table structure for table `comenzi`
--

CREATE TABLE `comenzi` (
  `id` int(6) UNSIGNED NOT NULL,
  `idc` int(6) NOT NULL,
  `p1` int(6) DEFAULT NULL,
  `c1` int(6) DEFAULT NULL,
  `p2` int(6) DEFAULT NULL,
  `c2` int(6) DEFAULT NULL,
  `p3` int(6) DEFAULT NULL,
  `c3` int(6) DEFAULT NULL,
  `p4` int(6) DEFAULT NULL,
  `c4` int(6) DEFAULT NULL,
  `p5` int(6) DEFAULT NULL,
  `c5` int(6) DEFAULT NULL,
  `p6` int(6) DEFAULT NULL,
  `c6` int(6) DEFAULT NULL,
  `p7` int(6) DEFAULT NULL,
  `c7` int(6) DEFAULT NULL,
  `p8` int(6) DEFAULT NULL,
  `c8` int(6) DEFAULT NULL,
  `p9` int(6) DEFAULT NULL,
  `c9` int(6) DEFAULT NULL,
  `p10` int(6) DEFAULT NULL,
  `c10` int(6) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `p11` int(6) NOT NULL,
  `c11` int(6) NOT NULL,
  `p12` int(6) NOT NULL,
  `c12` int(6) NOT NULL,
  `p13` int(6) NOT NULL,
  `c13` int(6) NOT NULL,
  `p14` int(6) NOT NULL,
  `c14` int(6) NOT NULL,
  `p15` int(6) NOT NULL,
  `c15` int(6) NOT NULL,
  `p16` int(6) NOT NULL,
  `c16` int(6) NOT NULL,
  `p17` int(6) NOT NULL,
  `c17` int(11) NOT NULL,
  `p18` int(11) NOT NULL,
  `c18` int(11) NOT NULL,
  `p19` int(11) NOT NULL,
  `c19` int(11) NOT NULL,
  `p20` int(11) NOT NULL,
  `c20` int(11) NOT NULL,
  `p21` int(11) NOT NULL,
  `c21` int(11) NOT NULL,
  `p22` int(11) NOT NULL,
  `c22` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comenzi`
--

INSERT INTO `comenzi` (`id`, `idc`, `p1`, `c1`, `p2`, `c2`, `p3`, `c3`, `p4`, `c4`, `p5`, `c5`, `p6`, `c6`, `p7`, `c7`, `p8`, `c8`, `p9`, `c9`, `p10`, `c10`, `date`, `p11`, `c11`, `p12`, `c12`, `p13`, `c13`, `p14`, `c14`, `p15`, `c15`, `p16`, `c16`, `p17`, `c17`, `p18`, `c18`, `p19`, `c19`, `p20`, `c20`, `p21`, `c21`, `p22`, `c22`) VALUES
(5, 10, 1, 2, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-24 19:06:35', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 10, 1, 2, 2, 5, NULL, NULL, NULL, NULL, NULL, NULL, 6, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-24 19:40:53', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, 10, NULL, NULL, '2018-04-25 15:35:52', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 20, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-25 16:00:47', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 10, 1, 1, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, 6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-25 16:17:50', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 10, 1, 1, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, 6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-25 16:18:07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 10, 1, 1, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, 6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-25 16:18:07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 10, 1, 1, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, 6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-25 16:18:20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 10, 1, 1, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, 6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-25 16:18:41', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 10, 1, 1, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, 6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-25 16:19:35', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-27 20:31:27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comenzi_facturare_fizica`
--

CREATE TABLE `comenzi_facturare_fizica` (
  `id` int(6) NOT NULL,
  `idc` int(6) NOT NULL,
  `nume` varchar(20) NOT NULL,
  `prenume` varchar(20) NOT NULL,
  `numar_telefon` varchar(20) NOT NULL,
  `id_comanda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comenzi_facturare_fizica`
--

INSERT INTO `comenzi_facturare_fizica` (`id`, `idc`, `nume`, `prenume`, `numar_telefon`, `id_comanda`) VALUES
(19, 10, 'pericica', 'iustin', '0741198606', 5),
(20, 12, 'Pericica', 'Maria', '0740253777', 7),
(21, 13, 'Lacramioara', 'Lacra', '0745585506', 8),
(22, 10, 'pericica', 'iustin', '0741198606', 14),
(23, 10, 'pericica', 'iustin', '0741198606', 0),
(25, 10, 'pericica', 'iustin', '0741198606', 15);

-- --------------------------------------------------------

--
-- Table structure for table `comenzi_facturare_juridica`
--

CREATE TABLE `comenzi_facturare_juridica` (
  `id` int(11) NOT NULL,
  `idc` int(6) NOT NULL,
  `nume_companie` varchar(30) NOT NULL,
  `cui` varchar(20) NOT NULL,
  `numar_inregistrare` varchar(30) NOT NULL,
  `banca` varchar(20) NOT NULL,
  `cont` varchar(40) NOT NULL,
  `judet` varchar(20) NOT NULL,
  `localitate` varchar(20) NOT NULL,
  `adresa` varchar(30) NOT NULL,
  `id_comanda` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comenzi_facturare_juridica`
--

INSERT INTO `comenzi_facturare_juridica` (`id`, `idc`, `nume_companie`, `cui`, `numar_inregistrare`, `banca`, `cont`, `judet`, `localitate`, `adresa`, `id_comanda`) VALUES
(1, 10, 'elmaro', '12312', 'eusuntinregistrat', 'bcr', 'ROsiceva', 'NEAMT', 'ROMAN', 'AVIATOR', 6),
(2, 10, 'elmaro', '12312', 'eusuntinregistrat', 'bcr', 'ROsiceva', 'NEAMT', 'ROMAN', 'AVIATOR', 9);

-- --------------------------------------------------------

--
-- Table structure for table `comenzi_livrare`
--

CREATE TABLE `comenzi_livrare` (
  `id` int(6) NOT NULL,
  `idc` int(6) NOT NULL,
  `id_comanda` int(6) NOT NULL,
  `pret` int(8) NOT NULL,
  `oras` varchar(30) NOT NULL,
  `judet` varchar(30) NOT NULL,
  `strada` varchar(30) NOT NULL,
  `numar` varchar(30) NOT NULL,
  `numar_telefon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comenzi_livrare`
--

INSERT INTO `comenzi_livrare` (`id`, `idc`, `id_comanda`, `pret`, `oras`, `judet`, `strada`, `numar`, `numar_telefon`) VALUES
(5, 10, 5, 59, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606'),
(6, 10, 6, 121, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606'),
(7, 12, 7, 200, 'Roman', 'Neamt', 'Avitorilor', '14A', '0740253777'),
(8, 13, 8, 180, 'Roman', 'Neamt', 'Aviatorilor ', '14 A', '0745585506'),
(9, 10, 9, 100, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606'),
(10, 10, 10, 100, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606'),
(11, 10, 11, 100, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606'),
(12, 10, 12, 100, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606'),
(13, 10, 13, 100, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606'),
(14, 10, 14, 100, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606'),
(15, 10, 0, 24, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606'),
(16, 10, 0, 24, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606'),
(17, 10, 15, 30, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `id` int(6) NOT NULL,
  `idc` int(6) NOT NULL,
  `oras` varchar(20) NOT NULL,
  `judet` varchar(20) NOT NULL,
  `strada` varchar(20) NOT NULL,
  `numar` varchar(20) NOT NULL,
  `numar_telefon` varchar(20) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`id`, `idc`, `oras`, `judet`, `strada`, `numar`, `numar_telefon`, `nume`, `prenume`) VALUES
(12, 10, 'roman', 'neamt', 'aviatorilot', '14 A', '0741198606', 'pericica', 'iustin'),
(13, 12, 'Roman', 'Neamt', 'Avitorilor', '14A', '0740253777', 'Pericica', 'Maria'),
(14, 13, 'Roman', 'Neamt', 'Aviatorilor ', '14 A', '0745585506', 'Lacramioara', 'Lacra');

-- --------------------------------------------------------

--
-- Table structure for table `date_facturare`
--

CREATE TABLE `date_facturare` (
  `id` int(6) NOT NULL,
  `idc` int(6) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  `numar_telefon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_facturare`
--

INSERT INTO `date_facturare` (`id`, `idc`, `nume`, `prenume`, `numar_telefon`) VALUES
(5, 10, 'pericica', 'iustin', '0741198606'),
(6, 12, 'Pericica', 'Maria', '0740253777'),
(7, 13, 'Lacramioara', 'Lacra', '0745585506');

-- --------------------------------------------------------

--
-- Table structure for table `date_facturare_juridica`
--

CREATE TABLE `date_facturare_juridica` (
  `id` int(6) NOT NULL,
  `nume_companie` varchar(50) NOT NULL,
  `cui` varchar(20) NOT NULL,
  `cdirc` varchar(20) NOT NULL,
  `banca` varchar(30) NOT NULL,
  `cont` varchar(30) NOT NULL,
  `judet` varchar(15) NOT NULL,
  `localitate` varchar(20) NOT NULL,
  `adresa` varchar(30) NOT NULL,
  `idc` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_facturare_juridica`
--

INSERT INTO `date_facturare_juridica` (`id`, `nume_companie`, `cui`, `cdirc`, `banca`, `cont`, `judet`, `localitate`, `adresa`, `idc`) VALUES
(12, 'elmaro', '12312', 'eusuntinregistrat', 'bcr', 'ROsiceva', 'NEAMT', 'ROMAN', 'AVIATOR', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `id` int(6) UNSIGNED NOT NULL,
  `tip` varchar(30) NOT NULL,
  `pret` int(6) NOT NULL,
  `text` varchar(100) NOT NULL,
  `stoc` int(10) NOT NULL,
  `textm` varchar(500) NOT NULL,
  `pentru` varchar(30) NOT NULL,
  `material` varchar(100) NOT NULL,
  `culoare` varchar(30) NOT NULL,
  `model` varchar(100) NOT NULL,
  `grupa` int(11) NOT NULL,
  `marime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`id`, `tip`, `pret`, `text`, `stoc`, `textm`, `pentru`, `material`, `culoare`, `model`, `grupa`, `marime`) VALUES
(1, 'man', 3, 'Soseta sport, de barbati lunga; recomandata pentru tenis de camp', 5000, 'Soseta sport, recomandata persoanelor care iubesc miscarea. \r\n Soseta este lunga, textura este adecvata pentru aerarea piciorului.', 'sport', 'bumbac-80% , poliamida-15% , elasthan-5%.', '#eff4fc', 'cu o dunga rosie si una neagra', 0, '[\"40\",\"42\",\"44\"]'),
(2, 'woman', 4, 'Soseta de bumbac pentru femei; recomandata pentru toate anotimpurile.', 15000, 'Soseta de bumbac pentru femei cu variatii de modele-bob de orez, glat, rip.', 'casual', 'bumbac-80%, poliamida-15%, elasthan-5%.e', '#eff4fc', '0', 0, '[\"36\",\"38\"]'),
(3, 'man', 5, 'Soseta scurta, pentru barbati de sport', 10000, 'Soseta recomandata persoanelor iubitoare de sport, drumetii.', 'sport', 'bumbac-70%, lycra-25%, elasthan-5%.', '#000000', '0', 0, '[\"40\",\"42\",\"44\"]'),
(4, 'man', 6, 'Soseta de barbati lunga pentru pantalon lung la ocazii speciale.', 10000, 'Soseta este recomandata persoanelor care sunt invitate la diverse ocazii speciale.', 'elegant', 'bumbac tip bambus-60%, lycra-35%, elasthan-5%.', '#2F333E', '0', 0, '[\"40\",\"42\",\"44\"]'),
(5, 'man', 6, 'Soseta flausat interior pentru iarna', 12000, 'Soseta flausat interior pentru barbati, recomandata anotimpurilor friguroase.', 'casual', 'bumbac-80%, poliamida-15%, elasthan-5%;', '#162D58', '0', 0, '[\"40\",\"42\",\"44\"]'),
(6, 'woman', 5, 'Soseta flausat exterior pentru femei pentru anotimpuri friguroase', 10000, 'Soseta flausat exterior pentru femei, recomandata anotimpului de iarna, foarte practica in momentele de plimbare prin zapada.', 'casual', 'bumbac-80%, poliamida-15%, elasthan-5%;', '#eff4fc', '0', 0, '[\"36\",\"38\"]'),
(7, 'woman', 10, 'Ciorapi port jartier, recomandati femeilor la a doua varsta', 8000, 'Ciorapi pentru femei de varsta a doua in timpuri friguroase din bumbac 100%.', 'casual', 'bumbac-100%;', '#C37F83', '0', 0, '[\"36\",\"38\"]'),
(8, 'man', 7, 'Soseta scurta de sport, pentru barbati', 12000, 'Soseta scurta sport pentru barbatii iubitori de miscare, cu textura foarte fina.', 'sport', 'bumbac-65%, lycra-30%, elasthan-5%.', '#000000', '0', 0, '[\"40\",\"42\",\"44\"]'),
(9, 'woman', 7, 'Soseta scurta de sport, pentru femei', 10000, 'Soseta scurta sport pentru femei iubitoare de miscare, cu textura foarte fina.', 'sport', '65%-bumbac, 30%-lycra, 5%-elasthan.', '#eff4fc', 'buline', 1, '[\"36\",\"38\"]'),
(10, 'children', 5, 'Soseta flausat exterior pentru copii', 8000, 'Soseta flausat exterior pentru copii, recomandata anotimpului rece.', 'casual', 'bumbac-80%, poliamida-15%, elasthan-5%;', '#161D3B', '0', 0, '[\"18\",\"20\",\"22\"]'),
(11, 'woman', 5, 'Soseta scurta, pentru femei, de sport', 8000, 'Soseta recomandata persoanelor iubitoare de sport, drumetii.', 'sport', 'bumbac-70%, lycra-25%, elasthan-5%.', '#eff4fc', '0', 0, '[\"36\",\"38\"]'),
(12, 'man', 5, 'Soseta flausat exterior de barbati pentru anotimpuri friguroase', 12000, 'Soseta flausat exterior pentru barbati, recomandata anotimpului de iarna, foarte practica in momentele de plimbare prin zapada.', 'casual', 'bumbac-80%, poliamida-15%, elasthan-5%;', '#000000', '0', 0, '[\"40\",\"42\",\"44\"]'),
(13, 'woman', 6, 'Dres femei poliamida 20 DEN', 20000, 'Dres femei poliamida 20 DEN, pentru uz cotidian, comod si relaxant.', 'casual', 'poliamida-95%, 5%-elasthan.', '#967765', '0', 0, 'dres'),
(14, 'woman', 8, 'Soseta bumbac cu lycra pentru femei', 5000, 'Soseta bumbac cu lycra pentru femei, cu eticheta fina, fara cusatura.', 'casual', '65%-bumbac, 30%-lycra, 5%-elasthan.', '#C19FD1', '0', 0, '[\"36\",\"38\"]'),
(15, 'woman', 8, 'Dres femei lycra 20 DEN ', 20000, 'Dres femei lycra 20 DEN, pentru uz cotidian, comod si relaxant.', 'casual', 'poliamida-80%, 15%-lycra, 5%-elasthan.', '#52413A', '0', 0, 'dres'),
(16, 'woman', 10, 'Dres femei din microfibra 70 DEN', 15000, 'Dres femei din microfibra 70 DEN, marimi de la 2 -> 6, culori: bej, gri, negru.', 'casual', 'microfibra-80%, lycra-15%, elasthan-5%. ', '#231E24', '0', 0, 'dres'),
(17, 'woman', 4, 'Sosete femei 3/4 lycra (gambalete)', 10000, 'Sosete femei 3/4 lycra, gambalete, marime universala, culori:bej, negru.\r\n 2 perechi/plic.', 'casual', 'poliamida-80%, lycra-15%, elasthan-5%.', '#624c3e', '0', 0, 'universala'),
(18, 'woman', 15, 'Colanti elasticizati 70 DEN ', 8000, 'Colanti elasticizati 70 DEN, marimi si culori diferite, se recomanda pentru anotimpuri reci.', 'casual', 'microfibra-80%, lycra-15%, 5%-elasthan.', '#000000', '0', 0, 'dres'),
(19, 'woman', 3, 'Sosete 3/4 poliamida (gambalete)', 15000, 'Sosete 3/4 poliamida (gambalete), marimi universale, culori:bej, negru.', 'casual', 'poliamida-95%, elasthan-5%.', '#AF806C', '0', 0, 'dres'),
(20, 'children', 4, 'Dres fetite microfibra 40 DEN', 10000, 'Dres de fetite microfibra 40 DEN, marimi de la 2 ani -> 12 ani, culori diferite:alb, roz, crem, rosu, violet, negru. Recomandate anotimpurilor primavara si toamna.', 'casual', 'microfibra-80%, 15%-lycra, 5%-elasthan.', '#000000', '0', 0, '[\"18\",\"20\",\"22\"]'),
(21, 'man', 7, 'Sosete bumbac + lycra pentru barbati', 12000, 'Sosete de bumbac + lycra pentru barbati, marimi si culori diferite pentru ocazii speciale.', 'casual', 'bumbac-80%, lycra-15%, elasthan-5%.', '#D6DDE9', '3 linii cu cate 3 cerculete pe fiecare', 2, '[\"40\",\"42\",\"44\"]'),
(22, 'children', 4, 'Soseta pentru copii', 70, 'Soseta pentru copii de 2->6 ani foarte dragute.', 'casual', 'bumbac-75%, poliamida-20%, elasthan-5%.', '#F6E846', '0', 0, '[\"18\",\"20\",\"22\"]'),
(23, 'woman', 7, 'Soseta scurta de sport, pentru femei', 10000, 'Soseta scurta sport pentru femei iubitoare de miscare, cu textura foarte fina.', 'sport', '65%-bumbac, 30%-lycra, 5%-elasthan.', '#eff4fc', 'stelute', 1, '[\"36\",\"38\"]'),
(24, 'man', 7, 'Sosete bumbac + lycra pentru barbati', 12000, 'Sosete de bumbac + lycra pentru barbati, marimi si culori diferite pentru ocazii speciale.', 'casual', 'bumbac-80%, lycra-15%, elasthan-5%.', '#25292F', '2 grupe de linii despartite de 3 forme geometrice', 2, '[\"40\",\"42\",\"44\"]'),
(25, 'man', 7, 'Sosete bumbac + lycra pentru barbati', 12000, 'Sosete de bumbac + lycra pentru barbati, marimi si culori diferite pentru ocazii speciale.', 'casual', 'bumbac-80%, lycra-15%, elasthan-5%.', '#1F2229', 'o linie formata din diferite modele', 2, '[\"40\",\"42\",\"44\"]'),
(26, 'man', 7, 'Sosete bumbac + lycra pentru barbati', 12000, 'Sosete de bumbac + lycra pentru barbati, marimi si culori diferite pentru ocazii speciale.', 'casual', 'bumbac-80%, lycra-15%, elasthan-5%.', '#1D2F4E', 'simplu- albastru fin', 2, '[\"40\",\"42\",\"44\"]');

-- --------------------------------------------------------

--
-- Table structure for table `produsec`
--

CREATE TABLE `produsec` (
  `idp` int(6) DEFAULT NULL,
  `idc` int(6) DEFAULT NULL,
  `cant` int(10) DEFAULT NULL,
  `marime` varchar(20) NOT NULL,
  `grosime` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produsec`
--

INSERT INTO `produsec` (`idp`, `idc`, `cant`, `marime`, `grosime`) VALUES
(0, 0, 2, '', ''),
(3, 10, 2, '42', ''),
(15, 10, 3, '5', '40DEN');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_nrtelefon` varchar(30) NOT NULL,
  `user_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_name`, `user_nrtelefon`, `user_password`) VALUES
(10, 'iustin', 'pericica', 'iustinpericica@yahoo.com', 'iustin16', '0741198606', 'iustinel'),
(11, 'Pericica', 'Pericica', 'Iustinpericica@yahoo.com', 'iustin', '0741198606', '1234'),
(12, 'Maria', 'PericicÄƒ', 'pericicamaria@rocketmail.com', 'Maria24', '0742053777', 'acasa.ro'),
(13, 'LacramioaraL', 'Pricope', 'pericicamaria@rocketmail.com', 'Lacramioara', '0745585506', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comenzi`
--
ALTER TABLE `comenzi`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `comenzi_facturare_fizica`
--
ALTER TABLE `comenzi_facturare_fizica`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_comanda` (`id_comanda`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `comenzi_facturare_juridica`
--
ALTER TABLE `comenzi_facturare_juridica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comenzi_livrare`
--
ALTER TABLE `comenzi_livrare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idc` (`idc`);

--
-- Indexes for table `date_facturare`
--
ALTER TABLE `date_facturare`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idc` (`idc`);

--
-- Indexes for table `date_facturare_juridica`
--
ALTER TABLE `date_facturare_juridica`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idc` (`idc`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comenzi_facturare_fizica`
--
ALTER TABLE `comenzi_facturare_fizica`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comenzi_facturare_juridica`
--
ALTER TABLE `comenzi_facturare_juridica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comenzi_livrare`
--
ALTER TABLE `comenzi_livrare`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `date_facturare`
--
ALTER TABLE `date_facturare`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `date_facturare_juridica`
--
ALTER TABLE `date_facturare_juridica`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
