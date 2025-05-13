CREATE DATABASE desarrolloweb;

CREATE USER 'katherine' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON desarrolloweb.* TO 'katherine';
FLUSH PRIVILEGES;

CREATE TABLE `persona` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `edad` int NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `usuario` varchar(40) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci