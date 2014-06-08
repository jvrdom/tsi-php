SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `tsi-php` DEFAULT CHARACTER SET utf8 ;
USE `tsi-php` ;

-- -----------------------------------------------------
-- Table `tsi-php`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`user` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`direccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`direccion` (
  `id_direccion` INT NOT NULL AUTO_INCREMENT COMMENT '		',
  `direccion` VARCHAR(45) NULL,
  `latlong` VARCHAR(45) NULL,
  PRIMARY KEY (`id_direccion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`tipo_inmueble`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`tipo_inmueble` (
  `id_tipo_inmueble` INT NOT NULL AUTO_INCREMENT COMMENT '		',
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipo_inmueble`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`inmueble`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`inmueble` (
  `id_inmueble` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(120) NULL,
  `precio` DOUBLE NULL,
  `superficie` INT NULL,
  `dormitorios` VARCHAR(45) NULL,
  `baños` INT NULL,
  `estado` VARCHAR(45) NULL,
  `direccion_id_direccion` INT NOT NULL,
  `tipo_inmueble_id_tipo_inmueble` INT NOT NULL,
  PRIMARY KEY (`id_inmueble`, `tipo_inmueble_id_tipo_inmueble`),
  INDEX `fk_inmueble_direccion1_idx` (`direccion_id_direccion` ASC),
  INDEX `fk_inmueble_tipo_inmueble1_idx` (`tipo_inmueble_id_tipo_inmueble` ASC),
  CONSTRAINT `fk_inmueble_direccion1`
    FOREIGN KEY (`direccion_id_direccion`)
    REFERENCES `tsi-php`.`direccion` (`id_direccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inmueble_tipo_inmueble1`
    FOREIGN KEY (`tipo_inmueble_id_tipo_inmueble`)
    REFERENCES `tsi-php`.`tipo_inmueble` (`id_tipo_inmueble`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`imagen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`imagen` (
  `id_imagen` INT NOT NULL AUTO_INCREMENT,
  `url` VARCHAR(45) NULL,
  `inmueble_id_inmueble` INT NOT NULL,
  PRIMARY KEY (`id_imagen`),
  INDEX `fk_imagen_inmueble1_idx` (`inmueble_id_inmueble` ASC),
  CONSTRAINT `fk_imagen_inmueble1`
    FOREIGN KEY (`inmueble_id_inmueble`)
    REFERENCES `tsi-php`.`inmueble` (`id_inmueble`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`administra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`administra` (
  `user_id_usuario` INT NOT NULL,
  `inmueble_id_inmueble` INT NOT NULL,
  PRIMARY KEY (`user_id_usuario`, `inmueble_id_inmueble`),
  INDEX `fk_user_has_inmueble_inmueble1_idx` (`inmueble_id_inmueble` ASC),
  INDEX `fk_user_has_inmueble_user1_idx` (`user_id_usuario` ASC),
  CONSTRAINT `fk_user_has_inmueble_user1`
    FOREIGN KEY (`user_id_usuario`)
    REFERENCES `tsi-php`.`user` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_inmueble_inmueble1`
    FOREIGN KEY (`inmueble_id_inmueble`)
    REFERENCES `tsi-php`.`inmueble` (`id_inmueble`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`calendario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`calendario` (
  `id_calendario` INT NOT NULL AUTO_INCREMENT,
  `comienza` DATETIME NULL,
  `finaliza` DATETIME NULL,
  `descripcion` VARCHAR(120) NULL,
  PRIMARY KEY (`id_calendario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`inmueble_calendario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`inmueble_calendario` (
  `inmueble_id_inmueble` INT NOT NULL,
  `calendario_id_calendario` INT NOT NULL,
  PRIMARY KEY (`inmueble_id_inmueble`, `calendario_id_calendario`),
  INDEX `fk_inmueble_has_calendario_calendario1_idx` (`calendario_id_calendario` ASC),
  INDEX `fk_inmueble_has_calendario_inmueble1_idx` (`inmueble_id_inmueble` ASC),
  CONSTRAINT `fk_inmueble_has_calendario_inmueble1`
    FOREIGN KEY (`inmueble_id_inmueble`)
    REFERENCES `tsi-php`.`inmueble` (`id_inmueble`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inmueble_has_calendario_calendario1`
    FOREIGN KEY (`calendario_id_calendario`)
    REFERENCES `tsi-php`.`calendario` (`id_calendario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`user_calendario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`user_calendario` (
  `user_id_usuario` INT NOT NULL,
  `calendario_id_calendario` INT NOT NULL,
  PRIMARY KEY (`user_id_usuario`, `calendario_id_calendario`),
  INDEX `fk_user_has_calendario_calendario1_idx` (`calendario_id_calendario` ASC),
  INDEX `fk_user_has_calendario_user1_idx` (`user_id_usuario` ASC),
  CONSTRAINT `fk_user_has_calendario_user1`
    FOREIGN KEY (`user_id_usuario`)
    REFERENCES `tsi-php`.`user` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_calendario_calendario1`
    FOREIGN KEY (`calendario_id_calendario`)
    REFERENCES `tsi-php`.`calendario` (`id_calendario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`cliente` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`consulta` (
  `id_consulta` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(120) NULL,
  `email` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `pendiente` TINYINT(1) NOT NULL,
  `cliente_id_cliente` INT NOT NULL,
  PRIMARY KEY (`id_consulta`),
  INDEX `fk_consulta_cliente1_idx` (`cliente_id_cliente` ASC),
  CONSTRAINT `fk_consulta_cliente1`
    FOREIGN KEY (`cliente_id_cliente`)
    REFERENCES `tsi-php`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`cliente_inmueble`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`cliente_inmueble` (
  `cliente_id_cliente` INT NOT NULL,
  `inmueble_id_inmueble` INT NOT NULL,
  PRIMARY KEY (`cliente_id_cliente`, `inmueble_id_inmueble`),
  INDEX `fk_cliente_has_inmueble_inmueble1_idx` (`inmueble_id_inmueble` ASC),
  INDEX `fk_cliente_has_inmueble_cliente1_idx` (`cliente_id_cliente` ASC),
  CONSTRAINT `fk_cliente_has_inmueble_cliente1`
    FOREIGN KEY (`cliente_id_cliente`)
    REFERENCES `tsi-php`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_has_inmueble_inmueble1`
    FOREIGN KEY (`inmueble_id_inmueble`)
    REFERENCES `tsi-php`.`inmueble` (`id_inmueble`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`cliente_consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`cliente_consulta` (
  `cliente_id_cliente` INT NOT NULL,
  `consulta_id_consulta` INT NOT NULL,
  `fecha` DATETIME NOT NULL,
  PRIMARY KEY (`cliente_id_cliente`, `consulta_id_consulta`),
  INDEX `fk_cliente_has_consulta_consulta1_idx` (`consulta_id_consulta` ASC),
  INDEX `fk_cliente_has_consulta_cliente1_idx` (`cliente_id_cliente` ASC),
  CONSTRAINT `fk_cliente_has_consulta_cliente1`
    FOREIGN KEY (`cliente_id_cliente`)
    REFERENCES `tsi-php`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_has_consulta_consulta1`
    FOREIGN KEY (`consulta_id_consulta`)
    REFERENCES `tsi-php`.`consulta` (`id_consulta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`AuthItem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`AuthItem` (
  `name` VARCHAR(64) NOT NULL,
  `type` INT(11) NOT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `bizrule` TEXT NULL DEFAULT NULL,
  `data` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`name`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tsi-php`.`AuthAssignment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`AuthAssignment` (
  `itemname` VARCHAR(64) NOT NULL,
  `userid` VARCHAR(64) NOT NULL,
  `bizrule` TEXT NULL DEFAULT NULL,
  `data` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`itemname`, `userid`),
  CONSTRAINT `AuthAssignment_ibfk_1`
    FOREIGN KEY (`itemname`)
    REFERENCES `tsi-php`.`AuthItem` (`name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tsi-php`.`AuthItemChild`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`AuthItemChild` (
  `parent` VARCHAR(64) NOT NULL,
  `child` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`parent`, `child`),
  INDEX `child` (`child` ASC),
  CONSTRAINT `AuthItemChild_ibfk_1`
    FOREIGN KEY (`parent`)
    REFERENCES `tsi-php`.`AuthItem` (`name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `AuthItemChild_ibfk_2`
    FOREIGN KEY (`child`)
    REFERENCES `tsi-php`.`AuthItem` (`name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tsi-php`.`Rights`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`Rights` (
  `itemname` VARCHAR(64) NOT NULL,
  `type` INT(11) NOT NULL,
  `weight` INT(11) NOT NULL,
  PRIMARY KEY (`itemname`),
  CONSTRAINT `Rights_ibfk_1`
    FOREIGN KEY (`itemname`)
    REFERENCES `tsi-php`.`AuthItem` (`name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tsi-php`.`busqueda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`busqueda` (
  `id_busqueda` INT NOT NULL AUTO_INCREMENT,
  `precio` DOUBLE NULL,
  `superficie` VARCHAR(45) NULL,
  `dormitorios` VARCHAR(45) NULL,
  `baños` INT NULL,
  `direccion` VARCHAR(45) NULL,
  PRIMARY KEY (`id_busqueda`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `tsi-php`.`user`
-- -----------------------------------------------------
START TRANSACTION;
USE `tsi-php`;
INSERT INTO `tsi-php`.`user` (`id_usuario`, `username`, `password`) VALUES (1, 'admin', '$2a$13$gyjC2Se9PiQ9WUxyCligB.0xwJJmMUqT50IWU4D76qqDhJWoG4K4.');

COMMIT;


-- -----------------------------------------------------
-- Data for table `tsi-php`.`tipo_inmueble`
-- -----------------------------------------------------
START TRANSACTION;
USE `tsi-php`;
INSERT INTO `tsi-php`.`tipo_inmueble` (`id_tipo_inmueble`, `nombre`) VALUES (1, 'Casa');
INSERT INTO `tsi-php`.`tipo_inmueble` (`id_tipo_inmueble`, `nombre`) VALUES (2, 'Apartamento');

COMMIT;


-- -----------------------------------------------------
-- Data for table `tsi-php`.`AuthItem`
-- -----------------------------------------------------
START TRANSACTION;
USE `tsi-php`;
INSERT INTO `tsi-php`.`AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES ('Admin', 2, '', '', '');
INSERT INTO `tsi-php`.`AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES ('Authenticated', 2, '', '', '');
INSERT INTO `tsi-php`.`AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES ('Guest', 2, NULL, NULL, NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tsi-php`.`AuthAssignment`
-- -----------------------------------------------------
START TRANSACTION;
USE `tsi-php`;
INSERT INTO `tsi-php`.`AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES ('Admin', '1', '', 'N;');

COMMIT;

