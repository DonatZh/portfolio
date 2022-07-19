-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: July 18, 2022 at 23:27 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `portofolio`
-----------------------------------------------
-- Table structure for table 'projects'

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--Dumping data for table 'projects'

INSERT INTO `menu` (`id`, `name`, `type`) VALUES
(1, 'HYPEX', 'webdev'),
(2, 'Triangle', 'webdesign'),
(3, 'warleague', 'webdesign'),
(4, 'Tacos', 'webdev'),