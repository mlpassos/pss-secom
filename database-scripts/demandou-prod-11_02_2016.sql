-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 12-Fev-2016 às 03:45
-- Versão do servidor: 5.5.31
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `demandou-prod`
--
CREATE DATABASE IF NOT EXISTS `demandou-prod` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `demandou-prod`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('041c19f4d5b7091e7f967cb8561dd67bfddf441c', '::1', 1455233902, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233333633343b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('0943e7d9367117a755d3f11fc89133a4720bc77b', '::1', 1455242587, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234323330383b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('1185135143eacce91d0c53ba7e2582bda7a5186d', '::1', 1455243490, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234333235383b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('1683ef143033eb7b14b2d4535b34c7fe3c0d48ff', '::1', 1455244903, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234343838333b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('2314d71beb7a2ab25b8bd518f8432d0654e57677', '::1', 1455238127, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233373834383b636f6469676f5f7573756172696f7c733a313a2239223b6c6f67696e7c733a353a226974616c6f223b6e6f6d657c733a363a22c38d74616c6f223b736f6272656e6f6d657c733a363a22546f72726573223b636f6469676f5f70657266696c7c733a313a2231223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a393a226974616c6f2e6a7067223b6c6f6761646f7c623a313b),
('2cd9ed3e8369709b0f49a6b1c6a8914d313fd552', '::1', 1455242196, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234313939323b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('2f0689c345b8ddda1f5db146bee15111b79cac9d', '::1', 1455240406, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234303138353b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('38d63db7797a57e16981a726634e5c7daf48c9ec', '::1', 1455233549, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233333332383b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('42f90e02b0868ed8f3712da6cbebc1cbf4f9db69', '::1', 1455237206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233363932383b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('4819dcea0d6fddc93b483411409ecd9badf180dc', '::1', 1455238690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233383438363b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('4b6311150c81bce922d00c57d310ec21e36310dd', '::1', 1455239452, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233393434303b636f6469676f5f7573756172696f7c733a323a223131223b6c6f67696e7c733a383a226361726f6c696e61223b6e6f6d657c733a383a224361726f6c696e61223b736f6272656e6f6d657c733a31363a2256656e747572696e6920506173736f73223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a35323a2231323131333530385f31303230343638323137363936353633305f383735373536333131373236383130323139305f6f2e6a7067223b6c6f6761646f7c623a313b),
('5d12eb4edfad535e3c4fdc4d5b4899a0540bd591', '::1', 1455232012, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233313931363b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('6662f72179e997e8210ad18482dac1b9b9aee295', '::1', 1455231109, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233303931333b636f6469676f5f7573756172696f7c733a313a2234223b6c6f67696e7c733a343a2269676f72223b6e6f6d657c733a343a2249676f72223b736f6272656e6f6d657c733a333a22436861223b636f6469676f5f70657266696c7c733a313a2231223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31353a2269676f722d6176617461722e6a7067223b6c6f6761646f7c623a313b),
('66912d5a83089e4a416843d1dbfb1f8b52455c18', '::1', 1455244038, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234333837383b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('6e7538712d5652f98b011205d74b9a5a8aa1fcae', '::1', 1455242912, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234323631333b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('792c4ec26bcd5413fcda43e806df4fa394f6c5c4', '::1', 1455244488, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234343331383b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('794227f07987d67549f7c4afe00dddab9f2a0777', '::1', 1455240168, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233393837393b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('7ed3d0b5d21f7fe3181d1ccd1b926d1d36d65e66', '::1', 1455232421, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233323238333b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('99d03dc2c32486414391364b65f848c12b3fcddb', '::1', 1455243842, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234333537313b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('a246d9cf74107225573aaad65a20b40e6eb8c20f', '::1', 1455236898, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233363632313b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('a300342560d2ffea747ad4f1568709ee1965ede7', '::1', 1455241177, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234303930343b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('b7ac280750bf3d7fd355f5d3792c159607930009', '::1', 1455234002, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233333938313b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('c070f3d497d23c95c4378e55e2b1e1f4c8a93e96', '::1', 1455243223, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234323932383b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('c6cb41b44b9fb03882e60bf4be53217c8f0c880b', '::1', 1455241458, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234313232383b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('d3354a82c5b082a6dc0dfa115bd6b8b9ad903c96', '::1', 1455233290, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233323939303b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('e64b65300ab1038210608fb18c76caa4d438e688', '::1', 1455232913, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353233323632303b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('e8e7cf7b5b77cd28aba4a589db1b7c8f72e58710', '::1', 1455241970, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234313637323b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d),
('fd98d007cd0cf217fa693125b0ce9eb0356cc6ea', '::1', 1455240771, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353234303531303b636f6469676f5f7573756172696f7c733a313a2236223b6c6f67696e7c733a363a226e656e65746f223b6e6f6d657c733a373a22416e746f6e696f223b736f6272656e6f6d657c733a343a224e65746f223b636f6469676f5f70657266696c7c733a313a2232223b636f6469676f5f7374617475737c733a313a2231223b6172717569766f5f6176617461727c733a31303a226e656e65746f2e6a7067223b6c6f6761646f7c623a313b676572656e636961725f70726f6a65746f2d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f746172656661732d327c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2232223b7d676572656e636961725f70726f6a65746f2d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d676572656e636961725f746172656661732d317c613a313a7b733a31343a22636f6469676f5f70726f6a65746f223b733a313a2231223b7d);

-- --------------------------------------------------------

--
-- Estrutura da tabela `observacoes_resposta`
--

CREATE TABLE IF NOT EXISTS `observacoes_resposta` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_observacao` int(11) NOT NULL,
  `resposta` varchar(500) NOT NULL,
  `data_resposta` date DEFAULT NULL,
  `inserido_por` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `observacoes_resposta`
--

INSERT INTO `observacoes_resposta` (`codigo`, `codigo_observacao`, `resposta`, `data_resposta`, `inserido_por`) VALUES
(1, 1, 'valeu!!', '2016-02-10', 6),
(2, 2, 'beleza', '2016-02-11', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `observacoes_status`
--

CREATE TABLE IF NOT EXISTS `observacoes_status` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `observacoes_status`
--

INSERT INTO `observacoes_status` (`codigo`, `nome`) VALUES
(1, 'Em andamento'),
(2, 'Aceita'),
(3, 'Negada'),
(4, 'Finalização forçada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `observacoes_tipo`
--

CREATE TABLE IF NOT EXISTS `observacoes_tipo` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `observacoes_tipo`
--

INSERT INTO `observacoes_tipo` (`codigo`, `tipo`) VALUES
(1, 'Finalização'),
(2, 'Extensão de Prazo'),
(3, 'Finalização Forçada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `papel`
--

CREATE TABLE IF NOT EXISTS `papel` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `papel`
--

INSERT INTO `papel` (`codigo`, `nome`) VALUES
(1, 'Líder'),
(2, 'Participante'),
(3, 'Coordenador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`codigo`, `nome`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE IF NOT EXISTS `projeto` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `prioridade` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_prazo` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `criado_por` int(11) NOT NULL,
  `codigo_status` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`codigo`, `titulo`, `descricao`, `prioridade`, `data_inicio`, `data_prazo`, `data_fim`, `criado_por`, `codigo_status`) VALUES
(1, 'Projeto Teste', 'If you wish to increase security by hiding the location of your CodeIgniter files you can rename the system and application folders to something more private. If you do rename them, you must open your main index.php file and set the $system_path and $application_folder variables at the top of the fi', 3, '2016-02-10', '2016-02-29', NULL, 0, 1),
(2, 'Teste 2', 'Pull requests are the way to go here. I apologise in advance for the slow action on pull requests and issues. I only have two rules for submitting a pull request: match the naming convention (camelCase, categorised [fades, bounces, etc]) and let us see a demo of submitted animations in a pen. That l', 1, '2016-02-10', '2016-02-19', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto_tarefa`
--

CREATE TABLE IF NOT EXISTS `projeto_tarefa` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_projeto` int(11) NOT NULL,
  `codigo_tarefa` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`codigo`, `nome`) VALUES
(0, 'Desativado'),
(1, 'Ativado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefa`
--

CREATE TABLE IF NOT EXISTS `tarefa` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `prioridade` int(1) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_prazo` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `encerrada` tinyint(4) DEFAULT NULL,
  `encerrada_por` int(11) DEFAULT NULL,
  `criado_por` int(11) NOT NULL,
  `codigo_projeto` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_status` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tarefa`
--

INSERT INTO `tarefa` (`codigo`, `titulo`, `descricao`, `prioridade`, `data_inicio`, `data_prazo`, `data_fim`, `encerrada`, `encerrada_por`, `criado_por`, `codigo_projeto`, `codigo_usuario`, `codigo_status`) VALUES
(3, 'Identidade Visual', 'teste', 1, '2016-02-15', '2016-02-16', NULL, NULL, NULL, 0, 1, 5, 1),
(4, 'Tarefa Teste Joao', 'teste joao', 3, '2016-02-11', '2016-02-12', NULL, NULL, NULL, 6, 2, 7, 1),
(5, 'cuidar maria flor', 'hehehe', 1, '2016-02-10', '2016-02-26', '2016-02-11', 1, 6, 0, 1, 11, 1),
(6, 'jkljlkj', 'lkjlkj', 2, '2016-02-18', '2016-02-27', NULL, NULL, NULL, 6, 1, 11, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefa_observacoes`
--

CREATE TABLE IF NOT EXISTS `tarefa_observacoes` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `observacao` varchar(500) NOT NULL,
  `data_criada` date NOT NULL,
  `codigo_tipo` int(11) NOT NULL,
  `codigo_status_obs` int(11) DEFAULT NULL,
  `codigo_tarefa` int(11) NOT NULL,
  `inserido_por` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tarefa_observacoes`
--

INSERT INTO `tarefa_observacoes` (`codigo`, `observacao`, `data_criada`, `codigo_tipo`, `codigo_status_obs`, `codigo_tarefa`, `inserido_por`) VALUES
(1, 'fim', '2016-02-10', 1, 2, 2, 8),
(2, 'terminei, verificar se ta bom heuhweuhwjew', '2016-02-11', 1, 2, 5, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `data_nascimento` date NOT NULL,
  `arquivo_avatar` varchar(200) NOT NULL,
  `data_criado` date NOT NULL,
  `codigo_funcao` int(11) NOT NULL,
  `codigo_perfil` int(11) NOT NULL,
  `codigo_status` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `login`, `senha`, `email`, `nome`, `sobrenome`, `data_nascimento`, `arquivo_avatar`, `data_criado`, `codigo_funcao`, `codigo_perfil`, `codigo_status`) VALUES
(4, 'igor', '7c67e713a4b4139702de1a4fac672344', 'igorcha@secom.pa.gov.br', 'Igor', 'Cha', '2001-01-01', 'igor-avatar.jpg', '2015-12-17', 4, 1, 1),
(5, 'mlp', '7c67e713a4b4139702de1a4fac672344', 'marciopassosbel@gmail.com', 'Márcio', 'Passos', '1981-04-13', 'avatar3.jpg', '2015-12-17', 3, 2, 1),
(6, 'neneto', '7c67e713a4b4139702de1a4fac672344', 'antonioneto@secom.pa.gov.br', 'Antonio', 'Neto', '2001-01-01', 'neneto.jpg', '2015-12-17', 1, 2, 1),
(7, 'joao', '7c67e713a4b4139702de1a4fac672344', 'joaolemos@secom.pa.gov.br', 'João', 'Lemos', '2010-10-10', 'joao.jpg', '2015-12-17', 4, 1, 1),
(8, 'vini', '7c67e713a4b4139702de1a4fac672344', 'viniciusmonteiro@secom.pa.gov.br', 'Vinicius', 'Monteiro', '2002-02-20', 'vinicius.jpg', '2015-12-17', 2, 1, 1),
(9, 'italo', '7c67e713a4b4139702de1a4fac672344', 'italo.torres@secom.pa.gov.br', 'Ítalo', 'Torres', '1990-11-11', 'italo.jpg', '2015-12-17', 2, 1, 1),
(10, 'pet', '7c67e713a4b4139702de1a4fac672344', 'pettersonfariassecom@gmail.com', 'Petterson', 'Farias', '1993-12-12', 'pet.jpg', '2015-12-17', 2, 1, 1),
(11, 'carolina', '7c67e713a4b4139702de1a4fac672344', 'carolinaventurini@icloud.com', 'Carolina', 'Venturini Passos', '2005-09-05', '12113508_10204682176965630_8757563117268102190_o.jpg', '2015-12-23', 2, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_acesso`
--

CREATE TABLE IF NOT EXISTS `usuario_acesso` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_usuario` int(11) NOT NULL,
  `data_acesso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_funcao`
--

CREATE TABLE IF NOT EXISTS `usuario_funcao` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuario_funcao`
--

INSERT INTO `usuario_funcao` (`codigo`, `titulo`) VALUES
(1, 'Diretor'),
(2, 'Assessor de Comunicação'),
(3, 'Analista de Sistemas'),
(4, 'Designer Gráfico'),
(5, 'Estagiário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_projeto`
--

CREATE TABLE IF NOT EXISTS `usuario_projeto` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_projeto` int(11) NOT NULL,
  `codigo_papel` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `usuario_projeto`
--

INSERT INTO `usuario_projeto` (`codigo`, `codigo_usuario`, `codigo_projeto`, `codigo_papel`) VALUES
(1, 6, 1, 1),
(16, 6, 2, 1),
(17, 4, 2, 2),
(19, 7, 2, 2),
(20, 5, 1, 2),
(21, 10, 2, 2),
(22, 7, 1, 2),
(23, 9, 2, 2),
(24, 11, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_tarefa`
--

CREATE TABLE IF NOT EXISTS `usuario_tarefa` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_tarefa` int(11) NOT NULL,
  `codigo_papel` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
