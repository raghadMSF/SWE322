-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 26, 2021 at 10:22 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `class_id`) VALUES
(1, 5, 1),
(2, 5, 2),
(3, 5, 3),
(4, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `trainer_name` varchar(254) NOT NULL,
  `class_date` date NOT NULL,
  `number_of_trainees` int(11) NOT NULL DEFAULT '0',
  `max_number_of_trainees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `trainer_name`, `class_date`, `number_of_trainees`, `max_number_of_trainees`) VALUES
(1, 'Fadi', '2021-04-30', 12, 15),
(2, 'Yomna', '2021-04-29', 7, 10),
(3, 'Raghad', '2021-05-03', 9, 10),
(4, 'Saeed', '2021-04-25', 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `username`, `email`, `password`) VALUES
(1, 'www', 'www@www.com', '$2y$10$5JnLwSxDgXtq1DFKXpjeNu3KygxPfAgsGN.9nNC3/.rSBYWpUktfi'),
(3, 'sss', 'sss@sss.com', '$2y$10$AjGosjIzCpnEsIaF.7eYq.MohmY1LVxQFzQNItIRG.ZhF68763lUS'),
(4, 'qqq', 'qqq@qqq.com', '$2y$10$gI9/CnBnOn5pfdX2XKVAHOWDUulxW2GLGWP.5m5iqeAeUY7qV3rvq'),
(5, 'ppp', 'ppp@ppp.com', '$2y$10$NyxFc5w0yFL3H8rK6ir4BepGuVsvWaWA1S4e6T.f.6pykAAg9wLVu'),
(6, 'lll', 'lll@lll.com', '$2y$10$.NioXTLvb5fOoA1Pt8iQ5OwdPnuI49kCaX9fBS/9iqRxs2VCIpjke');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`);
