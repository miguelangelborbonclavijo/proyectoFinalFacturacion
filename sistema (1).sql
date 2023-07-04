-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2023 a las 21:47:50
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `consCli` ()   BEGIN
SELECT * FROM clientes;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consCuen` ()   BEGIN
SELECT * FROM usuarios;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardarpersonas` ()   BEGIN
	SELECT * FROM personas;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartrab`
--

CREATE TABLE `cartrab` (
  `CarTraId` int(11) NOT NULL,
  `TipCarTr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cartrab`
--

INSERT INTO `cartrab` (`CarTraId`, `TipCarTr`) VALUES
(1, 'Administrador'),
(2, 'Gerente'),
(3, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `CliPerId` int(11) NOT NULL,
  `CilTipId` int(11) NOT NULL,
  `CliEsId` int(11) NOT NULL,
  `CliDirr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`CliPerId`, `CilTipId`, `CliEsId`, `CliDirr`) VALUES
(1032937438, 1, 1, 'cra 90 bis# 76-51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientesestado`
--

CREATE TABLE `clientesestado` (
  `CliEsId` int(11) NOT NULL,
  `CliTipEs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientesestado`
--

INSERT INTO `clientesestado` (`CliEsId`, `CliTipEs`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codven`
--

CREATE TABLE `codven` (
  `CodVenId` int(11) NOT NULL,
  `CodVenCl` int(11) NOT NULL,
  `CodTraId` int(11) NOT NULL,
  `CodFec` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `codven`
--

INSERT INTO `codven` (`CodVenId`, `CodVenCl`, `CodTraId`, `CodFec`) VALUES
(11, 1032937438, 9, '2023-07-04 17:36:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `ComId` int(11) NOT NULL,
  `ComPvId` int(11) NOT NULL,
  `ComPrId` int(11) NOT NULL,
  `ComFec` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ComCan` int(11) NOT NULL,
  `ComTraId` int(11) NOT NULL,
  `ComEs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`ComId`, `ComPvId`, `ComPrId`, `ComFec`, `ComCan`, `ComTraId`, `ComEs`) VALUES
(21, 1, 5, '2023-07-04 18:21:00', 15, 9, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `EstId` int(11) NOT NULL,
  `EstNom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`EstId`, `EstNom`) VALUES
(1, 'ACTIVO'),
(2, 'ESPERAR'),
(3, 'FINALIZADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

CREATE TABLE `facturacion` (
  `FacId` int(11) NOT NULL,
  `FacVenId` int(11) NOT NULL,
  `FacCaj` int(11) NOT NULL,
  `FacValTo` int(11) NOT NULL,
  `FacValRe` int(11) NOT NULL,
  `FacCamb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `PerId` int(11) NOT NULL,
  `PerTidId` int(11) NOT NULL,
  `PerNom1` varchar(50) NOT NULL,
  `PerNom2` varchar(50) NOT NULL,
  `PerApe1` varchar(50) NOT NULL,
  `PerApe2` varchar(50) NOT NULL,
  `PerDirr` varchar(200) NOT NULL,
  `PerFech` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PerTipUs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`PerId`, `PerTidId`, `PerNom1`, `PerNom2`, `PerApe1`, `PerApe2`, `PerDirr`, `PerFech`, `PerTipUs`) VALUES
(987654321, 1, 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN', 'cra 90 bis # 76-51', '2023-07-04 16:23:39', 1),
(1032937438, 1, 'MIGUEL ', 'ANGEL ', 'BORBON ', 'CLAVIJO ', 'cra 90 bis # 76-51', '2023-07-04 16:22:02', 1),
(1234567890, 1, 'TRABAJADOR', 'TRABAJADOR', 'TRABAJADOP', 'TRABAJADOR', 'cra 90 bis # 76-51', '2023-07-04 16:23:15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ProId` int(11) NOT NULL,
  `ProTip` int(11) NOT NULL,
  `ProDes` varchar(50) NOT NULL,
  `ProPreCo` int(11) NOT NULL,
  `ProPreVe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ProId`, `ProTip`, `ProDes`, `ProPreCo`, `ProPreVe`) VALUES
(5, 3, 'prueba', 1655, 521);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `PrId` int(11) NOT NULL,
  `PrNomPr` varchar(50) NOT NULL,
  `PrDirr` varchar(50) NOT NULL,
  `PrCel` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`PrId`, `PrNomPr`, `PrDirr`, `PrCel`) VALUES
(1, 'PRUEBA', 'CR', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporteproductos`
--

CREATE TABLE `reporteproductos` (
  `ReId` int(11) NOT NULL,
  `ReProId` int(11) NOT NULL,
  `DesRePr` varchar(150) NOT NULL,
  `RepFech` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reporteproductos`
--

INSERT INTO `reporteproductos` (`ReId`, `ReProId`, `DesRePr`, `RepFech`) VALUES
(7, 5, 'prueba', '2023-07-04 17:25:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte`
--

CREATE TABLE `soporte` (
  `SopoId` int(11) NOT NULL,
  `SopDoCl` int(11) NOT NULL,
  `SopTiCl` int(11) NOT NULL,
  `SopDesc` varchar(150) NOT NULL,
  `SopEstId` int(11) NOT NULL,
  `SopFe` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `SopTiS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `soporte`
--

INSERT INTO `soporte` (`SopoId`, `SopDoCl`, `SopTiCl`, `SopDesc`, `SopEstId`, `SopFe`, `SopTiS`) VALUES
(9, 1032937438, 1, 'sfcsdf', 1, '2023-07-04 17:45:33', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeclientes`
--

CREATE TABLE `tipodeclientes` (
  `TipCliId` int(11) NOT NULL,
  `TipCli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodeclientes`
--

INSERT INTO `tipodeclientes` (`TipCliId`, `TipCli`) VALUES
(1, 'BASICO'),
(2, 'PREMIUM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodedocumento`
--

CREATE TABLE `tipodedocumento` (
  `TipDocId` int(11) NOT NULL,
  `TipDoc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodedocumento`
--

INSERT INTO `tipodedocumento` (`TipDocId`, `TipDoc`) VALUES
(1, 'CedulaDeCiudadania'),
(2, 'TarjetaDeIdentidad'),
(3, 'CedulaDeExtranjeria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeproducto`
--

CREATE TABLE `tipodeproducto` (
  `TipId` int(11) NOT NULL,
  `TipNom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodeproducto`
--

INSERT INTO `tipodeproducto` (`TipId`, `TipNom`) VALUES
(2, 'manillas de hilos'),
(3, 'PRUEBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodesoporte`
--

CREATE TABLE `tipodesoporte` (
  `TisId` int(11) NOT NULL,
  `TisSopr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodesoporte`
--

INSERT INTO `tipodesoporte` (`TisId`, `TisSopr`) VALUES
(1, 'SOPORTE TECNICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeusuario`
--

CREATE TABLE `tipodeusuario` (
  `TipId` int(11) NOT NULL,
  `TipUsu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodeusuario`
--

INSERT INTO `tipodeusuario` (`TipId`, `TipUsu`) VALUES
(1, 'Cliente'),
(2, 'Proveedores'),
(3, 'Trabajadores'),
(4, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `TraId` int(11) NOT NULL,
  `TraPerId` int(11) NOT NULL,
  `TraCarId` int(11) NOT NULL,
  `TraHor` int(11) NOT NULL,
  `TraSalario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`TraId`, `TraPerId`, `TraCarId`, `TraHor`, `TraSalario`) VALUES
(9, 1234567890, 3, 8, 1160000),
(10, 987654321, 1, 8, 1160000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuId` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsuId`, `usuario`, `contrasena`, `nombre`, `tipo_usuario`) VALUES
(1032937467, 1032937438, '1', 'MIGUEL ANGEL BORBON CLAVIJO', 1),
(1032937470, 1234567890, '1', 'MIGUEL ANGEL BORBON CLAVIJO TR', 3),
(1032937471, 987654321, '1', 'MIGUEL ANGEL BORBON CLAVIJO AD', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `VenId` int(11) NOT NULL,
  `VenCodId` int(11) NOT NULL,
  `VenTraId` int(11) NOT NULL,
  `VenCliId` int(11) NOT NULL,
  `VenCan` int(11) NOT NULL,
  `VenFech` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `VenTot` int(11) NOT NULL,
  `VenAcId` int(11) NOT NULL,
  `VenProId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`VenId`, `VenCodId`, `VenTraId`, `VenCliId`, `VenCan`, `VenFech`, `VenTot`, `VenAcId`, `VenProId`) VALUES
(5, 11, 9, 1032937438, 18, '2023-07-04 17:38:16', 6516, 1, 5),
(6, 11, 9, 1032937438, 18, '2023-07-04 19:25:24', 4545, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasacan`
--

CREATE TABLE `ventasacan` (
  `VeAnId` int(11) NOT NULL,
  `VeAnTip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventasacan`
--

INSERT INTO `ventasacan` (`VeAnId`, `VeAnTip`) VALUES
(1, 'Activo'),
(2, 'Anular');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartrab`
--
ALTER TABLE `cartrab`
  ADD PRIMARY KEY (`CarTraId`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`CliPerId`),
  ADD KEY `CilTipId` (`CilTipId`),
  ADD KEY `CliEsId` (`CliEsId`);

--
-- Indices de la tabla `clientesestado`
--
ALTER TABLE `clientesestado`
  ADD PRIMARY KEY (`CliEsId`);

--
-- Indices de la tabla `codven`
--
ALTER TABLE `codven`
  ADD PRIMARY KEY (`CodVenId`),
  ADD KEY `CodVenCl` (`CodVenCl`),
  ADD KEY `CodTraId` (`CodTraId`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`ComId`),
  ADD KEY `ComPvId` (`ComPvId`),
  ADD KEY `ComPrId` (`ComPrId`),
  ADD KEY `ComCan` (`ComCan`),
  ADD KEY `ComTraId` (`ComTraId`),
  ADD KEY `ComEs` (`ComEs`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`EstId`);

--
-- Indices de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD PRIMARY KEY (`FacId`),
  ADD KEY `FacVenId` (`FacVenId`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`PerId`),
  ADD KEY `PerTidId` (`PerTidId`),
  ADD KEY `PerTipUs` (`PerTipUs`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ProId`),
  ADD KEY `ProTip` (`ProTip`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`PrId`);

--
-- Indices de la tabla `reporteproductos`
--
ALTER TABLE `reporteproductos`
  ADD PRIMARY KEY (`ReId`),
  ADD KEY `ReProId` (`ReProId`);

--
-- Indices de la tabla `soporte`
--
ALTER TABLE `soporte`
  ADD PRIMARY KEY (`SopoId`),
  ADD KEY `SopDoCl` (`SopDoCl`),
  ADD KEY `SopTiCl` (`SopTiCl`),
  ADD KEY `SopEstId` (`SopEstId`),
  ADD KEY `SopTiS` (`SopTiS`);

--
-- Indices de la tabla `tipodeclientes`
--
ALTER TABLE `tipodeclientes`
  ADD PRIMARY KEY (`TipCliId`);

--
-- Indices de la tabla `tipodedocumento`
--
ALTER TABLE `tipodedocumento`
  ADD PRIMARY KEY (`TipDocId`);

--
-- Indices de la tabla `tipodeproducto`
--
ALTER TABLE `tipodeproducto`
  ADD PRIMARY KEY (`TipId`);

--
-- Indices de la tabla `tipodesoporte`
--
ALTER TABLE `tipodesoporte`
  ADD PRIMARY KEY (`TisId`);

--
-- Indices de la tabla `tipodeusuario`
--
ALTER TABLE `tipodeusuario`
  ADD PRIMARY KEY (`TipId`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`TraId`),
  ADD KEY `TraPerId` (`TraPerId`),
  ADD KEY `TraCarId` (`TraCarId`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuId`),
  ADD KEY `tipo_usuario` (`tipo_usuario`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`VenId`),
  ADD KEY `VenCodId` (`VenCodId`),
  ADD KEY `VenTraId` (`VenTraId`),
  ADD KEY `VenCliId` (`VenCliId`),
  ADD KEY `VenAcId` (`VenAcId`),
  ADD KEY `VenProId` (`VenProId`);

--
-- Indices de la tabla `ventasacan`
--
ALTER TABLE `ventasacan`
  ADD PRIMARY KEY (`VeAnId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartrab`
--
ALTER TABLE `cartrab`
  MODIFY `CarTraId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientesestado`
--
ALTER TABLE `clientesestado`
  MODIFY `CliEsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `codven`
--
ALTER TABLE `codven`
  MODIFY `CodVenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `ComId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `EstId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  MODIFY `FacId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ProId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reporteproductos`
--
ALTER TABLE `reporteproductos`
  MODIFY `ReId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `soporte`
--
ALTER TABLE `soporte`
  MODIFY `SopoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipodeclientes`
--
ALTER TABLE `tipodeclientes`
  MODIFY `TipCliId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipodedocumento`
--
ALTER TABLE `tipodedocumento`
  MODIFY `TipDocId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipodeproducto`
--
ALTER TABLE `tipodeproducto`
  MODIFY `TipId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipodesoporte`
--
ALTER TABLE `tipodesoporte`
  MODIFY `TisId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipodeusuario`
--
ALTER TABLE `tipodeusuario`
  MODIFY `TipId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `TraId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1032937472;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `VenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventasacan`
--
ALTER TABLE `ventasacan`
  MODIFY `VeAnId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`CliPerId`) REFERENCES `personas` (`PerId`),
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`CliEsId`) REFERENCES `clientesestado` (`CliEsId`),
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`CilTipId`) REFERENCES `tipodeclientes` (`TipCliId`);

--
-- Filtros para la tabla `codven`
--
ALTER TABLE `codven`
  ADD CONSTRAINT `codven_ibfk_1` FOREIGN KEY (`CodTraId`) REFERENCES `trabajadores` (`TraId`),
  ADD CONSTRAINT `codven_ibfk_2` FOREIGN KEY (`CodVenCl`) REFERENCES `clientes` (`CliPerId`);

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`ComPrId`) REFERENCES `productos` (`ProId`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`ComPvId`) REFERENCES `proveedores` (`PrId`),
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`ComTraId`) REFERENCES `trabajadores` (`TraId`),
  ADD CONSTRAINT `compras_ibfk_4` FOREIGN KEY (`ComEs`) REFERENCES `ventasacan` (`VeAnId`);

--
-- Filtros para la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD CONSTRAINT `facturacion_ibfk_1` FOREIGN KEY (`FacVenId`) REFERENCES `codven` (`CodVenId`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`PerTipUs`) REFERENCES `tipodeusuario` (`TipId`),
  ADD CONSTRAINT `personas_ibfk_2` FOREIGN KEY (`PerTidId`) REFERENCES `tipodedocumento` (`TipDocId`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`ProTip`) REFERENCES `tipodeproducto` (`TipId`);

--
-- Filtros para la tabla `reporteproductos`
--
ALTER TABLE `reporteproductos`
  ADD CONSTRAINT `reporteproductos_ibfk_1` FOREIGN KEY (`ReProId`) REFERENCES `productos` (`ProId`);

--
-- Filtros para la tabla `soporte`
--
ALTER TABLE `soporte`
  ADD CONSTRAINT `soporte_ibfk_1` FOREIGN KEY (`SopTiS`) REFERENCES `tipodesoporte` (`TisId`),
  ADD CONSTRAINT `soporte_ibfk_3` FOREIGN KEY (`SopTiCl`) REFERENCES `tipodeusuario` (`TipId`),
  ADD CONSTRAINT `soporte_ibfk_4` FOREIGN KEY (`SopDoCl`) REFERENCES `clientes` (`CliPerId`),
  ADD CONSTRAINT `soporte_ibfk_5` FOREIGN KEY (`SopEstId`) REFERENCES `estados` (`EstId`);

--
-- Filtros para la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD CONSTRAINT `trabajadores_ibfk_1` FOREIGN KEY (`TraPerId`) REFERENCES `personas` (`PerId`),
  ADD CONSTRAINT `trabajadores_ibfk_2` FOREIGN KEY (`TraCarId`) REFERENCES `cartrab` (`CarTraId`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipodeusuario` (`TipId`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`usuario`) REFERENCES `personas` (`PerId`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`VenTraId`) REFERENCES `trabajadores` (`TraId`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`VenCliId`) REFERENCES `clientes` (`CliPerId`),
  ADD CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`VenAcId`) REFERENCES `ventasacan` (`VeAnId`),
  ADD CONSTRAINT `ventas_ibfk_5` FOREIGN KEY (`VenCodId`) REFERENCES `codven` (`CodVenId`),
  ADD CONSTRAINT `ventas_ibfk_6` FOREIGN KEY (`VenProId`) REFERENCES `productos` (`ProId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
