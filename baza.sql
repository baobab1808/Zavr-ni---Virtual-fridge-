-- MariaDB dump 10.19  Distrib 10.6.3-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: zavrsni
-- ------------------------------------------------------
-- Server version	10.6.3-MariaDB-1:10.6.3+maria~focal

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hladnjaks`
--

DROP TABLE IF EXISTS `hladnjaks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hladnjaks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `food_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` double(8,2) NOT NULL,
  `measurement_unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hladnjaks`
--

LOCK TABLES `hladnjaks` WRITE;
/*!40000 ALTER TABLE `hladnjaks` DISABLE KEYS */;
INSERT INTO `hladnjaks` VALUES (1,'pileći batak','meso',100.00,'g',1,'2021-08-28 17:10:59','2021-08-28 17:10:59'),(2,'sol','začini',1.11,'kg',2,'2021-08-28 17:11:17','2021-09-01 12:54:37'),(3,'papar','začini',2.01,'kg',2,'2021-08-28 17:12:22','2021-08-28 17:12:22'),(4,'kokošja jaja','jaja',10.00,'kom',2,'2021-08-28 18:40:00','2021-09-02 08:55:07'),(5,'pileći batak','meso',500.00,'g',2,'2021-08-28 19:33:08','2021-08-28 19:33:08'),(6,'ABC sir','namazi',100.00,'g',2,'2021-08-30 08:37:34','2021-08-30 08:37:34'),(7,'kruške','voće',1.00,'kg',2,'2021-08-30 08:38:32','2021-08-30 08:38:32'),(8,'glatko brašno','brašno',1.00,'kg',1,'2021-09-10 17:03:38','2021-09-10 17:03:38'),(9,'oštro brašno','brašno',1.00,'kg',1,'2021-09-10 17:03:53','2021-09-10 17:03:53'),(10,'maslac','mliječni proizvodi',500.00,'g',1,'2021-09-10 17:05:55','2021-09-10 17:05:55'),(11,'kiselo vrhnje','mliječni proizvodi',200.00,'g',1,'2021-09-10 17:06:21','2021-09-10 17:06:21'),(12,'šećer','slatko',1.00,'kg',1,'2021-09-10 17:08:19','2021-09-10 17:08:19'),(13,'papar','začini',100.00,'g',1,'2021-09-10 17:08:53','2021-09-10 17:08:53'),(14,'sol','začini',1.00,'kg',1,'2021-09-10 17:09:22','2021-09-10 17:09:22'),(15,'kokošja jaja','jaja',10.00,'kom',1,'2021-09-10 17:10:01','2021-09-10 17:10:01'),(16,'baguette','kruh',500.00,'g',1,'2021-09-10 23:12:25','2021-09-10 23:12:25'),(17,'pesto','umaci',120.00,'g',1,'2021-09-10 23:13:03','2021-09-10 23:13:03'),(18,'mozarella','mliječni proizvodi',300.00,'g',1,'2021-09-10 23:13:29','2021-09-10 23:13:29'),(19,'rajčica','povrće',1.50,'kg',1,'2021-09-10 23:14:36','2021-09-10 23:14:36');
/*!40000 ALTER TABLE `hladnjaks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `food_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` VALUES (1,'sol','začini','2021-08-27 14:12:27','2021-08-27 14:12:27'),(2,'papar','začini','2021-08-27 14:12:31','2021-08-27 14:12:31'),(3,'pileći batak','meso','2021-08-27 14:12:39','2021-08-27 14:12:39'),(4,'kokošja jaja','jaja','2021-08-27 14:12:43','2021-08-27 14:12:43'),(5,'kruške','voće','2021-08-30 08:39:24','2021-08-30 08:39:24'),(7,'jabuke','voće','2021-08-30 08:40:34','2021-08-30 08:40:34'),(8,'ABC sir','namazi','2021-08-30 09:38:40','2021-08-30 09:38:40'),(9,'junetina mljeveno meso','meso','2021-09-07 22:11:58','2021-09-07 22:11:58'),(10,'soja umak','umaci','2021-09-07 22:13:06','2021-09-07 22:13:06'),(11,'suncokretovo ulje','masti, ulja i ocat','2021-09-07 22:16:17','2021-09-07 22:16:17'),(12,'maslinovo ulje','masti, ulja i ocat','2021-09-07 22:16:28','2021-09-07 22:16:28'),(13,'med','namazi','2021-09-07 22:16:59','2021-09-07 22:16:59'),(14,'vegeta','začini','2021-09-07 22:19:53','2021-09-07 22:19:53'),(15,'crvena paprika','začini','2021-09-07 22:20:10','2021-09-07 22:20:10'),(16,'curry','začini','2021-09-07 22:20:18','2021-09-07 22:20:18'),(17,'panceta','suhomesnati proizvodi','2021-09-07 22:20:58','2021-09-07 22:20:58'),(18,'parmezan','mliječni proizvodi','2021-09-07 22:21:31','2021-09-07 22:21:31'),(19,'luk','povrće','2021-09-07 22:21:59','2021-09-07 22:21:59'),(20,'češnjak','povrće','2021-09-07 22:22:17','2021-09-07 22:22:17'),(21,'krumpir','povrće','2021-09-07 22:22:25','2021-09-07 22:22:25'),(22,'mrkva','povrće','2021-09-07 22:22:31','2021-09-07 22:22:31'),(23,'grašak','povrće','2021-09-07 22:22:58','2021-09-07 22:22:58'),(24,'bijela riža','riža','2021-09-07 22:23:29','2021-09-07 22:23:29'),(25,'glatko brašno','brašno','2021-09-07 22:23:58','2021-09-07 22:23:58'),(26,'spaghetti','tjestenina','2021-09-07 22:24:18','2021-09-07 22:24:18'),(27,'farfalle','tjestenina','2021-09-07 22:24:52','2021-09-07 22:24:52'),(28,'šurle','tjestenina','2021-09-07 22:26:47','2021-09-07 22:26:47'),(29,'šampinjoni','povrće','2021-09-07 22:27:31','2021-09-07 22:27:31'),(30,'vrhnje za kuhanje','mliječni proizvodi','2021-09-07 22:28:11','2021-09-07 22:28:11'),(31,'passata','umaci','2021-09-07 22:28:47','2021-09-07 22:28:47'),(32,'bijelo vino','pića','2021-09-07 22:29:15','2021-09-07 22:29:15'),(33,'crno vino','pića','2021-09-07 22:29:22','2021-09-07 22:29:22'),(34,'temeljac za juhu','ostalo','2021-09-07 22:29:50','2021-09-07 22:29:50'),(35,'maslac','mliječni proizvodi','2021-09-07 22:30:07','2021-09-07 22:30:07'),(36,'peršin','povrće','2021-09-07 22:30:25','2021-09-07 22:30:25'),(37,'orijentalni mix','ostalo','2021-09-07 22:30:43','2021-09-07 22:30:43'),(38,'mediteranski mix','ostalo','2021-09-07 22:30:53','2021-09-07 22:30:53'),(39,'palenta','ostalo','2021-09-07 22:31:28','2021-09-07 22:31:28'),(40,'kvasac','ostalo','2021-09-07 22:32:42','2021-09-07 22:32:42'),(41,'šunka','suhomesnati proizvodi','2021-09-07 22:33:07','2021-09-07 22:33:07'),(42,'sir','mliječni proizvodi','2021-09-07 22:33:25','2021-09-07 22:33:25'),(43,'pizza umak','umaci','2021-09-07 22:33:42','2021-09-07 22:33:42'),(44,'origano','začini','2021-09-07 22:34:29','2021-09-07 22:34:29'),(45,'oštro brašno','brašno','2021-09-10 16:16:12','2021-09-10 16:16:12'),(46,'kiselo vrhnje','mliječni proizvodi','2021-09-10 16:16:43','2021-09-10 16:16:43'),(47,'šećer','slatko','2021-09-10 16:18:05','2021-09-10 16:18:05'),(48,'pesto','umaci','2021-09-10 22:56:21','2021-09-10 22:56:21'),(49,'rajčica','povrće','2021-09-10 22:56:37','2021-09-10 22:56:37'),(50,'baguette','kruh','2021-09-10 22:57:35','2021-09-10 22:57:35'),(51,'mozarella','mliječni proizvodi','2021-09-10 22:59:50','2021-09-10 22:59:50'),(52,'mlijeko','mliječni proizvodi','2021-09-11 09:42:16','2021-09-11 09:42:16'),(53,'voda','pića','2021-09-11 11:16:47','2021-09-11 11:16:47'),(54,'keksi','slatko','2021-09-11 21:49:24','2021-09-11 21:49:24'),(55,'bijela čokolada','slatko','2021-09-11 21:49:40','2021-09-11 21:49:40'),(56,'jagode','voće','2021-09-11 21:49:57','2021-09-11 21:49:57'),(57,'slatko vrhnja','mliječni proizvodi','2021-09-11 21:50:18','2021-09-11 21:50:18');
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredients_proba`
--

DROP TABLE IF EXISTS `ingredients_proba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredients_proba` (
  `ingredients_id` bigint(20) unsigned NOT NULL,
  `proba_id` bigint(20) unsigned NOT NULL,
  `quantity` double(8,2) NOT NULL,
  `measurement_unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ingredients_id`,`proba_id`),
  KEY `ingredients_proba_ingredients_id_index` (`ingredients_id`),
  KEY `ingredients_proba_proba_id_index` (`proba_id`),
  CONSTRAINT `ingredients_proba_ingredients_id_foreign` FOREIGN KEY (`ingredients_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `ingredients_proba_proba_id_foreign` FOREIGN KEY (`proba_id`) REFERENCES `probas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredients_proba`
--

LOCK TABLES `ingredients_proba` WRITE;
/*!40000 ALTER TABLE `ingredients_proba` DISABLE KEYS */;
INSERT INTO `ingredients_proba` VALUES (1,2,1.00,'g','2021-09-10 16:00:39','2021-09-10 16:00:39'),(1,3,2.00,'g','2021-09-10 15:56:39','2021-09-10 15:56:39'),(1,4,3.00,'kg','2021-08-30 12:15:47','2021-08-30 12:15:47'),(1,5,3.00,'g','2021-08-30 10:12:10','2021-08-30 10:12:10'),(1,6,1.00,'g','2021-09-02 09:19:25','2021-09-02 09:19:25'),(1,7,2.00,'g','2021-09-10 17:56:15','2021-09-10 17:56:15'),(1,9,20.00,'g','2021-09-11 09:25:48','2021-09-11 09:25:48'),(1,10,6.00,'g','2021-09-11 10:35:07','2021-09-11 10:35:07'),(1,11,5.00,'g','2021-09-11 18:15:28','2021-09-11 18:15:28'),(2,2,1.00,'g','2021-09-10 16:00:38','2021-09-10 16:00:38'),(2,3,1.00,'g','2021-09-10 15:56:39','2021-09-10 15:56:39'),(2,4,2.00,'kg','2021-08-30 12:15:47','2021-08-30 12:15:47'),(2,5,2.00,'g','2021-08-30 10:12:10','2021-08-30 10:12:10'),(2,6,1.00,'g','2021-09-02 09:19:25','2021-09-02 09:19:25'),(2,9,3.00,'g','2021-09-11 09:25:48','2021-09-11 09:25:48'),(2,11,4.00,'g','2021-09-11 18:15:28','2021-09-11 18:15:28'),(2,12,6.00,'g','2021-09-11 20:43:41','2021-09-11 20:43:41'),(3,2,100.00,'g','2021-09-10 16:00:38','2021-09-10 16:00:38'),(3,4,15.00,'kg','2021-08-30 12:15:48','2021-08-30 12:15:48'),(3,5,400.00,'g','2021-08-30 10:12:10','2021-08-30 10:12:10'),(3,12,400.00,'g','2021-09-11 20:43:41','2021-09-11 20:43:41'),(4,3,2.00,'kom','2021-09-10 15:56:39','2021-09-10 15:56:39'),(4,6,4.00,'kom','2021-09-02 09:19:25','2021-09-02 09:19:25'),(4,9,3.00,'kom','2021-09-11 09:25:48','2021-09-11 09:25:48'),(4,10,2.00,'kom','2021-09-11 10:35:07','2021-09-11 10:35:07'),(8,13,350.00,'g','2021-09-11 22:08:04','2021-09-11 22:08:04'),(10,12,20.00,'mL','2021-09-11 20:43:41','2021-09-11 20:43:41'),(11,10,100.00,'mL','2021-09-11 10:35:07','2021-09-11 10:35:07'),(11,12,10.00,'mL','2021-09-11 20:43:41','2021-09-11 20:43:41'),(12,9,15.00,'mL','2021-09-11 09:25:48','2021-09-11 09:25:48'),(12,11,55.00,'mL','2021-09-11 18:15:28','2021-09-11 18:15:28'),(13,12,5.00,'g','2021-09-11 20:43:41','2021-09-11 20:43:41'),(14,12,7.00,'g','2021-09-11 20:43:41','2021-09-11 20:43:41'),(15,12,7.00,'g','2021-09-11 20:43:41','2021-09-11 20:43:41'),(16,12,4.00,'g','2021-09-11 20:43:41','2021-09-11 20:43:41'),(17,9,30.00,'g','2021-09-11 09:25:48','2021-09-11 09:25:48'),(18,9,50.00,'g','2021-09-11 09:25:48','2021-09-11 09:25:48'),(19,11,130.00,'g','2021-09-11 18:15:28','2021-09-11 18:15:28'),(19,12,180.00,'g','2021-09-11 20:43:41','2021-09-11 20:43:41'),(20,11,15.00,'g','2021-09-11 18:15:28','2021-09-11 18:15:28'),(20,12,30.00,'g','2021-09-11 20:43:41','2021-09-11 20:43:41'),(23,12,100.00,'g','2021-09-11 20:43:41','2021-09-11 20:43:41'),(24,11,200.00,'g','2021-09-11 18:15:28','2021-09-11 18:15:28'),(25,7,100.00,'g','2021-09-10 17:56:15','2021-09-10 17:56:15'),(25,10,1.00,'kg','2021-09-11 10:35:07','2021-09-11 10:35:07'),(26,9,220.00,'g','2021-09-11 09:25:48','2021-09-11 09:25:48'),(29,11,400.00,'g','2021-09-11 18:15:28','2021-09-11 18:15:28'),(32,11,100.00,'mL','2021-09-11 18:15:28','2021-09-11 18:15:28'),(34,11,10.00,'g','2021-09-11 18:15:28','2021-09-11 18:15:28'),(35,7,150.00,'g','2021-09-10 17:56:15','2021-09-10 17:56:15'),(35,10,50.00,'g','2021-09-11 10:35:07','2021-09-11 10:35:07'),(35,11,60.00,'g','2021-09-11 18:15:28','2021-09-11 18:15:28'),(35,13,90.00,'g','2021-09-11 22:08:04','2021-09-11 22:08:04'),(36,11,5.00,'g','2021-09-11 18:15:28','2021-09-11 18:15:28'),(40,10,42.00,'g','2021-09-11 10:35:07','2021-09-11 10:35:07'),(41,10,300.00,'g','2021-09-11 10:35:07','2021-09-11 10:35:07'),(42,10,300.00,'g','2021-09-11 10:35:07','2021-09-11 10:35:07'),(43,10,250.00,'g','2021-09-11 10:35:07','2021-09-11 10:35:07'),(45,7,150.00,'g','2021-09-10 17:56:15','2021-09-10 17:56:15'),(45,12,15.00,'g','2021-09-11 20:43:41','2021-09-11 20:43:41'),(46,7,120.00,'g','2021-09-10 17:56:15','2021-09-10 17:56:15'),(47,7,50.00,'g','2021-09-10 17:56:15','2021-09-10 17:56:15'),(47,10,4.00,'g','2021-09-11 10:35:07','2021-09-11 10:35:07'),(47,13,22.00,'g','2021-09-11 22:08:04','2021-09-11 22:08:04'),(48,8,50.00,'g','2021-09-10 23:10:41','2021-09-10 23:10:41'),(49,8,250.00,'g','2021-09-10 23:10:41','2021-09-10 23:10:41'),(50,8,300.00,'g','2021-09-10 23:10:41','2021-09-10 23:10:41'),(51,8,200.00,'g','2021-09-10 23:10:41','2021-09-10 23:10:41'),(52,10,600.00,'mL','2021-09-11 10:35:07','2021-09-11 10:35:07'),(53,11,500.00,'mL','2021-09-11 18:15:28','2021-09-11 18:15:28'),(53,12,600.00,'mL','2021-09-11 20:43:41','2021-09-11 20:43:41'),(54,13,150.00,'g','2021-09-11 22:08:04','2021-09-11 22:08:04'),(55,13,400.00,'g','2021-09-11 22:08:04','2021-09-11 22:08:04'),(56,13,300.00,'g','2021-09-11 22:08:04','2021-09-11 22:08:04'),(57,13,200.00,'mL','2021-09-11 22:08:04','2021-09-11 22:08:04');
/*!40000 ALTER TABLE `ingredients_proba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (129,'2021_08_25_144538_create_ingredient_proba_table',2),(150,'2014_10_12_000000_create_users_table',3),(151,'2014_10_12_100000_create_password_resets_table',3),(152,'2014_10_12_200000_add_two_factor_columns_to_users_table',3),(153,'2019_08_19_000000_create_failed_jobs_table',3),(154,'2019_12_14_000001_create_personal_access_tokens_table',3),(155,'2021_07_27_084937_create_sessions_table',3),(156,'2021_08_16_085855_create_hladnjaks_table',3),(157,'2021_08_25_065034_create_ingredients_table',3),(158,'2021_08_25_143126_create_probas_table',3),(159,'2021_08_25_144538_create_ingredients_proba_table',3),(160,'2021_08_29_182225_add_cover_image_to_probas',4),(161,'2021_09_10_172852_change_time_attributes_in_probas',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `probas`
--

DROP TABLE IF EXISTS `probas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `probas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `rec_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` decimal(8,2) NOT NULL,
  `measurement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servings` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `probas`
--

LOCK TABLES `probas` WRITE;
/*!40000 ALTER TABLE `probas` DISABLE KEYS */;
INSERT INTO `probas` VALUES (2,'Piletina','Pero',1,'meso','<ol>\r\n	<li>Zacini piletinu</li>\r\n	<li>Speci piletinu</li>\r\n	<li>Uzivaj</li>\r\n</ol>',5.00,'min',1,'2021-08-27 14:14:48','2021-09-10 16:00:38','piletina_1631289638.jpg'),(3,'Kajgana','Pero',1,'doručak','<p><strong>1</strong>. razbite i zacinite jaja</p>\r\n\r\n<p><strong>2</strong>.umutite jaja i bacite ih na vruću tavu s malo ulja</p>\r\n\r\n<p><strong>3</strong>.specite do željene čvrstoće</p>\r\n\r\n<p>&nbsp;</p>',2.00,'min',1,'2021-08-28 10:16:49','2021-09-10 15:56:38','scrambled-eggs_1631289398.jpg'),(4,'Mesina','ivo',2,'meso','<p>1.Meso začinite noć ranije i ostavite u frižideru</p>\r\n\r\n<p>2. Idući dan meso stavite u pećnicu na 150 stupnjeva i pecite 2 sata</p>\r\n\r\n<p>3. Nakon 2 sata povisite temperaturu na 200 stupnjeva i pustite da koža poprimi zlatno-žutu boju</p>\r\n\r\n<p>4. U međuvremenu skuhajte jaja</p>\r\n\r\n<p>5.Sve skupa servirajte</p>\r\n\r\n<p><strong>Dobar tek!</strong></p>',3.00,'h',10,'2021-08-28 22:16:19','2021-08-30 12:15:47','mesina_1630325747.jpg'),(5,'Pileći batak','ivo',2,'meso','<p>1. Pileće batke začinite dobro</p>\r\n\r\n<p>2.Stavite ih na vruću tavu te pustite da im se koža zapeće tj. dok ne poprimi zlatnu boju</p>\r\n\r\n<p>3. Nakon toga servirajte ih i uživajte</p>',30.00,'min',2,'2021-08-29 11:44:00','2021-08-30 10:12:10','piletina_1630318330.jpg'),(6,'Jaje na oko','ivo',2,'doručak','<p>Rabite jaja u vrelu tavu i pecite do željene čvrstoće bjelanjaka i žumanjka</p>',3.00,'min',2,'2021-08-29 19:38:32','2021-09-02 09:19:25','jaje_na_oko_1630574365.jpg'),(7,'Prhki keksići','Pero',1,'desert','<p>1. Pomije&scaron;ajte sve suhe sastojke</p>\r\n\r\n<p>2. Dodajte pomije&scaron;anim suhim sastojcima na manje komade nasjeckan ohlađeni maslac</p>\r\n\r\n<p>3. Rukama izradite u mrvičastu smjesu</p>\r\n\r\n<p>4. Dodajke kiselo vrhnje i umijesite tijesto</p>\r\n\r\n<p>5. Tijesto oblikujte u kuglu, zamotajte u foliju te stavit u hladnjak da se hladi 1h</p>\r\n\r\n<p>6. Nakon sat vremena tijesto razvaljajte na debljinu od 3 mm te izrezujte kalupima po želji</p>\r\n\r\n<p>7. Pecite u prethodno zagrijanoj pečnici na 180&deg;C oko 10 minuta tj. dok ne dobiju zlatnožutu boju</p>\r\n\r\n<p>8. Ukrasite po želji te servirajte</p>',1.10,'h',4,'2021-09-10 16:58:21','2021-09-10 17:56:15','keksi_1631296574.jpg'),(8,'Bruschette s pestom, mozzarellom i rajčicama','Pero',1,'užina','<p>1. Sve sastojke narežite (mozzarellu i rajčice narezite na otprilike 3mm)</p>\r\n\r\n<p>2. Narezani baguette istostirajte do zlatnožute boje</p>\r\n\r\n<p>3. Namažite pesto u tankom sloju na svaku kri&scaron;ku kruha&nbsp;</p>\r\n\r\n<p>4. Na namazani kruh posložite po dvije ili tri kri&scaron;ke mozzarelle i rajčice (da se pokrije kruh) i uživajte</p>\r\n\r\n<p>Dobar tek!</p>',7.00,'min',6,'2021-09-10 23:10:40','2021-09-10 23:10:40','pesto_1631315440.jpg'),(9,'Carbonara','Barbara',4,'tjestenina','<p>1. U velikoj padeli zakuhajte vodu koju ste posolili</p>\r\n\r\n<p>2. Nakon &scaron;to voda zakuha, ubacite spaghette u nju i promije&scaron;ajte svako toliko kako se ne bi zalijepili</p>\r\n\r\n<p>3. Za to vrijeme, u drugoj tavi, dodajte maslinovo ulje, te nakon &scaron;to se zagrije, ubacite pancetu kako bi se zapekla i postala hrskava (prikazite da ju ne prepečete ili spalite). Nakon &scaron;to postane hrskava, tavu maknite s vatre</p>\r\n\r\n<p>4. U zdjelicu razbijte dva jaja, a od trećeg jaja dodajte samo žumanjak (za kremastiji umak) i umutite ih</p>\r\n\r\n<p>5.&nbsp; U umućena jaja dodajte naribani parmezan i papar</p>\r\n\r\n<p>6. Nakon &scaron;to se pa&scaron;ta skuha, ocijedite ju te dodajte u tavu s pancetom i dobro promije&scaron;ajte</p>\r\n\r\n<p>7. Prije dodavanja umaka od jaja, pustite da se pa&scaron;ta i panceta malo ohlade kako vam se umak ne bi pretvorio u kajgano</p>\r\n\r\n<p>8. Nakon &scaron;to su se malo ohladili, prelite pa&scaron;tu s umakom, dobro promije&scaron;ajte i servirajte odmah</p>\r\n\r\n<p>Dobar tek :)</p>',15.00,'min',2,'2021-09-11 08:37:18','2021-09-11 09:25:48','carbonara_1631352346.jpg'),(10,'Pizza kiflice','Barbara',4,'pekarski proizvodi','<p>1. Zagrijte mlijeko tako da nije prevruće (stavite prst u mlijeko i ako je vam je samo mokro, ne osjetite nikakvu toplinu, je idealne temperature)</p>\r\n\r\n<p>2. U toplo mlijeko dodajte izmrvljeni kvasac, &scaron;ećer i&nbsp; 2g soli, primije&scaron;ajte i pusitite na toplom mjestu dok se kvasac ne aktivira (dignut će se i vidjet ćete mjehuriće, potrebno mu je između 5 do 10 minuta, ovisno o starosti kvasca i toplini prostorije)</p>\r\n\r\n<p>3. U posudu dodajte kilu bra&scaron;na, prethodno aktivirani kvasac, jedno jaje , ulje, ostatak soli, te sve zajedno mije&scaron;ati dok se ne oblikuje meko tijesto koje se vi&scaron;e ne lijepi za prste niti za podlogu</p>\r\n\r\n<p>4. Tijesto ostavite na toplom mjestu da se diže, trebati će mu od pola sata do 45 minuta, ovisno o toplini prostorije. Kada mu se veličina udvostrući, podijelite ga na četiri jednaka dijela, te svaki posebno razvaljajte u obliku kruga (ili da je barem približno oblika kruga)</p>\r\n\r\n<p>5. Razrežite tijesto na trokute (ko da pizzu rezete, ali na malo manje trokute), na &scaron;iri kraj trokuta dodajte pola žlice pizza umaka, komadić &scaron;unke i fetu ili dve sira, zarolajte kiflice i stavite ih u lim za pečenje koji ste obložili papirom za pečenje (sastojaka možete stvatiti koliko želite samo pripazite da se i dalje trokuti mogu zatvoriti)</p>\r\n\r\n<p>6. Svaku kiflicu namažize sa žumanjkom od drugog jajeta te stavite na nju tanku fetu maslaca</p>\r\n\r\n<p>7. Lim za pečenje s kiflicama stavite u prethodno zagrijanu pečnicu na 200&deg;C i pecite dok ne porumene (otprilike između 15 do 20 min)</p>\r\n\r\n<p>&nbsp;</p>',1.30,'h',4,'2021-09-11 10:35:07','2021-09-11 10:35:07','kiflice_1631356507.jpg'),(11,'Rižoto od gljiva','Barbara',4,'rižoto','<p>1. Zakuhajte vodu i u nju ubacite temeljac za juhu (kocku za juhu) i dobro promije&scaron;ajte dok se ne otopi</p>\r\n\r\n<p>2. Narežite luk na sitne kockice, &scaron;ampinjone na plo&scaron;ke. Če&scaron;njak i per&scaron;in isto narežite na sitno i ubacite u &scaron;alicu s polovicom maslinovog ulja, te promije&scaron;ajte i pustite da stoji</p>\r\n\r\n<p>3. U tavu dodajte ostatak maslinovog ulja i narezani luk, dinstajte dok luk ne omek&scaron;a i postane žute boje (otprilike između 3-5 min)</p>\r\n\r\n<p>4. U međuvremenu u drugoj tavi stavite polovicu maslaca da se otopi i na to stavite narezane &scaron;ampinjone, dodajte sol i papar i pustite ih da se dinstaju otprilike 15 minuta, svako toliko promije&scaron;at kako se ne bi previ&scaron;e uhvatile</p>\r\n\r\n<p>5. Na izdinstani luk dodajte rižu, dobro promije&scaron;ajte i pustite da upije svu masnoću</p>\r\n\r\n<p>6. Nakon toga ulite vino i nastavite mije&scaron;ati dok cijelo ne ispari</p>\r\n\r\n<p>7. Zatim krenite zalijevati rižu s napravljenim temeljcem za juhu, paljak po paljak (kad riža upije svu tekućinu tek onda dodati ponovo)</p>\r\n\r\n<p>, te konstantno mije&scaron;ati kako se riža ne bi uhvatila</p>\r\n\r\n<p>8. Nakon &scaron;to potro&scaron;ite svu tekućinu i riža bude skoro gotova (otprilike joj treba od 10 do 15 minuta) dodajte u nju gotove &scaron;ampinjone i promije&scaron;ajte dobro pusteći da se sve kuha jo&scaron; neko vrijeme</p>\r\n\r\n<p>9. Nakon toga maknite tavu s vatre, dodajte ostatak maslaca i dobro umije&scaron;ajte dok se ne rastopi, a zatim sve zalite s mje&scaron;avinom maslinovog ulja, če&scaron;njaka i per&scaron;ina te promije&scaron;ajte jo&scaron; jednom i servirajte</p>',40.00,'min',3,'2021-09-11 18:15:28','2021-09-11 18:15:28','rizoto_od_gljiva_1631384127.jpg'),(12,'Piletina s graškom','Barbara',4,'meso','<p>1. U posudi napravite marinadu od soja umaka, meda, 3mL ulja, 3g papra, 3g vegete i 3g crvene paprike (smjesa neka bude polutekuća)</p>\r\n\r\n<p>2. U napravljenu marinadu uvaljajte pileće batke, te ih stavite u hladnjak da se mariniraju 30 do 45 minuta</p>\r\n\r\n<p>3. Za to vrijeme narežite luk i če&scaron;njak na sitno</p>\r\n\r\n<p>4. Na ostatku ulja popržite marinirano meso tako da mu se pore zatvore (kako bi ostalo sočno)</p>\r\n\r\n<p>5. Nakon &scaron;to meso poprimi lijepu zlanu koricu, dodajte luk i popržite dok ne postane zlatan, zatim dodajte ostatak začina (vegeta, crvena paprika, curry i papar) i 200 mL vode&nbsp;</p>\r\n\r\n<p>6. Pustite da se meso lagano krčka dok ne ispari cijela voda, a zatim dodajte jo&scaron; 200 mL vode (neka se kuha između 45 i 50 minuta)</p>\r\n\r\n<p>7. Nakon &scaron;to to vrijeme prođe, dodajte gra&scaron;ak s ostatkom vode i kuhajte dok se gra&scaron;ak ne skuha (otp. 10 do 12 minuta)</p>\r\n\r\n<p>8. Kako biste zgusnuli umak dodajte bra&scaron;no po malo i dobro mije&scaron;ajte kako se ne bi stvorile grudice, prokuhajte jo&scaron; 3 minute nakon tog i poslužite</p>\r\n\r\n<p>Jelo možete poslužiti s tjesteninom, palentom, rižom ili pireom</p>',2.00,'h',2,'2021-09-11 20:43:41','2021-09-11 20:43:41','batigr_1631393019.jpg'),(13,'Cheesecake od jagode','Barbara',4,'desert','<p>1. Kekse sameljite (možete u procesoru ili s batom za meso) u fini prah</p>\r\n\r\n<p>2. Otopite maslac, dodajte ga smrvljenim keksima te dobro promije&scaron;ajte, a zatim dobro utisnite u kalup promjera 20 cm (uzmite ča&scaron;u ili ne&scaron;to s ravnim dnom kako biste smjesu maksimalno utisnuli u kalup). Zatim stavite kalup u hladnjak na 45 min</p>\r\n\r\n<p>3. Za to vrijeme operite i očistite jagode, te napravite pire od njih sa &scaron;tapnim mikserom</p>\r\n\r\n<p>4. Bijelu čokoladu natrgajte na kockice i zalijte s vrelim slatkim vrhnjem. Dobro promije&scaron;ajte i pustite da se smjesa malo ohladi i stisne</p>\r\n\r\n<p>5. Kada se smjesa malo stisla umije&scaron;ajte u nju ABC sir koji ste prije ocijedili i razradili s viilicom</p>\r\n\r\n<p>6. Na kraju dodajte pire od jagoda u smjesu i ručno sve lagano promije&scaron;ajte</p>\r\n\r\n<p>7. Kada je krema gotova, izvadite kalup iz hladnjaka i ulite kremu u njega i vratite natrag u hladnjak gdje mora stajat minimalno 15 sati kako bi se krema stisla</p>\r\n\r\n<p>8. Tortu ukrasite prije posluživanja</p>',17.00,'h',12,'2021-09-11 22:08:04','2021-09-11 22:08:04','cheesecake2_1631398083.jpg');
/*!40000 ALTER TABLE `probas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('ca5Zw0yZVpseNOeJwksInSh3ocr6YDTw3y30g2FF',NULL,'10.0.2.2','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUktFWkpPZzJBM3Q4QjB0Zk81aERJOGpZNG9yUlNzWWVrTUNlWDhqNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=',1631398142);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Pero','pperic@gmail.com',NULL,'$2y$10$rmXtxynm4/EbFGHk/dAbmO1ZMrFhL60zFflfouPY/RlnOvw5GQt62',NULL,NULL,NULL,NULL,NULL,'2021-08-27 14:10:55','2021-08-27 14:10:55'),(2,'ivo','ivic@gmail.com',NULL,'$2y$10$mEMKmzgPgKIojNBudGKxHeiEI2WOBXCUsjg12ZkeVuR23v4pK8bg6',NULL,NULL,NULL,NULL,NULL,'2021-08-28 18:16:12','2021-08-28 18:16:12'),(4,'Barbara','barbie1808.bb@gmail.com',NULL,'$2y$10$igtqJ1rch03TRy31jvGMUu77TfgXdAv/A02LbszZnGpdSTqULZ0Ge',NULL,NULL,NULL,NULL,NULL,'2021-09-11 08:37:18','2021-09-11 08:37:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-11 22:10:13
