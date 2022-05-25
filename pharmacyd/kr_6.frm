TYPE=VIEW
query=select `pharmacyd`.`medicines`.`MedId` AS `MedId`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`categorymed`.`Type` AS `Type` from (`pharmacyd`.`medicines` join `pharmacyd`.`categorymed` on(`pharmacyd`.`categorymed`.`Id` = `pharmacyd`.`medicines`.`CategoryMed`)) where `pharmacyd`.`medicines`.`QuantityDay` <= `pharmacyd`.`medicines`.`MinimumQuantity` and `pharmacyd`.`medicines`.`MedId` <> 11
md5=51cb53747758b8ff6becfce1df265d41
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-05-05 01:34:27
create-version=2
source=select `pharmacyd`.`medicines`.`MedId` AS `MedId`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`categorymed`.`Type` AS `Type` from (`pharmacyd`.`medicines` join `pharmacyd`.`categorymed` on(`pharmacyd`.`categorymed`.`Id` = `pharmacyd`.`medicines`.`CategoryMed`)) where `pharmacyd`.`medicines`.`QuantityDay` <= `pharmacyd`.`medicines`.`MinimumQuantity` AND MedId != 11
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`medicines`.`MedId` AS `MedId`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`categorymed`.`Type` AS `Type` from (`pharmacyd`.`medicines` join `pharmacyd`.`categorymed` on(`pharmacyd`.`categorymed`.`Id` = `pharmacyd`.`medicines`.`CategoryMed`)) where `pharmacyd`.`medicines`.`QuantityDay` <= `pharmacyd`.`medicines`.`MinimumQuantity` and `pharmacyd`.`medicines`.`MedId` <> 11
mariadb-version=100424
