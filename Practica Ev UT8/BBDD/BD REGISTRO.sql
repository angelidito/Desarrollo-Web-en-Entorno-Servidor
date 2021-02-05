CREATE DATABASE IF NOT EXISTS usuarios_perros_raza;

CREATE TABLE IF NOT EXISTS usuarios (
    usuario VARCHAR(16),
    contraseña VARCHAR(16) NOT NULL,
    foto longblob NOT NULL,
    PRIMARY KEY (usuario)
) ENGINE = InnoDB CHARSET = utf8 COLLATE utf8_general_ci;

INSERT INTO