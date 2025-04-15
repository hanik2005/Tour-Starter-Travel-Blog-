-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 08:56 AM
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
-- Database: `tour_starter`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `favorites` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `username`, `password`, `profile_image`, `favorites`) VALUES
(1, '', '', 'HanikTheGreat123', '$2y$10$JtYmMJXHKdBdScaTXw0jIOj56CMTYQpYMueX2jKqDvnLlmop2Y0OW', '', ''),
(2, '', '', 'nick123', '$2y$10$ljSOMYdbmAAeWtA3zrgtG.lNsrf0MdqjsqIJr4zXmKbT02Nxn4agW', '', ''),
(3, 'charles Darwin', 'jkjkkkkkkkkkk@gmail.com', 'korsk', '$2y$10$KMQw0aXifNka8kkVncbVEOox9a37gJGIX8wMcJ6al8x/RmQ.Ux6jq', 'BEFORE.jpg', 'Santorini, Greece,Kyoto, Japan'),
(4, 'rwrwrwrwerw', 'hvhvvv@kjdka.com', 'HanikTheGreat123', '$2y$10$TKjEyQX/qFSmCC49asLBBOm9577c.Tp1MccGkmlpdWsML2w3qxZza', '480533588_4205173796426838_157414170897856322_n.png', ''),
(5, 'rwrwrwrwerw', 'hvhvvv@kjdka.com', 'HanikTheGreat123', '$2y$10$D9NfElAUsC1BgRkJGFH7qeMXRNpgUL3hHedN3J5T0/YMtNKPOvpyi', '480533588_4205173796426838_157414170897856322_n.png', ''),
(6, 'rwrwrwrwerw', 'hvhvvv@kjdka.com', 'HanikTheGreat123', '$2y$10$QlSXV6rwDKUsJ8BHs.YjS.dPRcdoO163a9x.uqAim8bgwoOeuRCES', '480533588_4205173796426838_157414170897856322_n.png', ''),
(7, 'fsdfdsf', 'fsfsf@32313', 'korsk2', '$2y$10$aaXQcQyR3.0SCObj2wJg/OQs0fxjgSBjSKg5wbY5tLKJM0Jr0FIx6', 'Maze_runner_pic.png', 'Bohol, Philippines');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
