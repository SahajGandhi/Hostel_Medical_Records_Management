<?php
    session_start();
    $id=$_SESSION['id'];
    $usertype=$_SESSION['usertype'];
    include('connect.php');
    $link=f_sqlConnect(DB_username, DB_password, DB_name);
// define variables and set to empty values
$pIDErr="";
if(isset($_POST)==true && empty($_POST)==false){ 
    $pID = $_POST['pID'];
    $allg=$_POST['allg'];
    $gendis=$_POST['gendis'];
    $hosp=$_POST['hosp'];
    $cause=$_POST['cause'];       
}

 foreach($allg as $a)
  {
    $query1 =mysql_query( "INSERT INTO allergies (p_id, allergies) VALUES('$pID','$a')");
    if(!$query1){echo "Error: ".mysql_error();}
  }	    
      echo "<br>";
  foreach($gendis as $a)
  {
    $query2=mysql_query( "INSERT INTO genetic_disorders (p_id, genetic_disorders) VALUES('$pID','$a')");
    if(!$query2){echo "Error: ".mysql_error();}
  }	
  /*foreach($hosp as $a)
  {
    $query3=mysql_query( "INSERT INTO previous_hospitalizations (p_id, details) VALUES('$pID','$a')");
    if(!$query3){echo "Error: ".mysql_error();}
  }	
    foreach($cause as $a)
  {
    $query4=mysql_query( "UPDATE previous_hospitalizations SET cause='$a' WHERE p_id='$pID'");
    if(!$query4){echo "Error: ".mysql_error();}
  }
  */
  
  foreach($hosp as $key=>$a)
  {
    echo $a.$cause[$key];
    $query3=mysql_query( "INSERT INTO previous_hospitalizations (p_id, details, cause) VALUES('$pID','$a','$cause[$key]')");
    if(!$query3)echo "Error: ".mysql_error();
    
  }
  header("Location: historyform.php?msg=1");
  
?>