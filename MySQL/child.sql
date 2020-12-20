-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 09:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child`
--

-- --------------------------------------------------------

--
-- Table structure for table `global`
--

CREATE TABLE `global` (
  `username` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global`
--

INSERT INTO `global` (`username`, `name`, `dates`, `img`) VALUES
('saba', 'Mila Yuia', '2020-12-01', 'mila.jpg'),
('saba1', 'Gotay', '2020-12-04', 'kila.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `saba`
--

CREATE TABLE `saba` (
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `post` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saba`
--

INSERT INTO `saba` (`username`, `name`, `age`, `gender`, `dates`, `post`, `img`) VALUES
('saba', 'Mila Yuia', 10, 'female', '2020-12-01', '                            Contact if found : 8714519090                        ', 'mila.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `saba1`
--

CREATE TABLE `saba1` (
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `post` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saba1`
--

INSERT INTO `saba1` (`username`, `name`, `age`, `gender`, `dates`, `post`, `img`) VALUES
('', 'Mila Jean', 1, 'male', '2020-12-01', 's', 'baby.jpg'),
('saba1', 'Gotay', 9, 'male', '2020-12-04', 'contact 9090909', 'kila.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'saba1', '$2y$10$i921H31fXlaV2HroCLxHyOmO2FP4uU8wg0uK.y17f6J4LZGXJRWAW', '2020-12-16 12:24:40'),
(3, 'saba', '$2y$10$AIqiVwNumcKrMElEeIOYbOgdNdc6fP51N.5SRjfwCJKZx29ix3gXm', '2020-12-16 12:33:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `global`
--
ALTER TABLE `global`
  ADD PRIMARY KEY (`dates`),
  ADD UNIQUE KEY `dates` (`dates`);

--
-- Indexes for table `saba`
--
ALTER TABLE `saba`
  ADD PRIMARY KEY (`dates`),
  ADD UNIQUE KEY `dates` (`dates`);

--
-- Indexes for table `saba1`
--
ALTER TABLE `saba1`
  ADD PRIMARY KEY (`dates`),
  ADD UNIQUE KEY `dates` (`dates`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
