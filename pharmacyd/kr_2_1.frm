TYPE=VIEW
query=select `pharmacyd`.`customer`.`CustId` AS `CustId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`customer`.`CustPhone` AS `CustPhone`,`pharmacyd`.`customer`.`CustAddress` AS `CustAddress`,`pharmacyd`.`orders`.`DelivaryDate` AS `DelivaryDate`,`pharmacyd`.`orders`.`OrderDate` AS `OrderDate`,count(`pharmacyd`.`orders`.`OrderId`) AS `NumberOrders`,`pharmacyd`.`orders`.`Statu` AS `Statu` from (`pharmacyd`.`customer` join `pharmacyd`.`orders` on(`pharmacyd`.`customer`.`CustId` = `pharmacyd`.`orders`.`CustId`)) where `pharmacyd`.`orders`.`Statu` like \'NO RECEIVEDPHAR%\' group by `pharmacyd`.`customer`.`CustName`
md5=36ac5de262b2e44727f056e1aa1e658b
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-05-01 17:18:13
create-version=2
source=SELECT\n    customer.CustId,\n    CustName,\n    CustPhone,\n    CustAddress,\n    DelivaryDate,\n    OrderDate,\n    COUNT(OrderId) AS NumberOrders,\n    Statu\nFROM\n   	customer\nINNER JOIN orders \n	ON customer.CustId = orders.CustId\nWHERE orders.Statu LIKE \'NO RECEIVEDPHAR%\'\nGROUP BY CustName
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`customer`.`CustId` AS `CustId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`customer`.`CustPhone` AS `CustPhone`,`pharmacyd`.`customer`.`CustAddress` AS `CustAddress`,`pharmacyd`.`orders`.`DelivaryDate` AS `DelivaryDate`,`pharmacyd`.`orders`.`OrderDate` AS `OrderDate`,count(`pharmacyd`.`orders`.`OrderId`) AS `NumberOrders`,`pharmacyd`.`orders`.`Statu` AS `Statu` from (`pharmacyd`.`customer` join `pharmacyd`.`orders` on(`pharmacyd`.`customer`.`CustId` = `pharmacyd`.`orders`.`CustId`)) where `pharmacyd`.`orders`.`Statu` like \'NO RECEIVEDPHAR%\' group by `pharmacyd`.`customer`.`CustName`
mariadb-version=100424
