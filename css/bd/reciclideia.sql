-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2022 às 03:17
-- Versão do servidor: 8.0.30
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reciclideia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `usuario`, `senha`, `email`, `nome`) VALUES
(1, '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(2, 'george', '596f5c6c924d03d35091ee33957b7d2d', 'valentegeorge71@gmail.com', 'george'),
(3, 'wendelparmelo', '4ab3165af1d3509b2005f9ee310dc8d7', 'wendelparmelo@gmail.com', 'Wendel'),
(4, 'pastoralana', '185164ee3e239645bf114f0fd7334469', 'lanita@gmail.com', 'lana del rey'),
(7, 'amandar', '3a04c23f48e0c119f0372e55f7dbc4d2', 'deusadacriacao@gmail.com', 'Amanda'),
(8, 'sarahvitoria', '0cb08eb00d691df7cb2a3f5eecd17502', 'sarahvitoria@gmail.com', 'Sarah Vitória'),
(9, 'testando', 'd149e9e071bf622dc22a4b67b08426ad', 'teste', 'teste'),
(10, 'georgee', 'd2397517210824d39cd5c198c076a041', 'george', 'george'),
(11, 'manoraissa', '827ccb0eea8a706c4c34a16891f84e7b', 'raissa@gmail.com', 'Raíssa'),
(12, 'manoemilly', '5b4d762427d4dff75f6e5885cb380080', 'emilly@gmail.com', 'Emilly');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
