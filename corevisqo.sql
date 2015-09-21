-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2015 at 12:29 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corevisqo`
--
CREATE DATABASE IF NOT EXISTS `corevisqo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `corevisqo`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `added_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='to store question comments' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('question','comment','buddy_request') NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `status` enum('read','unread') NOT NULL,
  `added_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='to store user activity' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `duration` enum('day','week','month') NOT NULL,
  `difficulty` enum('easy','medium','hard','challenging') NOT NULL,
  `image` varchar(50) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `added_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='to store question' AUTO_INCREMENT=22 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `subject_id`, `topic_id`, `user_id`, `question`, `duration`, `difficulty`, `image`, `updated_date`, `added_date`) VALUES
(1, 0, 0, 0, '            ', '', 'easy', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 2, 1, 'my first question', 'day', 'medium', '', '0000-00-00 00:00:00', '2015-09-13 18:30:00'),
(3, 3, 2, 1, 'tersdf', 'week', 'easy', '', '0000-00-00 00:00:00', '2015-09-13 18:30:00'),
(4, 3, 2, 1, 'tersdf', 'week', 'easy', '', '0000-00-00 00:00:00', '2015-09-14 02:15:22'),
(5, 0, 0, 1, '', 'week', 'easy', '', '0000-00-00 00:00:00', '2015-09-14 02:19:43'),
(6, 2, 2, 1, 'teset 2', 'month', 'challenging', 'Koala.jpg', '0000-00-00 00:00:00', '2015-09-14 02:33:12'),
(7, 3, 1, 1, 'test 3', 'day', 'medium', '20150914080611', '0000-00-00 00:00:00', '2015-09-14 02:36:11'),
(8, 3, 3, 1, 'test 3', 'day', 'medium', '20150914080745', '0000-00-00 00:00:00', '2015-09-14 02:37:45'),
(9, 3, 2, 1, 'test 4', 'day', 'hard', '20150914081027Koala.jpg', '0000-00-00 00:00:00', '2015-09-14 02:40:27'),
(10, 3, 2, 0, 'tesat dfzdfas sdfsdf wefdfsd ffdafsdf sdfsdf', 'day', 'hard', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 0, 0, 1, '', 'day', 'easy', '20150914032050', '0000-00-00 00:00:00', '2015-09-14 09:50:50'),
(12, 0, 0, 1, '', 'day', 'easy', '20150914032121', '0000-00-00 00:00:00', '2015-09-14 09:51:21'),
(13, 0, 0, 1, '', 'week', 'easy', '20150914032134Chrysanthemum.jpg', '0000-00-00 00:00:00', '2015-09-14 09:51:34'),
(14, 0, 0, 1, '', 'week', 'easy', '20150914032343Chrysanthemum.jpg', '0000-00-00 00:00:00', '2015-09-14 09:53:43'),
(15, 3, 1, 1, 'sdfgfsdfgdfgdsf', 'day', 'easy', '20150914032442Lighthouse.jpg', '0000-00-00 00:00:00', '2015-09-14 09:54:42'),
(16, 6, 3, 1, 'dfdssdfsdfsfsdfsdf', 'week', 'challenging', '20150914032728Hydrangeas.jpg', '0000-00-00 00:00:00', '2015-09-14 09:57:28'),
(17, 1, 1, 1, 'sasdsaasdasa', 'month', 'medium', '20150915080237Tulips.jpg', '0000-00-00 00:00:00', '2015-09-15 02:32:37'),
(18, 3, 3, 1, 'defsdfs', 'week', 'easy', 'C:/xampp/htdocs/visqocodegniter/assets/uploads/201', '0000-00-00 00:00:00', '2015-09-15 03:16:42'),
(19, 2, 2, 1, 'ss s s s ss s', 'week', 'easy', 'C:/xampp/htdocs/visqocodegniter/assets/uploads/201', '0000-00-00 00:00:00', '2015-09-15 03:17:16'),
(20, 3, 2, 1, 'as a asda d adasd asd', 'day', 'medium', '20150915084841Hydrangeas.jpg', '0000-00-00 00:00:00', '2015-09-15 03:18:41'),
(21, 2, 2, 1, 'terrrrt', 'week', 'easy', '20150915085751Chrysanthemum.jpg', '0000-00-00 00:00:00', '2015-09-15 03:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE IF NOT EXISTS `relationship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `buddy_id` int(11) NOT NULL,
  `status` enum('request','accept','reject','delete') NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `added_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='to see relation ship status' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(15) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='to show subjects' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`, `added_date`) VALUES
(1, 'SAT', '2015-09-14 05:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `topic` varchar(15) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `subject_id`, `topic`, `added_date`) VALUES
(1, 0, 'SCIENCE', '2015-09-14 05:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `image` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `added_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='to add user profile' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `status`, `image`, `school`, `grade`, `updated_date`, `added_date`) VALUES
(1, 'santosh', 'reddy', 'santosh', 'santosh080188@gmail.com', 'santosh', '1', '', 'sktp', '10', '0000-00-00 00:00:00', '2015-09-14 18:30:00'),
(2, 'santosh', 'reddy', 'amrjeet', 'santosh080188@gmail.com', 'santosh', '1', '', 'sktp', '10', '2015-09-15 07:37:56', '2015-09-14 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_proficiency`
--

CREATE TABLE IF NOT EXISTS `user_proficiency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `math` varchar(1) NOT NULL,
  `english` varchar(1) NOT NULL,
  `sat` varchar(1) NOT NULL,
  `worldlanguages` varchar(1) NOT NULL,
  `physicalscience` varchar(1) NOT NULL,
  `history_socialscience` varchar(1) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `added_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='to add user proficiency' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
