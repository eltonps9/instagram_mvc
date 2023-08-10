-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Ago-2023 às 03:53
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `instagram`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(150) NOT NULL,
  `post` varchar(150) NOT NULL,
  `id_coment` varchar(150) DEFAULT NULL,
  `id_like` varchar(150) DEFAULT NULL,
  `date` varchar(100) NOT NULL,
  `hours` varchar(13) NOT NULL,
  `legenda` varchar(150) DEFAULT NULL,
  `id_user` varchar(100) NOT NULL,
  `name_usuario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `post`, `id_coment`, `id_like`, `date`, `hours`, `legenda`, `id_user`, `name_usuario`) VALUES
(79, 'ff3c4334f47095ab93ecc3c95559ba10_100_5508.JPG', NULL, NULL, '24/07/23', '', '  \r\n                                   \r\n                    Escreva uma legenda...\r\n                ', '37', 'Elton PS'),
(80, '329baa8900a0549dd1b2a85b7dd68308_100_5484.JPG', NULL, NULL, '24/07/23', '', '  \r\n                                   \r\n                    Escreva uma legenda...\r\n                ', '37', 'Elton PS'),
(81, '6884305dece84af2bec299c042d2154d_pablo tawan.jpg', NULL, NULL, '24/07/23', '', '  \r\n                                   \r\n                    Escreva uma legenda...\r\n                ', '37', 'Elton PS'),
(82, '0ff969ded676ce2a7b1a429427172fa8_100E0814.JPG', NULL, NULL, '24/07/23', '', '  \r\n                                   \r\n                    Escreva uma legenda...\r\n                ', '36', 'kelly lobo'),
(83, '26e4f749e82cd43fe16668719c0bb3b6_100_0263.JPG', NULL, NULL, '24/07/23', '', 'la ele', '36', 'kelly lobo'),
(84, 'fef04097e8e60fe39300f99e9fc1afd4_100E0317.JPG', NULL, NULL, '26/07/23', '', 'sxdf\\sxdfxdfa\\zxd', '37', 'Elton PS'),
(85, '802f13ecdc0f4e7cd6f02fa8fc1dca18_100E0305.JPG', NULL, NULL, '26/07/23', '', 'sdf\\asdf\\sd', '37', 'Elton PS'),
(86, 'fe9d836955dd553895ac66a86308ab4d_100_0262.JPG', NULL, NULL, '26/07/23', '', 'rtghdfghsdfg', '37', 'Elton PS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `nomeUsuario` varchar(150) NOT NULL,
  `data` date NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `foto`, `senha`, `nomeUsuario`, `data`, `token`) VALUES
(34, 'eltonps', 'eltonps19@gmail.com', 'avatar.png', '123456', 'elton passos', '2030-06-23', '?̷?d\"WE?????4?'),
(36, 'kelly@', 'kelly@gmail.com', 'avatar.png', '123456', 'kelly lobo', '2002-07-23', 'c???1?_+??G?;t='),
(37, 'eltondev.23', 'elton@gmail.com', 'avatar.png', '123456', 'Elton PS', '2002-07-23', '??ۦ???\0H?7˥?');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
