-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2016 a las 22:41:08
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdpedidos`
--
CREATE DATABASE IF NOT EXISTS `bdpedidos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdpedidos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE IF NOT EXISTS `accesos` (
`idacceso` int(10) NOT NULL,
  `acceso` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`idacceso`, `acceso`) VALUES(1, 'Empleado');
INSERT INTO `accesos` (`idacceso`, `acceso`) VALUES(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`idcliente` int(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `idacceso` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `cliente`, `clave`, `idacceso`) VALUES(1, 'Steven', 'Perez', 'Circunvalacion', '+591 66747474', 'leon@hotmail.com', 'pepe', 'pepe', 2);
INSERT INTO `clientes` (`idcliente`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `cliente`, `clave`, `idacceso`) VALUES(8, '', '', '', '', '', '', '', 2);
INSERT INTO `clientes` (`idcliente`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `cliente`, `clave`, `idacceso`) VALUES(9, 'steven', 'bauers', 'Miami', '232323', 'steve@gmail.com', 'steven', 'steven', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
`idempleado` int(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `salario` decimal(10,2) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `empleado` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `idacceso` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idempleado`, `nombres`, `apellidos`, `cargo`, `salario`, `direccion`, `telefono`, `email`, `empleado`, `clave`, `idacceso`) VALUES(1, 'Roberto ', 'Paredes Oniel', 'Gerente', '15000.00', 'Av los leones El alto', '2878754554', 'robert@gmail.com', 'roberto', 'roberto', 2);
INSERT INTO `empleados` (`idempleado`, `nombres`, `apellidos`, `cargo`, `salario`, `direccion`, `telefono`, `email`, `empleado`, `clave`, `idacceso`) VALUES(2, 'Jhonny', 'Ramos Salas', 'Contador', '10000.00', 'Av. Periferica', '2654878', 'jhon@gmail.com', 'jhon', 'jhon', 2);
INSERT INTO `empleados` (`idempleado`, `nombres`, `apellidos`, `cargo`, `salario`, `direccion`, `telefono`, `email`, `empleado`, `clave`, `idacceso`) VALUES(3, 'Alex', 'Torner ', 'Operador', '3000.00', 'Av Circunvalacion', '+591 765564654', 'alex@gmail.com', 'alex', 'alex', 2);
INSERT INTO `empleados` (`idempleado`, `nombres`, `apellidos`, `cargo`, `salario`, `direccion`, `telefono`, `email`, `empleado`, `clave`, `idacceso`) VALUES(4, 'Marcus', 'Stops', 'Operador', '3000.00', 'Av cisneros', '+591 68745454', 'marcus@gmail.com', 'marcus', 'marcus', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espesores`
--

CREATE TABLE IF NOT EXISTS `espesores` (
`idespesor` int(10) NOT NULL,
  `grosor` decimal(10,2) NOT NULL,
  `nombregrosor` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `espesores`
--

INSERT INTO `espesores` (`idespesor`, `grosor`, `nombregrosor`) VALUES(1, '0.02', 'Simple');
INSERT INTO `espesores` (`idespesor`, `grosor`, `nombregrosor`) VALUES(2, '0.03', 'Doble');
INSERT INTO `espesores` (`idespesor`, `grosor`, `nombregrosor`) VALUES(3, '0.04', 'Triple4');
INSERT INTO `espesores` (`idespesor`, `grosor`, `nombregrosor`) VALUES(4, '0.05', 'Triple5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones`
--

CREATE TABLE IF NOT EXISTS `funciones` (
`idfuncion` int(10) NOT NULL,
  `funcion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `funciones`
--

INSERT INTO `funciones` (`idfuncion`, `funcion`) VALUES(1, 'Aislamiento');
INSERT INTO `funciones` (`idfuncion`, `funcion`) VALUES(2, 'Seguridad');
INSERT INTO `funciones` (`idfuncion`, `funcion`) VALUES(3, 'Control solar');
INSERT INTO `funciones` (`idfuncion`, `funcion`) VALUES(4, 'Decoracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas`
--

CREATE TABLE IF NOT EXISTS `medidas` (
`idmedida` int(10) NOT NULL,
  `medida` varchar(50) NOT NULL,
  `clase` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medidas`
--

INSERT INTO `medidas` (`idmedida`, `medida`, `clase`) VALUES(1, '250x180 ', 'Normal');
INSERT INTO `medidas` (`idmedida`, `medida`, `clase`) VALUES(2, '360x225', 'Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE IF NOT EXISTS `operacion` (
`idoperacion` int(10) NOT NULL,
  `operacion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`idoperacion`, `operacion`) VALUES(1, 'Revisar');
INSERT INTO `operacion` (`idoperacion`, `operacion`) VALUES(2, 'Procesado');
INSERT INTO `operacion` (`idoperacion`, `operacion`) VALUES(3, 'Enviado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
`idpedido` int(10) NOT NULL,
  `fechahora` date NOT NULL,
  `idoperacion` int(10) NOT NULL,
  `idempleado` int(10) NOT NULL,
  `idcliente` int(10) NOT NULL,
  `idproducto` int(10) NOT NULL,
  `cantidadpedido` int(10) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `observacion` varchar(100) NOT NULL,
  `idproceso` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `fechahora`, `idoperacion`, `idempleado`, `idcliente`, `idproducto`, `cantidadpedido`, `total`, `observacion`, `idproceso`) VALUES(1, '2016-12-07', 1, 1, 1, 1, 30, '2400.00', 'Pedido en progreso', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE IF NOT EXISTS `procesos` (
`idproceso` int(10) NOT NULL,
  `proceso` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`idproceso`, `proceso`) VALUES(1, 'Enviado');
INSERT INTO `procesos` (`idproceso`, `proceso`) VALUES(2, 'Procesando');
INSERT INTO `procesos` (`idproceso`, `proceso`) VALUES(3, 'Recibido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`idproducto` int(10) NOT NULL,
  `fechaingreso` varchar(100) NOT NULL,
  `idproveedor` int(10) NOT NULL,
  `idtipo` int(10) NOT NULL,
  `idfuncion` int(10) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `idespesor` int(10) NOT NULL,
  `idmedida` int(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidaingreso` int(10) NOT NULL,
  `costounitario` decimal(10,2) NOT NULL,
  `preciounitario` decimal(10,2) NOT NULL,
  `totalprecio` decimal(10,2) NOT NULL,
  `totalcosto` decimal(10,2) NOT NULL,
  `diferencia` decimal(10,2) NOT NULL,
  `observacion` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `fechaingreso`, `idproveedor`, `idtipo`, `idfuncion`, `producto`, `idespesor`, `idmedida`, `descripcion`, `cantidaingreso`, `costounitario`, `preciounitario`, `totalprecio`, `totalcosto`, `diferencia`, `observacion`, `stock`) VALUES(1, '2016/12/07', 1, 1, 1, 'Vidrio float', 1, 1, 'Libre de distorcion, de superficie plana', 500, '70.00', '80.00', '40000.00', '35000.00', '5000.00', 'Ingreso por cajas en 100', '500');
INSERT INTO `productos` (`idproducto`, `fechaingreso`, `idproveedor`, `idtipo`, `idfuncion`, `producto`, `idespesor`, `idmedida`, `descripcion`, `cantidaingreso`, `costounitario`, `preciounitario`, `totalprecio`, `totalcosto`, `diferencia`, `observacion`, `stock`) VALUES(2, '10/12/2016', 1, 1, 1, 'Vidrio float', 2, 2, 'Cristal plano transparente', 500, '140.00', '200.00', '100000.00', '70000.00', '30000.00', 'Ingresoa depositos en cajas', '500');
INSERT INTO `productos` (`idproducto`, `fechaingreso`, `idproveedor`, `idtipo`, `idfuncion`, `producto`, `idespesor`, `idmedida`, `descripcion`, `cantidaingreso`, `costounitario`, `preciounitario`, `totalprecio`, `totalcosto`, `diferencia`, `observacion`, `stock`) VALUES(3, '10/12/2016', 1, 2, 3, 'Vidrio Catedral', 3, 2, 'Vidrio de superficie figurada', 200, '230.00', '250.00', '50000.00', '46000.00', '4000.00', 'Ingreso en cajas ', '200');
INSERT INTO `productos` (`idproducto`, `fechaingreso`, `idproveedor`, `idtipo`, `idfuncion`, `producto`, `idespesor`, `idmedida`, `descripcion`, `cantidaingreso`, `costounitario`, `preciounitario`, `totalprecio`, `totalcosto`, `diferencia`, `observacion`, `stock`) VALUES(4, '10/12/2016', 1, 4, 4, 'Espejo importado', 3, 1, 'Espejo importado', 100, '190.00', '200.00', '20000.00', '19000.00', '1000.00', 'Ninguna', '100');
INSERT INTO `productos` (`idproducto`, `fechaingreso`, `idproveedor`, `idtipo`, `idfuncion`, `producto`, `idespesor`, `idmedida`, `descripcion`, `cantidaingreso`, `costounitario`, `preciounitario`, `totalprecio`, `totalcosto`, `diferencia`, `observacion`, `stock`) VALUES(5, '10/12/2016', 1, 1, 1, 'Vidrio sencillo', 1, 1, 'Vidrio para medidas cortas', 300, '60.00', '80.00', '24000.00', '18000.00', '6000.00', 'Manejese con cuidado', '300');
INSERT INTO `productos` (`idproducto`, `fechaingreso`, `idproveedor`, `idtipo`, `idfuncion`, `producto`, `idespesor`, `idmedida`, `descripcion`, `cantidaingreso`, `costounitario`, `preciounitario`, `totalprecio`, `totalcosto`, `diferencia`, `observacion`, `stock`) VALUES(6, '10/12/2016', 1, 2, 3, 'Vidrio Bronce', 3, 2, 'Util para proteccion solar', 100, '90.00', '100.00', '9000.00', '10000.00', '1000.00', 'Es un vidrio pesado', '100');
INSERT INTO `productos` (`idproducto`, `fechaingreso`, `idproveedor`, `idtipo`, `idfuncion`, `producto`, `idespesor`, `idmedida`, `descripcion`, `cantidaingreso`, `costounitario`, `preciounitario`, `totalprecio`, `totalcosto`, `diferencia`, `observacion`, `stock`) VALUES(7, '10/12/2016', 1, 1, 1, 'Vidrio triple', 4, 2, 'Vidrio para muebles', 100, '150.00', '170.00', '17000.00', '15000.00', '2000.00', 'Manejese con cuidado', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
`idproveedor` int(10) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `representante` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idproveedor`, `empresa`, `representante`, `direccion`, `telefono`, `email`) VALUES(1, 'Vasa', 'Guillermo Suarez', 'Argentina', '1417587572521', 'guile@gmail.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
`idtipo` int(10) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`idtipo`, `tipo`) VALUES(1, 'Incoloro');
INSERT INTO `tipos` (`idtipo`, `tipo`) VALUES(2, 'Bronce');
INSERT INTO `tipos` (`idtipo`, `tipo`) VALUES(3, 'Catedral');
INSERT INTO `tipos` (`idtipo`, `tipo`) VALUES(4, 'Espejo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
 ADD PRIMARY KEY (`idacceso`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`idcliente`), ADD KEY `idacceso1_fk` (`idacceso`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
 ADD PRIMARY KEY (`idempleado`), ADD KEY `idacceso_fk` (`idacceso`);

--
-- Indices de la tabla `espesores`
--
ALTER TABLE `espesores`
 ADD PRIMARY KEY (`idespesor`);

--
-- Indices de la tabla `funciones`
--
ALTER TABLE `funciones`
 ADD PRIMARY KEY (`idfuncion`);

--
-- Indices de la tabla `medidas`
--
ALTER TABLE `medidas`
 ADD PRIMARY KEY (`idmedida`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
 ADD PRIMARY KEY (`idoperacion`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
 ADD PRIMARY KEY (`idpedido`), ADD KEY `idoperacion_fk` (`idoperacion`), ADD KEY `idempleado_fk` (`idempleado`), ADD KEY `idcliente_fk` (`idcliente`), ADD KEY `idproducto_fk` (`idproducto`), ADD KEY `idproceso_fk` (`idproceso`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
 ADD PRIMARY KEY (`idproceso`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`idproducto`), ADD KEY `idproveedor_fk` (`idproveedor`), ADD KEY `idtipo_fk` (`idtipo`), ADD KEY `idfuncion_fk` (`idfuncion`), ADD KEY `idespesor_fk` (`idespesor`), ADD KEY `idmedida_fk` (`idmedida`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
 ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
 ADD PRIMARY KEY (`idtipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
MODIFY `idacceso` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `idcliente` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
MODIFY `idempleado` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `espesores`
--
ALTER TABLE `espesores`
MODIFY `idespesor` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `funciones`
--
ALTER TABLE `funciones`
MODIFY `idfuncion` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `medidas`
--
ALTER TABLE `medidas`
MODIFY `idmedida` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
MODIFY `idoperacion` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
MODIFY `idpedido` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
MODIFY `idproceso` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `idproducto` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
MODIFY `idproveedor` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
MODIFY `idtipo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
ADD CONSTRAINT `idacceso1_fk` FOREIGN KEY (`idacceso`) REFERENCES `accesos` (`idacceso`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
ADD CONSTRAINT `idacceso_fk` FOREIGN KEY (`idacceso`) REFERENCES `accesos` (`idacceso`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
ADD CONSTRAINT `idcliente_fk` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`),
ADD CONSTRAINT `idempleado_fk` FOREIGN KEY (`idempleado`) REFERENCES `empleados` (`idempleado`),
ADD CONSTRAINT `idoperacion_fk` FOREIGN KEY (`idoperacion`) REFERENCES `operacion` (`idoperacion`),
ADD CONSTRAINT `idproceso_fk` FOREIGN KEY (`idproceso`) REFERENCES `procesos` (`idproceso`),
ADD CONSTRAINT `idproducto_fk` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
ADD CONSTRAINT `idespesor_fk` FOREIGN KEY (`idespesor`) REFERENCES `espesores` (`idespesor`),
ADD CONSTRAINT `idfuncion_fk` FOREIGN KEY (`idfuncion`) REFERENCES `funciones` (`idfuncion`),
ADD CONSTRAINT `idmedida_fk` FOREIGN KEY (`idmedida`) REFERENCES `medidas` (`idmedida`),
ADD CONSTRAINT `idproveedor_fk` FOREIGN KEY (`idproveedor`) REFERENCES `proveedores` (`idproveedor`),
ADD CONSTRAINT `idtipo_fk` FOREIGN KEY (`idtipo`) REFERENCES `tipos` (`idtipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
