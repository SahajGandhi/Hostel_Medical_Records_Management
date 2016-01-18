	<?php
    session_start();
    $id=$_SESSION['id'];
    $usertype=$_SESSION['usertype'];
    require_once('connect.php');
    if(isset($_GET['msg']))           //Successful submission note
{
	echo '<b><font color=navy size=5> Your information was updated successfully.</font></b>';
}
   $link=f_sqlConnect(DB_username, DB_password, DB_name);
     
// define variables and set to empty values
$pID=$date=$name=$remarks="";

	//define variables	
if ($_SERVER['REQUEST_METHOD']== "POST")
{          
  if (!empty($_POST["pID"])&&!empty($_POST["date"])&&!empty($_POST["name"])&&!empty($_POST["remarks"])) 
    {
     $pID = $_POST["pID"];
     $date = $_POST["date"];
     $name = $_POST["name"];
     $remarks = $_POST["remarks"];
    } 	
}

 $sql="INSERT INTO test_reports (test_date, test_name, d_id, p_id, remarks) VALUES ('$date','$name', '$id', '$pID','$remarks') ";
		if(!mysql_query($sql))
		{
			die('Error: '.mysql_error());
		}

   mysql_close();
    
	header("Location: reportsform.php?msg=1");	

?>