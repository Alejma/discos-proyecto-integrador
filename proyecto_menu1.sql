-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2024 a las 21:48:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_menu1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_estado`
--

CREATE TABLE `t_estado` (
  `id_estado` int(11) NOT NULL,
  `desc_estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `t_estado`
--

INSERT INTO `t_estado` (`id_estado`, `desc_estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Disponible'),
(4, 'Agotado'),
(5, 'Urgente'),
(6, 'Poco urgente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_oferta`
--

CREATE TABLE `t_oferta` (
  `id_oferta` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `nom_oferta` varchar(500) NOT NULL,
  `desc_oferta` varchar(10000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cupos_oferta` int(200) NOT NULL,
  `fech_ini_oferta` date NOT NULL,
  `fech_fin_oferta` date NOT NULL,
  `imag_oferta` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `t_oferta`
--

INSERT INTO `t_oferta` (`id_oferta`, `usu_id`, `id_estado`, `nom_oferta`, `desc_oferta`, `cupos_oferta`, `fech_ini_oferta`, `fech_fin_oferta`, `imag_oferta`) VALUES
(1, 13, 3, 'Manzana  X unidad', 'Es uno de los frutos mÃ¡s conocidos, este tipo en particular es de color rojo y tiene un caracterÃ­stico sabor Ã¡cido. Su procedencia es China y su cultivo se da principalmente en climas frÃ­os y templados.\r\n\r\nsi deseas mas informacion contactate con: \r\nNombre campesino: juan jose\r\nTelefono: 3183761393\r\n\r\n', 58, '2024-05-14', '2022-04-29', '../../usu/web/images/12in-Vinyl-LP-Record-Angle.jpg'),
(10, 13, 3, 'Pera Verde X unidad', 'Es una fruta de color verde, de dulce sabor que se cultiva en un clima frÃ­o y hÃºmedo. Se considera que su origen es asiÃ¡tico aunque hay variedades europeas.\r\n\r\nSu consumo puede darse directamente o por medio de jugos, postres y compotas.', 50, '2024-05-13', '2022-04-30', '../../usu/web/images/nuvista600-2_1_.jpg'),
(11, 14, 3, 'Papaya ComÃºn X 2000g', 'Es una fruta de gran tamaÃ±o que segÃºn su estado de maduraciÃ³n puede ser de color anaranjado o verde; su interior es anaranjado con un centro de pequeÃ±as semillas de color negro. Su origen debido al clima tropical es africano y sudamericano.\r\n\r\nSu consumo puede ser de manera directa o en jugos, ensaladas y postres.', 1000, '2022-02-15', '2022-05-27', '../../usu/web/images/papaya-maradol-kilo.jpg'),
(12, 14, 3, 'Papa X 1000g (1KILO)', 'La papa es un tubÃ©rculo de gran consumo a nivel mundial considerado el tercer alimento mÃ¡s importante despuÃ©s del maÃ­z y el trigo. â€¦ Para identificar este tipo de papa se debe tener en cuenta que su color es entre rosado y crema, tambiÃ©n es conocida como papa parda en varias zonas del paÃ­s.', 5700, '2022-02-15', '2022-05-16', '../../usu/web/images/papa-parda.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_pqrsf`
--

CREATE TABLE `t_pqrsf` (
  `cod_pqrsf` int(11) NOT NULL,
  `cod_pqrsf_tipo` int(11) NOT NULL,
  `usu_id` int(11) DEFAULT NULL,
  `id_estado` int(11) NOT NULL,
  `pqrsf_desc` varchar(10000) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `t_pqrsf`
--

INSERT INTO `t_pqrsf` (`cod_pqrsf`, `cod_pqrsf_tipo`, `usu_id`, `id_estado`, `pqrsf_desc`, `correo`, `nombre`) VALUES
(1, 3, 14, 3, 'me gustarÃ­a hacer un reclamo', 'jjmarin465@misena.edu.co', 'juan'),
(2, 1, 14, 5, 'ddfvdfvdfb', 'jjmarin465@misena.edu.co', 'juan marin'),
(3, 2, 14, 5, 'gdfgdfgdfg', 'jjmarin465@misena.edu.co', 'juan marin'),
(4, 2, NULL, 5, 'bffdbdf', 'jjmarijghjn465@misena.edu.co', 'fdfd'),
(5, 2, NULL, 5, 'bfdbdfbdfb', 'jjmarijghjn465@misena.edu.co', 'hghfg'),
(6, 2, NULL, 5, 'wfwfqwfqwf', 'juanjosemarinarias9@gmail.com', 'juan jose'),
(7, 4, NULL, 5, 'fdfghjklkjhgfdsasdfghjklkjhgfdsdfghjklkjhgfdsdfghj', 'juanjose@gmail.com', 'Juan'),
(8, 3, NULL, 5, 'efefef', 'juanjose@gmail.com', 'hrg'),
(9, 3, NULL, 5, 'fewfefefe', 'jj@gmail.com', 'efe'),
(10, 3, 22, 5, 'egergemgdskfmds', 'juanjose@gmail.com', 'jj Arias'),
(11, 2, 22, 5, 'njh jg g ', 'juanjose@gmail.com', 'jj Arias'),
(12, 3, 22, 5, 'hola', 'juanjose@gmail.com', ''),
(13, 3, NULL, 5, 'sdggesdgsgsdg', 'juanjose@gmail.com', 'bdfbdfbdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_pqrsftipo`
--

CREATE TABLE `t_pqrsftipo` (
  `cod_pqrsf_tipo` int(11) NOT NULL,
  `desc_pqrsf_tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `t_pqrsftipo`
--

INSERT INTO `t_pqrsftipo` (`cod_pqrsf_tipo`, `desc_pqrsf_tipo`) VALUES
(1, 'Peticion'),
(2, 'Queja'),
(3, 'Reclamo'),
(4, 'Sugerencias'),
(5, 'Felicitaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_rol`
--

CREATE TABLE `t_rol` (
  `cod_rol` int(11) NOT NULL,
  `desc_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `t_rol`
--

INSERT INTO `t_rol` (`cod_rol`, `desc_rol`) VALUES
(1, 'Administrador '),
(2, 'Campesino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

CREATE TABLE `t_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nombre` varchar(20) DEFAULT NULL,
  `usu_nombre2` varchar(30) DEFAULT NULL,
  `usu_apellido` varchar(20) DEFAULT NULL,
  `usu_correo` varchar(30) DEFAULT NULL,
  `usu_ntelefono` int(11) DEFAULT NULL,
  `usu_pass` varchar(250) NOT NULL,
  `cod_rol` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`usu_id`, `usu_nombre`, `usu_nombre2`, `usu_apellido`, `usu_correo`, `usu_ntelefono`, `usu_pass`, `cod_rol`, `id_estado`) VALUES
(3, 'Luis', 'Fernando', 'Ante', 'lfante@misena.edu.co', 10000, '$2y$10$f1dsNo1mH3394XUFnEaR/OUMIj3CiFp1UwrpbMFBv2lxfHfs0IFDS', 2, 2),
(5, 'Jhan', 'Sebastian', 'Rodriguez Ospina', 'anfredo@gmail.com', 1000, '$2y$10$yooigFj79l.lWY8eTgrUMunGXFVgPCkZKgGIvo7Q5iGef3HGSAIQC', 2, 1),
(6, 'hola', 'a', 'a', 'daniela@gmail.com', 1000, '$2y$10$7IdYBgwqUacYfDVdWhDs5OpF.BpjZL0e.iw.1gzhw0NfMCc8m7g8m', 1, 1),
(7, 'Sofía', 'Juliana', 'Perez', 'sofi@hotmail.com', 111, '$2y$10$HMSYkSZ4v/qsUbfREQZYy.IbuQ3Rai5LqAxfwBv81BMV.Cls8iCEC', 2, 2),
(8, 'Jhan', 'Sebastia', 'Rodriguez Ospina', 'sebibof@gmail.com', 1111, '$2y$10$tvNn.OKJFSCbd1IOHVf77u.JFlAYfGsfNfrbL6JHvGkkXeHHgIT/u', 1, 1),
(9, 'Juan', 'José', 'Marín Arias', 'juanjis@gmail.com', 11111, '$2y$10$PcbFcYlY.OXISvfgIGQujecgioFKBA2ovGQsxCy42ry6zS5gjag3y', 2, 1),
(10, 'Alad', 'Carandi', 'Pezcuen', 'aladinito@gmai.com', 1111100000, '$2y$10$lxgowXPhnFcCYOpRqER3ROyuNwmFvw0G0rlsuAfyg.6UBkaYn/bEu', 1, 2),
(11, 'Probando', 'Juliï¿½n', 'Mesias', 'probando@hotmail.es', 0, '$2y$10$zuHA0ZGDtHIAbeRl33GAz.U.osBcdLuQJpVacxAsxmHM3LdW7LN4.', 1, 2),
(12, 'Angi', 'Camila', 'Santacru', 'santacruzangie67@gmail.com', 123147, '$2y$10$MymfQz3bz5rB.Mf4uTyDau2klYCYYXcj.SSYypVQ0Q7/Kq58s/r9O', 2, 1),
(13, 'Angie', 'Camila2', 'admin', 'usu@gmail.com', 123654, '$2y$10$vYWgtfOHUIUm8YH/VnmmKuJpRxB0HUSzjsxNpkIWsHzorE/vMldhG', 1, 1),
(14, 'juan', 'jose', 'marin', 'jjmarin465@misena.edu.co', 45665, '$2y$10$YxQEOxWZHm0meRCs4YPDe.K.wwqZFcKnYI/CPXamq08RwBT3yEMD6', 1, 1),
(15, 'juan', 'vfbdfb', 'bdfbdfb', 'jj1@hotmail.com', 7855, '$2y$10$joE9GktY24res7ZQyocFLeHUiiAjL6.dVTS/ogORqX0XbEcUOqwPi', 2, 2),
(16, 'geggeg', 'grgreg', 'gregrgr', 'juanjosemarinarias999@gmail.co', 5665, '$2y$10$PkORwCvblAl/z49IZKc5DOVicMWSWp7NYAsJ1dtxRwz02X031QWmS', 2, 1),
(17, 'tarianaa', 'lissettea', 'ruiza', 'tariana9000@gmail.com', 1234565858, '$2y$10$XnEmCk6GfDW6bjpw7MyOp.D.5WR.a9fsuSQIZzqIcaXzkK1JVHha.', 2, 1),
(18, 'camilo', 'lissette', 'marin', 'camilo123@gmail.com', 318376, '$2y$10$8EgWSdtpForkgZA8vJvbw./o5U8FZu/tKyShRvshDktRiY4wxbRQW', 2, 1),
(19, 'dgfgdf', 'dgfdfg', 'dfgdf', 'juanjj123@gmail.com', 18168, '$2y$10$pMVd1UC5KfwjHrxg891fK.qCX7CuldjW8um2NixX85WoIXNmJ.vsC', 2, 1),
(20, 'fgdgg', 'dfgfgf', 'gdfgdf', 'dgfgdfgfd@gmail.com', 57876, '$2y$10$wuZ7bsv9nnHS81TieIVNtOo.IikSpcut26Ovwwm9DM0Cn1ZA9vO4S', 2, 1),
(21, 'vdsvdsv', 'dvsdv', 'vvsdv', 'jjmarin111@gmail.com', 447558, '$2y$10$Wxjek6/1JETsbWRzeDQSgezobYqlPEgi1DKs63ItQxUEyCwebktke', 2, 1),
(22, 'jj', 'Juan', 'Arias', 'juanjose@gmail.com', 2147483647, '$2y$10$LggkpekUtAmhQWWtojMmjuIadG2AwPYdrQ9/RvhH.G59n38r17IUK', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_estado`
--
ALTER TABLE `t_estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `t_oferta`
--
ALTER TABLE `t_oferta`
  ADD PRIMARY KEY (`id_oferta`),
  ADD KEY `usu_id` (`usu_id`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `t_pqrsf`
--
ALTER TABLE `t_pqrsf`
  ADD PRIMARY KEY (`cod_pqrsf`),
  ADD KEY `usu_id` (`usu_id`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `cod_pqrsf_tipo` (`cod_pqrsf_tipo`);

--
-- Indices de la tabla `t_pqrsftipo`
--
ALTER TABLE `t_pqrsftipo`
  ADD PRIMARY KEY (`cod_pqrsf_tipo`);

--
-- Indices de la tabla `t_rol`
--
ALTER TABLE `t_rol`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indices de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `cod_rol` (`cod_rol`),
  ADD KEY `id_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_estado`
--
ALTER TABLE `t_estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `t_oferta`
--
ALTER TABLE `t_oferta`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `t_pqrsf`
--
ALTER TABLE `t_pqrsf`
  MODIFY `cod_pqrsf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `t_pqrsftipo`
--
ALTER TABLE `t_pqrsftipo`
  MODIFY `cod_pqrsf_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_rol`
--
ALTER TABLE `t_rol`
  MODIFY `cod_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_oferta`
--
ALTER TABLE `t_oferta`
  ADD CONSTRAINT `t_oferta_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `t_estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_oferta_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `t_usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `t_pqrsf`
--
ALTER TABLE `t_pqrsf`
  ADD CONSTRAINT `t_pqrsf_ibfk_1` FOREIGN KEY (`cod_pqrsf_tipo`) REFERENCES `t_pqrsftipo` (`cod_pqrsf_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pqrsf_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `t_estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
