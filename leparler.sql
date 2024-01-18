-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/01/2024 às 21:53
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `leparler`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `resenha`
--

CREATE TABLE `resenha` (
  `resenha_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `critica` int(1) NOT NULL,
  `imagem` blob NOT NULL,
  `pessoa` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `resenha`
--

INSERT INTO `resenha` (`resenha_id`, `data`, `texto`, `titulo`, `critica`, `imagem`, `pessoa`, `categoria`) VALUES
(2, '2024-01-18', 'teste', 'Teste', 5, 0x6272656e646f752e706e67, 'brendou', 'Filme');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `resenha`
--
ALTER TABLE `resenha`
  ADD PRIMARY KEY (`resenha_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `resenha`
--
ALTER TABLE `resenha`
  MODIFY `resenha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
