TYPE=VIEW
query=select `pharmacyd`.`medicines`.`MedId` AS `MedId`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`medicines`.`MedDosage` AS `MedDosage`,`pharmacyd`.`medicines`.`MedPrice` AS `MedPrice`,`pharmacyd`.`medicines`.`ManufactureDate` AS `ManufactureDate`,`pharmacyd`.`medicines`.`ExpDate` AS `ExpDate`,`pharmacyd`.`manufacturer`.`Manufacturer` AS `Manufacturer`,`pharmacyd`.`medicines`.`QuantityDay` AS `QuantityDay` from ((`pharmacyd`.`medicines` join `pharmacyd`.`manufacturer` on(`pharmacyd`.`manufacturer`.`Id` = `pharmacyd`.`medicines`.`MedManufacturer`)) join `pharmacyd`.`categorymed` on(`pharmacyd`.`categorymed`.`Id` = `pharmacyd`.`medicines`.`CategoryMed`)) where `pharmacyd`.`medicines`.`CategoryMed` = 8
md5=658b3390e3238e2bd69918e4bcd7a3d0
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-05-06 04:58:44
create-version=2
source=select `pharmacyd`.`medicines`.`MedId` AS `MedId`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`medicines`.`MedDosage` AS `MedDosage`,`pharmacyd`.`medicines`.`MedPrice` AS `MedPrice`,`pharmacyd`.`medicines`.`ManufactureDate` AS `ManufactureDate`,`pharmacyd`.`medicines`.`ExpDate` AS `ExpDate`,`pharmacyd`.`manufacturer`.`Manufacturer` AS `Manufacturer`,`pharmacyd`.`medicines`.`QuantityDay` AS `QuantityDay` from ((`pharmacyd`.`medicines` join `pharmacyd`.`manufacturer` on(`pharmacyd`.`manufacturer`.`Id` = `pharmacyd`.`medicines`.`MedManufacturer`)) join `pharmacyd`.`categorymed` on(`pharmacyd`.`categorymed`.`Id` = `pharmacyd`.`medicines`.`CategoryMed`)) where `pharmacyd`.`medicines`.`CategoryMed` = 8
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`medicines`.`MedId` AS `MedId`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`medicines`.`MedDosage` AS `MedDosage`,`pharmacyd`.`medicines`.`MedPrice` AS `MedPrice`,`pharmacyd`.`medicines`.`ManufactureDate` AS `ManufactureDate`,`pharmacyd`.`medicines`.`ExpDate` AS `ExpDate`,`pharmacyd`.`manufacturer`.`Manufacturer` AS `Manufacturer`,`pharmacyd`.`medicines`.`QuantityDay` AS `QuantityDay` from ((`pharmacyd`.`medicines` join `pharmacyd`.`manufacturer` on(`pharmacyd`.`manufacturer`.`Id` = `pharmacyd`.`medicines`.`MedManufacturer`)) join `pharmacyd`.`categorymed` on(`pharmacyd`.`categorymed`.`Id` = `pharmacyd`.`medicines`.`CategoryMed`)) where `pharmacyd`.`medicines`.`CategoryMed` = 8
mariadb-version=100424
