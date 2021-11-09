-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2021 às 20:12
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemadecontrole`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `cod` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `quantity` float NOT NULL,
  `min_quantity` float NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `cod`, `name`, `price`, `quantity`, `min_quantity`, `data`) VALUES
(1, 123456, 'bimbinha teste', 19.5, 8, 10, '0000-00-00'),
(2, 1155, 'produtoteste', 25, 13, 10, NULL),
(3, 2525, 'malu', 12, 18, 10, NULL),
(4, 2563, 'MELMALU', 12, 17, 10, '2021-11-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_number` int(11) NOT NULL,
  `user_pass` varchar(32) NOT NULL,
  `user_token` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_number`, `user_pass`, `user_token`) VALUES
(1, 'filipe', 2, '12345', '20610d7806719460340e5d26ae1d7f4a'),
(2, 'valerio', 2, '123456', '20610d7806719460340e5d26ae1d7f4a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `nomeprod` varchar(50) NOT NULL,
  `priceunidade` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `datavenda` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `id_prod`, `nomeprod`, `priceunidade`, `quantidade`, `datavenda`) VALUES
(1, 1, 'produto bimbinha', 12, 2, '2021-10-30'),
(3, 2, 'produtoteste', 25, 5, '0000-00-00'),
(4, 2, 'produtoteste', 25, 7, '2021-11-07'),
(5, 3, 'malu', 12, 10, '2021-11-08'),
(6, 3, 'malu', 12, 5, '2021-11-08'),
(7, 4, 'MELMALU', 12, 7, '2021-11-08'),
(8, 4, 'MELMALU', 12, 4, '2021-11-08');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
