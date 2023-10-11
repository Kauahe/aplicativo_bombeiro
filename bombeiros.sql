-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2023 às 17:16
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bombeiros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `senha` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`nome`, `email`, `cpf`, `id`, `senha`) VALUES
('Kauã H de mira', 'kauamira2512@gmail', '05605705896', 42, '2512'),
('pedro', 'pedro@gmail.com', '1651121.', 44, '4524');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastropac`
--

CREATE TABLE `cadastropac` (
  `data_ocr` date NOT NULL,
  `nome_hospital` varchar(45) NOT NULL,
  `nome_pac` varchar(45) NOT NULL,
  `idade_pac` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone_pac` varchar(14) NOT NULL,
  `nome_acomp` varchar(45) NOT NULL,
  `idade_acomp` int(11) NOT NULL,
  `local_ocr` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastropac`
--

INSERT INTO `cadastropac` (`data_ocr`, `nome_hospital`, `nome_pac`, `idade_pac`, `cpf`, `telefone_pac`, `nome_acomp`, `idade_acomp`, `local_ocr`) VALUES
('2023-01-20', 'joao pessoa', 'Evelin', 17, '78965412303', '123654789', 'Kauã', 18, 'Rua Jarivatuba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `glasgow_menor`
--

CREATE TABLE `glasgow_menor` (
  `cpf` varchar(14) NOT NULL,
  `abertura` varchar(45) NOT NULL,
  `resposta_verbal` varchar(45) NOT NULL,
  `respoosta_motora` varchar(45) NOT NULL,
  `soma_GSC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastropac`
--
ALTER TABLE `cadastropac`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `glasgow_menor`
--
ALTER TABLE `glasgow_menor`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;