-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 05:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `judul` varchar(150) NOT NULL,
  `nama_gambar` varchar(100) DEFAULT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`no_post`, `tanggal`, `judul`, `nama_gambar`, `isi`) VALUES
(1, '2018-11-29', 'Merdeka', 'Merdeka.jpg', '<div>Lorem ipsum dolor sit amet, quo et posse accumsan assentior, labore omnesque eos cu. Habemus dolores lucilius est id, eu cum tantas ponderum reprehendunt, consulatu repudiare ea ius. Pro quem error ea, an cum velit nonumy moderatius. Patrioque dissentiunt eos eu, has blandit sapientem in, amet stet scripta his in. Sed labitur bonorum corrumpit eu. Sonet putent expetendis eos at, has veritus principes accommodare at, at mea docendi facilisis scriptorem.<br>Stet brute nusquam id eum. Delenit fierent sit ea. Enim vitae definitiones eos in, cum scripta nusquam indoctum an. His id zril exerci, ut vix quaestio sententiae. Ne vis commune corrumpit vituperatoribus, veri nonumes neglegentur at cum. Decore splendide ut ius, vel ut accusamus deseruisse contentiones.<br>Quod quaeque duo no, pro ne vitae theophrastus. Per ne ferri nobis, mutat minimum sit ea. Cu sea reque ocurreret, numquam pertinax mediocrem id eos. Eu cum malis option saperet. Doming euripidis qui in, graeco aliquam an nec, nec at eius tempor deterruisset.<br>Ea pri soluta minimum suscipiantur. Ne sit dico brute dolorem, ea vero accusata cum, ne cum facer aliquid. Ius in nibh summo ancillae, his an eirmod inimicus reformidans. Oporteat conceptam intellegebat sit ex, in mediocrem definitiones duo, has impetus aliquam reprimique et.<br>At qui tale duis lucilius, quo eu illud vivendo signiferumque, omnis accumsan legendos sit te. Pro no porro clita. Pri ei aeterno offendit, melius epicurei et qui. Ei quas ubique appetere eam. His aliquam legimus id, labores mediocrem qui an, sit id corrumpit repudiandae. Dolor munere at sed, ei vix quod prompta mediocrem.</div>'),
(2, '2018-11-29', 'Berjuang', 'Berjuang.jpg', '<div>Ea pri soluta minimum suscipiantur. Ne sit dico brute dolorem, ea vero accusata cum, ne cum facer aliquid. Ius in nibh summo ancillae, his an eirmod inimicus reformidans. Oporteat conceptam intellegebat sit ex, in mediocrem definitiones duo, has impetus aliquam reprimique et.</div><div><br></div><div>At qui tale duis lucilius, quo eu illud vivendo signiferumque, omnis accumsan legendos sit te. Pro no porro clita. Pri ei aeterno offendit, melius epicurei et qui. Ei quas ubique appetere eam. His aliquam legimus id, labores mediocrem qui an, sit id corrumpit repudiandae. Dolor munere at sed, ei vix quod prompta mediocrem.</div>'),
(3, '2018-11-29', 'Panorama', 'Panorama.jpg', '<div>Quod quaeque duo no, pro ne vitae theophrastus. Per ne ferri nobis, mutat minimum sit ea. Cu sea reque ocurreret, numquam pertinax mediocrem id eos. Eu cum malis option saperet. Doming euripidis qui in, graeco aliquam an nec, nec at eius tempor deterruisset.</div><div><br></div><div>Ea pri soluta minimum suscipiantur. Ne sit dico brute dolorem, ea vero accusata cum, ne cum facer aliquid. Ius in nibh summo ancillae, his an eirmod inimicus reformidans. Oporteat conceptam intellegebat sit ex, in mediocrem definitiones duo, has impetus aliquam reprimique et.</div>'),
(4, '2018-11-29', 'Bismillah', 'Bismillah.jpg', '<div>Quod quaeque duo no, pro ne vitae theophrastus. Per ne ferri nobis, mutat minimum sit ea. Cu sea reque ocurreret, numquam pertinax mediocrem id eos. Eu cum malis option saperet. Doming euripidis qui in, graeco aliquam an nec, nec at eius tempor deterruisset.</div><div><br></div><div>Ea pri soluta minimum suscipiantur. Ne sit dico brute dolorem, ea vero accusata cum, ne cum facer aliquid. Ius in nibh summo ancillae, his an eirmod inimicus reformidans. Oporteat conceptam intellegebat sit ex, in mediocrem definitiones duo, has impetus aliquam reprimique et.</div>');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `no_meja` int(11) NOT NULL,
  `jenis_meja` enum('Kecil','Sedang','Besar','') NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`no_meja`, `jenis_meja`, `kapasitas`) VALUES
(1, 'Kecil', 1),
(2, 'Kecil', 2);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `no_menu` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` set('makanan','minuman','kopi','') NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `nama_gambar` varchar(100) DEFAULT NULL
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
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `no_pemesanan` int(11) NOT NULL,
  `tgl_pemesanan` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `keterangan` text,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`no_pemesanan`, `tgl_pemesanan`, `nama`, `waktu`, `email`, `no_hp`, `keterangan`, `jumlah`) VALUES
(1, '12/1/2018', 'jygjygjg', '2:00pm', '', '12344', 'sdsfdsf', 1);

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
(1, '2018-11-24', 'dimas', 'dimas@gmail.com', '123312234421', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsd'),
(2, '2018-11-26', 'asdasdasd', 'asdasdad', NULL, 'zczffdzfdfdgdgfg');

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
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`no_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`no_menu`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`no_pemesanan`);

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
  MODIFY `no_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `no_meja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `no_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `no_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `no_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
