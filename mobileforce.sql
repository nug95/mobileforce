-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2017 às 19:20
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileforce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ios`
--

CREATE TABLE `ios` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `versao` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ios`
--

INSERT INTO `ios` (`id`, `nome`, `versao`) VALUES
(1, 'iOS', '10.3.2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `tipo` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `tipo`) VALUES
(1, 'NuG', 'nuno123', 2),
(2, 'Joo', 'joana', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`id`, `nome`) VALUES
(1, 'Apple');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `parente` int(1) NOT NULL DEFAULT '0',
  `tipo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menus`
--

INSERT INTO `menus` (`id`, `nome`, `parente`, `tipo`) VALUES
(1, 'Produtos', 0, 0),
(2, 'Lojas', 0, 0),
(3, 'Sobre', 0, 0),
(4, 'Contacto', 0, 0),
(5, 'Conta', 0, 1),
(6, 'Carrinho de Compras', 0, 1),
(7, 'Painel', 0, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelos`
--

CREATE TABLE `modelos` (
  `id` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `versao` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modelos`
--

INSERT INTO `modelos` (`id`, `id_marca`, `nome`, `versao`) VALUES
(1, 1, '6S', 'MKQJ2QL/A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `isForBuy` bit(1) NOT NULL DEFAULT b'0',
  `preco` float NOT NULL,
  `iva` int(11) NOT NULL,
  `desconto` int(11) NOT NULL,
  `promocao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `id_tipo`, `id_prod`, `isForBuy`, `preco`, `iva`, `desconto`, `promocao`) VALUES
(1, 1, 1, b'1', 669.89, 23, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_tipos`
--

CREATE TABLE `produtos_tipos` (
  `id` int(11) NOT NULL,
  `categoria` enum('Telemoveis','Power-banks','Acessorios','Outros') NOT NULL DEFAULT 'Outros'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos_tipos`
--

INSERT INTO `produtos_tipos` (`id`, `categoria`) VALUES
(1, 'Telemoveis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telemoveis`
--

CREATE TABLE `telemoveis` (
  `id` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `id_ios` int(11) NOT NULL,
  `extras` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `telemoveis`
--

INSERT INTO `telemoveis` (`id`, `id_modelo`, `id_ios`, `extras`) VALUES
(1, 1, 1, 'Conteudos Extras vão para aqui.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id` int(11) NOT NULL,
  `idl` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id`, `idl`, `firstname`, `lastname`, `email`) VALUES
(1, 1, 'Nuno', 'Garcia', 'nuno@email'),
(2, 2, 'Joana', 'Nalha', 'joana@bla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ios`
--
ALTER TABLE `ios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `versao` (`versao`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `versao` (`versao`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_tipo` (`id_tipo`);

--
-- Indexes for table `produtos_tipos`
--
ALTER TABLE `produtos_tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telemoveis`
--
ALTER TABLE `telemoveis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ios`
--
ALTER TABLE `ios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produtos_tipos`
--
ALTER TABLE `produtos_tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `telemoveis`
--
ALTER TABLE `telemoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
