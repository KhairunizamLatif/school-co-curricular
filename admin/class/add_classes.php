<?php
$conn = mysql_pconnect("localhost","root","admin123");
mysql_select_db("school",$conn);
$sql = "insert into class(code, name, tch_name, tch_code, date) values ('$_POST[code]', '$_POST[name]','$_POST[tch_name]','$_POST[tch_code]','$_POST[date]')";
if(!mysql_query($sql,$conn))
{
    die('Could not connect: '.mysql_error());
}
else
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('katalaluan telah ditetapkan')
			</SCRIPT>");

    mysql_close($conn);
}
?>
