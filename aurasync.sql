-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2024 at 07:00 AM
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
-- Database: 'AuraSyncDatabase'
--

CREATE DATABASE IF NOT EXISTS `aurasync` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `aurasync`;
-- --------------------------------------------------------

--
-- Table structure for table `Appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `client_profile_id` int(11) NOT NULL,
  `barber_profile_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Barber`
--

CREATE TABLE `Barber` (
  `barber_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Barber_Profile`
--

CREATE TABLE `Barber_Profile` (
  `barber_profile_id` int(11) NOT NULL,
  `barber_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `client_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Client_Profile`
--

CREATE TABLE `Client_Profile` (
  `client_profile_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `phone_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Message`
--

CREATE TABLE `Message` (
  `message_id` int(11) NOT NULL,
  `sender_profile_id` int(11) NOT NULL,
  `receiver_prodile_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Promotion`
--

CREATE TABLE `Promotion` (
  `promotion_id` int(11) NOT NULL,
  `barber_profile_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Service`
--

CREATE TABLE `Service` (
  `service_id` int(11) NOT NULL,
  `barber_profile_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `Barber_profile_and_appointment_FK` (`barber_profile_id`),
  ADD KEY `Client_profile_and_appointment_FK` (`client_profile_id`);

--
-- Indexes for table `Barber`
--
ALTER TABLE `Barber`
  ADD PRIMARY KEY (`barber_id`);

--
-- Indexes for table `Barber_Profile`
--
ALTER TABLE `Barber_Profile`
  ADD PRIMARY KEY (`barber_profile_id`),
  ADD KEY `Barber_and_profike_FK` (`barber_id`);

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `Client_Profile`
--
ALTER TABLE `Client_Profile`
  ADD PRIMARY KEY (`client_profile_id`),
  ADD KEY `Client_and_profike_FK` (`client_id`);

--
-- Indexes for table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `Promotion`
--
ALTER TABLE `Promotion`
  ADD PRIMARY KEY (`promotion_id`),
  ADD KEY `Barber_profile_and_promotion_FK` (`barber_profile_id`);

--
-- Indexes for table `Service`
--
ALTER TABLE `Service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `Barber_profile_and_service_FK` (`barber_profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointment`
--
ALTER TABLE `Appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Barber`
--
ALTER TABLE `Barber`
  MODIFY `barber_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Barber_Profile`
--
ALTER TABLE `Barber_Profile`
  MODIFY `barber_profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Client`
--
ALTER TABLE `Client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Client_Profile`
--
ALTER TABLE `Client_Profile`
  MODIFY `client_profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Message`
--
ALTER TABLE `Message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Promotion`
--
ALTER TABLE `Promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Service`
--
ALTER TABLE `Service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD CONSTRAINT `Barber_profile_and_appointment_FK` FOREIGN KEY (`barber_profile_id`) REFERENCES `Barber_Profile` (`barber_profile_id`),
  ADD CONSTRAINT `Client_profile_and_appointment_FK` FOREIGN KEY (`client_profile_id`) REFERENCES `Client_Profile` (`client_profile_id`);

--
-- Constraints for table `Barber_Profile`
--
ALTER TABLE `Barber_Profile`
  ADD CONSTRAINT `Barber_and_profike_FK` FOREIGN KEY (`barber_id`) REFERENCES `Barber` (`barber_id`);

--
-- Constraints for table `Client_Profile`
--
ALTER TABLE `Client_Profile`
  ADD CONSTRAINT `Client_and_profike_FK` FOREIGN KEY (`client_id`) REFERENCES `Client` (`client_id`);

--
-- Constraints for table `Promotion`
--
ALTER TABLE `Promotion`
  ADD CONSTRAINT `Barber_profile_and_promotion_FK` FOREIGN KEY (`barber_profile_id`) REFERENCES `Barber_Profile` (`barber_profile_id`);

--
-- Constraints for table `Service`
--
ALTER TABLE `Service`
  ADD CONSTRAINT `Barber_profile_and_service_FK` FOREIGN KEY (`barber_profile_id`) REFERENCES `Barber_Profile` (`barber_profile_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
