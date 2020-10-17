-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: shaikh_portfolio
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

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
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'like database frontend backend devops',
  `functional_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'like oop or functional or procedural or structured or cloud or vcs etc',
  `main_stack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'like php or js or sql',
  `framework_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framework_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framework_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framework_library` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES (1,'frontend','web','html',NULL,NULL,NULL,'html 5',1,1,'2020-10-17 09:49:46','2020-10-17 12:37:07'),(2,'frontend','web','css',NULL,NULL,NULL,'bootstrap 4',1,1,'2020-10-17 12:33:10','2020-10-17 12:39:06'),(3,'frontend','functional','js',NULL,NULL,NULL,'jquery',1,1,'2020-10-17 12:34:51','2020-10-17 12:36:27'),(4,'frontend','functional','js',NULL,NULL,NULL,'react',1,1,'2020-10-17 12:35:03','2020-10-17 12:36:42'),(5,'backend','mvc','php',NULL,NULL,NULL,'Laravel',1,1,'2020-10-17 12:36:08','2020-10-17 12:36:08'),(6,'backend','mvc','php',NULL,NULL,NULL,'cakephp',1,1,'2020-10-17 12:38:02','2020-10-17 12:38:02'),(7,'backend','mvc','js',NULL,NULL,NULL,'express',1,1,'2020-10-17 12:38:50','2020-10-17 12:38:50'),(8,'database','structured','sql',NULL,NULL,NULL,'mysql',1,1,'2020-10-17 12:55:29','2020-10-17 12:55:29'),(9,'database','structured','sql',NULL,NULL,NULL,'postgresql',1,1,'2020-10-17 12:55:49','2020-10-17 12:55:49'),(10,'database','document','bson',NULL,NULL,NULL,'mongodb',1,1,'2020-10-17 12:56:38','2020-10-17 12:56:38'),(11,'database','inmemory','keymap',NULL,NULL,NULL,'redis',1,1,'2020-10-17 13:04:29','2020-10-17 13:04:29'),(12,'system-design','workflow','system-model',NULL,NULL,NULL,'waterfall',1,1,'2020-10-17 13:10:08','2020-10-17 13:10:08'),(13,'system-design','workflow','system-model',NULL,NULL,NULL,'agile-scrum',1,1,'2020-10-17 13:11:46','2020-10-17 13:11:46'),(14,'vcs','code','git',NULL,NULL,NULL,'gitlab',1,1,'2020-10-17 13:13:41','2020-10-17 13:13:41'),(15,'vcs','code','git',NULL,NULL,NULL,'github',1,1,'2020-10-17 13:13:58','2020-10-17 13:13:58'),(16,'vcs','code','git',NULL,NULL,NULL,'bitbucket',1,1,'2020-10-17 13:14:23','2020-10-17 13:14:23'),(17,'cloud-vm','os','environment',NULL,NULL,NULL,'aws',1,1,'2020-10-17 13:16:06','2020-10-17 13:16:06'),(18,'cloud-vm','os','environment',NULL,NULL,NULL,'digitalocean',1,1,'2020-10-17 13:16:42','2020-10-17 13:16:42'),(19,'cloud-vm','os','environment',NULL,NULL,NULL,'docker',1,1,'2020-10-17 13:17:54','2020-10-17 13:17:54'),(20,'http','architectural','style',NULL,NULL,NULL,'rest',1,1,'2020-10-17 13:20:11','2020-10-17 13:20:11'),(21,'http','architectural','protocol',NULL,NULL,NULL,'soap',1,1,'2020-10-17 13:21:09','2020-10-17 13:21:09');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-18  1:26:04
