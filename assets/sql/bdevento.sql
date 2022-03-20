-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2022 a las 05:33:59
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdevento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `ID_CONTACTO` int(11) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `fechaDisponible` date NOT NULL,
  `ID_MOTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`ID_CONTACTO`, `cedula`, `nombre`, `correo`, `telefono`, `fechaDisponible`, `ID_MOTIVO`) VALUES
(1, '0941214082', 'Billy', 'alvearbilly@gmail.com', '0994115076', '2022-03-25', 1),
(2, '0912345678', 'Andres', 'andres@gmail.com', '0991234567', '2022-03-20', 2),
(3, '0912345677', 'Renan', 'renan@gmail.com', '0991234566', '2022-04-21', 3),
(4, '0991235698', 'Fernando', 'fer@gmail.com', '0991243658', '2022-03-26', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `tipoPregunta` varchar(50) NOT NULL,
  `pregunta` varchar(50) NOT NULL,
  `respuesta` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`nombre`, `apellidos`, `categoria`, `tipoPregunta`, `pregunta`, `respuesta`, `id`) VALUES
('edd', 'dddddd', 'Categorica', 'Espacio', 'sd', 'dd', 7),
('CVCV', 'dddddd', 'Informativa', 'Precio', 'eeeeeeeeeeeeee', 'eeeeee', 8),
('holi', 'matamoros', 'Seleccione', 'Espacio', 'uwuuwux2', 'yametekudasai', 9),
('w', 'w', 'Categorica', 'Precio', 'wdqwfrwf', 'dqwdrqwrd', 0),
('sd', 'sda', 'Seleccione', 'Espacio', '', '', 0),
('w', 'dwd', 'Seleccione', '', '', '', 0),
('ewf', 'erw', 'Seleccione', '', '', '', 0),
('sac', 'cas', 'Seleccione', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas_dispo`
--

CREATE TABLE `mesas_dispo` (
  `id_mesas` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cant_perxmesas` int(2) NOT NULL,
  `detalles` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesas_dispo`
--

INSERT INTO `mesas_dispo` (`id_mesas`, `nombre`, `cant_perxmesas`, `detalles`, `descripcion`) VALUES
(1, 'CABARET', 20, 'Estilo circular de mesas', 'xxx'),
(2, 'TEATRO', 1, 'Mesas y sillas unitarias  ', 'xxxx'),
(3, 'Forma de U', 5, 'Se coloca las mesas en forma de U', 'Se coloca las mesas en forma de U'),
(4, 'BANQUETE', 8, 'Se coloca mesas circulares', 'Se coloca mesas circulares'),
(5, 'SIN DISPOSICION', 1, 'Sin una disposion ideal', 'Sin una disposion ideal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas_dispoxsalon`
--

CREATE TABLE `mesas_dispoxsalon` (
  `id_disxsa` int(10) NOT NULL,
  `id_salon` int(11) NOT NULL,
  `id_mesas_dispo` int(10) NOT NULL,
  `cantmax` int(4) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesas_dispoxsalon`
--

INSERT INTO `mesas_dispoxsalon` (`id_disxsa`, `id_salon`, `id_mesas_dispo`, `cantmax`, `descripcion`) VALUES
(1, 3, 3, 5, 'Sin una disposion ideal'),
(4, 2, 2, 88, '565');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo`
--

CREATE TABLE `motivo` (
  `ID_MOTIVO` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `motivo`
--

INSERT INTO `motivo` (`ID_MOTIVO`, `descripcion`) VALUES
(1, 'Cotización'),
(2, 'Reconocimiento'),
(3, 'Trabajo'),
(4, 'Documentación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `ID_reservacion` int(11) NOT NULL,
  `id_salon` int(11) NOT NULL,
  `Fecha_evento` date NOT NULL,
  `cantmaxPer` int(11) NOT NULL,
  `Servicios` varchar(500) NOT NULL,
  `ninios` varchar(10) NOT NULL,
  `sugerencia` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`ID_reservacion`, `id_salon`, `Fecha_evento`, `cantmaxPer`, `Servicios`, `ninios`, `sugerencia`, `id_user`) VALUES
(2, 3, '2022-03-31', 100, 'eded', 'No', 'wqdqwd', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `ID_Salon` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Detalles` varchar(200) NOT NULL,
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`ID_Salon`, `Nombre`, `Detalles`, `Descripcion`) VALUES
(1, 'Victoria', 'Salon ideal para bodas debido a su estilo arquitectonico', 'Salon Elegante'),
(2, 'Bristtol', 'Salon x que esta situado en el piso x, en el edificio  x de la calle x       ', 'SALON CON VISTA  A LA VENTANA     '),
(3, 'Picaddily', 'Salon x que esta situado en el piso x, en el edificio  x de la calle x       ', 'Salon Premiunhn'),
(4, 'CABA', 'Salon ideal para bodas debido a su estilo arquitectonico', 'Salon rustico'),
(5, 'Vista', 'Salon ideal para bodas debido a su estilo arquitectonico', 'Salon con vista a la ciudad  ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciocot`
--

CREATE TABLE `serviciocot` (
  `ID_COTIZACION` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `cantidadPersona` int(11) NOT NULL,
  `fechaEvento` date NOT NULL,
  `tipoSalonEvento` varchar(20) NOT NULL,
  `tipoServicioEvento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `serviciocot`
--

INSERT INTO `serviciocot` (`ID_COTIZACION`, `nombre`, `correo`, `cantidadPersona`, `fechaEvento`, `tipoSalonEvento`, `tipoServicioEvento`) VALUES
(6, 'Andres', 'andres@hotmail.com', 13, '2022-02-28', 'Bristol', 'Iluminación'),
(7, 'Domenica', 'andres@hotmail.com', 39, '2022-02-26', 'Picaddily', 'Audio y Video'),
(8, 'Domenica', 'andres@hotmail.com', 1, '2022-02-26', 'Picaddily', 'Decoración,Buffet,Iluminación'),
(10, 'Natasha', 'natasha@hotmail.com', 6, '2022-02-26', 'Bristol', 'Decoración,Audio y Video');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `birthdate`, `nationality`, `password`) VALUES
(5, 'qwer', 'sdfg@sdfg.sdfg', '2022-02-03', 'Colombiano', 'sdfg'),
(6, 'ALGUIEN', 'ALGUIEN@ALGUIEN.ALGUIEN', '2022-02-11', 'Ecuatoriano', 'ALGUIEN'),
(9, 'aaaa', 'aaa@aaa', '2022-02-02', 'Ecuatoriano', 'holi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mesas_dispo`
--
ALTER TABLE `mesas_dispo`
  ADD PRIMARY KEY (`id_mesas`);

--
-- Indices de la tabla `mesas_dispoxsalon`
--
ALTER TABLE `mesas_dispoxsalon`
  ADD PRIMARY KEY (`id_disxsa`),
  ADD KEY `mesas_dispoxsalon_ibfk_1` (`id_salon`),
  ADD KEY `mesas_dispoxsalon_ibfk_2` (`id_mesas_dispo`);

--
-- Indices de la tabla `motivo`
--
ALTER TABLE `motivo`
  ADD PRIMARY KEY (`ID_MOTIVO`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`ID_reservacion`),
  ADD KEY `id_salon` (`id_salon`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`ID_Salon`);

--
-- Indices de la tabla `serviciocot`
--
ALTER TABLE `serviciocot`
  ADD PRIMARY KEY (`ID_COTIZACION`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mesas_dispo`
--
ALTER TABLE `mesas_dispo`
  MODIFY `id_mesas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `mesas_dispoxsalon`
--
ALTER TABLE `mesas_dispoxsalon`
  MODIFY `id_disxsa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `ID_reservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `ID_Salon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `serviciocot`
--
ALTER TABLE `serviciocot`
  MODIFY `ID_COTIZACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mesas_dispoxsalon`
--
ALTER TABLE `mesas_dispoxsalon`
  ADD CONSTRAINT `mesas_dispoxsalon_ibfk_1` FOREIGN KEY (`id_salon`) REFERENCES `salon` (`ID_Salon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mesas_dispoxsalon_ibfk_2` FOREIGN KEY (`id_mesas_dispo`) REFERENCES `mesas_dispo` (`id_mesas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_salon`) REFERENCES `salon` (`ID_Salon`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
