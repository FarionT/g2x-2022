-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 11:22 AM
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
-- Table structure for table `game_entries`
--

CREATE TABLE `game_entries` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `game_desc` varchar(300) NOT NULL,
  `HowToPlay` varchar(300) NOT NULL,
  `download_link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_entries`
--

INSERT INTO `game_entries` (`id`, `title`, `team_name`, `game_desc`, `HowToPlay`, `download_link`) VALUES
(1, 'Title 1', 'Team 1', 'ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ABOUT-GAME-Description1 ', 'HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1 HOW-TO-PLAY-DescriptionGame1', 'https://drive.google.com/drive/folders/1YHK5h_chV9VNBsjGZKVxfC-nHqBPsGq3'),
(2, 'Title 2', 'Team 2', 'ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ABOUT-GAME-Description2 ', 'HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 HOW-TO-PLAY-DescriptionGame2 ', 'https://drive.google.com/drive/folders/1EWZBUic6L6rPaDLTQf2zkfuh61xlcqKS'),
(3, 'Title 3', 'Team 3', 'ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ABOUT-GAME-Description3 ', 'HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 HOW-TO-PLAY-DescriptionGame3 ', 'https://drive.google.com/drive/folders/1a2aaV_O0NOE_GPt7YcEDtAEsQdkUDF_F'),
(4, 'Title 4', 'Team 4', 'ABOUT-GAME-Description4 ABOUT-GAME-Description4 ABOUT-GAME-Description4 ABOUT-GAME-Description4 ABOUT-GAME-Description4 ABOUT-GAME-Description4 ', 'HOW-TO-PLAY-DescriptionGame4 HOW-TO-PLAY-DescriptionGame4 HOW-TO-PLAY-DescriptionGame4 HOW-TO-PLAY-DescriptionGame4 HOW-TO-PLAY-DescriptionGame4 ', 'https://drive.google.com/drive/folders/1O-GcTReE6Jjr7gsNDIYcYvDP9uvYN50G'),
(5, 'Title 5', '', 'Short Desc 5', '', 'https://drive.google.com/drive/folders/19qSKeWyi3HnrJ-60E23FpEyUJcIOS4s1'),
(6, 'Title 6', '', 'Short Desc 6', '', 'https://drive.google.com/drive/folders/1OhqS_qNqQYRoystLfVaaxa5-6PVDRGg-'),
(7, 'Title 7', '', 'Short Desc 7', '', 'https://drive.google.com/drive/folders/1DKYtirUeHqChtn5CYiOUlJGh6icDGQb9'),
(8, 'Title 8', '', 'Short Desc 8', '', 'https://drive.google.com/drive/folders/1J1LCJTb0qwkQGGHMB6mBGFuLQdVxyvYG'),
(9, 'Title 9', '', 'Short Desc 9', '', ''),
(13, 'Title 10', '', 'Short Desc 10', '', ''),
(14, 'Title 11', '', 'Short Desc 11', '', ''),
(16, 'Title 12', '', 'Short Desc 12', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_entries`
--
ALTER TABLE `game_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_entries`
--
ALTER TABLE `game_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
