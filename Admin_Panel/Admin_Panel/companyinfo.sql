-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 07:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companyinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `id` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `vacancy` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `roleid` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companyinfo`
--

INSERT INTO `companyinfo` (`id`, `password`, `name`, `img`, `job`, `location`, `vacancy`, `salary`, `skills`, `exp`, `website`, `date`, `email`, `description`, `isActive`, `roleid`) VALUES
(1, 'Pass@123', 'ray', '', '', '', '', 0, '', '', '', '0000-00-00', 'rushikeshyerawar.ray@gmail.com', '', 0, 1),
(2, 'f63036841208c85f367cbb2680dea8125d001372', 'ray', '', '', '', '', 0, '', '', '', '0000-00-00', 'rushikeshyerawar.ray@gmail.com', '', 0, 1),
(3, '', 'newtech', 'flowers.png', 'programmer', 'wardha', '7', 20000, 'c,c++,java,python', 'BE or B.tech', 'www.anywebsite.com', '2022-05-22', 'mycompany@gmail.com', 'dont know dont care', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyinfo`
--
ALTER TABLE `companyinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companyinfo`
--
ALTER TABLE `companyinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
