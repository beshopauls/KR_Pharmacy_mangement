TYPE=VIEW
query=select `pharmacyd`.`orders`.`OrderId` AS `OrderId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`orders`.`Saller` AS `Saller`,`pharmacyd`.`orders`.`OrderDate` AS `OrderDate`,`pharmacyd`.`orders`.`DelivaryDate` AS `DelivaryDate`,`pharmacyd`.`orders`.`Discount` AS `Discount`,`pharmacyd`.`orders`.`OrderValue` AS `OrderValue`,`pharmacyd`.`orders`.`OrderValue` - `pharmacyd`.`orders`.`OrderValue` * (`pharmacyd`.`orders`.`Discount` / 100) AS `RealValue`,`pharmacyd`.`orders`.`Statu` AS `Statu` from (`pharmacyd`.`customer` join `pharmacyd`.`orders` on(`pharmacyd`.`orders`.`CustId` = `pharmacyd`.`customer`.`CustId`)) order by `pharmacyd`.`orders`.`OrderId`
md5=ea0781455b6f4977d381cc9b3faf0194
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-05-01 15:31:17
create-version=2
source=SELECT OrderId,CustName ,Saller,OrderDate,DelivaryDate,Discount,OrderValue,(OrderValue-(OrderValue*(Discount/100))) AS RealValue,Statu\nFROM customer\n	INNER JOIN orders\n    	ON orders.CustId = customer.CustId\nORDER BY OrderId
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`orders`.`OrderId` AS `OrderId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`orders`.`Saller` AS `Saller`,`pharmacyd`.`orders`.`OrderDate` AS `OrderDate`,`pharmacyd`.`orders`.`DelivaryDate` AS `DelivaryDate`,`pharmacyd`.`orders`.`Discount` AS `Discount`,`pharmacyd`.`orders`.`OrderValue` AS `OrderValue`,`pharmacyd`.`orders`.`OrderValue` - `pharmacyd`.`orders`.`OrderValue` * (`pharmacyd`.`orders`.`Discount` / 100) AS `RealValue`,`pharmacyd`.`orders`.`Statu` AS `Statu` from (`pharmacyd`.`customer` join `pharmacyd`.`orders` on(`pharmacyd`.`orders`.`CustId` = `pharmacyd`.`customer`.`CustId`)) order by `pharmacyd`.`orders`.`OrderId`
mariadb-version=100424
