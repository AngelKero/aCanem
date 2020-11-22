-- --------------------------------------------------------
-- Host:                         us-cdbr-east-02.cleardb.com
-- Versión del servidor:         5.5.62-log - MySQL Community Server (GPL)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para heroku_7c9099bc2469dcb
CREATE DATABASE IF NOT EXISTS `heroku_7c9099bc2469dcb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `heroku_7c9099bc2469dcb`;

-- Volcando estructura para tabla heroku_7c9099bc2469dcb.articulo
CREATE TABLE IF NOT EXISTS `articulo` (
  `id_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `texto` text CHARACTER SET latin1 NOT NULL,
  `imagen` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_articulo`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla heroku_7c9099bc2469dcb.mascota
CREATE TABLE IF NOT EXISTS `mascota` (
  `id_mascota` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `info` text CHARACTER SET latin1 NOT NULL,
  `motivos` text CHARACTER SET latin1 NOT NULL,
  `peso` int(5) NOT NULL,
  `edad` int(2) NOT NULL,
  `raza` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(10) CHARACTER SET latin1 NOT NULL,
  `esterelizado` varchar(2) CHARACTER SET latin1 NOT NULL,
  `desparazitado` varchar(2) CHARACTER SET latin1 NOT NULL,
  `ninos` varchar(2) CHARACTER SET latin1 NOT NULL,
  `mascotas` varchar(2) CHARACTER SET latin1 NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `tamano` varchar(10) CHARACTER SET latin1 NOT NULL,
  `energia` varchar(10) CHARACTER SET latin1 NOT NULL,
  `ejercicio` varchar(10) CHARACTER SET latin1 NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_mascota`),
  KEY `FK_mascota_user` (`id_user`),
  CONSTRAINT `FK_mascota_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla heroku_7c9099bc2469dcb.solicitud
CREATE TABLE IF NOT EXISTS `solicitud` (
  `id_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `telefono` bigint(14) NOT NULL,
  `razones` text NOT NULL,
  `casa` varchar(20) NOT NULL,
  `patio` varchar(2) NOT NULL,
  `personas` tinyint(4) NOT NULL,
  `animales` varchar(2) NOT NULL,
  `who` tinytext NOT NULL,
  `rincon` varchar(50) NOT NULL,
  `soledad` tinytext NOT NULL,
  `ninos` varchar(2) NOT NULL,
  `howmuch` tinyint(4) NOT NULL,
  `propiedad` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `solicitante` int(11) NOT NULL,
  `dueño` int(11) NOT NULL,
  `mascota` int(11) NOT NULL,
  PRIMARY KEY (`id_solicitud`),
  KEY `FK__user` (`solicitante`),
  KEY `FK__user_2` (`dueño`),
  KEY `FK__mascota` (`mascota`),
  CONSTRAINT `FK__user` FOREIGN KEY (`solicitante`) REFERENCES `user` (`id_user`),
  CONSTRAINT `FK__user_2` FOREIGN KEY (`dueño`) REFERENCES `user` (`id_user`),
  CONSTRAINT `FK__mascota` FOREIGN KEY (`mascota`) REFERENCES `mascota` (`id_mascota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla heroku_7c9099bc2469dcb.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) CHARACTER SET latin1 NOT NULL,
  `edad` int(2) NOT NULL,
  `email` varchar(300) CHARACTER SET latin1 NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `calle` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `numero` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tipoCuenta` varchar(50) CHARACTER SET latin1 DEFAULT 'Individual',
  `Nivel` varchar(50) CHARACTER SET latin1 DEFAULT 'Croqueta',
  `foto` varchar(350) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COMMENT='Tabla de usuarios registrados.';

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
