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
if($_SESSION['usertype']=='Student')
{


    $address=$programme=$sem=$year=$email=$block=$RNo="";
	$link=f_sqlConnect(DB_username, DB_password, DB_name);

	$_POST=f_clean($_POST);

	
	//define variables	
	
	$address=$_POST["address"];
    $programme=$_POST["programme"];
    $sem=$_POST["sem"];
    $year=$_POST["year"];
    $email=$_POST["email"];
    $block=$_POST["block"];
    $RNo=$_POST["RNo"];
        
        $sql="UPDATE student SET address='$address', programme='$programme', semester='$sem', year='$year', email='$email', block='$block', room_no='$RNo'  Where id='$id'";
		if(!mysql_query($sql))
		{
			die('Error: '.mysql_error());
		}

   mysql_close();
	
	header("Location: update_s.php?msg=1");	
}
else if($_SESSION['usertype']=='Employee')
{
        $address=$post=$dept=$block=$RNo="";
	$link=f_sqlConnect(DB_username, DB_password, DB_name);

	$_POST=f_clean($_POST);

	
	//define variables	
	
	$address=$_POST["address"];
    $post=$_POST["post"];
    $dept=$_POST["dept"];
    $block=$_POST["block"];
    $RNo=$_POST["RNo"];
        
        $sql="UPDATE employee SET address='$address', post='$post', department='$dept', block='$block', room_No='$RNo'  Where id='$id'";
		if(!mysql_query($sql))
		{
			die('Error: '.mysql_error());
		}

   mysql_close();
	
	header("Location: update_e.php?msg=1");	
}
else
{
    
}    
/* }
else
{
	die("You are not allowed to submit this form");
}*/
?>

