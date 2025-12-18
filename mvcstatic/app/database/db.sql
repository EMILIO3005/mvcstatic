CREATE DATABASE tiendaperu;

USE tiendaperu;

CREATE TABLE productos
(
  id INT AUTO_INCREMENT PRIMARY KEY,
  clasificacion ENUM('Equipo', 'Accesorio', 'Consumible') NOT NULL,
  marca         VARCHAR(30)      NOT NULL,
  descripcion   VARCHAR(100)     NOT NULL,
  garantia      TINYINT          NOT NULL DEFAULT 12,
  ingreso       DATE             NOT NULL,
  cantidad      INT              NOT NULL,
  created       DATETIME         NOT NULL DEFAULT NOW() COMMENT 'Campo calculado fecha y hora',
  updated       DATETIME         NULL COMMENT 'Se agrega al detectar un cambio'
)ENGINE = INNODB;

INSERT INTO productos
(clasificacion, marca, descripcion, garantia, ingreso, cantidad) VALUES
('Equipo', 'Epson', 'Impresora L200', 24, '20025-10-05', 10),
('Accesorio', 'Logitech', 'Teclado USB negro', 12, '20025-11-01', 20),
('Consumible', 'Canon', 'Pixma 190 Yellow', 6, '20025-09-10', 5);
SELECT *FROM productos;
