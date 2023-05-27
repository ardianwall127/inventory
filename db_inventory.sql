-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 07:49 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_motor`
--

CREATE TABLE IF NOT EXISTS `tb_motor` (
`id` int(12) NOT NULL,
  `instansi` varchar(200) NOT NULL,
  `nama_pemakai` varchar(200) NOT NULL,
  `tipe_motor` varchar(200) NOT NULL,
  `no_polisi` varchar(200) NOT NULL,
  `no_polisi_lama` varchar(200) NOT NULL,
  `tahun_rakit` varchar(200) NOT NULL,
  `jumlah_cc` varchar(200) NOT NULL,
  `no_rangka` varchar(200) NOT NULL,
  `no_mesin` varchar(200) NOT NULL,
  `no_bpkb` varchar(200) NOT NULL,
  `tanggal_servis` varchar(200) NOT NULL,
  `tanggal_perpanjangan` date NOT NULL,
  `gambar_motor` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tb_motor`
--

INSERT INTO `tb_motor` (`id`, `instansi`, `nama_pemakai`, `tipe_motor`, `no_polisi`, `no_polisi_lama`, `tahun_rakit`, `jumlah_cc`, `no_rangka`, `no_mesin`, `no_bpkb`, `tanggal_servis`, `tanggal_perpanjangan`, `gambar_motor`) VALUES
(10, 'Pangan', 'Alek', 'CBR 1000', 'H 2827 GV', '', '2016', '1000', 'RA46521897', 'MN46983176', 'BB64983178', '2023-05-18', '2023-05-18', ''),
(11, 'Umum dan Kepegawaian', 'Ponari', 'YAMAHA R6', 'H 6666 TT', '', '2014', '500', 'RK6493225671', 'MN664118934', 'BB643186565', '2023-05-27', '2023-06-02', NULL),
(12, 'Pertanian', 'Ligma', 'CRF 150', 'H 8989 JH', '', '2020', '150', 'RK4633597785', 'MN468565232', 'BB499355423', '2023-05-17', '2023-05-25', NULL),
(13, 'Pertanian', 'Rahmat Bayangan', 'CRF 150', 'H 4567 PP', '', '2020', '150', 'RK6461646654', 'MN491654166', 'BB564684656', '2023-05-19', '2023-05-16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_motor`
--
ALTER TABLE `tb_motor`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_motor`
--
ALTER TABLE `tb_motor`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
