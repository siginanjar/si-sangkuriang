-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2013 at 01:44 
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absensi`, `id_daftar_kelas`, `nis`, `tanggal`, `status`, `keterangan`) VALUES
(2, '1-2012-2013-10110139', '', '2013-06-22 21:56:09', 'Hadir', NULL),
(4, '1-2012-2013-10110139', '10110139', '2013-06-22 21:58:44', 'Hadir', NULL),
(5, '1-2012-2013-10110139', '10110139', '2013-06-22 21:59:19', 'Absen', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_daftar_kelas` (
  `id_daftar_kelas` varchar(25) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `nis` char(8) NOT NULL,
  `tahun_ajaran` char(9) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_daftar_kelas`),
  KEY `nis` (`nip`),
  KEY `id_kelas` (`id_kelas`),
  KEY `nip` (`nip`),
  KEY `nis_2` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daftar_kelas`
--


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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`nip`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `golongan`, `spesialisai`) VALUES
('12345678912345678900', 'Aditia', 'Majalengka', '1992-10-05', 'VA', 'Pendidikan Agama Islam'),
('21984910284912849120', 'Dadang Setiadi', 'Majalanekga', '2013-06-10', '4A', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`) VALUES
('Kelas1', 'Kelas 1'),
('Kelas3', 'K 3'),
('Kelas2', 'K 2'),
('Kelas4', 'K 4'),
('2', 'K 2'),
('K5', 'Kelas 5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `tbl_mata_pelajaran` (
  `id_mata_pelajaran` char(5) NOT NULL,
  `nama_pelajaran` varchar(20) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `km_metpel` varchar(10) NOT NULL,
  PRIMARY KEY (`id_mata_pelajaran`),
  KEY `kelas_pelajaran` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mata_pelajaran`
--

INSERT INTO `tbl_mata_pelajaran` (`id_mata_pelajaran`, `nama_pelajaran`, `id_kelas`, `km_metpel`) VALUES
('MTK01', 'Matematika', 'Kelas 1', '2010');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id`, `id_daftar_kelas`, `id_mata_pelajaran`, `nis`, `nilai_ulangan1`, `nilai_ulangan2`, `nilai_ulangan3`, `nilai_uts`, `nilai_uas`, `nilai_akhir`) VALUES
(2, '1-2011-2012-10110120', 'MTK01', '10110139', 45, 60, 90, 68, 99, 72.4);

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
('10110130', 'Arif', 'Bojong', '1996-02-08', 'Islam', 'Alamat', '2012-2013 Ganjil', 'Dadang', '081324890473', '-'),
('10110139', 'Aditia', 'Majalengka', '1992-10-05', 'Islam', 'Bandung', '2010-2011 Ganjil', 'Ani Suryani', '081324890473', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tbl_tahun_ajaran` (
  `tahun_ajaran` char(20) NOT NULL,
  PRIMARY KEY (`tahun_ajaran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tahun_ajaran`
--

INSERT INTO `tbl_tahun_ajaran` (`tahun_ajaran`) VALUES
('2010-2011 Genap'),
('2012-2013 Genap');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
