<?php 
mysql_connect("127.3.124.2:3306","admin7IC7C4T","VQ_eekR13Xsr"); 
mysql_select_db("phpcifoandroid"); 

$pregunta = "select * from cifoandroid";

$sql=mysql_query($pregunta); 

while($row=mysql_fetch_assoc($sql)) 
 $output[]=$row; 
print(json_encode($output)); 
mysql_close();
 
?>