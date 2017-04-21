-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21/04/2017 às 00:26
-- Versão do servidor: 5.7.17-0ubuntu0.16.04.2
-- Versão do PHP: 7.1.4-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kanji`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `simbolo`
--

CREATE TABLE `simbolo` (
  `id` int(2) UNSIGNED NOT NULL,
  `ideograma` char(1) NOT NULL,
  `definitivo` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `simbolo`
--

INSERT INTO `simbolo` (`id`, `ideograma`, `definitivo`) VALUES
(1, '光', 1),
(2, '闇', 1),
(3, '水', 1),
(4, '炎', 1),
(5, '地', 1),
(6, '風', 1),
(7, '木', 1),
(8, '神', 1),
(9, '精', 1),
(10, '血', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `simbolo`
--
ALTER TABLE `simbolo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `simbolo` (`ideograma`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `simbolo`
--
ALTER TABLE `simbolo`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
