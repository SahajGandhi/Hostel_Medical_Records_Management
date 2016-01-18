<?php
session_start();
require_once('connect.php');
//include('session.php');
$username=  $_SESSION['username'];
$id=$_SESSION['id'];
$usertype=$_SESSION['usertype'];
?>

<html>
<head>
<title>Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<style>
textarea{ resize:horizontal;}
</style>

<!-- Save for Web Slices (profile.psd) -->
<table id="Table_01" width="1367" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="13">
			<img src="images/patientprofile_01.gif" width="1366" height="43" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/patientprofile_02.gif" width="382" height="219" alt=""></td>
		<td>
			<a href="patientprofile.php">
				<img src="images/patient-profile.gif" width="194" height="45" border="0" alt="Profile"></a></td>
		<td rowspan="4">
			<img src="images/patientprofile_04.gif" width="35" height="219" alt=""></td>
		<td>
			<a href="patientvisits.php">
				<img src="images/Viewvisits.gif" width="176" height="45" border="0" alt="Last visits"></a></td>
		<td rowspan="4">
			<img src="images/patientprofile_06.gif" width="50" height="219" alt=""></td>
		<td>
			<a href="patientreports.php">
				<img src="images/Viewreports.gif" width="177" height="45" border="0" alt="view reports"></a></td>
		<td colspan="2" rowspan="4">
			<img src="images/patientprofile_08.gif" width="29" height="219" alt=""></td>
		<td colspan="3">
			<a href="update.php">
				<img src="images/Updatedetails.gif" width="208" height="45" border="0" alt="Update details"></a></td>
		<td rowspan="6">
			<img src="images/patientprofile_10.gif" width="115" height="957" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/patientprofile_11.gif" width="194" height="174" alt=""></td>
		<td rowspan="3">
			<img src="images/patientprofile_12.gif" width="176" height="174" alt=""></td>
		<td rowspan="3">
			<img src="images/patientprofile_13.gif" width="177" height="174" alt=""></td>
		<td colspan="3">
			<img src="images/patientprofile_14.gif" width="208" height="21" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="21" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/patientprofile_15.gif" width="74" height="891" alt=""></td>
		<td>
			<a href="logout.php">
				<img src="images/logoutbutton.gif" width="110" height="28" border="0" alt="Logout"></a></td>
		<td rowspan="4">
			<img src="images/patientprofile_17.gif" width="24" height="891" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/patientprofile_18.gif" width="110" height="863" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="125" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/patientprofile_19.gif" width="274" height="738" alt=""></td>
		<td colspan="7" background="images/gfhjyg.gif" width="745" height="350" alt="">
        
<div align="left" style="margin-left:50px; margin-top:5px;">
 <font face="Verdana, Geneva, sans-serif" color="white" size=5>
        
        <b id="welcome">Welcome <?php echo $username."!"; ?></b>
        <br>
        </font>
       
        <font face="Verdana, Geneva, sans-serif" color="0c8a7c" size=4>
 <?php
 $link=f_sqlConnect(DB_username, DB_password, DB_name);
 
 if($usertype=="Student")
 {
    $result=mysql_query("SELECT Fname,Mname,Lname,gender,DOB,address,category, blood_group, email FROM student WHERE id='$id'");
    $row=mysql_fetch_assoc($result);
    echo "Full Name: ".$row['Fname']." ".$row['Mname']." ".$row['Lname']."<br>";
    echo "Date of Birth:      ".$row['DOB']."&emsp;&emsp;          Gender: ".$row['gender']."<br>";
    echo "Address: <br>&emsp;&emsp;&emsp;&emsp;&emsp; <textarea rows=3 cols= 50  disabled>".$row['address']."</textarea><br>";
    echo "Category: ".$row['category']."&emsp;&emsp;Blood Group: ".$row['blood_group']."&emsp;&emsp;<br> Email ID: ".$row['email']."<br>";
    
    $result=mysql_query("SELECT programme,semester,year,fees,status,block ,room_no, receipt_no, payment_date FROM student WHERE id='$id'");
    $row=mysql_fetch_assoc($result);
    echo "Programme:      ".$row['programme']."&emsp;&emsp;          Semester: ".$row['semester']."&emsp;&emsp; Year: ".$row['year']."<br><br>";
    echo "Block: ".$row['block']."&emsp;&emsp; Room No.: ".$row['room_no']."&emsp;&emsp; Status: ".$row['status']."<br>";  
    
    
    
 }
 else
 {
    $result=mysql_query("SELECT name,gender,DOB,address,category, b_Group, post, department, block, room_No FROM employee WHERE id='$id'");
    $row=mysql_fetch_assoc($result);
    echo "Full Name: ".$row['name']."<br>";
    echo "Date of Birth:      ".$row['DOB']."&emsp;&emsp;          Gender: ".$row['gender']."<br>";
    echo "Address:	<br> &emsp;&emsp;&emsp;&emsp;&emsp;<textarea rows=3 cols= 50  disabled>".$row['address']."</textarea><br><br>";
    echo "Category: ".$row['category']."&emsp;&emsp;Blood Group: ".$row['b_Group']."<br>";
    echo "Post: ".$row['post']."&emsp;&emsp;Department: ".$row['department']."<br>";
    echo "Block: ".$row['block']."&emsp;&emsp;Room No: ".$row['room_No']."<br>";
 }
 ?>
        
   </font></div>     
        </td>
		<td rowspan="2">
			<img src="images/patientprofile_21.gif" width="24" height="738" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="350" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="images/patientprofile_22.gif" width="745" height="388" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="388" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="274" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="108" height="1" alt=""></td>
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
			<img src="images/spacer.gif" width="5" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="24" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="74" height="1" alt=""></td>
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