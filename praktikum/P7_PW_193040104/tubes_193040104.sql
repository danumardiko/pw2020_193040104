-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2020 pada 04.49
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040104`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tubes_193040104`
--

CREATE TABLE `tubes_193040104` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenisalatmusik` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `harga` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tubes_193040104`
--

INSERT INTO `tubes_193040104` (`id`, `img`, `nama`, `jenisalatmusik`, `asal`, `harga`) VALUES
(1, 'gamelan.jpg\r\n', 'Gamelan', 'dipukul', 'Jawa tengah', '100.000'),
(2, 'gitar.jpg', 'Gitar', 'dipetik', 'Spanyol', '300.000'),
(3, 'angklung.jpg', 'angklung', 'dikocok', 'jawa barat', '450.000'),
(4, 'terompet.jpg', 'terompet', 'ditiup', 'Makassar', '1.500.000'),
(5, 'harmonika.jpg', 'Harmonika', 'ditiup', 'Cina', '94.000'),
(6, 'biola.jpg', 'Biola', 'digesek', 'india', '425.000'),
(7, 'drum.jpg', 'drum', 'dipukul', 'peru', '3.500.000'),
(8, 'saxsophone.jpg', 'saxophone', 'ditiup', 'belgia', '3.600.000'),
(9, 'kecapi.jpg', 'Kecapi', 'dipetik', 'Jawa barat', '500.000'),
(10, 'piano.jpg', 'Piano', 'ditekan', 'italia', '6.500.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'danu1238', '$2y$10$/W/Oqp1/kVnPnCupBzAKjuVV9ZcWgHJeY0vvTR.ktywa3sCaxqteO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tubes_193040104`
--
ALTER TABLE `tubes_193040104`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tubes_193040104`
--
ALTER TABLE `tubes_193040104`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
