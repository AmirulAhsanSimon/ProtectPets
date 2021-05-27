-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 07:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protectpets-master`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `upload_image` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `postcode` int(4) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `posts` text NOT NULL,
  `recovery_account` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `mobile`, `division`, `postcode`, `password`, `cpassword`, `posts`, `recovery_account`) VALUES
(5, 'maksud', 'maksud3663@gmail.com', '01818790794', 'Chittagong', 3804, '$2y$10$itWlT59VWgg/R', '$2y$10$UzUj0F1joZs.L', '', ''),
(6, 'sohel', 'sohel3663@gmail.com', '1234356', 'Dhaka', 2367, '$2y$10$oZcYQXl04gMgq', '$2y$10$ba8WPqxAOyGpj', '', ''),
(7, 'simon', 'simon3663@gmail.com', '43554636', 'Khulna', 9876, '$2y$10$SApjB8zQYuZzO', '$2y$10$cOmVKJSdjO.mw', '', ''),
(9, 'maksud', 'maksud3663@gmail.com', '78161744', 'Chittagong', 3804, '$2y$10$kaRa5E9Ibc/37', '$2y$10$dYvFAi08vKUvm', '', ''),
(10, 'maksud', 'maksud3663@gmail.com', '2788923798', 'Chittagong', 3804, '$2y$10$1YBPHCOP9aDYS', '$2y$10$NEDVpIsa7pGfc', '', ''),
(11, 'amirul ahsan', 'amirul.ahsan@northsouth.e', '87464897649', 'Sylhet', 4354, '$2y$10$DaK5Gax19ckWL', '$2y$10$P2lyyfwuSmiqZ', '', ''),
(12, 'ridi.farhana@gmail.com', 'ridi.farhana@gmail.com', '1212', 'ridi.farhana@gmail.c', 0, '$2y$10$ghRrRiQFTCR4A', '$2y$10$gZ2x0bIdyjWQU', '', ''),
(13, 'admin@gmail.com', 'admin@gmail.com', '1111', 'Dhaka', 1212, '$2y$10$gEhu/Pl8.LbQzO9/uT2jy.nini48weNf0/qZA/cukYpMWQoHAmYXW', '$2y$10$ZPDCdMC7GlUZBbm.ep6bi.N44bpDZWeG5SLWg.vHfXXV48EeY.Zfq', '', ''),
(14, 'simon', 'simon2129@gmail.com', '01632157398', 'Chittagong', 3804, '$2y$10$de9jeqKdFb9HaD9q6j0ujuVRy9KVylEvknCF/s7RmIJyHC4FH.uze', '$2y$10$EaAZVC3.hCH9/DqxRiCtXOhMzxuGhGKoE28sy0QH8L/cNoZf0Lxi.', '', ''),
(15, 'Amirul', 'amirul.ahsan@northsouth.e', '09827871', 'Dhaka', 3803, '$2y$10$Jbgib2zCm6yEbWYMl1VCTuaErn9O.gnuqavr1RqN0wwwuEhh6PixS', '$2y$10$cHkf73VfL/zAjtJa8zCUTOQ68lkh6iFatCDywGdSvlI/apVzF//..', '', ''),
(16, 'ahsan', 'ahsan@gmail.com', '98332476', 'Khulna', 7654, '$2y$10$pXPCriswa9N3U.pbkUdYQux3GnrJqJ.1ZcCL1KQan.1RurtyzeVlK', '$2y$10$nAxhua3dXsLTaoabtFtm..MkXs6zUXsDk29k7GgnS2MRAJ5O1HCRW', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` int(11) NOT NULL,
  `division` varchar(20) NOT NULL,
  `postcode` int(4) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `username`, `email`, `mobile`, `division`, `postcode`, `password`, `cpassword`) VALUES
(1, 'nishan', 'nishan@gmail.com', 2147483647, 'Barisal', 9865, '$2y$10$.xgb7d2eH5NRQvkhwpTRxO0', '$2y$10$khsKcxEb4dt4wF65JiGTNOv'),
(2, 'admin', 'kaziar42@gmail.com', 123456, 'dhaka', 1234, '$2y$10$KX27cQmDJ0ObGHj1vpYOI.MS.qPvQB9KnSNAPO5uazYITHCWthwoW', '$2y$10$0TaZEvRkYxpHAyoqoIQ2G.ermvNTujSSUo0uqg8oyOwmzdG/gLaly'),
(3, 'admin', 'kaziar42@gmail.com', 123456, 'dhaka', 1234, '$2y$10$mWZH/rMOK3qMOsb.ZDkfc.wo/XRfzz9W8UOPIJhWgCzx3CAiN6MjS', '$2y$10$jbNMDPiqTfL/5mbkVI/xGuFUqHEN0LPHmpw0CMNtYISaujN34.Pm.'),
(4, 'Riya', 'farzanarahmanrima2014@gmail.com', 0, 'Dhaka', 0, '$2y$10$1Bx59vpFamblUwUNjVW5muo.OLFQesM8hQ9hwxUWAQ8mvRKaGAMoG', '$2y$10$mGq5quDY/uu1yzp0oy3IPe7xXA3P3pqIQJmlJ0.6k2sYiStPKUCeO'),
(5, 'Ridi', 'ridi.farhana@gmail.com', 1111, 'Dhaka', 0, '$2y$10$B8oKSnN30dVO5eziYZCN6ONqMv9ZoKfOSvZM5d4U.aAIQkhkLrtJu', '$2y$10$6pjl4ExaCGObMH96HT8ka.XL0Zki9Fl64CkV4aaWJT3CUqBVy3ema'),
(6, 'farhana', 'farhana@gmail.com', 0, 'Barishal', 0, '$2y$10$BW20jHQSqh7zMixU3TmQ7.KVz4Uep8bZJX0StG27lNrf0qoSDEw3G', '$2y$10$tZNJNgtJ6vUBdgdhjh2JXO.TF8dglmsHNoqDHJYFOIYFl4tTkto2a'),
(7, 'ridi.farhana@gmail.com', 'ridi.farhana@gmail.com', 1744, 'Dhaka', 1234, '$2y$10$XKLm0yCuNzTkpe10HMaEY.FGCN25uR2WimSubpQZZkihGujqvyjHO', '$2y$10$ixBrovlMWc1fAegQL8Jtnu0hJeSZiaVmYpMAXdyi069D/JarJV0XW'),
(8, 'ridi.farhana@gmail.com', 'ridi.farhana@gmail.com', 3969, 'Dhaka', 1234, '$2y$10$13JPb9FIQzXxw/5cSYlb/OgcZXs6z6lmi3Jr.5jtG/W02Pa5Fl2PK', '$2y$10$gW.Vfk77dwyx9qi/rRvPI.gZ/StW5xeYrcQuOB3gA9CrB2HB/bjze'),
(9, 'admin@gmail.com', 'admin@gmail.com', 1111, 'Dhaka', 1111, '$2y$10$sdAaefcKZmd0fDK/C6/oL.61YvP2J5k2iVLObuoBDVKGoX01C4OkK', '$2y$10$av1meK4QWOo6p97Ve7OCrOfckqbBm/4kBRbMSeNo.5g7V2KxyH7Bi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
