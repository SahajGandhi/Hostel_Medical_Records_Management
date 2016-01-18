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
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<style>
textarea{ resize:horizontal;}
</style>
<!-- Save for Web Slices (warden.psd) -->
<table id="Table_01" width="1367" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="13">
			<img src="images/wardenprofile_01.gif" width="1366" height="43" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/wardenprofile_02.gif" width="382" height="219" alt=""></td>
		<td>
			<a href="wardenprofile.php">
				<img src="images/warden-profile.gif" width="194" height="45" border="0" alt="Profile"></a></td>
		<td rowspan="4">
			<img src="images/wardenprofile_04.gif" width="35" height="219" alt=""></td>
		<td>
			<a href="w_historyform.php">
				<img src="images/patient-history-form.gif" width="176" height="45" border="0" alt="history form"></a></td>
		<td rowspan="4">
			<img src="images/wardenprofile_06.gif" width="50" height="219" alt=""></td>
		<td>
			<a href="wardensearch.php">
				<img src="images/Warden-Search.gif" width="177" height="45" border="0" alt="Search"></a></td>
		<td colspan="2" rowspan="4">
			<img src="images/wardenprofile_08.gif" width="29" height="219" alt=""></td>
		<td colspan="3">
			<a href="update.php">
				<img src="images/Updatedetails.gif" width="208" height="45" border="0" alt="Update details"></a></td>
		<td rowspan="6">
			<img src="images/wardenprofile_10.gif" width="115" height="957" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/wardenprofile_11.gif" width="194" height="174" alt=""></td>
		<td rowspan="3">
			<img src="images/wardenprofile_12.gif" width="176" height="174" alt=""></td>
		<td rowspan="3">
			<img src="images/wardenprofile_13.gif" width="177" height="174" alt=""></td>
		<td colspan="3">
			<img src="images/wardenprofile_14.gif" width="208" height="21" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="21" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/wardenprofile_15.gif" width="74" height="891" alt=""></td>
		<td>
			<a href="logout.php">
				<img src="images/logoutbutton.gif" width="110" height="28" border="0" alt="Logout"></a></td>
		<td rowspan="4">
			<img src="images/wardenprofile_17.gif" width="24" height="891" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/wardenprofile_18.gif" width="110" height="863" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="125" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/wardenprofile_19.gif" width="274" height="738" alt=""></td>
		<td colspan="7" background="images/gfhjyg.gif" width="745" height="350" alt="">
        
        <div align="left" style="margin-left:65px; margin-top:5px;">
 <font face="Verdana, Geneva, sans-serif" color="white" size=5>
        
        <b id="welcome">Welcome <?php echo $_SESSION['username']."!"; ?></b>
        <br>
        </font>
       
        <font face="Verdana, Geneva, sans-serif" color="0c8a7c" size=4>

<?php
 { $link=f_sqlConnect(DB_username, DB_password, DB_name);
    $result=mysql_query("SELECT name,DOB,address,block,phone_number FROM co_ordinator WHERE id='$id'");
    $row=mysql_fetch_assoc($result);
    echo "<br>Full Name: ".$row['name'].'<br>';
    echo "<br>Date of Birth:      ".$row['DOB']."&emsp;&emsp; ";         
    echo "<br><br>Address: <br>&emsp;&emsp;&emsp;&emsp;&emsp; <textarea rows=3 cols= 50  disabled>".$row['address']."</textarea><br>";
    echo "Block: ".$row['block']."<br><br>Phone No.: ".$row['phone_number']."<br>";  
    
 }
 ?>
 </font>
 </div>
 </td>
		<td rowspan="2">
			<img src="images/wardenprofile_21.gif" width="24" height="738" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="350" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="images/wardenprofile_22.gif" width="745" height="388" alt=""></td>
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