-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 11, 2026 at 11:02 PM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mad_marks`
--

-- --------------------------------------------------------

--
-- Table structure for table `console`
--

CREATE TABLE `console` (
  `id` int NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `console`
--

INSERT INTO `console` (`id`, `added_on`, `name`) VALUES
(1, '2026-05-04 01:03:29', 'PlayStation 5'),
(2, '2026-05-04 01:03:29', 'Xbox Series X'),
(3, '2026-05-04 01:03:29', 'Nintendo Switch'),
(4, '2026-05-04 01:03:29', 'PC'),
(5, '2026-05-04 01:03:29', 'PlayStation 4');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `fk_genre_id` int NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `main_character` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `year` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `added_on`, `rating`, `fk_genre_id`, `name`, `description`, `image`, `main_character`, `price`, `year`) VALUES
(1, '2026-05-04 01:03:29', '7+', 4, 'Mario Kart 8 Deluxe', 'A colourful racing game featuring Mario characters and fast-paced tracks.', 'mario_kart_8_deluxe.webp', 'Mario', 39.99, 2017),
(2, '2026-05-04 01:03:29', '12', 2, 'The Legend of Zelda', 'An open-world adventure game where Link explores Hyrule.', 'legends_of_zelda.webp', 'Link', 49.99, 2017),
(3, '2026-05-04 01:03:29', '3+', 3, 'EA Sports FC 24', 'A football simulation game with teams, leagues and tournaments.', 'fifa.webp', 'Various', 34.99, 2023),
(4, '2026-05-04 01:03:29', '18', 1, 'Call of Duty MW3', 'A first-person action game with campaign and multiplayer modes.', 'call_of_duty_mw3.jpg', 'Captain Price', 54.99, 2023),
(5, '2026-05-04 01:03:29', '16', 1, 'Spider-Man 2', 'An action-adventure game where players control Spider-Man in New York.', 'spider_man_2.webp', 'Peter Parker', 59.99, 2023),
(6, '2026-05-04 01:03:29', '16', 1, 'Halo Infinite', 'A science fiction action game featuring battles against alien forces.', 'halo_infinite.jpg', 'Master Chief', 29.99, 2021),
(7, '2026-05-04 01:03:29', '7+', 5, 'Minecraft', 'A sandbox game where players build, explore and survive in block worlds.', 'minecraft.jpg', 'Steve', 24.99, 2011),
(8, '2026-05-04 01:03:29', '3+', 5, 'Animal Crossing', 'Animal Crossing is a relaxing life simulation game where players move to a peaceful village or island filled with friendly animal characters. Instead of focusing on combat or competition, the game encourages players to explore, decorate, collect items, fish, catch bugs, and build relationships with neighbours. Time passes in real time, meaning seasons, weather, and events change throughout the year, helping the world feel alive and different each day you play.  The game is well known for its calm atmosphere, creative freedom, and charming style. Players can customise their homes, design clothing, arrange furniture, and slowly improve their surroundings while completing tasks and earning in-game currency called Bells. Its open-ended gameplay makes it suitable for players of all ages, offering a relaxing experience that focuses on creativity, routine, and social interaction rather than fast-paced action.', 'animal_crossing.jpg', 'Villager', 39.99, 2020),
(9, '2026-05-04 01:03:29', '18', 1, 'Cyberpunk 2077', 'A futuristic role-playing action game set in Night City.', 'cyber_punk.webp', 'V', 29.99, 2020),
(10, '2026-05-04 01:03:29', '3+', 4, 'Gran Turismo 7', 'A realistic racing game featuring licensed cars and tracks.', 'grand_turismo.jpg', 'Driver', 44.99, 2022),
(11, '2026-05-04 01:03:29', '18', 2, 'Elden Ring', 'A fantasy adventure game with exploration, combat and boss battles.', 'elden_ring.jpg', 'Tarnished', 49.99, 2022),
(12, '2026-05-04 01:03:29', '12', 1, 'Fortnite', 'An online battle royale game with building and combat mechanics.', 'fortnite.jpg', 'Various', 0.00, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `game_metadata`
--

CREATE TABLE `game_metadata` (
  `fk_game_id` int NOT NULL,
  `fk_console_id` int NOT NULL,
  `fk_location_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_metadata`
--

INSERT INTO `game_metadata` (`fk_game_id`, `fk_console_id`, `fk_location_id`) VALUES
(1, 3, 1),
(2, 3, 1),
(3, 1, 1),
(3, 2, 1),
(4, 1, 1),
(4, 2, 1),
(4, 4, 1),
(5, 1, 1),
(6, 2, 1),
(6, 4, 1),
(7, 1, 1),
(7, 2, 1),
(7, 3, 1),
(7, 4, 1),
(8, 3, 1),
(9, 1, 1),
(9, 2, 1),
(9, 4, 1),
(10, 1, 1),
(11, 1, 1),
(11, 2, 1),
(11, 4, 1),
(12, 1, 1),
(12, 2, 1),
(12, 3, 1),
(12, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Sports'),
(4, 'Racing'),
(5, 'Sandbox'),
(6, 'Puzzle');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int NOT NULL,
  `address` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `postcode` varchar(8) COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` varchar(16) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `address`, `city`, `postcode`, `telephone`) VALUES
(1, '12 High Street', 'Elgin', 'IV301AA', '01343555111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_genre` (`fk_genre_id`);

--
-- Indexes for table `game_metadata`
--
ALTER TABLE `game_metadata`
  ADD KEY `fk_game` (`fk_game_id`),
  ADD KEY `fk_console` (`fk_console_id`),
  ADD KEY `fk_location` (`fk_location_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `console`
--
ALTER TABLE `console`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `fk_genre` FOREIGN KEY (`fk_genre_id`) REFERENCES `genre` (`id`);

--
-- Constraints for table `game_metadata`
--
ALTER TABLE `game_metadata`
  ADD CONSTRAINT `fk_console` FOREIGN KEY (`fk_console_id`) REFERENCES `console` (`id`),
  ADD CONSTRAINT `fk_game` FOREIGN KEY (`fk_game_id`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `fk_location` FOREIGN KEY (`fk_location_id`) REFERENCES `location` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
