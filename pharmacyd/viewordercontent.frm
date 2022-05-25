TYPE=VIEW
query=select `pharmacyd`.`orders`.`OrderId` AS `OrderId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`orders`.`OrderDate` AS `OrderDate`,`pharmacyd`.`orders`.`DelivaryDate` AS `DelivaryDate`,`pharmacyd`.`orders`.`Statu` AS `Statu`,`pharmacyd`.`ordercontent`.`MedicineName` AS `MedicineName`,`pharmacyd`.`ordercontent`.`MedicinePrice` AS `MedicinePrice` from ((`pharmacyd`.`orders` join `pharmacyd`.`customer` on(`pharmacyd`.`customer`.`CustId` = `pharmacyd`.`orders`.`CustId`)) join `pharmacyd`.`ordercontent` on(`pharmacyd`.`ordercontent`.`OrderIdOrder` = `pharmacyd`.`orders`.`OrderId`)) group by `pharmacyd`.`ordercontent`.`Id`
md5=02cba8ac0def8e276853104d2870c0b6
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-05-09 00:48:10
create-version=2
source=SELECT OrderId ,CustName,OrderDate,DelivaryDate,Statu,MedicineName,MedicinePrice\nFROM orders\nINNER JOIN customer\n	ON customer.CustId = orders.CustId\n    INNER JOIN ordercontent\n    ON ordercontent.OrderIdOrder = orders.OrderId\nGROUP BY ordercontent.Id ASC
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`orders`.`OrderId` AS `OrderId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`orders`.`OrderDate` AS `OrderDate`,`pharmacyd`.`orders`.`DelivaryDate` AS `DelivaryDate`,`pharmacyd`.`orders`.`Statu` AS `Statu`,`pharmacyd`.`ordercontent`.`MedicineName` AS `MedicineName`,`pharmacyd`.`ordercontent`.`MedicinePrice` AS `MedicinePrice` from ((`pharmacyd`.`orders` join `pharmacyd`.`customer` on(`pharmacyd`.`customer`.`CustId` = `pharmacyd`.`orders`.`CustId`)) join `pharmacyd`.`ordercontent` on(`pharmacyd`.`ordercontent`.`OrderIdOrder` = `pharmacyd`.`orders`.`OrderId`)) group by `pharmacyd`.`ordercontent`.`Id`
mariadb-version=100424
