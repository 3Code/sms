-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2016 at 07:00 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gatewaypln`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fungsi` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_broadcast`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gatewaypln`.`tbl_broadcast` AS select `gatewaypln`.`tbl_rekening`.`idpel` AS `idpel`,`gatewaypln`.`tbl_pelanggan`.`namapel` AS `namapel`,`gatewaypln`.`tbl_rekening`.`lembar` AS `lembar`,`gatewaypln`.`tbl_rekening`.`biaya` AS `biaya`,`gatewaypln`.`tbl_pelanggan`.`notelp` AS `notelp` from (`gatewaypln`.`tbl_pelanggan` join `gatewaypln`.`tbl_rekening`) where (`gatewaypln`.`tbl_pelanggan`.`idpel` = `gatewaypln`.`tbl_rekening`.`idpel`);

--
-- Dumping data for table `tbl_broadcast`
--

INSERT INTO `tbl_broadcast` (`idpel`, `namapel`, `lembar`, `biaya`, `notelp`) VALUES
('131030000001', 'UMAR HANAFI', '12', '333600', '081276684298'),
('131030000002', 'HANAFI KHALID', '3', '315730', '085763734544'),
('131030000003', 'RESI SUNDARI', '4', '420740', '081270520121');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE IF NOT EXISTS `tbl_inbox` (
  `idpel` varchar(255) NOT NULL,
  `pilihan` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `notel` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`idpel`, `pilihan`, `isi`, `notel`) VALUES
('131030000001', '', 'CEK REKENING', ''),
('131030000001', 'CEK', 'CEK REKENING', '+6281276684298'),
('131030000001', 'CEK', 'CEK REKENING', '+6281276684298'),
('12345', '1', 'CEK REKENING', '+6285763734544'),
('12345', '1', 'CEK REKENING', '+6285763734544'),
('131030000001', 'CEK', 'CEK REKENING', '+6281276684298'),
('131030000003', 'CEK', 'CEK REKENING', '+6281268823583'),
('131030000003', 'CEK', 'CEK REKENING', '+6281276684298'),
('131030000003', 'CEK', 'CEK REKENING', '+6281276684298'),
('131030000003', 'CEK', 'CEK REKENING', '+6281268823583'),
('131030000003', 'CEK', 'CEK REKENING', '+6281276684298'),
('Isi', 'ulang', 'CEK REKENING', 'XL-Axiata'),
('12345', 'q', 'CEK REKENING', '+6281276684298');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outbox`
--

CREATE TABLE IF NOT EXISTS `tbl_outbox` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `idpel` varchar(255) NOT NULL,
  `notel` varchar(255) NOT NULL,
  `pil` varchar(255) NOT NULL,
  `isipesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_outbox`
--

INSERT INTO `tbl_outbox` (`id`, `idpel`, `notel`, `pil`, `isipesan`) VALUES
(1, '131030000001', '081276684298', 'BROADCAST', 'Pelanggan dgn No 131030000001 a.n UMAR HANAFI.\r\nTunggakan anda 12 bulan : Rp.333600,-. Silahkan Melakukan Pembayaran'),
(2, '131030000002', '085763734544', 'BROADCAST', 'Pelanggan dgn No 131030000002 a.n HANAFI KHALID.\r\nTunggakan anda 3 bulan : Rp.315730,-. Silahkan Melakukan Pembayaran'),
(3, '131030000001', '081276684298', 'BROADCAST', 'Pelanggan dgn No 131030000001 a.n UMAR HANAFI.\r\nTunggakan anda 12 bulan : Rp.333600,-. Silahkan Melakukan Pembayaran'),
(4, '131030000002', '085763734544', 'BROADCAST', 'Pelanggan dgn No 131030000002 a.n HANAFI KHALID.\r\nTunggakan anda 3 bulan : Rp.315730,-. Silahkan Melakukan Pembayaran'),
(5, '131030000003', '081270520121', 'BROADCAST', 'Pelanggan dgn No 131030000003 a.n RESI SUNDARI.\r\nTunggakan anda 4 bulan : Rp.420740,-. Silahkan Melakukan Pembayaran'),
(6, '131030000001', '081276684298', 'BROADCAST', 'Pelanggan dgn No 131030000001 a.n UMAR HANAFI.\r\nTunggakan anda 12 bulan : Rp.333600,-. Silahkan Melakukan Pembayaran'),
(7, '131030000002', '085763734544', 'BROADCAST', 'Pelanggan dgn No 131030000002 a.n HANAFI KHALID.\r\nTunggakan anda 3 bulan : Rp.315730,-. Silahkan Melakukan Pembayaran'),
(8, '131030000003', '081268823583', 'BROADCAST', 'Pelanggan dgn No 131030000003 a.n RESI SUNDARI.\r\nTunggakan anda 4 bulan : Rp.420740,-. Silahkan Melakukan Pembayaran'),
(9, '131030000001', '081276684298', 'BROADCAST', 'Pelanggan dgn No 131030000001 a.n UMAR HANAFI.\r\nTunggakan anda 12 bulan : Rp.333600,-. Silahkan Melakukan Pembayaran'),
(10, '131030000002', '085763734544', 'BROADCAST', 'Pelanggan dgn No 131030000002 a.n HANAFI KHALID.\r\nTunggakan anda 3 bulan : Rp.315730,-. Silahkan Melakukan Pembayaran'),
(11, '131030000003', '081270520121', 'BROADCAST', 'Pelanggan dgn No 131030000003 a.n RESI SUNDARI.\r\nTunggakan anda 4 bulan : Rp.420740,-. Silahkan Melakukan Pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tbl_pelanggan` (
  `idpel` varchar(255) NOT NULL,
  `namapel` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tarif` varchar(255) NOT NULL,
  `daya` varchar(255) NOT NULL,
  `notelp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`idpel`, `namapel`, `alamat`, `tarif`, `daya`, `notelp`) VALUES
('131030000001', 'UMAR HANAFI', 'JL JL.KP.CANIAGO RT.08/IV PISANG 0', 'R1', '900', '081276684298'),
('131030000002', 'HANAFI KHALID', 'JL JL.KEPALO KOTO RT 04/II PAUH 0', 'R1', '900', '085763734544'),
('131030000003', 'RESI SUNDARI', 'JL. KHATIB SULAIMAN DALAM', 'R1', '900', '081270520121');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekening`
--

CREATE TABLE IF NOT EXISTS `tbl_rekening` (
  `idpel` varchar(255) NOT NULL,
  `lembar` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`idpel`, `lembar`, `biaya`) VALUES
('131030000001', '12', '333600'),
('131030000002', '3', '315730'),
('131030000003', '4', '420740');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
