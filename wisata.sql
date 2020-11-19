-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 01:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(100) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `url` varchar(250) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `keterangan`, `url`, `foto`) VALUES
(1, 'TAMAN SELECTA', 'Bagi Anda yang sedang merencanakan liburan, tidak ada salahnya Anda mengunjungi Malang. Selain terkenal dengan apelnya, Malang memiliki sejumlah tempat wisata menarik yang bisa Anda kunjungi, seperti Desa Pujon Kidul, Omah Kayu Batu, Puncak Paralayang Batu, Museum Angkut Malang, Taman Wisata Selecta, Sumber Jenon Malang, dan masih banyak wisata lainnya. Salah satu wisata yang patut Anda kunjungi adalah Taman Wisata Selecta. Taman Selecta Malang terkenal dengan taman bunganya yang mempesona, namun ada masih banyak hal yang dapat Anda explore di tempat wisata ini.\r\nUntuk dapat memasuki lokasi wisata Taman Selecta Malang dan menikmati fasilitas, pengunjung wajib membayar tiket sebesar Rp 25.000 sampai Rp 30.000. Namun, untuk beberapa wahana khusus pengunjung akan dikenakan tarif tambahan.', 'https://goo.gl/maps/4HiroDHNqVoT36kG8', 'selecta.jpg'),
(2, ' JATIM PARK 1', 'Jatim Park 1 terletak di Jl. Kartika, Ds. Sisir, Batu, Kota Batu, Jawa Timur.\r\nTiket Masuk: Jatim Park 1 Rp70.000/orang untuk hari biasa dan Rp100.000/orang untuk akhir pekan', 'https://goo.gl/maps/VA8LTrMDEhMLKCxAA', 'jp1.jpg'),
(3, 'JATIM PARK 2', 'Buat kamu yang mau ke Jatim Park 2 lokasinya ada di Jl. Oro-Oro Ombo, Temas, Batu, Kota Batu, Jawa Timur.\r\nJatim Park 2 Rp84.000/orang untuk hari biasa dan Rp120.000/orang untuk akhir pekan', 'https://g.page/jatimpark2?share', 'jp2.jpg'),
(4, 'JATIM PARK 3', 'Buat kamu yang ingin ke Jatim Park 3 lokasinya ada Jl. Ir. Soekarno No.144, Ds. Beji, Kec. Junrejo, Kota Batu, Jawa Timur. Tiket Masuk Jatim Park 3 Rp100.000/orang', 'https://g.page/jatimpark3?share', 'jp3.jpeg'),
(5, 'COBAN TALUN', 'Wisata air terjun Coban Talun terletak tak jauh dari kawasan Jatim Park dan Museum Angkut, tepatnya di Dsn. Wonorejo, Ds. Tulungrejo, Bumiaji, Kota Batu, Jawa Timur. Untuk sampai lokasi memakan jarak tempuh sekitar 10 kilometer atau memakan waktu tempuh sekitar 22 menit dari pusat kota Batu. Tiket masuk Rp15.000/orang.', 'https://goo.gl/maps/ACs6sxhb85Ekj4Pr8', 'Coban-Talunl.jpg'),
(6, 'BATU NIGHT SPECTACULAR', 'Batu Night Spectacular terletak di Jln. Hayam Wuruk, Oro-Oro Ombo, Batu, Kota Batu, Jawa Timur. Untuk sampai lokasi memakan jarak tempuh sekitar 4 kilometer atau memakan waktu tempuh sekitar 10 menit dari pusat kota Batu. Tiket masuk Rp30.000/orang untuk hari biasa dan Rp99.000/orang untuk akhir pekan.', 'https://goo.gl/maps/mxntTacuMHZSzzdF7', 'bns.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `user_id` int(11) NOT NULL,
  `wisata` varchar(25) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`user_id`, `wisata`, `rating`) VALUES
(1, 'TAMAN SELECTA', 3),
(1, 'JATIM PARK 3', 5),
(1, 'BATU NIGHT SPECTACULAR', 2),
(2, 'TAMAN SELECTA', 3),
(2, 'TAMAN SELECTA', 3),
(2, 'COBAN TALUN', 3),
(5, 'JATIM PARK 2', 2),
(5, 'TAMAN SELECTA', 1),
(5, 'BATU NIGHT SPECTACULAR', 5),
(4, 'JATIM PARK 3', 3),
(6, 'TAMAN SELECTA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `saran` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `nama_user`, `saran`) VALUES
(1, 'eka', 'masih perlu ditingkatkan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_awal` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama_akhir` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dibuat` datetime NOT NULL,
  `diubah` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `role` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'user_biasa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_awal`, `nama_akhir`, `email`, `password`, `telp`, `dibuat`, `diubah`, `status`, `role`) VALUES
(1, 'eka', 'cahya', 'ekacahya@gmail.com', '202cb962ac59075b964b07152d234b70', '09854557889', '2020-11-17 09:17:30', '2020-11-17 09:17:30', '1', 'user_biasa'),
(2, 'cahya', 'aja', 'cahya@gmail.com', '202cb962ac59075b964b07152d234b70', '09854557999', '2020-11-17 09:17:47', '2020-11-17 09:17:47', '1', 'user_biasa'),
(3, 'ningrum', 'aja', 'ningrum@gmail.com', '202cb962ac59075b964b07152d234b70', '09854557999', '2020-11-17 09:18:16', '2020-11-17 09:18:16', '1', 'user_biasa'),
(4, 'arum', 'aja', 'arum@gmail.com', '202cb962ac59075b964b07152d234b70', '09854557899', '2020-11-17 09:18:46', '2020-11-17 09:18:46', '1', 'user_biasa'),
(5, 'vina', 'azz', 'vina@gmail.com', '202cb962ac59075b964b07152d234b70', '08775999999', '2020-11-17 09:19:34', '2020-11-17 09:19:34', '1', 'user_biasa'),
(6, 'lidya', 'aja', 'lidya', '202cb962ac59075b964b07152d234b70', 'lidya@gmail.com', '2020-11-17 09:20:09', '2020-11-17 09:20:09', '1', 'user_biasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `judul` (`judul`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
