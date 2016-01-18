<?php
// define variables and set to empty values
$name=$password=$user_type="";
$error="";

if ($_SERVER['REQUEST_METHOD']== "POST")
 {
           
    if(!empty($_POST['id']) && !empty($_POST['password']) && !empty($_POST['user_type']))
    {
     $id = test_input($_POST["id"]);
     $password = test_input($_POST["password"]);
     $usertype = test_input($_POST["user_type"]);
     
      
    }
  }


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<html>
<head>
<title>User Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (Untitled-1.psd) -->
<table id="Table_01" width="1366" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="11">
			<img src="images/login_01.gif" width="1366" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">
			<img src="images/login_02.gif" width="397" height="312" alt=""></td>
		<td>
			<a href="index.php">
				<img src="images/Untitled-1_03.gif" width="164" height="45" border="0" alt="Home"></a></td>
		<td rowspan="2">
			<img src="images/login_04.gif" width="62" height="312" alt=""></td>
		<td>
			<a href="login.php">
				<img src="images/Untitled-1_05.gif" width="158" height="45" border="0" alt="Login"></a></td>
		<td rowspan="2">
			<img src="images/login_06.gif" width="35" height="312" alt=""></td>
		<td>
			<a href="register.php">
				<img src="images/Untitled-1_07.gif" width="206" height="45" border="0" alt="Registration"></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/login_08.gif" width="37" height="312" alt=""></td>
		<td>
			<a href="contact.php">
				<img src="images/Untitled-1_09.gif" width="168" height="45" border="0" alt="Contact "></a></td>
		<td rowspan="4">
			<img src="images/login_10.gif" width="139" height="957" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/login_11.gif" width="164" height="267" alt=""></td>
		<td>
			<img src="images/login_12.gif" width="158" height="267" alt=""></td>
		<td>
			<img src="images/login_13.gif" width="206" height="267" alt=""></td>
		<td rowspan="3">
			<img src="images/login_14.gif" width="168" height="912" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/login_15.gif" width="298" height="645" alt=""></td>
		<td colspan="7" background="images/tuygljnctfygulhkn.gif" width="739" height="160" alt="">
      <div align="left" style="margin-left:=5px; margin-top:5px;">
    
<font face="Verdana, Geneva, sans-serif" color="white">  
        <form action="logincheck.php" method="post">
        
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>ID :</label>
<input id="id" name="id" placeholder="ID" type="text">

<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">

<?php
if(isset($_GET['msg']))
{
	echo '<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<font color=e60000 size=2> ID or Password is invalid</font><font size=1>  Forgot Password? Contact Admin.</font>';
}
?>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
User Type: <select id="user_type" name="user_type" required >
			<option>Student</option>
			<option>Employee</option>
			<option>Warden</option>
			<option>Doctor</option>
   </select>
   

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input name="submit" type="submit" value=" Login ">

</form>
</font>
</div>
        
        
        
        
        </td>
		<td rowspan="2">
			<img src="images/login_17.gif" width="22" height="645" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="images/login_18.gif" width="739" height="485" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="298" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="99" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="164" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="62" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="158" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="35" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="206" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="15" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="22" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="168" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="139" height="1" alt=""></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>