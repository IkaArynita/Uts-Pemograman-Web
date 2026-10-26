-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2026 pada 02.35
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db5a`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaimahasiswa`
--

CREATE TABLE `nilaimahasiswa` (
  `NIM` varchar(10) NOT NULL,
  `NamaMahasiswa` varchar(30) NOT NULL,
  `NilaiAkhir` float NOT NULL,
  `NilaiHuruf` char(5) DEFAULT NULL,
  `Predikat` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilaimahasiswa`
--

INSERT INTO `nilaimahasiswa` (`NIM`, `NamaMahasiswa`, `NilaiAkhir`, `NilaiHuruf`, `Predikat`, `created_date`, `modified_date`, `foto`) VALUES
('3201426059', 'Nurhalija', 92.5, 'A', 'Sangat Memuaskan', '2026-10-25 14:56:39', '2026-10-25 14:56:39', ''),
('3202416013', 'Fatimah Martin', 98, 'A', 'Sangat Memuaskan', '2026-10-12 08:09:38', '2026-10-25 07:50:49', 'foto_6ade09394f8157.09581005.jpeg'),
('3202416027', 'Ika Arynita', 99, 'A', 'Sangat Memuaskan', '2026-10-12 08:08:22', '2026-10-25 07:46:31', 'foto_6ade08371018e3.91181887.jpeg'),
('3202416049', 'Muhammad Nabil Fauzal Abrar', 95.5, 'A', 'Sangat Memuaskan', '2026-10-25 14:56:06', '2026-10-25 14:56:06', ''),
('3202416079', 'Restu Wardhana Putra', 90, 'A', 'Sangat Memuaskan', '2026-10-12 08:18:08', '2026-10-25 07:46:14', 'foto_6ade082642da58.45301888.jpeg'),
('3267387278', 'Putri', 60.51, 'C', 'Cukup Memuaskan', '2026-10-25 14:11:51', '2026-10-25 14:11:51', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nilaimahasiswa`
--
ALTER TABLE `nilaimahasiswa`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
