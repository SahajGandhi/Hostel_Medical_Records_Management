<?php
    session_start();
    $id=$_SESSION['id'];
    $usertype=$_SESSION['usertype'];
    include('connect.php');
    $link=f_sqlConnect(DB_username, DB_password, DB_name);
    if(isset($_GET['msg']))           //Successful submission note
{
	echo '<b><font color=navy size=5> Your form was submitted successfully.</font></b>';
}
?>

<html>
<head>
<title>visit form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (visit.psd) -->
<table id="Table_01" width="1367" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="13">
			<img src="images/visitform_01.gif" width="1366" height="43" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/visitform_02.gif" width="382" height="241" alt=""></td>
		<td>
			<a href="visitform.php">
				<img src="images/Visit-Form.gif" width="194" height="45" border="0" alt="Visit Form"></a></td>
		<td rowspan="4">
			<img src="images/visitform_04.gif" width="51" height="241" alt=""></td>
		<td>
			<a href="reportsform.php">
				<img src="images/Reports.gif" width="142" height="45" border="0" alt="Test Reports entry form"></a></td>
		<td rowspan="4">
			<img src="images/visitform_06.gif" width="66" height="241" alt=""></td>
		<td colspan="2">
			<a href="historyform.php">
				<img src="images/Patient-History.gif" width="177" height="45" border="0" alt="Patient History Entry Form"></a></td>
		<td rowspan="6">
			<img src="images/visitform_08.gif" width="52" height="957" alt=""></td>
		<td colspan="3">
			<a href="search.php">
				<img src="images/Search.gif" width="187" height="45" border="0" alt="Search patient by "></a></td>
		<td rowspan="6">
			<img src="images/visitform_10.gif" width="115" height="957" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/visitform_11.gif" width="194" height="196" alt=""></td>
		<td rowspan="3">
			<img src="images/visitform_12.gif" width="142" height="196" alt=""></td>
		<td colspan="2" rowspan="3">
			<img src="images/visitform_13.gif" width="177" height="196" alt=""></td>
		<td colspan="3">
			<img src="images/visitform_14.gif" width="187" height="21" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="21" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/visitform_15.gif" width="68" height="891" alt=""></td>
		<td>
			<a href="logout.php">
				<img src="images/final-template_16.gif" width="95" height="28" border="0" alt="Logout"></a></td>
		<td rowspan="4">
			<img src="images/visitform_17.gif" width="24" height="891" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/visitform_18.gif" width="95" height="863" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="147" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/visitform_19.gif" width="244" height="716" alt=""></td>
		<td  valign="top"colspan="6" background="images/visitform_20.gif" width="676" height="618" alt="">
        
        
        
        <div align="left" style="margin-left:30px; margin-top:5px;" >
<font face="Verdana, Geneva, sans-serif" color="white">  
        <form method="POST" action="visit_proc.php"> 

<br><br>

Patient ID: 
  <input type="text"  size="10" name="pID" required value="" />

Illness:	<input type="text" size="15" name="illness" value="" />
<br /><br />

Medicines/dosage: &emsp; 
  <input type="button" value="+" onClick="addRow('dataTable')" /> &emsp; 
  <input type="button" value="-" onClick="deleteRow('dataTable')" /> 
</p>
				
<table id="dataTable" class="form" border="1" background="" id="dataTable" class="form" width=12% style="table-layout:fixed; word-wrap:break-word; border-collapse:collapse; border: 2px solid #ffffff; color:#0c8a7c;">
<col width=300><col width=300>

  <tr>
	<p>
	<td >
	Medicine: <input type="text" name="med[]">

	</td>
    <td>
	Dosage: <input type="text" name="dos[]">
	</td>
    
	</p>
  </tr>
  <tr>&emsp;</tr>

</table>





&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
<input type="submit" name="submit" value="Submit" >
 &nbsp;&nbsp;&nbsp;&nbsp;                 

                    <input type="reset" name="reset" value="Reset" >
<br>
</form>                    </font></div>
        
        
        
        </td>
		<td rowspan="2">
			<img src="images/visitform_21.gif" width="92" height="716" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="618" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/visitform_22.gif" width="676" height="98" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="98" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="244" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="138" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="194" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="51" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="142" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="66" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="85" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="92" height="1" alt=""></td>
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
<script type="text/javascript">
function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 8){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum no. of Medicines is 7");
			   
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