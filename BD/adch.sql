CREATE DATABASE  IF NOT EXISTS `adch` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `adch`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: adch
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB

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
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administradores` (
  `idadministrador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `departamento` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idadministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Tabla de administradores. Seran los unicos que tendran accesos a los registros del personal.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `idempresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `giro` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idempresa`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Tabla empresas para llevar el registro de las mismas.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'Agricola MAAS','Giro'),(2,'Agroquimicos y Semillas la Fuerte','Giro'),(3,'Pepe Filete','Giro'),(4,'El Porvenir','Giro'),(5,'Empacadora Bonnacarne','Giro'),(6,'Financiera la Fuerte','Giro'),(7,'Porcicola Garleon','Giro'),(8,'Grand Pet','Giro'),(9,'Inpro','Giro'),(10,'Lapimi','Giro'),(11,'Nu3 Alimentos Balanceados','Giro'),(12,'Nu3 Materia Prima','Giro');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `idempresa` int(11) NOT NULL,
  `idpuesto` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Tabla empleados para llevar el registro completo de los datos de los mismos.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puestos`
--

DROP TABLE IF EXISTS `puestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puestos` (
  `idpuesto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  `idempresa` int(11) NOT NULL,
  PRIMARY KEY (`idpuesto`),
  KEY `idempresa` (`idempresa`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Tabla donde incluyen los puestos para llevar el registro de cada empresa.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puestos`
--

LOCK TABLES `puestos` WRITE;
/*!40000 ALTER TABLE `puestos` DISABLE KEYS */;
INSERT INTO `puestos` VALUES (1,'AMPuesto1',1),(2,'AMPuesto2',1),(3,'AMPuesto3',1),(4,'ASFPuesto1',2),(5,'ASFPuesto2',2),(6,'ASFPuesto3',2),(7,'PFPuesto1',3),(8,'PFPuesto2',3),(9,'PFPuesto3',3),(10,'EPPuesto1',4),(11,'EPPuesto2',4),(12,'EPPuesto3',4),(13,'EBPuesto1',5),(14,'EBPuesto2',5),(15,'EBPuesto3',5),(16,'FFPuesto1',6),(17,'FFPuesto2',6),(18,'FFPuesto3',6),(19,'PGPuesto1',7),(20,'PGPuesto2',7),(21,'PGPuesto3',7),(22,'GPPuesto1',8),(23,'GPPuesto2',8),(24,'GPPuesto3',8),(25,'IPuesto1',9),(26,'IPuesto2',9),(27,'IPuesto3',9),(28,'LPuesto1',10),(29,'LPuesto2',10),(30,'LPuesto3',10),(31,'NAPuesto1',11),(32,'NAPuesto2',11),(33,'NAPuesto3',11),(34,'NMPuesto1',12),(35,'NMPuesto2',12),(36,'NMPuesto3',12);
/*!40000 ALTER TABLE `puestos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-08 15:20:00
