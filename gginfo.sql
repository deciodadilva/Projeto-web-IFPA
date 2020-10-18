-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Out-2020 às 23:08
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gginfo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(20) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nome`, `cpf`, `endereco`, `telefone`, `email`) VALUES
(1, 'neto', '000.000.000', 'rua1', '00 0000-', 'aaa@bbb'),
(2, 'neto2', '111.111.111', 'rua 2', '11 1111-', 'sss@ffff');

-- --------------------------------------------------------

--
-- Estrutura da tabela `computadores`
--

CREATE TABLE `computadores` (
  `id_desk` int(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `fabricante` varchar(20) NOT NULL,
  `processador` varchar(20) NOT NULL,
  `memoria_ram` varchar(20) NOT NULL,
  `hd` varchar(20) NOT NULL,
  `tela` varchar(20) NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `quantidade` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `computadores`
--

INSERT INTO `computadores` (`id_desk`, `nome`, `fabricante`, `processador`, `memoria_ram`, `hd`, `tela`, `preco`, `quantidade`, `tipo`) VALUES
(1, 'aaaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '450.00', '5', 'desktop'),
(3, 'jjj', 'jjj', 'jjj', 'jjj', 'jjj', '16 polegadas', '420.00', '3', 'notebook');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_func` int(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_func`, `nome`, `cpf`, `cargo`) VALUES
(1, 'renato', '333.333.333-33', 'programador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressoras`
--

CREATE TABLE `impressoras` (
  `id_imp` int(20) NOT NULL,
  `fabricante` varchar(20) NOT NULL,
  `impressao` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `quantidade` varchar(20) NOT NULL,
  `preco` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `impressoras`
--

INSERT INTO `impressoras` (`id_imp`, `fabricante`, `impressao`, `tipo`, `quantidade`, `preco`) VALUES
(1, 'hp', 'jato de tinta', 'multifuncional', '6', '850.00'),
(2, 'epson', 'laser', 'simples', '3', '950.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas1`
--

CREATE TABLE `vendas1` (
  `id_venda` int(20) NOT NULL,
  `item` int(20) NOT NULL,
  `imp` int(20) NOT NULL,
  `cliente` int(20) NOT NULL,
  `funcionario` int(20) NOT NULL,
  `data` varchar(10) NOT NULL,
  `preco_total` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas1`
--

INSERT INTO `vendas1` (`id_venda`, `item`, `imp`, `cliente`, `funcionario`, `data`, `preco_total`) VALUES
(7, 3, 2, 2, 1, '18 10 20', '1370.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `computadores`
--
ALTER TABLE `computadores`
  ADD PRIMARY KEY (`id_desk`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_func`);

--
-- Índices para tabela `impressoras`
--
ALTER TABLE `impressoras`
  ADD PRIMARY KEY (`id_imp`);

--
-- Índices para tabela `vendas1`
--
ALTER TABLE `vendas1`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `fk_pc` (`item`),
  ADD KEY `fk_clinte` (`cliente`),
  ADD KEY `fk` (`imp`),
  ADD KEY `fkfun` (`funcionario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `computadores`
--
ALTER TABLE `computadores`
  MODIFY `id_desk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_func` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `impressoras`
--
ALTER TABLE `impressoras`
  MODIFY `id_imp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vendas1`
--
ALTER TABLE `vendas1`
  MODIFY `id_venda` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `vendas1`
--
ALTER TABLE `vendas1`
  ADD CONSTRAINT `fk` FOREIGN KEY (`imp`) REFERENCES `impressoras` (`id_imp`),
  ADD CONSTRAINT `fk_clinte` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`idcliente`),
  ADD CONSTRAINT `fk_pc` FOREIGN KEY (`item`) REFERENCES `computadores` (`id_desk`),
  ADD CONSTRAINT `fkfun` FOREIGN KEY (`funcionario`) REFERENCES `funcionario` (`id_func`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
