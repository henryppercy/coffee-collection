# ************************************************************
# Sequel Ace SQL dump
# Version 20035
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.39)
# Database: coffeecollection
# Generation Time: 2022-09-29 09:43:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table coffees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `coffees`;

CREATE TABLE `coffees` (
                           `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                           `name` varchar(255) NOT NULL,
                           `origin` int(11) NOT NULL,
                           `process` int(11) NOT NULL,
                           `descriptor_one` varchar(255) DEFAULT NULL,
                           `descriptor_two` varchar(255) DEFAULT NULL,
                           `descriptor_three` varchar(255) DEFAULT NULL,
                           `altitude` int(11) NOT NULL,
                           `image` varchar(255) DEFAULT NULL,
                           PRIMARY KEY (`id`),
                           KEY `origin` (`origin`),
                           KEY `process` (`process`),
                           CONSTRAINT `coffees_ibfk_1` FOREIGN KEY (`origin`) REFERENCES `countries` (`id`),
                           CONSTRAINT `coffees_ibfk_2` FOREIGN KEY (`process`) REFERENCES `processes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

LOCK TABLES `coffees` WRITE;
/*!40000 ALTER TABLE `coffees` DISABLE KEYS */;

INSERT INTO `coffees` (`id`, `name`, `origin`, `process`, `descriptor_one`, `descriptor_two`, `descriptor_three`, `altitude`, `image`)
VALUES
    (1,'Brazil Classico',1,1,'Honey','Sugarcane Molasses ','Hazelnut',1500,'images/coffee-1.png'),
    (2,'BS1 Espresso',2,2,'Milk Choc','Sticky Caramel','Red Fruit',2000,'images/coffee-2.png'),
    (3,'Indonesia Kerinchi',4,1,'Cherry Choc','Lemon','Brown Spice',1700,'images/coffee-3.png'),
    (4,'Los Altos',12,2,'Roasted Almond','Chocolate','Brown Sugar',1300,'images/coffee-4.png'),
    (5,'Kirundo Cafex ',31,1,'Baked Apple','Dates','Oolong Tea',1730,'images/coffee-5.png'),
    (6,'Finca Hartmann',37,2,'Apricot','Damson','Dark Chocolate',1800,'images/coffee-6.png'),
    (7,'Santa Elena',19,2,'Clementine','Plum','Sugarcane',1900,'images/coffee-7.png');

/*!40000 ALTER TABLE `coffees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
                             `id` int(11) NOT NULL AUTO_INCREMENT,
                             `country` varchar(255) DEFAULT NULL,
                             PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;

INSERT INTO `countries` (`id`, `country`)
VALUES
    (1,'Brazil'),
    (2,'Vietnam'),
    (3,'Colombia'),
    (4,'Indonesia'),
    (5,'Ethiopia'),
    (6,'Honduras'),
    (7,'India'),
    (8,'Uganda'),
    (9,'Mexico'),
    (10,'Guatemala'),
    (11,'Peru'),
    (12,'Nicaragua'),
    (13,'China'),
    (14,'Cote dIvoire'),
    (15,'Costa Rica'),
    (16,'Kenya'),
    (17,'Papua New Guinea'),
    (18,'Tanzania'),
    (19,'El Salvador'),
    (20,'Ecuador'),
    (21,'Cameroon'),
    (22,'Laos'),
    (23,'Madagascar'),
    (24,'Gabon'),
    (25,'Thailand'),
    (26,'Venezuela'),
    (27,'Dominican Republic'),
    (28,'Haiti'),
    (29,'Democratic Republic of the Congo'),
    (30,'Rwanda'),
    (31,'Burundi'),
    (32,'Philippines'),
    (33,'Togo'),
    (34,'Guinea'),
    (35,'Yemen'),
    (36,'Cuba'),
    (37,'Panama'),
    (38,'Bolivia'),
    (39,'Timor Leste'),
    (40,'Central African Republic'),
    (41,'Nigeria'),
    (42,'Ghana'),
    (43,'Sierra Leone'),
    (44,'Angola'),
    (45,'Jamaica'),
    (46,'Paraguay'),
    (47,'Malawi'),
    (48,'Trinidad and Tobago'),
    (49,'Zimbabwe'),
    (50,'Liberia'),
    (51,'Zambia');

/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table processes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `processes`;

CREATE TABLE `processes` (
                             `id` int(11) NOT NULL AUTO_INCREMENT,
                             `process` varchar(255) DEFAULT NULL,
                             PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `processes` WRITE;
/*!40000 ALTER TABLE `processes` DISABLE KEYS */;

INSERT INTO `processes` (`id`, `process`)
VALUES
    (1,'Natural'),
    (2,'Washed'),
    (3,'Honey');

/*!40000 ALTER TABLE `processes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
