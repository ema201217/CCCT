-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: bd_conferencias
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `firstName` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `dni` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `username` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `address` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `password` varchar(80) COLLATE latin1_spanish_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_IDX` (`email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (66,'admin','admin','admin@admin.com','1156412335','36234637','administrador','letonia 279','$2y$10$rmtTxkcaLUgYjEdJ4KJU7uXXRKJE8oIPdyTQduQ9t05SmaiOoGd82',1),(67,'Test1','Test1','test@test.com','1156412335','36234637','test2022','garcia lorca 1234','$2y$10$o4gJzJRapvbThsVNM03GVOkzE1H.Iwshusp/Wy/MoVhwZzQR.LlaG',2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bd_conferencias'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-04  5:18:23
