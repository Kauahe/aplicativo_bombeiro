-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/10/2023 às 01:45
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bombeiros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `senha` varchar(4) NOT NULL,
  `imagem_blob` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`nome`, `email`, `cpf`, `id`, `senha`, `imagem_blob`) VALUES
(' gabriel', 'Gabrielbrach9555@gmail.com', '123455', 45, '1234', 0xffd8ffe000104a46494600010100000100010000ffdb008400090607080706090807080a0a090b0d160f0d0c0c0d1b14151016201d2222201d1f1f2428342c242631271f1f2d3d2d3135373a3a3a232b3f443f384334393a37010a0a0a0d0c0d1a0f0f1a37251f253737373737373737373737373737373737373737373737373737373737373737373737373737373737373737373737373737ffc00011080082008203012200021101031101ffc4001c0000010501010100000000000000000000040002030506070108ffc40037100002010303020306040407010000000001020300041105122131410613511422326171810791a1b1154252c1162324334362d134ffc400190100030101010000000000000000000000010203000405ffc40023110002020202010501010000000000000000010211031221310413223241516114ffda000c03010002110311003f001bc45a6e952c718bd611c85485287183545e10d1b4cd60de59ddcef1ce3fd9607b7ad57cbe6dc5dc875195a218cab75cfd2b5da3c260f0d42aaa8b70f965948c1c9e9fda9e31de54ba3a5f063355b43a4ea4f66b209446705c0c6ea05e72b2974c06f5a96fe793da6669fde97710c7e7432c6644dd9e948e2ac912c9773de32c729040ec1714e04f94430e7b50f11f29c32f5153b485a3da14139f8bd2b6bf491bb141850acc0f07b77a7b984dcf9aacca49c819a1d8b70491c57a5dd78dd4ea29721419763db2712b9d8e40c9f5a6a44f6ec64c6f00e4edf4a647718e3bfa3518a84af9908e3bad1714d0d5607716ac0ef0b8561b96837639c035a0c19edcaeef7d7e107b7caa92e2d65802bc8b80d9c60e738a44abb15a698924decbe7f4feaef47b5829b379a160db79047a5402cde44180785ce08a11649ad9982b95ec403d45235b7c580f241960477a74d1344fb5c608a974e9c472859230e84e483d4511abcd6734b1c966ce430cb061f09a2db52a33407b3e94aa6da9eb5ed6b66369e3eb282ce3d3ee74fb457b6098770781d3158f96fb51ba823815e510ab7ba3a01f7a6fb7ddcd6eb69b9dd547c3926a78efd96ca3b5bb3908d9518e829dfb7e2517bbb657ca93a864652429f78f5c7de9cae238991d595fa8045746f0a6876b3c42f655f3524e5631d3ea6a93c6da0adbeac26371bbcec9d980368145c5eb72124b9e0cddbaa0b633b2f7c7d4d42e0919008c76ab1d4e5b6f64b58ace3d8aaa449ff66f5aa9cbbb6c4193d852c3ab0b5422c1783fbd35a4c9e6b4365e08d6af22597c911061902538346a7e1deac4732439f95339a368cc90f7b81f954f6b7725b363923d2b6567f86f7a5b334a00f91a2e7fc2f9e48d9a0b801fd18f5a4f5223284918f6bd42159380c3824fc26ac7c177769fe25862be8d1a39b2a85870927507f423f2aadd5bc35ac68cccb7d652ac63fe451953f3cd051b3d85dc37080f99048b263e8738aa2a606d9bdf1cc02df5386fd702ddc0465031cfad612e544b72fe58e09c8aeb5e2985355b5812da3005c003737440475ae5ba959cda4de9b799d1f1cee439a59c3595c7f05927d81a831139186a85fe2a9a799257dca08fad300dc7006682bed8a377352a76effa9a546cc281e48a55789b0dd3345bdc35b31dd1c52861df9a8210bb393f4a866f8b1e95ad4b86326d171a2789b52d21bfd3cbbe2030227e83e9436b5ad5e6b17a2eaed94381850a3802abe304920522483ce29b6be01616a85ad4bb1cae722b57f863656f3eaf2c93c6b2344bee0619c1f5ace88d4d9a6e3c1fd2b71f875141a4e917bae6a4c2185dfcb8cb0e4aaf1fa9a9ddc4787274165cf4a9221815938ff107407cee9a48cf6dc879fcaae34cd7f4fd4bff0086ea3971d403c8fb541a6bb2ab92ed466a688628459d55771200f526aba6f18e836ccc92ea506f5eaaad922b2034cbbbd8e39ace58e640e8c84152320d7cfd7288f2ca8a83cb5919149eb807a5767b2f16e89a94becd05da977e1770c0627b67d6b91ebd652695ab6a36520e23b82f11f556c91fa1157c7d8bd2369ae5f5bd87852240c4b1b75503b862b5c9d7748e771278ea4d5bf88b578efae562b290bdb471a2e33fcc07355b6ca1f20b60f5aae597e1264322043c1c9af2376570cbc54f2404b13dc8a9b464b46d4225d40e21279faf6a58fbb814f05dc18e6004f7a55d4e3d274d28a56de3c1031ee8a554ff002afd09c9adf9e2a3bbc79c47a014f8818a560dd8e2bc9159a466c1a8af904f6d10ed32ff002838349c01286619527a5796d70220437209ce2adf4382d6ff0051816e9808d9b956e335becc6cff00875b5d584f6af6d1470c326d86444f7948f53df279fbd5a456ee7c37671b5a24911884cb1e32016c9c7cfad45aa472fb3aa59b15577cbb47db23afe95a7b0dbfc36d94f256355fc862b9d36ad33bf2a8d2923976ab06a6422c7a35ab2b120a14e474c1ea00cff6a2744d324d3ee7da8d9a4463c7bd093cfd89ae8f25bc4c725727e94cf6684909b47519fb5173b544d25760baac2f71651db796e0cca78dd8c8efd3eb5cdaf7489ac678cdbe810c9972a570ce547183d40e6bb488d5e252c0128720fef503da44cfb8a0cd05ed62da6a8c968d60eb26dfe130c7b7e17551b491dc1c67edfa9a9358d09352d6da5d5a15962300711a0209da4800fe793f956d2244550a0567fc5713cbe5c90332cd172bb4f507208f9d06dae47854a49194f1ed807b39047122f911c72421500f2d4b052a31d8e73f6ae67b258250cca7839aea3e3abd363a1c0271fea250aaf8ea15493fb9158596caee6b58a7c811c833b7be28c274b925e456f4875f18c5baccb81bc702aa60844d20524846e370a9e64c88eda690a81f031f5a7458b4b836ce3729efebf4aa4785c104b9250da920dab77300bc0c39a55e18ee32700e2bda3bcbf43c01be65ba23d5aacafedc450b88d39238355d6e9bb73eec739a779cee5d6491be42b3ef8001c51992558d47bccc140f535bed47c1ee9a5c3716edb6408018db8c9ac744c90cb0cf163cc8d8300475c1cd74cd03c4f65ab5a9f6f78e19d1b1b18fed57c7ac97214e81ff000f3518e2b49f4ed41956eaddc98c4879d8dc91f3e7f715aed3678e680f90c0a2b15e0e4571bf15cf0dc6b92c96836aa9da5837c47d456c3f0bef58dadfdb48c495759573e8460fec3f3ae7cb0a6da656192ea2741ed54facea53e9c81a0b292e1dce015e8bf5a9af3525b585a57c90bd80aaeff1440f0a98eda676ee1e261b7f4a89d0a2efa08b1d7b5110077d3a494670caa464569e062f1ab346d19619d8dd45662c3c451f9995b1994f46ff0029ff00f2add75bb59658a255955df380f132e3e59c62b275d9b245fe166c314225cda1bb9627923134606e0cd82a0f34496c8ae2fe3026ef5fd5ee10b7bb208f19ecbeeff6a64ac922dbc437fa76b7ad4d1c52218914c3ef7c2c01e31fad51de417ed7773e5b6d8ed800a8a382bf2aaad2bd83da9c5e4ae8369c11d335b4b9b59a3b0b4b8b790794576bfa30f5ae6ccfd39afe91752e4c5df2f9f16761560339f5a3fc33a03eb4ec6ee668adadd725940dd426ba925a34409f70fc38ee28bd03c43fc1ec2e7dd0f2b9c2ae7a835dde3d4927f421ab1fe188c6cc2b6de3264eb4ab9a39dec58100139c63a52a6f4e03ecbf0b3bad324d3d1165390c3ad57c84c7246e0023a56b35f78f52d3e39226dbb4648ac84a7fd3a8ce487353c72db910b9d2eef4b6c3dc8113afa8c8a6ea16d6d3dcadc58bab44e7a0ec6a8466afbc3b089e261d4ab74fad2e4869ef4cd6792d9aac0eee3dd519a6f8675a9347d4e29c826dcfb9281fd27bfdb83f6ab7d71161d35907fbae3000acc2db49246b03a322904b37a0ad89ed1b618a6e4a8ed42112c987c70718352dc5bcc63c403de1d08a061b9696d2cef62e44d0239f9e541a2e3d6218f8638f51e953a3b6da24d363d4c4c3da1404f507ad5dba07400a8e0e7a5555b6bf6cf26c122e68d93518dc6d87058fa56164e4d92eecc8b18ea4fe55c3f547336ab248b76b2b4cec265071820fa1c5771b142a77b1258f7ae37e23d1069be22b98cc60ab4ad2c722f1c124e0fcc6715482e1db3463bcd45145756888e363a82dc907ad5f59de5e5f696fa717f2e089768dbd5aa93564f2af62b8604a91cfd4511a7eb62d3cf69177b38e0015a51728afb39f36378a4e0c12769a754b7b861b61c852dd48aafc1ddb4fad5c48b1dd5a86380e064e0d0a91c25955ce319c903ad34254899085c002957bed108e021c0f9d2a7da4625bcbdb8764018f96ab803d683dc64548c0e33dbd68cb5569ace64319ff002d4b2b01fa5586851235b7beaa727bfad0b508f417c2b2b27b19e3b41702ddd612db779e84d15e1bb95b6bd7594ed42849fb55b43a999ed1744d498c081f7a4c17273f3aa79f4c91da69d097851b6f9a38ddf3c569d38d4beccebe832d2e9f57d4e52f9f2baa8f4153ea882356541db155ba42cf692b498c295c007bfce8cb8959bdf3c900549c2a76ba3bbc4c12bde5d1bef0c4826f09698d91958029fb7141eb36e2443b81f910704567bc3baf0d3905a4a710336539f849ed5a69efe19621821837422b493b36baf009a368f6ce44922bb367a9635b0b2892321514281dab3d617d146bc75f95152eac208cb743494d85a345a86ab6fa5d9bcf330f74703d4d726d42f65d42f65ba98fbf23138fe91e94fd575893559376ff00f2413b173fbfce82538e698f43c4c1a2d9f6c74d045342639ba1e73dc1aa39ec27859895debd9d791574ef4cf30a9041c53424e21f2bc6c79b97c32922792342083835eacd91b4af63cd5acf6f05d0cb0d8dd772f7a4da6dbe014241ee29f789e464f1326377da283ef4a8f7d3583b00c319a554dd1cdab2ca7596cacbce85c9473965cf152dacd132f9b17087f97d0d57dfde3496488c73ff005a6693911397194cfe66a1a3d6d948c6591a8a2c2e65f6bf2de150369c162781f7af64b82a0aa31e474cf1f950cf2f1800051d00a8c364d65048f43160863feb095c9524f53d4d261918af01dab435c169380eca3e54c75ca7ac4863b88a2d56091e259e289c168d8643fdba51a755823d52692d6178eca57c8880c6d1ea3ae39c9fd2834895318ed4c6182464d3da3cd71926e4fecdcc5e5dbd89bc99d8c21437ba324e7a7eb59cd475196f831919e34fe58d4e02ff00e9a6ff0011966d320b47276c44e4e7afa7e54148dbd0fa678cd4fecbc56aad825a5d9b7998e4b231e6adc5c472a0313820fce814890f2ca3e429eb122b6428a32a6378f2cb8d57682d5b3cf6ed4d76c0a43a54331ed4875ca54876fc53d663eb4339e6923669a88faad3a0df3a9505bebdad41f5515f71deac60e2d22c7f4d2a5557d1e6f89f3631a947f157b4a90ec5d933544f4a956456632a397e2a54a89cd3e89ffe2fb546dd17e94a9528cfa255a70f8a952a05a1d121a864ea2952a034fa2396bc8fe1a54a9d1cefe432952a54499fffd9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastropac`
--

CREATE TABLE `cadastropac` (
  `data_ocr` date NOT NULL,
  `nome_hospital` varchar(45) NOT NULL,
  `nome_pac` varchar(45) NOT NULL,
  `idade_pac` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone_pac` varchar(14) NOT NULL,
  `nome_acomp` varchar(45) NOT NULL,
  `idade_acomp` int(11) NOT NULL,
  `local_ocr` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastropac`
--

INSERT INTO `cadastropac` (`data_ocr`, `nome_hospital`, `nome_pac`, `idade_pac`, `cpf`, `telefone_pac`, `nome_acomp`, `idade_acomp`, `local_ocr`) VALUES
('2023-01-20', 'joao pessoa', 'Evelin', 17, '78965412303', '123654789', 'Kauã', 18, 'Rua Jarivatuba');

-- --------------------------------------------------------

--
-- Estrutura para tabela `glasgow_menor`
--

CREATE TABLE `glasgow_menor` (
  `cpf` varchar(14) NOT NULL,
  `abertura` varchar(45) NOT NULL,
  `resposta_verbal` varchar(45) NOT NULL,
  `respoosta_motora` varchar(45) NOT NULL,
  `soma_GSC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastropac`
--
ALTER TABLE `cadastropac`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `glasgow_menor`
--
ALTER TABLE `glasgow_menor`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
