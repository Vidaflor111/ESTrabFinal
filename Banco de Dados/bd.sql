-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Mar-2021 às 20:01
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `CPF` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Nome`, `Email`, `Senha`, `CPF`) VALUES
('Ivone Ferreira', 'ivone-lms@hotmail.com', 'vidaflior', '213122 '),
('Jauro Ferreira', 'ivone-lms@hotmail.com', '213', '213122 ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `CPFcliente` text NOT NULL,
  `Data` date NOT NULL,
  `CodProduto` text NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `CodCompra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`CPFcliente`, `Data`, `CodProduto`, `Quantidade`, `CodCompra`) VALUES
('1244-03-21', '0000-00-00', '1', 421, ''),
('1244-03-21', '0000-00-00', '1', 421, ''),
('421', '2021-03-04', '111', 1, ''),
('213', '2021-03-05', '111', 3, '1 ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `CPF` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`Nome`, `Email`, `Senha`, `CPF`) VALUES
('Vidaflor Ferreira', 'vidaflor.lms77@gmail.com', 'vidaflor', '213 '),
('', '', '', ' ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `NomeProd` varchar(50) NOT NULL,
  `Valor` decimal(10,1) NOT NULL,
  `CodProd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`NomeProd`, `Valor`, `CodProd`) VALUES
('carr', '3333.0', '2 ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
