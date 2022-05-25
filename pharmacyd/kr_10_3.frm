TYPE=VIEW
query=select `pharmacyd`.`orders`.`Statu` AS `Statu`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`medicinecontent`.`Method` AS `Method` from (((`pharmacyd`.`orders` join `pharmacyd`.`ordercontent` on(`pharmacyd`.`ordercontent`.`OrderIdOrder` = `pharmacyd`.`orders`.`OrderId`)) join `pharmacyd`.`medicines` on(`pharmacyd`.`medicines`.`MedId` = `pharmacyd`.`ordercontent`.`MedIdMedicine`)) join `pharmacyd`.`medicinecontent` on(`pharmacyd`.`medicinecontent`.`Id` = `pharmacyd`.`medicines`.`MedContent`)) where `pharmacyd`.`orders`.`Statu` like \'%PREPARATION%\' and `pharmacyd`.`medicines`.`MedId` <> 11 group by `pharmacyd`.`medicines`.`MedName`
md5=8871318a90e9f98b038a968236b851d3
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-05-05 01:37:31
create-version=2
source=select `pharmacyd`.`orders`.`Statu` AS `Statu`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`medicinecontent`.`Method` AS `Method` from (((`pharmacyd`.`orders` join `pharmacyd`.`ordercontent` on(`pharmacyd`.`ordercontent`.`OrderIdOrder` = `pharmacyd`.`orders`.`OrderId`)) join `pharmacyd`.`medicines` on(`pharmacyd`.`medicines`.`MedId` = `pharmacyd`.`ordercontent`.`MedIdMedicine`)) join `pharmacyd`.`medicinecontent` on(`pharmacyd`.`medicinecontent`.`Id` = `pharmacyd`.`medicines`.`MedContent`)) where `pharmacyd`.`orders`.`Statu` like \'%PREPARATION%\' AND medicines.MedId !=11 group by `pharmacyd`.`medicines`.`MedName`
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`orders`.`Statu` AS `Statu`,`pharmacyd`.`medicines`.`MedName` AS `MedName`,`pharmacyd`.`medicinecontent`.`Method` AS `Method` from (((`pharmacyd`.`orders` join `pharmacyd`.`ordercontent` on(`pharmacyd`.`ordercontent`.`OrderIdOrder` = `pharmacyd`.`orders`.`OrderId`)) join `pharmacyd`.`medicines` on(`pharmacyd`.`medicines`.`MedId` = `pharmacyd`.`ordercontent`.`MedIdMedicine`)) join `pharmacyd`.`medicinecontent` on(`pharmacyd`.`medicinecontent`.`Id` = `pharmacyd`.`medicines`.`MedContent`)) where `pharmacyd`.`orders`.`Statu` like \'%PREPARATION%\' and `pharmacyd`.`medicines`.`MedId` <> 11 group by `pharmacyd`.`medicines`.`MedName`
mariadb-version=100424
