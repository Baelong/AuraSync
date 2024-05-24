-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2024 at 06:04 PM
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
-- Database: `aurasync`
--
CREATE DATABASE IF NOT EXISTS `aurasync` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci; USE `aurasync`;
-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `client_profile_id` int(11) NOT NULL,
  `barber_profile_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `slot` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `client_profile_id`, `barber_profile_id`, `date`, `slot`, `service_id`) VALUES
(1, 1, 1, '2024-05-29', 1, 1),
(2, 1, 1, '2024-05-29', 6, 2),
(3, 1, 2, '2024-05-29', 7, 3),
(4, 1, 1, '2024-05-29', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `availabilities`
--

CREATE TABLE `availabilities` (
  `availability_id` int(11) NOT NULL,
  `barber_profile_id` int(11) NOT NULL,
  `Monday` tinyint(1) NOT NULL,
  `Tuesday` tinyint(1) NOT NULL,
  `Wednesday` tinyint(1) NOT NULL,
  `Thursday` tinyint(1) NOT NULL,
  `Friday` tinyint(1) NOT NULL,
  `Saturday` tinyint(1) NOT NULL,
  `Sunday` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availabilities`
--

INSERT INTO `availabilities` (`availability_id`, `barber_profile_id`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`) VALUES
(1, 1, 1, 1, 1, 1, 1, 0, 0),
(2, 2, 0, 1, 1, 1, 1, 1, 0),
(3, 3, 0, 1, 0, 1, 1, 1, 0),
(4, 4, 1, 1, 1, 1, 1, 0, 1),
(5, 5, 1, 0, 1, 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `barber`
--

CREATE TABLE `barber` (
  `barber_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barber`
--

INSERT INTO `barber` (`barber_id`, `email`, `password_hash`, `status`) VALUES
(1, 'jhonDoe@exmaple.com', '1234', 1),
(2, 'ali@exmaple.com', '1234', 1),
(3, 'ali1@example.com', '1', 1),
(4, 'ali2@example.com', '12', 1),
(5, 'ali3@example.com', '123', 1),
(6, 'ali', '$2y$10$koD9gEE3rmty5i2ultYpKuIpXVO/tanosGCXIx0g/mScBd9v83Rbi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barber_profile`
--

CREATE TABLE `barber_profile` (
  `barber_profile_id` int(11) NOT NULL,
  `barber_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barber_profile`
--

INSERT INTO `barber_profile` (`barber_profile_id`, `barber_id`, `first_name`, `last_name`, `bio`, `phone_number`, `age`) VALUES
(1, 1, 'john', 'Doe', 'Hello i\'m jhon Doe', '514-999-9999', 32),
(2, 2, 'Ali', 'Ilyas', 'agesdg', '514-999-9999', 32),
(3, 3, 'Alex', 'Smith', 'Young barber', '514-123-9990', 16),
(4, 4, 'Praveen', 'Manu', 'Mtl Based Barber', '514-299-8899', 18),
(5, 5, 'David', 'Dan', 'Filipino Barber', '514-959-9239', 24),
(6, 6, 'Ali', 'saf', 'ag', '514-544-4545', 45);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `email`, `password_hash`, `status`) VALUES
(1, 'ali', '$2y$10$StxEtX8wmio/F3.N4yxVbObWmVgTF3F141G8cKzPtL7CPZYed.R1u', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_profile`
--

CREATE TABLE `client_profile` (
  `client_profile_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `phone_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_profile`
--

INSERT INTO `client_profile` (`client_profile_id`, `client_id`, `first_name`, `last_name`, `age`, `phone_number`) VALUES
(1, 1, 'Ali', 'Ilyas', 45, '514-544-4558');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `sender_profile_id` int(11) NOT NULL,
  `receiver_prodile_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `barber_profile_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `discount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `barber_profile_id`, `name`, `description`, `price`, `discount`) VALUES
(1, 1, 'Hair cut', 'Quick hair cut done in 30 mins', '30$', 'no disocunt'),
(2, 1, 'Beard setting', 'Only cutting your beard how you want', '15$', 'no disocunt'),
(3, 2, 'Hair Cut', 'Cutting Hair', '20$', 'no discount'),
(4, 2, 'Deluxe Package', 'Cutting Hair & beard trim & massage', '60$', 'no discount'),
(5, 2, 'Facial', 'Exfoliation', '40$', 'no discount');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `barber_profile_and_appointment_FK` (`barber_profile_id`),
  ADD KEY `blient_profile_and_appointment_FK` (`client_profile_id`),
  ADD KEY `Service_Appointment_FK` (`service_id`);

--
-- Indexes for table `availabilities`
--
ALTER TABLE `availabilities`
  ADD PRIMARY KEY (`availability_id`),
  ADD KEY `BarberProfile_availability_FK` (`barber_profile_id`);

--
-- Indexes for table `barber`
--
ALTER TABLE `barber`
  ADD PRIMARY KEY (`barber_id`);

--
-- Indexes for table `barber_profile`
--
ALTER TABLE `barber_profile`
  ADD PRIMARY KEY (`barber_profile_id`),
  ADD KEY `barber_and_profike_FK` (`barber_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_profile`
--
ALTER TABLE `client_profile`
  ADD PRIMARY KEY (`client_profile_id`),
  ADD KEY `client_and_profike_FK` (`client_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `barber_profile_and_service_FK` (`barber_profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `availabilities`
--
ALTER TABLE `availabilities`
  MODIFY `availability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barber`
--
ALTER TABLE `barber`
  MODIFY `barber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `barber_profile`
--
ALTER TABLE `barber_profile`
  MODIFY `barber_profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_profile`
--
ALTER TABLE `client_profile`
  MODIFY `client_profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `BarberProfile_Appointment_FK` FOREIGN KEY (`barber_profile_id`) REFERENCES `barber_profile` (`barber_profile_id`),
  ADD CONSTRAINT `ClientProfile_Appointment_FK` FOREIGN KEY (`client_profile_id`) REFERENCES `client_profile` (`client_profile_id`),
  ADD CONSTRAINT `Service_Appointment_FK` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`);

--
-- Constraints for table `availabilities`
--
ALTER TABLE `availabilities`
  ADD CONSTRAINT `BarberProfile_availability_FK` FOREIGN KEY (`barber_profile_id`) REFERENCES `barber_profile` (`barber_profile_id`);

--
-- Constraints for table `barber_profile`
--
ALTER TABLE `barber_profile`
  ADD CONSTRAINT `barber_and_profike_FK` FOREIGN KEY (`barber_id`) REFERENCES `barber` (`barber_id`);

--
-- Constraints for table `client_profile`
--
ALTER TABLE `client_profile`
  ADD CONSTRAINT `Client_and_profike_FK` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `barber_profile_and_service_FK` FOREIGN KEY (`barber_profile_id`) REFERENCES `barber_profile` (`barber_profile_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
