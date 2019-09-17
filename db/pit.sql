-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Set-2019 às 22:41
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
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aposentadoautonomo`
--

INSERT INTO `aposentadoautonomo` (`ID`, `CPF`, `dataNasc`, `Nome`, `CEP`, `Email`, `senha`, `numero`) VALUES
(2, '22222222222', '2000-08-02', 'Roger', '31080150', 'pedro@pedro.com', 'e10adc3949ba59abbe56e057f20f883e', '703'),
(3, '11111111111', '1988-09-22', 'teste', '31080-150', 'pedrohvss15@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123'),
(4, '11204967644', '2000-08-02', 'Pedro Henrique Vasconcelos ', '31080150', 'pedrohvss15@gmail.com', '202cb962ac59075b964b07152d234b70', '703'),
(5, '11204967644', '2000-08-02', 'Pedro Henrique Vasconcelos ', '31080150', 'pedrohvss15@gmail.com', '0684e0571f251647d0afdf3ee5194b98', '703');

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
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`ID`, `CNPJ`, `nome`, `CEP`, `telefone`, `ramoEmpresa`, `email`, `senha`) VALUES
(1, '87.286.520/0001-90', 'Pedro Henrique Vasconcelos ', '31080150', '31995621858', 'Vendas', 'pedrohvss15@gmail.com', '202cb962ac59075b964b07152d234b70');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `endereco` varchar(80) NOT NULL,
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
  `Empresa_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Vagas_Empresa_idx` (`Empresa_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`ID`, `numeroVagas`, `endereco`, `Sexo`, `valorBolsa`, `Contato`, `conhecimentosNecessarios`, `Beneficios`, `Observacoes`, `HorarioTrabalho`, `nomeEmpresa`, `funcaoExercida`, `DuracaoVaga`, `categoria`, `Empresa_ID`) VALUES
(1, 1, 'Rua cassiterita ', 'I', 2500, '31995621858', 'Saber dirigir', 'Vale-transporte, vale aliemntaÃ§Ã£o', 'Preciso de alguÃ©m experiente no assunto', '12:00 atÃ© as 22:00', 'Corretora Motors', 'Motorista', '3 anos', 'Ven', 1);

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
