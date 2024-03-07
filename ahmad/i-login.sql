-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2024 pada 03.50
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu_ahmad`
--

CREATE TABLE `bukutamu_ahmad` (
  `no` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` int(50) NOT NULL,
  `keperluan` varchar(150) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bukutamu_ahmad`
--

INSERT INTO `bukutamu_ahmad` (`no`, `tanggal`, `nama`, `alamat`, `umur`, `keperluan`, `waktu`, `jk`) VALUES
(64, '2024-02-29', 'dghuhcefr', 'sdeefr', 0, 'Mengambil KK', '2024-02-25 06:19:59', 'Laki-Laki'),
(65, '2024-02-01', '11', 'kp.cibedug', 18, 'mengubah nama', '2024-02-26 01:25:42', 'Laki-Laki'),
(66, '2024-02-02', 'aril', 'kp . lengan sari', 19, 'bansos', '2024-02-26 01:26:26', 'Laki-Laki'),
(67, '2024-02-17', 'Asep juandi', 'kp.bojong koneng', 18, 'bawa kak', '2024-02-26 02:15:37', 'Laki-Laki'),
(68, '2024-02-14', '', 'kp.lamping', 18, 'Mengambil KK', '2024-02-26 03:49:16', 'Laki-Laki'),
(69, '2024-01-30', 'ahmad', 'kp.cibedug', 19, 'Mengambil KK', '2024-02-26 03:55:02', 'Laki-Laki'),
(71, '2024-02-26', 'sam', 'kp.cibedug', 20, 'Mengambil KK', '2024-02-26 04:06:54', 'Laki-Laki'),
(76, '2024-02-08', 'sam', 'kp.cibedug', -2, 'bawa kak', '2024-02-26 05:04:35', 'Laki-Laki'),
(77, '2024-02-07', 'ahmad', 'kp.gunung halu', 19, 'mengubah nama', '2024-02-26 05:14:41', 'Laki-Laki'),
(78, '2024-02-26', 'udin', 'kp.cikalong', 15, 'mmm', '2024-02-26 05:21:57', 'Laki-Laki'),
(79, '2024-02-28', 'andre', 'kp. cadas', 10, 'MM', '2024-02-28 03:10:27', 'Laki-Laki'),
(80, '2024-02-28', 'ahmad', 'kp.cibedug', 17, '11', '2024-02-28 03:44:22', 'Perempuan'),
(81, '2024-02-28', 'sam', 'kp.lamping', 15, 'HSDH', '2024-02-28 04:00:25', 'Laki-Laki'),
(82, '2024-02-29', 'sam tzy', 'kp. cikulawing', 17, 'bawa kak', '2024-02-29 02:17:05', 'Laki-Laki'),
(83, '2024-03-01', 'ahmad tt', 'kp.lamping', 55, 'mm', '2024-03-01 02:00:11', 'Laki-Laki'),
(84, '2024-03-01', 'ahmad YY', 'kp.cibedug', 31, 'mengubah nama', '2024-03-01 02:01:16', 'Laki-Laki'),
(85, '2024-03-01', 'ccdcdf', 'scsd', 21, 'gbhcgbd', '2024-03-01 02:05:25', 'Laki-Laki'),
(86, '2024-03-01', 'sam', 'kp.cibedug', 21, 'HSDH', '2024-03-01 02:07:47', 'Perempuan'),
(87, '2024-03-01', 'mis', 'kp. cadas', 17, 'ngopi', '2024-03-01 02:09:57', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`no`, `username`, `password`) VALUES
(0, 'user', 'user'),
(2, 'ahmad@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukutamu_ahmad`
--
ALTER TABLE `bukutamu_ahmad`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bukutamu_ahmad`
--
ALTER TABLE `bukutamu_ahmad`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
