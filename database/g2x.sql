-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 06:35 PM
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
  `job` varchar(20) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creator`
--

INSERT INTO `creator` (`gameID`, `name`, `nim`, `major`, `job`, `profile`) VALUES
(1, 'nana', '11111', 'DKV', 'Design', '../../src/creators/team1_11111.png'),
(4, 'Adrix Richard Stanlee ', '12340', 'TI', 'Audio', '../../src/creators/team4_12340.png'),
(4, 'Axel Ferdinand', '12344', 'TI', 'Coder', '../../src/creators/team4_12344.png'),
(4, 'Farion Tekkry', '12345', 'TI', 'Coder', '../../src/creators/team4_12345.png'),
(4, 'Gilbert Zaini', '12346', 'TI', 'Coder', '../../src/creators/team4_12346.png'),
(4, 'Melvin Tungadi', '12347', 'TI', 'Coder', '../../src/creators/team4_12347.png'),
(4, 'Aloisius Vincent Wongsowijaya', '12348', 'TI', 'Visual', '../../src/creators/team4_12348.png'),
(4, 'Christfire Vincent Bunardi', '12349', 'TI', 'Visual', '../../src/creators/team4_12349.png'),
(1, 'nini', '22222', 'IT', 'Developer', '../../src/creators/team1_22222.png'),
(1, 'nunu', '33333', 'IT', 'Developer', '../../src/creators/team1_33333.png'),
(1, 'nene', '44444', 'IT', 'audio', '../../src/creators/team1_44444.png');

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
  `game_cover` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_entries`
--

INSERT INTO `game_entries` (`id`, `title`, `team_name`, `game_desc`, `HowToPlay`, `download_link`, `game_cover`) VALUES
(1, 'Title 1', 'Team 1', 'ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ', 'HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1', 'https://drive.google.com/drive/folders/1YHK5h_chV9VNBsjGZKVxfC-nHqBPsGq3', '../../src/game_banner/banner_game1.png'),
(2, 'Title 2', 'Team 2', 'ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ', 'HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 ', 'https://drive.google.com/drive/folders/1EWZBUic6L6rPaDLTQf2zkfuh61xlcqKS', '../../src/game_banner/banner_game2.png'),
(3, 'Title 3', 'Team 3', 'ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ', 'HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 ', 'https://drive.google.com/drive/folders/1a2aaV_O0NOE_GPt7YcEDtAEsQdkUDF_F', '../../src/game_banner/banner_game3.png'),
(4, 'Cosmic Snitcher', 'QWERTY Team', 'You\'re a sneaky bounty hunter whose job is to steal\r\nfrom all of the richest creatures in every universe.\r\nYou have assigned to take control of a special spaceship\r\nthat can travel through time and space from your mysterious\r\nchief, can you conquer the entire spaceship?', 'W,A,S,D - Move Up, Left, Down, Right<br>\r\n1,2,3 - Use Weapon<br>\r\nEsc - Pause<br>\r\nLeft Click - Shoot<br>', 'https://drive.google.com/drive/folders/1O-GcTReE6Jjr7gsNDIYcYvDP9uvYN50G', '../../src/game_banner/banner_game4.png'),
(5, 'Title 5', 'Team 5', 'ABOUT-GAME-Description5 ABOUT-GAME-Description5  ABOUT-GAME-Description5 ABOUT-GAME-Description5  ABOUT-GAME-Description5 ABOUT-GAME-Description5  ', 'HOW-TO-PLAY-DescriptionGame5 HOW-TO-PLAY-DescriptionGame5 HOW-TO-PLAY-DescriptionGame5 HOW-TO-PLAY-DescriptionGame5 HOW-TO-PLAY-DescriptionGame5 ', 'https://drive.google.com/drive/folders/19qSKeWyi3HnrJ-60E23FpEyUJcIOS4s1', '../../src/game_banner/banner_game5.png'),
(6, 'Title 6', 'Team 6', 'ABOUT-GAME-Description6 ABOUT-GAME-Description6 ABOUT-GAME-Description6 ABOUT-GAME-Description6 ABOUT-GAME-Description6 ABOUT-GAME-Description6 ', 'HOW-TO-PLAY-DescriptionGame6 HOW-TO-PLAY-DescriptionGame6 HOW-TO-PLAY-DescriptionGame6 HOW-TO-PLAY-DescriptionGame6 HOW-TO-PLAY-DescriptionGame6 ', 'https://drive.google.com/drive/folders/1OhqS_qNqQYRoystLfVaaxa5-6PVDRGg-', '../../src/game_banner/banner_game6.png'),
(7, 'Title 7', 'Team 7', 'ABOUT-GAME-Description7 ABOUT-GAME-Description7 ABOUT-GAME-Description7 ABOUT-GAME-Description7 ABOUT-GAME-Description7 ABOUT-GAME-Description7 ', 'HOW-TO-PLAY-DescriptionGame7 HOW-TO-PLAY-DescriptionGame7 HOW-TO-PLAY-DescriptionGame7 HOW-TO-PLAY-DescriptionGame7 HOW-TO-PLAY-DescriptionGame7 ', 'https://drive.google.com/drive/folders/1DKYtirUeHqChtn5CYiOUlJGh6icDGQb9', '../../src/game_banner/banner_game7.png'),
(8, 'Title 8', 'Team 8', 'ABOUT-GAME-Description8 ABOUT-GAME-Description8 ABOUT-GAME-Description8 ABOUT-GAME-Description8 ABOUT-GAME-Description8 ABOUT-GAME-Description8 ', 'HOW-TO-PLAY-DescriptionGame8 HOW-TO-PLAY-DescriptionGame8 HOW-TO-PLAY-DescriptionGame8 HOW-TO-PLAY-DescriptionGame8 HOW-TO-PLAY-DescriptionGame8 ', 'https://drive.google.com/drive/folders/1J1LCJTb0qwkQGGHMB6mBGFuLQdVxyvYG', '../../src/game_banner/banner_game8.png');

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `created`, `modified`) VALUES
(2, 'google', '112245201279323118066', 'RICH', 'EVAN LEE (00000055564)', 'rich.evan@student.umn.ac.id', '', 'en', 'https://lh3.googleusercontent.com/a/ALm5wu0KYKtoBPIS_c6eAEKJRAyDgoEV6Yn0BBLRj3Fx=s96-c', '2022-10-08 14:52:52', '2022-10-08 14:52:52'),
(5, 'google', '114850611052126455915', 'Super', 'Gamer', 'supergamerzone134@gmail.com', '', 'en-GB', 'https://lh3.googleusercontent.com/a/ALm5wu03_LUrw-qLR_9Gfei0jIEm7QvwoBJ_UWhJ3uO2=s96-c', '2022-10-24 06:52:21', '2022-10-26 16:53:50'),
(6, 'google', '106392472297681206816', '???_kenzi', '', 'pixelmantm@gmail.com', '', 'en', 'https://lh3.googleusercontent.com/a/ALm5wu28eowWZLqmpbsreDYRXqRQzqhxLB2ytzjVOJcBMA=s96-c', '2022-10-25 16:00:54', '2022-10-25 16:07:22'),
(7, 'google', '108708430343742517990', 'JACINTHA', 'CORDELIE (00000053897)', 'jacintha.cordelie@student.umn.ac.id', '', 'id', 'https://lh3.googleusercontent.com/a/ALm5wu3x1LRMvf7yZxTmTcDSlQaEuKpnUqG53p_lFHVc=s96-c', '2022-10-29 14:32:51', '2022-10-29 14:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `gameID` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`gameID`, `user_id`) VALUES
(1, '106392472297681206816'),
(1, '114850611052126455915'),
(2, '114850611052126455915');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
