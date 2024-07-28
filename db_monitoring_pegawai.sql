-- Adminer 4.8.1 MySQL 8.0.36-0ubuntu0.20.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tb_job`;
CREATE TABLE `tb_job` (
  `id_job` varchar(10) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `salary` int NOT NULL,
  PRIMARY KEY (`id_job`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `tb_job` (`id_job`, `job_name`, `salary`) VALUES
('ad',	'Admin',	0),
('fd',	'Flutter Developer',	50000000),
('op',	'Operator',	2000000);

DROP TABLE IF EXISTS `tb_task`;
CREATE TABLE `tb_task` (
  `id_task` int NOT NULL AUTO_INCREMENT,
  `task_name` text NOT NULL,
  `description` text NOT NULL,
  `progress` double NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_task`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `id_job` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `tb_user` (`id_user`, `name`, `nohp`, `pass`, `role`, `address`, `id_job`) VALUES
(1,	'Admin',	'0891',	'202cb962ac59075b964b07152d234b70',	'Admin',	'Jl. Admin',	'ad'),
(11,	'Kiki',	'0857',	'7f95b733f4210c71482904eb422143f8',	'Operator',	'Sidoarjo',	'op'),
(12,	'Yudha',	'0812',	'7f95b733f4210c71482904eb422143f8',	'Operator',	'Sidoarjo',	'op'),
(13,	'Citra',	'0831',	'7f95b733f4210c71482904eb422143f8',	'Pegawai',	'Tanggerang',	'fd'),
(14,	'Bubub',	'0822',	'7f95b733f4210c71482904eb422143f8',	'Pegawai',	'Tangsel',	'fd');

-- 2024-04-12 16:49:35
