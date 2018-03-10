-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2018 at 02:12 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ms_selong`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_ms`
--

CREATE TABLE IF NOT EXISTS `barang_ms` (
  `namab` varchar(50) NOT NULL,
  `jum_awb` int(20) NOT NULL,
  `hargab` int(25) NOT NULL,
  `jum_akb` int(20) NOT NULL,
`kodeb` int(25) NOT NULL,
  `kode_pro` varchar(25) NOT NULL,
  `bvb` int(25) NOT NULL,
  `dipin` int(25) NOT NULL,
  `tran` int(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_ms`
--

INSERT INTO `barang_ms` (`namab`, `jum_awb`, `hargab`, `jum_akb`, `kodeb`, `kode_pro`, `bvb`, `dipin`, `tran`) VALUES
('Omega Kids', 12, 142000, 23, 112, '', 5, -28, 17),
('Olive Oil', 12, 100000, 12, 113, '', 12, 0, 0),
('K-Liquid Chlorophyll (500 ml)', 10, 119000, 10, 1111, 'IDA123', 120, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dipinjam`
--

CREATE TABLE IF NOT EXISTS `dipinjam` (
  `namad` varchar(50) NOT NULL,
  `no_disd` varchar(30) NOT NULL,
  `kode` int(25) NOT NULL,
  `jumlahd` int(4) NOT NULL,
  `total` int(25) NOT NULL,
  `jum_kemd` int(25) NOT NULL,
  `pindahd` int(25) NOT NULL,
  `ketd` text NOT NULL,
  `idd` int(255) NOT NULL,
  `tgl_d` int(15) NOT NULL,
  `bln_d` varchar(25) NOT NULL,
  `thn_d` int(15) NOT NULL,
  `dipind` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dipinjam`
--

INSERT INTO `dipinjam` (`namad`, `no_disd`, `kode`, `jumlahd`, `total`, `jum_kemd`, `pindahd`, `ketd`, `idd`, `tgl_d`, `bln_d`, `thn_d`, `dipind`) VALUES
('MUSTOPIN', 'IDNTAJA00320', 112, 3, 0, 1, 1, 'Null', 0, 20, 'Maret', 2018, 1),
('MUSTOPIN', 'IDNTAJA00320', 112, 3, 1, 1, 1, 'Null', 1, 20, 'Maret', 2018, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `namat` varchar(50) NOT NULL,
  `no_dist` varchar(40) NOT NULL,
  `kodet` int(25) NOT NULL,
  `jumlaht` int(15) NOT NULL,
  `jum_kemt` int(25) NOT NULL,
  `laport` int(25) NOT NULL,
  `totalt` int(25) NOT NULL,
  `totalbvt` int(30) NOT NULL,
  `idt` int(255) NOT NULL,
  `kett` text NOT NULL,
  `thn_t` int(6) NOT NULL,
  `bln_t` varchar(15) NOT NULL,
  `tgl_t` int(6) NOT NULL,
  `trant` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`namat`, `no_dist`, `kodet`, `jumlaht`, `jum_kemt`, `laport`, `totalt`, `totalbvt`, `idt`, `kett`, `thn_t`, `bln_t`, `tgl_t`, `trant`) VALUES
('MURNIAH', 'EID1234', 112, 21, 4, 12, 17, 60, 20, 'Null', 2022, 'Juni', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `user_n` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_n`, `pass`, `nama`, `email`, `level`) VALUES
(1, 'admin1', '1395efa3190e6a6ac7363cd891a8ec1c', 'Fuad Sos', 'fuad.sos@admin.com', 1),
(2, 'admin2', '1395efa3190e6a6ac7363cd891a8ec1c', 'ALfiandi fadli', 'alfiandi@admin.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_ms`
--
ALTER TABLE `barang_ms`
 ADD PRIMARY KEY (`kodeb`);

--
-- Indexes for table `dipinjam`
--
ALTER TABLE `dipinjam`
 ADD PRIMARY KEY (`idd`), ADD KEY `kode` (`kode`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`idt`), ADD KEY `kodet` (`kodet`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `user_n` (`user_n`), ADD KEY `pass` (`pass`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_ms`
--
ALTER TABLE `barang_ms`
MODIFY `kodeb` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1112;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dipinjam`
--
ALTER TABLE `dipinjam`
ADD CONSTRAINT `dipinjam_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `barang_ms` (`kodeb`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kodet`) REFERENCES `barang_ms` (`kodeb`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
