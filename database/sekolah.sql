-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2025 at 12:55 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama`, `username`, `password`, `level`) VALUES
('farel', 'lol', '123', 'admin'),
('cila', 'bocil', '321', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `Id_guru` int NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`Id_guru`, `Nama`, `Alamat`, `Telp`) VALUES
(1, 'Budi Santoso', 'Jl. Raya No.10, Jakarta', '812345678'),
(2, 'Siti Aisyah', 'Jl. Merdeka No.5, Surabaya', '823456789'),
(3, 'Agus Wibowo', 'Jl. Pahlawan No.20, Bandung', '834567890'),
(4, 'Siti Nurhaliza', 'Jl. Raya No. 3, Yogyakarta', '0274-5553456'),
(5, 'Rudi Kurniawan', 'Jl. Bahagia No. 8, Medan', '061-5554567'),
(6, 'Dewi Anggraeni', 'Jl. Cempaka No. 4, Makassar', '0411-5556789'),
(7, 'Eko Prabowo', 'Jl. Taman Sari No. 7, Semarang', '024-5552345'),
(8, 'Linda Suryani', 'Jl. Kenanga No. 15, Malang', '0341-5558765'),
(9, 'Ahmad Faisal', 'Jl. Sudirman No. 22, Bogor', '0251-5558765'),
(10, 'Rina Amelia', 'Jl. Bunga No. 11, Surakarta', '0271-5557654'),
(11, 'Fajar Pratama', 'Jl. Melati No. 18, Palembang', '0711-5553210'),
(12, 'Maya Kartika', 'Jl. Merdeka No. 4, Bekasi', '021-5556543'),
(13, 'Hendra Gunawan', 'Jl. Raya No. 5, Pekanbaru', '0761-5553211'),
(14, 'Lina Dewi', 'Jl. Pelita No. 9, Pontianak', '0561-5554123'),
(15, 'Agus Supriyanto', 'Jl. Bambu No. 14, Lampung', '0721-5559876'),
(16, 'Rosa Putri', 'Jl. Kembang No. 13, Bali', '0361-5554567'),
(17, 'Gilang Prasetyo', 'Jl. Kemenangan No. 2, Batam', '0778-5552345'),
(18, 'Wati Purnama', 'Jl. Taman No. 16, Surabaya', '031-5559876'),
(19, 'Bima Setiawan', 'Jl. Kencana No. 6, Denpasar', '0361-5553456'),
(20, 'Nina Wahyuni', 'Jl. Pahlawan No. 30, Cirebon', '0231-5558765'),
(21, 'Zulfiqar Maulana', 'Jl. Merdeka No. 21, Solo', '0271-5552345'),
(22, 'Cindy Haryani', 'Jl. Taman No. 1, Depok', '021-5554321'),
(23, 'Oka Prasetyo', 'Jl. Raya No. 10, Samarinda', '0541-5558765'),
(24, 'Michella Saraswati', 'Jl. Anggrek No. 3, Serang', '0254-5553210'),
(25, 'Rizki Aditya', 'Jl. Sembada No. 2, Bogor', '0251-5557654'),
(26, 'Vera Setyorini', 'Jl. Pantai No. 8, Palembang', '0711-5558765'),
(27, 'Eka Pratama', 'Jl. Karang No. 5, Tegal', '0283-5552345');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int NOT NULL,
  `Nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `Nama_kelas`) VALUES
(1, 'Kelas 1A'),
(2, 'Kelas 1B'),
(3, 'Kelas 2A'),
(4, 'Kelas 2B'),
(5, 'Kelas 3A'),
(6, 'Kelas 3B'),
(7, 'Kelas 4A'),
(8, 'Kelas 4B'),
(9, 'Kelas 5A'),
(10, 'Kelas 5B'),
(11, 'Kelas 6A'),
(12, 'Kelas 6B');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `Id_mapel` int NOT NULL,
  `Nama_mapel` varchar(100) NOT NULL,
  `Id_guru` int NOT NULL,
  `Jumlah_jam` int NOT NULL,
  `Id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`Id_mapel`, `Nama_mapel`, `Id_guru`, `Jumlah_jam`, `Id_kelas`) VALUES
(1, 'Matematika', 101, 4, 1),
(2, 'Bahasa Indonesia', 102, 3, 1),
(3, 'Fisika', 103, 5, 2),
(4, 'Kimia', 104, 4, 2),
(5, 'Biologi', 105, 3, 3),
(6, 'Sejarah', 106, 2, 3),
(7, 'Geografi', 107, 3, 4),
(8, 'Ekonomi', 108, 4, 4),
(9, 'Pendidikan Agama', 109, 2, 5),
(10, 'Olahraga', 110, 2, 5),
(11, 'Seni Budaya', 111, 3, 6),
(12, 'Bahasa Inggris', 112, 4, 6),
(13, 'Matematika', 101, 5, 7),
(14, 'Fisika', 103, 3, 7),
(15, 'Kimia', 104, 4, 8),
(16, 'Biologi', 105, 5, 8),
(17, 'Sejarah', 106, 3, 9),
(18, 'Geografi', 107, 2, 9),
(19, 'Ekonomi', 108, 4, 10),
(20, 'Pendidikan Agama', 109, 2, 10),
(21, 'Olahraga', 110, 3, 11),
(22, 'Seni Budaya', 111, 3, 11),
(23, 'Bahasa Inggris', 112, 5, 12),
(24, 'Matematika', 101, 4, 12),
(25, 'Bahasa Indonesia', 102, 3, 13),
(26, 'Fisika', 103, 4, 13),
(27, 'Kimia', 104, 5, 14),
(28, 'Biologi', 105, 3, 14),
(29, 'Sejarah', 106, 4, 15),
(30, 'Geografi', 107, 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Id_kelas` int NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `TTL` date NOT NULL,
  `Telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `Nama`, `Id_kelas`, `Alamat`, `TTL`, `Telp`) VALUES
(1, 'Andi Pratama', 1, 'Jl. Merdeka No. 10, Jakarta', '2005-02-15', '021-5551234'),
(2, 'Budi Santoso', 2, 'Jl. Pahlawan No. 25, Bandung', '2004-07-30', '022-5555678'),
(3, 'Citra Dewi', 3, 'Jl. Suka Maju No. 12, Surabaya', '2005-12-05', '031-5559876'),
(4, 'Dewi Anggraeni', 1, 'Jl. Raya No. 3, Yogyakarta', '2004-04-10', '0274-5553456'),
(5, 'Eko Prabowo', 2, 'Jl. Bahagia No. 8, Medan', '2006-01-20', '061-5554567'),
(6, 'Fajar Kurniawan', 3, 'Jl. Cempaka No. 4, Makassar', '2005-03-25', '0411-5556789'),
(7, 'Gilang Prasetyo', 1, 'Jl. Taman Sari No. 7, Semarang', '2004-08-14', '024-5552345'),
(8, 'Hana Pertiwi', 2, 'Jl. Kenanga No. 15, Malang', '2005-10-17', '0341-5558765'),
(9, 'Irwan Setiawan', 3, 'Jl. Sudirman No. 22, Bogor', '2004-05-30', '0251-5558765'),
(10, 'Joko Widodo', 1, 'Jl. Bunga No. 11, Surakarta', '2006-02-11', '0271-5557654'),
(11, 'Kiki Permatasari', 2, 'Jl. Melati No. 18, Palembang', '2005-06-01', '0711-5553210'),
(12, 'Lina Dewi', 3, 'Jl. Merdeka No. 4, Bekasi', '2004-09-10', '021-5556543'),
(13, 'Maya Kartika', 1, 'Jl. Raya No. 5, Pekanbaru', '2005-12-19', '0761-5553211'),
(14, 'Nia Sari', 2, 'Jl. Pelita No. 9, Pontianak', '2006-01-08', '0561-5554123'),
(15, 'Oka Prasetyo', 3, 'Jl. Bambu No. 14, Lampung', '2005-04-05', '0721-5559876'),
(16, 'Pipit Wulandari', 1, 'Jl. Kembang No. 13, Bali', '2006-03-15', '0361-5554567'),
(17, 'Qomarudin', 2, 'Jl. Kemenangan No. 2, Batam', '2005-05-10', '0778-5552345'),
(18, 'Rina Amelia', 3, 'Jl. Taman No. 16, Surabaya', '2004-11-03', '031-5559876'),
(19, 'Siti Nurhaliza', 1, 'Jl. Kencana No. 6, Denpasar', '2005-07-22', '0361-5553456'),
(20, 'Tomi Satria', 2, 'Jl. Pahlawan No. 30, Cirebon', '2004-12-18', '0231-5558765'),
(21, 'Umiati Rahmawati', 3, 'Jl. Merdeka No. 21, Solo', '2006-04-04', '0271-5552345'),
(22, 'Vera Setyorini', 1, 'Jl. Taman No. 1, Depok', '2005-09-27', '021-5554321'),
(23, 'Wawan Kurniawan', 2, 'Jl. Raya No. 10, Samarinda', '2004-01-14', '0541-5558765'),
(24, 'Xenia Pratama', 3, 'Jl. Anggrek No. 3, Serang', '2005-10-11', '0254-5553210'),
(25, 'Yudi Santoso', 1, 'Jl. Sembada No. 2, Bogor', '2006-02-09', '0251-5557654'),
(26, 'Zulfiqar Maulana', 2, 'Jl. Pantai No. 8, Palembang', '2005-08-20', '0711-5558765'),
(27, 'Abdi Mulya', 3, 'Jl. Karang No. 5, Tegal', '2006-03-12', '0283-5552345'),
(28, 'Bima Setiawan', 1, 'Jl. Kencana No. 14, Malang', '2005-01-17', '0341-5554321'),
(29, 'Cindy Haryani', 2, 'Jl. Selamat No. 9, Batam', '2006-05-05', '0778-5557654'),
(30, 'Diana Hermita', 3, 'Jl. Pahlawan No. 19, Bali', '2005-11-10', '0361-5558765');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`Id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`Id_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `Id_guru` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `Id_mapel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `NIS` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
