-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 05:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdevento`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
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
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`ID_CONTACTO`, `cedula`, `nombre`, `correo`, `telefono`, `fechaDisponible`, `ID_MOTIVO`) VALUES
(1, '0941214082', 'Billy', 'alvearbilly@gmail.com', '0994115076', '2022-03-25', 1),
(2, '0912345678', 'Andres', 'andres@gmail.com', '0991234567', '2022-03-20', 2),
(3, '0912345677', 'Renan', 'renan@gmail.com', '0991234566', '2022-04-21', 3),
(4, '0991235698', 'Fernando', 'fer@gmail.com', '0991243658', '2022-03-26', 4),
(9, '', '', '', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `formulario`
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
-- Dumping data for table `formulario`
--

INSERT INTO `formulario` (`nombre`, `apellidos`, `categoria`, `tipoPregunta`, `pregunta`, `respuesta`, `id`) VALUES
('edd', 'dddddd', 'Categorica', 'Espacio', 'sd', 'dd', 7),
('CVCV', 'dddddd', 'Informativa', 'Precio', 'eeeeeeeeeeeeee', 'eeeeee', 8),
('holi', 'matamoros', 'Seleccione', 'Espacio', 'uwuuwux2', 'yametekudasai', 9);

-- --------------------------------------------------------

--
-- Table structure for table `motivo`
--

CREATE TABLE `motivo` (
  `ID_MOTIVO` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motivo`
--

INSERT INTO `motivo` (`ID_MOTIVO`, `descripcion`) VALUES
(1, 'Cotización'),
(2, 'Reconocimiento'),
(3, 'Trabajo'),
(4, 'Documentación');

-- --------------------------------------------------------

--
-- Table structure for table `serviciocot`
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
-- Dumping data for table `serviciocot`
--

INSERT INTO `serviciocot` (`ID_COTIZACION`, `nombre`, `correo`, `cantidadPersona`, `fechaEvento`, `tipoSalonEvento`, `tipoServicioEvento`) VALUES
(6, 'Andres', 'andres@hotmail.com', 13, '2022-02-28', 'Bristol', 'Iluminación'),
(7, 'Domenica', 'andres@hotmail.com', 39, '2022-02-26', 'Picaddily', 'Audio y Video'),
(8, 'Domenica', 'andres@hotmail.com', 1, '2022-02-26', 'Picaddily', 'Decoración,Buffet,Iluminación'),
(10, 'Natasha', 'natasha@hotmail.com', 6, '2022-02-26', 'Bristol', 'Decoración,Audio y Video');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `birthday`, `nationality`, `password`) VALUES
(5, 'qwer', 'sdfg@sdfg.sdfg', '2022-02-03', 'Colombiano', 'sdfg'),
(6, 'ALGUIEN', 'ALGUIEN@ALGUIEN.ALGUIEN', '2022-02-11', 'Ecuatoriano', 'ALGUIEN'),
(22, 'asdfasdfad', 'asdf@asdf.asdfa', '2022-03-03', 'Per&uacute;', '1234qwQW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID_CONTACTO`),
  ADD KEY `ID_MOTIVO` (`ID_MOTIVO`) USING BTREE;

--
-- Indexes for table `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motivo`
--
ALTER TABLE `motivo`
  ADD PRIMARY KEY (`ID_MOTIVO`);

--
-- Indexes for table `serviciocot`
--
ALTER TABLE `serviciocot`
  ADD PRIMARY KEY (`ID_COTIZACION`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID_CONTACTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `serviciocot`
--
ALTER TABLE `serviciocot`
  MODIFY `ID_COTIZACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
