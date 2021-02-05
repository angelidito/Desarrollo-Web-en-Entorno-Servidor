CREATE DATABASE IF NOT EXISTS perro_raza_usuarios;

CREATE TABLE IF NOT EXISTS usuarios (
    usuario VARCHAR(16),
    contraseña VARCHAR(16) NOT NULL,
    foto longblob NOT NULL,
    PRIMARY KEY (usuario)
) ENGINE = InnoDB CHARSET = utf8 COLLATE utf8_general_ci;