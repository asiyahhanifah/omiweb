-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 02:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `owmisart`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `description` text NOT NULL,
  `hargacom` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nama_porto` varchar(255) NOT NULL,
  `portofolio` varchar(255) NOT NULL,
  `nama_porto2` varchar(255) NOT NULL,
  `portofolio2` varchar(255) NOT NULL,
  `nama_porto3` varchar(255) NOT NULL,
  `portofolio3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `bio`, `description`, `hargacom`, `image`, `nama_porto`, `portofolio`, `nama_porto2`, `portofolio2`, `nama_porto3`, `portofolio3`) VALUES
(1, 'kiyowmeee', 'darchogyu@gmail.com', '$2y$10$2F0.dzDUGG0OQ4E3qW7V3.z5cULOPxS2fufkhRWvdWwijjaYYdWx2', '20 Maret 2000', 'UI Designer', '50.000 - 1.000.000', 'omi.jpg', '', 'omi.jpg', 'ini umu', 'umu.jpg', 'ini ushi', 'ushi.jpg'),
(3, 'wakatoshi', 'ushijima@gmail.com', '$2y$10$Vjddojc9Ae8D2VqJh9eOOuhcTdI1ovHswJKeVyAhZ4UmqBj7eH6Ri', '21 September 1999', 'Pemain voli nasional', '', 'ushi.jpg', 'test 1', 'omi.jpg', 'test 2', 'uci.jpg', 'test 3', 'umu.jpg'),
(8, 'samuw', 'osamuya@gmail.com', '$2y$10$5tgRq5JRCNQ9CDosJ3IFM.VciMdOMP2vnVG0vPeGE8VVETZjfQ/QC', '5 Oktober 2000', 'Penjual Onigiri', '', 'samu ganteng.png', 'wanita cool', 'wanita cool.jpg', 'pria pemberani', 'waw boys.jpg', 'wanita oke', 'wanita oke.png'),
(9, 'atsumuw', 'atsumumiya@gmail.com', '$2y$10$tCIYaNli1RH0LTgCbliiUusrFdsOtmCNXlPzAvAbhCmNGSfO8dsAu', '5 Oktober 2000', '', '', '', '', '', '', '', '', ''),
(10, 'sunarin', 'sunarin@gmail.com', '$2y$10$..TzWm0ZnEcMIibb3WIlr.H1VMRuSO7Um7ytP1D57CXEOKPDIC4eG', '9 maret 2002', 'Illustrator ', '', 'sunarin.jpg', 'sedih', 'punya suna.jpg', 'pinkysh', 'punyasunaa.jpg', 'sadboi', 'wow.png'),
(12, 'kitashin', 'kitashin@gmail.com', '$2y$10$CEgsz8dKf9djjhnJbNiTbuaL7yKliIro1qfHB0KOeUsBbrOGwJWtG', '28 Juli 1994', 'Illustrator ', '70.000 - 1.000.000', 'kita.png', 'ini kags', 'kageyama.jpg', 'ini bokyuto', 'bokyuto.jpg', 'ini hoshiumi', 'korai.png'),
(13, 'chrisevans', 'chrisevans@gmail.com', '$2y$10$v.OyHscACupqSKWIQe1DJ.SrY3bR.mkH3VBEyAq2C7xTr1jBAbYZW', '24 Juli 1994', 'Illustrator ', '70.000 - 1.000.000', 'cevans.png', 'portofolio 1', 'cevanspunya.jpg', 'portofolio 2', 'punyachris.jpg', 'portofolio 3', 'wanita cool.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
