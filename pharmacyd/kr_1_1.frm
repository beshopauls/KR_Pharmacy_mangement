TYPE=VIEW
query=select `pharmacyd`.`customer`.`CustId` AS `CustId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`customer`.`CustPhone` AS `CustPhone`,`pharmacyd`.`customer`.`CustAddress` AS `CustAddress`,`pharmacyd`.`orders`.`DelivaryDate` AS `DelivaryDate`,`pharmacyd`.`orders`.`OrderDate` AS `OrderDate`,`pharmacyd`.`orders`.`Statu` AS `Statu` from (`pharmacyd`.`customer` join `pharmacyd`.`orders` on(`pharmacyd`.`customer`.`CustId` = `pharmacyd`.`orders`.`CustId`)) where `pharmacyd`.`orders`.`Statu` = \'NO RECEIVEDCUST\' and to_days(`pharmacyd`.`orders`.`DelivaryDate`) - to_days(current_timestamp()) <= 0 group by `pharmacyd`.`customer`.`CustName`
md5=01a885483522a1e4fdf820de825820f5
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-05-01 17:19:36
create-version=2
source=SELECT\n    customer.CustId,\n    CustName,\n    CustPhone,\n    CustAddress,\n    DelivaryDate,\n    OrderDate,\n    Statu\nFROM\n   	customer\nINNER JOIN orders \n	ON customer.CustId = orders.CustId\nWHERE orders.Statu = \'NO RECEIVEDCUST\' AND DATEDIFF(orders.DelivaryDate,NOW()) <=0 \nGROUP BY CustName
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`customer`.`CustId` AS `CustId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`customer`.`CustPhone` AS `CustPhone`,`pharmacyd`.`customer`.`CustAddress` AS `CustAddress`,`pharmacyd`.`orders`.`DelivaryDate` AS `DelivaryDate`,`pharmacyd`.`orders`.`OrderDate` AS `OrderDate`,`pharmacyd`.`orders`.`Statu` AS `Statu` from (`pharmacyd`.`customer` join `pharmacyd`.`orders` on(`pharmacyd`.`customer`.`CustId` = `pharmacyd`.`orders`.`CustId`)) where `pharmacyd`.`orders`.`Statu` = \'NO RECEIVEDCUST\' and to_days(`pharmacyd`.`orders`.`DelivaryDate`) - to_days(current_timestamp()) <= 0 group by `pharmacyd`.`customer`.`CustName`
mariadb-version=100424
