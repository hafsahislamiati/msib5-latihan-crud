-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 08:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pet`
--

CREATE TABLE `tb_pet` (
  `pet_id` int(11) NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `pet_type` varchar(50) NOT NULL,
  `pet_gender` varchar(50) NOT NULL,
  `pet_age` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pet`
--

INSERT INTO `tb_pet` (`pet_id`, `pet_name`, `pet_type`, `pet_gender`, `pet_age`) VALUES
(4, 'Annesa', 'Cat', 'Female', '3 tahun'),
(5, 'Chino', 'Dog', 'Male', '2 tahun'),
(6, 'Pretty', 'Reptil', 'Female', '8 bulan'),
(9, 'Ody', 'Rodent', 'Female', '9bulan'),
(10, 'Poni', 'Cat', 'Female', '7bulan'),
(11, 'Gira', 'Bird', 'Male', '6bulan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pet`
--
ALTER TABLE `tb_pet`
  ADD PRIMARY KEY (`pet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pet`
--
ALTER TABLE `tb_pet`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
