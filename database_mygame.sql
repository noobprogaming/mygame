-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 11 Jul 2019 pada 05.21
-- Versi server: 10.2.23-MariaDB
-- Versi PHP: 7.2.18

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
-- Struktur dari tabel `cpu`
--

CREATE TABLE `cpu` (
  `id_cpu` int(11) NOT NULL,
  `name_cpu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cpu`
--

INSERT INTO `cpu` (`id_cpu`, `name_cpu`) VALUES
(1, 'intel i3'),
(2, 'intel i5'),
(3, 'intel i7'),
(4, 'intel i9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `game`
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
-- Dumping data untuk tabel `game`
--

INSERT INTO `game` (`id_game`, `name_game`, `min_cpu`, `min_vga`, `min_ram`, `rec_cpu`, `rec_vga`, `rec_ram`, `rec_storage`) VALUES
(1, 'GTA5', 2, 2, 2, 3, 3, 3, 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hdd`
--

CREATE TABLE `hdd` (
  `id_hdd` int(11) NOT NULL,
  `name_hdd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hdd`
--

INSERT INTO `hdd` (`id_hdd`, `name_hdd`) VALUES
(60, 'WD Black Scorpio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kb`
--

CREATE TABLE `kb` (
  `id_kb` int(11) NOT NULL,
  `name_kb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kb`
--

INSERT INTO `kb` (`id_kb`, `name_kb`) VALUES
(1, 'Rexus Gaming KB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mouse`
--

CREATE TABLE `mouse` (
  `id_mouse` int(11) NOT NULL,
  `name_mouse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mouse`
--

INSERT INTO `mouse` (`id_mouse`, `name_mouse`) VALUES
(1, 'Rexus Gaming Mouse');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psu`
--

CREATE TABLE `psu` (
  `id_psu` int(11) NOT NULL,
  `name_psu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psu`
--

INSERT INTO `psu` (`id_psu`, `name_psu`) VALUES
(1, 'Corsair Gold 80+');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ram`
--

CREATE TABLE `ram` (
  `id_ram` int(11) NOT NULL,
  `name_ram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ram`
--

INSERT INTO `ram` (`id_ram`, `name_ram`) VALUES
(1, '2GB'),
(2, '4GB'),
(3, '8GB'),
(4, '16GB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rig`
--

CREATE TABLE `rig` (
  `id` char(21) NOT NULL,
  `id_cpu` int(11) DEFAULT 1,
  `id_vga` int(11) DEFAULT 1,
  `id_ram` int(11) DEFAULT 1,
  `id_ssd` int(11) DEFAULT 60,
  `id_hdd` int(11) DEFAULT 60,
  `id_psu` int(11) DEFAULT 1,
  `id_kb` int(11) DEFAULT 1,
  `id_mouse` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rig`
--

INSERT INTO `rig` (`id`, `id_cpu`, `id_vga`, `id_ram`, `id_ssd`, `id_hdd`, `id_psu`, `id_kb`, `id_mouse`) VALUES
('alvin', 4, 2, 4, 60, 60, 1, 1, 1),
('107689815419695513268', 1, 1, 1, 60, 60, 1, 1, 1),
('115870629020183890718', 1, 1, 1, 60, 60, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ssd`
--

CREATE TABLE `ssd` (
  `id_ssd` int(11) NOT NULL,
  `name_ssd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ssd`
--

INSERT INTO `ssd` (`id_ssd`, `name_ssd`) VALUES
(60, 'Samsung EVO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` char(21) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `joined` date DEFAULT NULL,
  `pp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `gender`, `email`, `birth`, `joined`, `pp`) VALUES
('107689815419695513268', '', NULL, NULL, 'alvin.1157@students.amikom.ac.id', NULL, '2019-07-11', 'https://lh5.googleusercontent.com/-17K7hkI2XEA/AAAAAAAAAAI/AAAAAAAAABU/sE2UcGuUZ4c/s96-c/photo.jpg'),
('115870629020183890718', 'aurel lintang', NULL, NULL, 'aurellintang@gmail.com', NULL, '2019-07-11', 'https://lh5.googleusercontent.com/-OP3w0fCCq6g/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rcBUCO2LDILi_nmX9Oqx9lriRHR_w/s96-c/photo.jpg'),
('alvin', 'Alvin Bintang R', 'alvin', 'l', 'alvinbintang@punyakita.tech', '1999-03-02', '2019-05-14', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vga`
--

CREATE TABLE `vga` (
  `id_vga` int(11) NOT NULL,
  `name_vga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vga`
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
-- Indeks untuk tabel `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id_cpu`);

--
-- Indeks untuk tabel `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indeks untuk tabel `hdd`
--
ALTER TABLE `hdd`
  ADD PRIMARY KEY (`id_hdd`);

--
-- Indeks untuk tabel `kb`
--
ALTER TABLE `kb`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indeks untuk tabel `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`id_mouse`);

--
-- Indeks untuk tabel `psu`
--
ALTER TABLE `psu`
  ADD PRIMARY KEY (`id_psu`);

--
-- Indeks untuk tabel `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id_ram`);

--
-- Indeks untuk tabel `ssd`
--
ALTER TABLE `ssd`
  ADD PRIMARY KEY (`id_ssd`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vga`
--
ALTER TABLE `vga`
  ADD PRIMARY KEY (`id_vga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
