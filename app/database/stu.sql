-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: localhost    Database: stumanager
-- ------------------------------------------------------
-- Server version	5.6.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES UTF8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `courseid` int(10) unsigned NOT NULL,
  `coursename` varchar(255) DEFAULT NULL,
  `coursedesc` text,
  `stuid` char(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,1,'鏁版嵁缁撴瀯','璁よ瘑鏁版嵁鍦ㄨ绠楁満涓殑瀛樺偍妯″瀷','2'),(2,2,'璁＄畻鏈哄璁?,'璁茶В璁＄畻鏈虹殑鍩虹鐭ヨ瘑锛岃璇嗚绠楁満鐨勫伐浣滃師鐞?,'1'),(3,3,'杞欢宸ョ▼','瀛︿範杞欢寮€鍙戞柟娉曞拰鐮旂┒杞欢寮€鍙戝懆鏈熷拰妯″瀷浠ュ強杞欢鐨勭鐞?,'3'),(4,4,'jingshen','haha,buzhidao',NULL),(5,5,'绗戝偛姹熸箹鏇?,'杩欐槸涓€涓粈涔堢帺鎰?,NULL),(6,0,'{$name}','{$desc}',NULL),(7,0,' . 绗戝偛灏忛 . ',' . iiiiiaaa . ',NULL),(8,6,' . 绗戝偛澶ч . ',' . 璐?. ',NULL),(9,7,' .{ 绗戝偛鑰侀 }. ',' . 楝奸 . ',NULL),(10,8,' { 浣犲鐨?} ','  杩樹笉濂斤紵锛燂紵 ',NULL),(11,9,'bb','jjfid',NULL),(12,10,'缁堜簬鎴愬姛浜?,'鍝堝搱鍝堝搱鍝堝搱鍝堝搱',NULL),(13,11,'doudoudou','do閮?,NULL),(14,12,'鎴戝彨灏忕嫍','姹豹姹豹姹?,NULL),(15,13,'澶╁爞浼?,'杩欐槸涓€涓搧鐗岀殑鍔涢噺锛屾敞鎰忔垜杩欓噷浣跨敤浜嗛€楀彿榇?,NULL),(16,14,'澶╁爞浼?,'杩欐槸涓€涓搧鐗岀殑鍔涢噺锛屾敞鎰忔垜杩欓噷浣跨敤浜嗛€楀彿榇?,NULL);
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `stuid` char(15) NOT NULL,
  `stuname` varchar(255) DEFAULT NULL,
  `stucourseid` int(255) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'1','wlz',2),(2,'2','xiaolei',1),(3,'3','haha',3),(4,'4','澶栨槦浜?,NULL),(5,'5','灏忛粦',NULL);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-21 23:19:33
