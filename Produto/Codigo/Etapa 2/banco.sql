-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/10/2012 às 23h23min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de Dados: `waguin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_atendimentos`
--

CREATE TABLE IF NOT EXISTS `tbl_atendimentos` (
  `atendimento_fkPaciente` varchar(255) DEFAULT NULL,
  `atendimento_data` varchar(255) DEFAULT NULL,
  `atendimento_motivo` varchar(255) DEFAULT NULL,
  `atendimento_providencias` varchar(255) DEFAULT NULL,
  `atendimento_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`atendimento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `tbl_atendimentos`
--

INSERT INTO `tbl_atendimentos` (`atendimento_fkPaciente`, `atendimento_data`, `atendimento_motivo`, `atendimento_providencias`, `atendimento_id`) VALUES
('16', '22/10/2012', 'Nauseas', 'Injetar Veneno na veia', 8),
('18', '22/10/2012', 'Nauseas', 'Injetar Veneno na veia', 9),
('17', '10a', '11b', '12c', 11),
('17', '27/10/2012', 'Cortou com cerol', 'Tirar a linha 2', 12),
('16', '30/09/2012', 'Pressao Alta', 'Colocar no soro', 13),
('17', '17/10/2012', 'CachaÃ§a', 'Soro na veia', 14),
('18', '19/10/2012', 'Cortou com faca', 'fechar a ferida', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_atendimentosmatusados`
--

CREATE TABLE IF NOT EXISTS `tbl_atendimentosmatusados` (
  `atendimentoMatUsados_atendimento` varchar(255) DEFAULT NULL,
  `atendimentoMatUsados_fkmaterial` varchar(255) DEFAULT NULL,
  `atendimentoMatUsados_quantidade` varchar(255) DEFAULT NULL,
  `atendimentoMatUsados_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`atendimentoMatUsados_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `tbl_atendimentosmatusados`
--

INSERT INTO `tbl_atendimentosmatusados` (`atendimentoMatUsados_atendimento`, `atendimentoMatUsados_fkmaterial`, `atendimentoMatUsados_quantidade`, `atendimentoMatUsados_id`) VALUES
('8', '3', '1', 2),
('9', '3', '2', 3),
('10', '3', '1', 4),
('11', '3', '1', 5),
('9', '4', '2', 8),
('13', '4', '4', 9),
('14', '3', '4', 10),
('15', '4', '1', 12),
('15', '2', '2', 13),
('', '4', '3', 14),
('', '2', '5', 15),
('', '3', '1', 16),
('12', '2', '3', 18),
('12', '5', '3', 19),
('12', '4', '2', 20),
('', '4', '5', 21);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `tbl_hospitais`
--

INSERT INTO `tbl_hospitais` (`status`, `razao_social`, `cnpj`, `endereco`, `telefone`, `id_hospitais`) VALUES
('Ativado', 'Hospital da baleia', '14984919819', 'Av Jose faria da rocha, 486', '3587-8648', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_materiais`
--

CREATE TABLE IF NOT EXISTS `tbl_materiais` (
  `material_nome` varchar(255) DEFAULT NULL,
  `material_data` varchar(255) DEFAULT NULL,
  `material_quantidade` varchar(255) DEFAULT NULL,
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`material_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tbl_materiais`
--

INSERT INTO `tbl_materiais` (`material_nome`, `material_data`, `material_quantidade`, `material_id`) VALUES
('Botinas nÂº 37', '17/10/2012', '27', 2),
('Pacotes de AlgodÃ£o', '09/10/2012', '9', 3),
('Agulha n 3', '09/10/2012', '70', 4),
('InjeÃ§Ã£o', '20/10/2012', '167', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_pacientes`
--

CREATE TABLE IF NOT EXISTS `tbl_pacientes` (
  `paciente_nome` varchar(255) DEFAULT NULL,
  `paciente_categoria` varchar(255) DEFAULT NULL,
  `paciente_datanascimento` varchar(255) DEFAULT NULL,
  `paciente_id` int(11) NOT NULL AUTO_INCREMENT,
  `paciente_cpf` varchar(255) DEFAULT NULL,
  `paciente_endereco` varchar(255) DEFAULT NULL,
  `paciente_telefone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`paciente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `tbl_pacientes`
--

INSERT INTO `tbl_pacientes` (`paciente_nome`, `paciente_categoria`, `paciente_datanascimento`, `paciente_id`, `paciente_cpf`, `paciente_endereco`, `paciente_telefone`) VALUES
('Petronio Lopes', 'Aluno', '14/01/1980', 16, '123.456.789-09', 'Av Jose Faria da Rocha,1876', '(31) 8885-8896'),
('Marivaldo Gomes', 'Professor', '14/01/1980', 17, '123.456.789-09', 'Av Jose Faria da Rocha,1876', '(31) 8885-8896'),
('Janaina Pereira', 'Aluno', '14/01/1980', 18, '123.456.789-09', 'Av Jose Faria da Rocha,1876', '(31) 8885-8896');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tbl_profissionais`
--

INSERT INTO `tbl_profissionais` (`nome`, `cpf`, `cargo`, `horario`, `id_profissionais`) VALUES
('Jose Almeida Gomes 2', '12345678909 2', 'Mano.brista 2', 'Manha 2', 2);
