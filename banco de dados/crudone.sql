-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Abr-2022 às 15:51
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crudone`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientesone`
--

DROP TABLE IF EXISTS `clientesone`;
CREATE TABLE IF NOT EXISTS `clientesone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `animal` varchar(255) NOT NULL,
  `diagnostico` varchar(255) NOT NULL,
  `medicamento` varchar(255) NOT NULL,
  `vacina` varchar(255) NOT NULL,
  `tipovacina` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientesone`
--

INSERT INTO `clientesone` (`id`, `animal`, `diagnostico`, `medicamento`, `vacina`, `tipovacina`) VALUES
(4, 'Dudete', 'Febre ', 'Dipirona   ', 'Sim ', 'Gripe '),
(5, 'Belinha ', 'Febre', 'AAS', 'Sim', 'Gripe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
