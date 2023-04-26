-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 08:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idesgin`
--

-- --------------------------------------------------------

--
-- Table structure for table `logoimg`
--

CREATE TABLE `logoimg` (
  `id` int(11) NOT NULL,
  `logo_name` varchar(50) NOT NULL,
  `logo_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logoimg`
--

INSERT INTO `logoimg` (`id`, `logo_name`, `logo_img`) VALUES
(1, 'Idesign', 'images.png'),
(2, 'Idesign2', 'logo2.jpg'),
(3, 'Idesign3', 'logo4.jpg'),
(4, 'Idesign4', 'logo3.png');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`id`, `name`, `email`) VALUES
(1, 'usama', ' kashan@gmail.com'),
(2, 'farjam', ' sdlkfj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `procate`
--

CREATE TABLE `procate` (
  `proid` int(11) NOT NULL,
  `procatename` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `procate`
--

INSERT INTO `procate` (`proid`, `procatename`) VALUES
(2, 'complete'),
(3, 'Running'),
(4, 'Upcoming');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `ptillte` varchar(70) NOT NULL,
  `pshortdes` varchar(80) NOT NULL,
  `pimg` varchar(250) NOT NULL,
  `pclient` varchar(60) NOT NULL,
  `procatids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `ptillte`, `pshortdes`, `pimg`, `pclient`, `procatids`) VALUES
(1, 'Strick Project', 'If you are referring to a \"Strick Project\" on a furniture website, it is possibl', 'portfolio-1.jpg', 'Damy', 2),
(2, 'central furniture', 'Central Furniture could refer to a furniture company that offers a variety of fu', 'portfolio-2.jpg', 'walson', 3),
(3, 'Alpha Furniture', 'Alpha Furniture could be a furniture company or brand that offers a range of fur', 'portfolio-3.jpg', 'Daisy ', 4),
(4, 'Furnitureopolis', 'Furnitureopolis may differentiate themselves from other furniture websites by of', 'portfolio-4.jpg', 'saad', 2),
(5, 'Furnituregenix', 'Furnituregenix may differentiate themselves from other furniture websites by off', 'portfolio-5.jpg', 'walson', 3),
(6, 'Glimmer Furniture', 'Glimmer Furniture may differentiate themselves from other furniture websites by ', 'portfolio-6.jpg', 'Daisy ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `massege` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `subject`, `phone`, `massege`) VALUES
(1, 'ali', 'ali@gmail.com', 'some', NULL, 'thi is massage'),
(2, '$cat_name', '$email', '$sub', NULL, '$mass'),
(3, 'farjam', 'sdlkfj@gmail.com', 'sdf', NULL, 'sdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logoimg`
--
ALTER TABLE `logoimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procate`
--
ALTER TABLE `procate`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `procatids` (`procatids`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logoimg`
--
ALTER TABLE `logoimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `procate`
--
ALTER TABLE `procate`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`procatids`) REFERENCES `procate` (`proid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
