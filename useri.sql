-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 01:58 PM
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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comenzi`
--

INSERT INTO `comenzi` (`id`, `idc`, `p1`, `c1`, `p2`, `c2`, `p3`, `c3`, `p4`, `c4`, `p5`, `c5`, `p6`, `c6`, `p7`, `c7`, `p8`, `c8`, `p9`, `c9`, `p10`, `c10`, `date`) VALUES
(16, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(17, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(18, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(19, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(20, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(21, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(22, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(23, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(24, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(25, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(26, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:23:46'),
(27, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:24:27'),
(28, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:24:29'),
(29, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:41:53'),
(30, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:41:53'),
(31, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:42:37'),
(32, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:42:51'),
(33, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:45:55'),
(34, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:47:40'),
(35, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:47:49'),
(36, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:48:03'),
(37, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:48:38'),
(38, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:48:46'),
(39, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:52:45'),
(40, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:52:59'),
(41, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:53:06'),
(42, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:53:16'),
(43, 4, 1, 2, 2, 6, NULL, NULL, NULL, NULL, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-19 10:56:54');

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
(6, 4, 'pericica', ' iustin', '07noidoi', 23),
(7, 4, 'pericica', ' iustin', '07noidoi', 24),
(8, 4, 'pericica', ' iustin', '07noidoi', 27),
(9, 4, 'pericica', ' iustin', '07noidoi', 28),
(10, 4, 'pericica', ' iustin', '07noidoi', 34),
(11, 4, 'pericica', ' iustin', '07noidoi', 35),
(12, 4, 'pericica', ' iustin', '07noidoi', 36),
(13, 4, 'pericica', ' iustin', '07noidoi', 37),
(14, 4, 'pericica', ' iustin', '07noidoi', 39),
(15, 4, 'pericica', ' iustin', '07noidoi', 43);

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
(1, 0, 'iustin', 'RO123', 'just_teen', 'BCR', 'N AM CONT', 'NEAMT', 'ROMAN', 'AVIATOR', 22),
(2, 0, 'iustin', 'RO123', 'just_teen', 'BCR', 'N AM CONT', 'NEAMT', 'ROMAN', 'AVIATOR', 25),
(3, 4, 'iustin', 'RO123', 'just_teen', 'BCR', 'N AM CONT', 'NEAMT', 'ROMAN', 'AVIATOR', 26);

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
(1, 4, 42, 143, 'roman', 'neamt', 'aviator', '14', '07noidoi');

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
(8, 4, 'roman', 'neamt', 'aviator', '14', '07noidoi', 'pericica', ' iustin');

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
(1, 4, 'pericica', ' iustin', '07noidoi');

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
(1, 'iustin', 'RO123', 'just_teen', 'BCR', 'N AM CONT', 'NEAMT', 'ROMAN', 'AVIATOR', 4);

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

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `email`, `reg_date`) VALUES
(1, 'you', 'kiss@gmail.com', '2018-04-12 19:06:47'),
(2, 'pericica emil', 'emilelmaroo@yahoo.co.uk', '2018-04-12 20:18:06'),
(3, 'mami', 'mata@gmail.com', '2018-04-18 15:09:59');

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
  `textm` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`id`, `tip`, `pret`, `text`, `stoc`, `textm`) VALUES
(1, 'man', 7, 'Soseta de barbati, de bumbac', 135, 'Soseta bumbac de barbati, cu inscriptionare de tip laser, rezistenta la peset 40 de spalari, marca El Maro'),
(2, 'children', 15, '3 Sosete, marca Nike-divizia Jordan', 60, 'Sosete marca Nike, se remarca prin faptul ca sunt rezistente, fiind sub brandul lui Michal Jordan.'),
(3, 'children', 12, 'Sosete de copii rosii', 300, 'Sosete de copii rosii cu stickere si forme diferte inscriptionate pe ele.'),
(4, 'man', 12, 'Soseta de barbati classy', 400, 'Soseta super faina, cu multe multe multe forme si e super pentru costum.'),
(5, 'woman', 13, 'Soseta marca Adidas, de bumbac', 90, 'Soseta marca Adidas foarte rezistenta in timp, recomandata pentru sport si mai multe chestii.'),
(6, 'woman', 16, 'Soseta adidas cu diferite forme', 130, 'Soseta adidas cu diferite forme, culoare:negru'),
(7, 'woman', 9, 'Sosete in forma de albina', 90, 'Sosete in forma de albine cu forme in forma de albine, culori deschise si placute\r\n'),
(8, 'man', 18, 'Soseta adidas negru cu 3 dungi albe-clasic', 65, 'Soseta adidas cu clasicele 3 dungi, la prima vedere cuceresc orice ochi.'),
(9, 'children', 20, 'Soseta Calvin Klein pentru copii', 60, 'Soseta CK care, material bumbac, nu poate sa rateze vreo privire.'),
(10, 'children', 6, 'Soseta de copii, foarte atractiva', 500, 'material:50% polister , 50% bumbac, nu poate rata vreo privire.');

-- --------------------------------------------------------

--
-- Table structure for table `produsec`
--

CREATE TABLE `produsec` (
  `idp` int(6) DEFAULT NULL,
  `idc` int(6) DEFAULT NULL,
  `cant` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produsec`
--

INSERT INTO `produsec` (`idp`, `idc`, `cant`) VALUES
(2, 4, 1),
(9, 5, 2),
(1, 5, 3),
(9, 0, 2),
(8, 6, 12);

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
(1, 'pericica', 'iustin', 'iustinpericica@yahoo.com', 'iustitn', '074119806', 'mamatata'),
(2, 'pericica', 'lacramioara', 'iustinpericica@yahoo.com', 'lacramioara16', '+0745585506', 'aremultemere'),
(3, 'lacramioara', 'pericica', 'cev', 'lacramioara_pericica', '0745585506', 'iustin'),
(4, 'iustin', 'pericica', 'iustinpericica3@yahoo.com', 'iustin16', '+40741198606', 'mamatata'),
(5, 'maria', 'pericica', 'pericicamaria@rocketmail.com', 'maria_medeea', '+0742053777', 'iustin'),
(6, 'emil', 'pericica', 'emilelmaroo@yahoo.co.uk', 'emil', '+0744543638', 'iustin');

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
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `comenzi_facturare_fizica`
--
ALTER TABLE `comenzi_facturare_fizica`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comenzi_facturare_juridica`
--
ALTER TABLE `comenzi_facturare_juridica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comenzi_livrare`
--
ALTER TABLE `comenzi_livrare`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `date_facturare`
--
ALTER TABLE `date_facturare`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `date_facturare_juridica`
--
ALTER TABLE `date_facturare_juridica`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
