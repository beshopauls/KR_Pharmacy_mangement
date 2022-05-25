TYPE=VIEW
query=select `pharmacyd`.`customer`.`CustId` AS `CustId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`customer`.`CustAddress` AS `CustAddress`,`pharmacyd`.`customer`.`CustPhone` AS `CustPhone`,`pharmacyd`.`customertype`.`Type` AS `Type` from (`pharmacyd`.`customer` join `pharmacyd`.`customertype` on(`pharmacyd`.`customertype`.`Id` = `pharmacyd`.`customer`.`CustType`)) where `pharmacyd`.`customertype`.`Type` = \'PERMENET\'
md5=60f624436c24332767ef96f452c6fd8f
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-05-01 15:43:37
create-version=2
source=SELECT CustId, CustName,CustAddress ,CustPhone ,Type\nFROM customer \nINNER JOIN customertype \n	ON customertype.Id = customer.CustType\nWHERE Type = \'PERMENET\'
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`customer`.`CustId` AS `CustId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`customer`.`CustAddress` AS `CustAddress`,`pharmacyd`.`customer`.`CustPhone` AS `CustPhone`,`pharmacyd`.`customertype`.`Type` AS `Type` from (`pharmacyd`.`customer` join `pharmacyd`.`customertype` on(`pharmacyd`.`customertype`.`Id` = `pharmacyd`.`customer`.`CustType`)) where `pharmacyd`.`customertype`.`Type` = \'PERMENET\'
mariadb-version=100424
