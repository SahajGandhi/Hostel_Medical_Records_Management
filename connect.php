<?php 
define("DB_username",'root');
define("DB_password",'vjti');
define("DB_name",'hostel_medical_records');


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





?>

