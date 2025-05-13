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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `persona` VALUES (2,'Elena','Gutierrez',18,'0980578412','Elena1@hotmail.com','Elena1','Elena1234'),(3,'Oscar','Torres',35,'0984578414','Oscar1@hotmail.com','Oscar1','Oscar1234'),(4,'Sergio','Plex',23,'0980578444','Sergio1@hotmail.com','Sergio1','Sergio1234'),(5,'Lucia','Tapia',28,'0980563050','Lucia1@hotmail.com','Lucia1','Lucia1234'),(6,'Peter','Lopez',29,'0987578444','Peter1@hotmail.com','Peter1','Peter1234'),(8,'joel','velasco',24,'0981223926','joel_sec@hotmail.com','joel1','12345'),(9,'joel','velasco',1,'0981223926','joel_sec@hotmail.com','joel1','12345'),(10,'joel','velasco',23,'0981223926','joel_sec@hotmail.com','joel1','12345'),(11,'joel','velasco',23,'0981223926','joel_sec@hotmail.com','joel1','12345'),(12,'joel','velasco',23,'0981223926','joel_sec@hotmail.com','joel1','12345'),(13,'Joel Andre','Velasco Prieto',24,'0981223926','estefaniamartinez198@hotmail.com','ketapia4','1234'),(14,'Joel Andre','Velasco Prieto',24,'0981223926','estefaniamartinez198@hotmail.com','ketapia5','12345');