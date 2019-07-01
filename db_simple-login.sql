-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Versão do servidor: 5.5.48-37.8
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_simple-login.sql`
--
CREATE DATABASE IF NOT EXISTS `db_simple-login` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_simple-login`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE IF NOT EXISTS `consulta` (
  `ID_CONSULTA` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `TELEFONE` varchar(13) NOT NULL,
  `TEL_SECUNDARIO` varchar(13) DEFAULT NULL,
  `ENDERECO` varchar(250) NOT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `DATA_NASC` date NOT NULL,
  `ESPECIALIDADE` int(11) DEFAULT NULL,
  `EXAME` int(11) DEFAULT NULL,
  `TIPO_CONSULTA` int(11) NOT NULL,
  `CONVENIO` varchar(50) DEFAULT NULL,
  `CARTEIRA` varchar(50) DEFAULT NULL,
  `VALIDADE` varchar(20) DEFAULT NULL,
  `OBSERVACAO` varchar(500) DEFAULT NULL,
  `STATUS` char(1) NOT NULL,
  `DATA_MARCACAO` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `ID_CONTATO` int(11) NOT NULL,
  `CONSULTA` int(11) NOT NULL,
  `USUARIO` int(11) NOT NULL,
  `HORARIO_CONTATO` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

CREATE TABLE IF NOT EXISTS `especialidades` (
  `ID_ESPECIALIDADE` int(11) NOT NULL,
  `NOME_ESPECIALIDADE` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `especialidades`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `exames`
--

CREATE TABLE IF NOT EXISTS `exames` (
  `ID_EXAME` int(11) NOT NULL,
  `NOME_EXAME` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `exames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_consulta`
--

CREATE TABLE IF NOT EXISTS `tipo_consulta` (
  `ID_TIPO_CONSULTA` int(11) NOT NULL,
  `NOME_TIPO_CONSULTA` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_consulta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `NOME_USUARIO` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LOGIN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SENHA` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
