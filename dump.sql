-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 19/10/2017 às 11:52
-- Versão do servidor: 5.7.19-0ubuntu0.16.04.1
-- Versão do PHP: 7.2.0RC3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `noticias`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `loginAttempts`
--

CREATE TABLE `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `loginAttempts`
--

INSERT INTO `loginAttempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
('127.0.0.1', 1, '2017-10-18 12:05:45', 'andrelramos', 1),
('127.0.0.1', 3, '2017-10-18 12:16:22', 'teste', 2),
('127.0.0.1', 1, '2017-10-18 12:16:40', 'teste2', 3),
('127.0.0.1', 3, '2017-10-18 12:29:46', 'abc2', 4),
('127.0.0.1', 3, '2017-10-18 12:29:41', 'wadaw', 5),
('127.0.0.1', 2, '2017-10-18 12:30:36', 'daw', 6),
('::1', 1, '2017-10-19 11:16:30', 'teste', 7),
('::1', 1, '2017-10-19 09:36:32', 'abc', 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `members`
--

CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `verified`, `mod_timestamp`) VALUES
('145914466959e75f6512a7e', 'andrelramos', '$2y$10$glS903iWG2e.dTQXMC5/5uWWSU9eqCQGOtTrIqc95STso1hHCUCAi', 'adwdw@gmail.com', 1, '2017-10-18 14:05:32'),
('152273383259e76240e95e1', 'teste2', '$2y$10$KT61dVgvmf5r55c2owo.c.8B1RgQUBXyZRPeQ01n8EtXSmsc2sQkC', 'teste2@gmail.com', 1, '2017-10-18 14:16:33'),
('162153132459e765125441f', 'abc2', '$2y$10$K7WNvgp2oqY1zNojFnjT2uO1ZhOWqU6KYGF3lkqzOEXJjs.xyKpjG', 'abc2@gmail.com', 1, '2017-10-18 14:28:34'),
('17233395059e7643d8db6e', 'abc', '$2y$10$DV6GlARPt6N/lc78drcAGeQrZw.2PeTFLcMgLozaODmth0VopovZ.', 'abc@abc.com', 1, '2017-10-18 14:25:01'),
('180874862259e7621bca71e', 'testete tes', '$2y$10$VpWLwjdfz4b5or.1Kymyneat2rlwDMS6Q.wQw6cecVciET7nZp/6i', 'teste@gmail.com', 1, '2017-10-18 14:15:55');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(75) NOT NULL,
  `texto` longtext NOT NULL,
  `username` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `username`) VALUES
(1, 'teste', 'teste2', NULL),
(2, 'The Last', 'The <b>Last<b> of us make a new ...', NULL),
(3, 'Vamos lÃ¡', '<p>Cruza os braÃ§os no <strong class="ql-size-huge" style="color: rgb(230, 0, 0);">OMBRINHO</strong></p>', 'abc'),
(4, 'testee', '<p>dawwd</p>', 'abc'),
(5, 'aa', '<p>aa</p>', 'abc'),
(6, 'dd', '<p>adwwad</p>', 'abc'),
(7, 'teste', '<p>wadawd</p>', 'abc'),
(8, 'awdawd', '<p>adwdw</p>', 'abc'),
(9, 'dwa', '<p><br></p>', 'abc'),
(10, 'waw', '<p><br></p>', 'abc'),
(11, 'dawwad', '<p><br></p>', 'abc'),
(12, 'ddd', '<p><br></p>', 'abc'),
(13, 'dwaawd', '<p>fsafaws</p>', 'abc');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `loginAttempts`
--
ALTER TABLE `loginAttempts`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `loginAttempts`
--
ALTER TABLE `loginAttempts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
