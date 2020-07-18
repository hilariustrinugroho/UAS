-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2020 pada 04.17
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` varchar(40) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
('12345', 'faizal', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `zakat`
--

CREATE TABLE `zakat` (
  `no` varchar(900) NOT NULL,
  `jenis_zakat` varchar(900) NOT NULL,
  `nominal` varchar(90) NOT NULL,
  `nama_lengkap` varchar(90) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(90) NOT NULL,
  `nama_bank` varchar(900) NOT NULL,
  `no_rekening` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `zakat`
--

INSERT INTO `zakat` (`no`, `jenis_zakat`, `nominal`, `nama_lengkap`, `no_hp`, `email`, `nama_bank`, `no_rekening`) VALUES
('1', 'Zakat mal', '100000', 'fahmi', '089876757634', 'fahmi@gmail.com', 'BRI', '12344446666'),
('2', 'Zakat Fitrah', '60000', 'farizi', '089876757634', 'resident evil', 'BRI', '12344446');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `zakat`
--
ALTER TABLE `zakat`
  ADD PRIMARY KEY (`no_hp`,`email`,`no_rekening`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
