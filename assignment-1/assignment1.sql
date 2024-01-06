
-- Brands Table

CREATE TABLE `awp_assignment1`.`partBrands` (`partBrandID` INT NOT NULL AUTO_INCREMENT , `partBrand` VARCHAR(256) NOT NULL , PRIMARY KEY (`partBrandID`)) ENGINE = InnoDB;

INSERT INTO `partBrands` (`partBrandID`, `partBrand`) VALUES (NULL, 'Intel'), (NULL, 'AMD'), (NULL, 'Corsair'), (NULL, 'Kingston'), (NULL, 'ASUS'), (NULL, 'MSI'), (NULL, 'NVIDIA'), (NULL, 'Samsung'), (NULL, 'Seagate'), (NULL, 'EVGA'), (NULL, 'NZXT'), (NULL, 'Cooler Master'), (NULL, 'Dell'), (NULL, 'LG'), (NULL, 'Logitech'), (NULL, 'Razer'), (NULL, 'HP');


-- Compatibility Table

CREATE TABLE `awp_assignment1`.`partCompatibility` (`partCompatibilityID` INT NOT NULL AUTO_INCREMENT , `partCompatibility` VARCHAR(256) NOT NULL , PRIMARY KEY (`partCompatibilityID`)) ENGINE = InnoDB;

INSERT INTO `partCompatibility` (`partCompatibilityID`, `partCompatibility`) VALUES (NULL, 'Intel & AMD'), (NULL, 'Universal');

-- Category Table

CREATE TABLE `awp_assignment1`.`partCategories` (`partCategoryID` INT NOT NULL AUTO_INCREMENT , `partCategory` VARCHAR(256) NOT NULL , PRIMARY KEY (`partCategoryID`)) ENGINE = InnoDB;

INSERT INTO `partCategories` (`partCategoryID`, `partCategory`) VALUES (NULL, 'Processor'), (NULL, 'Memory'), (NULL, 'Motherboard'), (NULL, 'Graphics'), (NULL, 'Storage'), (NULL, 'Power Supply'), (NULL, 'Case'), (NULL, 'Cooling'), (NULL, 'Display'), (NULL, 'Peripheral');


-- PartType Table

CREATE TABLE `awp_assignment1`.`partTypes` (`partTypeID` INT NOT NULL AUTO_INCREMENT , `partType` VARCHAR(256) NOT NULL , `partCompatibilityID` INT NOT NULL , `partCategoryID` INT NOT NULL , PRIMARY KEY (`partTypeID`)) ENGINE = InnoDB;


ALTER TABLE `partTypes` ADD CONSTRAINT `partCompatibilityID` FOREIGN KEY (`partCompatibilityID`) REFERENCES `partCompatibility`(`partCompatibilityID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `partTypes` ADD CONSTRAINT `partCategoryID` FOREIGN KEY (`partCategoryID`) REFERENCES `partCategories`(`partCategoryID`) ON DELETE RESTRICT ON UPDATE RESTRICT;


INSERT INTO `partTypes` (`partTypeID`, `partType`, `partCompatibilityID`, `partCategoryID`) VALUES (NULL, 'Processor', '1', '1'), (NULL, 'RAM', '2', '2'), (NULL, 'Motherboard', '1', '3'), (NULL, 'GPU', '2', '4'), (NULL, 'Storage(SSD)', '2', '5'), (NULL, 'Storage(HDD)', '2', '5'), (NULL, 'PSU', '2', '6'), (NULL, 'Case', '2', '7'), (NULL, 'Cooler', '2', '8'), (NULL, 'Monitor', '2', '9'), (NULL, 'Keyboard', '2', '10'), (NULL, 'Mouse', '2', '10');


-- Parts Table

CREATE TABLE `awp_assignment1`.`parts` (`partID` INT NOT NULL AUTO_INCREMENT , `partName` VARCHAR(256) NOT NULL , `partTypeID` INT NOT NULL , `partBrandID` INT NOT NULL , `partPrice` INT NOT NULL , `partStock` INT NOT NULL , PRIMARY KEY (`partID`)) ENGINE = InnoDB;

ALTER TABLE `parts` ADD CONSTRAINT `partTypeID` FOREIGN KEY (`partTypeID`) REFERENCES `partTypes`(`partTypeID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `parts` ADD CONSTRAINT `partBrandID` FOREIGN KEY (`partBrandID`) REFERENCES `partBrands`(`partBrandID`) ON DELETE RESTRICT ON UPDATE RESTRICT;


INSERT INTO `parts` (`partID`, `partName`, `partTypeID`, `partBrandID`, `partPrice`, `partStock`) VALUES (NULL, 'Core i9', '1', '1', '300', '50'), (NULL, 'Rayzen 9', '1', '2', '250', '40'), (NULL, 'Vengence 8GB', '2', '3', '80', '100'), (NULL, 'Hyper X 16GB', '2', '4', '70', '80'), (NULL, 'ROG strix', '3', '5', '150', '30'), (NULL, 'MPG Gaming', '3', '6', '130', '25'), (NULL, 'GeForce RTX 3080', '4', '7', '400', '60'), (NULL, 'Radeon RX 6800 XT', '4', '2', '350', '50'), (NULL, '970 Evo', '5', '8', '120', '75'), (NULL, 'Barracuda', '6', '9', '60', '100'), (NULL, 'SuperNOVA', '7', '10', '80', '40'), (NULL, 'H510i', '8', '11', '100', '20'), (NULL, 'Hyper212', '9', '12', '50', '30'), (NULL, 'UltraSharp', '10', '13', '200', '50'), (NULL, '27GL83A-B', '10', '14', '250', '60'), (NULL, 'G Pro', '11', '15', '60', '90'), (NULL, 'Black Widow', '11', '16', '80', '70'), (NULL, 'G502', '12', '15', '40', '120'), (NULL, 'Omen Photon', '12', '17', '30', '80');






