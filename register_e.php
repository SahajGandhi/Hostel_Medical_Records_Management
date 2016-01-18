	<?php
//Successful submission note
if(isset($_GET['msg']))
{
	echo '<b><font color=navy size=5> Your information was submitted successfully.</font></b>';
}


// define variables and set to empty values
$nameErr=$passwdErr=$confirmErr=$regIDErr=$fnameErr=$mnameErr=$lnameErr=$addressErr=$bGroupErr=$semErr=$emailErr=$yearErr=$feesErr=$statusErr=$blockErr=$RNoErr="";
$name= $password=$confirm=$regID=$fname=$mname=$lname=$gender=$date=$address=$category=$bGroup=$sem=$email=$year=$fees=$status=$block=$RNo= "";

if ($_SERVER['REQUEST_METHOD']== "POST")
 {
           
    if(!empty($_POST["regID"]))
    {
     $regID = test_input($_POST["regID"]);
     
      if(strlen(utf8_decode($_POST['regID'])) !=9)
       {        
            $regIDErr = "Registraion ID must be a 9 digit number";
       }
    }
    
       
   if(!empty($_POST["fname"]))
    {
     $fname = test_input($_POST["fname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
       $fnameErr = "Only letters allowed"; 
     }
   }
   
   
   if(!empty($_POST["password"]) && !empty($_POST["confirm"]))
     {
    	$confirm = test_input($_POST["confirm"]); 
	   $password = test_input($_POST["password"]);  
	   if($confirm != $password)
	   {
	       	$confirmErr=" Passwords do not match ";
	   }
	   else
	   {
	       	$confirmErr= "Passwords match";  
	   } 
       if(strlen(utf8_decode($_POST['password'])) < 8 || strlen(utf8_decode($_POST['password'])) > 25)
       {        
            $passwdErr = "Password must be between 8 and 25 characters";
       }
       
    }
   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }

   if(!empty($_POST["address"]))
    {
     $address = test_input($_POST["address"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
       $addressErr = "Only letters allowed"; 
     }
   }

   if(!empty($_POST["bGroup"]))
    {
     $bGroup = test_input($_POST["bGroup"]);
     
      if(strlen(utf8_decode($_POST['bGroup'])) <2 || strlen(utf8_decode($_POST['bGroup']))>3 )
       {        
            $bGroupErr = "Blood Group entered incorrectly eg. A+";
       }
    }

if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
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
<title>Employee Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (final template.psd) -->
<table id="Table_01" width="1366" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="11">
			<img src="images/register_s_01.gif" width="1366" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">
			<img src="images/register_s_02.gif" width="382" height="298" alt=""></td>
		<td>
			<a href="home.php">
				<img src="images/Home.gif" width="194" height="45" border="0" alt="Home"></a></td>
		<td rowspan="2">
			<img src="images/register_s_04.gif" width="51" height="298" alt=""></td>
		<td>
			<a href="login.php">
				<img src="images/Login.gif" width="142" height="45" border="0" alt="Login"></a></td>
		<td rowspan="2">
			<img src="images/register_s_06.gif" width="69" height="298" alt=""></td>
		<td>
			<a href="register.php">
				<img src="images/Register.gif" width="177" height="45" border="0" alt="Register"></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/register_s_08.gif" width="49" height="298" alt=""></td>
		<td>
			<a href="contact.php">
				<img src="images/Contact.gif" width="187" height="45" border="0" alt="Contact"></a></td>
		<td rowspan="4">
			<img src="images/register_s_10.gif" width="115" height="957" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/register_s_11.gif" width="194" height="253" alt=""></td>
		<td>
			<img src="images/register_s_12.gif" width="142" height="253" alt=""></td>
		<td>
			<img src="images/register_s_13.gif" width="177" height="253" alt=""></td>
		<td rowspan="3">
			<img src="images/register_s_14.gif" width="187" height="912" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/register_s_15.gif" width="295" height="659" alt=""></td>
            
            
		<td colspan="7"background="images/regesform.gif" width="729" height="529">
        <div align="left" style="margin-left:=5px; margin-top:5px;">
    
<font face="Verdana, Geneva, sans-serif" color="white">

<form method="post" action="empprocessing.php"> 

<input type="hidden" name="redirect_to" value="">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
  Employee ID: <input type="text" size="10" name="regID" required value="<?php echo $regID;?>">
<?php echo $regIDErr;?>
&nbsp;&nbsp;&nbsp;&nbsp;

Name:	<input type="text" size="15" name="fname" required  value="<?php echo $fname;?>">
<?php echo $fnameErr;?><br><br><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;

Password: <input type="password" size="12" name="password" required value="<?php echo $password;?>">
<?php echo $passwdErr;?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Confirm Passwd: <input type="password" size="12" name="confirm" required value="<?php echo $confirm;?>">
<?php echo $confirmErr;?>
<br><br><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
Gender: <input type="radio" name="gender" required value="male">  Male	&nbsp;&nbsp;&nbsp;
	      <input type="radio" name="gender" required value="female">  Female
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;

DOB: <input type="date" name="date" required value="<?php echo $date;?>">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
Address: <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows="4" cols="30" name="address" required value="<?php echo $address;?>"></textarea>
<?php echo $addressErr;?> <br>
<br />
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Category: <select name="category" required >
			<option>General</option>
			<option>SC</option>
			<option>ST</option>
			<option>OBC</option>
			<option>Handicapped</option>
		</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Blood Group: <input type="text" size="1" name="bGroup" required  value="<?php echo $bGroup;?>">
<?php echo $bGroupErr;?>
<br><br />
<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Post: <input type="text" size="20" name="email" required  value="<?php echo $email;?>">
<?php echo $emailErr;?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Department: <input type="text" size="10" name="status" value="<?php echo $status;?>">
<?php echo $statusErr;?>
<br /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Block: <input type="text" size="1" name="block" required  value="<?php echo $block;?>">
<?php echo $blockErr;?>
&nbsp; &nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


Room No.: <input type="text" size="3" name="RNo" required  value="<?php echo $RNo;?>">
<?php echo $RNoErr;?>
&nbsp; &nbsp;
<br />
<br />
<br>
</font>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="Submit" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" >
<br>
</form>
</div>
       
       
       
       
       
       
       
	  </td>
		<td rowspan="2">
			<img src="images/register_s_17.gif" width="40" height="659" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="images/register_s_18.gif" width="729" height="130" alt=""></td>
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