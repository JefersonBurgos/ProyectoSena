-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbproyect
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrador` (
  `ID_Admin` int NOT NULL,
  `NOMBRE` varchar(25) NOT NULL,
  `CARGO` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (1010,'Daniela Cardenas','Jefe Parqueadero'),(1234,'Juliana Guerrero','Jefe Cajero'),(1566,'Diego Martinez','Jefe Ventas'),(5678,'Julio Castiblanco','Jefer Ventas'),(6123,'Maicol Santamaria','Jefe Ingresos'),(7887,'Maikel Guerrero','Jefe Despacho'),(9101,'Carlos Santamaria','Jefe Inventario'),(9910,'Anthonio Guerra','Jefe Casino');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controlar_admin`
--

DROP TABLE IF EXISTS `controlar_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `controlar_admin` (
  `ID_Admin` int NOT NULL,
  `ID_Sadmin` int NOT NULL,
  `CALIFICACION` int DEFAULT NULL,
  `RETROALIMENTACION` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Admin`,`ID_Sadmin`),
  KEY `ID_Sadmin` (`ID_Sadmin`),
  CONSTRAINT `controlar_admin_ibfk_1` FOREIGN KEY (`ID_Admin`) REFERENCES `administrador` (`ID_Admin`),
  CONSTRAINT `controlar_admin_ibfk_2` FOREIGN KEY (`ID_Sadmin`) REFERENCES `superadministrador` (`ID_Sadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controlar_admin`
--

LOCK TABLES `controlar_admin` WRITE;
/*!40000 ALTER TABLE `controlar_admin` DISABLE KEYS */;
INSERT INTO `controlar_admin` VALUES (1010,1556,80,'Sin novedad'),(1234,1336,30,'Sin novedad'),(1566,1336,59,'Sin novedad'),(5678,2020,80,'Inasistencia'),(6123,2020,60,'Sin novedad'),(7887,1556,55,'Sin novedad'),(9101,1336,90,'Sin novedad'),(9910,1556,78,'Retirado');
/*!40000 ALTER TABLE `controlar_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controlar_empleados`
--

DROP TABLE IF EXISTS `controlar_empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `controlar_empleados` (
  `ID_Admin` int NOT NULL,
  `ID_Empleado` int NOT NULL,
  `CALIFICACION` int DEFAULT NULL,
  `RETROALIMENTACION` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Admin`,`ID_Empleado`),
  KEY `ID_Empleado` (`ID_Empleado`),
  CONSTRAINT `controlar_empleados_ibfk_1` FOREIGN KEY (`ID_Admin`) REFERENCES `administrador` (`ID_Admin`),
  CONSTRAINT `controlar_empleados_ibfk_2` FOREIGN KEY (`ID_Empleado`) REFERENCES `empleados` (`ID_EMPLEADO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controlar_empleados`
--

LOCK TABLES `controlar_empleados` WRITE;
/*!40000 ALTER TABLE `controlar_empleados` DISABLE KEYS */;
INSERT INTO `controlar_empleados` VALUES (1010,1114412141,50,'Sin novedad'),(7887,1013412145,70,'Falta grave '),(7887,1056412149,60,'Sin novedad'),(7887,1284112147,NULL,'Falta grave '),(9101,1012412147,80,'Sin novedad'),(9101,1013412147,90,NULL),(9101,1015961143,NULL,'Sin novedad'),(9101,1253315142,35,NULL);
/*!40000 ALTER TABLE `controlar_empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `ID_EMPLEADO` int NOT NULL,
  `NOMBRE` varchar(25) NOT NULL,
  `DEPENDENCIA` varchar(20) DEFAULT NULL,
  `CARGO` varchar(20) DEFAULT NULL,
  `FECHA_INGRESO` date DEFAULT NULL,
  `FECHA_TERMINACION` date DEFAULT NULL,
  `TIPO_CONTRATO` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID_EMPLEADO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1012412147,'Daniela Cortez','Servicio','Accesos','2022-01-22','2025-02-25','Fijo'),(1013412145,'Jeferson Burgos','Ventas','Vendedor','2022-05-23','2024-01-22','Fijo'),(1013412147,'Juliana Guerrero','Ventas','Cajero','2023-02-12','2026-01-12','Fijo'),(1015961143,'Tatiana Cortez','Servicio','Mesero','2023-02-23','2024-05-30','P Servicios'),(1056412149,'Oscar Santamaria','Ventas','Vendedor','2022-12-15','2026-05-23','Fijo'),(1114412141,'Jose Martinez','Ventas','Cajero','2022-11-01','2025-05-23','Fijo'),(1253315142,'Camilo Ramirez','Ventas','Vendedor','2022-05-23','2026-05-23','P servicios'),(1284112147,'Dayana Ruiz','Servicio','Vigilante','2023-06-21','2023-11-01','P Servicios');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `superadministrador`
--

DROP TABLE IF EXISTS `superadministrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `superadministrador` (
  `ID_Sadmin` int NOT NULL,
  `NOMBRE` varchar(25) NOT NULL,
  `CARGO` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Sadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `superadministrador`
--

LOCK TABLES `superadministrador` WRITE;
/*!40000 ALTER TABLE `superadministrador` DISABLE KEYS */;
INSERT INTO `superadministrador` VALUES (1243,'Julia Martinez','OMEGA1'),(1244,'Tamara Ruiz','BIPER2'),(1331,'Hernando Perez','BIPER5'),(1336,'Sara Valentina','OMEGA2'),(1556,'Camila Beracruz','ALPHA1'),(2020,'Mariana Correa','BIPER1 '),(7644,'Dana Carmela','BIPER4'),(9987,'Esperanza Cruz','BIPER3');
/*!40000 ALTER TABLE `superadministrador` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-17 14:12:30
