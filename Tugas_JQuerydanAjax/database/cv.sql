-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 03:30 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `link` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama_contact`, `gambar`, `link`) VALUES
(1, 'fahmina21', 'instagram1.png', 'https://www.instagram.com/fahmina21/'),
(2, 'FahmiNA', 'twitter1.png', 'https://twitter.com/FahmiNugroho23'),
(3, 'Fahmi Nugroho', 'gmail1.png', 'mailto:fahminugroho23@gmail.com'),
(4, 'Fahmi Nugroho', 'linkedin1.png', 'https://www.linkedin.com/in/fahmi-nugroho-7a1a6b1a0/');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id_goal` int(11) NOT NULL,
  `goal` varchar(50) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id_goal`, `goal`, `img`) VALUES
(1, 'Pergi haji dengan keluarga', 'ka\'bah.png'),
(2, 'Punya rumah sendiri', 'rumah.png'),
(3, 'Beli PS 5', 'ps.png'),
(4, 'Beli kamera DSLR', 'kamera.png');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang_pendidikan`
--

CREATE TABLE `jenjang_pendidikan` (
  `id_jenjang` int(11) NOT NULL,
  `jenjang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenjang_pendidikan`
--

INSERT INTO `jenjang_pendidikan` (`id_jenjang`, `jenjang`) VALUES
(1, 'Sekolah Dasar'),
(2, 'Sekolah Menengah Pertama'),
(3, 'Sekolah Menengah Atas'),
(4, 'Strata-1'),
(5, 'Strata-2'),
(6, 'Strata-3');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `jenjang`, `nama_sekolah`, `alamat`) VALUES
(1, 'Sekolah Dasar', 'SD AL-Kautsar', 'Pondok Benowo Indah Blok OO 33-35, Pakal, Babat Jerawat, Kec. Pakal, Kota SBY, Jawa Timur 60197'),
(2, 'Sekolah Menengah Pertama', 'SMPN 26 Surabaya', 'Jl. Banjar Sugihan No.21, Banjar Sugihan, Kec. Tandes, Kota SBY, Jawa Timur 60185'),
(3, 'Sekolah Menengah Atas', 'SMAN 11 Surabaya', 'Jl. Manukan Tengah, Manukan Kulon, Kec. Tandes, Kota SBY, Jawa Timur 60185');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `nama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `about_me` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`nama`, `pekerjaan`, `about_me`) VALUES
('Fahmi Nugroho Alibasyah', 'Mahasiswa UPN \"veteran\" Jawa Timur', 'Seorang anak yang dari dulu sangat tertarik dengan gadget terutama komputer dan laptop. Saat SMA memutuskan untuk melanjutkan kuliah dibidang informatika karena ingin belajar lebih lanjut mengenai dunia percodingan, dan akhirnya menjadi hobby karena dari dulu sudah senang mengetik apapun didepan laptop.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id_goal`);

--
-- Indexes for table `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id_goal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  MODIFY `id_jenjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
