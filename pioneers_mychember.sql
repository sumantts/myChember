-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2023 at 11:46 AM
-- Server version: 10.3.39-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_chember`
--

-- --------------------------------------------------------

--
-- Table structure for table `group_category`
--

CREATE TABLE `group_category` (
  `gc_id` int(11) NOT NULL,
  `group_category` varchar(255) NOT NULL,
  `group_sub_category` varchar(255) NOT NULL,
  `parent_gc_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `group_category`
--

INSERT INTO `group_category` (`gc_id`, `group_category`, `group_sub_category`, `parent_gc_id`) VALUES
(1, 'Group I', '', 0),
(2, 'Group II', '', 0),
(3, 'Group III', '', 0),
(4, '', 'Drug Allergy', 1),
(5, '', 'Illness History', 1),
(6, '', 'Major Complain', 2),
(7, '', 'Observation', 2),
(8, '', 'Advice Given', 2),
(9, '', 'Diagnosis', 3),
(10, '', 'Investigation', 3),
(11, '', 'Medicine', 3),
(12, '', 'Procedures', 3),
(13, '', 'References', 3);

-- --------------------------------------------------------

--
-- Table structure for table `group_master`
--

CREATE TABLE `group_master` (
  `gm_id` int(11) NOT NULL,
  `gc_id` int(11) NOT NULL COMMENT 'PK og Group category Table',
  `option_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `group_master`
--

INSERT INTO `group_master` (`gm_id`, `gc_id`, `option_name`) VALUES
(1, 4, 'Mivacurium'),
(2, 4, 'Atracurium'),
(4, 5, 'Acidosis'),
(5, 5, 'Acute Dilatation'),
(6, 5, 'Malnutrition'),
(11, 4, 'Vecuronium'),
(12, 6, 'Pain In Back Bone'),
(13, 6, 'Pain In Chest'),
(14, 6, 'Pain In Elbow'),
(15, 7, 'Dization Problem'),
(16, 7, 'Deficiency of Vit. B'),
(17, 7, 'HG is Low'),
(18, 8, 'Complete Bed Rest'),
(19, 8, 'Drink Boiled Water'),
(20, 8, 'Take Rest With Proper Medicine'),
(21, 9, 'Complete blood count (CBC)'),
(22, 9, 'Sarcoidosis Test'),
(23, 9, 'Colonoscopy'),
(24, 10, 'Positron Emission Tomography'),
(25, 10, 'Autopsy'),
(26, 10, 'Magnetic Resonance Imaging'),
(27, 11, 'Hydroxychloroquine'),
(28, 11, 'Buprenorphine'),
(29, 11, 'Prochlorperazine'),
(30, 12, 'Pancreatic Surgery'),
(31, 12, 'Lymphadenectomy'),
(32, 12, 'Adrenalectomy'),
(33, 13, 'Dr. Sumantra Ray, Apollo Clinic Narendrapur'),
(34, 13, 'Dr. Madhurima Mukherjee, Balanda Hospital'),
(35, 13, 'Dr. Sudeshna Saha, RG Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `profile_name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `profile_name`, `username`, `password`) VALUES
(1, 'Dr. Pallab Saha', '123456', 'saha123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group_category`
--
ALTER TABLE `group_category`
  ADD PRIMARY KEY (`gc_id`);

--
-- Indexes for table `group_master`
--
ALTER TABLE `group_master`
  ADD PRIMARY KEY (`gm_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group_category`
--
ALTER TABLE `group_category`
  MODIFY `gc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `group_master`
--
ALTER TABLE `group_master`
  MODIFY `gm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
