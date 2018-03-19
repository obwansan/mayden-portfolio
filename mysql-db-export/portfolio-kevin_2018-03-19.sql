# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.39)
# Database: portfolio-kevin
# Generation Time: 2018-03-19 14:49:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table portfolio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio`;

CREATE TABLE `portfolio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image-ref` varchar(255) DEFAULT NULL,
  `link-ref` varchar(255) DEFAULT NULL,
  `alt-text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;

INSERT INTO `portfolio` (`id`, `image-ref`, `link-ref`, `alt-text`)
VALUES
	(1,'/sites/academy-php7/html/portfolio/images/project-icons/mayden-logo.png','https://dev.maydenacademy.co.uk/students/2018/kevin/mayden-logo/','mayden-academy-logo'),
	(2,'/sites/academy-php7/html/portfolio/images/project-icons/pilot-shop.png','https://dev.maydenacademy.co.uk/students/2018/kevin/pilot-shop-build/','pilot-shop-website-logo');

/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table profile
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(2000) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `alt-text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;

INSERT INTO `profile` (`id`, `text`, `email`, `photo`, `alt-text`)
VALUES
	(1,'I am currently a trainee full-stack Web developer at Mayden Academy in Bath. Before starting the course I worked for 10 years as a Technical Writer and documentation Project Manager at various companies, including Visa and Nokia.\n\nMy interest in Web development was first piqued when I looked into creating my own website for freelance technical writing work. I quickly discovered a wealth of online tutorials and resources and found that I was really enjoying learning to code and create websites. I realised I wanted to make a career change into Web development and continued studying in my spare time before applying to Mayden Academy.\n\nI love both the analytical, problem-solving side of coding, and the more creative aspects of Web design. UI/UX also interests me greatly as technical writing taught me to focus on the end-user experience. I am looking forward to getting my first job as a Web developer, deepening and expanding my skill set and getting more involved in the Bath/Bristol tech community.','Email: kob123@hotmail.co.uk','monkey-avatar.png','picture-of-kevin-obrien');

/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
