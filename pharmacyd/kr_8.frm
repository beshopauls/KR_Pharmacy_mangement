TYPE=VIEW
query=select `pharmacyd`.`orders`.`OrderId` AS `OrderId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`orders`.`Statu` AS `Statu`,`pharmacyd`.`orders`.`Saller` AS `Saller`,`pharmacyd`.`orders`.`OrderValue` AS `OrderValue`,`pharmacyd`.`orders`.`DelivaryDate` AS `DelivaryDate`,`pharmacyd`.`orders`.`OrderDate` AS `OrderDate`,count(0) AS `Totalorders` from (`pharmacyd`.`orders` join `pharmacyd`.`customer` on(`pharmacyd`.`customer`.`CustId` = `pharmacyd`.`orders`.`CustId`)) where `pharmacyd`.`orders`.`Statu` like \'PREPARATION\' group by `pharmacyd`.`orders`.`OrderId`
md5=897fa6b5c50c397e06f97b8942a885e6
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-05-13 05:28:51
create-version=2
source=SELECT  OrderId,CustName,Statu,Saller,OrderValue,DelivaryDate,OrderDate,COUNT(*) AS Totalorders\nFROM orders\n	INNER JOIN customer\n    		ON customer.CustId = orders.CustId\nWHERE Statu LIKE \'PREPARATION\'\nGROUP BY orders.OrderId
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`orders`.`OrderId` AS `OrderId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`orders`.`Statu` AS `Statu`,`pharmacyd`.`orders`.`Saller` AS `Saller`,`pharmacyd`.`orders`.`OrderValue` AS `OrderValue`,`pharmacyd`.`orders`.`DelivaryDate` AS `DelivaryDate`,`pharmacyd`.`orders`.`OrderDate` AS `OrderDate`,count(0) AS `Totalorders` from (`pharmacyd`.`orders` join `pharmacyd`.`customer` on(`pharmacyd`.`customer`.`CustId` = `pharmacyd`.`orders`.`CustId`)) where `pharmacyd`.`orders`.`Statu` like \'PREPARATION\' group by `pharmacyd`.`orders`.`OrderId`
mariadb-version=100424
