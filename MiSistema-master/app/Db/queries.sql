CREATE TABLE `mi_db`.`clientes` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `identificacion` VARCHAR(45) NOT NULL,
  `primer_nombre` VARCHAR(45) NOT NULL,
  `segundo_nombre` VARCHAR(45) NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcliente`));


insert into clientes (identificacion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido)
values ('8-000-0000','Amanda', 'Rosa', 'Vega', 'Quiroz'),
('4-000-0000','Marcos', 'Miguel', 'Castro', 'Estrada');

CREATE TABLE `mi_db`.`ventas` (
  `idventa` INT NOT NULL AUTO_INCREMENT,
  `cliente_id` INT NOT NULL,
  `total` DECIMAL(8,2) NOT NULL,
  `puntos` INT NOT NULL,
  PRIMARY KEY (`idventa`));

ALTER TABLE `mi_db`.`ventas` 
ADD INDEX `fk_cliente_idx` (`cliente_id` ASC);
ALTER TABLE `mi_db`.`ventas` 
ADD CONSTRAINT `fk_cliente`
  FOREIGN KEY (`cliente_id`)
  REFERENCES `mi_db`.`clientes` (`idcliente`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;

INSERT INTO ventas (cliente_id, total, puntos)
VALUES(1, 1500.95, 100),
(2, 10000.90, 510);

