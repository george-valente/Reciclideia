-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Nov-2022 às 15:34
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
-- Banco de dados: `bd_chat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagens`
--

DROP TABLE IF EXISTS `tb_mensagens`;
CREATE TABLE IF NOT EXISTS `tb_mensagens` (
  `id_mensagem` int(11) NOT NULL AUTO_INCREMENT,
  `de` varchar(200) NOT NULL,
  `para` varchar(200) NOT NULL,
  `mensagem` varchar(200) NOT NULL,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_mensagens`
--

INSERT INTO `tb_mensagens` (`id_mensagem`, `de`, `para`, `mensagem`) VALUES
(15, 'Paulo', '', 'Conversa via chat para o grupo'),
(14, 'Paulo', 'Amanda', 'teste4'),
(13, 'Amanda', 'Paulo', 'teste3'),
(12, 'Paulo', 'Amanda', 'Teste'),
(11, 'Amanda', 'Paulo', 'Teste2'),
(10, 'Paulo', 'Amanda', 'Teste'),
(16, 'Paulo', 'Amanda', 'ggfghghghgh');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(10) NOT NULL,
  `data_logon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `data_logon`) VALUES
(18, 'Amanda', '2022-11-27 15:13:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
