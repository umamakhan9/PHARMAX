-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 12:17 PM
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
-- Database: `medicine_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text DEFAULT NULL,
  `is_user_submitted` tinyint(1) DEFAULT 0,
  `date_added` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `is_user_submitted`, `date_added`) VALUES
(2, 'What are the side effects of disprin?', 'Gastrointestinal Bleeding: Symptoms include black or bloody stools, or vomit that looks like coffee grounds.\nUlcers: Stomach or intestinal ulcers that can lead to bleeding.\nAllergic Reactions: Rash, itching, swelling, severe dizziness, or trouble breathing.\nKidney Issues: Symptoms such as swelling of the ankles or feet, unusual tiredness, or changes in urine output.\nLiver Problems: Symptoms include jaundice (yellowing of the skin or eyes), dark urine, or severe abdominal pain.', 1, '2024-08-28 21:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `health_tips`
--

CREATE TABLE `health_tips` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_tips`
--

INSERT INTO `health_tips` (`id`, `title`, `excerpt`, `content`, `date_added`) VALUES
(1, 'Stay Hydrated', 'Drinking enough water is essential for good health.', 'Water helps to regulate body temperature, keeps joints lubricated, and helps to prevent infections. It also delivers nutrients to cells and keeps organs functioning properly. Aim for 8 glasses a day!', '2024-08-28 16:57:49'),
(2, 'Eat Balanced Meals', 'A balanced diet is key to maintaining good health.', 'Include a variety of foods in your diet, such as fruits, vegetables, lean proteins, and whole grains. Balance your calorie intake and make sure you get enough vitamins and minerals.', '2024-08-28 16:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `popular_searches`
--

CREATE TABLE `popular_searches` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular_searches`
--

INSERT INTO `popular_searches` (`id`, `name`) VALUES
(1, 'Panadol'),
(2, 'Aspirin'),
(3, 'Paracetamol'),
(4, 'Brufen');

-- --------------------------------------------------------

--
-- Table structure for table `user_questions`
--

CREATE TABLE `user_questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_questions`
--

INSERT INTO `user_questions` (`id`, `question`, `date_submitted`) VALUES
(2, 'What are the side effects of disprin?', '2024-08-28 16:49:54'),
(5, 'What medicine should we use in nausea?', '2024-09-06 15:23:59'),
(6, 'hduis', '2024-09-11 14:05:09'),
(7, 'Side Effects of brufen', '2024-09-11 15:11:35'),
(8, 'skjiS', '2024-09-11 15:12:30'),
(9, 'SK', '2024-09-11 15:14:37'),
(10, 'HG', '2024-09-11 15:15:25'),
(11, 'Why we use panadol?', '2024-09-27 15:21:05'),
(12, 'What is ypu  name?', '2024-09-28 09:13:47'),
(13, 'how ?', '2024-09-28 09:25:53'),
(14, 'kak', '2024-09-28 09:36:25'),
(15, 'kajj', '2024-09-28 09:39:06'),
(16, 'kshs', '2024-09-28 09:40:19'),
(17, 'kk?\\', '2024-10-09 11:27:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_tips`
--
ALTER TABLE `health_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_searches`
--
ALTER TABLE `popular_searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_questions`
--
ALTER TABLE `user_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `health_tips`
--
ALTER TABLE `health_tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `popular_searches`
--
ALTER TABLE `popular_searches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_questions`
--
ALTER TABLE `user_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
