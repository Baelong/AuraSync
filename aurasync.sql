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
  `payment_status` varchar(20) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Barber`
--
DROP TABLE IF EXISTS `barber`;
CREATE TABLE `barber` (
  `barber_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Barber_Profile`
--
DROP TABLE IF EXISTS `barber_profile`;
CREATE TABLE `barber_profile` (
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
DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Client_Profile`
--
DROP TABLE IF EXISTS `client_profile`;
CREATE TABLE `client_profile` (
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
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
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
DROP TABLE IF EXISTS `promotion`;
CREATE TABLE `promotion` (
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
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
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
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `barber_profile_and_appointment_FK` (`barber_profile_id`),
  ADD KEY `blient_profile_and_appointment_FK` (`client_profile_id`),
  ADD KEY `Service_Appointment_FK` (`service_id`);

--
-- Indexes for table `Barber`
--
ALTER TABLE `barber`
  ADD PRIMARY KEY (`barber_id`);

--
-- Indexes for table `Barber_Profile`
--
ALTER TABLE `barber_profile`
  ADD PRIMARY KEY (`barber_profile_id`),
  ADD KEY `barber_and_profike_FK` (`barber_id`);

--
-- Indexes for table `Client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `Client_Profile`
--
ALTER TABLE `client_profile`
  ADD PRIMARY KEY (`client_profile_id`),
  ADD KEY `client_and_profike_FK` (`client_id`);

--
-- Indexes for table `Message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `Promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`),
  ADD KEY `barber_profile_and_promotion_FK` (`barber_profile_id`);

--
-- Indexes for table `Service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `barber_profile_and_service_FK` (`barber_profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Barber`
--
ALTER TABLE `barber`
  MODIFY `barber_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Barber_Profile`
--
ALTER TABLE `barber_profile`
  MODIFY `barber_profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Client_Profile`
--
ALTER TABLE `client_profile`
  MODIFY `client_profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `barber_profile_and_appointment_FK` FOREIGN KEY (`barber_profile_id`) REFERENCES `barber_profile` (`barber_profile_id`),
  ADD CONSTRAINT `client_profile_and_appointment_FK` FOREIGN KEY (`client_profile_id`) REFERENCES `client_profile` (`client_profile_id`),
  ADD CONSTRAINT `Service_Appointment_FK` FOREIGN KEY (`service_id`) REFERENCES `Service` (`service_id`);

--
-- Constraints for table `Barber_Profile`
--
ALTER TABLE `barber_profile`
  ADD CONSTRAINT `barber_and_profike_FK` FOREIGN KEY (`barber_id`) REFERENCES `barber` (`barber_id`);

--
-- Constraints for table `Client_Profile`
--
ALTER TABLE `client_profile`
  ADD CONSTRAINT `Client_and_profike_FK` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `Promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `barber_profile_and_promotion_FK` FOREIGN KEY (`barber_profile_id`) REFERENCES `barber_profile` (`barber_profile_id`);

--
-- Constraints for table `Service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `barber_profile_and_service_FK` FOREIGN KEY (`barber_profile_id`) REFERENCES `barber_profile` (`barber_profile_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;