-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: web
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '127.0.0.1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:08:53','2020-12-25 00:08:53'),(2,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:17:05','2020-12-25 00:17:05'),(3,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:17:36','2020-12-25 00:17:36'),(4,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:29:44','2020-12-25 00:29:44'),(5,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:29:47','2020-12-25 00:29:47'),(6,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:39:33','2020-12-25 00:39:33'),(7,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:40:36','2020-12-25 00:40:36'),(8,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:40:46','2020-12-25 00:40:46'),(9,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:41:00','2020-12-25 00:41:00'),(10,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:41:25','2020-12-25 00:41:25'),(11,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:43:42','2020-12-25 00:43:42'),(12,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:44:11','2020-12-25 00:44:11'),(13,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:44:58','2020-12-25 00:44:58'),(14,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:46:15','2020-12-25 00:46:15'),(15,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:46:31','2020-12-25 00:46:31'),(16,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:46:37','2020-12-25 00:46:37'),(17,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:49:24','2020-12-25 00:49:24'),(18,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 00:50:10','2020-12-25 00:50:10'),(19,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 01:05:31','2020-12-25 01:05:31'),(20,'test','test@test.test','375009990099','test','test','192.168.96.1','2020-12-25 01:06:18','2020-12-25 01:06:18'),(21,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:06:32','2020-12-25 01:06:32'),(22,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:08:41','2020-12-25 01:08:41'),(23,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:08:53','2020-12-25 01:08:53'),(24,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:10:01','2020-12-25 01:10:01'),(25,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:12:14','2020-12-25 01:12:14'),(26,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:13:20','2020-12-25 01:13:20'),(27,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:19:04','2020-12-25 01:19:04'),(28,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:19:29','2020-12-25 01:19:29'),(29,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:19:36','2020-12-25 01:19:36'),(30,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:19:42','2020-12-25 01:19:42'),(31,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:19:46','2020-12-25 01:19:46'),(32,'test','test@test.test','375292588642','test','test','192.168.96.1','2020-12-25 01:19:50','2020-12-25 01:19:50'),(33,'test','test@test.test','375292588642','test','test','192.168.1.1','2020-12-25 01:21:40','2020-12-25 01:21:40'),(34,'test','test@test.test','375292588642','test','test','192.168.1.1','2020-12-25 01:21:58','2020-12-25 01:21:58'),(35,'test','test@test.test','375292588642','test','test','192.168.1.1','2020-12-25 01:22:06','2020-12-25 01:22:06'),(36,'test','test@test.test','375292588642','test','test','192.168.1.1','2020-12-25 01:22:15','2020-12-25 01:22:15'),(37,'test','test@test.test','375292588642','test','test','127.0.0.1','2020-12-25 01:22:58','2020-12-25 01:22:58'),(38,'test','test@test.test','375292588642','test','test','127.0.0.1','2020-12-25 01:23:09','2020-12-25 01:23:09'),(39,'test','test@test.test','375292588642','test','test','127.0.0.1','2020-12-25 01:25:42','2020-12-25 01:25:42'),(40,'test','test@test.test','375292588642','test','test','127.0.0.1','2020-12-25 01:25:56','2020-12-25 01:25:56'),(41,'test','test@test.test','375259616584','test','test','127.0.0.1','2020-12-25 01:26:06','2020-12-25 01:26:06'),(42,'test','test@test.test','375009990099','test','test','127.0.0.1','2020-12-25 01:28:32','2020-12-25 01:28:32'),(43,'test','test@test.test','test','test','test','127.0.0.1','2020-12-25 01:29:45','2020-12-25 01:29:45');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (12,'photo_2020-12-25_15-41-17.jpg','2020-12-25 12:43:13','2020-12-25 12:43:13'),(13,'photo_2020-12-25_15-41-20.jpg','2020-12-25 12:43:13','2020-12-25 12:43:13'),(14,'photo_2020-12-25_15-41-24.jpg','2020-12-25 12:43:13','2020-12-25 12:43:13'),(15,'photo_2020-12-25_15-41-26.jpg','2020-12-25 12:43:13','2020-12-25 12:43:13'),(16,'photo_2020-12-25_15-41-30.jpg','2020-12-25 12:43:13','2020-12-25 12:43:13'),(17,'photo_2020-12-25_15-41-39.jpg','2020-12-25 12:43:21','2020-12-25 12:43:21'),(18,'photo_2020-12-25_15-41-40.jpg','2020-12-25 12:43:21','2020-12-25 12:43:21'),(19,'photo_2020-12-25_15-41-44.jpg','2020-12-25 12:43:21','2020-12-25 12:43:21'),(20,'photo_2020-12-25_15-41-46.jpg','2020-12-25 12:43:22','2020-12-25 12:43:22'),(21,'photo_2020-12-25_15-41-49.jpg','2020-12-25 12:43:29','2020-12-25 12:43:29'),(22,'photo_2020-12-25_15-41-57.jpg','2020-12-25 12:43:29','2020-12-25 12:43:29'),(23,'photo_2020-12-25_15-42-00.jpg','2020-12-25 12:43:29','2020-12-25 12:43:29'),(24,'photo_2020-12-25_15-42-02.jpg','2020-12-25 12:43:29','2020-12-25 12:43:29'),(25,'photo_2020-12-25_15-42-33.jpg','2020-12-25 12:43:29','2020-12-25 12:43:29');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Главная','/','2020-12-21 21:53:20','2020-12-21 21:53:20'),(2,'Питомцы','/animals','2020-12-21 21:57:56','2020-12-21 21:57:56'),(3,'Галерея','/gallery','2020-12-21 21:58:24','2020-12-21 21:58:24'),(4,'Новости','/news','2020-12-21 21:58:42','2020-12-21 21:58:42'),(5,'Контакты','/contacts','2020-12-21 21:58:42','2020-12-21 21:58:42');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_12_20_002129_create_news_table',2),(5,'2020_12_20_205033_create_gallery_table',3),(6,'2020_12_20_224937_create_teams_table',4),(7,'2020_12_21_200048_create_teams_gallery_table',5),(8,'2020_12_21_212243_create_slider_table',6),(9,'2020_12_21_214433_create_menu_table',7),(10,'2020_12_24_224404_create_table_contacts',8),(11,'2020_12_25_013709_create_settings_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` tinyint unsigned NOT NULL DEFAULT '1',
  `published_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_user_id_foreign` (`user_id`),
  CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Мы открылись!','<p>Наш приют домашних животных приглашает Вас на открытие по адресу г. Минск, ул. Коммунистическая 5. Ждём вас!!!</p>','<p>Наш приют домашних животных приглашает Вас на открытие по адресу г. Минск, ул. Коммунистическая 5. Ждём вас!!!</p>',1,'2020-12-20 15:50:00','2020-12-20 00:50:31','2020-12-25 13:11:32',NULL,'photo_2020-12-22_20-31-45.jpg'),(2,'О завершении общественного обсуждения проекта постановления Совета Министров Республики Беларусь «О вопросах по обращению с животными»','<p>Общественное обсуждение проекта постановления Совета Министров Республики Беларусь «О вопросах по обращению с животными» (далее Проект) завершился 17 апреля 2020 года. На общественное обсуждение отвелось всего 10 дней, что с точки зрения важности и актуальности нормативного акта, ничтожно мало, но благодаря активной работе зоозащитных организаций, волонтеров-активистов и просто не равнодушным гражданам, по итогам Проект документа вызвал большой общественный резонанс и претерпел весьма существенные изменения.</p>','<p>Общественное обсуждение проекта постановления Совета Министров Республики Беларусь «О вопросах по обращению с животными» (далее Проект) завершился 17 апреля 2020 года. На общественное обсуждение отвелось всего 10 дней, что с точки зрения важности и актуальности нормативного акта, ничтожно мало, но благодаря активной работе зоозащитных организаций, волонтеров-активистов и просто не равнодушным гражданам, по итогам Проект документа вызвал большой общественный резонанс и претерпел весьма существенные изменения:</p><ul><li>Изменена норма по нормированию содержания животных в квартирах. Таким образом, владельцы собак и кошек находятся в равном правовом статусе по сравнению с другими владельцами домашних питомцев: хорьков, ласок, птиц, мини-пигов и т.д. Немаловажно следует отметить, что жильцам общежитий также разрешается иметь животное, но с ограничением, что является разумной нормой.</li><li>Введен запрет на отстрел безнадзорных животных и отлов котов. Ранее возможен был отстрел в исключительных случаях, в то время как понятие исключительности толковалось абсолютно субъективно, и как мы знаем и есть факты, отстрел проводился, в том числе с использованием огнестрельного оружия.</li><li>Владельцам собак на частной территории разрешается держать собак на свободном выгуле при условии отсутствия возможности собаки покинуть территорию без сопровождения. Ранее мы писали о некорректности требования к владельцу частного дома и участка дополнительно нести расходы по строительству вольера (это проект, разрешение на строительство и т.д.) и держать собаку на привязи.</li><li>Владельцам животных разрешается выгул животного на придомовой территории при условии уборки территории от продуктов жизнедеятельности своих животных. Следует отметить, что данная норма как нельзя кстати для владельцев собак, т.к. невозможно запретить собаке, дожидавшуюся своего выгула в некоторых случаях по 8 часов, выйти и сразу удовлетворять свои природные потребности без скандала соседей по подъезду.</li><li>Предусмотрены случаи о привлечении к ответственности за умышленные провокационные действия, влекущие проявление агрессии животного.</li></ul><p>Конечно, по нашему мнению, есть некоторые недостатки, которые несколько омрачают радость от вышеуказанных изменений, т.к. очень хотелось ввести обязательность чипирования домашних питомцев, но подобную регистрацию оставили добровольной, а также не узаконили программу ОСВ (отлов, стерилизацию и выпуск). Определили обязанность местных исполкомов определить места для выгула и дрессировки собак. Некоторые зоозащитники обращали внимание, что следует определить места и для купания с собаками, но надеемся, что это не останется без внимания местных органов власти и они пойдут навстречу владельцам и определят места, как в европейских странах и США – пляжи для собак.</p><p>Еще остается весьма важная и продуктивная работа по перечню собак «потенциально опасных пород». Мы будем привлекать ведущих кинологов и заводчиков для его изменения и определения состава пород, которые должны быть включены в него. В тоже время, в нашей душе остаётся светлая надежда на то, что при прохождении согласований с иными госорганами, включая экспертизу Министерства юстиции Республики Беларусь, проект останется с вышеуказанными положительными изменениями.</p>',1,'2020-04-27 13:15:00','2020-12-25 13:17:58','2020-12-25 13:28:25',NULL,'photo_2020-12-25_15-42-02.jpg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin'),(2,'user');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'phone','Номер телефона','2020-12-25 01:44:48','2020-12-25 01:47:34','+375(00)000-00-00'),(2,'email','Электронная почта','2020-12-25 01:45:26','2020-12-25 01:47:45','admin@server.com'),(3,'address','Адрес','2020-12-25 01:45:41','2020-12-25 01:47:59','г. Минск, улица Коммунистическая, 5');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slider` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (1,'murzik.jpeg','2020-12-21 21:33:52','2020-12-21 21:33:52'),(2,'photo_2020-12-22_20-28-25.jpg','2020-12-22 17:29:36','2020-12-22 17:29:36'),(3,'photo_2020-12-22_20-31-16.jpg','2020-12-22 17:31:32','2020-12-22 17:31:32'),(4,'photo_2020-12-22_20-31-45.jpg','2020-12-22 17:31:54','2020-12-22 17:31:54');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teams` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `type_id` tinyint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_home` tinyint(1) DEFAULT '0',
  `old` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sterilization_castration` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_type_id_foreign` (`type_id`),
  CONSTRAINT `teams_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,1,'Амур','<p>За Амуром, как за заправским шпионом, гонялись 3 ночи, во имя того чтобы он направился навстречу своему домашнему счастью. Удивительно, как обладатель спокойного характера настолько мастерски уходил от погони. И все же был пойман. Амур имеет мягкий характер, мурчит, играет, ведет себя интеллигентно, не навязчив, стеснителен с новыми людьми. И у него есть в запасе много историй, которые он будет намурлыкивать своему хозяину. Приглашается человек с добрым сердцем, кто готов присмотреться и взять на себя ответственность, любить и обожать Амура.</p>',0,'1 год',1,'murzik.jpeg','2020-12-21 18:57:24','2020-12-21 18:57:24'),(2,2,'Ариша','<p>Милая Аришка - резвая котишка ищет дом в качестве любимого члена семьи! Совсем ещё молоденькая, 7 месяцев, здорова, стерилизована, привита, лоток и когтеточка на отлично! Необычайно уютная и ласковая, игривая и активная, но не навязчивая. Любит спать рядышком, трогая лапкой. Есть навык парикмахера - с удовольствием поправит Вам прическу и создаст настроение. Отлично ладит с сородичами и может стать прекрасным компаньоном уже имеющемуся питомцу. Приходите знакомиться! Ариша очарует Вас с первого Мяу!</p>',1,'7 месяцев',1,'photo_2020-12-22_20-31-16.jpg','2020-12-22 18:56:41','2020-12-22 18:56:41'),(3,10,'Тэрра','<p>Представляем вашему вниманию малышку Тэрру! Это маленькая красавица с любящим сердцем. Девочке около 5-х месяцев и она самый настоящий ребенок: подвижная, активная, добрая и по-детски наивная! Любит играть, любит внимание человека и очень старается его привлечь! Но не смотря на все проказы - она замечательная! Любящая, ласковая, верная и искренняя малышка! Тэррочка уже полностью привита и уже готова обрести своё счастье! Если Вам приглянулась наша малышка, звоните и пишите скорее!</p>',0,'5 месяцев',0,'chipmunks-house-photo-and-description_1.jpg','2020-12-22 19:32:23','2020-12-22 19:32:23'),(4,9,'Рыжик','<p>Привет, меня зовут Рыжик, мне скоро исполнится годик. Природа меня наградила невероятным золотым окрасом и добрыми выразительными глазами. Несмотря на все тяготы уличной жизни, я сохранил жизнерадостность, оптимизм и любовь к людям! Обожаю прогулки и активные игры на свежем воздухе. Здоров, от всего обработан, средних размеров. Ищу друга, в чьи руки могу доверить свое сердце. Если вы хотите познакомиться со мной поближе – звоните.</p>',0,'3 года',1,'original.jpg','2020-12-22 19:34:42','2020-12-22 19:40:00'),(5,11,'Милка','<p>Эта крошка совсем юна, ей всего лишь 1,5 месяца и это значит, что хозяин сможет с самого детства воспитать из собачки друга и защитника себе по душе. Малышка очень смышленая, озорная, ласковая и дружелюбная, как с людьми, так и собратьями. А также девчонка обладает обольстительной внешностью. Вы только посмотрите на ее нежный окрас цвета топленого молока с воздушной белоснежной пенкой! Просто прелесть! Так что торопитесь подарить дом и стать семьей для такой изящной, неотразимой и очень умной красотки, пока вас не опередили другие!\n</p>',1,'1,5 месяца',0,'1f3fa9d621d4830cad13028a74464c84.jpg','2020-12-22 19:44:48','2020-12-22 19:44:48'),(6,8,'Эви','<p>Эви - спокойная, ласковая и аккуратная белочка. Она прямо с улицы попала на операционный стол. Медлить было нельзя: предполагаемая опухоль во время осмотра у врача оказалась внематочной беременностью. Операция была сложной, но все уже позади. Эви очень повезло быть вовремя замеченной волонтерами. Теперь Эви вполне готова к новому дому.</p>',0,'3 месяца',0,'13426.jpg','2020-12-22 19:54:50','2020-12-22 19:54:50'),(7,7,'Джинни','<p>Джинни не по возрасту спокойная, рассудительная, очень ласковая и дружелюбная. И очень-очень красивая! Пишите, звоните, приезжайте знакомиться и забирайте маленькое счастье, чтобы любить и заботиться!</p>',0,'1 год',0,'084739f22a77bbe8bd45e5c92653691a.jpg','2020-12-22 20:00:08','2020-12-22 20:00:08');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams_gallery`
--

DROP TABLE IF EXISTS `teams_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teams_gallery` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` tinyint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `teams_gallery_team_id_foreign` (`team_id`),
  CONSTRAINT `teams_gallery_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams_gallery`
--

LOCK TABLES `teams_gallery` WRITE;
/*!40000 ALTER TABLE `teams_gallery` DISABLE KEYS */;
INSERT INTO `teams_gallery` VALUES (1,1,'murzik.jpeg','2020-12-21 21:12:59','2020-12-21 21:12:59'),(2,1,'murzik.jpeg','2020-12-23 23:34:22','2020-12-23 23:34:22'),(3,1,'murzik.jpeg','2020-12-23 23:34:22','2020-12-23 23:34:22'),(4,1,'murzik.jpeg','2020-12-23 23:34:22','2020-12-23 23:34:22'),(5,1,'murzik.jpeg','2020-12-23 23:34:22','2020-12-23 23:34:22'),(6,1,'murzik.jpeg','2020-12-23 23:34:22','2020-12-23 23:34:22');
/*!40000 ALTER TABLE `teams_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `types` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'Кот','2020-12-20 23:12:15','2020-12-20 23:12:15'),(2,'Кошка','2020-12-20 23:12:22','2020-12-20 23:12:22'),(3,'Пёс','2020-12-20 23:12:28','2020-12-20 23:12:28'),(4,'Собака','2020-12-20 23:12:34','2020-12-20 23:12:34'),(5,'Сирийский хомяк (девочка)','2020-12-20 23:12:51','2020-12-20 23:12:51'),(6,'Сирийский хомяк (мальчик)','2020-12-20 23:12:51','2020-12-20 23:12:51'),(7,'Суслик','2020-12-22 19:28:02','2020-12-22 19:28:02'),(8,'Белка','2020-12-22 19:28:06','2020-12-22 19:28:06'),(9,'Олень','2020-12-22 19:28:15','2020-12-22 19:28:15'),(10,'Бурундук','2020-12-22 19:29:11','2020-12-22 19:29:11'),(11,'Кролик','2020-12-22 19:40:19','2020-12-22 19:40:19');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` tinyint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Nikolay','ahalay994@gmail.com',NULL,'+375257705830',0,'EG3Xc80wB4wq6bkbRvTxZRJCPCGfQr4G0Zp7vVaDkuW7ULO4qE9blfPK1aXT','2020-12-15 19:45:34','2020-12-20 14:27:05','$2y$10$j0g3FjgUkk0o8FS9r58RLOxdoWElzktXgIUCYovwd89pUwuSjNMjm');
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

-- Dump completed on 2020-12-29 20:47:02
