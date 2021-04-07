-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 07, 2021 at 07:37 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `A03`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact_phone` int(12) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `first_name`, `last_name`, `contact_phone`, `contact_email`, `city`, `country`, `u_id`) VALUES
(1, 'ooo', 'ooo', 234234234, 'wewe@sadas.com', 'werwer', 'werwe', 16),
(2, 'meg', 'vafl', 2342342, 'wwer@ww.ff', 'vitnam', 'china', 22),
(3, 'mak', 'bak', 2342342, 'sds2a@ss.com', 'sdfsd', 'sd', 23),
(5, 'bb', 'bb', 2123123, 'asdas@sddsd.com', 'mycity', 'mycountry', 24);

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
(8, 'ali', 'ali@hot.com', '$2y$10$v/kDu6quMpUN1p.IY3jeiudLSubnOw7AlpjzeP6RdzR7h5w2uhdTK'),
(9, 'rak', 'rak@e.com', '$2y$10$mg3tmaM1LP9scYcaHXXqkuMh7iEtZXVa1avejPGEimbJsXefoMGly'),
(10, 'a', 'a@x.xom', '$2y$10$pgQAfJdvN4kZkJmd1AIA9O6Bf.AXLCAqAIAvw4ifMHb.7KDs8S0NO'),
(12, 'ooo', 'o@s.co', '$2y$10$i40Pbfj7cDuoTfUU/JPcquwvOUS30XXycyRMPVNQqJmbf1f94N9jG'),
(13, 'otoo', 'oo@oo.com', '$2y$10$6vIAQzxhkIwS8b9UOTfXXOl4CMu6epxjWfxDtixBH4EwocqprRTym'),
(16, 'nnn', 'nnn@n.com', '$2y$10$pHIyBaIR7DI0ArUx/CMI6OFAEznGYpq8o4dQliPcquBL45UtEs4Z.'),
(17, 'mmm', 'mmm@m.com', '$2y$10$/6XKMyf7USPCIfr3XJtDpO33crjipZMGsIFkAcApaJo0EuABG5WU6'),
(19, 'lll', 'lll@l.com', '$2y$10$iyNXRy4eAaOCkzeNVk1QTON7mMdajDPMPDsKPDsrQun01zGi53Hv2'),
(21, 'sss', 'sss@s.com', '$2y$10$FtZniMwUpDI8kO9sB5i79OAHpIb/qyuvwRgr8rO2GmHaCN7wQNgYS'),
(22, 'vvv', 'vvv@v.com', '$2y$10$FdoWIFay2r7k83JupnzVDukEqjE7QVN9iOXz1V7C4SuaHknAg3wii'),
(23, 'www', 'www@www.com', '$2y$10$5JnLwSxDgXtq1DFKXpjeNu3KygxPfAgsGN.9nNC3/.rSBYWpUktfi'),
(24, 'bbb', 'bb@bb.bo', '$2y$10$ygqXw1i.7HnMfwSBLpUrC.j6Yfz/jPyMsPFfzj1oOvkeKODvcqcDO'),
(25, 'aaa', 'aaa@aaa.com', '$2y$10$OEQoGz8cKl0Mk9c4vIL6aesvIVp/7QdrIcl7F/fh.07OLksWxxPGu'),
(26, 'xxx', 'xxx@cc.xo', '$2y$10$pzoMji8/tUbrd/Akvr9/NuETHVAumBrxcGd1fAUncuj/9f5EzvEB6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

