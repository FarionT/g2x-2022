-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 04:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `creator`
--

CREATE TABLE `creator` (
  `gameID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `major` varchar(20) NOT NULL,
  `job` varchar(64) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creator`
--

INSERT INTO `creator` (`gameID`, `name`, `nim`, `major`, `job`, `profile`) VALUES
(2, 'Adrix Richard Stanlee ', '00000055952', 'TI', 'Audio', '../../src/creators/default.png'),
(2, 'Melvin Tungadi', '00000056010', 'Informatika', 'Coder', '../../src/creators/Melvin Tungadi - 00000056010 - Informatika.jpg'),
(2, 'Farion Tekkry', '00000056034', 'Informatika', 'Coder', '../../src/creators/Farion Tekkry - 00000056034 - Infornatika.jpg'),
(2, 'Gilbert Zaini', '00000056145', 'Teknik Komputer', 'Coder', '../../src/creators/Gilbert Zaini - 00000056145 - Teknik Komputer_.jpg'),
(2, 'Christfire Vincent Bunardi', '00000056268', 'Film', 'Visual', '../../src/creators/ChristfireVincentBunardi_00000056268_Film.jpg'),
(1, 'Davin Edbert', '11', '', 'Lead Creative Director, Sound Designer, Coder', '../../src/creators/default.png'),
(1, 'Paulus Michael Liang', '12', '', 'Lead Coder', '../../src/creators/default.png'),
(2, 'Axel Ferdinand', '12344', 'Informatika', 'Coder', '../../src/creators/AxelFerdinand-00000055952-Informatika.jpg'),
(2, 'Aloisius Vincent Wongsowijaya', '12348', 'TI', 'Visual', '../../src/creators/default.png'),
(1, 'Alif Brillian', '13', '', 'Asset Visual Novel', '../../src/creators/default.png'),
(1, 'Victorio Robin', '14', '', 'Asset Background Game', '../../src/creators/default.png'),
(1, 'M. Naufal Syarif', '15', '', 'Coder', '../../src/creators/default.png'),
(3, 'Mohamad Naufal', '61', '', 'Game Director', '../../src/creators/default.png'),
(3, 'Adhy Ardhana Setyawan', '62', '', 'Lead Programmer', '../../src/creators/default.png'),
(3, 'Yolanda Mere', '63', '', 'Programmer', '../../src/creators/default.png'),
(3, 'Leonard D. Atmadja', '64', '', 'Lead Writer', '../../src/creators/default.png'),
(3, 'Chyntia', '65', '', 'Lead Character Artist', '../../src/creators/default.png'),
(3, 'Muhammad Iqbal Wahyudi', '66', '', 'Lead Environment Artist', '../../src/creators/default.png'),
(3, 'Adhelio Reyhandro', '67', '', 'Sound Designer', '../../src/creators/default.png');

-- --------------------------------------------------------

--
-- Table structure for table `game_entries`
--

CREATE TABLE `game_entries` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `game_desc` varchar(300) NOT NULL,
  `HowToPlay` varchar(300) NOT NULL,
  `download_link` varchar(150) NOT NULL,
  `game_cover` varchar(50) NOT NULL,
  `vote_able` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_entries`
--

INSERT INTO `game_entries` (`id`, `title`, `team_name`, `game_desc`, `HowToPlay`, `download_link`, `game_cover`, `vote_able`) VALUES
(1, 'PaperflareEXE', 'Without Bullsh*t Studios (WiBuS)', 'Paperflare is a horror game, don\'t play it if you are easily scared.', 'right Mouse button to navigate <br>\r\n\"E\" to Identify clue <br>\r\n\"G\" to Lock Doors <br>', 'https://drive.google.com/file/d/1Ce_zjsAaoquLHog_IN0azyqXbYcbMbBt/view?usp=share_link', 'src/game_banner/banner_game1.png', 1),
(2, 'Cosmic Snitcher', 'QWERTY Team', 'You\'re a sneaky bounty hunter whose job is to steal\r\nfrom all of the richest creatures in every universe.\r\nYou have assigned to take control of a special spaceship\r\nthat can travel through time and space from your mysterious\r\nchief, can you conquer the entire spaceship?', 'W,A,S,D - Move Up, Left, Down, Right<br>\r\n1,2,3 - Use Weapon<br>\r\nEsc - Pause<br>\r\nLeft Click - Shoot<br>', 'https://drive.google.com/drive/folders/1O-GcTReE6Jjr7gsNDIYcYvDP9uvYN50G', 'src/game_banner/banner_game2.png', 1),
(3, 'Suspiciously', 'Selai Ide', 'Sebagai Dede, ungkaplah rahasia yang disembunyikan Supriyadi, seorang teman lama. Quest demi quest, rahasia yang seorang sahabat-pun tidak boleh tahu akan diungkap secara perlahan. Di tengah itu semua, bantulah orang-orang di sekitar Dede dalam menyelesaikan masalah keseharian mereka.', 'Sistem open world ala franchise yakuza dimana player dapat mengerjakan quest utama secara langsung atau mengeksplorasi dunia dan mengerjakan sidequest\r\n\r\nKontrol:\r\nWASD untuk bergerak, dekati orang untuk berbincang.', 'https://drive.google.com/file/d/16lWd-KPxZusGDI0e4NJEj2gXAtZbKqFP/view?usp=share_link', 'src/game_banner/banner_game3.png', 1),
(70, 'Lightbringer', 'Cavebirb', '', '', 'https://drive.google.com/file/d/1mJXHutvDach7aM6H_Rm6A8kaTvo8IqDS/view?usp=share_link', 'src/game_banner/banner_game70.png', 0),
(71, 'Isolomn', '', 'Find your lost memories about the past before it\'s too late', '', 'https://drive.google.com/file/d/1uRMfnl8yRI__IScX3dbn4RxVnC2vuChn/view?usp=sharing', 'src/game_banner/banner_game71.png', 0),
(72, 'AntBerry', '', 'A little red ant lost her eggs while scavenging for food. Lets help her get her eggs back!!', '', 'https://drive.google.com/file/d/1qgOR7nbOx3DI2-brC1YtZcozqYq6Uc9b/view?usp=sharing', 'src/game_banner/banner_game72.png', 0),
(73, 'MixedDimension', '', 'A game about finding people\'s missing item', '', 'https://ggj.s3.amazonaws.com/games/2021/01/233594/src/14uW0/Project_x.zip', 'src/game_banner/banner_game73.png', 0),
(74, 'Before the World End', '', '', '', 'https://drive.google.com/drive/folders/1clmMenW6YfcmHYA8hrqNU5CJqLXL1y0E?usp=share_link', 'src/game_banner/banner_game74.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `gameID` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creator`
--
ALTER TABLE `creator`
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `game_entries`
--
ALTER TABLE `game_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`gameID`,`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_entries`
--
ALTER TABLE `game_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
