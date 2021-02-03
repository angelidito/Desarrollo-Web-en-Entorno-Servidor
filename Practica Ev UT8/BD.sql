CREATE DATABASE IF NOT EXISTS perro_raza;

USE DATABASE perro_raza;

-----------------------------------------------------------------
-----------------------------------------------------------------
---------------------------RAZA----------------------------------
-----------------------------------------------------------------
-----------------------------------------------------------------
CREATE TABLE IF NOT EXISTS raza (
    id INT AUTO_INCREMENT,
    raza VARCHAR(30) NOT NULL,
    cuidados_especiales VARCHAR(500) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB CHARSET = utf8 COLLATE utf8_general_ci;

INSERT INTO
    raza (raza, cuidados_especiales)
VALUES
    ('Caniche gigante', 'Peinar 28 veces al día'),
    (
        'Pastor leonés',
        'Peregrinar a León al menos una vez al año y vestirse de oveja para que te pastoree.'
    ),
    (
        'Bóxer',
        'Al contrario de lo que mucha gente piensa este perro no le gusta el boxeo, pero si el ballet.'
    ),
    (
        'Cocker spaniel inglés',
        'Té a las 5 p. m. Todos los días, sin excepción.'
    ),
    ('Dálmata', 'No'),
    (
        'Galgo español',
        'Debe conocer todas las capitales de provincia y comunidad de autónoma antes de cumplir los seis meses. Es de centro.'
    ),
    (
        'Husky siberiano',
        'Largos paseos por la nieve en invierno y agua con hielo en verano.'
    ),
    (
        'Pastor alemán',
        'Peregrinar a Berín al menos una vez al año y vestirse de oveja para que te pastoree.'
    ),
    (
        'San bernardo',
        'Es alcohólico: no tener alcohól en casa.'
    ),
    (
        'Mastín español',
        'Debe conocer todas las capitales de provincia y comunidad de autónoma antes de cumplir. No tiene preferencias en cuando a partídos politicos, piensa que el feudalismo es la mejor opción.'
    );

-----------------------------------------------------------------
-----------------------------------------------------------------
---------------------------PERRO---------------------------------
-----------------------------------------------------------------
-----------------------------------------------------------------
CREATE TABLE IF NOT EXISTS perro2 (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    horas_paseo INT NOT NULL,
    dueño VARCHAR(40) NOT NULL,
    id_raza int,
    PRIMARY KEY (id),
    FOREIGN KEY (id_raza) REFERENCES raza(id)
) ENGINE = InnoDB CHARSET = utf8 COLLATE utf8_general_ci;

INSERT INTO
    perro2 (nombre, horas_paseo, dueño, id_raza)
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
    ('Miau', 2, 'Mr. Incredible', 10);