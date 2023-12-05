## QUERIES

SELECT * FROM parts NATURAL JOIN partBrands;

SELECT * FROM parts NATURAL JOIN partTypes;

SELECT * FROM parts NATURAL JOIN partTypes NATURAL JOIN partBrands NATURAL JOIN partCategories NATURAL JOIN partCompatibility;

SELECT * FROM parts NATURAL JOIN partTypes NATURAL JOIN partBrands NATURAL JOIN partCategories NATURAL JOIN partCompatibility WHERE partBrands.partBrand = "Dell";

SELECT * FROM parts WHERE parts.partStock >= 50 ORDER BY partStock ASC;

SELECT * FROM parts NATURAL JOIN partBrands WHERE partBrands.partBrand = "Intel" || partBrands.partBrand = "AMD"; 

SELECT * FROM parts NATURAL JOIN partTypes NATURAL JOIN partBrands NATURAL JOIN partCategories NATURAL JOIN partCompatibility WHERE partTypes.partType = "RAM";

SELECT parts.partName, partBrands.partBrand 
FROM parts NATURAL JOIN partTypes NATURAL JOIN partBrands NATURAL JOIN partCategories NATURAL JOIN partCompatibility 
WHERE partTypes.partType = "GPU" ORDER BY parts.partPrice ASC;

SELECT parts.partName, parts.partPrice 
FROM parts NATURAL JOIN partTypes NATURAL JOIN partBrands NATURAL JOIN partCategories NATURAL JOIN partCompatibility 
WHERE parts.partPrice <= 200 ORDER BY parts.partPrice ASC;

SELECT parts.partName, parts.partPrice 
FROM parts NATURAL JOIN partTypes NATURAL JOIN partBrands NATURAL JOIN partCategories NATURAL JOIN partCompatibility 
WHERE parts.partPrice <= 200 && partCategories.PartCategory = "Storage" ORDER BY parts.partPrice ASC;


SELECT parts.partName, parts.partStock, partTypes.partType, partCompatibility.partCompatibility
FROM parts, partTypes, partCompatibility
WHERE parts.partTypeID = partTypes.partTypeID && partTypes.partCompatibilityID = partCompatibility.partCompatibilityID ORDER BY parts.partStock ASC;


SELECT parts.partName, partCategories.PartCategory
FROM parts, partTypes, partCategories
WHERE parts.partTypeID = partTypes.partTypeID && partTypes.partCategoryID = partCategories.partCategoryID && partCategories.PartCategory = "Peripheral";


