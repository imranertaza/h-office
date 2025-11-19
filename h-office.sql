-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: h-office
-- ------------------------------------------------------
-- Server version	8.0.43-0ubuntu0.24.04.2

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
  `short_des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'Ajo: A café for all','ajo-a-cafe-for-all','Ajo is a culture-inspired café in Dhanmondi that blends global flavors with local soul. Built with 80% recycled materials and rooted in Zen philosophy, it offers a unique dining experience that celebrates identity, sustainability, and artistic expression','<p>Ajo. The name itself arouses images of a culture, beautiful yet on the verge of being lost. Ajo simply means &#8216;unknown&#8217;, something we can all identify with, lost in a world of confusion where everyday it becomes harder to understand who we really are. Indeed, it is quite hard to come across cafés these days which can successfully blend the global with the local, to truly become &#8216;glocal&#8217;.</p>\n    <p>Khalid, the co-owner of the newly opened &#8216;Ajo&#8217; pledges to thus remind us of who we really are and yet preserve the memory of who we have become.</p>\n    <p>Located at Dhanmondi, Road Number 7/A, House 60, as a part of Dhaka Arts Centre, right next to the cultural hub of the lakeside, &#8216;Ajo&#8217; is indeed a café with a difference. Inexpensive food, a noticeable difference in the environment and a menu representing the best of all worlds,</p>\n    <p>Ajo instantly makes a mark on its customers. Successfully implementing the 18-step retailing process, Ajo leaves an immediate impression even on the most casual of observers. After the &#8216;wow&#8217; effect at the fourth step, Ajo soon lets its culinary delights do the talking.</p>\n    <p>But Ajo is much more than the food itself. The whole place has a fascinating story to tell and looking around one can collect the pieces of this tale for themselves. The architectural beauty, the concepts and designs used to create Ajo are unique in their own right. Comprising of 80 percent recycled materials, the café can be considered extremely environmentally friendly.</p>\n    <p>A crow&#8217;s nest chandelier, use of discarded ship&#8217;s floorboards and metals, discarded transistors and even self-made bulb-holders, all exude a feel of an ambience surreal. Following patterns inspired by a century old Buddhist temple, the place advocates the Zen philosophy, luring visitors to a sense of peace and tranquility whilst sitting in the middle of the bustling Dhanmondi area.</p>\n    <p>A choice of casual or relaxed dining awaits the clients, who may choose any of the five sitting areas, including a smoking area and even an air-conditioned area with a bookshelf filled with books in place. Ajo doesn&#8217;t try to characterise its customers, opening their doors to people from all walks of life, incorporating everyone&#8217;s whims and wishes in one quiet retreat.</p>\n    <p>&#8216;Cafés should match our culture, not create an artificial ambience.&#8217; Khalid states, whilst displaying the tea cup which is styled to a completely local design. Head-Office Communication indeed worked hard to realise this difficult concept of not only blending various cultures, but also keeping one in its rightful pedestal. Ajo, the name itself, credits no particular language, a testament to what the project delivers. &#8216;We don&#8217;t try to over-sell.&#8217; Khalid concludes, though they do strive to over-deliver. From Reshmi Kebab to steak, Ajo has a menu to serve everyone complemented with an aura like no other. Though Ajo&#8217;s journey has just started, if they continue in their current vein, it is clear that they can indeed go the distance.</p>\n    <p><em>By Osama Rahman</em></p>\n    <div class=\"field field-type-text field-field-news-source\">\n    <div class=\"field-items\">\n    <div class=\"field-item odd\">\n    <div class=\"field-label-inline-first\"><strong>News Source: The Daily Star</strong></div>\n    </div>\n    </div>\n    </div>','Ajo: A café for all',NULL,'Ajo, a unique café in Dhaka, blends global and local cultures with eco-friendly design and diverse cuisine.',1,'5029799_o-870x500.jpg','2015-03-02 05:25:09',2,'1','2015-03-02 11:25:09',1,'2025-10-07 14:48:18',1),(2,'Formal Launch of ‘Google Bus’ in Bangladesh','formal-launch-of-google-bus-in-bangladesh','Google bus project aims to educate half a million college and university students about the power of the internet, its utilities and introduce them to Google’s free applications.','<p>Google bus project aims to educate half a million college and university students about the power of the internet, its utilities and introduce them to Google’s free applications. The project will hold in-class instructor led training and experience zone in the bus across six divisions in Bangladesh aiming to reach 480 colleges and universities.</p>\n    <p>Google Asia Pacific Country Manager, Emerging Markets, James McClure and state minister for ICT minister Junaid Ahmed Palak inaugurated the ceremony.</p>','Formal Launch of ‘Google Bus’ in Bangladesh | h office',NULL,'The Google Bus project aims to educate half a million students in Bangladesh about the internet and Google’s free applications.',1,'port_Gbus-17-1200x500.jpg','2015-01-17 08:03:33',3,'1','2015-01-17 14:03:33',2,'2025-10-07 14:48:18',2),(3,'MIB Spirit MADE IN BANGLADESH','mib-spirit-made-in-bangladesh','Made in Bangladesh is life style and accessories brand that ignites the feeling of patriotism and local wisdom. We are small group of people trying to change how consumers perceive lifestyle goods made in Bangladesh worldwide.','<p>Made in Bangladesh is life style and accessories brand that ignites the feeling of patriotism and local wisdom. We are small group of people trying to change how consumers perceive lifestyle goods made in Bangladesh worldwide. We think that all material used in the process of making can be locally sourced, be green and stylish while still holding to top-notch quality to meet global standards. If you&#8217;re in line with our beliefs, stay with us.</p>\n    <p>We&#8217;re the crazy ones who think they can change the world, one small item at a time.</p>\n    <p>&nbsp;</p>','MIB Spirit MADE IN BANGLADESH | h office',' Bangladesh Accessories, Bangladesh Products, Bangladeshi Products, Fine Products, Made in Bangladesh','Made in Bangladesh is a lifestyle brand promoting patriotism and eco-friendly, high-quality local products.',1,'MIB_product-1600x1066.jpg','2015-01-19 07:52:43',4,'1','2015-01-17 13:52:43',2,'2025-10-07 14:48:18',2),(4,'Promotional AV – Mermaid Eco Resort, Cox’s Bazar','promotional-av-mermaid-eco-resort-coxs-bazar\n','A cinematic AV campaign for Mermaid Eco Resort, capturing the harmony of nature, sustainability, and luxury in Cox’s Bazar—crafted to inspire eco-conscious travel across global audiences.','<p>We partnered with Mermaid Eco Resort to craft a visually captivating audiovisual (AV) experience that brings the essence of nature, sustainability, and luxury to life. From scripting and storytelling to production and editing, the AV showcases the serene beauty of Cox’s Bazar while positioning Mermaid as the premier eco-friendly getaway. Designed to attract both domestic and international travelers, the video serves as a powerful marketing tool across digital platforms.</p>','Promotional AV for Mermaid Eco Resort | Cox’s Bazar Luxury & Sustainability','','Experience the serene beauty of Cox’s Bazar through a cinematic AV crafted for Mermaid Eco Resort—highlighting sustainability, luxury, and nature to inspire eco-conscious travel across Bangladesh and beyond.',1,'promotional-av-mermaid-eco-resort-coxs-bazar.jpg','2015-01-17 08:03:33',1,'1','2015-01-17 14:03:33',2,'2025-10-07 14:48:18',2);
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
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdBy` int DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_category`
--

LOCK TABLES `blog_category` WRITE;
/*!40000 ALTER TABLE `blog_category` DISABLE KEYS */;
INSERT INTO `blog_category` VALUES (1,NULL,'Experience','experience',1,'1','2025-09-06 18:48:11',NULL),(2,NULL,'Studio','studio',3,'1','2025-09-06 18:48:11',NULL),(3,NULL,'Product','product',2,'1','2025-09-14 15:12:28',NULL);
/*!40000 ALTER TABLE `blog_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_category_maps`
--

DROP TABLE IF EXISTS `blog_category_maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_category_maps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` bigint unsigned NOT NULL,
  `cat_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_category_maps`
--

LOCK TABLES `blog_category_maps` WRITE;
/*!40000 ALTER TABLE `blog_category_maps` DISABLE KEYS */;
INSERT INTO `blog_category_maps` VALUES (3,2,1,'2025-09-14 09:17:34',NULL),(4,3,2,'2025-09-14 09:17:34',NULL),(5,3,3,'2025-09-14 09:17:34',NULL),(6,4,1,NULL,NULL);
/*!40000 ALTER TABLE `blog_category_maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_images`
--

DROP TABLE IF EXISTS `blog_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_images` (
  `blog_image_id` int unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int unsigned NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` enum('0','1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sort_order` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`blog_image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_images`
--

LOCK TABLES `blog_images` WRITE;
/*!40000 ALTER TABLE `blog_images` DISABLE KEYS */;
INSERT INTO `blog_images` VALUES (1,1,'5029799_o-870x500.jpg',NULL,'1',0),(2,2,'port_Gbus-17-1200x500.jpg',NULL,'1',0),(3,3,'MIB_product-1600x1066.jpg',NULL,'1',0),(4,2,'port_Gbus-17-1200x500 copy.jpg',NULL,'2',0),(5,3,'MIB_product-1600x1066.jpg',NULL,'2',1),(6,3,'8047884723732741814_o-1600x2400.jpg',NULL,'2',2),(7,3,'7487871458005622165_n-1600x1067.jpg',NULL,'2',3),(8,3,'MIB_product-1600x1066 copy.jpg',NULL,'2',4),(9,3,'1180230344411627776_n-1600x1066.jpg',NULL,'2',5),(10,1,'5029799_o-1200x500.jpg',NULL,'2',0),(11,4,'promotional-av-mermaid-eco-resort-coxs-bazar.jpg',NULL,'1',0),(12,4,'','Mermaid_Eco_Tourism_Resort.mp4','2',0);
/*!40000 ALTER TABLE `blog_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (2,'2019_12_14_000001_create_personal_access_tokens_table',1);
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
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `short_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL,
  PRIMARY KEY (`portfolio_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` VALUES (1,'IBA','IBA – Institute of Business Administration\n',NULL,'iba-institute-of-business-administration',2,'<p>As a full-spectrum marketing agency, we partnered with the Institute of Business Administration (IBA) to develop a comprehensive brand identity system. Our services included crafting a detailed brand guideline manual and designing & installing high-impact external signage that reflects IBA’s institutional prestige and professional ethos. The result is a cohesive visual identity that strengthens the institute’s brand presence across both print and physical spaces.\n</p>','Institute Of Business Administration','Head Office Communication',2),(2,'Laxfo','Brand Identity & Packaging – LAXFO Electronics\n',NULL,'brand-identity-packaging-laxfo-electronics',1,'<p>For LAXFO, a brand in the electronics and lighting space, we delivered a complete brand identity solution. This included logo design, a brand guideline manual, and premium packaging design tailored for shelf impact and consumer trust. From visual consistency to product-level communication, we helped LAXFO shine across all touchpoints.</p>','LAXFO Electronics','Head Office Communication',4),(3,'G-Bus Bangladesh','Google-Bus Bangladesh','Google, one of biggest brand in the world, is with the mission to organize the world\'s information and make it universally accessible and useful.','google-bus-bangladesh',2,'<p>\n  <em>Google, one of the most influential brands in the world, is driven by its mission</em> to organize the world’s information and make it universally accessible and useful. \n  <a href=\"http://googleasiapacific.blogspot.sg/2014/11/google-bus-takes-internet-for-ride.html\">‘Google Bus Bangladesh’</a> is a nationwide initiative aimed at empowering university-level students by enhancing their digital literacy.\n  The project plans to visit around 400 educational institutions across Bangladesh, offering hands-on training on various Google applications. Through these interactive sessions, students are equipped with the tools and knowledge to harness the full potential of the internet for learning, research, and career development.\n  The centerpiece of this initiative is the Google Bus—a digitally equipped mobile classroom that brings the Google experience directly to students. The project is being executed by Head Office Communication, ensuring seamless coordination and impactful delivery.\n</p>\n','Google','Head Office Communication',1),(4,'EBL Gift Boxes','Premium Gift Boxes for Eastern Bank PLC \n',NULL,'premium-gift-boxes-for-eastern-bank-plc',2,'<p>As part of our collaboration with Eastern Bank PLC, we crafted a bespoke gift box designed exclusively for their esteemed clients. Meticulously curated and elegantly presented, the box includes artisanal items that reflect warmth, appreciation, and celebration. From handcrafted treats to personalized details, every element was tailored to enhance brand value and client connection during the festive season. \n</p><p style=\"font-weight: bold;text-align:center; font-style: italic; margin-top: 20px;\">\n  Thoughtfully designed. Uniquely memorable. Strategically impactful.\n</p>','Eastern Bank Limited','Head Office Communication',6),(5,'PetroMax LPG','PetroMax LPG\n',NULL,'petromax-lpg',1,'<p>Petromax LPG is committed to promoting safety and environmental sustainability through innovative products. Our brand emphasizes the importance of safe cooking and eco-friendly practices, ensuring peace of mind for every household. Through engaging photoshoots and impactful visuals, we highlight the reliability and quality of Petromax LPG, making it a trusted choice for modern families. With every image, we aim to connect emotionally with our customers, showcasing how our product enhances daily life.</p>','PetroMax LPG','Head Office Communication',5),(6,'Display Of MIG 29','Display Of MIG 29\n',NULL,'display-of-mig-29',2,'<p>We proudly executed the installation display of the iconic MIG-29 fighter jet at the Bangladesh Military Museum—bringing precision, patriotism, and impactful presentation to one of the nation’s premier defense exhibits.\nMIG-29 fighter jet installation at Bangladesh Military Museum, executed with precision and pride.\n</p>','Bangladesh Air Force','Head Office Communication',3),(7,'Artist Monirul Islam','Documentary on Artist Monirul Islam\r\n',NULL,'documentary-on-artist-monirul-islam',1,'<p>\r\nWe had the privilege of producing an audio-visual documentary on Monirul Islam—an internationally renowned artist celebrated for his distinctive etching style and groundbreaking techniques. Our team handled the full production process, capturing the artist’s journey, philosophy, and creative brilliance in a compelling visual narrative. This project was not only a tribute to his legacy but also a testament to the power of storytelling through film.\r\n</p>','Monirul Islam','Head Office Communication',7),(9,'Rahul Group Caravan\n','Taste on Wheels – Rahul Group Caravan\n',NULL,'taste-on-wheels-rahul-group-caravan',1,'<p>We brought flavor to the streets with this vibrant food caravan designed for Rahul Group. Branded under the theme <q>Taste on Wheels,</q> the mobile unit features eye-catching visuals, functional design, and strong identity elements to serve and promote their culinary ventures on the go.</p>','Rahul Group Caravan\n','Head Office Communication',8),(10,'JTI','Signage & Space Branding – JTI',NULL,'signage-space-branding-jti',1,'<p>Our team collaborated with JTI to transform their corporate environment through precision signage and immersive space branding. From conceptualization to final installation, we curated a modern, cohesive visual experience that aligns with JTI’s global brand identity. The result is a sleek, branded space that enhances both aesthetics and brand recall.\r\n</p>','JTI','Head Office Communication',9),(11,'Ajo','Ajo',NULL,'ajo',2,'<p>Ajo is a café that is much more than only a café. It offers an experience of the fusion of eco-awareness, aesthetic value and modernity, served in the form of delectable fusion dishes, which are healthy, fresh and prepared with care. Head Office Communication planned, designed and executed the whole experience of Ajo.</p>','Ajo','Head Office Communication',10),(12,'CARE FOUNTAIN','CARE FOUNTAIN',NULL,'care-fountain',1,'<p>Carefountain is a humanitarian organization for the people in need. Head Office Communication has been conceptualizing its innovative initiatives and is involved in all of its creative planning for its effective communications.</p><p>&nbsp;</p>','Carefountain','Head Office Communication',12),(13,'GP-House','GP-House',NULL,'gp-house',2,'<p class=\"entry-subtitle\">This is the subtitle</p><p>The goal of the GP-House profiling project was to create a unique compilation of contemporary, dynamic Bangladeshi art that reflects the identity of a nation, a nation that is looking towards a new horizon of progress. By bringing together different pieces of art from around the country in one iconic building, Head Office Communication has created a whole new dimension to the idea of corporate workplace.</p>','Grameen Phone','Head Office Communication',11),(14,'Jaago','Jaago',NULL,'jaago',1,'<p>Head Office Communication is glad and proud to be a part of social development initiatives like Jaago. The campaigns and communications materials of Jaago are designed by us with pure dedication, spreading the message of humanity.</p>','Jaago','Head Office Communication',14),(15,'Jatra','Jatra',NULL,'jatra',2,'<p>Jatra, the renowned local handicraft brand has a name, fame and character of its own. Head Office Communication reflected the distinct character of this handicraft brand in its outlet in Banani by being playful in its interior design, while promoting local heritage and yet giving it a global approach.</p>','Jatra','Head Office Communication',13);
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
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio_category`
--

LOCK TABLES `portfolio_category` WRITE;
/*!40000 ALTER TABLE `portfolio_category` DISABLE KEYS */;
INSERT INTO `portfolio_category` VALUES (1,'Branding','branding','Projects focused on brand identity and visual strategy',1,'2025-09-11 05:07:13','2025-09-11 05:07:13'),(2,'Experience','experience','User experience, interaction design, and immersive journeys',1,'2025-09-11 05:07:13','2025-09-11 05:07:13'),(3,'Social','social','Campaigns and content tailored for social media platforms',1,'2025-09-11 05:07:13','2025-09-11 05:07:13'),(4,'Gift Items','gift_items','Campaigns and content tailored for social media platforms',1,'2025-09-11 05:07:13','2025-09-11 05:07:13'),(7,'Audio-Visual','audio-visual',NULL,1,'2025-09-16 08:44:59','2025-09-16 08:44:59'),(8,'Signage','signage',NULL,1,'2025-09-16 08:47:44','2025-09-16 08:47:44');
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
INSERT INTO `portfolio_category_map` VALUES (1,1),(1,2),(2,1),(2,2),(3,2),(4,4),(5,1),(6,1),(6,2),(7,7),(9,1),(9,2),(10,8),(11,1),(11,2),(12,1),(12,3),(13,2),(14,1),(14,3),(15,1),(15,2);
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
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` enum('0','1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sort_order` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`portfolio_image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio_image`
--

LOCK TABLES `portfolio_image` WRITE;
/*!40000 ALTER TABLE `portfolio_image` DISABLE KEYS */;
INSERT INTO `portfolio_image` VALUES (3,6,'mig-29-2.jpg',NULL,'0',2),(4,6,'mig-29-4.jpg',NULL,'0',4),(5,6,'mig-29-5.jpg',NULL,'0',5),(6,6,'mig-29-6.jpg',NULL,'0',6),(21,3,'g-bus-1.jpg',NULL,'0',0),(22,3,'g-bus-2.jpg',NULL,'0',1),(23,3,'g-bus-3.jpg',NULL,'0',2),(24,3,'g-bus-4.jpg',NULL,'0',3),(25,3,'g-bus-5.jpg',NULL,'0',5),(26,3,'g-bus-6.jpg',NULL,'0',4),(27,3,'g-bus-7.jpg',NULL,'0',6),(36,1,'iba-1.jpg',NULL,'0',0),(37,1,'iba-2.jpg',NULL,'0',1),(38,1,'iba-3.jpg',NULL,'0',2),(39,1,'iba-4.jpg',NULL,'0',3),(40,1,'iba-5.jpg',NULL,'0',4),(41,1,'iba-6.jpg',NULL,'0',5),(42,1,'featured-iba.jpg',NULL,'1',0),(44,3,'port_Gbus-17-1067x1067.jpg',NULL,'1',0),(50,3,'port_Gbus-17-768x511.jpg',NULL,'3',0),(76,6,'mig-29-1.jpg',NULL,'0',1),(77,6,'mig-29-3.jpg',NULL,'0',3),(78,3,'g-bus-8.jpg',NULL,'0',7),(80,2,'laxfo-1.jpg',NULL,'0',0),(81,2,'laxfo-2.jpg',NULL,'0',1),(82,2,'laxfo-3.jpg',NULL,'0',2),(83,50,'laxfo-4.jpg',NULL,'0',3),(84,2,'laxfo-5.jpg',NULL,'0',4),(85,2,'laxfo-6.jpg',NULL,'0',5),(86,2,'laxfo-7.jpg',NULL,'0',6),(87,2,'laxfo-8.jpg',NULL,'0',7),(88,4,'ebl-gift-1.jpg',NULL,'0',0),(89,4,'ebl-gift-2.jpg',NULL,'0',1),(90,4,'ebl-gift-3.jpg',NULL,'0',2),(91,4,'ebl-gift-4.jpg',NULL,'0',3),(92,4,'ebl-gift-5.jpg',NULL,'0',4),(93,4,'ebl-gift-6.jpg',NULL,'0',5),(94,5,'PetroMaxLPG-1.jpg',NULL,'0',0),(95,5,'PetroMaxLPG-2.jpg',NULL,'0',1),(96,5,'PetroMaxLPG-3.jpg',NULL,'0',2),(97,5,'PetroMaxLPG-4.jpg',NULL,'0',3),(98,5,'PetroMaxLPG-5.jpg',NULL,'0',4),(99,5,'PetroMaxLPG-6.jpg',NULL,'0',5),(100,5,'PetroMaxLPG-7.jpg',NULL,'0',6),(101,5,'PetroMaxLPG-8.jpg',NULL,'0',7),(102,5,'PetroMaxLPG-9.jpg',NULL,'0',8),(103,5,'PetroMaxLPG-10.jpg',NULL,'0',9),(104,9,'rahul-group-1.jpg',NULL,'0',0),(105,9,'rahul-group-2.jpg',NULL,'0',1),(106,9,'rahul-group-3.jpg',NULL,'0',2),(107,9,'rahul-group-4.jpg',NULL,'0',3),(108,9,'rahul-group-5.jpg',NULL,'0',4),(109,9,'rahul-group-6.jpg',NULL,'0',5),(110,9,'rahul-group-7.jpg',NULL,'0',6),(111,9,'rahul-group-8.jpg',NULL,'0',7),(112,9,'rahul-group-9.jpg',NULL,'0',8),(113,10,'jti-1.JPG',NULL,'0',0),(114,10,'jti-2.jpg',NULL,'0',1),(115,10,'jti-3.JPG',NULL,'0',2),(116,10,'jti-4.JPG',NULL,'0',3),(117,10,'jti-5.JPG',NULL,'0',4),(118,10,'jti-6.JPG',NULL,'0',5),(119,10,'jti-7.JPG',NULL,'0',6),(120,10,'jti-8.JPG',NULL,'0',7),(121,10,'jti-9.jpg',NULL,'0',8),(122,10,'jti-10.jpg',NULL,'0',9),(123,10,'jti-11.jpg',NULL,'0',10),(124,10,'jti-12.jpg',NULL,'0',11),(125,7,'Artist_Monir_Book.jpg',NULL,'0',5),(126,11,'6-0011-768x512.jpg',NULL,'0',0),(127,11,'3-0011-768x512.jpg',NULL,'0',1),(128,11,'4-0011-768x512.jpg',NULL,'0',2),(129,11,'5-0011-768x1107.jpg',NULL,'0',3),(130,11,'172816_10150109091892473_509672472_6591341_5029799_o-768x512.jpg',NULL,'0',4),(131,11,'8-001-768x1148.jpg',NULL,'0',5),(132,11,'248757_10150273733506093_543591092_9524215_5739007_n-768x473.jpg',NULL,'0',6),(133,11,'309027_10150470194486093_543591092_10937057_1797544054_n-768x512.jpg',NULL,'0',7),(134,11,'6-0011-768x768.jpg',NULL,'1',0),(135,11,'6-0011-768x512.jpg',NULL,'3',0),(136,12,'b1-768x512.jpg',NULL,'0',0),(137,12,'b2-768x512.jpg',NULL,'0',1),(138,12,'n1-768x512.jpg',NULL,'0',2),(139,12,'n2-768x512.jpg',NULL,'0',3),(140,12,'b3-768x540.jpg',NULL,'0',4),(141,12,'b4-768x552.jpg',NULL,'0',5),(142,12,'n3-768x505.jpg',NULL,'0',6),(143,12,'n4-768x512.jpg',NULL,'0',7),(144,12,'n1-768x768.jpg',NULL,'1',0),(145,12,'n1-768x512.jpg',NULL,'3',0),(146,13,'DSC7762-1067x1067.jpg',NULL,'1',0),(147,13,'DSC7762-768x432.jpg',NULL,'3',0),(148,13,'DSC7762-1600x900.jpg',NULL,'2',1),(149,13,'DSC7323-1600x1062.jpg',NULL,'2',2),(150,13,'DSC7711-1600x1062.jpg',NULL,'2',3),(151,13,'DSC7762-1600x900.jpg',NULL,'2',4),(152,13,'DSC7878-1600x1999.jpg',NULL,'2',5),(153,13,'DSC79661-1600x1142.jpg',NULL,'2',6),(154,13,'DSC8000-1600x1066.jpg',NULL,'2',7),(155,13,'DSC8095-1600x1066.jpg',NULL,'2',8),(156,13,'DSC8243-1600x1600.jpg',NULL,'2',9),(157,13,'MG_1862-1600x2401.jpg',NULL,'2',10),(158,13,'MG_1864-1600x1066.jpg',NULL,'2',11),(159,13,'MG_1867-1600x1066.jpg',NULL,'2',12),(160,13,'MG_1868-1600x2401.jpg',NULL,'2',13),(161,13,'MG_1873-1600x1066.jpg',NULL,'2',14),(162,13,'MG_1883-1600x1066.jpg',NULL,'2',15),(163,13,'MG_1889-1600x1066.jpg',NULL,'2',16),(164,13,'MG_1891-1600x2401.jpg',NULL,'2',17),(165,13,'MG_1899-1600x1066.jpg',NULL,'2',18),(166,13,'IMG_0737-1600x1066.jpg',NULL,'2',19),(167,14,'invitation_jaago-768x802.jpg',NULL,'0',0),(168,14,'invitation_jaago_001-768x508.jpg',NULL,'0',1),(169,14,'invitation_jaago_003-768x508.jpg',NULL,'0',2),(170,14,'Mug_jaago_001-768x508.jpg',NULL,'0',3),(171,14,'Mug_jaago_002-768x508.jpg',NULL,'0',4),(172,14,'invitation_jaago-768x768.jpg',NULL,'1',1),(173,14,'invitation_jaago-768x802.jpg',NULL,'3',0),(174,15,'product-display-07-1200x500.jpg',NULL,'2',0),(175,15,'product-display-768x1184.jpg',NULL,'0',0),(176,15,'product-display-03-768x1141.jpg',NULL,'0',1),(177,15,'product-display-05-768x511.jpg',NULL,'0',2),(178,15,'product-display-06-768x511.jpg',NULL,'0',3),(179,15,'product-display-07-768x528.jpg',NULL,'0',4),(180,15,'product-display-08-768x511.jpg',NULL,'0',5),(181,15,'signage-768x1195.jpg',NULL,'0',6),(182,15,'product-display-07-768x768.jpg',NULL,'1',0),(183,15,'product-display-07-768x528.jpg',NULL,'3',0),(184,15,'product-display-02-768x1152.jpg',NULL,'0',1),(185,15,'product-display-04-768x511.jpg',NULL,'0',2),(186,7,NULL,'Artist_Monir_Bio.mp4','0',4),(187,7,NULL,'FILM_01.mp4','0',2),(188,7,NULL,'FILM_02.mp4','0',3),(189,7,NULL,'FILM_03.mp4','0',4),(190,1,'related-iba.jpg',NULL,'3',0),(191,2,'featured-laxfo.jpg',NULL,'1',6),(192,2,'related-laxfo.jpg',NULL,'3',7),(193,4,'featured-ebl-gift.jpg',NULL,'1',4),(194,4,'related-ebl-gift.jpg',NULL,'3',5),(195,5,'featured-PetroMaxLPG.jpg',NULL,'1',8),(196,5,'related-PetroMaxLPG.jpg',NULL,'3',9),(197,6,'featured-mig-29.jpg',NULL,'1',5),(198,6,'related-mig-29.jpg',NULL,'3',6),(199,7,'featured-monir-islam.jpg',NULL,'1',5),(200,7,'related-monir-islam.jpg',NULL,'1',5),(201,9,'featured-rahul-group.jpg',NULL,'1',7),(202,9,'related-rahul-group.jpg',NULL,'3',8),(203,10,'featured-jti.JPG',NULL,'1',10),(204,10,'related-jti.JPG',NULL,'3',11);
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

-- Dump completed on 2025-11-19 15:55:59
