-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2018 a las 19:40:08
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casarocha`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `titulo_categoria` varchar(50) NOT NULL,
  `descripcion_categoria` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `titulo_categoria`, `descripcion_categoria`) VALUES
(1, 'CALENTADOR SOLAR', 'Calentador solar'),
(2, 'FOCO SOLAR LF', 'Foco solar de luz fria'),
(3, 'FOCO SOLAR LC', 'Foco solar de luz caliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `email_contacto` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `usuarios_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `productos_id_producto` int(11) NOT NULL,
  `productos_categorias_id_categoria` int(11) NOT NULL,
  `pedidos_id_pedido` int(11) NOT NULL,
  `pedidos_metodospago_id_metodo` int(11) NOT NULL,
  `pedidos_metodosenvio_id_paqueteria` int(11) NOT NULL,
  `pedidos_usuarios_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_preguntasfrecuentes`
--

CREATE TABLE `detalle_preguntasfrecuentes` (
  `usuarios_id_usuario` int(11) NOT NULL,
  `preguntasfrecuentes_id_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodosenvio`
--

CREATE TABLE `metodosenvio` (
  `id_paqueteria` int(11) NOT NULL,
  `nombre_paqueteria` varchar(50) NOT NULL,
  `numero_contacto` varchar(50) NOT NULL,
  `home_page` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `metodosenvio`
--

INSERT INTO `metodosenvio` (`id_paqueteria`, `nombre_paqueteria`, `numero_contacto`, `home_page`) VALUES
(1, 'FEDEX', '01800', 'http://www.fedex.com/'),
(2, 'DHL', '01800', 'http://www.dhl.com/en.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodospago`
--

CREATE TABLE `metodospago` (
  `id_metodo` int(11) NOT NULL,
  `nombre_metodo` varchar(50) NOT NULL,
  `descripcion_metodo` varchar(50) NOT NULL,
  `status_metodo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `metodospago`
--

INSERT INTO `metodospago` (`id_metodo`, `nombre_metodo`, `descripcion_metodo`, `status_metodo`) VALUES
(1, 'Deposito', 'Deposito bancario ', 1),
(2, 'Paypal', 'Paypal', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `clave_envio` varchar(50) NOT NULL,
  `fecha_pedido` datetime NOT NULL,
  `monto_total` double(9,2) NOT NULL,
  `unidades_orden` int(11) NOT NULL,
  `metodospago_id_metodo` int(11) NOT NULL,
  `metodosenvio_id_paqueteria` int(11) NOT NULL,
  `usuarios_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntasfrecuentes`
--

CREATE TABLE `preguntasfrecuentes` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(150) NOT NULL,
  `respuesta` varchar(150) NOT NULL,
  `status_pregunta` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntasfrecuentes`
--

INSERT INTO `preguntasfrecuentes` (`id_pregunta`, `pregunta`, `respuesta`, `status_pregunta`) VALUES
(1, '¿Hay envíos a Estados unidos?', 'Por el momento solo hacemos envíos dentro de la república mexicana.', 1),
(2, '¿Cómo puedo pagar sino tengo Paypal?', 'Puedes utilizar el método de pago de deposito bancario.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `clave_producto` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `descripcion_producto` varchar(150) NOT NULL,
  `precio_unitario` double(9,2) NOT NULL,
  `unidades_stock` int(11) NOT NULL,
  `categorias_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `clave_producto`, `imagen`, `nombre_producto`, `descripcion_producto`, `precio_unitario`, `unidades_stock`, `categorias_id_categoria`) VALUES
(1, 'CSPT08', 'IMG', 'Calentador solar PT8', 'Calentador solar de 8 tubos, acero inoxidable', 8000.00, 10, 1),
(2, 'CSPT10', 'IMG', 'Calentador solar PT10', 'Calentador solar de 10 tubos, acero inoxidable', 10000.00, 10, 1),
(3, 'CSPT12', 'IMG', 'Calentador solar PT12', 'Calentador solar de 12 tubos, acero inoxidable', 12000.00, 10, 1),
(4, 'CSPT15', 'IMG', 'Calentador solar PT15', 'Calentador solar de 15 tubos, acero inoxidable', 15000.00, 10, 1),
(5, 'CSPT18', 'IMG', 'Calentador solar PT18', 'Calentador solar de 18 tubos, acero inoxidable', 18000.00, 10, 1),
(6, 'CSPT20', 'IMG', 'Calentador solar PT20', 'Calentador solar de 20 tubos, acero inoxidable', 20000.00, 10, 1),
(7, 'BFLF4W', 'IMG', 'FOCO LED 4W', 'Foco filamento LED de luz fria 4w', 150.00, 10, 2),
(8, 'BFLF6W', 'IMG', 'FOCO LED 6W', 'Foco filamento LED de luz fria 6w', 160.00, 10, 2),
(9, 'BFLF8W', 'IMG', 'FOCO LED 8W', 'Foco filamento LED de luz fria 8w', 180.00, 10, 2),
(10, 'BFLC4W', 'IMG', 'FOCO LED 4W', 'Foco filamento LED de luz cálida 4w', 140.00, 10, 3),
(11, 'BFLC6W', 'IMG', 'FOCO LED 6W', 'Foco filamento LED de luz cálida 6w', 160.00, 10, 3),
(12, 'BFLC8W', 'IMG', 'FOCO LED 8W', 'Foco filamento LED de luz cálida 8w', 180.00, 10, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero_exterior` int(11) NOT NULL,
  `numero_interior` int(11) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `referencia` varchar(150) NOT NULL,
  `codigo_postal` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `status_usuario` tinyint(4) NOT NULL,
  `privilegios` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellidos`, `email`, `password`, `telefono`, `calle`, `numero_exterior`, `numero_interior`, `colonia`, `referencia`, `codigo_postal`, `ciudad`, `estado`, `status_usuario`, `privilegios`) VALUES
(1, 'Fredy', 'Armenta Blanco', 'fredie.ab@gmail.com', '12345', '447-119-1063', '21', 9, 0, 'Lazaro Cardenas', 'Frente a muebleria', '61250', 'Maravatio', 'Michoacán', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `fk_contactos_usuarios1_idx` (`usuarios_id_usuario`);

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`productos_id_producto`,`productos_categorias_id_categoria`,`pedidos_id_pedido`,`pedidos_metodospago_id_metodo`,`pedidos_metodosenvio_id_paqueteria`,`pedidos_usuarios_id_usuario`),
  ADD KEY `fk_productos_has_pedidos_pedidos1_idx` (`pedidos_id_pedido`,`pedidos_metodospago_id_metodo`,`pedidos_metodosenvio_id_paqueteria`,`pedidos_usuarios_id_usuario`),
  ADD KEY `fk_productos_has_pedidos_productos1_idx` (`productos_id_producto`,`productos_categorias_id_categoria`);

--
-- Indices de la tabla `detalle_preguntasfrecuentes`
--
ALTER TABLE `detalle_preguntasfrecuentes`
  ADD PRIMARY KEY (`usuarios_id_usuario`,`preguntasfrecuentes_id_pregunta`),
  ADD KEY `fk_usuarios_has_preguntasfrecuentes_preguntasfrecuentes1_idx` (`preguntasfrecuentes_id_pregunta`),
  ADD KEY `fk_usuarios_has_preguntasfrecuentes_usuarios1_idx` (`usuarios_id_usuario`);

--
-- Indices de la tabla `metodosenvio`
--
ALTER TABLE `metodosenvio`
  ADD PRIMARY KEY (`id_paqueteria`);

--
-- Indices de la tabla `metodospago`
--
ALTER TABLE `metodospago`
  ADD PRIMARY KEY (`id_metodo`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`,`metodospago_id_metodo`,`metodosenvio_id_paqueteria`,`usuarios_id_usuario`),
  ADD KEY `fk_pedidos_metodospago1_idx` (`metodospago_id_metodo`),
  ADD KEY `fk_pedidos_metodosenvio1_idx` (`metodosenvio_id_paqueteria`),
  ADD KEY `fk_pedidos_usuarios1_idx` (`usuarios_id_usuario`);

--
-- Indices de la tabla `preguntasfrecuentes`
--
ALTER TABLE `preguntasfrecuentes`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`,`categorias_id_categoria`),
  ADD KEY `fk_productos_categorias1_idx` (`categorias_id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `metodosenvio`
--
ALTER TABLE `metodosenvio`
  MODIFY `id_paqueteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `metodospago`
--
ALTER TABLE `metodospago`
  MODIFY `id_metodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `preguntasfrecuentes`
--
ALTER TABLE `preguntasfrecuentes`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `fk_contactos_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD CONSTRAINT `fk_productos_has_pedidos_pedidos1` FOREIGN KEY (`pedidos_id_pedido`,`pedidos_metodospago_id_metodo`,`pedidos_metodosenvio_id_paqueteria`,`pedidos_usuarios_id_usuario`) REFERENCES `pedidos` (`id_pedido`, `metodospago_id_metodo`, `metodosenvio_id_paqueteria`, `usuarios_id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_has_pedidos_productos1` FOREIGN KEY (`productos_id_producto`,`productos_categorias_id_categoria`) REFERENCES `productos` (`id_producto`, `categorias_id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_preguntasfrecuentes`
--
ALTER TABLE `detalle_preguntasfrecuentes`
  ADD CONSTRAINT `fk_usuarios_has_preguntasfrecuentes_preguntasfrecuentes1` FOREIGN KEY (`preguntasfrecuentes_id_pregunta`) REFERENCES `preguntasfrecuentes` (`id_pregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_preguntasfrecuentes_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedidos_metodosenvio1` FOREIGN KEY (`metodosenvio_id_paqueteria`) REFERENCES `metodosenvio` (`id_paqueteria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedidos_metodospago1` FOREIGN KEY (`metodospago_id_metodo`) REFERENCES `metodospago` (`id_metodo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedidos_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categorias1` FOREIGN KEY (`categorias_id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
