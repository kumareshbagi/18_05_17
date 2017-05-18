-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: event_management
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `ADMIN`
--

DROP TABLE IF EXISTS `ADMIN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ADMIN` (
  `NAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(45) NOT NULL,
  PRIMARY KEY (`NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ADMIN`
--

LOCK TABLES `ADMIN` WRITE;
/*!40000 ALTER TABLE `ADMIN` DISABLE KEYS */;
INSERT INTO `ADMIN` VALUES ('kumar','kumar');
/*!40000 ALTER TABLE `ADMIN` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BOOKING`
--

DROP TABLE IF EXISTS `BOOKING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BOOKING` (
  `BID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` varchar(45) NOT NULL,
  `EID` varchar(45) NOT NULL,
  `NOOFTICKETS` varchar(45) NOT NULL,
  `PRICE` varchar(45) NOT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BOOKING`
--

LOCK TABLES `BOOKING` WRITE;
/*!40000 ALTER TABLE `BOOKING` DISABLE KEYS */;
INSERT INTO `BOOKING` VALUES (1,'13','5','2','300'),(2,'12','6','2','200'),(3,'12','5','2','300'),(4,'13','5','2','300'),(5,'13','5','3','450'),(6,'12','5','1','150'),(7,'13','7','2','100'),(8,'13','5','2','300'),(9,'12','5','1','150'),(10,'12','5','2','300'),(11,'12','6','3','300'),(12,'12','5','1','150'),(13,'13','5','2','300');
/*!40000 ALTER TABLE `BOOKING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EVENTS`
--

DROP TABLE IF EXISTS `EVENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EVENTS` (
  `EID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ENAME` varchar(450) NOT NULL,
  `EORGANIZER` varchar(450) NOT NULL,
  `EDESCRIPTION` varchar(5000) NOT NULL,
  `EVENUE` varchar(450) NOT NULL,
  `ESTARTDATE` varchar(450) NOT NULL,
  `EENDDATE` varchar(450) NOT NULL,
  `EURL` varchar(450) NOT NULL,
  `ETICKETPRICE` varchar(450) NOT NULL,
  `CONTACTNUMBER` varchar(450) NOT NULL,
  `NOOFSEATS` varchar(450) NOT NULL,
  `EVENTBANNER` varchar(450) NOT NULL,
  `TERMSANDCONDITIONS` varchar(450) NOT NULL,
  PRIMARY KEY (`EID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EVENTS`
--

LOCK TABLES `EVENTS` WRITE;
/*!40000 ALTER TABLE `EVENTS` DISABLE KEYS */;
INSERT INTO `EVENTS` VALUES (5,'cinema','film','Get insights into some of the best new films from around the globe selected by cinemas involved in the Kannada Film Institute\'s Film Audience Network. Catch the films at a screen near you and join in the conversations at your local cinema.','hubli','11/05/2017','25/05/2017','cinema.com','150','9620758128','29','/event/images/17.jpg','book_onces'),(6,'Musical','Music','Musical Instruments Bestsellers Guitars Keyboards & Synthesizers Drums & Percussion Wind Instruments Indian Instruments Live Sound, Recording & DJ Accessories Bestsellers.','hubli','25/05/2017','30/05/2017','music.com','100','9620758128','45','/event/images/19.jpeg','book_onces'),(7,'Drama','drama','An important cultural movement in the Indians  which developed in the  early ,a term coined to describe art , novels, about freedom fighters etc.','hubli','21/05/2017','02/06/2017','drama.com','50','9620758128','48','/event/images/45.jpg','book_onces'),(8,'Amusement_Park','amusement','a commercially operated park having various devices for entertainment (such as a merry-go-round and roller coaster) and usually booths for the sale of food and drink.','hubli','20/05/2017','26/02/2017','amusement.com','200','9620758128','50','/event/images/15.jpeg','book_onces');
/*!40000 ALTER TABLE `EVENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MEMBERS`
--

DROP TABLE IF EXISTS `MEMBERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEMBERS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  `LASTNAME` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `PHONENUMBER` varchar(15) NOT NULL,
  `ADDRESS` varchar(500) NOT NULL,
  `USERNAME` varchar(45) NOT NULL,
  `PASSWORD` varchar(45) NOT NULL,
  `STATUS` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MEMBERS`
--

LOCK TABLES `MEMBERS` WRITE;
/*!40000 ALTER TABLE `MEMBERS` DISABLE KEYS */;
INSERT INTO `MEMBERS` VALUES (12,'kumar','Bagi','kumaresh.517@gmail.com','9620758128','Submit','kumar','kumar',NULL),(13,'m','m','m','m','Submit','m','m',NULL);
/*!40000 ALTER TABLE `MEMBERS` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-18 16:02:59
