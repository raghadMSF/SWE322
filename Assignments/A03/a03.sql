-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 01, 2021 at 05:31 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `A03`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `u_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`u_id`, `user_name`, `email`, `password`) VALUES
(3, 'moh', 'moh@mm.com', '$2y$10$uI7vAnjGmsLukXS4Gsh8dOncDqEo0QZT8GSM9B8zc9FfmRudfVZLe'),
(7, 'raghad', 'raghad@m.com', '$2y$10$GgQPIUam7QQlRO7fvIYJM.g1h/GWGm6jsNt.ArG4lnS6LdW.FQoem'),
(8, 'ali', 'ali@hot.com', '$2y$10$v/kDu6quMpUN1p.IY3jeiudLSubnOw7AlpjzeP6RdzR7h5w2uhdTK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
