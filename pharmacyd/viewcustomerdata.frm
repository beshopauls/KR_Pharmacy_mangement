TYPE=VIEW
query=select `pharmacyd`.`customer`.`CustId` AS `CustId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`customer`.`CustPhone` AS `CustPhone`,`pharmacyd`.`customer`.`CustAddress` AS `CustAddress`,`pharmacyd`.`customertype`.`Type` AS `Type` from (`pharmacyd`.`customer` join `pharmacyd`.`customertype` on(`pharmacyd`.`customertype`.`Id` = `pharmacyd`.`customer`.`CustType`))
md5=e9c72190ff0ce6cf7dae98b0a8e32adc
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-05-01 15:31:07
create-version=2
source=SELECT \n	CustId,\n    CustName,\n    CustPhone,\n    CustAddress,\n    Type\nFROM\n    customer\nINNER JOIN customertype\n		ON customertype.Id = customer.CustType
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`customer`.`CustId` AS `CustId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`customer`.`CustPhone` AS `CustPhone`,`pharmacyd`.`customer`.`CustAddress` AS `CustAddress`,`pharmacyd`.`customertype`.`Type` AS `Type` from (`pharmacyd`.`customer` join `pharmacyd`.`customertype` on(`pharmacyd`.`customertype`.`Id` = `pharmacyd`.`customer`.`CustType`))
mariadb-version=100424
