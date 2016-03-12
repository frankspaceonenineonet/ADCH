CREATE DATABASE `adch` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `adch`;

CREATE TABLE `empleados` (
  `idempleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empleado` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `password` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idpuesto` int(11) NOT NULL,
  PRIMARY KEY (`idempleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Tabla empleados para llevar el registro completo de los datos de los mismos';

CREATE TABLE `empresas` (
  `idempresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `giro` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idempresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Tabla empresas para llevar el registro de las mismas';

INSERT INTO empresas (nombre_empresa, giro, direccion)
VALUES ('Agricola MAAS','Giro','Direccion'),
('Agroquimicos y Semillas la Fuerte','Giro','Direccion'),
('Pepe Filete','Giro','Direccion'),
('El porvenir','Giro','Direccion'),
('Empacadora Bonnacarne','Giro','Direccion'),
('Financiera la Fuerte','Giro','Direccion'),
('Porcicola Garleon','Giro','Direccion'),
('Grand Pet','Giro','Direccion'),
('Inpro','Giro','Direccion'),
('Lapimi','Giro','Direccion'),
('Nu3 Alimentos Balanceados','Giro','Direccion'),
('Nu3 Materia Prima','Giro','Direccion');

CREATE TABLE `puestos` (
  `idpuesto` int(11) NOT NULL,
  `nombre_puesto` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  `rol` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  `categoria` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idpuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Tabla puestos para llevar el registro de cada uno de los que se encuentran en las distintas empresas';
