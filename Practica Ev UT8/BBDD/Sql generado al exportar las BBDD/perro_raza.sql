-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 08-02-2021 a las 10:47:31
-- Versión del servidor: 10.3.14-MariaDB
-- Versión de PHP: 7.2.18
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
  AUTOCOMMIT = 0;

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Base de datos: `perro_raza`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `perro`
--
DROP TABLE IF EXISTS `perro`;

CREATE TABLE IF NOT EXISTS `perro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `horas_paseo` int(11) NOT NULL,
  `dueño` varchar(40) NOT NULL,
  `id_raza` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_raza` (`id_raza`)
) ENGINE = InnoDB AUTO_INCREMENT = 434 DEFAULT CHARSET = utf8;

--
-- Volcado de datos para la tabla `perro`
--
INSERT INTO
  `perro` (
    `id`,
    `nombre`,
    `horas_paseo`,
    `dueño`,
    `id_raza`
  )
VALUES
  (1, 'Bonnie', 1, 'Joaquin Gómez', 1),
  (2, 'Clyde', 2, 'Eusebia Murillo', 1),
  (3, 'Zoe', 1, 'Camila Narvaez', 1),
  (4, 'Piccola', 1, 'Filomena Maza', 2),
  (5, 'Don Juan', 2, 'Mauro Cazorla', 2),
  (6, 'Zorro', 3, 'Ace Mentzer', 2),
  (7, 'Pulgas', 5, 'Archie Prim', 3),
  (8, 'Gati Coco', 3, 'Basim Bianco', 3),
  (9, 'Ali Gato', 2, 'Sanford Fraga', 3),
  (10, 'Mustafá', 1, 'Halcyone Black', 4),
  (11, 'Roneo', 1, 'Tyne Senior', 4),
  (12, 'Gato', 1, 'Trahaearn Goode', 5),
  (13, 'Zanahorio', 1, 'Folkus McCary', 5),
  (14, 'Wifi', 1, 'Magdalena Patterson', 5),
  (15, 'Gatactico', 1, 'Mogo Dealba', 5),
  (16, 'Gaternico', 4, 'Zenobio Nisbet', 6),
  (17, 'Gremlin', 3, 'Tajsa Morefield', 7),
  (18, 'Flash', 2, 'Zuriel Black', 7),
  (19, 'Gati Popins', 3, 'Antal Moor', 7),
  (20, 'Señor Miau', 2, 'Kerry Patterson', 8),
  (21, 'Mojigato', 2, 'Ordelia Luu', 8),
  (22, 'Gaternico', 2, 'Rajni Rausch', 9),
  (23, 'Wisky', 3, 'Rajni Rausch', 9),
  (24, 'Liantêe', 3, 'Marcade Farrer', 9),
  (25, 'Kim-Jon-Gato', 3, 'Zeki Archer', 10),
  (26, 'Ron', 1, 'Seraphina Engel', 10),
  (27, 'atoG', 7, 'Imam Engel', 10),
  (28, 'Bigotes', 1, 'Luka Zatcher', 9),
  (29, 'Arañazos', 3, 'Robb Robert', 9),
  (30, 'Maullidos', 3, 'Marde Faked', 4),
  (31, 'Pulgas', 3, 'Marian Archer', 3),
  (32, 'Zorro', 1, 'Fols Name', 6),
  (33, 'Miau', 2, 'Mr. Incredible', 10),
  (34, 'Huevete', 1, 'Antonio García', 3),
  (35, 'Thelmo', 1, 'Manuel Rodríguez', 4),
  (36, 'Borya', 3, 'José González', 6),
  (37, 'Cástor', 1, 'Francisco Fernández', 2),
  (38, 'Azor', 1, 'David López', 2),
  (39, 'Eros', 1, 'Juan Martínez', 4),
  (40, 'Eneas', 1, 'José Antonio Sánchez', 6),
  (41, 'Dooham', 1, 'Javier Pérez', 8),
  (42, 'Manchas', 2, 'Daniel Gómez', 1),
  (43, 'Hōkō', 1, 'José Luis Martin', 6),
  (44, 'Hades', 1, 'Francisco Javier Jiménez', 8),
  (45, 'Moulet', 2, 'Carlos Ruiz', 4),
  (46, 'Axel', 1, 'Jesús Hernández', 9),
  (47, 'Davit', 1, 'Alejandro Díaz', 1),
  (48, 'Gringo', 2, 'Miguel Moreno', 5),
  (49, 'Mickey', 2, 'José Manuel Muñoz', 9),
  (50, 'Karim', 2, 'Rafael Álvarez', 8),
  (51, 'Totoro', 1, 'Miguel Ángel Romero', 6),
  (52, 'Elmer', 3, 'Pedro Alonso', 4),
  (53, 'Villa', 1, 'Pablo Gutiérrez', 2),
  (54, 'Binky', 1, 'Ángel Navarro', 5),
  (55, 'Señor Furia', 2, 'Sergio Torres', 9),
  (56, 'Parkour', 2, 'José María Domínguez', 9),
  (57, 'Mambo', 2, 'Fernando Vázquez', 1),
  (58, 'Akron', 2, 'Jorge Ramos', 5),
  (59, 'Skipper', 1, 'Luis Gil', 1),
  (60, 'Totó', 2, 'Alberto Ramírez', 9),
  (61, 'Kerchak', 1, 'Juan Carlos Serrano', 9),
  (62, 'Cobi', 1, 'Álvaro Blanco', 3),
  (63, 'Max', 1, 'Adrián Molina', 7),
  (64, 'Fedello', 2, 'Juan José Morales', 10),
  (65, 'Suini', 3, 'Diego Suarez', 9),
  (66, 'Kripton', 1, 'Raúl Ortega', 10),
  (67, 'Tango', 2, 'Iban Delgado', 7),
  (68, 'Chamán', 1, 'Juan Antonio Castro', 1),
  (69, 'Alf', 2, 'Rubén Ortiz', 9),
  (70, 'Akira', 1, 'Enrique Marín', 8),
  (71, 'Kal-El', 2, 'Oscar Rubio', 6),
  (72, 'Cronos', 1, 'Ramón Sanz', 9),
  (73, 'Gastón', 2, 'Vicente Núñez', 10),
  (74, 'Keita', 2, 'Andrés Medina', 10),
  (75, 'Miliki', 2, 'Juan Manuel Iglesias', 2),
  (76, 'Zurisadahi', 1, 'Joaquín Cortes', 8),
  (77, 'Boby', 2, 'Santiago Castillo', 10),
  (78, 'Sugar', 1, 'Víctor Garrido', 9),
  (79, 'Diamante', 2, 'Eduardo Santos', 4),
  (80, 'Bond', 2, 'Mario Lozano', 5),
  (81, 'Blas', 2, 'Roberto Guerrero', 8),
  (82, 'Acero', 3, 'Jaime Cano', 6),
  (83, 'Dumbo', 2, 'Francisco José Prieto', 8),
  (84, 'Elur', 2, 'Marcos Méndez', 9),
  (85, 'Garras', 1, 'Ignacio Cruz', 5),
  (86, 'Ares', 1, 'Alfonso Flores', 1),
  (87, 'Shere Khan', 2, 'Jordi Herrera', 6),
  (88, 'Bowie', 2, 'Hugo Gallego', 10),
  (89, 'Ferrero', 2, 'Ricardo Márquez', 9),
  (90, 'Haro', 1, 'Salvador León', 2),
  (91, 'Absolem', 1, 'Guillermo Peña', 10),
  (92, 'Atum', 2, 'Emilio Calvo', 2),
  (93, 'Flanders', 2, 'Gabriel Cabrera', 1),
  (94, 'Davor', 1, 'Marc Vidal', 1),
  (95, 'Adán', 1, 'Gonzalo Campos', 3),
  (96, 'Oreo', 1, 'Julio Vega', 6),
  (97, 'Alai', 1, 'Julián Fuentes', 5),
  (98, 'Emmet', 2, 'Mohamed Carrasco', 1),
  (99, 'Mimo', 2, 'José Miguel Reyes', 2),
  (100, 'Noir', 1, 'Tomas Diez', 8),
  (101, 'Eclipse', 2, 'Martin Caballero', 8),
  (102, 'Joker', 1, 'Agustín Nieto', 1),
  (103, 'Chuky', 1, 'José Ramón Aguilar', 9),
  (104, 'Luck', 1, 'Nicolás Santana', 7),
  (105, 'Curro', 1, 'Ismael Pascual', 8),
  (106, 'Han Solo', 2, 'Joan Herrero', 2),
  (107, 'Zack', 1, 'Félix Montero', 9),
  (108, 'Spot', 1, 'Samuel Hidalgo', 8),
  (109, 'Willy', 1, 'Cristian Giménez', 2),
  (110, 'Atila', 1, 'Aitor Lorenzo', 4),
  (111, 'Tiger', 1, 'Lucas Ibáñez', 8),
  (112, 'Cooper', 1, 'Héctor Vargas', 9),
  (113, 'Febo', 2, 'Juan Francisco Santiago', 2),
  (114, 'Timón', 1, 'Iker Duran', 9),
  (115, 'Robin', 2, 'Josep Ferrer', 2),
  (116, 'Summer', 1, 'José Carlos Benítez', 8),
  (117, 'Pooky', 2, 'Alex Mora', 1),
  (118, 'Teo', 1, 'Mariano Arias', 3),
  (119, 'Akamaru', 2, 'Domingo Vicente', 6),
  (120, 'Simba', 2, 'Sebastián Carmona', 4),
  (121, 'Harvey', 2, 'Alfredo Crespo', 6),
  (122, 'Vuvú', 1, 'Cesar Román', 4),
  (123, 'Newman', 2, 'José Ángel Soto', 2),
  (124, 'Dédalo', 2, 'Felipe Pastor', 5),
  (125, 'Tomy', 2, 'José Ignacio Velasco', 2),
  (126, 'Ra', 2, 'Víctor Manuel Sáez', 4),
  (127, 'Herodes', 2, 'Rodrigo Rojas', 2),
  (128, 'Astor', 3, 'Luis Miguel Moya', 7),
  (129, 'Ramsés', 1, 'Mateo Parra', 8),
  (130, 'Genio', 1, 'José Francisco Soler', 3),
  (131, 'Bécquer', 2, 'Juan Luis Bravo', 4),
  (132, 'Byron', 2, 'Xavier Gallardo', 7),
  (133, 'Backet', 1, 'Albert Esteban', 3),
  (134, 'Hache', 2, 'María Carmen Pardo', 4),
  (135, 'Lioh', 2, 'María Rivera', 6),
  (136, 'Chucky', 2, 'Carmen Franco', 9),
  (137, 'Poncho', 1, 'Ana María Merino', 4),
  (138, 'Lennox', 2, 'Josefa Rivas', 4),
  (139, 'Dalí', 2, 'Isabel Lara', 5),
  (140, 'Boss', 1, 'María Pilar Silva', 7),
  (141, 'Sosis', 2, 'María Dolores Espinosa', 9),
  (142, 'Lázaro', 1, 'Laura Izquierdo', 8),
  (143, 'Horus', 1, 'María Teresa Camacho', 1),
  (144, 'Hércules', 2, 'Ana Vera', 8),
  (145, 'Pumba', 1, 'Cristina Arroyo', 8),
  (146, 'Jordan', 2, 'Marta Casado', 5),
  (147, 'Lory Mony', 2, 'María Ángeles Ríos', 4),
  (148, 'Geppetto', 2, 'Francisca Redondo', 5),
  (149, 'Lobo', 2, 'Lucia Mendoza', 1),
  (150, 'Rumble', 1, 'María Isabel Luque', 6),
  (151, 'Koala', 2, 'María José Galán', 1),
  (152, 'Gray', 2, 'Antonia Rey', 6),
  (153, 'Malphite', 1, 'Dolores Sierra', 10),
  (154, 'Bichi', 2, 'Sara Montes', 2),
  (155, 'Lambo', 2, 'Paula Otero', 2),
  (156, 'Tritón', 3, 'Elena Segura', 9),
  (157, 'Viento', 1, 'María Luisa Carrillo', 9),
  (158, 'Kiko', 3, 'Raquel Marcos', 6),
  (159, 'Tizón', 2, 'Rosa María Soriano', 6),
  (160, 'Hommer', 2, 'Pilar Bernal', 9),
  (161, 'Sisuko', 1, 'Concepción Martí', 4),
  (162, 'Orellana', 1, 'Manuela Heredia', 3),
  (163, 'Lolito', 2, 'María Jesús Robles', 5),
  (164, 'Rexi', 1, 'Mercedes Valero', 1),
  (165, 'Nesquick', 2, 'Julia Vila', 8),
  (166, 'Cola-cao', 2, 'Beatriz Palacios', 5),
  (167, 'Oreo', 1, 'Nuria Macías', 2),
  (168, 'Félix', 2, 'Silvia Expósito', 9),
  (169, 'Nero', 2, 'Rosario Contreras', 10),
  (170, 'Ninja', 2, 'Juana Guerra', 4),
  (171, 'Batman', 2, 'Alba Varela', 9),
  (172, 'Sombra', 2, 'Irene Benito', 1),
  (173, 'Silvestre', 2, 'Teresa Roldan', 5),
  (174, 'Choco', 2, 'Encarnación Pereira', 5),
  (175, 'Mágico', 1, 'Patricia Mateo', 9),
  (176, 'Leo', 1, 'Montserrat Bueno', 1),
  (177, 'Adrien', 1, 'Andrea Andrés', 1),
  (178, 'Espresso', 1, 'Roció Miranda', 3),
  (179, 'Dylan', 2, 'Mónica Villar', 3),
  (180, 'Bombo', 2, 'Rosa Guillen', 10),
  (181, 'Adonis', 2, 'Alicia Aguilera', 6),
  (182, 'Aldo', 1, 'María Mar Mateos', 10),
  (183, 'Aquiles', 2, 'Sonia Escudero', 10),
  (184, 'Algodón', 2, 'Sandra Casas', 5),
  (185, 'Capuccino', 2, 'Ángela Rivero', 9),
  (186, 'Grumete', 2, 'Marina Padilla', 3),
  (187, 'Pitingo', 2, 'Susana Aparicio', 9),
  (188, 'Pulgoso', 1, 'Natalia Calderón', 3),
  (189, 'Capone', 1, 'Yolanda Acosta', 3),
  (190, 'Zape', 1, 'Margarita Estévez', 8),
  (191, 'Ashira', 2, 'María Josefa Beltrán', 6),
  (192, 'Duque', 2, 'Claudia Salazar', 10),
  (193, 'Fluffy', 2, 'Eva Gálvez', 3),
  (
    194,
    'Lucky Luke',
    1,
    'María Rosario Menéndez',
    3
  ),
  (195, 'Dagda', 3, 'Inmaculada Salas', 7),
  (196, 'Presidente Miau', 2, 'Sofía Rico', 3),
  (197, 'Gohan', 1, 'María Mercedes Guzmán', 10),
  (198, 'Waffle', 2, 'Carla Jurado', 10),
  (199, 'Happy', 2, 'Ana Isabel Conde', 3),
  (200, 'Yuriko', 2, 'Esther Bermúdez', 6),
  (201, 'Broadway', 2, 'Noelia Gracia', 8),
  (202, 'Quesito', 1, 'Verónica Quintana', 1),
  (203, 'Silvestre', 1, 'Ángeles Abad', 6),
  (204, 'Nemui', 1, 'Nerea Aranda', 8),
  (205, 'Zipi', 1, 'Carolina Plaza', 8),
  (206, 'Thelmo', 2, 'María Victoria Blázquez', 1),
  (207, 'Manchas', 1, 'Eva María Santamaría', 8),
  (208, 'Totoro', 2, 'Inés Ávila', 5),
  (209, 'Villa', 2, 'Miriam Roca', 10),
  (210, 'Señor Furia', 2, 'María Rosa Manzano', 9),
  (211, 'Kerchak', 2, 'Daniela Trujillo', 2),
  (212, 'Fedello', 2, 'Lorena Costa', 5),
  (213, 'Baloo', 3, 'Ana Belén Hurtado', 8),
  (214, 'Brandy', 1, 'María Elena Villanueva', 6),
  (215, 'Dandi', 2, 'María Concepción Pacheco', 6),
  (216, 'Adonis', 3, 'Victoria Miguel', 1),
  (217, 'Copérnico', 3, 'Amparo Serra', 3),
  (218, 'Bubba', 1, 'María Antonia Rueda', 10),
  (219, 'Aldo', 2, 'Catalina Cuesta', 5),
  (220, 'Frodo', 2, 'Martina Escobar', 8),
  (221, 'Fofó', 1, 'Lidia Tomas', 3),
  (222, 'Algodón', 2, 'Alejandra Mesa', 6),
  (223, 'Aquiles', 2, 'Celia De La Fuente', 9),
  (224, 'Bam-Bam', 1, 'María Nieves Simón', 4),
  (225, 'Dátil', 2, 'Consuelo Del Rio', 7),
  (226, 'Golfo', 1, 'Olga Luna', 6),
  (227, 'Donald', 2, 'Ainhoa Lázaro', 3),
  (228, 'Fofito', 1, 'Fátima Pons', 2),
  (229, 'Bunner', 2, 'Gloria Alarcón', 1),
  (230, 'Capuccino', 2, 'Emilia Sancho', 3),
  (231, 'Toby', 1, 'María Soledad Millán', 3),
  (232, 'Jazz', 1, 'Clara Zamora', 4),
  (233, 'Copito', 1, 'María Cristina Castaño', 10),
  (234, 'Luna', 2, 'Antonio García', 8),
  (235, 'Kira', 1, 'María Carmen Rodríguez', 6),
  (236, 'Lola', 1, 'María González', 4),
  (237, 'Nala', 1, 'Carmen Fernández', 7),
  (238, 'Bimba', 2, 'Ana María López', 1),
  (239, 'Noa', 2, 'Josefa Martínez', 6),
  (240, 'Maya', 1, 'Isabel Sánchez', 8),
  (241, 'Mia', 2, 'María Pilar Pérez', 5),
  (242, 'Duna', 1, 'María Dolores Gómez', 5),
  (243, 'Gala', 1, 'Laura Martin', 1),
  (244, 'Trufa', 2, 'María Teresa Jiménez', 2),
  (245, 'Dana', 1, 'Ana Ruiz', 2),
  (246, 'Nina', 2, 'Cristina Hernández', 3),
  (247, 'Kiara', 2, 'Marta Díaz', 1),
  (248, 'Bella', 2, 'María Ángeles Moreno', 9),
  (249, 'Canela', 1, 'Francisca Muñoz', 2),
  (250, 'Lua', 1, 'Lucia Álvarez', 6),
  (251, 'Frida', 1, 'María Isabel Romero', 7),
  (252, 'Lia', 2, 'María José Alonso', 1),
  (253, 'Laika', 2, 'Antonia Gutiérrez', 9),
  (254, 'Pepa', 2, 'Dolores Navarro', 8),
  (255, 'Arya', 1, 'Sara Torres', 6),
  (256, 'Nana', 1, 'Paula Domínguez', 9),
  (257, 'Linda', 1, 'Elena Vázquez', 9),
  (258, 'Dama', 2, 'María Luisa Ramos', 1),
  (259, 'Leia', 2, 'Raquel Gil', 8),
  (260, 'Kyra', 2, 'Rosa María Ramírez', 1),
  (261, 'Tara', 1, 'Pilar Serrano', 7),
  (262, 'Lana', 2, 'Concepción Blanco', 8),
  (263, 'Coco', 1, 'Manuela Molina', 9),
  (264, 'Mika', 2, 'María Jesús Morales', 3),
  (265, 'Tina', 1, 'Mercedes Suarez', 7),
  (266, 'India', 1, 'Julia Ortega', 9),
  (267, 'Nora', 2, 'Beatriz Delgado', 3),
  (268, 'Rita', 2, 'Nuria Castro', 6),
  (269, 'Sasha', 1, 'Silvia Ortiz', 6),
  (270, 'Chispa', 2, 'Rosario Marín', 4),
  (271, 'Greta', 1, 'Juana Rubio', 3),
  (272, 'Lluna', 2, 'Alba Sanz', 10),
  (273, 'Pipa', 2, 'Irene Núñez', 2),
  (274, 'Chloe', 1, 'Teresa Medina', 2),
  (275, 'Cora', 2, 'Encarnación Iglesias', 3),
  (276, 'Lula', 2, 'Patricia Cortes', 4),
  (277, 'Kala', 2, 'Montserrat Castillo', 5),
  (278, 'Cloe', 1, 'Andrea Garrido', 4),
  (279, 'Sira', 1, 'Roció Santos', 7),
  (280, 'Zoe', 1, 'Mónica Lozano', 5),
  (281, 'Lucy', 1, 'Rosa Guerrero', 10),
  (282, 'Kika', 2, 'Alicia Cano', 5),
  (283, 'Nela', 1, 'María Mar Prieto', 7),
  (284, 'Tana', 2, 'Sonia Méndez', 7),
  (285, 'Nube', 2, 'Sandra Cruz', 3),
  (286, 'Mía', 2, 'Ángela Flores', 1),
  (287, 'Maggie', 2, 'Marina Herrera', 5),
  (288, 'Cleo', 1, 'Susana Gallego', 2),
  (289, 'Molly', 2, 'Natalia Márquez', 3),
  (290, 'Shiva', 1, 'Yolanda León', 1),
  (291, 'Uma', 1, 'Margarita Peña', 10),
  (292, 'Perla', 1, 'María Josefa Calvo', 5),
  (293, 'Kora', 2, 'Claudia Cabrera', 8),
  (294, 'Tula', 1, 'Eva Vidal', 3),
  (295, 'Rumba', 1, 'María Rosario Campos', 3),
  (296, 'Olivia', 1, 'Inmaculada Vega', 10),
  (297, 'Ona', 1, 'Sofía Fuentes', 9),
  (298, 'Sansa', 1, 'María Mercedes Carrasco', 7),
  (299, 'Bruna', 2, 'Carla Reyes', 1),
  (300, 'Roma', 2, 'Ana Isabel Herrero', 7),
  (301, 'Mora', 2, 'Esther Montero', 9),
  (302, 'Lulu', 2, 'Noelia Hidalgo', 5),
  (303, 'Hera', 1, 'Verónica Giménez', 10),
  (304, 'Aria', 3, 'Ángeles Lorenzo', 7),
  (305, 'Nuka', 1, 'Nerea Ibáñez', 6),
  (306, 'Nika', 2, 'Carolina Vargas', 1),
  (307, 'Dora', 1, 'María Victoria Santiago', 3),
  (308, 'Neska', 1, 'Eva María Duran', 4),
  (309, 'Jara', 3, 'Inés Ferrer', 1),
  (310, 'Chanel', 2, 'Miriam Benítez', 5),
  (311, 'Lara', 3, 'María Rosa Mora', 1),
  (312, 'Freya', 1, 'Daniela Arias', 1),
  (313, 'Wendy', 1, 'Lorena Vicente', 6),
  (314, 'Noah', 2, 'Ana Belén Carmona', 8),
  (315, 'Samba', 2, 'María Elena Crespo', 9),
  (316, 'Xena', 1, 'María Concepción Román', 8),
  (317, 'Boira', 1, 'Victoria Soto', 10),
  (318, 'Reina', 2, 'Amparo Pastor', 1),
  (319, 'Lili', 2, 'María Antonia Velasco', 7),
  (320, 'Milka', 2, 'Catalina Sáez', 9),
  (321, 'Alma', 1, 'Martina Rojas', 2),
  (322, 'Lía', 2, 'Lidia Moya', 10),
  (323, 'Cala', 1, 'Alejandra Parra', 2),
  (324, 'Mila', 2, 'Celia Soler', 9),
  (325, 'Lila', 1, 'María Nieves Bravo', 4),
  (326, 'Princesa', 2, 'Consuelo Gallardo', 5),
  (327, 'Shira', 1, 'Olga Esteban', 5),
  (328, 'Vera', 1, 'Ainhoa Pardo', 7),
  (329, 'Mel', 1, 'Fátima Rivera', 4),
  (330, 'Blanca', 1, 'Gloria Franco', 3),
  (331, 'Chica', 2, 'Emilia Merino', 3),
  (332, 'Daisy', 1, 'María Soledad Rivas', 7),
  (333, 'Akira', 1, 'Clara Lara', 9),
  (334, 'Thor', 1, 'María Cristina Silva', 10),
  (335, 'Coco', 2, 'Manuel Espinosa', 5),
  (336, 'Max', 1, 'José Izquierdo', 1),
  (337, 'Leo', 2, 'Francisco Camacho', 7),
  (338, 'Bruno', 2, 'David Vera', 9),
  (339, 'Rocky', 1, 'Juan Arroyo', 1),
  (340, 'Zeus', 1, 'José Antonio Casado', 3),
  (341, 'Lucas', 2, 'Javier Ríos', 3),
  (342, 'Toby', 2, 'Daniel Redondo', 7),
  (343, 'Simba', 1, 'José Luis Mendoza', 5),
  (344, 'Otto', 2, 'Francisco Javier Luque', 7),
  (345, 'Lucky', 1, 'Carlos Galán', 10),
  (346, 'Pancho', 1, 'Jesús Rey', 4),
  (347, 'Lolo', 3, 'Alejandro Sierra', 9),
  (348, 'Golfo', 1, 'Miguel Montes', 8),
  (349, 'Jack', 1, 'José Manuel Otero', 2),
  (350, 'Pepe', 1, 'Rafael Segura', 6),
  (351, 'Tango', 1, 'Miguel Ángel Carrillo', 8),
  (352, 'Ron', 1, 'Pedro Marcos', 7),
  (353, 'Pipo', 1, 'Pablo Soriano', 9),
  (354, 'Duque', 1, 'Ángel Diez', 4),
  (355, 'Baloo', 1, 'Sergio Caballero', 3),
  (356, 'Cooper', 2, 'José María Nieto', 9),
  (357, 'Yako', 2, 'Fernando Aguilar', 1),
  (358, 'Buddy', 3, 'Jorge Santana', 7),
  (359, 'Ares', 1, 'Luis Pascual', 10),
  (360, 'Bruce', 2, 'Alberto Bernal', 6),
  (361, 'Milo', 1, 'Juan Carlos Martí', 3),
  (362, 'Rocco', 2, 'Álvaro Heredia', 8),
  (363, 'Curro', 2, 'Adrián Robles', 9),
  (364, 'Chester', 2, 'Juan José Valero', 8),
  (365, 'Teo', 1, 'Diego Vila', 4),
  (366, 'Sam', 1, 'Raúl Palacios', 1),
  (367, 'Nano', 2, 'Iban Macías', 5),
  (368, 'Blacky', 1, 'Juan Antonio Expósito', 6),
  (369, 'Nico', 2, 'Rubén Contreras', 2),
  (370, 'Dante', 2, 'Enrique Guerra', 6),
  (371, 'Neo', 1, 'Oscar Varela', 4),
  (372, 'Romeo', 2, 'Ramón Benito', 8),
  (373, 'Chico', 1, 'Vicente Roldan', 9),
  (374, 'Django', 2, 'Andrés Pereira', 3),
  (375, 'Rufo', 2, 'Juan Manuel Mateo', 2),
  (376, 'Duke', 1, 'Joaquín Bueno', 7),
  (377, 'Luca', 2, 'Santiago Andrés', 9),
  (378, 'Goku', 1, 'Víctor Miranda', 10),
  (379, 'Blue', 2, 'Eduardo Villar', 7),
  (380, 'Marley', 1, 'Mario Guillen', 5),
  (381, 'Rex', 1, 'Roberto Aguilera', 4),
  (382, 'Kai', 2, 'Jaime Mateos', 4),
  (383, 'Roco', 1, 'Francisco José Escudero', 5),
  (384, 'Paco', 2, 'Marcos Casas', 6),
  (385, 'Odin', 2, 'Ignacio Rivero', 4),
  (386, 'Tyson', 2, 'Alfonso Padilla', 9),
  (387, 'Dexter', 1, 'Jordi Aparicio', 2),
  (388, 'Oreo', 2, 'Hugo Calderón', 6),
  (389, 'Charlie', 1, 'Ricardo Acosta', 10),
  (390, 'Gus', 1, 'Salvador Estévez', 2),
  (391, 'Elvis', 1, 'Guillermo Beltrán', 8),
  (392, 'Choco', 1, 'Emilio Salazar', 8),
  (393, 'Trasto', 2, 'Gabriel Gálvez', 1),
  (394, 'Robin', 2, 'Marc Menéndez', 2),
  (395, 'Drako', 2, 'Gonzalo Salas', 6),
  (396, 'Roy', 2, 'Julio Rico', 2),
  (397, 'Loki', 2, 'Julián Guzmán', 9),
  (398, 'Gordo', 1, 'Mohamed Jurado', 10),
  (399, 'Kiko', 2, 'José Miguel Conde', 4),
  (400, 'Danko', 1, 'Tomas Bermúdez', 2),
  (401, 'Lobo', 2, 'Martin Gracia', 1),
  (402, 'Hugo', 1, 'Agustín Quintana', 5),
  (403, 'Draco', 2, 'José Ramón Abad', 8),
  (404, 'Terry', 2, 'Nicolás Aranda', 5),
  (405, 'Tito', 1, 'Ismael Plaza', 7),
  (406, 'Teddy', 1, 'Joan Blázquez', 7),
  (407, 'Cholo', 1, 'Félix Santamaría', 2),
  (408, 'Fito', 2, 'Samuel Ávila', 2),
  (409, 'Bob', 2, 'Cristian Roca', 5),
  (410, 'Rayo', 1, 'Aitor Manzano', 7),
  (411, 'Pluto', 2, 'Lucas Trujillo', 6),
  (412, 'Enzo', 3, 'Héctor Costa', 9),
  (413, 'Black', 1, 'Juan Francisco Hurtado', 9),
  (414, 'Pongo', 1, 'Iker Villanueva', 6),
  (415, 'Ringo', 2, 'Josep Pacheco', 1),
  (416, 'Niko', 2, 'José Carlos Miguel', 9),
  (417, 'Tommy', 2, 'Alex Serra', 6),
  (418, 'Tayson', 2, 'Mariano Rueda', 7),
  (419, 'Lennon', 1, 'Domingo Cuesta', 7),
  (420, 'Oscar', 1, 'Sebastián Escobar', 6),
  (421, 'Troy', 1, 'Alfredo Tomas', 10),
  (422, 'Tobi', 2, 'Cesar Mesa', 8),
  (423, 'Boss', 2, 'José Ángel De La Fuente', 2),
  (424, 'Apolo', 2, 'Felipe Simón', 6),
  (425, 'Bowie', 2, 'José Ignacio Del Rio', 6),
  (426, 'Bobby', 2, 'Víctor Manuel Luna', 4),
  (427, 'Willy', 2, 'Rodrigo Lázaro', 3),
  (428, 'Bimbo', 2, 'Luis Miguel Pons', 6),
  (429, 'Happy', 1, 'Mateo Alarcón', 2),
  (430, 'Scooby', 2, 'José Francisco Sancho', 1),
  (431, 'Balto', 2, 'Juan Luis Millán', 4),
  (432, 'Toy', 1, 'Xavier Zamora', 2),
  (433, 'Dobby', 1, 'Albert Castaño', 1);

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `raza`
--
DROP TABLE IF EXISTS `raza`;

CREATE TABLE IF NOT EXISTS `raza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `raza` varchar(30) NOT NULL,
  `cuidados_especiales` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 11 DEFAULT CHARSET = utf8;

--
-- Volcado de datos para la tabla `raza`
--
INSERT INTO
  `raza` (`id`, `raza`, `cuidados_especiales`)
VALUES
  (1, 'caniche gigante', 'Peinar 28 veces al día'),
  (
    2,
    'pastor leonés',
    'Peregrinar a León al menos una vez al año y vestirse de oveja para que te pastoree.'
  ),
  (
    3,
    'bóxer',
    'Al contrario de lo que mucha gente piensa este perro no le gusta el boxeo, pero si el ballet.'
  ),
  (
    4,
    'cocker spaniel inglés',
    'Té a las 5 p. m. Todos los días, sin excepción.'
  ),
  (5, 'dálmata', 'No'),
  (
    6,
    'galgo español',
    'Debe conocer todas las capitales de provincia y comunidad de autónoma antes de cumplir los seis meses. Es de centro.'
  ),
  (
    7,
    'husky siberiano',
    'Largos paseos por la nieve en invierno y agua con hielo en verano.'
  ),
  (
    8,
    'pastor alemán',
    'Peregrinar a Berín al menos una vez al año y vestirse de oveja para que te pastoree.'
  ),
  (
    9,
    'san bernardo',
    'Es alcohólico: no tener alcohól en casa.'
  ),
  (
    10,
    'mastín español',
    'Debe conocer todas las capitales de provincia y comunidad de autónoma antes de cumplir. No tiene preferencias en cuando a partídos politicos, piensa que el feudalismo es la mejor opción.'
  );

--
-- Restricciones para tablas volcadas
--
--
-- Filtros para la tabla `perro`
--
ALTER TABLE
  `perro`
ADD
  CONSTRAINT `perro_ibfk_1` FOREIGN KEY (`id_raza`) REFERENCES `raza` (`id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;