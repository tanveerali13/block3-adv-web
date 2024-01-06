CREATE TABLE `awp_tanveer`.`sales2001` (`ID` INT NOT NULL AUTO_INCREMENT , `person` VARCHAR(256) NOT NULL , `amount` INT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;

INSERT INTO `sales2001` (`ID`, `person`, `amount`) VALUES (NULL, 'Peter', '1'), (NULL, 'Bruce', '10');

SELECT * FROM `sales2001` UNION SELECT * FROM `sales2002`;

SELECT * FROM `sales2001` UNION ALL SELECT * FROM `sales2002` ORDER BY amount DESC;

SELECT person, amount FROM `sales2001` UNION ALL SELECT person, amount FROM `sales2002` ORDER BY person ASC, amount DESC;

SELECT * FROM  sales2001 WHERE amount > 5 INTERSECT SELECT * FROM  sales2002 WHERE amount < 60;  --INTERSECT shows duplicate results between a range

SELECT * FROM sales2001 WHERE amount < 1600 EXCEPT SELECT * FROM sales2002 WHERE amount > 5;11