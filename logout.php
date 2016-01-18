<?php
session_start();
require_once('connect.php');

if($_SESSION['usertype']=='Doctor')
{
    $link=f_sqlConnect(DB_username, DB_password, DB_name);
    $outtime=date("H:i:s");
    $date=date("Y-m-d");
    $id=$_SESSION['id'];
    $sql=mysql_query("Update doctor_attendance set out_time='$outtime' where date='$date' and id='$id'");
}
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}
?>