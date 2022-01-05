-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 10:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mecanicos`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `placa` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `marca` varchar(25) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `anio` year(4) NOT NULL,
  `color` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`placa`, `nombre`, `apellidos`, `marca`, `modelo`, `anio`, `color`) VALUES
('AAA-123', 'Arturo', 'Perez Capuano', 'BMW', 'BMW serie 3', 2020, 'Rojo'),
('AAA-124', 'Carlos', 'Hernandez Hernandez', 'BMW', 'BMW serie 4', 2020, 'Negro');

-- --------------------------------------------------------

--
-- Table structure for table `garantia`
--

CREATE TABLE `garantia` (
  `folio` varchar(25) NOT NULL,
  `igarantia` date NOT NULL,
  `fgarantia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `garantia`
--

INSERT INTO `garantia` (`folio`, `igarantia`, `fgarantia`) VALUES
('00000001', '2021-11-21', '2021-12-13'),
('00000002', '2021-11-21', '2021-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `reparacion`
--

CREATE TABLE `reparacion` (
  `folio` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `costo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reparacion`
--

INSERT INTO `reparacion` (`folio`, `tipo`, `descripcion`, `costo`) VALUES
('00000001', 'Por daños', 'dejo de funcionar', 1500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
