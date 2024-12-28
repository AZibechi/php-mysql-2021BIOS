# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     webmarketcam
# Server version:               5.5.24-log
# Server OS:                    Win64
# Target compatibility:         Same as source (5.5.24)
# Target max_allowed_packet:    1048576
# HeidiSQL version:             4.0
# Date/time:                    28/2/2022 22:35:30
# --------------------------------------------------------

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'webmarketcam'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `webmarketcam` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `webmarketcam`;


#
# Table structure for table 'categoria'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `categoria` (
  `idCat` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nomCat` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idCat`),
  UNIQUE KEY `idCat` (`idCat`),
  KEY `idCat_2` (`idCat`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



#
# Dumping data for table 'categoria'
#

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS;*/
REPLACE INTO `categoria` (`idCat`, `nomCat`) VALUES
	(1,'Cámaras'),
	(2,'Lentes'),
	(3,'Trípodes'),
	(4,'Accesorios'),
	(5,'Luces'),
	(6,'Baterías');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'productos'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `productos` (
  `idProd` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `marProd` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descProd` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `origProd` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precProd` int(10) unsigned NOT NULL,
  `catProd` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estProd` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`idProd`),
  UNIQUE KEY `idProd` (`idProd`),
  KEY `idProd_2` (`idProd`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



#
# Dumping data for table 'productos'
#

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS;*/
REPLACE INTO `productos` (`idProd`, `marProd`, `descProd`, `origProd`, `precProd`, `catProd`, `estProd`) VALUES
	(2,' Canon','Lente ProMax22','USA','2000','2',0),
	(3,'Nikon   ','Camara3000   ','Alemania','9000','1',1),
	(4,'Nikon','Camara D7500','USA','6000','1',0),
	(5,'Yongnuo','Paraguas Lumínico D30','China','1200','5',0),
	(6,'Yongnuo','Trípode Columna para Flash','China','500','4',1),
	(7,'Yongnuo','Funda para cámara','China','299','3',1),
	(8,'Nikon','Kit Pro para Estudio','Alemania','6000','3',1),
	(9,'Sony','Lente AuMax 200','USA','4200','2',1),
	(10,'Sony','Cámara Reflex X420','USA','9000','1',1),
	(11,'Lexar','Guantes para Cámara','Alemania','125','4',1),
	(12,'IRIX','Micrófono para cámara','Alemania','680','4',1),
	(13,'Canon','Correa para cámara','Alemania','225','4',1),
	(14,'Starr','Lámpara portátil D24','China','750','5',1),
	(15,'Yongnuo','Iluminador LED ','China','3000','5',1);
/*!40000 ALTER TABLE `productos` ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'usuarios'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `usuarios` (
  `Usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Contra` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Usuario`),
  UNIQUE KEY `Usuario` (`Usuario`),
  KEY `Usuario_2` (`Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



#
# Dumping data for table 'usuarios'
#

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS;*/
REPLACE INTO `usuarios` (`Usuario`, `Nombre`, `Contra`) VALUES
	('AZibechi','Agustín Zibechi','202cb962ac59075b964b07152d234b70'),
	('Juanjo123','Juan José','81dc9bdb52d04dc20036dbd8313ed055');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS;*/
UNLOCK TABLES;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
