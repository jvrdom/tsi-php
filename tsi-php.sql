SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `tsi-php` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `tsi-php` ;

-- -----------------------------------------------------
-- Table `tsi-php`.`tbl_roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`tbl_roles` (
  `id_roles` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_roles`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tsi-php`.`tbl_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`tbl_usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `tbl_roles_id_roles` INT NOT NULL,
  PRIMARY KEY (`id_usuario`, `tbl_roles_id_roles`),
  INDEX `fk_tbl_usuario_tbl_roles_idx` (`tbl_roles_id_roles` ASC),
  CONSTRAINT `fk_tbl_usuario_tbl_roles`
    FOREIGN KEY (`tbl_roles_id_roles`)
    REFERENCES `tsi-php`.`tbl_roles` (`id_roles`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
