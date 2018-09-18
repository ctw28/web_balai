-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 10:17 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bwss4kdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_berita`
--

CREATE TABLE `t_berita` (
  `id_berita` bigint(20) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_berita` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `klik` bigint(20) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL,
  `by` varchar(100) NOT NULL,
  `judul_berita_seo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_berita`
--

INSERT INTO `t_berita` (`id_berita`, `id_kategori`, `judul_berita`, `foto`, `isi_berita`, `tanggal_publish`, `klik`, `status`, `by`, `judul_berita_seo`) VALUES
(64, 1, 'ini judul 1', '', 'kwkwkw oekowkeok wkeow koekao keoak eoka owkeoweaawea', '2018-09-06 17:29:02', 0, 'Draft', 'Admin', 'ini-judul-1'),
(65, 2, 'kwkwkwkwk ggwp bro as', '', 'sdfsd asdf as fasd fas df asdfa sdf asfsa', '2018-09-06 17:29:19', 0, 'Draft', 'Admin', 'kwkwkwkwk-ggwp-bro-as'),
(66, 1, 'coba ini judul', '', 'sdfads asdfsdfa sdfads asdfsdfa sdfads asdfsdfa sdfads asdfsdfa sdfads asdfsdfa sdfads asdfsdfa sdfads asdfsdfa sdfads asdfsdfa', '2018-09-06 17:35:04', 0, 'Draft', 'Admin', 'coba-ini-judul'),
(67, 2, 'hari Bakti PU', 'calendar1.png', 'selamat hari bakti PU', '2018-09-07 18:02:54', 0, 'Draft', 'Admin', 'hari-bakti-pu'),
(68, 2, 'ISO SISDA', '641784.jpg', 'iso sisda adalah kwkwkwkw', '2018-09-07 18:21:52', 0, 'Draft', 'Admin', 'iso-sisda'),
(69, 1, 'ini yang mau dipublish', 'anime-guru-great-teacher-onizuka.jpg', 'keren yah', '2018-09-07 18:41:04', 0, 'Publish', 'Admin', 'ini-yang-mau-dipublish');

-- --------------------------------------------------------

--
-- Table structure for table `t_berita_kategori`
--

CREATE TABLE `t_berita_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `nama_kategori_seo` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_berita_kategori`
--

INSERT INTO `t_berita_kategori` (`id_kategori`, `nama_kategori`, `nama_kategori_seo`, `deskripsi`) VALUES
(1, 'berita balai', 'berita-balai', 'berita kegiatan kegiatan balai Wilayah Sungai Sulawesi IV Kendari'),
(2, 'berita PUPR', 'berita-PUPR', 'Berita yang diambil dari berita pu.go.id atau sda.pu.go.id');

-- --------------------------------------------------------

--
-- Table structure for table `t_menu_website`
--

CREATE TABLE `t_menu_website` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `is_main_menu` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_menu_website`
--

INSERT INTO `t_menu_website` (`id_menu`, `nama_menu`, `link`, `is_main_menu`) VALUES
(1, 'home', '', 0),
(2, 'profil', 'profil', 0),
(3, 'data informasi sda', 'data-informasi-sda', 0),
(4, 'publikasi', 'publikasi', 0),
(5, 'galeri', 'galeri', 0),
(6, 'layanan publik', 'layanan-publik', 0),
(7, 'tkpsda', 'tkpsda', 0),
(8, 'p3a', 'p3a', 0),
(9, 'kontak', 'kontak', 0),
(10, 'sejarah', 'sejarah', 2),
(11, 'galeri foto', 'galeri-foto', 5),
(12, 'galeri video', 'galeri-video', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `t_berita_kategori`
--
ALTER TABLE `t_berita_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_menu_website`
--
ALTER TABLE `t_menu_website`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id_berita` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `t_berita_kategori`
--
ALTER TABLE `t_berita_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_menu_website`
--
ALTER TABLE `t_menu_website`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
