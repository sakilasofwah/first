-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 02. Februari 2020 jam 02:03
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE IF NOT EXISTS `suratkeluar` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(25) NOT NULL,
  `asal_surat` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `tgl_terima` date NOT NULL,
  `pengantar_surat` varchar(30) NOT NULL,
  `perihal` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`id`, `no_surat`, `asal_surat`, `tgl_surat`, `penerima`, `tgl_terima`, `pengantar_surat`, `perihal`) VALUES
(4, '800/1137/disdagper/2019', 'Kepala Dinas', '2019-08-21', 'Dispora', '2019-08-21', 'Staff Disdagper', 'Undangan Rapat Proyek Pembangunan Pasar Penjualan'),
(5, '800/1139/disdagper/2019', 'Kabid Perdagangan', '2019-08-24', 'Disdagper', '2019-08-24', 'Staff Perdagangan', 'SPT an Doni Rahmansyah (Survei Harga)'),
(6, '800/1140/disdagper/2019', 'Kasubag Umum', '2019-09-16', 'Staff Umum', '2019-09-16', 'Disdagper', 'Undangan Rapat Di Kantor Pemko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE IF NOT EXISTS `suratmasuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(25) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `pengantar_surat` varchar(25) NOT NULL,
  `penerima_surat` varchar(25) NOT NULL,
  `perihal` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `no_surat`, `kepada`, `tgl_surat`, `pengirim`, `tgl_masuk`, `pengantar_surat`, `penerima_surat`, `perihal`) VALUES
(11, '005/15201/POD', 'Kepala Dinas', '2019-08-19', 'Setdakot', '2019-08-19', 'Staff Pemko', 'Juliabahri', 'Undangan Rapat Di Kantor Pemko'),
(12, '900/15215/BPKPAD', 'Kabid Pasar', '2019-08-19', 'Setdakot', '2019-08-19', 'Sumantri', 'Juliabahri', 'Penyusunan RKA Anggaran Pendapatan dan Belanja Daerah Tahun Anggaran 2019'),
(13, '700/14621/SETDA/2019', 'Kasubag Umum', '2019-09-05', 'Setdakot', '2019-09-05', 'Staff Kantor', 'Putri', 'Tindak lanjut rekomendasi hasil temuan Bpk RI Perwakilan Provinsi Sumatra Utara'),
(14, '510.13/0110/DisBUDPAR', 'Kepala Dinas', '2019-09-15', 'Gubernur Sulsel', '2019-09-15', 'Staff Pemko', 'Rahmayanti', 'Undangan Pekan Raya Sulsel 2019'),
(17, '530/232/Disperind/v/2019', 'Kasubag Umum', '2019-09-25', 'Gubernur Sumut', '2019-09-25', 'Staff Pemko', 'Rahmayanti', 'Sriwijaya Expo 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '81dc9bdb52d04dc20036dbd8313ed055', 'disdagper@gmail.com', 'Disdagper Tg Balai', 1, 'Staff Disdagper Tg Balai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
