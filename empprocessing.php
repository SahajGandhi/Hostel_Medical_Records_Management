<?php
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
	
	
 	//redirect
	$redirect=$_POST["redirect_to"];
	$referred=$_SERVER['HTTP_REFERER'];
	$query=parse_url($referred, PHP_URL_QUERY);
	$referred= str_replace(array('?',$query), '', $referred);


	//extra fields: to add timestamp and ip 


	//insert data

/*	if(f_tableExists($user) )        (optional line)
	 create fn f_tableExists($tablename) to check*/
     
	$pwd=$_POST["password"];
	$regID=$_POST["regID"];
    $sql="INSERT INTO user (id, password, user_type) VALUES ('$regID','$pwd', 'Employee')";
		if(!mysql_query($sql))
		{
			die('Error: '.mysql_error());
		}
	
    $fname = $_POST["fname"];
    $gender = $_POST["gender"];
    $dob=$_POST["date"];
  	$address=$_POST["address"];
    $category=$_POST["category"];
  	$bGroup=$_POST["bGroup"];
    $post=$_POST["email"];
    $dept=$_POST["status"];
    $block=$_POST["block"];
    $RNo=$_POST["RNo"];
    
    $sql="INSERT INTO employee (id, name, gender, DOB, address, category, b_Group, post, department, block, room_no) VALUES ('$regID', '$fname', '$gender', '$dob', '$address', '$category', '$bGroup', '$post', '$dept', '$block', '$RNo')";
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




?>

