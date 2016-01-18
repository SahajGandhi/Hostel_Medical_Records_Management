<html>
<head>
<title>Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (final template.psd) -->
<table id="Table_01" width="1366" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="11">
			<img src="images/register_01.gif" width="1366" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">
			<img src="images/register_02.gif" width="382" height="298" alt=""></td>
		<td>
			<a href="index.php">
				<img src="images/Home.gif" width="194" height="45" border="0" alt="Home"></a></td>
		<td rowspan="2">
			<img src="images/register_04.gif" width="51" height="298" alt=""></td>
		<td>
			<a href="login.php">
				<img src="images/Login.gif" width="142" height="45" border="0" alt="Login"></a></td>
		<td rowspan="2">
			<img src="images/register_06.gif" width="69" height="298" alt=""></td>
		<td>
			<a href="register.php">
				<img src="images/Register.gif" width="177" height="45" border="0" alt="Register"></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/register_08.gif" width="49" height="298" alt=""></td>
		<td>
			<a href="contact.php">
				<img src="images/Contact.gif" width="187" height="45" border="0" alt="Contact"></a></td>
		<td rowspan="4">
			<img src="images/register_10.gif" width="115" height="957" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/register_11.gif" width="194" height="253" alt=""></td>
		<td>
			<img src="images/register_12.gif" width="142" height="253" alt=""></td>
		<td>
			<img src="images/register_13.gif" width="177" height="253" alt=""></td>
		<td rowspan="3">
			<img src="images/register_14.gif" width="187" height="912" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/register_15.gif" width="295" height="659" alt=""></td>
	<!--	<td colspan="7" bgcolor="#b4d9d4" width="729" height="185"> -->
        
        <td colspan="7" background="images/missing.gif" width="729" height="185">

        
        <div align="left" style="margin-left:=5px; margin-top:5px;">
        
        
<form method="post" action="register.php"> 

  <p>
    <input type="hidden" name="redirect_to" value=""><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;         <font face="Verdana, Geneva, sans-serif" color="white" >        User Type:   </font>&nbsp;
            <select name="type" required >
      <option>Student</option>
      <option>Employee</option>
      
    </select>
  </p>
  <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="submit" value="Submit" >
  </p>
  
</form>

<?php
//Successful submission note

if ($_SERVER['REQUEST_METHOD']== "POST")
 {
           
   if(!empty($_POST["type"]))
    {
        if($_POST["type"]=='Student')
        header("Location: register_s.php");
        else 
        header("Location: register_e.php");
        
              
     }   
 }
 
?>

        </div></td>
		<td rowspan="2">
			<img src="images/register_17.gif" width="40" height="659" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="images/register_18.gif" width="729" height="474" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="295" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="87" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="194" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="51" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="142" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="69" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="177" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="9" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="40" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="187" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="115" height="1" alt=""></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>