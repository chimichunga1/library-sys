/*
SQLyog Community v12.5.1 (64 bit)
MySQL - 5.7.21-log : Database - lib_sys
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lib_sys` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `lib_sys`;

/*Table structure for table `book_borrows` */

DROP TABLE IF EXISTS `book_borrows`;

CREATE TABLE `book_borrows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrowed_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `book_borrows` */

/*Table structure for table `book_lists` */

DROP TABLE IF EXISTS `book_lists`;

CREATE TABLE `book_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lib_sections` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isBorrowed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `times_borrowed` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `book_lists` */

insert  into `book_lists`(`id`,`title`,`Author`,`book_desc`,`Genre`,`lib_sections`,`isBorrowed`,`user_id`,`times_borrowed`,`created_at`,`updated_at`) values 
(1,'Ready Player One','Ernest Cline','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Sci-Fi','Fiction','0',0,0,'2018-07-02 02:04:19','2018-07-02 02:04:22'),
(2,'Fahrenheit 451','Ray Bradbur','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Sci-Fi','Fiction','1',2,0,NULL,NULL),
(3,'Frankenstein','Mary Shelley','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Sci-Fi','Fiction','1',2,0,NULL,NULL),
(4,'Dune','Frank Herbert','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Sci-Fi','Fiction','2',2,0,NULL,NULL),
(5,'Brave New World','Axle Burdoes','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Sci-Fi','Fiction','2',2,0,NULL,NULL),
(6,'The Martian','Andy Weir','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Sci-Fi','Fiction','3',2,0,NULL,NULL),
(7,'Hyperion','Dan Simmons','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Sci-Fi','Fiction','3',2,0,NULL,NULL),
(8,'Artemis','Andy Weir','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Sci-Fi','Fiction','1',2,0,NULL,NULL),
(9,'The Forever War','Joe Heildem','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Sci-Fi','Fiction','1',2,0,NULL,NULL),
(10,'The Name of Wind','Patrick Rothford','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Mystery','Fiction','2',2,0,NULL,NULL),
(11,'Wizard of Eathsea','Ursula ','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Magic','Fiction','2',2,0,NULL,NULL),
(12,'New York Times','Dan Weiss','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Informative','Periodicals','2',2,0,NULL,NULL),
(13,'The New Republic','Derrek Fisher','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Informative','Periodicals','3',2,0,NULL,NULL),
(14,'The Economist','Phil Jackson','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Informative','Periodicals','3',2,0,NULL,NULL),
(15,'Vogue','Anna Wintour','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ','Entertainment','Periodicals','0',0,0,NULL,NULL),
(16,'National Review','Rich Lowry','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Entertainment','Periodicals','0',0,0,NULL,NULL),
(17,'People',' Jess Cagle','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Entertainment','Periodicals','0',0,0,NULL,NULL),
(18,'Encyclopædia Britannica','Andrew Bell	No. of employees‎: ‎About 400 (300 in Chicago, ...\r\nBritannica School','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Science','General Reference','0',0,0,NULL,NULL),
(19,'World Book Encyclopedia','Scott Fetzer ','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Science','General Reference','0',0,0,NULL,NULL),
(20,'Collier\'s Encyclopedia','Macmillan','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Science','General Reference','0',0,0,NULL,NULL),
(21,'Treccani','Istituto Treccani','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Math','General Reference','0',0,0,NULL,NULL),
(22,'The Rainbow Fish','Michale Miller ','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Children','Children\'s Section','0',0,0,NULL,NULL),
(23,'Alice Adventures','Lewis Carol','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Children','Children\'s Section','0',0,0,NULL,NULL),
(24,'Charlotte\'s','E.B. White','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Children','Children\'s Section','0',0,0,NULL,NULL),
(25,'Anne of Gren Gables','Lucy Maud','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Children','Children\'s Section','0',0,0,NULL,NULL),
(26,'Nineteen Eighty Four ','Larry Bird','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Mystery','Fiction','0',0,0,NULL,NULL),
(27,'The Great Gatsby','Harper Lee','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Action','Fiction','0',0,0,NULL,NULL),
(28,'Lord of the Rings','J.R.R. Tolkien','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Adventure','Fiction','0',0,0,NULL,NULL),
(29,'Star Wars','Luke Skywalker','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Sci-Fi','Fiction','0',0,0,NULL,NULL),
(30,'Clifford the Big Red Dog','Shaggy','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Children','Children\'s Section','0',0,0,NULL,NULL),
(31,'Slaughterhouse Five','Kurt Vonneugut','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Horror','Fiction','0',0,0,NULL,NULL);

/*Table structure for table `genre_lists` */

DROP TABLE IF EXISTS `genre_lists`;

CREATE TABLE `genre_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDeleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `genre_lists` */

insert  into `genre_lists`(`id`,`genre_name`,`isDeleted`) values 
(1,'Sci-Fi','0'),
(2,'Drama','0'),
(3,'Satire','0'),
(4,'Romance','0'),
(5,'Mystery','0'),
(6,'Horror','0'),
(7,'Action','0'),
(8,'Adventure','0'),
(9,'Travel','0'),
(10,'Children','0'),
(11,'Science','0'),
(12,'Math','0'),
(13,'History','0'),
(14,'Anthology','0'),
(15,'Comics','0'),
(16,'Art','0'),
(17,'Cookbooks','0'),
(18,'Diaries','0'),
(19,'Journals','0'),
(20,'Prayer Books','0'),
(21,'Fantasy','0'),
(22,'Biographies','0'),
(23,'Auto-Biographies','0'),
(24,'Series','0'),
(25,'Poetry','0'),
(26,'Magic','0'),
(27,'Entertainment','0'),
(28,'Informative','0');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `section_lists` */

DROP TABLE IF EXISTS `section_lists`;

CREATE TABLE `section_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDeleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `section_lists` */

insert  into `section_lists`(`id`,`section_name`,`isDeleted`) values 
(1,'Periodical','0'),
(2,'General Reference','0'),
(3,'Children\'s Section','0'),
(4,'Fiction','0');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`admin`) values 
(1,'Juan Miguel Cortez','miguel_ccortez@yahoo.com.ph','$2y$10$d37qRRE9ERPMO7Zmz.m9zuT1FsQGO8UHNeRKBzfTopxBcy4uuwUKm','grmbD5XMgiAB1aJtA5L4cSUBJXwvYmU8iQzUxz3Zo9veZZkg5LXsDSKFskLK','2018-07-01 17:57:50','2018-07-01 17:57:50',1),
(2,'Juan Dela Cruz','jmpcortez@rtu.edu.ph','$2y$10$tItW2YSaSJzvD7KNNIJldeC.npSM1NYex/RAcm6S5wDlIIA11GUMe','w0xsCB9bTtVrsrpP3X1BdIxT42mue068YcITKdIzlOzNBP68WgXjx8uwPlL1','2018-07-01 17:58:09','2018-07-01 17:58:09',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
