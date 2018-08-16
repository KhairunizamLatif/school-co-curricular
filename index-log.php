<?php
session_start();
if(!isset($_SESSION['username']))
{
    $_SESSION['username']=$_POST['username'];
}
$username=$_SESSION['username'];
?>
<?php
include"db.php";
if($dbconn !== FALSE){
    $username=$_POST['username'];
    echo $username;
    $password=$_POST['password'];
    echo $password;
    $sel="SELECT * from user where username='$username' and password='$password' ";
    $q=mysql_query($sel,$dbconn);
    $bilRow=mysql_num_rows($q);
    if($bilRow>0)
    {
        $row=mysql_fetch_array($q);
        $_SESSION['id']=$row[0];
        $_SESSION['code']=$row[1];
        $_SESSION['name']=$row[2];
        $_SESSION['username']=$row[3];
        $_SESSION['password']=$row[4];
        $_SESSION['class']=$row[5];
        $_SESSION['class_code']=$row[6];
        $_SESSION['status']=$row[7];
        if($row[7]=='admin')
        {
            header("Location:dashboard.html");
        }
        if($row[7]=='teacher')
        {
            header("Location:dashboard.html");
        }
        if($row[7]=='manager')
        {
            header("Location:dashboard.html");
        }
    }

    else
    {
        $_SESSION['username']=$username;
        echo "<script type='text/javascript'>";
        echo "alert('Wrong Username & Password.')";
        echo "</script>";
        echo "<meta http-equiv='refresh' content='0;URL=index-log.html'>";
    }
}

?>
