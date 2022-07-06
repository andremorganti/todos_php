CREATE DATABASE IF NOT EXISTS todos_db CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE todos_db;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `todos` ( 
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'created'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;


INSERT INTO `todos` (`name`, `status`) VALUES ('Tarefa 1', 'Planejada');
INSERT INTO `todos` (`name`, `status`) VALUES ('Tarefa 2', 'Em Execução');
INSERT INTO `todos` (`name`, `status`) VALUES ('Tarefa 3', 'Planejada');
INSERT INTO `todos` (`name`, `status`) VALUES ('Tarefa 4', 'Planejada');
INSERT INTO `todos` (`name`, `status`) VALUES ('Tarefa 5', 'Criada');
INSERT INTO `todos` (`name`, `status`) VALUES ('Tarefa 6', 'Criada');
INSERT INTO `todos` (`name`, `status`) VALUES ('Tarefa 7', 'Criada');
INSERT INTO `todos` (`name`, `status`) VALUES ('Tarefa 8', 'Criada');
INSERT INTO `todos` (`name`, `status`) VALUES ('Tarefa 9', 'Criada');
INSERT INTO `todos` (`name`, `status`) VALUES ('Tarefa 10', 'Criada');