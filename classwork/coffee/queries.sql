
drinkType
__________
CREATE TABLE `awp_tanveer`.`drinkType` (`drinkTypeID` INT NOT NULL AUTO_INCREMENT , `drinkTypeName` VARCHAR(255) NOT NULL , PRIMARY KEY (`drinkTypeID`)) ENGINE = InnoDB;

INSERT INTO `drinkType` (`drinkTypeID`, `drinkTypeName`) VALUES (NULL, 'Coffee'), (NULL, 'Tea'), (NULL, 'Water'), (NULL, 'Smoothie');

drinkTemp
__________

CREATE TABLE `awp_tanveer`.`drinkTemp` (`drinkTempID` INT NOT NULL AUTO_INCREMENT , `drinkTempName` VARCHAR(255) NOT NULL , PRIMARY KEY (`drinkTempID`)) ENGINE = InnoDB;


INSERT INTO `drinkTemp` (`drinkTempID`, `drinkTempName`) VALUES (NULL, 'Hot'), (NULL, 'Cold');

drinkStrength
_____________

CREATE TABLE `awp_tanveer`.`drinkStrength` (`drinkStrengthID` INT NOT NULL AUTO_INCREMENT , `drinkStrengthName` VARCHAR(255) NOT NULL , PRIMARY KEY (`drinkStrengthID`)) ENGINE = InnoDB;

INSERT INTO `drinkStrength` (`drinkStrengthID`, `drinkStrengthName`) VALUES (NULL, 'Smooth'), (NULL, 'Light'), (NULL, 'Medium'), (NULL, 'Strong')


drinkSize
_______________
CREATE TABLE `awp_tanveer`.`drinkSize` (`drinkSizeID` INT NOT NULL AUTO_INCREMENT , `drinkSizeName` VARCHAR(255) NOT NULL , PRIMARY KEY (`drinkSizeID`)) ENGINE = InnoDB;

INSERT INTO `drinkSize` (`drinkSizeID`, `drinkSizeName`) VALUES (NULL, 'Small'), (NULL, 'Medium'), (NULL, 'Large');


drinks
__________
CREATE TABLE `awp_tanveer`.`drinks` (`drinkID` INT NOT NULL AUTO_INCREMENT , `drinkName` VARCHAR(255) NOT NULL , `drinkTypeID` INT NOT NULL , `drinkTempID` INT NOT NULL , `drinkStrengthID` INT NOT NULL , `drinkSizeID` INT NOT NULL , PRIMARY KEY (`drinkID`)) ENGINE = InnoDB;

INSERT INTO `drinks` (`drinkID`, `drinkName`, `drinkTypeID`, `drinkTempID`, `drinkStrengthID`, `drinkSizeID`) VALUES (NULL, 'Cappuccino', '4', '1', '3', '1'), (NULL, 'Expresso', '1', '1', '4', '3'), (NULL, 'Mocca', '4', '2', '2', '2'), (NULL, 'Green Tea', '2', '1', '2', '1');