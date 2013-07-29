-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2013 at 08:53 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `si_sangkuriang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE IF NOT EXISTS `tbl_absensi` (
  `id_absensi` int(11) NOT NULL AUTO_INCREMENT,
  `id_daftar_kelas` varchar(20) NOT NULL,
  `nis` char(8) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Hadir','Izin','Sakit','Absen') NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_absensi`),
  KEY `id_daftar_kelas` (`id_daftar_kelas`),
  KEY `nis` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_absensi`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_daftar_kelas` (
  `id_daftar_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_daftar_kelas` varchar(20) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `tahun_ajaran` char(20) NOT NULL,
  `nip` char(20) NOT NULL,
  `jumlah_pertemuan` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_daftar_kelas`),
  KEY `id_kelas` (`id_kelas`),
  KEY `tahun_ajaran` (`tahun_ajaran`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_daftar_kelas`
--

INSERT INTO `tbl_daftar_kelas` (`id_daftar_kelas`, `nama_daftar_kelas`, `id_kelas`, `tahun_ajaran`, `nip`, `jumlah_pertemuan`) VALUES
(3, 'Kelas1-1213-Ganjil', '1', '2012-2013 Ganjil', '10110121312432141242', 0),
(4, 'Kelas2-1213-Ganjil', '2', '2012-2013 Ganjil', '10110121312432141242', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar_kelas_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_daftar_kelas_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_daftar_kelas` int(11) NOT NULL,
  `nis` char(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nis_2` (`nis`),
  UNIQUE KEY `id_daftar_kelas_2` (`id_daftar_kelas`),
  UNIQUE KEY `id_daftar_kelas_3` (`id_daftar_kelas`),
  UNIQUE KEY `nis_3` (`nis`),
  KEY `nis` (`nis`),
  KEY `id_daftar_kelas` (`id_daftar_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_daftar_kelas_siswa`
--

INSERT INTO `tbl_daftar_kelas_siswa` (`id`, `id_daftar_kelas`, `nis`) VALUES
(1, 3, '10110190');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE IF NOT EXISTS `tbl_guru` (
  `nip` char(20) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `golongan` char(4) NOT NULL,
  `spesialisai` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`nip`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `golongan`, `spesialisai`) VALUES
('10110121312432141242', 'Ableh', 'Jakarta', '2013-07-01', 'IV', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`) VALUES
('1', 'Kelas 1'),
('2', 'Kelas 2'),
('3', 'Kelas 3'),
('4', 'Kelas 4'),
('5', 'Kelas 5'),
('6', 'Kelas 6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `tbl_mata_pelajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelajaran` varchar(30) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `km_metpel` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kelas_pelajaran` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_mata_pelajaran`
--

INSERT INTO `tbl_mata_pelajaran` (`id`, `nama_pelajaran`, `id_kelas`, `km_metpel`) VALUES
(1, 'Bahasa Inggris', '1', '2010'),
(2, 'Matematika 1/2010', '1', '2010');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_daftar_kelas` char(20) NOT NULL,
  `id_mata_pelajaran` char(20) NOT NULL,
  `nis` char(8) NOT NULL,
  `nilai_ulangan1` float NOT NULL DEFAULT '0',
  `nilai_ulangan2` float NOT NULL DEFAULT '0',
  `nilai_ulangan3` float NOT NULL DEFAULT '0',
  `nilai_uts` float NOT NULL DEFAULT '0',
  `nilai_uas` float NOT NULL DEFAULT '0',
  `nilai_akhir` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `nis` (`id_daftar_kelas`,`id_mata_pelajaran`),
  KEY `id_kelas` (`id_daftar_kelas`,`id_mata_pelajaran`),
  KEY `id_metpel` (`id_mata_pelajaran`),
  KEY `id_daftar_kelas` (`id_daftar_kelas`),
  KEY `id_daftar_kelas_2` (`id_daftar_kelas`,`id_mata_pelajaran`),
  KEY `nis_2` (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id`, `id_daftar_kelas`, `id_mata_pelajaran`, `nis`, `nilai_ulangan1`, `nilai_ulangan2`, `nilai_ulangan3`, `nilai_uts`, `nilai_uas`, `nilai_akhir`) VALUES
(1, '3', '1', '10110190', 100, 0, 0, 0, 0, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `nis` char(8) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen','Budha','Hindu','Katholik') NOT NULL,
  `alamat` text NOT NULL,
  `tahun_ajaran` char(20) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `no_tlpn_wali` varchar(15) NOT NULL,
  `sekolah_asal` varchar(50) DEFAULT '-',
  PRIMARY KEY (`nis`),
  KEY `tahun_masuk` (`tahun_ajaran`),
  KEY `tahun_masuk_2` (`tahun_ajaran`),
  KEY `nama_wali` (`nama_wali`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `tahun_ajaran`, `nama_wali`, `no_tlpn_wali`, `sekolah_asal`) VALUES
('10110190', 'Thohir', 'Majalaya', '2013-07-17', 'Islam', 'Bancakan', '2012-2013 Ganjil', 'Togar', '021941202494343', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tbl_tahun_ajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajaran` char(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tahun_ajaran` (`tahun_ajaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_tahun_ajaran`
--

INSERT INTO `tbl_tahun_ajaran` (`id`, `tahun_ajaran`) VALUES
(1, '2012-2013 Ganjil');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_usersiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_usersiswa` (
  `username` char(8) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usersiswa`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_daftar_kelas`
--
ALTER TABLE `tbl_daftar_kelas`
  ADD CONSTRAINT `tbl_daftar_kelas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_daftar_kelas_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `tbl_guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_mata_pelajaran`
--
ALTER TABLE `tbl_mata_pelajaran`
  ADD CONSTRAINT `tbl_mata_pelajaran_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbl_guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_usersiswa`
--
ALTER TABLE `tbl_usersiswa`
  ADD CONSTRAINT `tbl_usersiswa_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbl_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
