TYPE=VIEW
query=select `pharmacyd`.`orders`.`OrderId` AS `OrderId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`orders`.`Statu` AS `Statu`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,count(0) AS `TotalMedicinesInProduction` from (((`pharmacyd`.`orders` join `pharmacyd`.`ordercontent` on(`pharmacyd`.`ordercontent`.`OrderIdOrder` = `pharmacyd`.`orders`.`OrderId`)) join `pharmacyd`.`medicines` on(`pharmacyd`.`medicines`.`MedId` = `pharmacyd`.`ordercontent`.`MedIdMedicine`)) join `pharmacyd`.`customer` on(`pharmacyd`.`customer`.`CustId` = `pharmacyd`.`orders`.`CustId`)) where `pharmacyd`.`orders`.`Statu` like \'%PREPARATION%\' group by `pharmacyd`.`medicines`.`MedName`
md5=05103e0cb8381578e180bdf9bd0b0815
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-05-01 15:42:43
create-version=2
source=SELECT OrderId,CustName, Statu,MedName,COUNT(*) AS TotalMedicinesInProduction\nFROM orders\nINNER JOIN ordercontent\n		ON ordercontent.OrderIdOrder = orders.OrderId\nINNER JOIN medicines\n		ON medicines.MedId = ordercontent.MedIdMedicine\nINNER JOIN customer \n		ON customer.CustId = orders.CustId\nWHERE Statu LIKE \'%PREPARATION%\'\nGROUP BY MedName
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`orders`.`OrderId` AS `OrderId`,`pharmacyd`.`customer`.`CustName` AS `CustName`,`pharmacyd`.`orders`.`Statu` AS `Statu`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,count(0) AS `TotalMedicinesInProduction` from (((`pharmacyd`.`orders` join `pharmacyd`.`ordercontent` on(`pharmacyd`.`ordercontent`.`OrderIdOrder` = `pharmacyd`.`orders`.`OrderId`)) join `pharmacyd`.`medicines` on(`pharmacyd`.`medicines`.`MedId` = `pharmacyd`.`ordercontent`.`MedIdMedicine`)) join `pharmacyd`.`customer` on(`pharmacyd`.`customer`.`CustId` = `pharmacyd`.`orders`.`CustId`)) where `pharmacyd`.`orders`.`Statu` like \'%PREPARATION%\' group by `pharmacyd`.`medicines`.`MedName`
mariadb-version=100424
