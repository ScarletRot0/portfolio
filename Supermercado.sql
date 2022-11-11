CREATE DATABASE  IF NOT EXISTS `supermercado` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `supermercado`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: supermercado
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `idProducto` int NOT NULL,
  `txtNombre` varchar(45) NOT NULL,
  `txtPrecio` int NOT NULL,
  `nitProveedor` int NOT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `pk_nit_proveedor_idx` (`nitProveedor`),
  CONSTRAINT `pk_nit_proveedor` FOREIGN KEY (`nitProveedor`) REFERENCES `proveedor` (`nitproveedor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (500008,'BoliDulce',2230,4545978),(887842,'PapitasX',5001,4545978),(2846651,'Cocosabro',5650,4545978),(5557132,'CheezeTrixx',3400,123456);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedor` (
  `nitproveedor` int NOT NULL,
  `txtRazonSocial` varchar(60) NOT NULL,
  `txtTelefono` varchar(45) NOT NULL,
  `txtCorreo` varchar(50) NOT NULL,
  PRIMARY KEY (`nitproveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (123456,'SuperRicas','6423591','superricas@gmail.com'),(4545978,'Girasol','5222112','aaaa@gmail.com');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sucursal` (
  `idsucursal` int NOT NULL AUTO_INCREMENT,
  `txtNombre` varchar(45) NOT NULL,
  `txtDireccion` varchar(50) NOT NULL,
  `txtTelefono` varchar(50) NOT NULL,
  PRIMARY KEY (`idsucursal`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursal`
--

LOCK TABLES `sucursal` WRITE;
/*!40000 ALTER TABLE `sucursal` DISABLE KEYS */;
INSERT INTO `sucursal` VALUES (1,'Cabecera','Calle 40#21-22','6554332'),(2,'Centro','Calle 15#11-120','310869774'),(8,'Centro','Cra 15#30-11','63345569'),(11,'Ruitoque','Calle 100#4-3','54646545');
/*!40000 ALTER TABLE `sucursal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursal_producto`
--

DROP TABLE IF EXISTS `sucursal_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sucursal_producto` (
  `idsucursal_producto` int NOT NULL AUTO_INCREMENT,
  `idProducto` int NOT NULL,
  `idSucursal` int NOT NULL,
  `txtStock` int NOT NULL,
  PRIMARY KEY (`idsucursal_producto`),
  KEY `fk_idsucu_idx` (`idSucursal`),
  KEY `fk_producto_idx` (`idProducto`),
  CONSTRAINT `fk_idsucu` FOREIGN KEY (`idSucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursal_producto`
--

LOCK TABLES `sucursal_producto` WRITE;
/*!40000 ALTER TABLE `sucursal_producto` DISABLE KEYS */;
INSERT INTO `sucursal_producto` VALUES (1,887842,1,100),(4,500008,1,45),(5,2846651,1,60);
/*!40000 ALTER TABLE `sucursal_producto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-10 21:28:44
