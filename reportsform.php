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
   ?>
   
   <html>
<head>
<title>Reports form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<style>textaarea{resize:none;}</style>
<!-- Save for Web Slices (reportsform.psd) -->
<table id="Table_01" width="1367" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="13">
			<img src="images/reportsform_01.gif" width="1366" height="43" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/reportsform_02.gif" width="382" height="243" alt=""></td>
		<td>
			<a href="visitform.php">
				<img src="images/Visit-Form.gif" width="194" height="45" border="0" alt="Visit Form"></a></td>
		<td rowspan="4">
			<img src="images/reportsform_04.gif" width="51" height="243" alt=""></td>
		<td>
			<a href="reportsform.php">
				<img src="images/Reports.gif" width="142" height="45" border="0" alt="Test Reports entry form"></a></td>
		<td rowspan="4">
			<img src="images/reportsform_06.gif" width="66" height="243" alt=""></td>
		<td colspan="2">
			<a href="historyform.php">
				<img src="images/Patient-History.gif" width="177" height="45" border="0" alt="Patient History Entry Form"></a></td>
		<td rowspan="6">
			<img src="images/reportsform_08.gif" width="52" height="957" alt=""></td>
		<td colspan="3">
			<a href="search.php">
				<img src="images/Search.gif" width="187" height="45" border="0" alt="Search patient by "></a></td>
		<td rowspan="6">
			<img src="images/reportsform_10.gif" width="115" height="957" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/reportsform_11.gif" width="194" height="198" alt=""></td>
		<td rowspan="3">
			<img src="images/reportsform_12.gif" width="142" height="198" alt=""></td>
		<td colspan="2" rowspan="3">
			<img src="images/reportsform_13.gif" width="177" height="198" alt=""></td>
		<td colspan="3">
			<img src="images/reportsform_14.gif" width="187" height="21" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="21" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/reportsform_15.gif" width="68" height="891" alt=""></td>
		<td>
			<a href="logout.php">
				<img src="images/final-template_16.gif" width="95" height="28" border="0" alt="Logout"></a></td>
		<td rowspan="4">
			<img src="images/reportsform_17.gif" width="24" height="891" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/reportsform_18.gif" width="95" height="863" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="149" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/reportsform_19.gif" width="243" height="714" alt=""></td>
		<td colspan="6" background="images/reportsform_20.gif" width="676" height="350" alt="">
        <div align="left" style="margin-left:125px; margin-top:5px;">
    
<font face="Verdana, Geneva, sans-serif" color="white">
<form method="post" action="reportsform_proc.php"> 

<br><br>
Patient ID: &ensp;&ensp;
  <input type="text" size="10" name="pID" required value="">
<br><br />
Date of Test:&ensp;<input type="date" name="date" cols="10" required value="">
<br><br />

 
Test Name:&ensp;&ensp;	<input type="text" size="15" name="name" required value="">
<br /><br />
      
         
Remarks: <br>                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows="4" cols="50" name="remarks"></textarea>


 <br><br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
<input type="submit" name="submit" value="Submit" >
 &nbsp;&nbsp;&nbsp;&nbsp;                 
<input type="reset" name="reset" value="Reset" >

<br><br>
</form>

</font>
</div> 
        
        
        </td>
		<td rowspan="2">
			<img src="images/reportsform_21.gif" width="93" height="714" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="350" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/reportsform_22.gif" width="676" height="364" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="364" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="243" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="139" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="194" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="51" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="142" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="66" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="84" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="93" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="52" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="68" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="95" height="1" alt=""></td>
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