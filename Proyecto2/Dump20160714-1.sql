CREATE DATABASE  IF NOT EXISTS `proyectopr3` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `proyectopr3`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: proyectopr3
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `direccion`
--

DROP TABLE IF EXISTS `direccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direccion` (
  `ID` int(11) NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Pais` varchar(45) DEFAULT NULL,
  `Provincia` varchar(45) DEFAULT NULL,
  `Canton` varchar(45) DEFAULT NULL,
  `Distrito` varchar(45) DEFAULT NULL,
  `DireccionExacta` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `cedula_idx` (`Cedula`),
  CONSTRAINT `direccion-persona` FOREIGN KEY (`Cedula`) REFERENCES `persona` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escolaridad`
--

DROP TABLE IF EXISTS `escolaridad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `escolaridad` (
  `ID` int(11) NOT NULL,
  `InstitucionEduc` varchar(45) DEFAULT NULL,
  `TituloObtenido` varchar(45) NOT NULL,
  `AñoInicio` varchar(45) DEFAULT NULL,
  `AñoCulminacion` varchar(45) DEFAULT NULL,
  `Observaciones` varchar(45) DEFAULT NULL,
  `Cedula` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `escolaridad-persona_idx` (`Cedula`),
  CONSTRAINT `escolaridad-persona` FOREIGN KEY (`Cedula`) REFERENCES `persona` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escolaridad`
--

LOCK TABLES `escolaridad` WRITE;
/*!40000 ALTER TABLE `escolaridad` DISABLE KEYS */;
/*!40000 ALTER TABLE `escolaridad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `Cedula` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido1` varchar(45) DEFAULT NULL,
  `Apellido2` varchar(45) DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `FechaNacimiento` datetime DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'Diego','Mendez','Rodriguez','M','0000-00-00 00:00:00',20),(2,'Karen','Fonseca','Mendez','F','0000-00-00 00:00:00',21),(3,'Daniela','Marin','Flore','F','0000-00-00 00:00:00',22);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-14 11:21:10
