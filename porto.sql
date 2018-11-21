# Host: localhost  (Version 5.5.5-10.1.10-MariaDB)
# Date: 2018-05-22 22:22:16
# Generator: MySQL-Front 5.3  (Build 5.39)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "more"
#

DROP TABLE IF EXISTS `more`;
CREATE TABLE `more` (
  `MoreID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) DEFAULT NULL,
  `Icon` varchar(100) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`MoreID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "more"
#

INSERT INTO `more` VALUES (1,'a','home','Ini'),(2,'Test','gear','Ini Hanya Pengetesan'),(3,'Test','home','Ini Hanya Pengetesan'),(4,'Test','flag','Ini Hanya Pengetesan');

#
# Structure for table "porto"
#

DROP TABLE IF EXISTS `porto`;
CREATE TABLE `porto` (
  `PortoID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Description` text,
  `Link` varchar(255) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `FileName` varchar(255) DEFAULT NULL,
  `Folder` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`PortoID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "porto"
#

INSERT INTO `porto` VALUES (1,'Apa','Nte','http://192.168.0.1','Web','1527002247-Untitled.png','img/web/'),(2,'ASDSAA','ADSAS','http://192.168.0.1','Dekstop','1527002268-zilong.png','img/dekstop/');

#
# Structure for table "slider"
#

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `SliderID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Slider` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`SliderID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "slider"
#

INSERT INTO `slider` VALUES (1,'Testa','aTest','1.jpg'),(2,' lah','sadasd','2.jpg'),(4,'Title','Deskriosi','3.jpg');
