<?php
$server = "localhost";
$user = "admin";
$pwd = "admin123";
$db_name = "school";
?>

<?php
$dbconn=mysql_pconnect($server,$user,$pwd);
mysql_select_db($db_name,$dbconn);
date_default_timezone_set('Asia/Kuala_Lumpur');

extract($_GET);
extract($_POST);
?>