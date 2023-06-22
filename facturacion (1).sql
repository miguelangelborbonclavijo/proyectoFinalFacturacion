-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2023 a las 00:16:51
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
-- Base de datos: `facturacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `AlmProId` int(11) DEFAULT NULL,
  `AlmFech` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `AlmCan` int(11) DEFAULT NULL,
  `AlmPrId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `CarId` int(11) NOT NULL,
  `CarTip` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`CarId`, `CarTip`) VALUES
(1, 'Administra'),
(2, 'Gerente'),
(3, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `CliPerId` int(11) NOT NULL,
  `CliTipId` int(11) NOT NULL,
  `CliEsId` int(11) NOT NULL,
  `CliDirr` varchar(250) NOT NULL,
  `CliTipUsu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`CliPerId`, `CliTipId`, `CliEsId`, `CliDirr`, `CliTipUsu`) VALUES
(1032937438, 1, 1, 'aijfdaj', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientesestado`
--

CREATE TABLE `clientesestado` (
  `ClieEsId` int(11) NOT NULL,
  `ClieTiEs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientesestado`
--

INSERT INTO `clientesestado` (`ClieEsId`, `ClieTiEs`) VALUES
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
  `CodFec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `codven`
--

INSERT INTO `codven` (`CodVenId`, `CodVenCl`, `CodTraId`, `CodFec`) VALUES
(8, 1032937438, 1032937438, '2023-06-22 16:49:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `ComId` int(11) NOT NULL,
  `ComPvId` int(11) NOT NULL,
  `ComPrId` int(11) NOT NULL,
  `ComFac` date NOT NULL,
  `ComCan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`ComId`, `ComPvId`, `ComPrId`, `ComFac`, `ComCan`) VALUES
(2, 4119, 544664, '0000-00-00', 18),
(3, 4119, 544664, '0000-00-00', 20),
(4, 4119, 544664, '0000-00-00', 60),
(5, 4119, 544664, '0000-00-00', 80),
(7, 4119, 544664, '0000-00-00', 2999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `EstId` int(11) NOT NULL,
  `EstNom` varchar(50) DEFAULT NULL
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
  `FacVenId` int(11) DEFAULT NULL,
  `FacCaj` int(11) DEFAULT NULL,
  `FacValRe` int(11) DEFAULT NULL,
  `FacCamb` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `PerTidId` int(11) NOT NULL,
  `PerId` int(11) NOT NULL,
  `PerNom1` varchar(50) NOT NULL,
  `PerNom2` varchar(50) DEFAULT NULL,
  `PerApe1` varchar(50) NOT NULL,
  `PerApe2` varchar(50) DEFAULT NULL,
  `PerCor` varchar(250) NOT NULL,
  `PerCon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`PerTidId`, `PerId`, `PerNom1`, `PerNom2`, `PerApe1`, `PerApe2`, `PerCor`, `PerCon`) VALUES
(1, 123456789, 'prueba', 'primera', 'aad', 'asda', 'adad@gmail.com', 'adasda521'),
(1, 1032937438, 'MIGUEL', 'ANGEL', 'BORBON ', 'CLAVIJO', '', ''),
(1, 2147483647, 'adad', 'adda', 'asdda', 'adad', 'asdad@gmail.com', 'adad456456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personascelular`
--

CREATE TABLE `personascelular` (
  `PesPerId` int(11) DEFAULT NULL,
  `PesCel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personascelular`
--

INSERT INTO `personascelular` (`PesPerId`, `PesCel`) VALUES
(NULL, 0),
(NULL, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personascorreo`
--

CREATE TABLE `personascorreo` (
  `PerCliId` int(11) NOT NULL,
  `PerCorr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ProId` int(11) NOT NULL,
  `ProTip` int(11) DEFAULT NULL,
  `ProDes` varchar(50) DEFAULT NULL,
  `ProPreCo` int(11) NOT NULL,
  `ProPreVe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ProId`, `ProTip`, `ProDes`, `ProPreCo`, `ProPreVe`) VALUES
(544664, 1, 'borbon', 1, 2),
(544665, 15, 'nuevo en mercado', 15000, 60000),
(544667, 15, 'Q', 15454, 445641);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedorcelular`
--

CREATE TABLE `proveedorcelular` (
  `ProId` int(11) DEFAULT NULL,
  `ProCel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `PrId` int(11) NOT NULL,
  `PrNomPr` varchar(50) DEFAULT NULL,
  `PrDirr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`PrId`, `PrNomPr`, `PrDirr`) VALUES
(4119, 'pokemo', 'serie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `SalId` int(11) NOT NULL,
  `SalPvId` int(11) NOT NULL,
  `SalPrId` int(11) NOT NULL,
  `SalFec` date NOT NULL,
  `SalCan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sopest`
--

CREATE TABLE `sopest` (
  `SoeSopld` int(11) DEFAULT NULL,
  `SoeEstId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte`
--

CREATE TABLE `soporte` (
  `SopoId` int(11) NOT NULL,
  `SopDoCl` int(11) NOT NULL,
  `SopTiCl` int(11) NOT NULL,
  `SopDesc` varchar(100) NOT NULL,
  `SopEstId` int(11) NOT NULL,
  `SopFe` date NOT NULL,
  `SopTiS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `soporte`
--

INSERT INTO `soporte` (`SopoId`, `SopDoCl`, `SopTiCl`, `SopDesc`, `SopEstId`, `SopFe`, `SopTiS`) VALUES
(9, 1032937438, 1, 'prueba2', 1, '0000-00-00', 1);

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
  `TidId` int(11) NOT NULL,
  `TipDoc` enum('CedulaDeCiudadania','TarjetaDeIdentidad','CedulaDeExtranjeria') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodedocumento`
--

INSERT INTO `tipodedocumento` (`TidId`, `TipDoc`) VALUES
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
(1, 'Carne'),
(4, 'Dulces'),
(10, 'Bebidas'),
(15, 'publicidad');

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
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `TraPerId` int(11) NOT NULL,
  `TraCarId` int(11) DEFAULT NULL,
  `TraHor` int(11) DEFAULT NULL,
  `TraSalar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`TraPerId`, `TraCarId`, `TraHor`, `TraSalar`) VALUES
(123456789, 1, 8, 1160000),
(1032937438, 1, 8, 1354623);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tracar`
--

CREATE TABLE `tracar` (
  `TcTraId` int(11) DEFAULT NULL,
  `TcCarId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariossoportes`
--

CREATE TABLE `usuariossoportes` (
  `UsPerId` int(11) NOT NULL,
  `UsSoPld` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `VenId` int(11) NOT NULL,
  `VenCodId` int(11) NOT NULL,
  `VenCliId` int(11) NOT NULL,
  `VenTraId` int(11) NOT NULL,
  `VenCan` int(11) NOT NULL,
  `VenFec` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `VenTot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD KEY `AlmPrId` (`AlmPrId`),
  ADD KEY `AlmProId` (`AlmProId`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`CarId`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`CliPerId`),
  ADD KEY `CliEsId` (`CliEsId`),
  ADD KEY `CliTipId` (`CliTipId`),
  ADD KEY `CliTipUsu` (`CliTipUsu`);

--
-- Indices de la tabla `clientesestado`
--
ALTER TABLE `clientesestado`
  ADD PRIMARY KEY (`ClieEsId`);

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
  ADD KEY `ComCan` (`ComCan`);

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
  ADD KEY `PerTidId` (`PerTidId`);

--
-- Indices de la tabla `personascelular`
--
ALTER TABLE `personascelular`
  ADD PRIMARY KEY (`PesCel`),
  ADD KEY `PesPerId` (`PesPerId`);

--
-- Indices de la tabla `personascorreo`
--
ALTER TABLE `personascorreo`
  ADD PRIMARY KEY (`PerCorr`),
  ADD KEY `PerCliId` (`PerCliId`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ProId`),
  ADD KEY `ProTip` (`ProTip`);

--
-- Indices de la tabla `proveedorcelular`
--
ALTER TABLE `proveedorcelular`
  ADD KEY `ProId` (`ProId`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`PrId`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`SalId`),
  ADD UNIQUE KEY `SalCan` (`SalCan`),
  ADD KEY `SalPvId` (`SalPvId`),
  ADD KEY `SalPrId` (`SalPrId`);

--
-- Indices de la tabla `sopest`
--
ALTER TABLE `sopest`
  ADD KEY `SoeSopld` (`SoeSopld`),
  ADD KEY `SoeEstId` (`SoeEstId`);

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
  ADD PRIMARY KEY (`TidId`);

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
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`TraPerId`),
  ADD KEY `TraPerId` (`TraCarId`);

--
-- Indices de la tabla `tracar`
--
ALTER TABLE `tracar`
  ADD KEY `TcTraId` (`TcTraId`),
  ADD KEY `TcCarId` (`TcCarId`);

--
-- Indices de la tabla `usuariossoportes`
--
ALTER TABLE `usuariossoportes`
  ADD PRIMARY KEY (`UsPerId`),
  ADD KEY `UsSoPld` (`UsSoPld`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`VenId`),
  ADD KEY `VenCodId` (`VenCodId`),
  ADD KEY `VenCliId` (`VenCliId`),
  ADD KEY `VenTraId` (`VenTraId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `CarId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientesestado`
--
ALTER TABLE `clientesestado`
  MODIFY `ClieEsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `codven`
--
ALTER TABLE `codven`
  MODIFY `CodVenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `ComId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `ProId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=544668;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `SalId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `soporte`
--
ALTER TABLE `soporte`
  MODIFY `SopoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipodeclientes`
--
ALTER TABLE `tipodeclientes`
  MODIFY `TipCliId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipodeproducto`
--
ALTER TABLE `tipodeproducto`
  MODIFY `TipId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `TraPerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1032937442;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `VenId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD CONSTRAINT `almacen_ibfk_2` FOREIGN KEY (`AlmPrId`) REFERENCES `proveedores` (`PrId`),
  ADD CONSTRAINT `almacen_ibfk_3` FOREIGN KEY (`AlmProId`) REFERENCES `personas` (`PerId`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`CliPerId`) REFERENCES `personas` (`PerId`),
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`CliEsId`) REFERENCES `clientesestado` (`ClieEsId`),
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`CliTipId`) REFERENCES `tipodeusuario` (`TipId`);

--
-- Filtros para la tabla `codven`
--
ALTER TABLE `codven`
  ADD CONSTRAINT `codven_ibfk_1` FOREIGN KEY (`CodVenCl`) REFERENCES `clientes` (`CliPerId`),
  ADD CONSTRAINT `codven_ibfk_2` FOREIGN KEY (`CodTraId`) REFERENCES `trabajador` (`TraPerId`);

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`ComPvId`) REFERENCES `proveedores` (`PrId`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`ComPrId`) REFERENCES `productos` (`ProId`);

--
-- Filtros para la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD CONSTRAINT `facturacion_ibfk_1` FOREIGN KEY (`FacVenId`) REFERENCES `codven` (`CodVenId`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`PerTidId`) REFERENCES `tipodedocumento` (`TidId`);

--
-- Filtros para la tabla `personascelular`
--
ALTER TABLE `personascelular`
  ADD CONSTRAINT `personascelular_ibfk_1` FOREIGN KEY (`PesPerId`) REFERENCES `personas` (`PerId`);

--
-- Filtros para la tabla `personascorreo`
--
ALTER TABLE `personascorreo`
  ADD CONSTRAINT `personascorreo_ibfk_1` FOREIGN KEY (`PerCliId`) REFERENCES `personas` (`PerId`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`ProTip`) REFERENCES `tipodeproducto` (`TipId`);

--
-- Filtros para la tabla `proveedorcelular`
--
ALTER TABLE `proveedorcelular`
  ADD CONSTRAINT `proveedorcelular_ibfk_1` FOREIGN KEY (`ProId`) REFERENCES `proveedores` (`PrId`);

--
-- Filtros para la tabla `sopest`
--
ALTER TABLE `sopest`
  ADD CONSTRAINT `sopest_ibfk_1` FOREIGN KEY (`SoeEstId`) REFERENCES `estados` (`EstId`),
  ADD CONSTRAINT `sopest_ibfk_2` FOREIGN KEY (`SoeSopld`) REFERENCES `soporte` (`SopEstId`);

--
-- Filtros para la tabla `soporte`
--
ALTER TABLE `soporte`
  ADD CONSTRAINT `soporte_ibfk_1` FOREIGN KEY (`SopTiS`) REFERENCES `tipodesoporte` (`TisId`),
  ADD CONSTRAINT `soporte_ibfk_2` FOREIGN KEY (`SopTiCl`) REFERENCES `tipodeusuario` (`TipId`),
  ADD CONSTRAINT `soporte_ibfk_3` FOREIGN KEY (`SopDoCl`) REFERENCES `clientes` (`CliPerId`);

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`TraPerId`) REFERENCES `personas` (`PerId`),
  ADD CONSTRAINT `trabajador_ibfk_2` FOREIGN KEY (`TraCarId`) REFERENCES `tipodeusuario` (`TipId`);

--
-- Filtros para la tabla `tracar`
--
ALTER TABLE `tracar`
  ADD CONSTRAINT `tracar_ibfk_1` FOREIGN KEY (`TcTraId`) REFERENCES `trabajador` (`TraPerId`),
  ADD CONSTRAINT `tracar_ibfk_2` FOREIGN KEY (`TcCarId`) REFERENCES `cargos` (`CarId`);

--
-- Filtros para la tabla `usuariossoportes`
--
ALTER TABLE `usuariossoportes`
  ADD CONSTRAINT `usuariossoportes_ibfk_2` FOREIGN KEY (`UsPerId`) REFERENCES `clientes` (`CliPerId`),
  ADD CONSTRAINT `usuariossoportes_ibfk_3` FOREIGN KEY (`UsSoPld`) REFERENCES `soporte` (`SopoId`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`VenCodId`) REFERENCES `codven` (`CodVenId`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`VenCliId`) REFERENCES `compras` (`ComId`),
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`VenTraId`) REFERENCES `trabajador` (`TraPerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
