<?php
    session_start();
    $id=$_SESSION['id'];
    $usertype=$_SESSION['usertype'];
    include('connect.php');
    $link=f_sqlConnect(DB_username, DB_password, DB_name);
// define variables and set to empty values
$pIDErr=$illnessErr="";

$date=date("Y-m-d");

      
if(isset($_POST)==true && empty($_POST)==false){ 
    $pID = $_POST['pID'];
    $illness = $_POST['illness'];
    $med=$_POST['med'];
    $dos=$_POST['dos'];
    
     $query ="INSERT INTO prescription (p_id, date, illness, d_id) VALUES('$pID', '$date','$illness', '$id')";
     
     if(!mysql_query($query))
    {
        die(mysql_error());
    }
    $query1=mysql_query("SELECT MAX(presc_no) FROM prescription");
    $last_no=mysql_result($query1,0);
        
}

 foreach($med as $a)
  {
    $query2 =mysql_query( "INSERT INTO prescription_medicines (presc_no, medicine) VALUES('$last_no','$a')");
    if(!$query2){echo "Error: ".mysql_error();}
  }	    
      echo "<br>";
  foreach($dos as $b)
  {
    $query3=mysql_query( "UPDATE prescription_medicines SET dosage='$b' WHERE presc_no='$last_no' ");
    if(!$query3){echo "Error: ".mysql_error();}
  }	
  
  header("Location: visitform.php?msg=1");
  
?>