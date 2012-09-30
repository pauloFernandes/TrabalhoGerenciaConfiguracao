-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 19/09/2012 às 22h56min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_hospitais`
--

CREATE TABLE IF NOT EXISTS `tbl_hospitais` (
  `status` varchar(255) DEFAULT NULL,
  `razao_social` varchar(255) DEFAULT NULL,
  `cnpj` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `id_hospitais` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_hospitais`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tbl_hospitais`
--

INSERT INTO `tbl_hospitais` (`status`, `razao_social`, `cnpj`, `endereco`, `telefone`, `id_hospitais`) VALUES
('Ativado', 'Santa Helena', '020.981.387/0001-11', 'Avenida Doutor Antônio Chagas Diniz, 666,', '(31) 3333-3333', 1),
('Ativado', 'Hospital da baleia', '14984919819', 'Av Jose faria da rocha, 486', '3587-8648', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_profissionais`
--

CREATE TABLE IF NOT EXISTS `tbl_profissionais` (
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `horario` varchar(255) DEFAULT NULL,
  `id_profissionais` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_profissionais`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tbl_profissionais`
--

INSERT INTO `tbl_profissionais` (`nome`, `cpf`, `cargo`, `horario`, `id_profissionais`) VALUES
('Mario Jose', '123.456.789-09', 'Pediatra', 'Manhã', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
