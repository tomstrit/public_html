-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2024 at 09:13 AM
-- Server version: 8.0.36-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vianaconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `Atletas`
--

CREATE TABLE `Atletas` (
  `CodigoAtleta` int NOT NULL,
  `Nome` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(200) NOT NULL,
  `PalavraPasse` varchar(75) NOT NULL,
  `FotoPerfil` text NOT NULL,
  `Descricao` text NOT NULL,
  `CodigoDesporto` int NOT NULL,
  `Clube` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CodigoCategoria` int NOT NULL,
  `Tipo` int NOT NULL DEFAULT '100',
  `Privado` tinyint(1) NOT NULL DEFAULT '0',
  `Feature` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Atletas`
--

INSERT INTO `Atletas` (`CodigoAtleta`, `Nome`, `Email`, `PalavraPasse`, `FotoPerfil`, `Descricao`, `CodigoDesporto`, `Clube`, `CodigoCategoria`, `Tipo`, `Privado`, `Feature`) VALUES
(1, 'Tomás Simões', 'tomasmacielsimoes@gmail.com', 'Esm123.', 'imagens/login/fototeste.jpg', 'Faço trail running por diversão.', 1, 'Individual', 10, 1, 0, 0),
(2, 'Ana Correia', 'ana.beatriz.correia@hotmail.com', 'Esm123.', 'imagens/login/teste.jpg', 'trail running', 1, 'Individual', 1, 100, 0, 0),
(3, 'Roberto Carlos', 'robertocarlos@gmail.com', 'Esm123.', 'imagens/login/teste.jpg', 'TESTE', 2, 'Individual', 11, 100, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Categoria`
--

CREATE TABLE `Categoria` (
  `CodigoCategoria` int NOT NULL,
  `Categoria` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Categoria`
--

INSERT INTO `Categoria` (`CodigoCategoria`, `Categoria`) VALUES
(1, 'F SUB23'),
(2, 'F35'),
(3, 'F40'),
(4, 'F45'),
(5, 'F50'),
(6, 'F55'),
(7, 'F60'),
(8, 'F65'),
(9, 'FSEN'),
(10, 'M SUB23'),
(11, 'M35'),
(12, 'M40'),
(13, 'M45'),
(14, 'M50'),
(15, 'M55'),
(16, 'M60'),
(17, 'M65'),
(18, 'MSEN');

-- --------------------------------------------------------

--
-- Table structure for table `Desportos`
--

CREATE TABLE `Desportos` (
  `CodigoDesporto` int NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Descrição` varchar(150) NOT NULL,
  `Foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Desportos`
--

INSERT INTO `Desportos` (`CodigoDesporto`, `Nome`, `Descrição`, `Foto`) VALUES
(1, 'Atletismo', 'Ainda a acrescentar', '/imagens/desportos/AtletismoViana.jpg'),
(2, 'Ciclismo', 'Ainda a acrescentar', '/imagens/desportos/ciclismo.jpg'),
(3, 'Futebol', 'Equipa principal do vianense época 2023/24', '/imagens/desportos/vianenseFutebol.jpg'),
(4, 'Canoagem', 'Ainda a acrescentar', '/imagens/desportos/canoagem.jpg'),
(5, 'Surf', 'Ainda a acrescentar', '/imagens/desportos/surf.png'),
(6, 'Voleibol', 'Ainda a acrescentar', '/imagens/desportos/volei.jpg'),
(7, 'Hoquei', 'Ainda a acrescentar', '/imagens/desportos/hoquei.jpg'),
(8, 'Remo', 'Ainda a acrescentar', '/imagens/desportos/remo.jpg'),
(9, 'BTT', 'Ainda a acrescentar', '/imagens/desportos/btt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Dorsal`
--

CREATE TABLE `Dorsal` (
  `CodigoDorsal` int NOT NULL,
  `Numero` int NOT NULL,
  `CodigoAtleta` int NOT NULL,
  `CodigoProva` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Fotos`
--

CREATE TABLE `Fotos` (
  `CodigoFoto` int NOT NULL,
  `Nome` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Ficheiro` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CodigoProva` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Fotos`
--

INSERT INTO `Fotos` (`CodigoFoto`, `Nome`, `Ficheiro`, `CodigoProva`) VALUES
(3, 'teste', '../imagens/provas/1.jpeg', 5),
(4, 'teste', '../imagens/provas/2.jpeg', 5),
(5, 'teste', '../imagens/provas/3.jpeg', 5),
(6, 'teste', '../imagens/provas/4.jpeg', 5),
(7, 'teste', '../imagens/provas/5.jpeg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Lora`
--

CREATE TABLE `Lora` (
  `CodigoLora` int NOT NULL,
  `Descricao` varchar(250) NOT NULL,
  `CodigoAtleta` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Percurso`
--

CREATE TABLE `Percurso` (
  `CodigoPercurso` int NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` varchar(250) NOT NULL,
  `DataInicio` time NOT NULL,
  `CodigoProva` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Posicao`
--

CREATE TABLE `Posicao` (
  `CodigoPosicao` int NOT NULL,
  `Lat` decimal(19,15) NOT NULL,
  `Log` decimal(19,15) NOT NULL,
  `Alt` decimal(19,15) NOT NULL,
  `DataHora` datetime NOT NULL,
  `CodigoPercurso` int NOT NULL,
  `CodigoAtleta` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Prova`
--

CREATE TABLE `Prova` (
  `CodigoProva` int NOT NULL,
  `Nome` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DataInicio` datetime NOT NULL,
  `DataFim` datetime DEFAULT NULL,
  `Descricao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CodigoLocal` int NOT NULL,
  `CodigoTipoProva` int NOT NULL,
  `Inscricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Prova`
--

INSERT INTO `Prova` (`CodigoProva`, `Nome`, `DataInicio`, `DataFim`, `Descricao`, `CodigoLocal`, `CodigoTipoProva`, `Inscricao`) VALUES
(2, 'Meia Maratona Manuela Machado', '2024-01-21 09:00:00', '2024-01-21 13:30:00', 'Partida ao lado do Centro Cultural de Viana do Castelo.', 1, 2, ''),
(4, 'IX ART - AFIFE RUNNING TRAIL', '2024-03-03 08:30:00', '2024-03-03 13:30:00', 'ATIVIDADES/PROVAS: Trail Ultra 46km 28 euros, Trail Longo 31km 22 euros, Trail Sprint/Jovem 15km 16 euros, Caminhada 12 euros', 3, 1, 'https://www.cyclonessports.com/provas/20240303TrailAfife/inscrever.php'),
(5, 'lima trail', '2024-02-25 00:00:00', '2024-02-25 00:00:00', '<br>', 5, 1, ''),
(6, 'Trail do Pote', '2024-03-17 00:00:00', '2024-03-17 00:00:00', '25 km / 18 km / 13 km / 8 km (caminhada)', 7, 1, 'https://www.cyclonessports.com/provas/20240317TrailDoPote/inscrever.php'),
(7, 'Melgaço Alvarinho Trail', '2024-04-06 00:00:00', '2024-04-07 00:00:00', '<div><span style=\'color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\'>42 km / 32 km / 18 km / 11 (caminhada)</span><br></div>', 8, 1, 'https://registerandgo.net/?evento=1247'),
(8, 'Ultra trail de Cerveira', '2024-05-11 00:00:00', '2024-05-11 00:00:00', '45 km / 22 km / 15 km / Caminhada', 3, 1, 'https://registerandgo.net/?evento=1226');

-- --------------------------------------------------------

--
-- Table structure for table `Registos`
--

CREATE TABLE `Registos` (
  `CodigoRegisto` int NOT NULL,
  `CodigoAtleta` int NOT NULL,
  `Prova` varchar(200) NOT NULL,
  `Data` date NOT NULL,
  `Tempo` int NOT NULL,
  `ClassGeral` int NOT NULL,
  `ClassEscalao` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `TipoLocal`
--

CREATE TABLE `TipoLocal` (
  `CodigoLocal` int NOT NULL,
  `Local` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `TipoLocal`
--

INSERT INTO `TipoLocal` (`CodigoLocal`, `Local`) VALUES
(1, 'Viana do Castelo\r'),
(2, 'Cardielos\r'),
(3, 'Afife\r'),
(4, 'Caminha\r'),
(5, 'Ponte de Lima'),
(6, 'Barcelos'),
(7, 'Gondar e Orbacém'),
(8, 'Melgaço'),
(9, 'Vila Nova de Cerveira');

-- --------------------------------------------------------

--
-- Table structure for table `TipoProva`
--

CREATE TABLE `TipoProva` (
  `CodigoTipoProva` int NOT NULL,
  `Tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `TipoProva`
--

INSERT INTO `TipoProva` (`CodigoTipoProva`, `Tipo`) VALUES
(1, 'Trail\r'),
(2, 'Estrada\r'),
(3, 'Caminhada\r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Atletas`
--
ALTER TABLE `Atletas`
  ADD PRIMARY KEY (`CodigoAtleta`),
  ADD KEY `CodigoDesporto` (`CodigoCategoria`),
  ADD KEY `CodigoDesporto_2` (`CodigoDesporto`);

--
-- Indexes for table `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`CodigoCategoria`);

--
-- Indexes for table `Desportos`
--
ALTER TABLE `Desportos`
  ADD PRIMARY KEY (`CodigoDesporto`);

--
-- Indexes for table `Dorsal`
--
ALTER TABLE `Dorsal`
  ADD PRIMARY KEY (`CodigoDorsal`),
  ADD KEY `CodigoAtleta` (`CodigoAtleta`,`CodigoProva`),
  ADD KEY `CodigoProva` (`CodigoProva`);

--
-- Indexes for table `Fotos`
--
ALTER TABLE `Fotos`
  ADD PRIMARY KEY (`CodigoFoto`),
  ADD KEY `CodigoProva` (`CodigoProva`);

--
-- Indexes for table `Lora`
--
ALTER TABLE `Lora`
  ADD PRIMARY KEY (`CodigoLora`),
  ADD KEY `CodigoAtleta` (`CodigoAtleta`);

--
-- Indexes for table `Percurso`
--
ALTER TABLE `Percurso`
  ADD PRIMARY KEY (`CodigoPercurso`),
  ADD KEY `CodigoProva` (`CodigoProva`);

--
-- Indexes for table `Posicao`
--
ALTER TABLE `Posicao`
  ADD PRIMARY KEY (`CodigoPosicao`),
  ADD KEY `CodigoPercurso` (`CodigoPercurso`,`CodigoAtleta`),
  ADD KEY `CodigoAtleta` (`CodigoAtleta`);

--
-- Indexes for table `Prova`
--
ALTER TABLE `Prova`
  ADD PRIMARY KEY (`CodigoProva`),
  ADD KEY `CodigoLocal` (`CodigoLocal`,`CodigoTipoProva`),
  ADD KEY `CodigoTipoProva` (`CodigoTipoProva`);

--
-- Indexes for table `Registos`
--
ALTER TABLE `Registos`
  ADD PRIMARY KEY (`CodigoRegisto`),
  ADD KEY `CodigoAtleta` (`CodigoAtleta`);

--
-- Indexes for table `TipoLocal`
--
ALTER TABLE `TipoLocal`
  ADD PRIMARY KEY (`CodigoLocal`);

--
-- Indexes for table `TipoProva`
--
ALTER TABLE `TipoProva`
  ADD PRIMARY KEY (`CodigoTipoProva`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Atletas`
--
ALTER TABLE `Atletas`
  MODIFY `CodigoAtleta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `CodigoCategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Desportos`
--
ALTER TABLE `Desportos`
  MODIFY `CodigoDesporto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Dorsal`
--
ALTER TABLE `Dorsal`
  MODIFY `CodigoDorsal` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Fotos`
--
ALTER TABLE `Fotos`
  MODIFY `CodigoFoto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Lora`
--
ALTER TABLE `Lora`
  MODIFY `CodigoLora` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Percurso`
--
ALTER TABLE `Percurso`
  MODIFY `CodigoPercurso` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Posicao`
--
ALTER TABLE `Posicao`
  MODIFY `CodigoPosicao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Prova`
--
ALTER TABLE `Prova`
  MODIFY `CodigoProva` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Registos`
--
ALTER TABLE `Registos`
  MODIFY `CodigoRegisto` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TipoLocal`
--
ALTER TABLE `TipoLocal`
  MODIFY `CodigoLocal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `TipoProva`
--
ALTER TABLE `TipoProva`
  MODIFY `CodigoTipoProva` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Atletas`
--
ALTER TABLE `Atletas`
  ADD CONSTRAINT `Atletas_ibfk_1` FOREIGN KEY (`CodigoCategoria`) REFERENCES `Categoria` (`CodigoCategoria`),
  ADD CONSTRAINT `Atletas_ibfk_2` FOREIGN KEY (`CodigoDesporto`) REFERENCES `Desportos` (`CodigoDesporto`);

--
-- Constraints for table `Dorsal`
--
ALTER TABLE `Dorsal`
  ADD CONSTRAINT `Dorsal_ibfk_1` FOREIGN KEY (`CodigoProva`) REFERENCES `Prova` (`CodigoProva`),
  ADD CONSTRAINT `Dorsal_ibfk_2` FOREIGN KEY (`CodigoAtleta`) REFERENCES `Atletas` (`CodigoAtleta`);

--
-- Constraints for table `Fotos`
--
ALTER TABLE `Fotos`
  ADD CONSTRAINT `Fotos_ibfk_1` FOREIGN KEY (`CodigoProva`) REFERENCES `Prova` (`CodigoProva`);

--
-- Constraints for table `Lora`
--
ALTER TABLE `Lora`
  ADD CONSTRAINT `Lora_ibfk_1` FOREIGN KEY (`CodigoAtleta`) REFERENCES `Atletas` (`CodigoAtleta`);

--
-- Constraints for table `Percurso`
--
ALTER TABLE `Percurso`
  ADD CONSTRAINT `Percurso_ibfk_1` FOREIGN KEY (`CodigoProva`) REFERENCES `Prova` (`CodigoProva`);

--
-- Constraints for table `Posicao`
--
ALTER TABLE `Posicao`
  ADD CONSTRAINT `Posicao_ibfk_1` FOREIGN KEY (`CodigoPercurso`) REFERENCES `Percurso` (`CodigoPercurso`),
  ADD CONSTRAINT `Posicao_ibfk_2` FOREIGN KEY (`CodigoAtleta`) REFERENCES `Atletas` (`CodigoAtleta`);

--
-- Constraints for table `Prova`
--
ALTER TABLE `Prova`
  ADD CONSTRAINT `Prova_ibfk_1` FOREIGN KEY (`CodigoTipoProva`) REFERENCES `TipoProva` (`CodigoTipoProva`),
  ADD CONSTRAINT `Prova_ibfk_2` FOREIGN KEY (`CodigoLocal`) REFERENCES `TipoLocal` (`CodigoLocal`);

--
-- Constraints for table `Registos`
--
ALTER TABLE `Registos`
  ADD CONSTRAINT `Registos_ibfk_1` FOREIGN KEY (`CodigoAtleta`) REFERENCES `Atletas` (`CodigoAtleta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
