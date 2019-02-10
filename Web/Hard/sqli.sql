-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 03:19 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqli`
--

-- --------------------------------------------------------

--
-- Table structure for table `388e8d19bf9740f95858eb22b4fa7d4f`
--

CREATE TABLE `388e8d19bf9740f95858eb22b4fa7d4f` (
  `id_user` int(30) NOT NULL,
  `name_user` varchar(30) NOT NULL,
  `nick_user` varchar(20) NOT NULL,
  `user_login` varchar(30) NOT NULL,
  `user_pass` varchar(40) NOT NULL,
  `flag` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `388e8d19bf9740f95858eb22b4fa7d4f`
--

INSERT INTO `388e8d19bf9740f95858eb22b4fa7d4f` (`id_user`, `name_user`, `nick_user`, `user_login`, `user_pass`, `flag`) VALUES
(0, 'Yudistira', 'yyp', 'user1', 'pass1', '!Fest{'),
(1, 'Bima', 'Bima', 'user2', 'pass2', 'Its_Not'),
(2, 'Arjuna', 'Arjuna', 'user3', 'pass3', '_A_Flag'),
(3, 'Nakula', 'Sadewa', 'user4', 'pass3', 'HAHA}');

-- --------------------------------------------------------

--
-- Table structure for table `e8701ad48ba05a91604e480dd60899a3`
--

CREATE TABLE `e8701ad48ba05a91604e480dd60899a3` (
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e8701ad48ba05a91604e480dd60899a3`
--

INSERT INTO `e8701ad48ba05a91604e480dd60899a3` (`id_user`) VALUES
(1337);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `388e8d19bf9740f95858eb22b4fa7d4f`
--
ALTER TABLE `388e8d19bf9740f95858eb22b4fa7d4f`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `e8701ad48ba05a91604e480dd60899a3`
--
ALTER TABLE `e8701ad48ba05a91604e480dd60899a3`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
