-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 12:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phoenixrecreation`
--

-- --------------------------------------------------------

--
-- Table structure for table `addgame`
--

CREATE TABLE `addgame` (
  `id` int(11) NOT NULL,
  `gamename` varchar(40) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `genre_id` int(30) NOT NULL,
  `releasedate` date NOT NULL,
  `description` text NOT NULL,
  `pricing` int(225) NOT NULL,
  `photo1` varchar(2000) NOT NULL,
  `photo2` varchar(2000) NOT NULL,
  `photo3` varchar(2000) NOT NULL,
  `game_exe_file` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addgame`
--

INSERT INTO `addgame` (`id`, `gamename`, `genre`, `genre_id`, `releasedate`, `description`, `pricing`, `photo1`, `photo2`, `photo3`, `game_exe_file`) VALUES
(31, 'moto gp3', ' Racing', 4, '2024-04-09', 'MotoGP 3 is a motorbike racing game that will let you experience what it is like to compete in a real race', 10, '99ce57a9723ad62c4a25da6448da871a.jpg', 'images.jpeg', 'helmet-men-moto-gp-motorcycle-wallpaper-preview.jpg', 'moto gp3.zip'),
(32, 'price of persia', ' Adventure', 3, '2024-04-09', 'True to the Prince of Persia franchise, the game provides a variety of action combat, agility and story-driven', 500, 'images (1).jpeg', 'images (3).jpeg', 'images (2).jpeg', 'pop.zip'),
(33, 'PUBG', ' Action', 1, '2024-04-01', 'BATTLEGROUNDS is a battle royale that pits 100 players against each other. Outplay your opponents to become the lone survivor.', 200, 'pubg-playerunknowns-battlegrounds-2022-games-5k-3840x2160-7976.jpg', 'pubg-level-3-helmet-3840x2160-864.jpg', 'playerunknowns-battlegrounds-pubg-bgmi-2022-games-5k-5120x2882-7843.jpg', ''),
(34, 'God Of War- Ragnarok', ' Adventure', 3, '2024-04-02', 'God of War Ragnarök is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment', 3000, 'kratos-ghost-of-3840x2160-16038.jpg', 'god-of-war-ragnarok-kratos-atreus-2022-games-playstation-4-3840x2160-8636.jpg', 'god-of-war-ragnarok-2022-games-playstation-4-playstation-5-3840x2160-7338.jpg', 'god of war.zip'),
(35, 'Call Of Duty -Modern warfare', ' Action', 1, '2024-04-16', 'The iconic first-person shooter game is back! Cross play, free maps and modes, and new engine deliver the largest technical leap in Call of Duty history', 100, 'call-of-duty-modern-3840x2160-13480.jpg', 'call-of-duty-modern-3840x2160-13161.jpeg', 'call-of-duty-modern-4096x4096-12996.jpeg', 'cod.zip'),
(36, 'Among Us', ' Role playing', 10, '2024-04-16', 'Among Us is a party game of teamwork and betrayal. Crewmates work together to complete tasks before one or more Impostors can kill everyone aboard.', 10, 'among-us-ios-games-android-games-pc-games-3840x2160-3970.jpg', 'among-us-vr-games-3840x2160-15804.png', 'among-us-ios-games-android-games-pc-games-dark-background-3840x2160-3952.jpg', 'among us.zip'),
(38, 'Need For Speed', ' Racing', 4, '2024-04-10', 'Race against time, outsmart the cops, ', 500, 'need-for-speed-2022-nfs-2022-porsche-911-gt3-rs-2022-games-3840x2160-7985.png', 'need-for-speed-heat-chevrolet-corvette-grand-sport-polestar-3840x2160-853.jpg', 'need-for-speed-3840x2160-9251.jpg', 'nfs.zip'),
(40, 'Cyberpunk 2077', ' Role playing', 10, '2024-04-08', 'a storydriven, open world RPG of the dark future from CD PROJEKT RED, creators of The Witcher series of games.', 500, 'cyberpunk-2077-3840x2160-13543.jpg', 'toyota-supra-neon-3840x2160-14597.jpg', 'female-v-cyberpunk-3840x2160-13542.jpg', 'cyberpunk.zip'),
(41, 'Forza Horizon 5', ' Racing', 4, '2024-04-13', 'It is the fifth Forza Horizon title and twelfth main instalment in the Forza series. The game is set in a fictionalised representation of Mexico. ', 900, 'forza-horizon-5-lamborghini-huracan-performante-2021-games-3840x2160-6914.jpg', 'forza-horizon-5-mercedes-amg-project-one-2021-games-racing-3840x2160-6668.jpg', 'forza-horizon-5-mercedes-amg-project-one-2021-games-racing-3840x2160-6925.jpg', 'horizon 5.zip'),
(42, 'Ninja Arashi', ' Adventure', 3, '2024-04-01', 'In this game, you play as Arashi, a former legendary ninja who fights his way through the corrupted world to save his kidnapped son from the hand of the shadow devil Orochi.', 10, 'images (4).jpeg', 'images (5).jpeg', 'images (5).jpeg', 'ninja arashi.zip'),
(43, 'WWE-2K24', ' Role playing', 10, '2024-04-16', 'WWE 2K23 is a 2023 professional wrestling sports video game developed by Visual Concepts Austin and published by 2K', 2000, 'john-cena-wwe-2k23-3840x2160-16096.jpg', 'john-cena-bad-bunny-3840x2160-13466.jpg', 'wwe-2k22-rey-3840x2160-10490.jpg', 'wwe 2k24.zip'),
(45, 'Subways Surfers', ' Running', 8, '2024-04-05', 'Subway Surfers is an endless runner mobile game which is co-developed by Kiloo and SYBO Games, private companies based in Denmark', 10, 'desktop-wallpaper-biareview-subway-surfers-games.jpg', 'images (6).jpeg', 'images (7).jpeg', 'subways surfers.zip'),
(46, 'Temple Run2', ' Running', 8, '2024-04-03', 'The player controls an explorer who has obtained an ancient relic and runs from demonic monkey-like creatures chasing him.', 10, 'wp2444688.jpg', 'images (8).jpeg', 'images (9).jpeg', 'temple run.zip'),
(49, 'Super Mario', ' Running', 8, '2024-04-11', 'It is the central series of the greater Mario franchise. At least one Super Mario game has been released for every major Nintendo video game console.', 400, 'the-super-mario-3840x5577-10880.jpg', 'the-super-mario-4424x6554-9536.jpg', 'the-super-mario-.jpg', ''),
(50, 'GTA-5', ' Action', 1, '2024-04-16', 'Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. ', 899, 'gta-5-grand-theft-8640x5400-10749.jpg', 'grand-theft-auto-v-3840x2160-10738.jpg', 'michael-de-santa-6000x3739-10829.jpg', 'GTA.zip');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `game_id`) VALUES
(120, 1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'Vivek paliwal', ' vivekpaliwal0011@gmail.com', 'hello'),
(3, 'nikita', ' narwaninikita777@gmail.com', 'hellooooooo'),
(4, 'raju', ' raju@gmail.com', 'A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long.'),
(6, 'shubham', ' subham@gmail.com', 'hola');

-- --------------------------------------------------------

--
-- Table structure for table `gamecate`
--

CREATE TABLE `gamecate` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gamecate`
--

INSERT INTO `gamecate` (`id`, `name`) VALUES
(1, 'Action'),
(3, 'Adventure'),
(4, 'Racing'),
(5, 'cards'),
(8, 'Running'),
(10, 'Role playing');

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'vivek', ' paliwal', 'vivekpaliwal0011@gmail.com', '123456789'),
(2, 'shubham', ' sanadhya', 'shubhamsanadhya38@gmail.com', '987654321'),
(3, '', ' ', '', ''),
(4, 'rtre', ' wefs', 'admin@gmail.com', 'iugdsib'),
(5, 'surendra', ' sin', 'sursa@gmsil.com', 'admin'),
(6, 'nikita', ' narwani', 'narwaninikita777@gmail.com', '1234'),
(7, 'shubham ', ' sanadhya', 'shubhamsanadhya38@gmail.com', '1234'),
(8, 'user', ' 1', 'user1@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `z_orders`
--

CREATE TABLE `z_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `z_orders`
--

INSERT INTO `z_orders` (`id`, `user_id`, `cart_id`, `game_id`) VALUES
(45, 8, 118, 43),
(46, 1, 119, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addgame`
--
ALTER TABLE `addgame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gamecate`
--
ALTER TABLE `gamecate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersignup`
--
ALTER TABLE `usersignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `z_orders`
--
ALTER TABLE `z_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addgame`
--
ALTER TABLE `addgame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gamecate`
--
ALTER TABLE `gamecate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usersignup`
--
ALTER TABLE `usersignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `z_orders`
--
ALTER TABLE `z_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
