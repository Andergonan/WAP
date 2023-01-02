CREATE SCHEMA IF NOT EXISTS `project_api` DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci;

USE `project_api`;

CREATE TABLE IF NOT EXISTS `project_api`.`review` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `text` VARCHAR(600) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `project_api`.`review` (`text`) VALUES
('Koprovka hnusná, jako všude jinde.'),
('Palačinky ušly.')