
<html>
<head>
<title>final template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (final template.psd) -->
<table id="Table_01" width="1367" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="13">
			<img src="images/historyform_01.gif" width="1366" height="43" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/historyform_02.gif" width="382" height="219" alt=""></td>
		<td>
			<a href="visitform.php">
				<img src="images/Visit-Form.gif" width="194" height="45" border="0" alt="Visit Form"></a></td>
		<td rowspan="4">
			<img src="images/historyform_04.gif" width="35" height="219" alt=""></td>
		<td>
			<a href="reportsform.php">
				<img src="images/lkgjhlj.gif" width="176" height="45" border="0" alt="Test Reports entry form"></a></td>
		<td rowspan="4">
			<img src="images/historyform_06.gif" width="50" height="219" alt=""></td>
		<td>
			<a href="historyform.php">
				<img src="images/Patient-History.gif" width="177" height="45" border="0" alt="Patient History Entry Form"></a></td>
		<td colspan="2" rowspan="4">
			<img src="images/historyform_08.gif" width="50" height="219" alt=""></td>
		<td colspan="3">
			<a href="search.php">
				<img src="images/Search.gif" width="187" height="45" border="0" alt="Search patient by "></a></td>
		<td rowspan="6">
			<img src="images/historyform_10.gif" width="115" height="957" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/historyform_11.gif" width="194" height="174" alt=""></td>
		<td rowspan="3">
			<img src="images/historyform_12.gif" width="176" height="174" alt=""></td>
		<td rowspan="3">
			<img src="images/historyform_13.gif" width="177" height="174" alt=""></td>
		<td colspan="3">
			<img src="images/historyform_14.gif" width="187" height="21" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="21" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/historyform_15.gif" width="53" height="891" alt=""></td>
		<td>
			<a href="logout.php">
				<img src="images/logoutbutton.gif" width="110" height="28" border="0" alt="Logout"></a></td>
		<td rowspan="4">
			<img src="images/historyform_17.gif" width="24" height="891" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/historyform_18.gif" width="110" height="863" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="125" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/historyform_19.gif" width="274" height="738" alt=""></td>
		<td  valign="top" colspan="7" background="images/vbnm.gif" width="745" height="408" alt="">
        
       
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
<col width=350><col width=350>

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
<col width=350><col width=350>

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
		<td rowspan="2">
			<img src="images/historyform_21.gif" width="45" height="738" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="408" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="images/historyform_22.gif" width="745" height="330" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="330" alt=""></td>
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
			<img src="images/spacer.gif" width="45" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="53" height="1" alt=""></td>
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