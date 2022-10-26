-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2022 pada 16.37
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

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
-- Struktur dari tabel `creator`
--

CREATE TABLE `creator` (
  `gameID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `major` varchar(20) NOT NULL,
  `job` varchar(20) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `creator`
--

INSERT INTO `creator` (`gameID`, `name`, `nim`, `major`, `job`, `profile`) VALUES
(1, 'nana', '11111', 'DKV', 'Design', ''),
(1, 'nini', '22222', 'IT', 'Developer', ''),
(1, 'nunu', '33333', 'IT', 'Developer', ''),
(1, 'nene', '44444', 'IT', 'audio', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `game_entries`
--

CREATE TABLE `game_entries` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `game_desc` varchar(300) NOT NULL,
  `HowToPlay` varchar(300) NOT NULL,
  `download_link` varchar(150) NOT NULL,
  `game_cover` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `game_entries`
--

INSERT INTO `game_entries` (`id`, `title`, `team_name`, `game_desc`, `HowToPlay`, `download_link`, `game_cover`) VALUES
(1, 'Title 1', 'Team 1', 'ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ', 'HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1', 'https://drive.google.com/drive/folders/1YHK5h_chV9VNBsjGZKVxfC-nHqBPsGq3', ''),
(2, 'Title 2', 'Team 2', 'ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ', 'HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 ', 'https://drive.google.com/drive/folders/1EWZBUic6L6rPaDLTQf2zkfuh61xlcqKS', ''),
(3, 'Title 3', 'Team 3', 'ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ', 'HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 ', 'https://drive.google.com/drive/folders/1a2aaV_O0NOE_GPt7YcEDtAEsQdkUDF_F', ''),
(4, 'Title 4', 'Team 4', 'ABOUT-GAME-Description4 ABOUT-GAME-Description4 ABOUT-GAME-Description4 ABOUT-GAME-Description4 ABOUT-GAME-Description4 ABOUT-GAME-Description4 ', 'HOW-TO-PLAY-DescriptionGame4 HOW-TO-PLAY-DescriptionGame4 HOW-TO-PLAY-DescriptionGame4 HOW-TO-PLAY-DescriptionGame4 HOW-TO-PLAY-DescriptionGame4 ', 'https://drive.google.com/drive/folders/1O-GcTReE6Jjr7gsNDIYcYvDP9uvYN50G', ''),
(5, 'Title 5', 'Team 5', 'ABOUT-GAME-Description5 ABOUT-GAME-Description5  ABOUT-GAME-Description5 ABOUT-GAME-Description5  ABOUT-GAME-Description5 ABOUT-GAME-Description5  ', 'HOW-TO-PLAY-DescriptionGame5 HOW-TO-PLAY-DescriptionGame5 HOW-TO-PLAY-DescriptionGame5 HOW-TO-PLAY-DescriptionGame5 HOW-TO-PLAY-DescriptionGame5 ', 'https://drive.google.com/drive/folders/19qSKeWyi3HnrJ-60E23FpEyUJcIOS4s1', ''),
(6, 'Title 6', 'Team 6', 'ABOUT-GAME-Description6 ABOUT-GAME-Description6 ABOUT-GAME-Description6 ABOUT-GAME-Description6 ABOUT-GAME-Description6 ABOUT-GAME-Description6 ', 'HOW-TO-PLAY-DescriptionGame6 HOW-TO-PLAY-DescriptionGame6 HOW-TO-PLAY-DescriptionGame6 HOW-TO-PLAY-DescriptionGame6 HOW-TO-PLAY-DescriptionGame6 ', 'https://drive.google.com/drive/folders/1OhqS_qNqQYRoystLfVaaxa5-6PVDRGg-', ''),
(7, 'Title 7', 'Team 7', 'ABOUT-GAME-Description7 ABOUT-GAME-Description7 ABOUT-GAME-Description7 ABOUT-GAME-Description7 ABOUT-GAME-Description7 ABOUT-GAME-Description7 ', 'HOW-TO-PLAY-DescriptionGame7 HOW-TO-PLAY-DescriptionGame7 HOW-TO-PLAY-DescriptionGame7 HOW-TO-PLAY-DescriptionGame7 HOW-TO-PLAY-DescriptionGame7 ', 'https://drive.google.com/drive/folders/1DKYtirUeHqChtn5CYiOUlJGh6icDGQb9', ''),
(8, 'Title 8', 'Team 8', 'ABOUT-GAME-Description8 ABOUT-GAME-Description8 ABOUT-GAME-Description8 ABOUT-GAME-Description8 ABOUT-GAME-Description8 ABOUT-GAME-Description8 ', 'HOW-TO-PLAY-DescriptionGame8 HOW-TO-PLAY-DescriptionGame8 HOW-TO-PLAY-DescriptionGame8 HOW-TO-PLAY-DescriptionGame8 HOW-TO-PLAY-DescriptionGame8 ', 'https://drive.google.com/drive/folders/1J1LCJTb0qwkQGGHMB6mBGFuLQdVxyvYG', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('google','facebook','twitter','linkedin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'google',
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `created`, `modified`) VALUES
(2, 'google', '112245201279323118066', 'RICH', 'EVAN LEE (00000055564)', 'rich.evan@student.umn.ac.id', '', 'en', 'https://lh3.googleusercontent.com/a/ALm5wu0KYKtoBPIS_c6eAEKJRAyDgoEV6Yn0BBLRj3Fx=s96-c', '2022-10-08 14:52:52', '2022-10-08 14:52:52'),
(5, 'google', '114850611052126455915', 'Super', 'Gamer', 'supergamerzone134@gmail.com', '', 'en-GB', 'https://lh3.googleusercontent.com/a/ALm5wu03_LUrw-qLR_9Gfei0jIEm7QvwoBJ_UWhJ3uO2=s96-c', '2022-10-24 06:52:21', '2022-10-25 19:00:01'),
(6, 'google', '106392472297681206816', 'けんじ_kenzi', '', 'pixelmantm@gmail.com', '', 'en', 'https://lh3.googleusercontent.com/a/ALm5wu28eowWZLqmpbsreDYRXqRQzqhxLB2ytzjVOJcBMA=s96-c', '2022-10-25 16:00:54', '2022-10-25 16:07:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `voting`
--

CREATE TABLE `voting` (
  `gameID` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `voting`
--

INSERT INTO `voting` (`gameID`, `user_id`) VALUES
(1, '106392472297681206816');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `creator`
--
ALTER TABLE `creator`
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indeks untuk tabel `game_entries`
--
ALTER TABLE `game_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `voting`
--
ALTER TABLE `voting`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `game_entries`
--
ALTER TABLE `game_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
