-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-09-2013 a las 03:21:23
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `enlace_servicios_financieros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE IF NOT EXISTS `agencia` (
  `id_agencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `tel_1` varchar(15) NOT NULL,
  `tel_2` varchar(15) DEFAULT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_agencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `agencia`
--

INSERT INTO `agencia` (`id_agencia`, `nombre`, `descripcion`, `tel_1`, `tel_2`, `estado`) VALUES
(1, 'Central', 'Agncia central', '4545454545', '4545454545', 'A'),
(2, 'otra', 'Agencia otra', '87545454545', '45454545454', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ajuste`
--

CREATE TABLE IF NOT EXISTS `ajuste` (
  `id_ajuste` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `tipo_ajuste` varchar(30) NOT NULL COMMENT 'especificar en la programacion los tipos de ajuste',
  `descripcion` varchar(1000) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_ajuste`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ajuste`
--

INSERT INTO `ajuste` (`id_ajuste`, `fecha`, `tipo_ajuste`, `descripcion`, `id_usuario`) VALUES
(1, '2013-06-11', 'Perdida', 'Perdida por ratas', 2),
(2, '2013-09-13', 'Perdida', 'Producto vencido', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_ingreso` date NOT NULL,
  `hora_ingreso` time NOT NULL,
  `fecha_salida` date NOT NULL,
  `hora_salida` time NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_bitacora`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `fecha_ingreso`, `hora_ingreso`, `fecha_salida`, `hora_salida`, `id_usuario`) VALUES
(1, '2013-09-11', '01:02:03', '2013-09-15', '01:02:03', 2),
(2, '2013-09-18', '04:02:03', '2013-09-20', '01:05:03', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre`, `descripcion`) VALUES
(1, 'Gerente', 'Gerente'),
(2, 'Bodeguero', 'Bodegas'),
(3, 'Gerente', 'Gerente'),
(4, 'Bodeguero', 'Bodegas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_producto`
--

CREATE TABLE IF NOT EXISTS `categoria_producto` (
  `id_categoria_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_categoria_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categoria_producto`
--

INSERT INTO `categoria_producto` (`id_categoria_producto`, `nombre`, `descripcion`) VALUES
(1, 'Cat_prueba', 'prueba'),
(2, 'Lapicero', 'Prueba'),
(3, 'Papel', 'Prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `num_factura` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_compra` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cotizacion` int(11) DEFAULT NULL,
  `id_tipo_pago` int(11) NOT NULL,
  `id_tipo_factura` int(11) NOT NULL,
  `id_impuesto` int(11) NOT NULL,
  `id_quedan` int(11) DEFAULT NULL,
  `id_proveedor` int(11) NOT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_cotizacion` (`id_cotizacion`),
  KEY `id_tipo_pago` (`id_tipo_pago`),
  KEY `id_tipo_factura` (`id_tipo_factura`),
  KEY `id_impuesto` (`id_impuesto`),
  KEY `id_quedan` (`id_quedan`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_compra`, `num_factura`, `fecha`, `tipo_compra`, `estado`, `id_usuario`, `id_cotizacion`, `id_tipo_pago`, `id_tipo_factura`, `id_impuesto`, `id_quedan`, `id_proveedor`) VALUES
(1, '123213', '2013-09-18', 'Contado', 'Completado', 2, 1, 1, 2, 2, 2, 2),
(2, '234234', '2013-09-16', 'Contado', 'Completado', 19, 2, 2, 3, 2, 2, 3),
(3, '23432', '2013-09-20', 'Contado', 'Completado', 20, 2, 2, 3, 2, 2, 2),
(4, '84454', '2013-09-21', 'Contado', 'Completado', 19, 1, 1, 2, 2, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion` (
  `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `tiempo_vigencia` int(11) NOT NULL COMMENT 'es en dias',
  `estado` varchar(30) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  PRIMARY KEY (`id_cotizacion`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`id_cotizacion`, `fecha`, `tiempo_vigencia`, `estado`, `id_usuario`, `id_proveedor`) VALUES
(1, '2013-09-24', 30, 'Activo', 2, 1),
(2, '2013-09-11', 10, 'Activo', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ajuste`
--

CREATE TABLE IF NOT EXISTS `detalle_ajuste` (
  `id_detalle_ajuste` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` double NOT NULL COMMENT 'puede ser un valor positivo o negativo',
  `id_lote` int(11) NOT NULL,
  `id_ajuste` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_ajuste`),
  KEY `id_lote` (`id_lote`),
  KEY `id_ajuste` (`id_ajuste`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `detalle_ajuste`
--

INSERT INTO `detalle_ajuste` (`id_detalle_ajuste`, `cantidad`, `id_lote`, `id_ajuste`) VALUES
(1, 30, 1, 2),
(2, 40, 2, 2),
(3, 35, 3, 1),
(4, 45, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE IF NOT EXISTS `detalle_compra` (
  `id_detalle_compra` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` double NOT NULL,
  `costo_unitario` double NOT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_compra`),
  KEY `id_compra` (`id_compra`),
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `detalle_compra`
--

INSERT INTO `detalle_compra` (`id_detalle_compra`, `cantidad`, `costo_unitario`, `fecha_vencimiento`, `id_compra`, `id_producto`) VALUES
(1, 200, 1.23, NULL, 1, 2),
(2, 200, 0.34, NULL, 2, 2),
(3, 100, 1.23, '2013-10-31', 3, 3),
(4, 250, 1.87, NULL, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cotizacion`
--

CREATE TABLE IF NOT EXISTS `detalle_cotizacion` (
  `id_detalle_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` double NOT NULL,
  `costo_unitario` double NOT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `id_cotizacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_cotizacion`),
  KEY `id_cotizacion` (`id_cotizacion`),
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `detalle_cotizacion`
--

INSERT INTO `detalle_cotizacion` (`id_detalle_cotizacion`, `cantidad`, `costo_unitario`, `fecha_vencimiento`, `id_cotizacion`, `id_producto`) VALUES
(1, 200, 4.5, '2013-09-30', 1, 1),
(2, 400, 3.34, '2013-09-25', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_devolucion`
--

CREATE TABLE IF NOT EXISTS `detalle_devolucion` (
  `id_detalle_devolucion` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` double NOT NULL,
  `motivo` varchar(1000) NOT NULL,
  `id_devolucion` int(11) NOT NULL,
  `id_lote` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_devolucion`),
  KEY `id_devolucion` (`id_devolucion`),
  KEY `id_lote` (`id_lote`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `detalle_devolucion`
--

INSERT INTO `detalle_devolucion` (`id_detalle_devolucion`, `cantidad`, `motivo`, `id_devolucion`, `id_lote`) VALUES
(1, 20, 'Producto dañado', 1, 1),
(2, 30, 'Producto vencido', 2, 2),
(3, 45, 'Producto dañado', 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_envio`
--

CREATE TABLE IF NOT EXISTS `detalle_envio` (
  `id_detalle_envio` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad_enviado` double NOT NULL,
  `cantidad_recibido` double DEFAULT NULL COMMENT 'en un principio este campo es nulo porque no sabemos si se perderan productos en el camino',
  `id_envio` int(11) NOT NULL,
  `id_inventario` int(11) NOT NULL,
  `id_lote` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_envio`),
  KEY `id_envio` (`id_envio`),
  KEY `id_inventario` (`id_inventario`),
  KEY `id_lote` (`id_lote`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `detalle_envio`
--

INSERT INTO `detalle_envio` (`id_detalle_envio`, `cantidad_enviado`, `cantidad_recibido`, `id_envio`, `id_inventario`, `id_lote`) VALUES
(1, 50, 50, 1, 2, 2),
(2, 100, 100, 2, 4, 3),
(3, 80, 70, 3, 4, 3),
(4, 100, 100, 4, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_requisicion`
--

CREATE TABLE IF NOT EXISTS `detalle_requisicion` (
  `id_detalle_requisicion` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` double NOT NULL,
  `id_inventario` int(11) NOT NULL,
  `id_requisicion` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_requisicion`),
  KEY `id_inventario` (`id_inventario`),
  KEY `id_requisicion` (`id_requisicion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `detalle_requisicion`
--

INSERT INTO `detalle_requisicion` (`id_detalle_requisicion`, `cantidad`, `id_inventario`, `id_requisicion`) VALUES
(1, 20, 1, 47),
(2, 50, 2, 48),
(3, 40, 4, 49),
(4, 20, 5, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE IF NOT EXISTS `devolucion` (
  `id_devolucion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_devolucion`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`id_devolucion`, `fecha`, `titulo`, `id_usuario`) VALUES
(1, '2013-08-22', 'Devolución 1', 2),
(2, '2013-08-21', 'Devolución 2', 19),
(3, '2013-08-16', 'Devolución 3', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_documento`),
  KEY `id_empleado` (`id_empleado`),
  KEY `id_empleado_2` (`id_empleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_documento`, `nombre`, `numero`, `id_empleado`) VALUES
(1, 'Eduardo Grijalva', '3452345-4', 1),
(2, 'Manuel Escalante', '8464556-0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` varchar(1000) DEFAULT NULL,
  `tel_casa` varchar(15) DEFAULT NULL,
  `tel_movil` varchar(15) NOT NULL,
  `email` int(11) DEFAULT NULL,
  `genero` char(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `estado` char(1) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_agencia` int(11) NOT NULL,
  PRIMARY KEY (`id_empleado`),
  KEY `id_cargo` (`id_cargo`),
  KEY `id_agencia` (`id_agencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombres`, `apellidos`, `direccion`, `tel_casa`, `tel_movil`, `email`, `genero`, `fecha_nacimiento`, `fecha_ingreso`, `estado`, `id_cargo`, `id_agencia`) VALUES
(1, 'Eduardo', 'Grijalva', 'mi casa', '44848484545', '45454545454', 1, 'M', '1991-12-18', '2011-02-08', 'A', 1, 1),
(2, 'Manuel', 'Escalante', 'asdfasdf', '2134124', '12341234', 1, 'm', '2013-08-05', '2013-09-26', 'a', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE IF NOT EXISTS `encargado` (
  `id_encargado` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `tel_contacto` varchar(30) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  PRIMARY KEY (`id_encargado`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `encargado`
--

INSERT INTO `encargado` (`id_encargado`, `nombres`, `apellidos`, `tel_contacto`, `id_proveedor`) VALUES
(1, 'Jose Antonio', 'Hernández', '7734-2345', 1),
(2, 'Oscar Valerio', 'Lorenzana', '7756-1244', 2),
(3, 'Roberto Abelardo', 'Martínez', '7567-3435', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE IF NOT EXISTS `envio` (
  `id_envio` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_envio` date NOT NULL,
  `usuario_envia` int(11) NOT NULL,
  `agencia_origen` int(11) NOT NULL,
  `fecha_recibido` date DEFAULT NULL COMMENT 'especificar la fecha de llegada desde programacion',
  `usuario_recibe` int(11) DEFAULT NULL COMMENT 'se especificara el dia en que llegue a la agencia desde gui',
  `agencia_destino` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL COMMENT 'desde la programacion se habilitaran las opciones',
  PRIMARY KEY (`id_envio`),
  KEY `usuario_envia` (`usuario_envia`),
  KEY `agencia_origen` (`agencia_origen`),
  KEY `usuario_recibe` (`usuario_recibe`),
  KEY `agencia_destino` (`agencia_destino`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`id_envio`, `fecha_envio`, `usuario_envia`, `agencia_origen`, `fecha_recibido`, `usuario_recibe`, `agencia_destino`, `estado`) VALUES
(1, '2013-09-18', 2, 2, '2013-09-19', 2, 2, 'Activo'),
(2, '2013-09-19', 2, 2, '2013-09-18', 2, 1, ''),
(3, '2013-09-11', 2, 1, '2013-09-12', 19, 2, 'Completado'),
(4, '2013-09-11', 19, 2, '2013-09-24', 20, 1, 'Completado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estante`
--

CREATE TABLE IF NOT EXISTS `estante` (
  `id_estante` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `ubicacion` varchar(1000) DEFAULT NULL,
  `id_agencia` int(11) NOT NULL,
  PRIMARY KEY (`id_estante`),
  KEY `id_agencia` (`id_agencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `estante`
--

INSERT INTO `estante` (`id_estante`, `nombre`, `ubicacion`, `id_agencia`) VALUES
(1, 'Estante 1', 'Zona 1', 1),
(2, 'Estante 2', 'Zona 2', 1),
(3, 'Estante 1', 'Zona 1', 2),
(4, 'Estante 2', 'Zona 2', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `id_formulario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `padre_fk` int(11) NOT NULL,
  PRIMARY KEY (`id_formulario`),
  KEY `padre_fk` (`padre_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id_formulario`, `nombre`, `direccion`, `descripcion`, `padre_fk`) VALUES
(1, 'Padre', 'papa', 'Formulario creado para ser padre', 1),
(15, 'Usuario', 'admin/usuario', 'Lista de usuarios', 1),
(16, 'Crear usuario', 'admin/usuario/create', 'Crear usuario', 15),
(17, 'Rol', 'admin/rol', 'Ver lista de roles', 15),
(18, 'Crear rol', 'admin/rol/create', 'Crear rol', 17),
(19, 'Administrar roles', 'admin/rol/admin', 'Administracion de roles', 17),
(20, 'Administrar usuarios', 'admin/usuario/admin', 'Administracion usuario', 15),
(21, 'Formularios', 'admin/formulario/', 'Lista de formularios', 1),
(22, 'Crear formulario', 'admin/formulario/create', 'Crear formulario', 21),
(23, 'Administrar formularios', 'admin/formulario/admin', 'Administración de formulario', 21),
(24, 'Asignar formularios', 'admin/rolFormulario/create', 'Asignar formularios a los roles', 21),
(25, 'Administrar rol-formulario', 'admin/rolFormulario/admin', 'Administracion de rol formulario', 24),
(26, 'Requisiciones', 'pedidos/requisicion', 'Requisiciones', 1),
(27, 'Crear requisiciones', 'pedidos/requisicion/create', 'Crear requisicion', 26),
(28, 'Registrar recepción de producto', 'pedidos/requisicion/envios', 'Registrar recepción de producto', 26),
(29, 'Productos', 'bodega/producto', 'Productos', 1),
(30, 'Crear producto', 'bodega/producto/create', 'Crear producto', 29),
(31, 'Administrar producto', 'bodega/producto/admin', 'Administracion de productos', 29),
(32, 'Categoria', 'bodega/categoriaproducto', 'Categoria producto', 29),
(33, 'Crear categoria', 'bodega/categoriaproducto/create', 'Crear categoria producto', 32),
(34, 'Administrar categoria', 'bodega/categoriaproducto/admin', 'Administracion de categorias productos', 32),
(35, 'Devoluciones', 'bodega/devolucion', 'Devoluciones hechas', 26),
(36, 'Registrar devoluciones', 'bodega/devolucion/create', 'Registrar devoluciones de productos', 35),
(37, 'Administrar devoluciones', 'bodega/devolucion/admin', 'Administracion de devoluciones', 35),
(38, 'Proveedores', 'bodega/proveedor', 'Ver proveedores', 29),
(39, 'Crear proveedor', 'bodega/proveedor/create', 'Crear proveedores', 38),
(40, 'Administrar proveedores', 'bodega/proveedor/admin', 'Administracion de proveedores', 38),
(41, 'Cotización', 'bodega/cotizacion/create', 'Crear cotizacion', 29),
(42, 'Compra', 'bodega/compra/create', 'Registrar compra', 29),
(43, 'Inventario', 'bodega/inventario1', 'Lista de inventario', 1),
(44, 'Reporte de inventario', 'bodega/reporte', 'Reporte de inventario', 43),
(45, 'Crear ajuste', 'bodega/ajuste/create', 'Crear ajuste', 43);

--
-- Disparadores `formulario`
--
DROP TRIGGER IF EXISTS `formu`;
DELIMITER //
CREATE TRIGGER `formu` BEFORE INSERT ON `formulario`
 FOR EACH ROW begin
if NEW.padre_fk = 0 then
set NEW.padre_fk = NEW.id_formulario;
end if;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuesto`
--

CREATE TABLE IF NOT EXISTS `impuesto` (
  `id_impuesto` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_impuesto` varchar(100) NOT NULL,
  `tasa` double NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_impuesto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `impuesto`
--

INSERT INTO `impuesto` (`id_impuesto`, `tipo_impuesto`, `tasa`, `fecha`) VALUES
(1, 'IVA', 13, '2013-09-10'),
(2, 'Renta', 20, '2013-09-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `id_inventario` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_producto` varchar(30) NOT NULL,
  `stock_max` double NOT NULL,
  `stock` double NOT NULL,
  `stock_min` double NOT NULL,
  `estado` varchar(30) NOT NULL COMMENT 'definir los posibles estado desde la programacion',
  `id_ubicacion` int(11) NOT NULL,
  `id_unidad` int(11) NOT NULL,
  `id_agencia` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  PRIMARY KEY (`id_inventario`),
  KEY `id_ubicacion` (`id_ubicacion`),
  KEY `id_unidad` (`id_unidad`),
  KEY `id_agencia` (`id_agencia`),
  KEY `id_producto` (`id_producto`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inventario`, `codigo_producto`, `stock_max`, `stock`, `stock_min`, `estado`, `id_ubicacion`, `id_unidad`, `id_agencia`, `id_producto`, `id_proveedor`) VALUES
(1, 'SD2132', 50, 37, 10, '1', 1, 1, 1, 1, 1),
(2, 'GT5755', 200, 123, 30, '2', 2, 2, 1, 2, 2),
(4, 'HN5656', 120, 54, 40, '1', 1, 2, 2, 3, 2),
(5, 'UY7676', 70, 45, 25, '1', 4, 4, 2, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE IF NOT EXISTS `lote` (
  `id_lote` int(11) NOT NULL AUTO_INCREMENT,
  `numero_lote` varchar(30) NOT NULL,
  `fecha_ingreso` date NOT NULL COMMENT 'fecha que ingreso el lote a bodega',
  `fecha_caducidad` date DEFAULT NULL,
  `cantidad_ingreso` double NOT NULL,
  `estado` varchar(30) NOT NULL COMMENT 'especificar desde el codigo posbles opciones',
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  PRIMARY KEY (`id_lote`),
  KEY `id_compra` (`id_compra`),
  KEY `id_producto` (`id_producto`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`id_lote`, `numero_lote`, `fecha_ingreso`, `fecha_caducidad`, `cantidad_ingreso`, `estado`, `id_compra`, `id_producto`, `id_proveedor`) VALUES
(1, '01', '2013-09-20', '2016-03-20', 20, 'Correcto', 1, 1, 1),
(2, '02', '2013-09-04', NULL, 150, 'Correcto', 2, 2, 3),
(3, '03', '2013-09-17', NULL, 100, 'Correcto', 2, 2, 2),
(4, '04', '2013-09-12', NULL, 150, 'Correcto', 4, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote_detalle`
--

CREATE TABLE IF NOT EXISTS `lote_detalle` (
  `id_lote_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` double NOT NULL,
  `fecha_recibido` date NOT NULL COMMENT 'fecha que se recibe el envío del lote en la agencia',
  `id_lote` int(11) NOT NULL,
  `id_inventario` int(11) NOT NULL,
  PRIMARY KEY (`id_lote_detalle`),
  KEY `id_lote` (`id_lote`),
  KEY `id_inventario` (`id_inventario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `lote_detalle`
--

INSERT INTO `lote_detalle` (`id_lote_detalle`, `cantidad`, `fecha_recibido`, `id_lote`, `id_inventario`) VALUES
(1, 20, '2013-09-20', 1, 1),
(2, 50, '2013-09-19', 2, 4),
(3, 40, '2013-09-25', 3, 5),
(4, 20, '2013-09-27', 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`, `descripcion`) VALUES
(1, 'facela', 'muy buena'),
(2, 'Zebra', 'Marca de buena calidad'),
(3, 'Bic', 'Marca de calidad regular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `id_categoria_producto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_marca` (`id_marca`),
  KEY `id_categoria_producto` (`id_categoria_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `url`, `id_marca`, `id_categoria_producto`) VALUES
(1, 'Libro', 'Libro', 'www', 1, 1),
(2, 'Lapicero', 'qasdsdsa', 'www333', 1, 3),
(3, 'Toner', 'asdasdas', 'www', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(1000) DEFAULT NULL,
  `tel_contacto` varchar(30) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `direccion`, `tel_contacto`) VALUES
(1, 'Proveedor Uno', 'San Salvador', '2223-1234'),
(2, 'Proveedor Dos', 'La Libertad', '2323-1234'),
(3, 'Proveedor Tres', 'Santa Ana', '3345-4532');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quedan`
--

CREATE TABLE IF NOT EXISTS `quedan` (
  `id_quedan` int(11) NOT NULL AUTO_INCREMENT,
  `numero_quedan` varchar(30) NOT NULL,
  `fecha_pago` date NOT NULL,
  `nombre_cheque` varchar(100) NOT NULL,
  PRIMARY KEY (`id_quedan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `quedan`
--

INSERT INTO `quedan` (`id_quedan`, `numero_quedan`, `fecha_pago`, `nombre_cheque`) VALUES
(1, '34534435', '2013-09-17', 'Nombre cheque uno'),
(2, '453454', '2013-09-19', 'Nombre cheque dos'),
(3, '24234322', '2013-09-27', 'Nombre cheque tres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisicion`
--

CREATE TABLE IF NOT EXISTS `requisicion` (
  `id_requisicion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `estado` varchar(30) NOT NULL COMMENT 'especificar tipos de estado desde programacion',
  `descripcion` varchar(1000) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_agencia` int(11) NOT NULL,
  PRIMARY KEY (`id_requisicion`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_agencia` (`id_agencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Volcado de datos para la tabla `requisicion`
--

INSERT INTO `requisicion` (`id_requisicion`, `fecha`, `estado`, `descripcion`, `id_usuario`, `id_agencia`) VALUES
(47, '2013-08-08', 'A', 'dskflsdkjfs', 2, 1),
(48, '2013-08-08', 'A', 'dskflsdkjfs', 2, 1),
(49, '2013-08-08', 'A', 'dskflsdkjfs', 2, 1),
(50, '2013-08-09', 'A', 'asfasjklfjk', 2, 1),
(51, '2013-08-28', 'A', 'dsfdsdf', 2, 1),
(52, '2013-08-28', 'A', 'dsfdsdf', 2, 1),
(53, '2013-08-30', 'A', 'asas', 2, 1),
(54, '2013-08-31', 'A', 'asdasd', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`, `descripcion`, `hora_inicio`, `hora_fin`) VALUES
(1, 'admin', 'administrador', '06:00:00', '18:00:00'),
(2, 'prueba', 'probando', '15:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_formulario`
--

CREATE TABLE IF NOT EXISTS `rol_formulario` (
  `id_rol_formulario` int(11) NOT NULL AUTO_INCREMENT,
  `id_formulario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_rol_formulario`),
  KEY `id_formulario` (`id_formulario`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `rol_formulario`
--

INSERT INTO `rol_formulario` (`id_rol_formulario`, `id_formulario`, `id_rol`) VALUES
(35, 15, 1),
(36, 16, 1),
(37, 17, 1),
(38, 18, 1),
(39, 19, 1),
(40, 20, 1),
(41, 21, 1),
(42, 22, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_factura`
--

CREATE TABLE IF NOT EXISTS `tipo_factura` (
  `id_tipo_factura` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_factura`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_factura`
--

INSERT INTO `tipo_factura` (`id_tipo_factura`, `nombre`, `descripcion`) VALUES
(1, 'Tipo Factura 1', 'Descripción'),
(2, 'Tipo Factura 2', 'Descripción'),
(3, 'Tipo Factura 3', 'Descripción'),
(4, 'Tipo Factura 4', 'Descripción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE IF NOT EXISTS `tipo_pago` (
  `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_pago`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_pago`
--

INSERT INTO `tipo_pago` (`id_tipo_pago`, `nombre`, `descripcion`) VALUES
(1, 'Contado', 'Pago al contado'),
(2, 'Credito', 'Pago al credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(100) NOT NULL,
  `sector` varchar(1000) DEFAULT NULL,
  `id_estante` int(11) NOT NULL,
  PRIMARY KEY (`id_ubicacion`),
  KEY `id_estante` (`id_estante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubicacion`, `nivel`, `sector`, `id_estante`) VALUES
(1, 'Primer Nivel', 'Sector 1', 1),
(2, 'Segundo Nivel', 'Sector 2', 2),
(3, 'Primer Nivel', 'Sector 2', 3),
(4, 'Segundo Nivel', 'Sector 1', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_de_medida`
--

CREATE TABLE IF NOT EXISTS `unidad_de_medida` (
  `id_unidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_unidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `unidad_de_medida`
--

INSERT INTO `unidad_de_medida` (`id_unidad`, `nombre`, `descripcion`) VALUES
(1, 'Metro', 'Descripción'),
(2, 'Kilogramo', 'Descripción'),
(3, 'Galón', 'Descripción'),
(4, 'Pulgada', 'Descripción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `estado` char(1) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_empleado` (`id_empleado`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `password`, `estado`, `id_empleado`, `id_rol`) VALUES
(2, 'edu7art', '12345', 'A', 1, 1),
(19, 'Sujeto', '$2a$13$2SigO7VAvydwBeexzHE4SeAynXiXsdWDq88Jd.EIezA', 'A', 2, 2),
(20, 'Sujeto3', '$2a$13$GNBjzYKuMYkxSFJcTZ5jLeSYuDi4WkMUe/xjt.b5NhQ', 'A', 2, 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ajuste`
--
ALTER TABLE `ajuste`
  ADD CONSTRAINT `ajuste_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_cotizacion`) REFERENCES `cotizacion` (`id_cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tipo_pago` (`id_tipo_pago`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_4` FOREIGN KEY (`id_tipo_factura`) REFERENCES `tipo_factura` (`id_tipo_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_5` FOREIGN KEY (`id_impuesto`) REFERENCES `impuesto` (`id_impuesto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_6` FOREIGN KEY (`id_quedan`) REFERENCES `quedan` (`id_quedan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_7` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cotizacion_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_ajuste`
--
ALTER TABLE `detalle_ajuste`
  ADD CONSTRAINT `detalle_ajuste_ibfk_1` FOREIGN KEY (`id_lote`) REFERENCES `lote` (`id_lote`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_ajuste_ibfk_2` FOREIGN KEY (`id_ajuste`) REFERENCES `ajuste` (`id_ajuste`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD CONSTRAINT `detalle_compra_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_compra_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_cotizacion`
--
ALTER TABLE `detalle_cotizacion`
  ADD CONSTRAINT `detalle_cotizacion_ibfk_1` FOREIGN KEY (`id_cotizacion`) REFERENCES `cotizacion` (`id_cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_cotizacion_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_devolucion`
--
ALTER TABLE `detalle_devolucion`
  ADD CONSTRAINT `detalle_devolucion_ibfk_1` FOREIGN KEY (`id_devolucion`) REFERENCES `devolucion` (`id_devolucion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_devolucion_ibfk_2` FOREIGN KEY (`id_lote`) REFERENCES `lote` (`id_lote`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_envio`
--
ALTER TABLE `detalle_envio`
  ADD CONSTRAINT `detalle_envio_ibfk_1` FOREIGN KEY (`id_envio`) REFERENCES `envio` (`id_envio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_envio_ibfk_2` FOREIGN KEY (`id_inventario`) REFERENCES `inventario` (`id_inventario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_envio_ibfk_3` FOREIGN KEY (`id_lote`) REFERENCES `lote` (`id_lote`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_requisicion`
--
ALTER TABLE `detalle_requisicion`
  ADD CONSTRAINT `detalle_requisicion_ibfk_1` FOREIGN KEY (`id_inventario`) REFERENCES `inventario` (`id_inventario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_requisicion_ibfk_2` FOREIGN KEY (`id_requisicion`) REFERENCES `requisicion` (`id_requisicion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `devolucion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`id_agencia`) REFERENCES `agencia` (`id_agencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD CONSTRAINT `encargado_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_ibfk_1` FOREIGN KEY (`usuario_envia`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_ibfk_2` FOREIGN KEY (`agencia_origen`) REFERENCES `agencia` (`id_agencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_ibfk_3` FOREIGN KEY (`usuario_recibe`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_ibfk_4` FOREIGN KEY (`agencia_destino`) REFERENCES `agencia` (`id_agencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estante`
--
ALTER TABLE `estante`
  ADD CONSTRAINT `estante_ibfk_1` FOREIGN KEY (`id_agencia`) REFERENCES `agencia` (`id_agencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`padre_fk`) REFERENCES `formulario` (`id_formulario`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`id_unidad`) REFERENCES `unidad_de_medida` (`id_unidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_3` FOREIGN KEY (`id_agencia`) REFERENCES `agencia` (`id_agencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_4` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_5` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lote_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lote_ibfk_3` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lote_detalle`
--
ALTER TABLE `lote_detalle`
  ADD CONSTRAINT `lote_detalle_ibfk_1` FOREIGN KEY (`id_lote`) REFERENCES `lote` (`id_lote`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lote_detalle_ibfk_2` FOREIGN KEY (`id_inventario`) REFERENCES `inventario` (`id_inventario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_categoria_producto`) REFERENCES `categoria_producto` (`id_categoria_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `requisicion`
--
ALTER TABLE `requisicion`
  ADD CONSTRAINT `requisicion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requisicion_ibfk_2` FOREIGN KEY (`id_agencia`) REFERENCES `agencia` (`id_agencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rol_formulario`
--
ALTER TABLE `rol_formulario`
  ADD CONSTRAINT `rol_formulario_ibfk_1` FOREIGN KEY (`id_formulario`) REFERENCES `formulario` (`id_formulario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rol_formulario_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`id_estante`) REFERENCES `estante` (`id_estante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
