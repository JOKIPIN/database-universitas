-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2023 pada 08.20
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitasnatar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `program_studi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `program_studi`) VALUES
('121140001', 'Nasrul Alfin Prassetyo', 'if'),
('121140002', 'asep boboho', 'if'),
('121140003', 'Budi Takbudi', 'if'),
('121140004', 'Karta Yuasa', 'el'),
('121140005', 'George Sipatu', 'gl'),
('121140006', 'Muhhayat Fidal', 'kh'),
('121140007', 'Septian Falupi', 'el'),
('121140008', 'Fadila Septiani', 'kh'),
('121140009', 'Billa Sabila', 'if'),
('121140010', 'Basis Datuk', 'el'),
('121140011', 'Dermawan Palve', 'gl'),
('121140012', 'Parsite Kirta', 'if'),
('121140013', 'Aldino Cikaka', 'el'),
('121140014', 'Serial Abibu', 'el'),
('121140015', 'Diri Sendiri', 'gl'),
('121140016', 'Hidro Ponic', 'kh'),
('121140017', 'Polybac', 'el'),
('121140018', 'Proses Baik', 'if'),
('121140019', 'Barhari Hari', 'gl'),
('121140020', 'Big Boss', 'el'),
('121140021', 'Didi Vibais', 'gl');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
