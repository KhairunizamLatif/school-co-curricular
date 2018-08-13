<?php
session_start();
if(!isset($_SESSION['id']))
{
    $_SESSION['id']=$_POST['id'];
}
$id=$_SESSION['id'];
?>
<?php
include"config.php";
if($dbconn !== FALSE){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sel="SELECT * from code where code='$code' and nama_cikgu='$username' ";
    $q=mysql_query($sel,$dbconn);
    $bilRow=mysql_num_rows($q);
    if($bilRow>0)
    {
        $row=mysql_fetch_array($q);
        $_SESSION['id']=$row[0];
        $_SESSION['id_code']=$row[1];
        $_SESSION['siapa']=$row[2];
        $_SESSION['username']=$row[3];
        $_SESSION['password']=$row[4];
        $_SESSION['keyword']=$row[5];
        if($row[1]==1)
        {
            header("Location:index-log.html");
        }
        if($row[1]==2)
        {
            header("Location:#");
        }
        if($row[1]==3)
        {
            header("Location:#");
        }
    }

    else
    {
        $_SESSION['id']=$id;
        echo "<script type='text/javascript'>";
        echo "alert('Wrong Username & Password.')";
        echo "</script>";
        echo "<meta http-equiv='refresh' content='0;URL=insert_code.php'>";
    }
}

?>
