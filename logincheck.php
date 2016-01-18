<?php
session_start();// Starting Session
require_once('connect.php');

//check

$domain=$_SERVER['HTTP_HOST'];
$uri=parse_url($_SERVER['HTTP_REFERER']);
$r_domain=substr($uri['host'],strpos($uri['host'],"."),strlen($uri['host']));

if($domain==$r_domain)
{
	$link=f_sqlConnect(DB_username, DB_password, DB_name);

	$_POST=f_clean($_POST);

	
	//define variables	
     $id = $_POST["id"];
     $password = $_POST["password"];
     $usertype = $_POST["user_type"];

	//extra fields: to add timestamp and ip 

/*	if(f_tableExists($user) )        (optional line)
	 create fn f_tableExists($tablename) to check*/
    
     $query = mysql_query("select * from user where password='$password' AND id='$id' AND user_type='$usertype'");
    $rows = mysql_num_rows($query);
    if ($rows == 1) 
    {   $_SESSION['id']=$id;
        $_SESSION['usertype']=$usertype;
        if($usertype=="Student")
        {
            $username= mysql_result(mysql_query("select Fname from student where id='$id'"),0);
            $_SESSION['username']=$username;   //session variable initialised
            header("location: patientprofile.php");     // Redirecting To Other Page
        }
        
        else if($usertype=="Employee")
        {
            $username= mysql_result(mysql_query("select name from employee where id='$id'"),0);
            $_SESSION['username']=$username;   //session variable initialised
            header("location: patientprofile.php");     // Redirecting To Other Page
        }
       
        else if($usertype=="Warden")
        {
            $username= mysql_result(mysql_query("select name from co_ordinator where id='$id'"),0);
            $block= mysql_result(mysql_query("select block from co_ordinator where id='$id'"),0);
            $_SESSION['username']=$username;   //session variable initialised
            $_SESSION['user_block']=$block;   //session variable initialised
            header("location: wardenprofile.php");      // Redirecting To Other Page
        }
        else if($usertype=="Doctor")
        {
            $date=date("Y-m-d");
            $intime=date("H:i:s");
            $username= mysql_result(mysql_query("select name from co_ordinator where id='$id'"),0);
            $_SESSION['username']=$username;   //session variable initialised
            
            
            $sql="INSERT INTO doctor_attendance (doctor_id, date, in_time) VALUES ('$id','$date','$intime')";
		if(!mysql_query($sql))
		{
			die('Error: '.mysql_error());
		}
            
            
            header("location: visitform.php");      // Redirecting To Other Page
        }
        else{}
        
        
    }    
         
    else {
            echo "Username or Password is invalid";
            
            header("Location: login.php?msg=1");	
	          
            //header("location: login.php");
    }
    mysql_close(); // Closing Connection
     
     
     
}
     
/*     
    $sql="INSERT INTO user (id, password, user_type) VALUES ('$regID','$pwd','$type')";
		if(!mysql_query($sql))
		{
			die('Error: '.mysql_error());
		}
	
    mysql_close();
	
	//redirect after successful submission
	if(!empty($redirect))
	{
		header("Location: $redirect?msg=1");
	}
	else
	{
		header("Location: $referred?msg=1");	
	}
}
else
{
	die("You are not allowed to submit this form");
}
echo "Password:".$_POST['password']." user type : ".$_POST['name'];
*/

/*
function f_sqlconnect($user,$pass,$db)
{
	$link=mysql_connect('localhost',$user,$pass);
	
	if(!$link)
	{
		die('Could not connect:' . mysql_error());
	}
	
	$selected_db=mysql_select_db($db,$link);
	
	if(!$selected_db)
	{
		die('Cannot use '.$db.": " . mysql_error());
	}

}

function f_clean($array)
{
	return array_map('mysql_real_escape_string',$array);

}
  */                                                                                                    
?>