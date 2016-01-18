 <?php
    session_start();
    $id=$_SESSION['id'];
    $usertype=$_SESSION['usertype'];
    include('connect.php');
    
    if(isset($_GET['msg']))           //Successful submission note
{
	echo '<b><font color=navy size=5> Your form was submitted successfully.</font></b>';
}

?>

<html>
<head>
<title>Patient History Form/title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (hvk.zxjc) -->

<table id="Table_01" width="1367" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="12">
			<img src="images/w_historyform_01.gif" width="1366" height="43" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/w_historyform_02.gif" width="382" height="231" alt=""></td>
		<td>
			<a href="wardenprofile.php">
				<img src="images/warden-profile.gif" width="194" height="45" border="0" alt="Profile"></a></td>
		<td rowspan="4">
			<img src="images/w_historyform_04.gif" width="35" height="231" alt=""></td>
		<td>
			<a href="w_historyform.php">
				<img src="images/patient-history-form.gif" width="176" height="45" border="0" alt="history form"></a></td>
		<td rowspan="4">
			<img src="images/w_historyform_06.gif" width="50" height="231" alt=""></td>
		<td>
			<a href="wardensearch.php">
				<img src="images/Warden-Search.gif" width="177" height="45" border="0" alt="Search"></a></td>
		<td rowspan="6">
			<img src="images/w_historyform_08.gif" width="29" height="957" alt=""></td>
		<td colspan="3">
			<a href="update.php">
				<img src="images/Updatedetails.gif" width="208" height="45" border="0" alt="Update details"></a></td>
		<td rowspan="6">
			<img src="images/w_historyform_10.gif" width="115" height="957" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/w_historyform_11.gif" width="194" height="186" alt=""></td>
		<td rowspan="3">
			<img src="images/w_historyform_12.gif" width="176" height="186" alt=""></td>
		<td rowspan="3">
			<img src="images/w_historyform_13.gif" width="177" height="186" alt=""></td>
		<td colspan="3">
			<img src="images/w_historyform_14.gif" width="208" height="21" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="21" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/w_historyform_15.gif" width="74" height="891" alt=""></td>
		<td>
			<a href="logout.php">
				<img src="images/logoutbutton.gif" width="110" height="28" border="0" alt="Logout"></a></td>
		<td rowspan="4">
			<img src="images/w_historyform_17.gif" width="24" height="891" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/w_historyform_18.gif" width="110" height="863" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="137" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/w_historyform_19.gif" width="273" height="726" alt=""></td>
		<td colspan="6" background="images/w_historyform_20.gif" width="741" height="628" alt="">
       <div align="left" style="margin-left:30px; margin-top:5px;">
    
<font face="Verdana, Geneva, sans-serif" color="white">

<form method="POST" action="history_proc.php"> 

<br>
Patient ID: 
  <input type="text"  size="10" name="pID" required value="" />
&emsp;&emsp;&emsp;&emsp;
<br /><br />
<strong>Allergies and Genetic Disorders:</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <input type="button" value="+" onClick="addRow('dataTable')" /> &emsp; 
  <input type="button" value="-" onClick="deleteRow('dataTable')" /> 
		<br>		
<table id="dataTable" class="form" border="1" background=""  class="form" width=12% style="table-layout:fixed; word-wrap:break-word; border-collapse:collapse; border: 2px solid #98cdc6; color:#ffffff;">
<col width=300><col width=300>

  <tr>
	
	<td >
	Allergies: <input type="text" name="allg[]">

	</td>
        <td>
	Genetic Disorders:<input type="text" name="gendis[]">
	</td>
	 </tr>
  <tr>&emsp;</tr>

</table>
<br /><br>
<strong>Previous Hospitalisations:</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
  <input type="button" value="+" onClick="addRow('dataTable2')" /> &emsp; 
  <input type="button" value="-" onClick="deleteRow('dataTable2')" /> <br>

<table class="form" border="1" background="" id="dataTable2" class="form" width=12% style="table-layout:fixed; word-wrap:break-word; border-collapse:collapse; border: 2px solid #98cdc6; color:#ffffff;">
<col width=300><col width=300>

  <tr>
	<td >
	Hospital/Illness: <input type="text" name="hosp[]" required placeholder="eg. Hospital(Doctor)">
	</td>
	<td>
	Cause:<input type="text" name="cause[]" required>
	</td>
	</tr>
  <tr>&emsp;</tr>

</table>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="Submit" >
 &nbsp;&nbsp;&nbsp;&nbsp;                 

                    <input type="reset" name="reset" value="Reset" >
<br>
</form> 

 
        
        </font></div> 
        
        </td>
		<td>
			<img src="images/spacer.gif" width="1" height="628" alt=""></td>
	</tr>
	<tr>
		<td colspan="6"><img src="images/w_historyform_21.gif" width="741" height="98" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="98" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="273" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="109" height="1" alt=""></td>
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
			<img src="images/spacer.gif" width="29" height="1" alt=""></td>
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

<script type="text/javascript">
function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount <4){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum 3 entries allowed");
			   
	}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		if(rowCount <= 1) 
        {               // limit the user from removing all the fields
				break;
		}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}


</script>