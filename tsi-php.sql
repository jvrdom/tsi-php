SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `tsi-php` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `tsi-php` ;

-- -----------------------------------------------------
-- Table `tsi-php`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tsi-php`.`user` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `tsi-php`.`user`
-- -----------------------------------------------------
START TRANSACTION;
USE `tsi-php`;
INSERT INTO `tsi-php`.`user` (`id_usuario`, `username`) VALUES (1, 'admin');

COMMIT;

