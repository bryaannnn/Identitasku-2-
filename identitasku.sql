-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 11:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `identitasku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(250) NOT NULL,
  `password_admin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buktisyarat`
--

CREATE TABLE `buktisyarat` (
  `id_buktisyarat` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `foto_kk` varchar(250) NOT NULL,
  `foto_penduduk` varchar(250) NOT NULL,
  `sidik_jari` varchar(250) NOT NULL,
  `akta_kelahiran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buktisyarat`
--

INSERT INTO `buktisyarat` (`id_buktisyarat`, `id_penduduk`, `foto_kk`, `foto_penduduk`, `sidik_jari`, `akta_kelahiran`) VALUES
(9, 20, 'userfile1686231535.jpg', 'userfile1686231535.png', 'userfile1686231535.jpg', 'userfile1686231535.jpg'),
(10, 20, 'userfile1686296268.jpg', 'userfile1686296268.jpg', 'userfile1686296268.jpg', 'userfile1686296268.jpg'),
(13, 20, 'userfile1686301933.jpg', 'userfile1686301933.jpg', 'userfile1686301933.jpg', 'userfile1686301933.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `id_ktp` bigint(20) UNSIGNED NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `nama_ktp` varchar(250) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `golongan_darah` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `rt` varchar(250) NOT NULL,
  `rw` varchar(250) NOT NULL,
  `kel_desa` varchar(250) NOT NULL,
  `kecamatan` varchar(250) NOT NULL,
  `agama` varchar(250) NOT NULL,
  `status_ktp` varchar(250) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `kewarganegaraan` varchar(250) NOT NULL,
  `gambar_ktp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`id_ktp`, `id_penduduk`, `nik`, `nama_ktp`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `golongan_darah`, `alamat`, `rt`, `rw`, `kel_desa`, `kecamatan`, `agama`, `status_ktp`, `pekerjaan`, `kewarganegaraan`, `gambar_ktp`) VALUES
(2147483668, 20, '8797482415', 'BRYAN AKMAL I.D', 'SIDOARJO', '2007-05-05', 'LAKI-LAKI', 'O', 'PERUM.GRAHA CANDI MAS', '07', '05', 'GELAM', 'CANDI', 'ISLAM', 'BELUM KAWIN', 'PILOT', 'WNI', 'userfile1686296577.jpg'),
(2147483669, 20, '8797482415', 'BRYAN AKMAL I.D', 'SIDOARJO', '2023-06-05', 'LAKI-LAKI', 'B', 'PERUM.GRAHA CANDI MAS', '04', '05', 'GELAM', 'CANDI', 'ISLAM', 'BELUM KAWIN', 'PILOT', 'WNI', 'userfile1686299692.jpg'),
(2147483670, 20, '8797482415', 'ANNA SOVIANA MARIA', 'SURABAYA', '2023-06-13', 'PEREMPUAN', 'B', 'PERUM.GRAHA CANDI MAS', '01', '01', 'GELAM', 'CANDI', 'ISLAM', 'BELUM KAWIN', 'PILOT', 'WNI', 'userfile1686301144.jpg'),
(2147483671, 20, '873275072134', 'BRYAN AKMAL I.D', 'SIDOARJO', '2023-05-03', 'LAKI-LAKI', 'B', 'PERUM.GRAHA CANDI MAS', '04', '04', 'GELAM', 'CANDI', 'KRISTEN', 'BELUM KAWIN', 'PILOT', 'WNI', 'userfile1686302000.jpg'),
(2147483672, 20, '873275072134', 'BRYAN AKMAL I.D', 'SIDOARJO', '2023-05-03', 'LAKI-LAKI', 'B', 'PERUM.GRAHA CANDI MAS', '04', '04', 'GELAM', 'CANDI', 'KRISTEN', 'BELUM KAWIN', 'PILOT', 'WNI', 'userfile1686302193.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `no_kk` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username_penduduk` varchar(250) NOT NULL,
  `no_telp_penduduk` varchar(15) NOT NULL,
  `password_penduduk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik`, `no_kk`, `email`, `username_penduduk`, `no_telp_penduduk`, `password_penduduk`) VALUES
(20, '8797482415', '1068656545673', 'bryan@gmail.com', 'roni', '085806662614', 'qrqw233');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buktisyarat`
--
ALTER TABLE `buktisyarat`
  ADD PRIMARY KEY (`id_buktisyarat`),
  ADD KEY `fk_buktisyarat` (`id_penduduk`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`id_ktp`),
  ADD KEY `fk_ktp` (`id_penduduk`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `buktisyarat`
--
ALTER TABLE `buktisyarat`
  MODIFY `id_buktisyarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id_ktp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483673;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buktisyarat`
--
ALTER TABLE `buktisyarat`
  ADD CONSTRAINT `fk_buktisyarat` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`);

--
-- Constraints for table `ktp`
--
ALTER TABLE `ktp`
  ADD CONSTRAINT `fk_ktp` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
