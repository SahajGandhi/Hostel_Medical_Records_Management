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
   $result=mysql_query("SELECT * FROM co_ordinator WHERE id='$id'");
    $row=mysql_fetch_assoc($result);
  
// define variables and set to empty values
$addressErr=$blockErr=$PNoErr="";
$address=$block=$PNo= "";

	//define variables	
if ($_SERVER['REQUEST_METHOD']== "POST")
 {
           
  if(!empty($_POST["address"]))
    {
     $address = test_input($_POST["address"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
       $addressErr = "Only letters allowed"; 
     }
   }
   
 if (!empty($_POST["block"])&&!empty($_POST["PNo"])) 
    {
     $block = test_input($_POST["block"]);
     $PNo = test_input($_POST["PNo"]);
    }
    	
    
}

function test_input($data) {
   $data = trim($data);
   }
   ?>
   
   
   <html>
<head>
<title>warden</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<style>textarea{resize: none;}</style>     
<!-- Save for Web Slices (warden.psd) -->
<table id="Table_01" width="1367" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="13">
			<img src="images/update_w_01.gif" width="1366" height="43" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/update_w_02.gif" width="382" height="219" alt=""></td>
		<td>
			<a href="wardenprofile.php">
				<img src="images/warden-profile.gif" width="194" height="45" border="0" alt="Profile"></a></td>
		<td rowspan="4">
			<img src="images/update_w_04.gif" width="35" height="219" alt=""></td>
		<td>
			<a href="w_historyform.php">
				<img src="images/patient-history-form.gif" width="176" height="45" border="0" alt="history form"></a></td>
		<td rowspan="4">
			<img src="images/update_w_06.gif" width="50" height="219" alt=""></td>
		<td>
			<a href="wardensearch.php">
				<img src="images/Warden-Search.gif" width="177" height="45" border="0" alt="Search"></a></td>
		<td colspan="2" rowspan="4">
			<img src="images/update_w_08.gif" width="29" height="219" alt=""></td>
		<td colspan="3">
			<a href="update.php">
				<img src="images/Updatedetails.gif" width="208" height="45" border="0" alt="Update details"></a></td>
		<td rowspan="6">
			<img src="images/update_w_10.gif" width="115" height="957" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/update_w_11.gif" width="194" height="174" alt=""></td>
		<td rowspan="3">
			<img src="images/update_w_12.gif" width="176" height="174" alt=""></td>
		<td rowspan="3">
			<img src="images/update_w_13.gif" width="177" height="174" alt=""></td>
		<td colspan="3">
			<img src="images/update_w_14.gif" width="208" height="21" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="21" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/update_w_15.gif" width="74" height="891" alt=""></td>
		<td>
			<a href="logout.php">
				<img src="images/logoutbutton.gif" width="110" height="28" border="0" alt="Logout"></a></td>
		<td rowspan="4">
			<img src="images/update_w_17.gif" width="24" height="891" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/update_w_18.gif" width="110" height="863" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="125" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/update_w_19.gif" width="274" height="738" alt=""></td>
		<td colspan="7" background="images/kale.gif" width="745" height="350" alt="">
        
        <div align="left" style="margin-left:50px; margin-top:5px;" >
<font face="Verdana, Geneva, sans-serif" color="white"> 

<form method="post" action="update_w_proc.php"> 

<br><br>
ID: 
  <input type="text" disabled="disable" size="10" name="regID" required value="<?php echo $id;?>">
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
Name:	<input type="text" disabled="disable" size="30" name="name" value="<?php echo $row['name'];?>">
<br /><br />
      

Address: <br>                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows="4" cols="50" name="address"><?php echo  $row['address'];?></textarea>
<?php echo $addressErr;?>
<br /><br>
DOB: <input type="date" disabled="disable" name="date" cols="10" value="<?php echo $row['DOB'];?>">
<br>
<br>
Block:
<input type="text" size="1" name="block" required  value="<?php echo $row['block'];?>">
<?php echo $blockErr;?>
   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
Phone No.: <input type="text" size="10" name="PNo" required  value="<?php echo  $row['phone_number'];?>">
<?php echo $PNoErr;?>
   


</font>

<br><br>  <br>  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;    &emsp;
<input type="submit" name="submit" value="Update" >
&emsp;&emsp;           

                    <input type="reset" name="reset" value="Reset" >
<br>
</form>                    

                    
</font>


</div>
        
        </td>
		<td rowspan="2">
			<img src="images/update_w_21.gif" width="24" height="738" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="350" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="images/update_w_22.gif" width="745" height="388" alt=""></td>
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