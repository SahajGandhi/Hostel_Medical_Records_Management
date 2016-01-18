<?php
    session_start();
    $id=$_SESSION['id'];
    $usertype=$_SESSION['usertype'];
    require_once('connect.php');
    
   $link=f_sqlConnect(DB_username, DB_password, DB_name);
   
?>

<form action="search_by_illness.php" method = "GET">
Enter Name of Illness : 
<input type="text" size="50" name="illness" > 
<input type="submit" name="Submit">
</form>

<?php

if(isset($_GET['illness'])&&!empty($_GET['illness']))
{ 
$illness=$_GET['illness'];
if($illness==$_GET['illness']){

$query = "SELECT * FROM `presciption` WHERE `illness`='$illness'";

if($query_run=mysql_query($query)){

if(mysql_num_rows($query_run)==NULL){
echo 'No results found !';
}
else{
while($query_row=mysql_fetch_assoc($query_run)){
$p_id=$query_row['p_id'];
$pr_no=$query_row['pr_no'];
$date=$query_row['date'];
$d_id=$query_row['d_id'];
$illness=$query_row['illness'];

echo 'Patient ID : '.$p_id.'<br>';
echo 'Presciption No. : '.$pr_no.'<br>' ;
echo 'Date : '.$date.'<br>' ;
echo 'Doctor ID : '.$d_id.'<br>' ;
echo 'Illness : '.$illness.'<br>' ;
echo '<br><br>';
}

} 
}
else{
echo mysql_error();
}
}
else{
echo 'Check ID !';
}
}
?>