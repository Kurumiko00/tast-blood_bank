-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2023 at 08:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_card`
--

CREATE TABLE `id_card` (
  `user_id` varchar(13) NOT NULL,
  `name` varchar(16) NOT NULL,
  `lastname` varchar(16) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(2) NOT NULL,
  `date_donate` date NOT NULL,
  `contact` varchar(10) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_card`
--

INSERT INTO `id_card` (`user_id`, `name`, `lastname`, `blood_group`, `gender`, `age`, `date_donate`, `contact`, `quantity`) VALUES
('1479300030477', 'chinnawat', 'khunchuai', 'B', 'M', 20, '2017-10-16', '0924211987', 0),
('147930003004', 'pond', 'คุณช่วย', 'AB', 'M', 20, '2023-07-02', '0944211645', 10),
('1479300457944', 'B', 'porn', 'A', 'F', 25, '2023-10-18', '0955256866', 10),
('1479300745568', 'ชัยพร', 'โคตรธรรม', 'O', 'F', 8, '2023-10-29', '0900055747', 10),
('1458754598754', 'อาชวิน', 'พนมอิน', 'ฺB', 'F', 50, '2023-10-13', '0954587954', 5),
('1476586548545', 'หิวจัง', 'ตังไม่มี', 'O', 'F', 13, '2023-10-13', '0614578459', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
