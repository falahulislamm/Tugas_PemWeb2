-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 01:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpuskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kategori` enum('Umum','Spesialis','Bidan','Dokter Gigi','Anastesi','Bedah','Ginekolog') DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `unit_kerja_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `kategori`, `telpon`, `alamat`, `unit_kerja_id`) VALUES
(1, 'Dr. John Doe', 'L', 'Jakarta', '1980-05-15', 'Umum', '081234567890', 'Jakarta', 1),
(2, 'Dr. Jane Doe', 'P', 'Surabaya', '1975-10-20', 'Spesialis', '082345678901', 'Surabaya', 2),
(3, 'Dr. Michael Smith', 'L', 'Bandung', '1982-03-25', 'Bidan', '083456789012', 'Bandung', 3),
(4, 'Dr. Sarah Johnson', 'P', 'Yogyakarta', '1978-08-10', 'Dokter Gigi', '084567890123', 'Yogyakarta', 4),
(5, 'Dr. Robert Brown', 'L', 'Semarang', '1985-12-05', 'Anastesi', '085678901234', 'Semarang', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pasien`
--

CREATE TABLE `jadwal_pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kategori` enum('Umum','Spesialis','Bidan','Dokter Gigi','Anastesi','Bedah','Ginekolog') NOT NULL,
  `tanggal` date NOT NULL,
  `pesan` text DEFAULT NULL,
  `submit` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_pasien`
--

INSERT INTO `jadwal_pasien` (`id`, `nama`, `no_telp`, `email`, `kategori`, `tanggal`, `pesan`, `submit`) VALUES
(1, 'Muhammad Falahul Islam', 2147483647, 'fal@gmail.com', 'Ginekolog', '2024-06-12', 'Saya mau konsultasi karena ada beberapa keluhan.', '06:34:18'),
(2, 'Nadeo', 2147483647, 'nadeo12@gmail.com', 'Dokter Gigi', '2024-07-13', 'Gigi saya berlubang, saya perlu konsultasi ke dr. Elena Grande', '06:38:01'),
(3, 'Hera Permata', 2147483647, 'heraprmt@gmail.com', 'Bedah', '2024-08-12', 'Saya telah mengidap penyakit lambung akut, perlu tindak lanjut dengan dr. Exelyn Paramoe', '06:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `kec_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama`, `kec_id`) VALUES
(1, 'Kebon Jeruk', 1),
(2, 'Cipete', 2),
(3, 'Pondok Labu', 3),
(4, 'Cibubur', 4),
(5, 'Cilandak', 5);

-- --------------------------------------------------------

--
-- Table structure for table `paramedik`
--

CREATE TABLE `paramedik` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kategori` enum('Umum','Spesialis','Bidan','Dokter Gigi','Anastesi','Bedah','Ginekolog') DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `unit_kerja_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paramedik`
--

INSERT INTO `paramedik` (`id`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `kategori`, `telpon`, `alamat`, `unit_kerja_id`) VALUES
(1, 'Dr. Jack Sparrow', 'L', 'Jakarta', '2001-12-21', 'Umum', '085892226663', 'Pancoran Mas, Depok', 1),
(2, 'Dr. Elena Grande', 'P', 'Bekasi', '2003-01-11', 'Dokter Gigi', '08234561170', 'Gunung Putri, Bogor', 2),
(3, 'Dr. Exelyn Paramoe', 'P', 'Jakarta', '2005-03-15', 'Bedah', '083456789012', 'Tebet, Jakarta Selatan', 3),
(4, 'Dr. Emanuel Dru', 'L', 'Jatiasih', '1990-10-24', 'Ginekolog', '08984320456', 'Jatiasih, Bekasi', 4),
(5, 'Dr. Robert Brown', 'L', 'Bali', '1985-12-05', 'Anastesi', '085678901234', 'Banten', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kelurahan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `kode`, `nama`, `tmp_lahir`, `tgl_lahir`, `gender`, `email`, `alamat`, `kelurahan_id`) VALUES
(1, '742', 'Falah', 'Jakarta', '1990-05-15', 'L', 'faljet@gmail.com', 'Jl. Harum No. 1', 1),
(2, '743', 'Rahma', 'Bekasi', '2003-01-11', 'P', 'rahmahaula@gmail.com', 'Jl. Bangsa No. 12', 2),
(3, '744', 'Salwa', 'Jakarta', '2005-03-17', 'P', 'salwavy@gmail.com', 'Jl. Angsa No. 90', 3),
(4, '745', 'Herensen', 'Blitar', '1993-04-29', 'L', 'rensen@gmail.com', 'Jl. Dahlia No. 3', 4),
(5, '746', 'Hoxato', 'Sidoarjo', '1991-09-20', 'L', 'xatoo@gmail.com', 'Jl. Murcoyo No. 22', 5);

-- --------------------------------------------------------

--
-- Table structure for table `periksa`
--

CREATE TABLE `periksa` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `berat` double DEFAULT NULL,
  `tinggi` double DEFAULT NULL,
  `tensi` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `pasien_id` int(11) DEFAULT NULL,
  `dokter_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `periksa`
--

INSERT INTO `periksa` (`id`, `tanggal`, `berat`, `tinggi`, `tensi`, `keterangan`, `pasien_id`, `dokter_id`) VALUES
(1, '2024-03-01', 65.5, 170, '120/80', 'Normal', 1, 1),
(2, '2024-03-05', 70, 165, '130/85', 'Perlu pemantauan lebih lanjut', 2, 2),
(3, '2024-03-10', 72, 175, '140/90', 'Perlu tindakan medis', 3, 3),
(4, '2024-03-15', 68.5, 168, '125/82', 'Normal', 4, 4),
(5, '2024-03-20', 75, 180, '135/88', 'Perlu pemantauan lebih lanjut', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit_kerja`
--

INSERT INTO `unit_kerja` (`id`, `nama`) VALUES
(1, 'Rumah Sakit Jakarta'),
(2, 'Rumah Sakit Surabaya'),
(3, 'Klinik Bandung'),
(4, 'Puskesmas Yogyakarta'),
(5, 'Rumah Sakit Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'fal', 'sukses'),
(2, 'blue9', '0909');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_kerja_id` (`unit_kerja_id`);

--
-- Indexes for table `jadwal_pasien`
--
ALTER TABLE `jadwal_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paramedik`
--
ALTER TABLE `paramedik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_kerja_id` (`unit_kerja_id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelurahan_id` (`kelurahan_id`);

--
-- Indexes for table `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_id` (`pasien_id`),
  ADD KEY `dokter_id` (`dokter_id`);

--
-- Indexes for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_pasien`
--
ALTER TABLE `jadwal_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paramedik`
--
ALTER TABLE `paramedik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`unit_kerja_id`) REFERENCES `unit_kerja` (`id`);

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`kelurahan_id`) REFERENCES `kelurahan` (`id`);

--
-- Constraints for table `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `periksa_ibfk_1` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`),
  ADD CONSTRAINT `periksa_ibfk_2` FOREIGN KEY (`dokter_id`) REFERENCES `dokter` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
