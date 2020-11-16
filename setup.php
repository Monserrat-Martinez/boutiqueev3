-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema boutiquev3
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema boutiquev3
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `boutiquev3` DEFAULT CHARACTER SET utf8 ;
USE `boutiquev3` ;

-- -----------------------------------------------------
-- Table `boutiquev3`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boutiquev3`.`login` (
  `idlogin` INT NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(45) NULL,
  `pass` VARCHAR(45) NULL,
  `tipousuario` VARCHAR(45) NULL,
  PRIMARY KEY (`idlogin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutiquev3`.`messages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boutiquev3`.`messages` (
  `idmessages` INT NOT NULL AUTO_INCREMENT,
  `recip` VARCHAR(45) NULL,
  `messages` VARCHAR(4096) NULL,
  PRIMARY KEY (`idmessages`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutiquev3`.`purchases`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boutiquev3`.`purchases` (
  `idpurchases` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `apellidos` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `codigo` VARCHAR(45) NULL,
  `ciudad` VARCHAR(45) NULL,
  PRIMARY KEY (`idpurchases`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
