-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 08:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careprincsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(2) NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `domain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`, `gender`, `address`, `state`, `city`, `contact`, `occupation`, `type`, `domain`) VALUES
(6, 'Sakshi Nigam', 'saknigam12@gmail.com', 'b73a3203047396075ccac51f92358f6e', 'F', '2/5,colnelganj', 'Uttar Pradesh', 'Allahabad', 2147483647, 'Web Developer', 4, 'Education'),
(8, 'Anchal Nigam', 'anchalnigamm@gmail.com', '643b33d20fbe52d48538f4cd7b24f593', 'F', '2/6,kareli', 'Uttar Pradesh', 'Allahabad', 9026224948, 'Web Developer', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `useremail`, `userip`, `logintime`, `logout`, `status`) VALUES
(1, 'anchalnigamm@gmail.com', 0x3a3a3100000000000000000000000000, '2017-12-26 18:14:46', '26-12-2017 11:56:39 PM', 1),
(2, 'anchalnigamm@gmail.com', 0x3a3a3100000000000000000000000000, '2017-12-26 18:28:44', '', 0),
(3, 'anchalnigamm@gmail.com', 0x3a3a3100000000000000000000000000, '2017-12-26 18:29:03', '27-12-2017 12:00:26AM', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
