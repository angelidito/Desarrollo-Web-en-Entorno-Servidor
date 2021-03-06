CREATE DATABASE IF NOT EXISTS perro_raza;

CREATE TABLE IF NOT EXISTS raza (
    id INT AUTO_INCREMENT,
    raza VARCHAR(30) NOT NULL,
    cuidados_especiales VARCHAR(500) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB CHARSET = utf8 COLLATE utf8_general_ci;

INSERT INTO
    raza (raza, cuidados_especiales)
VALUES
    (
        'caniche gigante',
        'Peinar 28 veces al día'
    ),
    (
        'pastor leonés',
        'Peregrinar a León al menos una vez al año y vestirse de oveja para que te pastoree.'
    ),
    (
        'bóxer',
        'Al contrario de lo que mucha gente piensa este perro no le gusta el boxeo, pero si el ballet.'
    ),
    (
        'cocker spaniel inglés',
        'Té a las 5 p. m. Todos los días, sin excepción.'
    ),
    ('dálmata', 'No'),
    (
        'galgo español',
        'Debe conocer todas las capitales de provincia y comunidad de autónoma antes de cumplir los seis meses. Es de centro.'
    ),
    (
        'husky siberiano',
        'Largos paseos por la nieve en invierno y agua con hielo en verano.'
    ),
    (
        'pastor alemán',
        'Peregrinar a Berín al menos una vez al año y vestirse de oveja para que te pastoree.'
    ),
    (
        'san bernardo',
        'Es alcohólico: no tener alcohól en casa.'
    ),
    (
        'mastín español',
        'Debe conocer todas las capitales de provincia y comunidad de autónoma antes de cumplir. No tiene preferencias en cuando a partídos politicos, piensa que el feudalismo es la mejor opción.'
    );

CREATE TABLE IF NOT EXISTS perro (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    horas_paseo INT NOT NULL,
    dueño VARCHAR(40) NOT NULL,
    id_raza int,
    PRIMARY KEY (id),
    FOREIGN KEY (id_raza) REFERENCES raza(id)
) ENGINE = InnoDB CHARSET = utf8 COLLATE utf8_general_ci;

INSERT INTO
    perro (nombre, horas_paseo, dueño, id_raza)
VALUES
    ('Bonnie', 1, 'Joaquin Gómez', 1),
    ('Clyde', 2, 'Eusebia Murillo', 1),
    ('Zoe', 1, 'Camila Narvaez', 1),
    ('Piccola', 0.5, 'Filomena Maza', 2),
    ('Don Juan', 2, 'Mauro Cazorla', 2),
    ('Zorro', 3, 'Ace Mentzer', 2),
    ('Pulgas', 5, 'Archie Prim', 3),
    ('Gati Coco', 3, 'Basim Bianco', 3),
    ('Ali Gato', 2, 'Sanford Fraga', 3),
    ('Mustafá', 1, 'Halcyone Black', 4),
    ('Roneo', 1, 'Tyne Senior', 4),
    ('Gato', 1, 'Trahaearn Goode', 5),
    ('Zanahorio', 1, 'Folkus McCary', 5),
    ('Wifi', 1, 'Magdalena Patterson', 5),
    ('Gatactico', 1, 'Mogo Dealba', 5),
    ('Gaternico', 4, 'Zenobio Nisbet', 6),
    ('Gremlin', 3, 'Tajsa Morefield', 7),
    ('Flash', 2, 'Zuriel Black', 7),
    ('Gati Popins', 3, 'Antal Moor', 7),
    ('Señor Miau', 2, 'Kerry Patterson', 8),
    ('Mojigato', 2, 'Ordelia Luu', 8),
    ('Gaternico', 2, 'Rajni Rausch', 9),
    ('Wisky', 3, 'Rajni Rausch', 9),
    ('Liantêe', 3, 'Marcade Farrer', 9),
    ('Kim-Jon-Gato', 3, 'Zeki Archer', 10),
    ('Ron', 1, 'Seraphina Engel', 10),
    ('atoG', 7, 'Imam Engel', 10),
    ('Bigotes', 1, 'Luka Zatcher', 9),
    ('Arañazos', 3, 'Robb Robert', 9),
    ('Maullidos', 3, 'Marde Faked', 4),
    ('Pulgas', 3, 'Marian Archer', 3),
    ('Zorro', 1, 'Fols Name', 6),
    ('Miau', 2, 'Mr. Incredible', 10),
    ('Huevete', 0.6, 'Antonio García', 3),
    ('Thelmo', 0.7, 'Manuel Rodríguez', 4),
    ('Borya', 2.5, 'José González', 6),
    ('Cástor', 0.8, 'Francisco Fernández', 2),
    ('Azor', 1.3, 'David López', 2),
    ('Eros', 0.8, 'Juan Martínez', 4),
    ('Eneas', 1.3, 'José Antonio Sánchez', 6),
    ('Dooham', 0.9, 'Javier Pérez', 8),
    ('Manchas', 2.1, 'Daniel Gómez', 1),
    ('Hōkō', 1.2, 'José Luis Martin', 6),
    ('Hades', 0.8, 'Francisco Javier Jiménez', 8),
    ('Moulet', 1.7, 'Carlos Ruiz', 4),
    ('Axel', 1, 'Jesús Hernández', 9),
    ('Davit', 0.7, 'Alejandro Díaz', 1),
    ('Gringo', 1.8, 'Miguel Moreno', 5),
    ('Mickey', 1.7, 'José Manuel Muñoz', 9),
    ('Karim', 1.8, 'Rafael Álvarez', 8),
    ('Totoro', 1.3, 'Miguel Ángel Romero', 6),
    ('Elmer', 2.5, 'Pedro Alonso', 4),
    ('Villa', 1, 'Pablo Gutiérrez', 2),
    ('Binky', 0.7, 'Ángel Navarro', 5),
    ('Señor Furia', 1.7, 'Sergio Torres', 9),
    ('Parkour', 2.2, 'José María Domínguez', 9),
    ('Mambo', 1.7, 'Fernando Vázquez', 1),
    ('Akron', 2.4, 'Jorge Ramos', 5),
    ('Skipper', 1.4, 'Luis Gil', 1),
    ('Totó', 2.4, 'Alberto Ramírez', 9),
    ('Kerchak', 0.6, 'Juan Carlos Serrano', 9),
    ('Cobi', 1.3, 'Álvaro Blanco', 3),
    ('Max', 1.4, 'Adrián Molina', 7),
    ('Fedello', 1.5, 'Juan José Morales', 10),
    ('Suini', 2.5, 'Diego Suarez', 9),
    ('Kripton', 0.6, 'Raúl Ortega', 10),
    ('Tango', 2.2, 'Iban Delgado', 7),
    ('Chamán', 1.2, 'Juan Antonio Castro', 1),
    ('Alf', 2, 'Rubén Ortiz', 9),
    ('Akira', 0.5, 'Enrique Marín', 8),
    ('Kal-El', 1.7, 'Oscar Rubio', 6),
    ('Cronos', 0.7, 'Ramón Sanz', 9),
    ('Gastón', 2.4, 'Vicente Núñez', 10),
    ('Keita', 2.2, 'Andrés Medina', 10),
    ('Miliki', 1.8, 'Juan Manuel Iglesias', 2),
    ('Zurisadahi', 0.9, 'Joaquín Cortes', 8),
    ('Boby', 2.2, 'Santiago Castillo', 10),
    ('Sugar', 1.1, 'Víctor Garrido', 9),
    ('Diamante', 2.3, 'Eduardo Santos', 4),
    ('Bond', 2, 'Mario Lozano', 5),
    ('Blas', 2.1, 'Roberto Guerrero', 8),
    ('Acero', 2.5, 'Jaime Cano', 6),
    ('Dumbo', 2.3, 'Francisco José Prieto', 8),
    ('Elur', 1.8, 'Marcos Méndez', 9),
    ('Garras', 0.9, 'Ignacio Cruz', 5),
    ('Ares', 0.9, 'Alfonso Flores', 1),
    ('Shere Khan', 1.9, 'Jordi Herrera', 6),
    ('Bowie', 1.9, 'Hugo Gallego', 10),
    ('Ferrero', 1.9, 'Ricardo Márquez', 9),
    ('Haro', 1.3, 'Salvador León', 2),
    ('Absolem', 0.7, 'Guillermo Peña', 10),
    ('Atum', 2.2, 'Emilio Calvo', 2),
    ('Flanders', 1.8, 'Gabriel Cabrera', 1),
    ('Davor', 0.9, 'Marc Vidal', 1),
    ('Adán', 0.5, 'Gonzalo Campos', 3),
    ('Oreo', 1.1, 'Julio Vega', 6),
    ('Alai', 0.5, 'Julián Fuentes', 5),
    ('Emmet', 1.9, 'Mohamed Carrasco', 1),
    ('Mimo', 1.8, 'José Miguel Reyes', 2),
    ('Noir', 0.8, 'Tomas Diez', 8),
    ('Eclipse', 2.2, 'Martin Caballero', 8),
    ('Joker', 0.7, 'Agustín Nieto', 1),
    ('Chuky', 0.6, 'José Ramón Aguilar', 9),
    ('Luck', 0.6, 'Nicolás Santana', 7),
    ('Curro', 1, 'Ismael Pascual', 8),
    ('Han Solo', 1.9, 'Joan Herrero', 2),
    ('Zack', 1, 'Félix Montero', 9),
    ('Spot', 0.5, 'Samuel Hidalgo', 8),
    ('Willy', 0.6, 'Cristian Giménez', 2),
    ('Atila', 0.8, 'Aitor Lorenzo', 4),
    ('Tiger', 0.9, 'Lucas Ibáñez', 8),
    ('Cooper', 0.8, 'Héctor Vargas', 9),
    ('Febo', 1.5, 'Juan Francisco Santiago', 2),
    ('Timón', 1, 'Iker Duran', 9),
    ('Robin', 1.9, 'Josep Ferrer', 2),
    ('Summer', 0.6, 'José Carlos Benítez', 8),
    ('Pooky', 2.1, 'Alex Mora', 1),
    ('Teo', 1.3, 'Mariano Arias', 3),
    ('Akamaru', 2.2, 'Domingo Vicente', 6),
    ('Simba', 2.4, 'Sebastián Carmona', 4),
    ('Harvey', 2.2, 'Alfredo Crespo', 6),
    ('Vuvú', 0.8, 'Cesar Román', 4),
    ('Newman', 1.5, 'José Ángel Soto', 2),
    ('Dédalo', 1.6, 'Felipe Pastor', 5),
    ('Tomy', 1.5, 'José Ignacio Velasco', 2),
    ('Ra', 1.7, 'Víctor Manuel Sáez', 4),
    ('Herodes', 2.3, 'Rodrigo Rojas', 2),
    ('Astor', 2.5, 'Luis Miguel Moya', 7),
    ('Ramsés', 1, 'Mateo Parra', 8),
    ('Genio', 0.9, 'José Francisco Soler', 3),
    ('Bécquer', 1.5, 'Juan Luis Bravo', 4),
    ('Byron', 2.3, 'Xavier Gallardo', 7),
    ('Backet', 0.6, 'Albert Esteban', 3),
    ('Hache', 1.5, 'María Carmen Pardo', 4),
    ('Lioh', 1.8, 'María Rivera', 6),
    ('Chucky', 1.5, 'Carmen Franco', 9),
    ('Poncho', 1, 'Ana María Merino', 4),
    ('Lennox', 2.3, 'Josefa Rivas', 4),
    ('Dalí', 1.6, 'Isabel Lara', 5),
    ('Boss', 0.5, 'María Pilar Silva', 7),
    ('Sosis', 2.3, 'María Dolores Espinosa', 9),
    ('Lázaro', 1, 'Laura Izquierdo', 8),
    ('Horus', 0.8, 'María Teresa Camacho', 1),
    ('Hércules', 2.3, 'Ana Vera', 8),
    ('Pumba', 0.6, 'Cristina Arroyo', 8),
    ('Jordan', 1.7, 'Marta Casado', 5),
    ('Lory Mony', 1.8, 'María Ángeles Ríos', 4),
    ('Geppetto', 2.1, 'Francisca Redondo', 5),
    ('Lobo', 1.9, 'Lucia Mendoza', 1),
    ('Rumble', 0.9, 'María Isabel Luque', 6),
    ('Koala', 2, 'María José Galán', 1),
    ('Gray', 2.1, 'Antonia Rey', 6),
    ('Malphite', 0.6, 'Dolores Sierra', 10),
    ('Bichi', 2.2, 'Sara Montes', 2),
    ('Lambo', 2.2, 'Paula Otero', 2),
    ('Tritón', 2.5, 'Elena Segura', 9),
    ('Viento', 1.4, 'María Luisa Carrillo', 9),
    ('Kiko', 2.5, 'Raquel Marcos', 6),
    ('Tizón', 1.7, 'Rosa María Soriano', 6),
    ('Hommer', 2.3, 'Pilar Bernal', 9),
    ('Sisuko', 0.7, 'Concepción Martí', 4),
    ('Orellana', 0.6, 'Manuela Heredia', 3),
    ('Lolito', 2.2, 'María Jesús Robles', 5),
    ('Rexi', 0.5, 'Mercedes Valero', 1),
    ('Nesquick', 1.7, 'Julia Vila', 8),
    ('Cola-cao', 1.7, 'Beatriz Palacios', 5),
    ('Oreo', 1.1, 'Nuria Macías', 2),
    ('Félix', 2, 'Silvia Expósito', 9),
    ('Nero', 1.6, 'Rosario Contreras', 10),
    ('Ninja', 2.1, 'Juana Guerra', 4),
    ('Batman', 1.8, 'Alba Varela', 9),
    ('Sombra', 1.7, 'Irene Benito', 1),
    ('Silvestre', 1.7, 'Teresa Roldan', 5),
    ('Choco', 1.7, 'Encarnación Pereira', 5),
    ('Mágico', 0.5, 'Patricia Mateo', 9),
    ('Leo', 1.1, 'Montserrat Bueno', 1),
    ('Adrien', 0.7, 'Andrea Andrés', 1),
    ('Espresso', 1.3, 'Roció Miranda', 3),
    ('Dylan', 2.3, 'Mónica Villar', 3),
    ('Bombo', 1.7, 'Rosa Guillen', 10),
    ('Adonis', 1.5, 'Alicia Aguilera', 6),
    ('Aldo', 1.2, 'María Mar Mateos', 10),
    ('Aquiles', 2.1, 'Sonia Escudero', 10),
    ('Algodón', 1.5, 'Sandra Casas', 5),
    ('Capuccino', 2.2, 'Ángela Rivero', 9),
    ('Grumete', 2, 'Marina Padilla', 3),
    ('Pitingo', 2.1, 'Susana Aparicio', 9),
    ('Pulgoso', 0.5, 'Natalia Calderón', 3),
    ('Capone', 1, 'Yolanda Acosta', 3),
    ('Zape', 1.3, 'Margarita Estévez', 8),
    ('Ashira', 2.2, 'María Josefa Beltrán', 6),
    ('Duque', 1.8, 'Claudia Salazar', 10),
    ('Fluffy', 1.8, 'Eva Gálvez', 3),
    ('Lucky Luke', 1.4, 'María Rosario Menéndez', 3),
    ('Dagda', 2.5, 'Inmaculada Salas', 7),
    ('Presidente Miau', 1.8, 'Sofía Rico', 3),
    ('Gohan', 1.4, 'María Mercedes Guzmán', 10),
    ('Waffle', 2.4, 'Carla Jurado', 10),
    ('Happy', 1.7, 'Ana Isabel Conde', 3),
    ('Yuriko', 1.7, 'Esther Bermúdez', 6),
    ('Broadway', 2.2, 'Noelia Gracia', 8),
    ('Quesito', 1.2, 'Verónica Quintana', 1),
    ('Silvestre', 0.8, 'Ángeles Abad', 6),
    ('Nemui', 0.8, 'Nerea Aranda', 8),
    ('Zipi', 1.3, 'Carolina Plaza', 8),
    ('Thelmo', 2.3, 'María Victoria Blázquez', 1),
    ('Manchas', 0.8, 'Eva María Santamaría', 8),
    ('Totoro', 2.2, 'Inés Ávila', 5),
    ('Villa', 2, 'Miriam Roca', 10),
    ('Señor Furia', 2.2, 'María Rosa Manzano', 9),
    ('Kerchak', 1.9, 'Daniela Trujillo', 2),
    ('Fedello', 2.1, 'Lorena Costa', 5),
    ('Baloo', 2.5, 'Ana Belén Hurtado', 8),
    ('Brandy', 1.4, 'María Elena Villanueva', 6),
    ('Dandi', 1.9, 'María Concepción Pacheco', 6),
    ('Adonis', 2.5, 'Victoria Miguel', 1),
    ('Copérnico', 2.5, 'Amparo Serra', 3),
    ('Bubba', 0.9, 'María Antonia Rueda', 10),
    ('Aldo', 2, 'Catalina Cuesta', 5),
    ('Frodo', 2.3, 'Martina Escobar', 8),
    ('Fofó', 0.6, 'Lidia Tomas', 3),
    ('Algodón', 1.9, 'Alejandra Mesa', 6),
    ('Aquiles', 2.2, 'Celia De La Fuente', 9),
    ('Bam-Bam', 0.7, 'María Nieves Simón', 4),
    ('Dátil', 2, 'Consuelo Del Rio', 7),
    ('Golfo', 0.7, 'Olga Luna', 6),
    ('Donald', 1.7, 'Ainhoa Lázaro', 3),
    ('Fofito', 0.9, 'Fátima Pons', 2),
    ('Bunner', 1.5, 'Gloria Alarcón', 1),
    ('Capuccino', 2.2, 'Emilia Sancho', 3),
    ('Toby', 0.5, 'María Soledad Millán', 3),
    ('Jazz', 0.5, 'Clara Zamora', 4),
    ('Copito', 0.6, 'María Cristina Castaño', 10),
    ('Luna', 1.5, 'Antonio García', 8),
    ('Kira', 1.4, 'María Carmen Rodríguez', 6),
    ('Lola', 1, 'María González', 4),
    ('Nala', 1, 'Carmen Fernández', 7),
    ('Bimba', 2.2, 'Ana María López', 1),
    ('Noa', 2.4, 'Josefa Martínez', 6),
    ('Maya', 0.6, 'Isabel Sánchez', 8),
    ('Mia', 2, 'María Pilar Pérez', 5),
    ('Duna', 1.4, 'María Dolores Gómez', 5),
    ('Gala', 0.8, 'Laura Martin', 1),
    ('Trufa', 2.1, 'María Teresa Jiménez', 2),
    ('Dana', 1, 'Ana Ruiz', 2),
    ('Nina', 1.5, 'Cristina Hernández', 3),
    ('Kiara', 1.8, 'Marta Díaz', 1),
    ('Bella', 1.6, 'María Ángeles Moreno', 9),
    ('Canela', 1.3, 'Francisca Muñoz', 2),
    ('Lua', 1, 'Lucia Álvarez', 6),
    ('Frida', 0.6, 'María Isabel Romero', 7),
    ('Lia', 1.7, 'María José Alonso', 1),
    ('Laika', 1.5, 'Antonia Gutiérrez', 9),
    ('Pepa', 2.3, 'Dolores Navarro', 8),
    ('Arya', 1.1, 'Sara Torres', 6),
    ('Nana', 1.2, 'Paula Domínguez', 9),
    ('Linda', 1.1, 'Elena Vázquez', 9),
    ('Dama', 1.6, 'María Luisa Ramos', 1),
    ('Leia', 2.3, 'Raquel Gil', 8),
    ('Kyra', 2.4, 'Rosa María Ramírez', 1),
    ('Tara', 1, 'Pilar Serrano', 7),
    ('Lana', 2.1, 'Concepción Blanco', 8),
    ('Coco', 0.7, 'Manuela Molina', 9),
    ('Mika', 2.2, 'María Jesús Morales', 3),
    ('Tina', 0.5, 'Mercedes Suarez', 7),
    ('India', 1.3, 'Julia Ortega', 9),
    ('Nora', 1.7, 'Beatriz Delgado', 3),
    ('Rita', 2.2, 'Nuria Castro', 6),
    ('Sasha', 1.4, 'Silvia Ortiz', 6),
    ('Chispa', 2.4, 'Rosario Marín', 4),
    ('Greta', 0.9, 'Juana Rubio', 3),
    ('Lluna', 2.3, 'Alba Sanz', 10),
    ('Pipa', 1.5, 'Irene Núñez', 2),
    ('Chloe', 0.6, 'Teresa Medina', 2),
    ('Cora', 1.6, 'Encarnación Iglesias', 3),
    ('Lula', 1.7, 'Patricia Cortes', 4),
    ('Kala', 2.1, 'Montserrat Castillo', 5),
    ('Cloe', 0.9, 'Andrea Garrido', 4),
    ('Sira', 0.8, 'Roció Santos', 7),
    ('Zoe', 0.5, 'Mónica Lozano', 5),
    ('Lucy', 1, 'Rosa Guerrero', 10),
    ('Kika', 1.8, 'Alicia Cano', 5),
    ('Nela', 0.8, 'María Mar Prieto', 7),
    ('Tana', 1.9, 'Sonia Méndez', 7),
    ('Nube', 1.5, 'Sandra Cruz', 3),
    ('Mía', 2.4, 'Ángela Flores', 1),
    ('Maggie', 1.5, 'Marina Herrera', 5),
    ('Cleo', 0.6, 'Susana Gallego', 2),
    ('Molly', 2.3, 'Natalia Márquez', 3),
    ('Shiva', 0.9, 'Yolanda León', 1),
    ('Uma', 0.7, 'Margarita Peña', 10),
    ('Perla', 0.6, 'María Josefa Calvo', 5),
    ('Kora', 2.1, 'Claudia Cabrera', 8),
    ('Tula', 1.1, 'Eva Vidal', 3),
    ('Rumba', 0.8, 'María Rosario Campos', 3),
    ('Olivia', 0.7, 'Inmaculada Vega', 10),
    ('Ona', 1.2, 'Sofía Fuentes', 9),
    ('Sansa', 0.7, 'María Mercedes Carrasco', 7),
    ('Bruna', 1.8, 'Carla Reyes', 1),
    ('Roma', 2.4, 'Ana Isabel Herrero', 7),
    ('Mora', 2.1, 'Esther Montero', 9),
    ('Lulu', 1.7, 'Noelia Hidalgo', 5),
    ('Hera', 1, 'Verónica Giménez', 10),
    ('Aria', 2.5, 'Ángeles Lorenzo', 7),
    ('Nuka', 0.9, 'Nerea Ibáñez', 6),
    ('Nika', 1.8, 'Carolina Vargas', 1),
    ('Dora', 0.5, 'María Victoria Santiago', 3),
    ('Neska', 0.6, 'Eva María Duran', 4),
    ('Jara', 2.5, 'Inés Ferrer', 1),
    ('Chanel', 2.1, 'Miriam Benítez', 5),
    ('Lara', 2.5, 'María Rosa Mora', 1),
    ('Freya', 0.9, 'Daniela Arias', 1),
    ('Wendy', 1.2, 'Lorena Vicente', 6),
    ('Noah', 2.3, 'Ana Belén Carmona', 8),
    ('Samba', 2.1, 'María Elena Crespo', 9),
    ('Xena', 0.8, 'María Concepción Román', 8),
    ('Boira', 1.1, 'Victoria Soto', 10),
    ('Reina', 2.3, 'Amparo Pastor', 1),
    ('Lili', 1.9, 'María Antonia Velasco', 7),
    ('Milka', 2.2, 'Catalina Sáez', 9),
    ('Alma', 0.5, 'Martina Rojas', 2),
    ('Lía', 2.2, 'Lidia Moya', 10),
    ('Cala', 1.3, 'Alejandra Parra', 2),
    ('Mila', 2.1, 'Celia Soler', 9),
    ('Lila', 0.7, 'María Nieves Bravo', 4),
    ('Princesa', 1.9, 'Consuelo Gallardo', 5),
    ('Shira', 0.9, 'Olga Esteban', 5),
    ('Vera', 1.3, 'Ainhoa Pardo', 7),
    ('Mel', 0.6, 'Fátima Rivera', 4),
    ('Blanca', 1.1, 'Gloria Franco', 3),
    ('Chica', 2.1, 'Emilia Merino', 3),
    ('Daisy', 1.3, 'María Soledad Rivas', 7),
    ('Akira', 1.4, 'Clara Lara', 9),
    ('Thor', 0.5, 'María Cristina Silva', 10),
    ('Coco', 1.7, 'Manuel Espinosa', 5),
    ('Max', 1.2, 'José Izquierdo', 1),
    ('Leo', 2.4, 'Francisco Camacho', 7),
    ('Bruno', 2.1, 'David Vera', 9),
    ('Rocky', 0.5, 'Juan Arroyo', 1),
    ('Zeus', 0.8, 'José Antonio Casado', 3),
    ('Lucas', 1.5, 'Javier Ríos', 3),
    ('Toby', 1.9, 'Daniel Redondo', 7),
    ('Simba', 1, 'José Luis Mendoza', 5),
    ('Otto', 1.5, 'Francisco Javier Luque', 7),
    ('Lucky', 0.9, 'Carlos Galán', 10),
    ('Pancho', 0.5, 'Jesús Rey', 4),
    ('Lolo', 2.5, 'Alejandro Sierra', 9),
    ('Golfo', 0.5, 'Miguel Montes', 8),
    ('Jack', 0.6, 'José Manuel Otero', 2),
    ('Pepe', 0.6, 'Rafael Segura', 6),
    ('Tango', 1.1, 'Miguel Ángel Carrillo', 8),
    ('Ron', 0.5, 'Pedro Marcos', 7),
    ('Pipo', 0.5, 'Pablo Soriano', 9),
    ('Duque', 0.7, 'Ángel Diez', 4),
    ('Baloo', 0.9, 'Sergio Caballero', 3),
    ('Cooper', 1.6, 'José María Nieto', 9),
    ('Yako', 2.2, 'Fernando Aguilar', 1),
    ('Buddy', 2.5, 'Jorge Santana', 7),
    ('Ares', 0.5, 'Luis Pascual', 10),
    ('Bruce', 2.1, 'Alberto Bernal', 6),
    ('Milo', 1.2, 'Juan Carlos Martí', 3),
    ('Rocco', 2.1, 'Álvaro Heredia', 8),
    ('Curro', 2.3, 'Adrián Robles', 9),
    ('Chester', 1.7, 'Juan José Valero', 8),
    ('Teo', 1.3, 'Diego Vila', 4),
    ('Sam', 1.3, 'Raúl Palacios', 1),
    ('Nano', 1.5, 'Iban Macías', 5),
    ('Blacky', 0.7, 'Juan Antonio Expósito', 6),
    ('Nico', 2, 'Rubén Contreras', 2),
    ('Dante', 1.7, 'Enrique Guerra', 6),
    ('Neo', 1.1, 'Oscar Varela', 4),
    ('Romeo', 2, 'Ramón Benito', 8),
    ('Chico', 0.7, 'Vicente Roldan', 9),
    ('Django', 2.4, 'Andrés Pereira', 3),
    ('Rufo', 1.9, 'Juan Manuel Mateo', 2),
    ('Duke', 1, 'Joaquín Bueno', 7),
    ('Luca', 2.2, 'Santiago Andrés', 9),
    ('Goku', 0.8, 'Víctor Miranda', 10),
    ('Blue', 1.9, 'Eduardo Villar', 7),
    ('Marley', 0.7, 'Mario Guillen', 5),
    ('Rex', 1, 'Roberto Aguilera', 4),
    ('Kai', 1.7, 'Jaime Mateos', 4),
    ('Roco', 0.9, 'Francisco José Escudero', 5),
    ('Paco', 1.6, 'Marcos Casas', 6),
    ('Odin', 2.1, 'Ignacio Rivero', 4),
    ('Tyson', 2.3, 'Alfonso Padilla', 9),
    ('Dexter', 0.6, 'Jordi Aparicio', 2),
    ('Oreo', 1.8, 'Hugo Calderón', 6),
    ('Charlie', 1, 'Ricardo Acosta', 10),
    ('Gus', 1, 'Salvador Estévez', 2),
    ('Elvis', 0.6, 'Guillermo Beltrán', 8),
    ('Choco', 0.5, 'Emilio Salazar', 8),
    ('Trasto', 2.4, 'Gabriel Gálvez', 1),
    ('Robin', 2.4, 'Marc Menéndez', 2),
    ('Drako', 2.1, 'Gonzalo Salas', 6),
    ('Roy', 1.8, 'Julio Rico', 2),
    ('Loki', 2.1, 'Julián Guzmán', 9),
    ('Gordo', 1.3, 'Mohamed Jurado', 10),
    ('Kiko', 1.8, 'José Miguel Conde', 4),
    ('Danko', 1, 'Tomas Bermúdez', 2),
    ('Lobo', 1.7, 'Martin Gracia', 1),
    ('Hugo', 1.4, 'Agustín Quintana', 5),
    ('Draco', 1.8, 'José Ramón Abad', 8),
    ('Terry', 2, 'Nicolás Aranda', 5),
    ('Tito', 0.6, 'Ismael Plaza', 7),
    ('Teddy', 0.8, 'Joan Blázquez', 7),
    ('Cholo', 0.8, 'Félix Santamaría', 2),
    ('Fito', 2, 'Samuel Ávila', 2),
    ('Bob', 2, 'Cristian Roca', 5),
    ('Rayo', 0.8, 'Aitor Manzano', 7),
    ('Pluto', 2.2, 'Lucas Trujillo', 6),
    ('Enzo', 2.5, 'Héctor Costa', 9),
    ('Black', 1.4, 'Juan Francisco Hurtado', 9),
    ('Pongo', 0.5, 'Iker Villanueva', 6),
    ('Ringo', 2.4, 'Josep Pacheco', 1),
    ('Niko', 2, 'José Carlos Miguel', 9),
    ('Tommy', 1.6, 'Alex Serra', 6),
    ('Tayson', 1.9, 'Mariano Rueda', 7),
    ('Lennon', 0.8, 'Domingo Cuesta', 7),
    ('Oscar', 0.5, 'Sebastián Escobar', 6),
    ('Troy', 1.1, 'Alfredo Tomas', 10),
    ('Tobi', 1.6, 'Cesar Mesa', 8),
    ('Boss', 2.2, 'José Ángel De La Fuente', 2),
    ('Apolo', 2.1, 'Felipe Simón', 6),
    ('Bowie', 2.3, 'José Ignacio Del Rio', 6),
    ('Bobby', 2.4, 'Víctor Manuel Luna', 4),
    ('Willy', 2, 'Rodrigo Lázaro', 3),
    ('Bimbo', 1.5, 'Luis Miguel Pons', 6),
    ('Happy', 1, 'Mateo Alarcón', 2),
    ('Scooby', 1.8, 'José Francisco Sancho', 1),
    ('Balto', 1.9, 'Juan Luis Millán', 4),
    ('Toy', 0.5, 'Xavier Zamora', 2),
    ('Dobby', 1.1, 'Albert Castaño', 1);