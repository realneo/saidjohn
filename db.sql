-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2013 at 02:38 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `saidjohn`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_us` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_us`) VALUES
(1, '<p><br /><img src="http://www.islamichelp.org.uk/images/ourvision_heading.png" alt="" /><br />To create a world free from poverty based on principles of justice and equality.<br /><br /><img src="http://www.islamichelp.org.uk/images/ourmission_heading.png" alt="" /><br />To help and empower the poor and needy through building their confidence and independence.<br /><br /><img src="http://www.islamichelp.org.uk/images/ourvalues_heading.png" alt="" /><br />We base all our values on the teachings of the Qur''an and Sunnah.<br /><br /><em><strong><span style="color: #339966;">Transparency</span></strong></em><br />We must be open in our work and actions as we are answerable to God Almighty for all that we do.<br /><br /><em><strong><span style="color: #339966;">Integrity</span></strong></em><br />Each person has the right to live and be treated with dignity and integrity. <br /><br /><em><span style="color: #339966;"><strong>Empowerment</strong></span></em><br />Through empowerment, people are able to make a difference in their life and the society they live in.<br /><br /><em><span style="color: #339966;"><strong>Understanding</strong></span></em><br />By understanding the needs of the different people we are able to provide the best services they require.&nbsp; </p>');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `venue`, `date`, `description`) VALUES
(3, 'adslkfjasldkfjl', 'alsdfjlasdfjlk', '2013-05-17', 'adsfasdfasdf'),
(4, 'adsfasdfasdf', 'asdfasdf', '2013-05-17', 'asdfasdfasdf'),
(5, 'asdfasdfasdfasdf', 'asdfasdfasdf', '2013-05-17', 'asdfasdfasdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `intro` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`intro`, `id`) VALUES
('<p>Assalaamu Alaykum WW m</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `brief` text NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `brief`, `date`, `description`) VALUES
(4, 'Keep Out', 'Beeeep', '2013-05-16', '<p>adlsfjal;sdfja;sdf</p>'),
(5, 'adsfasdf', 'asdfasdf', '2013-05-09', '<p>asdfasdfa</p>'),
(6, 'asdfasdf', 'adfasdf', '2013-05-17', '<p>adfasdfasdf</p>');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `brief` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `brief`, `description`) VALUES
(2, 'ergg', 'alsdfajlsdfj', '<p>asdfasdf</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
(5, 'admin', 'admin', '', '')