 <?php
session_start();
$id=$_SESSION['id'];
$usertype=$_SESSION['usertype'];
require 'connect.php';
$link=f_sqlConnect(DB_username, DB_password, DB_name);

?>

<html>
<body bgcolor="navy"></body>


<font face="Verdana, Geneva, sans-serif" color="white"> 
            
<?php
$query = mysql_query("SELECT * FROM test_reports WHERE p_id='$id'") ;

if(mysql_num_rows($query)==0)
{
echo " <center> No Reports uploaded yet! </center>";
}
else
{
	
echo '<table border="1" style="table-layout:fixed; word-wrap:break-word; border-collapse:collapse; border: 2px solid #0c8a7c; color:#ffffff;">        
<col width=100><col width=100><col width=100><col width=100><col width=300>

<tr>
<th><b>Test ID</b></th>
<th><b>Date</b></th>
<th><b>Name</b></th>
<th><b>Doctor</b></th>
<th><b>Remarks</b></th>

</tr>';

 
while($row = mysql_fetch_array($query))
{
	
$test_id=$row['test_id'];
$test_date=$row['test_date'];
$test_name=$row['test_name'];
$d_id=$row['d_id'];
$doctor=mysql_result(mysql_query("SELECT name FROM co_ordinator WHERE id='$d_id'"),0);
$remarks=$row['remarks'];
echo '<tr>
<td >'.$test_id.'</td>
<td>'.$test_date.'</td>
<td><div  style="width:100px; word-wrap:break-word;">'.$test_name.'</td>
<td ><div style="width:100px; word-wrap:break-word;">'.$doctor.'</td>
<td ><div style="width:300px; word-wrap:break-word;">'.$remarks.'</div></td>
</tr>';
}


}
?>




    </font></div>