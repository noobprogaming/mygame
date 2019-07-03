-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2019 at 02:32 PM
-- Server version: 10.2.23-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u614737895_pk`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `id_cpu` int(11) NOT NULL,
  `name_cpu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`id_cpu`, `name_cpu`) VALUES
(1, 'intel i3'),
(2, 'intel i5'),
(3, 'intel i7'),
(4, 'intel i9');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` int(11) NOT NULL,
  `name_game` varchar(255) DEFAULT NULL,
  `min_cpu` int(11) DEFAULT NULL,
  `min_vga` int(11) DEFAULT NULL,
  `min_ram` int(11) DEFAULT NULL,
  `rec_cpu` int(11) DEFAULT NULL,
  `rec_vga` int(11) DEFAULT NULL,
  `rec_ram` int(11) DEFAULT NULL,
  `rec_storage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `name_game`, `min_cpu`, `min_vga`, `min_ram`, `rec_cpu`, `rec_vga`, `rec_ram`, `rec_storage`) VALUES
(1, 'GTA5', 2, 2, 2, 3, 3, 3, 60);

-- --------------------------------------------------------

--
-- Table structure for table `hdd`
--

CREATE TABLE `hdd` (
  `id_hdd` int(11) NOT NULL,
  `name_hdd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hdd`
--

INSERT INTO `hdd` (`id_hdd`, `name_hdd`) VALUES
(60, 'WD Black Scorpio');

-- --------------------------------------------------------

--
-- Table structure for table `kb`
--

CREATE TABLE `kb` (
  `id_kb` int(11) NOT NULL,
  `name_kb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kb`
--

INSERT INTO `kb` (`id_kb`, `name_kb`) VALUES
(1, 'Rexus Gaming KB');

-- --------------------------------------------------------

--
-- Table structure for table `mouse`
--

CREATE TABLE `mouse` (
  `id_mouse` int(11) NOT NULL,
  `name_mouse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mouse`
--

INSERT INTO `mouse` (`id_mouse`, `name_mouse`) VALUES
(1, 'Rexus Gaming Mouse');

-- --------------------------------------------------------

--
-- Table structure for table `psu`
--

CREATE TABLE `psu` (
  `id_psu` int(11) NOT NULL,
  `name_psu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psu`
--

INSERT INTO `psu` (`id_psu`, `name_psu`) VALUES
(1, 'Corsair Gold 80+');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `id_ram` int(11) NOT NULL,
  `name_ram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`id_ram`, `name_ram`) VALUES
(1, '2GB'),
(2, '4GB'),
(3, '8GB'),
(4, '16GB');

-- --------------------------------------------------------

--
-- Table structure for table `rig`
--

CREATE TABLE `rig` (
  `id` char(12) NOT NULL,
  `id_cpu` int(11) DEFAULT NULL,
  `id_vga` int(11) DEFAULT NULL,
  `id_ram` int(11) DEFAULT NULL,
  `id_ssd` int(11) DEFAULT NULL,
  `id_hdd` int(11) DEFAULT NULL,
  `id_psu` int(11) DEFAULT NULL,
  `id_kb` int(11) DEFAULT NULL,
  `id_mouse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rig`
--

INSERT INTO `rig` (`id`, `id_cpu`, `id_vga`, `id_ram`, `id_ssd`, `id_hdd`, `id_psu`, `id_kb`, `id_mouse`) VALUES
('alvin', 4, 4, 4, 60, 60, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ssd`
--

CREATE TABLE `ssd` (
  `id_ssd` int(11) NOT NULL,
  `name_ssd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssd`
--

INSERT INTO `ssd` (`id_ssd`, `name_ssd`) VALUES
(60, 'Samsung EVO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` char(12) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `joined` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `gender`, `email`, `birth`, `joined`) VALUES
('alvin', 'Alvin Bintang', 'alvin', 'l', 'alvinbintang@punyakita.tech', '2019-05-01', '2019-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `vga`
--

CREATE TABLE `vga` (
  `id_vga` int(11) NOT NULL,
  `name_vga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vga`
--

INSERT INTO `vga` (`id_vga`, `name_vga`) VALUES
(1, 'nvidia gt210'),
(2, 'nvidia gt730'),
(3, 'nvidia gtx1050'),
(4, 'nvidia rtx2080');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id_cpu`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `hdd`
--
ALTER TABLE `hdd`
  ADD PRIMARY KEY (`id_hdd`);

--
-- Indexes for table `kb`
--
ALTER TABLE `kb`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indexes for table `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`id_mouse`);

--
-- Indexes for table `psu`
--
ALTER TABLE `psu`
  ADD PRIMARY KEY (`id_psu`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id_ram`);

--
-- Indexes for table `ssd`
--
ALTER TABLE `ssd`
  ADD PRIMARY KEY (`id_ssd`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vga`
--
ALTER TABLE `vga`
  ADD PRIMARY KEY (`id_vga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
