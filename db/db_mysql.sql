-- MySQL dump 10.13  Distrib 5.5.23, for Win64 (x86)
--
-- Host: localhost    Database: gbook
-- ------------------------------------------------------
-- Server version	5.5.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `msgs`
--

DROP TABLE IF EXISTS `msgs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msg` text,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msgs`
--

LOCK TABLES `msgs` WRITE;
/*!40000 ALTER TABLE `msgs` DISABLE KEYS */;
INSERT INTO `msgs` VALUES (31,'Р Р°Рє','11111','РўСѓС‚ Р±С‹Р»Рё СЂР°РєРё!','2016-04-19 18:00:55'),(34,'1','2222','2','2016-04-19 18:02:16'),(35,'111','','','2016-04-19 18:02:26'),(37,'1','12','','2016-04-19 18:07:08'),(38,'123','111111','422','2016-04-19 18:10:54'),(39,'alexnod90','cvxcn','xcvn','2016-04-19 18:11:53'),(40,'sgfd','dsgf','sfdg','2016-04-19 18:12:24'),(45,'aaaa','aaaa','aaaa','2016-04-19 18:16:15'),(50,'Р°РІС‹Р°С‹','С‹РІР°С‹РІР°','С‹РІР°С‹РІР°','2016-04-19 18:32:27'),(51,'aaaaaaa','aaaaaa','aaaaaaa','2016-04-24 13:18:27'),(52,'aa','','','2016-04-24 13:18:39');
/*!40000 ALTER TABLE `msgs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-05 18:16:54
