TYPE=VIEW
query=select `pharmacyd`.`medicines`.`MedName` AS `MedName`,count(0) AS `NumberPayments` from (`pharmacyd`.`ordercontent` join `pharmacyd`.`medicines` on(`pharmacyd`.`ordercontent`.`MedIdMedicine` = `pharmacyd`.`medicines`.`MedId`)) where `pharmacyd`.`ordercontent`.`MedIdMedicine` <> 11 group by `pharmacyd`.`medicines`.`MedName` order by count(0) desc limit 10
md5=6378a818858a5150aac99b8864bb3ecd
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-05-05 01:31:27
create-version=2
source=select `pharmacyd`.`medicines`.`MedName` AS `MedName`,count(0) AS `NumberPayments` from (`pharmacyd`.`ordercontent` join `pharmacyd`.`medicines` on(`pharmacyd`.`ordercontent`.`MedIdMedicine` = `pharmacyd`.`medicines`.`MedId`)) \nWHERE ordercontent.MedIdMedicine != 11\ngroup by `pharmacyd`.`medicines`.`MedName` order by count(0) desc limit 10
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `pharmacyd`.`medicines`.`MedName` AS `MedName`,count(0) AS `NumberPayments` from (`pharmacyd`.`ordercontent` join `pharmacyd`.`medicines` on(`pharmacyd`.`ordercontent`.`MedIdMedicine` = `pharmacyd`.`medicines`.`MedId`)) where `pharmacyd`.`ordercontent`.`MedIdMedicine` <> 11 group by `pharmacyd`.`medicines`.`MedName` order by count(0) desc limit 10
mariadb-version=100424
