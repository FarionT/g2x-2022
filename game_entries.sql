-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2022 pada 15.50
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
-- Database: `g2x`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `game_entries`
--

CREATE TABLE `game_entries` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `shortdesc` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `game_entries`
--

INSERT INTO `game_entries` (`id`, `title`, `shortdesc`) VALUES
(1, 'Title 1', 'Short Desc 1'),
(2, 'Title 2', 'Short Desc 2'),
(3, 'Title 3', 'Short Desc 3'),
(4, 'Title 4', 'Short Desc 4'),
(5, 'Title 5', 'Short Desc 5'),
(6, 'Title 6', 'Short Desc 6'),
(7, 'Title 7', 'Short Desc 7'),
(8, 'Title 8', 'Short Desc 8'),
(9, 'Title 9', 'Short Desc 9'),
(13, 'Title 10', 'Short Desc 10'),
(14, 'Title 11', 'Short Desc 11'),
(16, 'Title 12', 'Short Desc 12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `game_entries`
--
ALTER TABLE `game_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `game_entries`
--
ALTER TABLE `game_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
