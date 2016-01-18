<?php
session_start();
require_once('connect.php');

$id=$_SESSION['id'];
//check
/*
$domain=$_SERVER['HTTP_HOST'];
$uri=parse_url($_SERVER['HTTP_REFERER']);
$r_domain=substr($uri['host'],strpos($uri['host'],"."),strlen($uri['host']));

if($domain==$r_domain)
{
    */
    $address=$post=$dept=$block=$PNo="";
	$link=f_sqlConnect(DB_username, DB_password, DB_name);

	$_POST=f_clean($_POST);

	
	//define variables	
	
	$address=$_POST["address"];
    $block=$_POST["block"];
    $PNo=$_POST["PNo"];
        
        $sql="UPDATE co_ordinator SET address='$address', block='$block', phone_number='$PNo'  Where id='$id'";
		if(!mysql_query($sql))
		{
			die('Error: '.mysql_error());
		}

   mysql_close();
	
	header("Location: update_w.php?msg=1");	
/* }
else
{
	die("You are not allowed to submit this form");
}*/
?>

