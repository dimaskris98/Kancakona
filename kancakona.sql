-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 05:19 AM
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
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `no_detail` int(11) NOT NULL,
  `no_pemesanan` int(11) NOT NULL,
  `no_menu` int(11) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `kategori` set('mojito&soda','teh','kopi','frappe','camilan','makanan') NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `nama_gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`no_menu`, `nama`, `kategori`, `harga`, `deskripsi`, `nama_gambar`) VALUES
(1, 'Kopi Tubruk', 'kopi', 5000, ' ', ''),
(2, 'All Single Origin', 'kopi', 18000, ' Javanesse Kopi, V60, Aeropress, Frenchpress, Syphon, Mokapot', ''),
(3, 'Limited Coffee', 'kopi', 35000, ' Varian Kopi Halu Pink Banana, Gayo Wine, Java Blue Mountain, Luwak yang diseduh dengan Syphon dan Cold Drip ', ''),
(4, 'Single Origin Cold Drip', 'kopi', 25000, '   ', ''),
(5, 'Single Origin Cold Brew', 'kopi', 18000, ' ', ''),
(6, 'Kopi Maljum', 'kopi', 25000, ' Hanya tersedia pada malam Jum\'at', ''),
(7, 'Kopi Maljum Istimewa', 'kopi', 30000, 'Hanya tersedia pada malam Jum\'at', ''),
(8, 'Hakikat Kopi', 'kopi', 12000, '  One Shot Espresso', ''),
(9, 'Tarekat Kopi', 'kopi', 20000, '  Double shot espresso (Doppio)', ''),
(10, 'Syariat Kopi', 'kopi', 20000, '  One shot espresso + tubruk', ''),
(11, 'Coffee Latte', 'kopi', 15000, '  Espresso + Steamed Milk', ''),
(12, 'Long Black', 'kopi', 15000, '  Hot water + Espresso', ''),
(13, 'Affogato', 'kopi', 25000, ' Ice cream + Espresso', ''),
(14, 'Kopi Tetes Original', 'kopi', 18000, ' ', ''),
(15, 'Kopi Tetes Susu', 'kopi', 20000, ' ', ''),
(16, 'Kopi Tetes Madu', 'kopi', 20000, ' ', ''),
(17, 'Kopi Tetes Durian', 'kopi', 20000, ' ', ''),
(18, 'Kopi Tetes Alpukat', 'kopi', 20000, ' ', ''),
(19, 'White Tea', 'teh', 15000, ' ', ''),
(20, 'Green Tea', 'teh', 15000, ' ', ''),
(21, 'Black Tea', 'teh', 15000, ' ', ''),
(22, 'Cascara', 'teh', 15000, ' Teh dari Kopi', ''),
(23, 'Lychee Tea', 'teh', 15000, ' ', ''),
(24, 'Green Tea Latte', 'teh', 15000, ' ', ''),
(25, 'Lemon Tea', 'teh', 15000, ' ', ''),
(26, 'Teh Tarik', 'teh', 15000, ' ', ''),
(27, 'Mojito', 'mojito&soda', 15000, ' ', ''),
(28, 'Limon', 'mojito&soda', 8000, ' Jeruk, Lemon Lime, Aardbeien, Temulawak, Coffee Cola', ''),
(29, 'Lady in Red', 'mojito&soda', 15000, ' ', ''),
(30, 'Cola Pop', 'mojito&soda', 13000, ' ', ''),
(31, 'Fanta Pop', 'mojito&soda', 13000, ' ', ''),
(32, 'Es Timun', 'mojito&soda', 15000, ' ', ''),
(33, 'Pinacolada', 'mojito&soda', 15000, ' ', ''),
(34, 'Mango Bomba', 'mojito&soda', 15000, ' ', ''),
(35, 'Nano Nano Sparkling', 'mojito&soda', 15000, ' ', ''),
(36, 'Soda Gembira', 'mojito&soda', 13000, ' ', ''),
(37, 'Green Tea Frappe', 'frappe', 15000, ' ', ''),
(38, 'Bubble Gum Frappe', 'frappe', 15000, ' ', ''),
(39, 'Chocolate Frappe', 'frappe', 15000, ' ', ''),
(40, 'Strawberry Frappe', 'frappe', 15000, ' ', ''),
(41, 'Milo Frappe', 'frappe', 15000, ' ', ''),
(42, 'Vanilla Milkshake', 'frappe', 15000, ' ', ''),
(43, 'Banana Yoghurt', 'frappe', 15000, ' ', ''),
(44, 'Chocolate Cookies', 'frappe', 15000, ' ', ''),
(45, 'Cincau Soya', 'frappe', 15000, ' ', ''),
(46, 'Cendol Soya', 'frappe', 15000, ' ', ''),
(47, 'Roti Bakar Mentega', 'camilan', 10000, ' ', ''),
(48, 'Roti Bakar Keju', 'camilan', 12000, ' ', ''),
(49, 'Roti Bakar Cokelat', 'camilan', 12000, ' ', ''),
(50, 'Roti Bakar Kopi', 'camilan', 20000, ' ', ''),
(51, 'Roti Bakar Mata Sapi', 'camilan', 15000, ' ', ''),
(52, 'Jamur Goreng Original', 'camilan', 10000, ' ', ''),
(53, 'Jamur Goreng Keju', 'camilan', 12000, ' ', ''),
(54, 'Jamur Goreng Kopi', 'camilan', 15000, ' ', ''),
(55, 'Tape Bakar Kopi ', 'camilan', 15000, ' ', ''),
(56, 'Tape Bakar Keju', 'camilan', 12000, ' ', ''),
(57, 'Pisang Bakar Kopi', 'camilan', 15000, ' ', ''),
(58, 'Pisang Bakar Keju', 'camilan', 12000, ' ', ''),
(59, 'Bakdabak Khas Sumenep', 'camilan', 15000, ' ', ''),
(60, 'Singkong Goreng', 'camilan', 10000, ' ', ''),
(61, 'Kaldu Kikil Khas Sumenep', 'makanan', 35000, ' ', ''),
(62, 'Nasi Jagung Kuah Pindang', 'makanan', 15000, ' ', ''),
(63, 'Nasi Goreng Santri', 'makanan', 10000, ' ', ''),
(64, 'Nasi Goreng Petani', 'makanan', 15000, ' ', ''),
(65, 'Nasi Goreng Nelayan', 'makanan', 20000, ' ', ''),
(66, 'Nasi Goreng Kiai', 'makanan', 30000, ' ', ''),
(67, 'Nasi Santri', 'makanan', 10000, '(Nasi Jagung, Teri, Sambal, Bayam atau Kelor)', ''),
(68, 'Mie Sehat + Telur', 'makanan', 20000, ' ', ''),
(69, 'Nasi Gulung Telur', 'makanan', 20000, ' ', ''),
(70, 'Mie Gulung Telur', 'makanan', 18000, ' ', ''),
(71, 'Roti John Kancakona', 'makanan', 45000, ' ', ''),
(72, 'Steak Tempe Mozarella', 'makanan', 17000, ' ', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `no_pemesanan` int(11) NOT NULL,
  `tgl_pemesanan` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `acara` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `keterangan` text,
  `total_menu` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `email_toko` varchar(30) NOT NULL,
  `pass_email_toko` varchar(225) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `email_toko`, `pass_email_toko`, `email_admin`, `username`, `password`) VALUES
(1, 'kancakona-jember@gmail.com', 'd09bc402c284cbddf78a28811c617809', 'dimas987@gmail.com', 'kancakona98', '688d5b7001ce989cca0e066ad2b65446');

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
(2, '2018-11-26', 'asdasdasd', 'asdasdad', NULL, 'zczffdzfdfdgdgfg'),
(3, '2018-12-18', '12312312', 'dimascr1998@gmail.com', NULL, '12313213');

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
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`no_detail`),
  ADD KEY `fk_pemesanan` (`no_pemesanan`),
  ADD KEY `detail_pemesanan_ibfk_1` (`no_menu`);

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
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `no_detail` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `no_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `no_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `no_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_1` FOREIGN KEY (`no_menu`) REFERENCES `menu` (`no_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pemesanan` FOREIGN KEY (`no_pemesanan`) REFERENCES `pemesanan` (`no_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
