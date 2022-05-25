TYPE=VIEW
query=select count(0) AS `COUNT(*)` from (`pharmacyd`.`customer` join `pharmacyd`.`orders` on(`pharmacyd`.`orders`.`CustId` = `pharmacyd`.`customer`.`CustId`)) where `pharmacyd`.`orders`.`Statu` = \'NO RECEIVEDCUST\' and to_days(`pharmacyd`.`orders`.`DelivaryDate`) - to_days(current_timestamp()) <= 0
md5=9e306a3acfa1fa669206a10181b73625
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-05-01 17:21:13
create-version=2
source=SELECT \nCOUNT(*)\nFROM customer\nINNER JOIN orders\n		ON orders.CustId = customer.CustId\nWHERE orders.Statu = \'NO RECEIVEDCUST\' AND DATEDIFF(orders.DelivaryDate,NOW()) <=0
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select count(0) AS `COUNT(*)` from (`pharmacyd`.`customer` join `pharmacyd`.`orders` on(`pharmacyd`.`orders`.`CustId` = `pharmacyd`.`customer`.`CustId`)) where `pharmacyd`.`orders`.`Statu` = \'NO RECEIVEDCUST\' and to_days(`pharmacyd`.`orders`.`DelivaryDate`) - to_days(current_timestamp()) <= 0
mariadb-version=100424
