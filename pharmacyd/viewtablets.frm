TYPE=VIEW
query=select `pharmacyd`.`medicines`.`MedId` AS `MedId`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`medicines`.`MedDosage` AS `MedDosage`,`pharmacyd`.`medicines`.`MedPrice` AS `MedPrice`,`pharmacyd`.`medicines`.`ManufactureDate` AS `ManufactureDate`,`pharmacyd`.`medicines`.`ExpDate` AS `ExpDate`,`pharmacyd`.`manufacturer`.`Manufacturer` AS `Manufacturer`,`pharmacyd`.`medicines`.`QuantityDay` AS `QuantityDay` from ((`pharmacyd`.`medicines` join `pharmacyd`.`manufacturer` on(`pharmacyd`.`manufacturer`.`Id` = `pharmacyd`.`medicines`.`MedManufacturer`)) join `pharmacyd`.`categorymed` on(`pharmacyd`.`categorymed`.`Id` = `pharmacyd`.`medicines`.`CategoryMed`)) where `pharmacyd`.`medicines`.`CategoryMed` = 1
md5=2fa84bca1413ed9308afe763e964e5ab
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-05-01 15:33:25
create-version=2
source=SELECT MedId ,MedName ,MedDosage,MedPrice,ManufactureDate,ExpDate,Manufacturer ,QuantityDay\nFROM medicines\n	INNER JOIN manufacturer\n        		ON manufacturer.Id = medicines.MedManufacturer\nINNER JOIN categorymed\n	ON categorymed.Id = medicines.CategoryMed\nWHERE medicines.CategoryMed = 1
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`medicines`.`MedId` AS `MedId`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`medicines`.`MedDosage` AS `MedDosage`,`pharmacyd`.`medicines`.`MedPrice` AS `MedPrice`,`pharmacyd`.`medicines`.`ManufactureDate` AS `ManufactureDate`,`pharmacyd`.`medicines`.`ExpDate` AS `ExpDate`,`pharmacyd`.`manufacturer`.`Manufacturer` AS `Manufacturer`,`pharmacyd`.`medicines`.`QuantityDay` AS `QuantityDay` from ((`pharmacyd`.`medicines` join `pharmacyd`.`manufacturer` on(`pharmacyd`.`manufacturer`.`Id` = `pharmacyd`.`medicines`.`MedManufacturer`)) join `pharmacyd`.`categorymed` on(`pharmacyd`.`categorymed`.`Id` = `pharmacyd`.`medicines`.`CategoryMed`)) where `pharmacyd`.`medicines`.`CategoryMed` = 1
mariadb-version=100424
