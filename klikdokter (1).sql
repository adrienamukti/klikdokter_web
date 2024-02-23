-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2024 pada 05.38
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klikdokter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admn`
--

CREATE TABLE `admn` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admn`
--

INSERT INTO `admn` (`userid`, `username`, `password`, `usertype`, `fullname`, `photo`) VALUES
(4, 'alen', '$2y$10$dr2hqxzLSUXMaORopkszkOxfDI5aLVeJhOiwSwy3ZEAr8Y7oo8SCW', 'Manager', 'alen surya', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `doctor`
--

CREATE TABLE `doctor` (
  `docid` int(11) NOT NULL,
  `no_praktek` varchar(15) NOT NULL,
  `doctor_nama` varchar(50) NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `doctor_pendidikan` varchar(100) NOT NULL,
  `doctor_photo` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `doctor`
--

INSERT INTO `doctor` (`docid`, `no_praktek`, `doctor_nama`, `spesialis`, `doctor_pendidikan`, `doctor_photo`) VALUES
(1, '41155050220035', 'Yuga', 'Kelamin', 'S7 Pendidikan Dokter Universitas Cambridge', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwaldokter`
--

CREATE TABLE `jadwaldokter` (
  `jadwal_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `konsul_id` int(11) NOT NULL,
  `date_konsul` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `cost` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `ketersediaan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `fullname`, `password`, `photo`) VALUES
(3, 'adriena', 'muhammadadrmkti@gmail.com', 'Muhammad Adriena', '$2y$10$i8zCzJhEC6dBO2JN/HRd4.F9OS7StK6pPUVCFTPZmYykC.NaBmanW', 'default.png'),
(4, 'mukti', 'muhammadadriena08@gmail.com', 'Mukti Sakti', '$2y$10$vefa4oPZujWz.advi1pbpeb0QQcTj0v0vhuKLBEGFjKXOxGDH5N3i', 'default.png'),
(5, 'dendi', 'den@gmail.com', 'Dendi Hariyadi', '$2y$10$5r5MDTbDxpmUkDeNouXmKeOMZwzBSoMkJ1UlHQzulkfcGCqe495Xq', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admn`
--
ALTER TABLE `admn`
  ADD PRIMARY KEY (`userid`);

--
-- Indeks untuk tabel `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`docid`);

--
-- Indeks untuk tabel `jadwaldokter`
--
ALTER TABLE `jadwaldokter`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`konsul_id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admn`
--
ALTER TABLE `admn`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `doctor`
--
ALTER TABLE `doctor`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jadwaldokter`
--
ALTER TABLE `jadwaldokter`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `konsul_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
