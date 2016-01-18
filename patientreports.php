 <?php
session_start();
$id=$_SESSION['id'];
$usertype=$_SESSION['usertype'];
require 'connect.php';
$link=f_sqlConnect(DB_username, DB_password, DB_name);
?>

<html>
<head>
<title>View Reports</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<style>td.me{text-align:center;}</style>
<!-- Save for Web Slices (patient.psd) -->
<table id="Table_01" width="1367" height="3403" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="12">
			<img src="images/patientreports_01.gif" width="1366" height="43" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/patientreports_02.gif" width="382" height="247" alt=""></td>
		<td>
			<a href="patientprofile.php">
				<img src="images/mjnhgdv.gif" width="194" height="45" border="0" alt=""></a></td>
		<td rowspan="4">
			<img src="images/patientreports_04.gif" width="35" height="247" alt=""></td>
		<td>
			<a href="patientvisits.php">
				<img src="images/adkclsdksrknksdmrb.gif" width="176" height="45" border="0" alt=""></a></td>
		<td rowspan="4">
			<img src="images/patientreports_06.gif" width="50" height="247" alt=""></td>
		<td>
			<a href="patientreports.php">
				<img src="images/sdjlfxldzksfdm'vkssm'.gif" width="177" height="45" border="0" alt=""></a></td>
		<td rowspan="4">
			<img src="images/patientreports_08.gif" width="50" height="247" alt=""></td>
		<td colspan="3">
			<a href="update.php">
				<img src="images/Updatedetails.gif" width="187" height="45" border="0" alt=""></a></td>
		<td rowspan="6">
			<img src="images/patientreports_10.gif" width="115" height="3359" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/patientreports_11.gif" width="194" height="202" alt=""></td>
		<td rowspan="3">
			<img src="images/patientreports_12.gif" width="176" height="202" alt=""></td>
		<td rowspan="3">
			<img src="images/patientreports_13.gif" width="177" height="202" alt=""></td>
		<td colspan="3">
			<img src="images/patientreports_14.gif" width="187" height="21" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="21" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/patientreports_15.gif" width="53" height="181" alt=""></td>
		<td>
			<a href="logout.php">
				<img src="images/logoutbutton.gif" width="110" height="28" border="0" alt="Logout"></a></td>
		<td rowspan="4">
			<img src="images/patientreports_17.gif" width="24" height="3293" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/patientreports_18.gif" width="110" height="3265" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="153" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/patientreports_19.gif" width="176" height="3112" alt=""></td>
		<td valign="top" colspan="8" background="images/fkmsfals.gif" width="941" height="3014" alt="">
            
            

   <div align="left" style="margin-left:20px; margin-top:5px;">     
  <font face="Verdana, Geneva, sans-serif" color="14c8b1"> 
    <br><br><Br>          
<?php
$query = mysql_query("SELECT * FROM test_reports WHERE p_id='$id'") ;

if(mysql_num_rows($query)==0)
{
echo " <center> No Reports uploaded yet! </center>";
}
else
{
	
echo '<table border="1" background="" width=12% style="table-layout:fixed; word-wrap:break-word; border-collapse:collapse; border: 2px solid #14c8b1; color:#0c8a7c;">        
<col width=50><col width=115><col width=100><col width=140><col width=350>

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
<td><div  style="width:95px;word-wrap:break-word;">'.$test_id.'</td>
<td class="me"><div  style="width:110px;word-wrap:break-word;">'.$test_date.'</td>
<td class="me"><div  style="width:95px; word-wrap:break-word;">'.$test_name.'</td>
<td class="me"><div style="width:110px; word-wrap:break-word;">'."Dr. ".$doctor.'</td>
<td class="me"><div style="width:345px; word-wrap:break-word;">'.$remarks.'</div></td>
</tr>';
}


echo '</table>';
}
?>

    </font></div>              
            </td>
		<td>
			<img src="images/spacer.gif" width="1" height="3014" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">
			<img src="images/patientreports_21.gif" width="941" height="98" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="98" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="176" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="206" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="194" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="35" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="176" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="50" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="177" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="50" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="53" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="24" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="115" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>