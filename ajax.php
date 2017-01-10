<?php 
$db=mysql_connect("localhost", "root", "") or die(mysql_error()); 
$sdb=mysql_select_db("ods",$db) or die(mysql_error());
$result = mysql_query ("SELECT * FROM myods");
$data = array();
while ($row = mysql_fetch_array($result)) {
  $data[] = $row;
}
echo json_encode($data);
?>