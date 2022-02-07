# ************************************************************
# Sequel Ace SQL dump
# Version 20025
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.37)
# Database: rbicycles
# Generation Time: 2022-02-07 14:05:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bikes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bikes`;

CREATE TABLE `bikes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bikeName` varchar(255) DEFAULT '',
  `bikeClass` varchar(255) DEFAULT '',
  `suspensionType` varchar(255) DEFAULT '',
  `idealSurface` varchar(255) DEFAULT '',
  `condition` varchar(255) DEFAULT '',
  `brand` varchar(255) DEFAULT '',
  `model` varchar(255) DEFAULT '',
  `colour` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `bikes` WRITE;
/*!40000 ALTER TABLE `bikes` DISABLE KEYS */;

INSERT INTO `bikes` (`id`, `bikeName`, `bikeClass`, `suspensionType`, `idealSurface`, `condition`, `brand`, `model`, `colour`)
VALUES
	(1,'Cola Bottle','Road','None','Road','Excellent','Cannondale','CAAD12','Black, silver and blue'),
	(2,'Tangfastic','Trail','Hard Tail','Light trails','Needs attention','Trek','Superfly 9.6','Fluro yellow and grey'),
	(3,'Gummy Bear','Enduro / Trail','Full Sus','Full Trails','Needs attention','Giant','Trance X','Black and white'),
	(4,'Croissant Hunter','City / Hybrid','None','Road','Needs attention','Trek','1200 alpha','Red'),
	(5,'Big Blue','Mountain','None','Very Light Trails','Good','Pinnacle','unknown','Blue');

/*!40000 ALTER TABLE `bikes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
