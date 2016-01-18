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
   $result=mysql_query("SELECT name,gender,DOB,address,category,b_Group,post,department,block,room_No FROM employee WHERE id='$id'");
    $row=mysql_fetch_assoc($result);
  
// define variables and set to empty values
$addressErr=$postErr=$deptErr=$blockErr=$RNoErr="";
$address=$post=$dept=$block=$RNo= "";

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
   
 if (!empty($_POST["post"])&&!empty($_POST["dept"])&&!empty($_POST["block"])&&!empty($_POST["RNo"])) 
    {
     $post = test_input($_POST["post"]);
     $dept = test_input($_POST["dept"]);
     $block = test_input($_POST["block"]);
     $RNo = test_input($_POST["RNo"]);
    }
    	
    
}

function test_input($data) {
   $data = trim($data);
   }
   ?>
   

   
   <html>
<head>
<title>Update</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<style>textarea{resize: none;}</style>
<!-- Save for Web Slices (profile.psd) -->
<table id="Table_01" width="1367" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="13">
			<img src="images/update_01.gif" width="1366" height="43" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/update_02.gif" width="382" height="219" alt=""></td>
		<td>
			<a href="patientprofile.php">
				<img src="images/patient-profile.gif" width="194" height="45" border="0" alt="Profile"></a></td>
		<td rowspan="4">
			<img src="images/update_04.gif" width="35" height="219" alt=""></td>
		<td>
			<a href="patientvisits.php">
				<img src="images/Viewvisits.gif" width="176" height="45" border="0" alt="Last visits"></a></td>
		<td rowspan="4">
			<img src="images/update_06.gif" width="50" height="219" alt=""></td>
		<td>
			<a href="patientreports.php">
				<img src="images/Viewreports.gif" width="177" height="45" border="0" alt="view reports"></a></td>
		<td colspan="2" rowspan="4">
			<img src="images/update_08.gif" width="29" height="219" alt=""></td>
		<td colspan="3">
			<a href="update.php">
				<img src="images/Updatedetails.gif" width="208" height="45" border="0" alt="Update details"></a></td>
		<td rowspan="6">
			<img src="images/update_10.gif" width="115" height="957" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/update_11.gif" width="194" height="174" alt=""></td>
		<td rowspan="3">
			<img src="images/update_12.gif" width="176" height="174" alt=""></td>
		<td rowspan="3">
			<img src="images/update_13.gif" width="177" height="174" alt=""></td>
		<td colspan="3">
			<img src="images/update_14.gif" width="208" height="21" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="21" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/update_15.gif" width="74" height="891" alt=""></td>
		<td>
			<a href="logout.php">
				<img src="images/logoutbutton.gif" width="110" height="28" border="0" alt="Logout"></a></td>
		<td rowspan="4">
			<img src="images/update_17.gif" width="24" height="891" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/update_18.gif" width="110" height="863" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="125" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/update_19.gif" width="274" height="738" alt=""></td>
		<td colspan="7" background="images/kuyg.gif" width="745" height="350" alt="">
    <div align="left" style="margin-left:=500px; margin-top:5px;" >
<font face="Verdana, Geneva, sans-serif" color="white">        
        
<form method="post" action="update_e_proc.php"> 

<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Registration ID: 
  <input type="text" disabled="disable" size="10" name="regID" required value="<?php echo $id;?>">
 
Name:	<input type="text" disabled="disable" size="15" name="name" value="<?php echo $row['name'];?>">
<br /><br />
      
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;              
Gender:	<input type="text" disabled="disable" size="15" name="gender" value="<?php echo $row['gender'];?>">
&emsp;&emsp;
         
DOB: <input type="date" disabled="disable" name="date" cols="10" value="<?php echo $row['DOB'];?>">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Address: <br>                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows="4" cols="50" name="address"><?php echo  $row['address'];?></textarea>
<?php echo $addressErr;?>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Category:  <input type="text" disabled="disable" size="15" name="category" value="<?php echo $row['category'];?>">
            
Blood Group: <input type="text" disabled="disable" size="1" name="bGroup" required  value="<?php echo $row['b_Group'];?>">
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Post: <input type="text" size="10" name="post" required  value="<?php echo $row['post'];?>">
<?php echo $postErr;?>
         

Department: <input type="text" size="10" name="dept" required  value="<?php echo $row['department'];?>">
<?php echo $deptErr;?>
<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Block:
<input type="text" size="1" name="block" required  value="<?php echo $row['block'];?>">
<?php echo $blockErr;?>
   &nbsp;
Room No.: <input type="text" size="3" name="RNo" required  value="<?php echo  $row['room_No'];?>">
<?php echo $RNoErr;?>
   


</font>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
<input type="submit" name="submit" value="Update" >
 &nbsp;&nbsp;&nbsp;&nbsp;                 

                    <input type="reset" name="reset" value="Reset" >
<br>
</form>                    

                    
</font>


</div>
            
            
            
            
            
            
            
            </td>
		<td rowspan="2">
			<img src="images/update_21.gif" width="24" height="738" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="350" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="images/update_22.gif" width="745" height="388" alt=""></td>
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