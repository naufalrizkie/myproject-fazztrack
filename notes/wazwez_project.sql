-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2022 at 12:01 PM
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

--
-- Dumping data for table `completed_tasks_table`
--

INSERT INTO `completed_tasks_table` (`completed_id`, `completed_task_name`, `task_id`) VALUES
(1, 'mengenal tag element HTML', 9),
(2, 'membuat instrumen penelitian', 12);

-- --------------------------------------------------------

--
-- Table structure for table `subtasks_table`
--

CREATE TABLE `subtasks_table` (
  `subtask_id` int(11) NOT NULL,
  `subtask_name` varchar(100) DEFAULT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subtasks_table`
--

INSERT INTO `subtasks_table` (`subtask_id`, `subtask_name`, `task_id`) VALUES
(2, 'Membuat halaman log in dengan HTML dasar', 9),
(3, 'Membuat halaman log in dengan styling CSS', 10),
(4, 'Membuat laporan latsar', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tasks_table`
--

CREATE TABLE `tasks_table` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `task_desc` varchar(255) DEFAULT NULL,
  `task_due_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `status` enum('ONGOING','DONE') DEFAULT 'ONGOING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks_table`
--

INSERT INTO `tasks_table` (`task_id`, `task_name`, `task_desc`, `task_due_date`, `user_id`, `status`) VALUES
(9, 'Latihan HTML', 'Membuat slicing halaman web menggunakan HTML', '2022-08-12 17:00:00', 1, 'ONGOING'),
(10, 'Latihan CSS', 'Membuat halaman styling HTML dengan CSS dasar', '2022-08-16 17:00:00', 1, 'ONGOING'),
(11, 'Latihan Javascript', 'Membuat kondisi if else dan looping dengan Javascript', '2022-08-16 17:00:00', 1, 'ONGOING'),
(12, 'Laporan Pelakasanaan Ke-1', 'Membuat laporan pelaksanaan penelitian pertama', '2022-11-09 17:00:00', 2, 'ONGOING');

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
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_id`, `user_name`, `user_avatar`) VALUES
(1, 'Naufal Rizkie', 'https://www.vecteezy.com/free-vector/user-avatar'),
(2, 'Ulfa', NULL),
(4, 'Maya', NULL),
(5, 'Riska', NULL),
(6, 'Madina', NULL);

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
-- Indexes for table `subtasks_table`
--
ALTER TABLE `subtasks_table`
  ADD PRIMARY KEY (`subtask_id`),
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
  MODIFY `completed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subtasks_table`
--
ALTER TABLE `subtasks_table`
  MODIFY `subtask_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tasks_table`
--
ALTER TABLE `tasks_table`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `completed_tasks_table`
--
ALTER TABLE `completed_tasks_table`
  ADD CONSTRAINT `completed_tasks_table_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasks_table` (`task_id`);

--
-- Constraints for table `subtasks_table`
--
ALTER TABLE `subtasks_table`
  ADD CONSTRAINT `subtasks_table_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasks_table` (`task_id`);

--
-- Constraints for table `tasks_table`
--
ALTER TABLE `tasks_table`
  ADD CONSTRAINT `tasks_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
