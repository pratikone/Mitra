-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2015 at 12:55 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mitra_jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `user_id` int(10) NOT NULL,
  `poster_user_id` int(10) NOT NULL,
  `rating` float(5,2) NOT NULL,
  `user_phone` bigint(15) NOT NULL,
  `comment` text,
  `feedback_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `fk_postter_user_id_mapping` (`poster_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs`
--

CREATE TABLE IF NOT EXISTS `tbl_jobs` (
  `job_id` int(10) NOT NULL AUTO_INCREMENT,
  `job_name` text NOT NULL,
  `job_desc` text NOT NULL,
  `job_location` int(10) NOT NULL,
  `job_address` text NOT NULL,
  `job_type` int(2) NOT NULL,
  `user_id` int(10) NOT NULL,
  `language_id` int(2) NOT NULL,
  `job_max_cost` float(10,2) NOT NULL,
  `job_min_cost` float(10,2) NOT NULL,
  `job_people_req` int(10) NOT NULL,
  `job_creation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `job_expiry_time` datetime NOT NULL,
  PRIMARY KEY (`job_id`),
  KEY `fk_location_mapping` (`job_location`),
  KEY `fk_job_type_mapping` (`job_type`),
  KEY `fk_user_id_job_mapping` (`user_id`),
  KEY `fk_language_id_mapping` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_application`
--

CREATE TABLE IF NOT EXISTS `tbl_job_application` (
  `job_id` int(10) NOT NULL,
  `user_profile_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `phone` bigint(15) NOT NULL,
  `id` text NOT NULL,
  `bid_amount` float(10,2) DEFAULT NULL,
  `message` text NOT NULL,
  `application_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `fk_job_id_application_mapping` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_locations`
--

CREATE TABLE IF NOT EXISTS `tbl_job_locations` (
  `location_id` int(10) NOT NULL AUTO_INCREMENT,
  `location_name` text NOT NULL,
  `location_lat` double(15,7) NOT NULL,
  `location_long` double(15,7) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_types`
--

CREATE TABLE IF NOT EXISTS `tbl_job_types` (
  `job_type_id` int(2) NOT NULL AUTO_INCREMENT,
  `job_type_name` varchar(200) NOT NULL,
  `job_desc` text NOT NULL,
  PRIMARY KEY (`job_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languages`
--

CREATE TABLE IF NOT EXISTS `tbl_languages` (
  `language_id` int(2) NOT NULL AUTO_INCREMENT,
  `language_name` varchar(200) NOT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nearby_locations`
--

CREATE TABLE IF NOT EXISTS `tbl_nearby_locations` (
  `location_id` int(10) NOT NULL,
  `nearby_location_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(700) NOT NULL,
  `password` text NOT NULL,
  `user_type` int(2) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `fk_user_type_mapping` (`user_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_goodies`
--

CREATE TABLE IF NOT EXISTS `tbl_user_goodies` (
  `poster_id` int(10) NOT NULL,
  `goodie_desc` text NOT NULL,
  `goodie_value` int(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_profile`
--

CREATE TABLE IF NOT EXISTS `tbl_user_profile` (
  `profile_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `name` varchar(700) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` text,
  `address` text,
  `photo` text,
  PRIMARY KEY (`profile_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE IF NOT EXISTS `tbl_user_type` (
  `user_type_id` int(2) NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(100) NOT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `fk_postter_user_id_mapping` FOREIGN KEY (`poster_user_id`) REFERENCES `tbl_user` (`user_id`);

--
-- Constraints for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  ADD CONSTRAINT `fk_language_id_mapping` FOREIGN KEY (`language_id`) REFERENCES `tbl_languages` (`language_id`),
  ADD CONSTRAINT `fk_job_type_mapping` FOREIGN KEY (`job_type`) REFERENCES `tbl_job_types` (`job_type_id`),
  ADD CONSTRAINT `fk_location_mapping` FOREIGN KEY (`job_location`) REFERENCES `tbl_job_locations` (`location_id`),
  ADD CONSTRAINT `fk_user_id_job_mapping` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`);

--
-- Constraints for table `tbl_job_application`
--
ALTER TABLE `tbl_job_application`
  ADD CONSTRAINT `fk_job_id_application_mapping` FOREIGN KEY (`job_id`) REFERENCES `tbl_jobs` (`job_id`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_user_type_mapping` FOREIGN KEY (`user_type`) REFERENCES `tbl_user_type` (`user_type_id`);

--
-- Constraints for table `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  ADD CONSTRAINT `fk_user_id_mapping` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
