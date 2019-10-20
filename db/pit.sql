-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Set-2019 às 21:53
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pit`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `nome` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`nome`, `senha`, `ID`) VALUES
('admin', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aposentadoautonomo`
--

DROP TABLE IF EXISTS `aposentadoautonomo`;
CREATE TABLE IF NOT EXISTS `aposentadoautonomo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CPF` varchar(45) NOT NULL,
  `dataNasc` date NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `CEP` varchar(15) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `dataCadastro` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aposentadoautonomo`
--

INSERT INTO `aposentadoautonomo` (`ID`, `CPF`, `dataNasc`, `Nome`, `CEP`, `Email`, `senha`, `numero`, `tipo_usuario`, `dataCadastro`) VALUES
(2, '22222222222', '2000-08-02', 'Roger', '31080150', 'pedro@pedro.com', 'e10adc3949ba59abbe56e057f20f883e', '703', 1, '2019-09-19'),
(3, '11111111111', '1988-09-22', 'teste', '31080-150', 'pedrohvss15@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123', 1, '2019-09-19'),
(4, '11204967644', '2000-08-02', 'Pedro Henrique Vasconcelos ', '31080150', 'pedrohvss15@gmail.com', '202cb962ac59075b964b07152d234b70', '703', 1, '2019-09-19'),
(5, '11204967644', '2000-08-02', 'Pedro Henrique Vasconcelos ', '31080150', 'pedrohvss15@gmail.com', '0684e0571f251647d0afdf3ee5194b98', '703', 1, '2019-09-19');

-- --------------------------------------------------------

--
-- Stand-in structure for view `aposentados_autonomos_cadastrados`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `aposentados_autonomos_cadastrados`;
CREATE TABLE IF NOT EXISTS `aposentados_autonomos_cadastrados` (
`ID` int(11)
,`CPF` varchar(45)
,`Nome` varchar(150)
,`Email` varchar(45)
,`dataCadastro` date
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curriculo`
--

DROP TABLE IF EXISTS `curriculo`;
CREATE TABLE IF NOT EXISTS `curriculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expProfssi` varchar(250) NOT NULL,
  `resumoHabili` varchar(250) NOT NULL,
  `formAcadem` varchar(500) NOT NULL,
  `formCompl` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `aposentadoautonomo_ID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_curriculo_aposentadoautonomo1_idx` (`aposentadoautonomo_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curriculo`
--

INSERT INTO `curriculo` (`id`, `expProfssi`, `resumoHabili`, `formAcadem`, `formCompl`, `telefone`, `aposentadoautonomo_ID`) VALUES
(1, ' teste', ' teste', ' teste', ' teste', '31995621858', 2),
(2, '  teste', '  teste', ' teste', '  teste', '31995621858', 3),
(3, ' EstagiÃ¡rio na Emotion Studios', 'Programador\r\nEsforÃ§ado\r\nBom relacionamento\r\nLÃ­der por natureza ', ' Ensino mÃ©dio completo pelo colÃ©gio tÃ©cnico COTEMIG', ' InglÃªs intermediÃ¡rio', '31995621858', 4),
(4, ' EstagiÃ¡rio na Emotion Studios', 'Programador\r\nEsforÃ§ado\r\nBom relacionamento\r\nLÃ­der por natureza ', ' Ensino mÃ©dio completo pelo colÃ©gio tÃ©cnico COTEMIG', ' InglÃªs intermediÃ¡rio', '31995621858', 4),
(5, ' EstagiÃ¡rio na Emotion Studios', 'Programador\r\nEsforÃ§ado\r\nBom relacionamento\r\nLÃ­der por natureza ', ' Ensino mÃ©dio completo pelo colÃ©gio tÃ©cnico COTEMIG', ' InglÃªs intermediÃ¡rio', '31995621858', 4),
(6, ' EstagiÃ¡rio na Emotion Studios', 'Programador\r\nEsforÃ§ado\r\nBom relacionamento\r\nLÃ­der por natureza ', ' Ensino mÃ©dio completo pelo colÃ©gio tÃ©cnico COTEMIG', ' InglÃªs intermediÃ¡rio', '31995621858', 4),
(7, ' EstagiÃ¡rio na Emotion Studios', 'Programador\r\nEsforÃ§ado\r\nBom relacionamento\r\nLÃ­der por natureza ', ' Ensino mÃ©dio completo pelo colÃ©gio tÃ©cnico COTEMIG', ' InglÃªs intermediÃ¡rio', '31995621858', 4),
(8, ' EstagiÃ¡rio na Emotion Studios', 'Programador\r\nEsforÃ§ado\r\nBom relacionamento\r\nLÃ­der por natureza ', ' Ensino mÃ©dio completo pelo colÃ©gio tÃ©cnico COTEMIG', ' InglÃªs intermediÃ¡rio', '31995621858', 4),
(9, ' wht', ' wrt', ' wr', ' wt', 'wrt', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CNPJ` varchar(18) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `CEP` varchar(15) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `ramoEmpresa` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`ID`, `CNPJ`, `nome`, `CEP`, `telefone`, `ramoEmpresa`, `email`, `senha`, `tipo_usuario`) VALUES
(2, '87.286.520/0001-92', 'Empresa1', '31080150', '31995621858', 'Vendas', 'pedrohvss15@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(3, '87.286.520/0001-93', 'Empresa2', '31080150', '31995621858', 'Vendas', 'pedrohvss15@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(4, '87.286.520/0001-94', 'Empresa3', '31080150', '31995621858', 'Programação', 'pedrohvss15@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `empresas_cadastradas`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `empresas_cadastradas`;
CREATE TABLE IF NOT EXISTS `empresas_cadastradas` (
`ID_da_empresa` int(11)
,`Nome_da_empresa` varchar(45)
,`Telefone_da_empresa` varchar(45)
,`Ramo_da_empresa` varchar(45)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

DROP TABLE IF EXISTS `inscricao`;
CREATE TABLE IF NOT EXISTS `inscricao` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Vagas_ID` int(11) NOT NULL,
  `AposentadoAutonomo_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Vagas_has_AposentadoAutonomo_AposentadoAutonomo1_idx` (`AposentadoAutonomo_ID`),
  KEY `fk_Vagas_has_AposentadoAutonomo_Vagas1_idx` (`Vagas_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`ID`, `Vagas_ID`, `AposentadoAutonomo_ID`) VALUES
(1, 9, 4),
(2, 9, 4),
(3, 9, 4),
(4, 9, 4),
(5, 9, 4),
(6, 9, 4),
(7, 9, 4),
(8, 9, 4),
(9, 9, 4),
(10, 9, 4),
(11, 9, 4),
(12, 9, 4),
(13, 9, 4),
(14, 9, 4),
(15, 9, 4),
(16, 9, 4),
(17, 9, 4),
(18, 10, 4),
(20, 9, 4),
(21, 13, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagemblog`
--

DROP TABLE IF EXISTS `postagemblog`;
CREATE TABLE IF NOT EXISTS `postagemblog` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Imagem` varchar(45) DEFAULT NULL,
  `Texto` text NOT NULL,
  `Curtidas` varchar(45) DEFAULT NULL,
  `Comentarios` text,
  `AposentadoAutonomo_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_PostagemBlog_AposentadoAutonomo1_idx` (`AposentadoAutonomo_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

DROP TABLE IF EXISTS `vagas`;
CREATE TABLE IF NOT EXISTS `vagas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `numeroVagas` int(11) NOT NULL,
  `Sexo` varchar(45) NOT NULL,
  `valorBolsa` double NOT NULL,
  `Contato` varchar(45) NOT NULL,
  `conhecimentosNecessarios` varchar(150) NOT NULL,
  `Beneficios` varchar(150) NOT NULL,
  `Observacoes` varchar(150) NOT NULL,
  `HorarioTrabalho` varchar(80) NOT NULL,
  `nomeEmpresa` varchar(80) NOT NULL,
  `funcaoExercida` varchar(150) NOT NULL,
  `DuracaoVaga` varchar(150) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `CEP` varchar(45) NOT NULL,
  `numeroCasa` varchar(5) NOT NULL,
  `Empresa_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Vagas_Empresa_idx` (`Empresa_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`ID`, `numeroVagas`, `Sexo`, `valorBolsa`, `Contato`, `conhecimentosNecessarios`, `Beneficios`, `Observacoes`, `HorarioTrabalho`, `nomeEmpresa`, `funcaoExercida`, `DuracaoVaga`, `categoria`, `CEP`, `numeroCasa`, `Empresa_ID`) VALUES
(9, 1, 'H', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'TesteNovoCep', 'Motorista', '3 anos', 'Coz', '31080150', '703', 2),
(10, 1, 'H', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'TesteNovoCep', 'Motorista', '3 anos', 'Coz', '31080150', '703', 2),
(12, 1, 'H', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'apue', 'Motorista', '3 anos', 'Coz', '31080150', '703', 2),
(13, 1, 'H', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'apue1', 'Motorista', '3 anos', 'Adminis', '31080150', '703', 2),
(14, 1, 'H', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'apue2', 'Motorista', '3 anos', 'Limp', '31080150', '703', 2),
(15, 1, 'I', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'apue3', 'Motorista', '3 anos', 'Aux', '31080150', '703', 2),
(16, 1, 'I', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'apue4', 'Motorista', '3 anos', 'Pedg', '31080150', '703', 2),
(17, 1, 'I', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'apue5', 'Motorista', '3 anos', 'Prog', '31080150', '703', 2),
(18, 1, 'I', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'apue6', 'Motorista', '3 anos', 'Infra', '31080150', '703', 2),
(19, 1, 'I', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'apue7', 'Motorista', '3 anos', 'Construc', '31080150', '703', 2),
(20, 1, 'I', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale alimentação', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'apue9', 'Motorista', '3 anos', 'Ven', '31080150', '703', 2);

-- --------------------------------------------------------

--
-- Structure for view `aposentados_autonomos_cadastrados`
--
DROP TABLE IF EXISTS `aposentados_autonomos_cadastrados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `aposentados_autonomos_cadastrados`  AS  select `aposentadoautonomo`.`ID` AS `ID`,`aposentadoautonomo`.`CPF` AS `CPF`,`aposentadoautonomo`.`Nome` AS `Nome`,`aposentadoautonomo`.`Email` AS `Email`,`aposentadoautonomo`.`dataCadastro` AS `dataCadastro` from `aposentadoautonomo` ;

-- --------------------------------------------------------

--
-- Structure for view `empresas_cadastradas`
--
DROP TABLE IF EXISTS `empresas_cadastradas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `empresas_cadastradas`  AS  select `empresa`.`ID` AS `ID_da_empresa`,`empresa`.`nome` AS `Nome_da_empresa`,`empresa`.`telefone` AS `Telefone_da_empresa`,`empresa`.`ramoEmpresa` AS `Ramo_da_empresa` from `empresa` ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `curriculo`
--
ALTER TABLE `curriculo`
  ADD CONSTRAINT `fk_curriculo_aposentadoautonomo1` FOREIGN KEY (`aposentadoautonomo_ID`) REFERENCES `aposentadoautonomo` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD CONSTRAINT `fk_Vagas_has_AposentadoAutonomo_AposentadoAutonomo1` FOREIGN KEY (`AposentadoAutonomo_ID`) REFERENCES `aposentadoautonomo` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vagas_has_AposentadoAutonomo_Vagas1` FOREIGN KEY (`Vagas_ID`) REFERENCES `vagas` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `postagemblog`
--
ALTER TABLE `postagemblog`
  ADD CONSTRAINT `fk_PostagemBlog_AposentadoAutonomo1` FOREIGN KEY (`AposentadoAutonomo_ID`) REFERENCES `aposentadoautonomo` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vagas`
--
ALTER TABLE `vagas`
  ADD CONSTRAINT `fk_Vagas_Empresa` FOREIGN KEY (`Empresa_ID`) REFERENCES `empresa` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
