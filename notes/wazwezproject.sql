-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2022 at 08:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wazwezproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `completed_tasks_table`
--

CREATE TABLE `completed_tasks_table` (
  `completed_id` int(11) NOT NULL,
  `completed_task_name` varchar(100) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `substasks_table`
--

CREATE TABLE `substasks_table` (
  `substask_id` int(11) NOT NULL,
  `substask_name` varchar(100) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tasks_table`
--

CREATE TABLE `tasks_table` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `task_desc` varchar(255) DEFAULT NULL,
  `task_due_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completed_tasks_table`
--
ALTER TABLE `completed_tasks_table`
  ADD PRIMARY KEY (`completed_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `substasks_table`
--
ALTER TABLE `substasks_table`
  ADD PRIMARY KEY (`substask_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `tasks_table`
--
ALTER TABLE `tasks_table`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `completed_tasks_table`
--
ALTER TABLE `completed_tasks_table`
  MODIFY `completed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `substasks_table`
--
ALTER TABLE `substasks_table`
  MODIFY `substask_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks_table`
--
ALTER TABLE `tasks_table`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `completed_tasks_table`
--
ALTER TABLE `completed_tasks_table`
  ADD CONSTRAINT `completed_tasks_table_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasks_table` (`task_id`);

--
-- Constraints for table `substasks_table`
--
ALTER TABLE `substasks_table`
  ADD CONSTRAINT `substasks_table_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasks_table` (`task_id`);

--
-- Constraints for table `tasks_table`
--
ALTER TABLE `tasks_table`
  ADD CONSTRAINT `tasks_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
