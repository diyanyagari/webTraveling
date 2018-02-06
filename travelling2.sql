-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mei 2015 pada 04.34
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travelling2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel`
--

CREATE TABLE IF NOT EXISTS `travel` (
  `id_travel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id_travel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `travel`
--

INSERT INTO `travel` (`id_travel`, `nama_user`, `place`, `picture`, `deskripsi`, `category`) VALUES
(7, 'Manggar Mahardhika', 'Gunung Papandayan', 'gambar/IMG_5928.JPG', 'Memiliki ketinggian 2.665mdpl. Terletak sekitar 70 KM sebelah tenggara Kota Bandung. Tempat ini bener bener keren bro! Selain bisa melihat sunrise, ada banyak bonus saat perjalanan ke atas puncak papa', 'Mountain'),
(8, 'Yogi Mandala Putra', 'Pantai Kuta, Bali', 'gambar/Kuta-Beach-Exotic-Wallpaper.jpg', 'Pantai yang terletak di Bali ini sangat memukau guys. Apalagi sunsetnya yang benar benar cantik. ', 'Beach'),
(9, 'Fakhri Abdillah Azmi', 'Kota Tua', 'gambar/hbkb_kotatua4.JPG', 'Menjadi tempat wisata yang lumayan kok buat nongkrong sama temen temen. ', 'Town');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
