-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 07:13 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `isi` varchar(650) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `waktu`, `tag`) VALUES
(1, 'Demi Masa Depan Liverpool, Klopp dan Gerrard Akan Saling Dukung', 'Juergen Klopp berjanji akan membantu Steven Gerrard dalam debut memimpin tim Liverpool U-18. Bagi Klopp, kerjasama harus dijalin untuk masa depan The Reds', '2017-07-11 16:07:35', 'Liverpool'),
(2, 'Wijnaldum Benci Periode Pramusim', 'Liverpool - Seperti yang sudah-sudah, Georginio Wijnaldum membenci periode pramusim. Kenapa?\r\n\r\nLiverpool akan melakoni laga pramusim sebelum memulai kompetisi 2017/2018 dengan menghadapi Tranmere Rover, Kamis (13/7/2017) waktu setempat. Juergen Klopp selaku pelatih tim sudah memulai pemusatan latihan di Melwood.', '2017-07-11 16:07:35', 'Liverpool'),
(3, 'Paulinho Dilarang ke Barca karena Sangat Dibutuhkan Evergrande', 'Guangzhou - Guangzhou Evergrande meminta Paulinho memahami kenapa dia diadang pindah ke Barcelona. Sebab klub masih butuh Paulinho untuk menjuarai liga.\r\n\r\nPaulinho sedang tampil cemerlang bersama Evergrande. Dari 25 penampilan di semua kompetisi, ia mencetak 11 gol. Di Liga Super China, Evergrande merasakan betul performa apik Paulino. Tim besutan Luis Felipe Scolari itu kini memuncaki klasemen dengan poin 37 dari 16 pertandingan, unggul satu angka Shanghai SIPG di posisi kedua.\r\n', '2017-07-11 16:41:17', 'Barcelona'),
(4, 'James Rodriguez adalah Permintaan Terbesar Ancelotti', 'Munich - Bayern Munich mendatangkan James Rodriguez dari Real Madrid. James memang ada di posisi paling atas dalam daftar permintaan Carlo Ancelotti.\r\n\r\nJames direkrut Bayern dengan status pinjaman dari Madrid. Bukan hanya semusim, James akan dipinjam selama dua tahun sampai 2019.\r\n\r\nChairman Bayern Karl-Heinz Rummenigge mengungkapkan bahwa perekrutan James merupakan permintaan Ancelotti. Keduanya memang sudah tak asing lagi setelah sempat bekerja sama di Madrid pada 2014-2015.', '2017-07-11 16:41:17', 'Bayern Munich'),
(5, 'Lacazette Diremehkan, Koscielny Membela', 'London - Bek Arsenal, Laurent Koscielny, mengapresiasi perkembangan Alexandre Lacazette dan Sead Kolasinac. Dua pemain baru itu menunjukkan permainan sesuai harapan.\r\n\r\nKedatangan Lacazette ke Arsenal mendapatkan sorotan tajam.(Lanjut)', '2017-08-01 16:50:48', 'Arsenal'),
(6, 'Sanchez Sudah Kembali Berlatih dengan Arsenal', '', '2017-08-01 17:03:04', 'Arsenal'),
(7, 'Sevilla Bawa Pulang Jesus Navas', '', '2017-08-01 17:09:06', 'Sevilla, Manchester ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
