-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2022 at 10:51 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18842267_db_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_date` date NOT NULL,
  `user_mensagem` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_date`, `user_mensagem`, `active`) VALUES
(8, 'Heitor', 'heitor@teste.com', '2022-05-31', 'Teste atualização 30052022', 0),
(12, 'LAIS C S TEIXEIRA', 'Laiscostast@gmail.com', '2022-05-24', 'Teste crud', 0),
(14, 'LAIS C S TEIXEIRA', 'Laiscostast@gmail.com', '2022-05-31', 'Atualização 31/05/22', 0),
(21, 'Ian Clark', 'Laiscostast@gmail.com', '1830-05-31', 'Perdida - Carina Rissi', 0),
(23, 'lais costa santos teixeira', 'lais_uckermann@hotmail.com', '1993-11-13', 'Teste final ', 0),
(24, 'LAIS C S TEIXEIRA', 'Laiscostast@gmail.com', '2022-05-25', 'asdasdasd', 0),
(25, 'Sofia Alonzo Clarck', 'sofia@perdida.com', '2022-05-29', 'Teste', 0),
(29, 'Aula de update no crud', 'teste@teste', '2022-05-31', 'Aula de crud update', 0),
(30, 'Lais', 'Laiscostast@gmail.com', '2022-05-31', 'Teste ultimo dia 31/05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
