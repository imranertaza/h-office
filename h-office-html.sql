-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: h-office
-- ------------------------------------------------------
-- Server version	8.0.43-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog` (
  `blog_id` int NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cat_id` int NOT NULL,
  `featured_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sort_order` int NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdBy` int NOT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedBy` int DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'Ajo: A café for all','ajo-a-cafe-for-all','Ajo, a unique café in Dhaka, blends global and local cultures with eco-friendly design and diverse cuisine.','<p>Ajo. The name itself arouses images of a culture, beautiful yet on the verge of being lost. Ajo simply means &#8216;unknown&#8217;, something we can all identify with, lost in a world of confusion where everyday it becomes harder to understand who we really are. Indeed, it is quite hard to come across cafés these days which can successfully blend the global with the local, to truly become &#8216;glocal&#8217;.</p>\r\n    <p>Khalid, the co-owner of the newly opened &#8216;Ajo&#8217; pledges to thus remind us of who we really are and yet preserve the memory of who we have become.</p>\r\n    <p>Located at Dhanmondi, Road Number 7/A, House 60, as a part of Dhaka Arts Centre, right next to the cultural hub of the lakeside, &#8216;Ajo&#8217; is indeed a café with a difference. Inexpensive food, a noticeable difference in the environment and a menu representing the best of all worlds,</p>\r\n    <p>Ajo instantly makes a mark on its customers. Successfully implementing the 18-step retailing process, Ajo leaves an immediate impression even on the most casual of observers. After the &#8216;wow&#8217; effect at the fourth step, Ajo soon lets its culinary delights do the talking.</p>\r\n    <p>But Ajo is much more than the food itself. The whole place has a fascinating story to tell and looking around one can collect the pieces of this tale for themselves. The architectural beauty, the concepts and designs used to create Ajo are unique in their own right. Comprising of 80 percent recycled materials, the café can be considered extremely environmentally friendly.</p>\r\n    <p>A crow&#8217;s nest chandelier, use of discarded ship&#8217;s floorboards and metals, discarded transistors and even self-made bulb-holders, all exude a feel of an ambience surreal. Following patterns inspired by a century old Buddhist temple, the place advocates the Zen philosophy, luring visitors to a sense of peace and tranquility whilst sitting in the middle of the bustling Dhanmondi area.</p>\r\n    <p>A choice of casual or relaxed dining awaits the clients, who may choose any of the five sitting areas, including a smoking area and even an air-conditioned area with a bookshelf filled with books in place. Ajo doesn&#8217;t try to characterise its customers, opening their doors to people from all walks of life, incorporating everyone&#8217;s whims and wishes in one quiet retreat.</p>\r\n    <p>&#8216;Cafés should match our culture, not create an artificial ambience.&#8217; Khalid states, whilst displaying the tea cup which is styled to a completely local design. Head-Office Communication indeed worked hard to realise this difficult concept of not only blending various cultures, but also keeping one in its rightful pedestal. Ajo, the name itself, credits no particular language, a testament to what the project delivers. &#8216;We don&#8217;t try to over-sell.&#8217; Khalid concludes, though they do strive to over-deliver. From Reshmi Kebab to steak, Ajo has a menu to serve everyone complemented with an aura like no other. Though Ajo&#8217;s journey has just started, if they continue in their current vein, it is clear that they can indeed go the distance.</p>\r\n    <p><em>By Osama Rahman</em></p>\r\n    <div class=\"field field-type-text field-field-news-source\">\r\n    <div class=\"field-items\">\r\n    <div class=\"field-item odd\">\r\n    <div class=\"field-label-inline-first\"><strong>News Source: The Daily Star</strong></div>\r\n    </div>\r\n    </div>\r\n    </div>','Ajo: A café for all | h office','Ajo, café, Dhaka, eco-friendly, Head Office Communication, glocal, culture, dining','Ajo, a unique café in Dhaka, blends global and local cultures with eco-friendly design and diverse cuisine.',1,'172816_10150109091892473_509672472_6591341_5029799_o-1200x500.jpg','2015-03-02 05:25:09',0,'0','2015-03-02 11:25:09',1,'2025-09-06 19:11:36',1),(2,'Formal Launch of ‘Google Bus’ in Bangladesh','googlebuslaunch','The Google Bus project aims to educate students about the internet and Google’s free applications across Bangladesh.','<p>Google bus project aims to educate half a million college and university students about the power of the internet, its utilities and introduce them to Google’s free applications. The project will hold in-class instructor led training and experience zone in the bus across six divisions in Bangladesh aiming to reach 480 colleges and universities.</p>\r\n    <p>Google Asia Pacific Country Manager, Emerging Markets, James McClure and state minister for ICT minister Junaid Ahmed Palak inaugurated the ceremony.</p>\r\n    <div class=\"btn-group social-share\">\r\n        <button class=\"social-share-main btn btn-default btn-small\">Share</button>\r\n        <a class=\"social-link btn btn-default btn-small\" href=\"http://www.facebook.com/sharer.php?u={{ url()->current() }}&title=Formal%20Launch%20of%20%e2%80%98Google%20Bus%e2%80%99%20in%20Bangladesh\" target=\"_blank\"><i class=\"icon el-icon-facebook\"></i></a>\r\n        <a class=\"social-link btn btn-default btn-small\" href=\"http://twitter.com/home/?status=Formal%20Launch%20of%20%e2%80%98Google%20Bus%e2%80%99%20in%20Bangladesh%20-%20{{ url()->current() }}%20via%20@headofficebd\" target=\"_blank\"><i class=\"icon el-icon-twitter\"></i></a>\r\n        <a class=\"social-link btn btn-default btn-small\" href=\"http://linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title=Formal%20Launch%20of%20%e2%80%98Google%20Bus%e2%80%99%20in%20Bangladesh\" target=\"_blank\"><i class=\"icon el-icon-linkedin\"></i></a>\r\n        <a class=\"social-link btn btn-default btn-small\" href=\"https://plus.google.com/share?url={{ url()->current() }}\" target=\"_blank\"><i class=\"icon el-icon-googleplus\"></i></a>\r\n        <a class=\"social-link btn btn-default btn-small\" href=\"http://pinterest.com/pin/create/button/?url={{ url()->current() }}\" target=\"_blank\"><i class=\"icon el-icon-pinterest\"></i></a>\r\n    </div>','Formal Launch of ‘Google Bus’ in Bangladesh | h office','Google Bus, Bangladesh, internet education, Google applications, student training','The Google Bus project aims to educate half a million students in Bangladesh about the internet and Google’s free applications.',1,'port_Gbus-17-1200x500.jpg','2015-01-17 08:03:33',0,'0','2015-01-17 14:03:33',2,'2025-09-06 19:11:40',2),(3,'MIB Spirit MADE IN BANGLADESH','madeinbangladesh','Made in Bangladesh is a lifestyle brand promoting patriotism and eco-friendly, high-quality local products.','<p>Made in Bangladesh is life style and accessories brand that ignites the feeling of patriotism and local wisdom. We are small group of people trying to change how consumers perceive lifestyle goods made in Bangladesh worldwide. We think that all material used in the process of making can be locally sourced, be green and stylish while still holding to top-notch quality to meet global standards. If you&#8217;re in line with our beliefs, stay with us.</p>\r\n    <p>We&#8217;re the crazy ones who think they can change the world, one small item at a time.</p>\r\n    <p>&nbsp;</p>\r\n    <div class=\"btn-group social-share\">\r\n        <button class=\"social-share-main btn btn-default btn-small\">Share</button>\r\n        <a class=\"social-link btn btn-default btn-small\" href=\"http://www.facebook.com/sharer.php?u={{ url()->current() }}&title=MIB%20Spirit%20%20MADE%20IN%20BANGLADESH\" target=\"_blank\"><i class=\"icon el-icon-facebook\"></i></a>\r\n        <a class=\"social-link btn btn-default btn-small\" href=\"http://twitter.com/home/?status=MIB%20Spirit%20%20MADE%20IN%20BANGLADESH%20-%20{{ url()->current() }}%20via%20@headofficebd\" target=\"_blank\"><i class=\"icon el-icon-twitter\"></i></a>\r\n        <a class=\"social-link btn btn-default btn-small\" href=\"http://linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title=MIB%20Spirit%20%20MADE%20IN%20BANGLADESH\" target=\"_blank\"><i class=\"icon el-icon-linkedin\"></i></a>\r\n        <a class=\"social-link btn btn-default btn-small\" href=\"https://plus.google.com/share?url={{ url()->current() }}\" target=\"_blank\"><i class=\"icon el-icon-googleplus\"></i></a>\r\n        <a class=\"social-link btn btn-default btn-small\" href=\"http://pinterest.com/pin/create/button/?url={{ url()->current() }}\" target=\"_blank\"><i class=\"icon el-icon-pinterest\"></i></a>\r\n    </div>','MIB Spirit MADE IN BANGLADESH | h office','Made in Bangladesh, lifestyle, accessories, patriotism, eco-friendly, local products, Bangladesh','Made in Bangladesh is a lifestyle brand promoting patriotism and eco-friendly, high-quality local products.',1,'MIB_product-1600x1066.jpg','2015-01-17 07:52:43',0,'0','2015-01-17 13:52:43',2,'2025-09-06 19:11:43',2);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_category`
--

DROP TABLE IF EXISTS `blog_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_category` (
  `cat_id` int unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int DEFAULT NULL,
  `category_name` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdBy` int DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_category`
--

LOCK TABLES `blog_category` WRITE;
/*!40000 ALTER TABLE `blog_category` DISABLE KEYS */;
INSERT INTO `blog_category` VALUES (1,NULL,'Experience',1,'1','2025-09-06 18:48:11',NULL),(2,NULL,'Product Studio',2,'1','2025-09-06 18:48:11',NULL);
/*!40000 ALTER TABLE `blog_category` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolio` (
  `portfolio_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Agency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int NOT NULL,
  PRIMARY KEY (`portfolio_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` VALUES (1,'Ajo','ajo',2,'<p>Ajo is a café that is much more than only a café. It offers an experience of the fusion of eco-awareness, aesthetic value and modernity, served in the form of delectable fusion dishes, which are healthy, fresh and prepared with care. Head Office Communication planned, designed and executed the whole experience of Ajo.</p>','Ajo','Head Office Communication',2),(2,'CARE FOUNTAIN','care-fountain',1,'<p>Carefountain is a humanitarian organization for the people in need. Head Office Communication has been conceptualizing its innovative initiatives and is involved in all of its creative planning for its effective communications.</p><p>&nbsp;</p>','Carefountain','Head Office Communication',4),(3,'Google-Bus Bangladesh','google-bus-bangladesh',2,'<p><em>Google, one of biggest brand in the world, is with the mission</em> to organize the world&#8217;s information and make it universally accessible and useful. <a href=\"http://googleasiapacific.blogspot.sg/2014/11/google-bus-takes-internet-for-ride.html\">‘Google Bus Bangladesh’</a> is an initiative of Google that aims to visit some 400 educational institutions across Bangladesh, providing hands-on training on Google apps to the university level students to help them make the most of the internet. Head Office Communication is running the project. Google Bus, a digitally equipped bus, is giving Google experience to these students is an integral part of the project.</p>','Google','Head Office Communication',1),(4,'GP-House','gp-house',2,'<p class=\"entry-subtitle\">This is the subtitle</p>\n                    <p>The goal of the GP-House profiling project was to create a unique compilation of contemporary,\n                        dynamic Bangladeshi art that reflects the identity of a nation, a nation that is looking towards a\n                        new horizon of progress. By bringing together different pieces of art from around the country in\n                        one iconic building, Head Office Communication has created a whole new dimension to the idea of\n                        corporate workplace.</p>','Grameen Phone','Head Office Communication',5),(5,'Jaago','jaago',1,'<p>Head Office Communication is glad and proud to be a part of social development initiatives like Jaago. The campaigns and communications materials of Jaago are designed by us with pure dedication, spreading the message of humanity.</p>','Jaago','Head Office Communication',6),(6,'Jatra','jatra',2,'<p>Jatra, the renowned local handicraft brand has a name, fame and character of its own. Head Office Communication reflected the distinct character of this handicraft brand in its outlet in Banani by being playful in its interior design, while promoting local heritage and yet giving it a global approach.</p>','Jatra','Head Office Communication',3);
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolio_category`
--

DROP TABLE IF EXISTS `portfolio_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolio_category` (
  `category_id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio_category`
--

LOCK TABLES `portfolio_category` WRITE;
/*!40000 ALTER TABLE `portfolio_category` DISABLE KEYS */;
INSERT INTO `portfolio_category` VALUES (1,'Branding','branding','Projects focused on brand identity and visual strategy',1,'2025-09-11 05:07:13','2025-09-11 05:07:13'),(2,'Experience','experience','User experience, interaction design, and immersive journeys',1,'2025-09-11 05:07:13','2025-09-11 05:07:13'),(3,'Social','social','Campaigns and content tailored for social media platforms',1,'2025-09-11 05:07:13','2025-09-11 05:07:13');
/*!40000 ALTER TABLE `portfolio_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolio_category_map`
--

DROP TABLE IF EXISTS `portfolio_category_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolio_category_map` (
  `portfolio_id` int unsigned NOT NULL,
  `category_id` int unsigned NOT NULL,
  PRIMARY KEY (`portfolio_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio_category_map`
--

LOCK TABLES `portfolio_category_map` WRITE;
/*!40000 ALTER TABLE `portfolio_category_map` DISABLE KEYS */;
INSERT INTO `portfolio_category_map` VALUES (1,1),(1,2),(2,1),(2,3),(3,2),(4,2),(5,1),(5,3),(6,1),(6,2);
/*!40000 ALTER TABLE `portfolio_category_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolio_image`
--

DROP TABLE IF EXISTS `portfolio_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolio_image` (
  `portfolio_image_id` int unsigned NOT NULL AUTO_INCREMENT,
  `portfolio_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sort_order` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`portfolio_image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio_image`
--

LOCK TABLES `portfolio_image` WRITE;
/*!40000 ALTER TABLE `portfolio_image` DISABLE KEYS */;
INSERT INTO `portfolio_image` VALUES (1,6,'product-display-07-1200x500.jpg','2',0),(2,6,'product-display-768x1184.jpg','0',0),(3,6,'product-display-03-768x1141.jpg','0',1),(4,6,'product-display-05-768x511.jpg','0',2),(5,6,'product-display-06-768x511.jpg','0',3),(6,6,'product-display-07-768x528.jpg','0',4),(7,6,'product-display-08-768x511.jpg','0',5),(8,6,'signage-768x1195.jpg','0',6),(9,5,'invitation_jaago-768x802.jpg','0',0),(10,5,'invitation_jaago_001-768x508.jpg','0',1),(11,5,'invitation_jaago_003-768x508.jpg','0',2),(12,5,'Mug_jaago_001-768x508.jpg','0',3),(13,5,'Mug_jaago_002-768x508.jpg','0',4),(14,4,'DSC7323-1600x1062.jpg','0',0),(15,4,'DSC7711-1600x1062.jpg','0',1),(16,4,'DSC7762-1600x900.jpg','0',2),(17,4,'DSC7878-1600x1999.jpg','0',3),(18,4,'DSC79661-1600x1142.jpg','0',4),(19,4,'DSC8000-1600x1066.jpg','0',5),(20,4,'DSC8095-1600x1066.jpg','0',6),(21,3,'port_Gbus-17-768x511.jpg','0',0),(22,3,'port_Gbus-17-768x511.jpg','0',1),(23,3,'port_Gbus-18-768x548.jpg','0',2),(24,3,'Gbus-2-768x511.jpg','0',3),(25,3,'port_Gbus-85-768x335.jpg','0',4),(26,3,'port_Gbus-55-768x511.jpg','0',5),(27,3,'port_Gbus-42-768x511.jpg','0',6),(28,2,'b1-768x512.jpg','0',0),(29,2,'b2-768x512.jpg','0',1),(30,2,'n1-768x512.jpg','0',2),(31,2,'n2-768x512.jpg','0',3),(32,2,'b3-768x540.jpg','0',4),(33,2,'b4-768x552.jpg','0',5),(34,2,'n3-768x505.jpg','0',6),(35,2,'n4-768x512.jpg','0',7),(36,1,'6-0011-768x512.jpg','0',0),(37,1,'3-0011-768x512.jpg','0',1),(38,1,'4-0011-768x512.jpg','0',2),(39,1,'5-0011-768x1107.jpg','0',3),(40,1,'172816_10150109091892473_509672472_6591341_5029799_o-768x512.jpg','0',4),(41,1,'8-001-768x1148.jpg','0',5),(42,1,'248757_10150273733506093_543591092_9524215_5739007_n-768x473.jpg','0',6),(43,1,'309027_10150470194486093_543591092_10937057_1797544054_n-768x512.jpg','0',7),(44,3,'port_Gbus-17-1067x1067.jpg','1',0),(45,1,'6-0011-768x768.jpg','1',0),(46,2,'n1-768x768.jpg','1',0),(47,5,'invitation_jaago-768x768.jpg','1',1),(48,4,'DSC7762-1067x1067.jpg','1',0),(49,6,'product-display-07-768x768.jpg','1',0),(50,3,'port_Gbus-17-768x511.jpg','3',0),(51,1,'6-0011-768x512.jpg','3',0),(52,6,'product-display-07-768x528.jpg','3',0),(54,5,'invitation_jaago-768x802.jpg','3',0),(55,2,'n1-768x512.jpg','3',0),(56,4,'DSC7762-768x432.jpg','3',0),(57,4,'DSC7762-1600x900.jpg','2',1),(58,4,'DSC7323-1600x1062.jpg','2',2),(59,4,'DSC7711-1600x1062.jpg','2',3),(60,4,'DSC7762-1600x900.jpg','2',4),(61,4,'DSC7878-1600x1999.jpg','2',5),(62,4,'DSC79661-1600x1142.jpg','2',6),(63,4,'DSC8000-1600x1066.jpg','2',7),(64,4,'DSC8095-1600x1066.jpg','2',8),(65,4,'DSC8243-1600x1600.jpg','2',9),(66,4,'MG_1862-1600x2401.jpg','2',10),(67,4,'MG_1864-1600x1066.jpg','2',11),(68,4,'MG_1867-1600x1066.jpg','2',12),(69,4,'MG_1868-1600x2401.jpg','2',13),(70,4,'MG_1873-1600x1066.jpg','2',14),(71,4,'MG_1883-1600x1066.jpg','2',15),(72,4,'MG_1889-1600x1066.jpg','2',16),(73,4,'MG_1891-1600x2401.jpg','2',17),(74,4,'MG_1899-1600x1066.jpg','2',18),(75,4,'IMG_0737-1600x1066.jpg','2',19),(76,6,'product-display-02-768x1152.jpg','0',1),(77,6,'product-display-04-768x511.jpg','0',2);
/*!40000 ALTER TABLE `portfolio_image` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-09-11 15:34:44
