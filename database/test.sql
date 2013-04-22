-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Aprill 19, 2013 kell 09:05 AM
-- Serveri versioon: 5.5.27
-- PHP versioon: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Andmebaas: `testly`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `date` date NOT NULL,
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`test_id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Andmete tõmmistamine tabelile `test`
--

INSERT INTO `test` (`test_id`, `name`, `user_id`, `date`, `deleted`) VALUES
(1, '', 1, '0000-00-00', 0),
(5, 'hfg', 1, '2013-04-18', 0),
(8, 'Taivo', 1, '2013-04-18', 0);

--
-- Tõmmistatud tabelite piirangud
--

--
-- Piirangud tabelile `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
