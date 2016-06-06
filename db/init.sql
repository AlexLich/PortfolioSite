CREATE TABLE `msgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msg` text,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

LOCK TABLES `msgs` WRITE;
/*!40000 ALTER TABLE `msgs` DISABLE KEYS */;
INSERT INTO `msgs` VALUES (31,'Р Р°Рє','11111','РўСѓС‚ Р±С‹Р»Рё СЂР°РєРё!','2016-04-19 18:00:55'),(34,'1','2222','2','2016-04-19 18:02:16'),(35,'111','','','2016-04-19 18:02:26'),(37,'1','12','','2016-04-19 18:07:08'),(38,'123','111111','422','2016-04-19 18:10:54'),(39,'alexnod90','cvxcn','xcvn','2016-04-19 18:11:53'),(40,'sgfd','dsgf','sfdg','2016-04-19 18:12:24'),(45,'aaaa','aaaa','aaaa','2016-04-19 18:16:15'),(50,'Р°РІС‹Р°С‹','С‹РІР°С‹РІР°','С‹РІР°С‹РІР°','2016-04-19 18:32:27'),(51,'aaaaaaa','aaaaaa','aaaaaaa','2016-04-24 13:18:27'),(52,'aa','','','2016-04-24 13:18:39');
/*!40000 ALTER TABLE `msgs` ENABLE KEYS */;
UNLOCK TABLES;
