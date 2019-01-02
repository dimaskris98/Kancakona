-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jan 2019 pada 08.08
-- Versi Server: 10.1.16-MariaDB
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
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `no_post` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(150) NOT NULL,
  `nama_gambar` varchar(100) DEFAULT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`no_post`, `tanggal`, `judul`, `nama_gambar`, `isi`) VALUES
(1, '2018-11-29', 'Merdeka', 'Merdeka.jpg', '<div>Lorem ipsum dolor sit amet, quo et posse accumsan assentior, labore omnesque eos cu. Habemus dolores lucilius est id, eu cum tantas ponderum reprehendunt, consulatu repudiare ea ius. Pro quem error ea, an cum velit nonumy moderatius. Patrioque dissentiunt eos eu, has blandit sapientem in, amet stet scripta his in. Sed labitur bonorum corrumpit eu. Sonet putent expetendis eos at, has veritus principes accommodare at, at mea docendi facilisis scriptorem.<br>Stet brute nusquam id eum. Delenit fierent sit ea. Enim vitae definitiones eos in, cum scripta nusquam indoctum an. His id zril exerci, ut vix quaestio sententiae. Ne vis commune corrumpit vituperatoribus, veri nonumes neglegentur at cum. Decore splendide ut ius, vel ut accusamus deseruisse contentiones.<br>Quod quaeque duo no, pro ne vitae theophrastus. Per ne ferri nobis, mutat minimum sit ea. Cu sea reque ocurreret, numquam pertinax mediocrem id eos. Eu cum malis option saperet. Doming euripidis qui in, graeco aliquam an nec, nec at eius tempor deterruisset.<br>Ea pri soluta minimum suscipiantur. Ne sit dico brute dolorem, ea vero accusata cum, ne cum facer aliquid. Ius in nibh summo ancillae, his an eirmod inimicus reformidans. Oporteat conceptam intellegebat sit ex, in mediocrem definitiones duo, has impetus aliquam reprimique et.<br>At qui tale duis lucilius, quo eu illud vivendo signiferumque, omnis accumsan legendos sit te. Pro no porro clita. Pri ei aeterno offendit, melius epicurei et qui. Ei quas ubique appetere eam. His aliquam legimus id, labores mediocrem qui an, sit id corrumpit repudiandae. Dolor munere at sed, ei vix quod prompta mediocrem.</div>'),
(2, '2018-11-29', 'Berjuang', 'Berjuang.jpg', '<div>Ea pri soluta minimum suscipiantur. Ne sit dico brute dolorem, ea vero accusata cum, ne cum facer aliquid. Ius in nibh summo ancillae, his an eirmod inimicus reformidans. Oporteat conceptam intellegebat sit ex, in mediocrem definitiones duo, has impetus aliquam reprimique et.</div><div><br></div><div>At qui tale duis lucilius, quo eu illud vivendo signiferumque, omnis accumsan legendos sit te. Pro no porro clita. Pri ei aeterno offendit, melius epicurei et qui. Ei quas ubique appetere eam. His aliquam legimus id, labores mediocrem qui an, sit id corrumpit repudiandae. Dolor munere at sed, ei vix quod prompta mediocrem.</div>'),
(3, '2018-11-29', 'Panorama', 'Panorama.jpg', '<div>Quod quaeque duo no, pro ne vitae theophrastus. Per ne ferri nobis, mutat minimum sit ea. Cu sea reque ocurreret, numquam pertinax mediocrem id eos. Eu cum malis option saperet. Doming euripidis qui in, graeco aliquam an nec, nec at eius tempor deterruisset.</div><div><br></div><div>Ea pri soluta minimum suscipiantur. Ne sit dico brute dolorem, ea vero accusata cum, ne cum facer aliquid. Ius in nibh summo ancillae, his an eirmod inimicus reformidans. Oporteat conceptam intellegebat sit ex, in mediocrem definitiones duo, has impetus aliquam reprimique et.</div>'),
(4, '2018-11-29', 'Bismillah', 'Bismillah.jpg', '<div>Quod quaeque duo no, pro ne vitae theophrastus. Per ne ferri nobis, mutat minimum sit ea. Cu sea reque ocurreret, numquam pertinax mediocrem id eos. Eu cum malis option saperet. Doming euripidis qui in, graeco aliquam an nec, nec at eius tempor deterruisset.</div><div><br></div><div>Ea pri soluta minimum suscipiantur. Ne sit dico brute dolorem, ea vero accusata cum, ne cum facer aliquid. Ius in nibh summo ancillae, his an eirmod inimicus reformidans. Oporteat conceptam intellegebat sit ex, in mediocrem definitiones duo, has impetus aliquam reprimique et.</div>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `no_meja` int(11) NOT NULL,
  `jenis_meja` enum('Kecil','Sedang','Besar','') NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`no_meja`, `jenis_meja`, `kapasitas`) VALUES
(1, 'Kecil', 1),
(2, 'Kecil', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
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
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`no_menu`, `nama`, `kategori`, `harga`, `deskripsi`, `nama_gambar`) VALUES
(31, 'Kopi Tubruk', 'kopi', 5000, ' ', ''),
(32, 'All Single Origin', 'kopi', 18000, ' Javanesse Kopi, V60, Aeropress, Frenchpress, Syphon, Mokapot', ''),
(33, 'Limited Coffee', 'kopi', 35000, ' Varian Kopi Halu Pink Banana, Gayo Wine, Java Blue Mountain, Luwak yang diseduh dengan Syphon dan Cold Drip ', ''),
(34, 'Single Origin Cold Drip', 'kopi', 25000, '   ', ''),
(35, 'Single Origin Cold Brew', 'kopi', 18000, ' ', ''),
(36, 'Kopi Maljum', 'kopi', 25000, ' Hanya tersedia pada malam Jum''at', ''),
(37, 'Kopi Maljum Istimewa', 'kopi', 30000, 'Hanya tersedia pada malam Jum''at', ''),
(38, 'Hakikat Kopi', 'kopi', 12000, '  One Shot Espresso', ''),
(39, 'Tarekat Kopi', 'kopi', 20000, '  Double shot espresso (Doppio)', ''),
(40, 'Syariat Kopi', 'kopi', 20000, '  One shot espresso + tubruk', ''),
(41, 'Coffee Latte', 'kopi', 15000, '  Espresso + Steamed Milk', ''),
(42, 'Long Black', 'kopi', 15000, '  Hot water + Espresso', ''),
(43, 'Affogato', 'kopi', 25000, ' Ice cream + Espresso', ''),
(44, 'Kopi Tetes Original', 'kopi', 18000, ' ', ''),
(45, 'Kopi Tetes Susu', 'kopi', 20000, ' ', ''),
(46, 'Kopi Tetes Madu', 'kopi', 20000, ' ', ''),
(47, 'Kopi Tetes Durian', 'kopi', 20000, ' ', ''),
(48, 'Kopi Tetes Alpukat', 'kopi', 20000, ' ', ''),
(49, 'White Tea', 'teh', 15000, ' ', ''),
(50, 'Green Tea', 'teh', 15000, ' ', ''),
(51, 'Black Tea', 'teh', 15000, ' ', ''),
(52, 'Cascara', 'teh', 15000, ' Teh dari Kopi', ''),
(53, 'Lychee Tea', 'teh', 15000, ' ', ''),
(54, 'Green Tea Latte', 'teh', 15000, ' ', ''),
(55, 'Lemon Tea', 'teh', 15000, ' ', ''),
(56, 'Teh Tarik', 'teh', 15000, ' ', ''),
(57, 'Mojito', 'mojito&soda', 15000, ' ', ''),
(58, 'Limon', 'mojito&soda', 8000, ' Jeruk, Lemon Lime, Aardbeien, Temulawak, Coffee Cola', ''),
(59, 'Lady in Red', 'mojito&soda', 15000, ' ', ''),
(60, 'Cola Pop', 'mojito&soda', 13000, ' ', ''),
(61, 'Fanta Pop', 'mojito&soda', 13000, ' ', ''),
(62, 'Es Timun', 'mojito&soda', 15000, ' ', ''),
(63, 'Pinacolada', 'mojito&soda', 15000, ' ', ''),
(64, 'Mango Bomba', 'mojito&soda', 15000, ' ', ''),
(65, 'Nano Nano Sparkling', 'mojito&soda', 15000, ' ', ''),
(66, 'Soda Gembira', 'mojito&soda', 13000, ' ', ''),
(67, 'Green Tea Frappe', 'frappe', 15000, ' ', ''),
(68, 'Bubble Gum Frappe', 'frappe', 15000, ' ', ''),
(69, 'Chocolate Frappe', 'frappe', 15000, ' ', ''),
(70, 'Strawberry Frappe', 'frappe', 15000, ' ', ''),
(71, 'Milo Frappe', 'frappe', 15000, ' ', ''),
(72, 'Vanilla Milkshake', 'frappe', 15000, ' ', ''),
(73, 'Banana Yoghurt', 'frappe', 15000, ' ', ''),
(74, 'Chocolate Cookies', 'frappe', 15000, ' ', ''),
(75, 'Cincau Soya', 'frappe', 15000, ' ', ''),
(76, 'Cendol Soya', 'frappe', 15000, ' ', ''),
(77, 'Roti Bakar Mentega', 'camilan', 10000, ' ', ''),
(78, 'Roti Bakar Keju', 'camilan', 12000, ' ', ''),
(79, 'Roti Bakar Cokelat', 'camilan', 12000, ' ', ''),
(80, 'Roti Bakar Kopi', 'camilan', 20000, ' ', ''),
(81, 'Roti Bakar Mata Sapi', 'camilan', 15000, ' ', ''),
(82, 'Jamur Goreng Original', 'camilan', 10000, ' ', ''),
(83, 'Jamur Goreng Keju', 'camilan', 12000, ' ', ''),
(84, 'Jamur Goreng Kopi', 'camilan', 15000, ' ', ''),
(85, 'Tape Bakar Kopi ', 'camilan', 15000, ' ', ''),
(86, 'Tape Bakar Keju', 'camilan', 12000, ' ', ''),
(87, 'Pisang Bakar Kopi', 'camilan', 15000, ' ', ''),
(88, 'Pisang Bakar Keju', 'camilan', 12000, ' ', ''),
(89, 'Bakdabak Khas Sumenep', 'camilan', 15000, ' ', ''),
(90, 'Singkong Goreng', 'camilan', 10000, ' ', ''),
(91, 'Kaldu Kikil Khas Sumenep', 'makanan', 35000, ' ', ''),
(92, 'Nasi Jagung Kuah Pindang', 'makanan', 15000, ' ', ''),
(93, 'Nasi Goreng Santri', 'makanan', 10000, ' ', ''),
(94, 'Nasi Goreng Petani', 'makanan', 15000, ' ', ''),
(95, 'Nasi Goreng Nelayan', 'makanan', 20000, ' ', ''),
(96, 'Nasi Goreng Kiai', 'makanan', 30000, ' ', ''),
(97, 'Nasi Santri', 'makanan', 10000, '(Nasi Jagung, Teri, Sambal, Bayam atau Kelor)', ''),
(98, 'Mie Sehat + Telur', 'makanan', 20000, ' ', ''),
(99, 'Nasi Gulung Telur', 'makanan', 20000, ' ', ''),
(100, 'Mie Gulung Telur', 'makanan', 18000, ' ', ''),
(101, 'Roti John Kancakona', 'makanan', 45000, ' ', ''),
(102, 'Steak Tempe Mozarella', 'makanan', 17000, ' ', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
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
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`no_pemesanan`, `tgl_pemesanan`, `nama`, `waktu`, `email`, `no_hp`, `keterangan`, `jumlah`) VALUES
(1, '12/1/2018', 'jygjygjg', '2:00pm', '', '12344', 'sdsfdsf', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
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
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`no_saran`, `tanggal`, `nama`, `email`, `nomer`, `saran`) VALUES
(1, '2018-11-24', 'dimas', 'dimas@gmail.com', '123312234421', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsd'),
(2, '2018-11-26', 'asdasdasd', 'asdasdad', NULL, 'zczffdzfdfdgdgfg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Nama` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
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
  MODIFY `no_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
