<?php 
$db=mysql_connect("localhost", "root", "") or die(mysql_error()); 
$sdb=mysql_select_db("ods",$db) or die(mysql_error());
$data = json_decode(file_get_contents("php://input"));
$area = mysql_real_escape_string($data->area);
$street = mysql_real_escape_string($data->street);
$dom = mysql_real_escape_string($data->dom);
$tel = mysql_real_escape_string($data->tel);
$qry=mysql_query("INSERT INTO myods(area, street, dom, tel) VALUES('$area','$street','$dom','$tel')");
?>