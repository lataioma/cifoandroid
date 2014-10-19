<?php 
mysql_connect("127.8.0.130:3306","adminVS4kUb6","3Qi45lW3VCSq"); 
mysql_select_db("cifoandroid"); 

$pregunta = "select * from cifoandroid";

$sql=mysql_query($pregunta); 

while($row=mysql_fetch_assoc($sql)) 
 $output[]=$row; 
print(json_encode($output)); 
mysql_close();
 
?>