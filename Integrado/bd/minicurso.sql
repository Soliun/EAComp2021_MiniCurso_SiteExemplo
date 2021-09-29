-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Set-2021 às 15:44
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minicurso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(300) NOT NULL,
  `Arquivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `documentos`
--

INSERT INTO `documentos` (`id`, `Titulo`, `Arquivo`) VALUES
(1, 'De Veteranos para os Novatos: Avaliação das Atividades de Recepção aos Calouros Organizado pelo Grupo PETComp', 'DE_VETERANOS_PARA_OS_NOVATOS.pdf'),
(2, 'O Impacto das Atividades do Grupo PET no Aprimoramento de Soft Skills Requeridos pelo Mercado de Computação do Maranhão: Uma Análise da Visão dos Discentes', 'O_IMPACTO_DAS_ATIVIDADES_DO.pdf'),
(3, 'Quando a Aluna se Torna a Mestre: Um Relato da Experiência de Alunas de Graduação Aplicando Dinâmicas de Ensino de Computação para Alunas de Ensino Médio', 'QUANDO_A_ALUNO_SE_TORNA.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `integrantes`
--

CREATE TABLE `integrantes` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(80) NOT NULL,
  `Texto` text NOT NULL,
  `Data` date NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `integrantes`
--

INSERT INTO `integrantes` (`id`, `Titulo`, `Texto`, `Data`, `Foto`) VALUES
(1, 'Italo Luigi Cerqueira Dovera', 'Faço Ciência da Computação na UFMA e sou integrante do PETComp.', '2021-09-29', 'user.png'),
(2, 'Arthur Marinho dos Passos', 'Faço Ciência da Computação na UFMA e sou integrante do PETComp.', '2021-09-28', 'arthur.jpg'),
(3, 'Matheus Levy de Lima Bessa', 'Faço Ciência da Computação na UFMA e sou integrante do PETComp e desenvolvo pesquisa no VIPLab.', '2021-09-22', 'leve.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(80) NOT NULL,
  `Texto` text NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `Titulo`, `Texto`, `Data`) VALUES
(1, 'Desenvolvimento de Aplicativo Mobile pelo PETComp', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut hendrerit velit. Morbi sed sem erat. Suspendisse sapien libero, fermentum at ullamcorper eget, lacinia et tortor. Ut blandit pretium facilisis. Duis nec tempus erat, sed volutpat lectus. Aliquam cursus euismod metus id gravida. Quisque laoreet eros et nibh accumsan, et sodales nibh vestibulum. Quisque varius lacinia mattis. Nam diam orci, suscipit at eros et, faucibus egestas felis. Nunc bibendum sollicitudin leo sed congue. Pellentesque vel ex aliquam, sollicitudin diam nec, lacinia erat.\r\n</p>\r\n<p>\r\nAliquam maximus porttitor gravida. Aliquam erat volutpat. Mauris quis imperdiet diam. Vestibulum egestas, ante sit amet maximus mattis, justo nunc malesuada justo, sit amet ultrices mauris lectus id justo. Ut accumsan hendrerit egestas. Suspendisse potenti. Maecenas lacinia ante justo, ut mattis nunc pellentesque in. Suspendisse auctor orci rutrum felis bibendum dictum. Proin eu dapibus diam. Proin vel nisi pellentesque, convallis ante et, pharetra justo. In ex libero, maximus id nulla eu, vehicula porta magna. In luctus vulputate odio, nec ultricies risus suscipit id. Suspendisse tempor nunc sed magna egestas suscipit. Nunc eu neque justo.\r\n</p>\r\n<p>\r\nFusce consequat dignissim quam, eu finibus augue volutpat ut. Integer id eleifend nunc. Nulla est libero, ultricies et convallis vel, maximus id quam. Suspendisse dignissim porttitor rutrum. In faucibus, mi cursus vehicula tincidunt, leo nisl aliquam neque, a mollis ante purus eget orci. Nunc pretium magna et velit vulputate, eget condimentum lacus lobortis. Sed a est sollicitudin, convallis velit eget, cursus justo. Cras at nibh ac risus viverra consectetur eu quis dolor. Aliquam finibus bibendum quam, eu tincidunt lorem elementum vitae. Fusce est justo, consequat nec fermentum non, sodales a ipsum. Vivamus ornare a libero sed sollicitudin. Maecenas efficitur nisl sem, a condimentum justo ullamcorper sed.\r\n</p>', '2021-09-02'),
(2, 'Aplicações de Soft Skills no mercado de trabalho', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a velit vel enim euismod interdum. Fusce finibus dolor nec felis iaculis, sed vehicula ante convallis. Morbi vulputate ipsum eu libero posuere ultrices. Sed id est erat. Mauris sagittis molestie mi sed hendrerit. Nunc ultrices mollis rhoncus. Nulla sit amet quam et justo vehicula consectetur sed id nisi. Cras volutpat sed mi ut fermentum. Cras eu facilisis sapien. Nunc fermentum purus eget ipsum sollicitudin porttitor. Vestibulum id accumsan lorem. Nam ut viverra neque. Vivamus diam diam, rutrum sit amet lacinia eu, dapibus sed purus. Nullam quis augue venenatis, pulvinar tortor sit amet, suscipit orci. In rhoncus sapien vitae felis pellentesque elementum. Nulla elementum iaculis urna nec placerat.</p>\r\n\r\n<p>Aliquam nec nisi aliquam, auctor ex nec, eleifend sem. Maecenas vehicula tellus vitae semper porta. Nunc ut malesuada lacus. Duis efficitur aliquam nisi. Quisque eu eleifend erat. Pellentesque vulputate est a efficitur luctus. Pellentesque vel dolor nec purus porttitor euismod at quis velit. Pellentesque dictum ipsum ac urna posuere, a ornare ex tincidunt. Praesent a nisi et lacus dapibus semper et malesuada leo. Vivamus leo nisi, fermentum ac auctor sit amet, placerat in lacus. Nulla accumsan turpis sed tortor scelerisque tempor. Curabitur sodales lorem ac ante pharetra dictum. Sed mattis magna non auctor tempor. Quisque arcu justo, feugiat eget elit ornare, elementum molestie lectus. Suspendisse magna arcu, venenatis at feugiat sit amet, lacinia vel nunc. Praesent imperdiet sapien eget sapien suscipit faucibus.</p>\r\n\r\n<p>Fusce fermentum porta dui, in consectetur neque pulvinar et. Proin ac turpis ac lacus egestas mattis. Curabitur eget dolor diam. Donec faucibus interdum magna interdum placerat. Maecenas pellentesque orci enim, non tempus mi efficitur sit amet. Vestibulum et diam leo. Sed dapibus ante turpis, vel mollis nisl laoreet in. Suspendisse vitae lorem eu nibh condimentum finibus eget ac enim. Donec maximus bibendum dui, sed fringilla ex faucibus quis. Nam consectetur mi id sodales mattis. Vestibulum elit metus, finibus at consequat eu, malesuada sit amet velit.</p>\r\n\r\n<p>Mauris et massa quis elit dictum ornare. Nam nec urna diam. Phasellus ut sollicitudin nunc, vel porttitor felis. Fusce ex erat, feugiat elementum finibus ac, tincidunt vel metus. Aliquam hendrerit felis a lorem laoreet, sed dapibus enim maximus. Nunc tempor porta nunc. Suspendisse in urna erat.</p>', '2021-09-13'),
(3, 'Contribuições do PETComp no curso de Computação', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a velit vel enim euismod interdum. Fusce finibus dolor nec felis iaculis, sed vehicula ante convallis. Morbi vulputate ipsum eu libero posuere ultrices. Sed id est erat. Mauris sagittis molestie mi sed hendrerit. Nunc ultrices mollis rhoncus. Nulla sit amet quam et justo vehicula consectetur sed id nisi. Cras volutpat sed mi ut fermentum. Cras eu facilisis sapien. Nunc fermentum purus eget ipsum sollicitudin porttitor. Vestibulum id accumsan lorem. Nam ut viverra neque. Vivamus diam diam, rutrum sit amet lacinia eu, dapibus sed purus. Nullam quis augue venenatis, pulvinar tortor sit amet, suscipit orci. In rhoncus sapien vitae felis pellentesque elementum. Nulla elementum iaculis urna nec placerat.</p>\r\n\r\n<p>Aliquam nec nisi aliquam, auctor ex nec, eleifend sem. Maecenas vehicula tellus vitae semper porta. Nunc ut malesuada lacus. Duis efficitur aliquam nisi. Quisque eu eleifend erat. Pellentesque vulputate est a efficitur luctus. Pellentesque vel dolor nec purus porttitor euismod at quis velit. Pellentesque dictum ipsum ac urna posuere, a ornare ex tincidunt. Praesent a nisi et lacus dapibus semper et malesuada leo. Vivamus leo nisi, fermentum ac auctor sit amet, placerat in lacus. Nulla accumsan turpis sed tortor scelerisque tempor. Curabitur sodales lorem ac ante pharetra dictum. Sed mattis magna non auctor tempor. Quisque arcu justo, feugiat eget elit ornare, elementum molestie lectus. Suspendisse magna arcu, venenatis at feugiat sit amet, lacinia vel nunc. Praesent imperdiet sapien eget sapien suscipit faucibus.</p>\r\n', '2021-09-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `integrantes`
--
ALTER TABLE `integrantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `integrantes`
--
ALTER TABLE `integrantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
