-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 06:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kancakona`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `no_post` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` longblob NOT NULL,
  `nama_gambar` varchar(100) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`no_post`, `tanggal`, `judul`, `gambar`, `nama_gambar`, `isi`) VALUES
(1, '2018-11-29', 'aaaa', '', 'aaaa.png', 'akuakaukauajajauauua'),
(2, '2018-11-29', 'bbbb', '', 'bbbb.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'),
(3, '2018-11-29', 'adadada', '', 'adadada.png', 'adadadadadadadadada<br>');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `no_menu` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` set('makanan','minuman','kopi','') NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text,
  `nama_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`no_menu`, `nama`, `kategori`, `harga`, `deskripsi`, `nama_gambar`) VALUES
(1, 'Robusta Raung', 'kopi', 8000, '', ''),
(2, 'Robusta Ijen', 'kopi', 9000, '', ''),
(3, 'Robusta Sidomulyo', 'kopi', 8000, '', ''),
(4, ' Arabica Ijen (Fullwash)', 'kopi', 12000, '', ''),
(5, 'Arabica Ijen (Honey Proccess)', 'kopi', 15000, '', ''),
(6, 'Arabica Ijen (Natural)', 'kopi', 18000, '', ''),
(7, 'Bali Kintamani', 'kopi', 15000, '', ''),
(8, 'Aceh Gayo', 'kopi', 15000, '', ''),
(9, 'Mandailing', 'kopi', 15000, '', ''),
(10, 'Lintong Blue Batak', 'kopi', 15000, '', ''),
(11, 'Halu Pink Banana', 'kopi', 35000, '', ''),
(12, 'Halu Choco Banana', 'kopi', 35000, '', ''),
(13, 'Jus Melon', 'minuman', 10000, '', ''),
(14, 'Jus Semangka', 'minuman', 10000, '', ''),
(15, 'Jus Apel', 'minuman', 100000, '', ''),
(16, 'Jus Alpukat', 'minuman', 12000, '', ''),
(17, 'Cappucino', 'kopi', 18000, '', ''),
(18, 'Cafe Latte', 'kopi', 18000, '', ''),
(19, 'Vanilla Latte', 'kopi', 18000, '', ''),
(20, 'Greentea Latte', 'minuman', 15000, '', ''),
(21, 'Taro Blend', 'minuman', 15000, '', ''),
(22, 'Chocolate latte', 'minuman', 15000, '', ''),
(23, 'siomay', 'makanan', 10000, '', ''),
(24, 'Nasi Goreng', 'makanan', 15000, '', ''),
(25, 'French Fries', 'makanan', 10000, '', ''),
(26, 'Potato Wedges', '', 10000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `no_saran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `nomer` varchar(13) DEFAULT NULL,
  `saran` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`no_saran`, `tanggal`, `nama`, `email`, `nomer`, `saran`) VALUES
(1, '2018-11-29', 'asdasd', 'asdasd', NULL, 'asdasdas'),
(2, '2018-11-29', '', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Nama` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Nama`, `Username`, `Password`, `Alamat`) VALUES
('Dimas', 'dimaskris', 'dimas123', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`no_post`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`no_menu`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`no_saran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `no_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `no_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `no_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
