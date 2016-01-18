<?php
    include('connect.php');
    
   $link=f_sqlConnect(DB_username, DB_password, DB_name);
   
  /* function f_checknull($str, $conn)
   {
    $ans='    -unavailable-     ';
    $qexec=mysql_query($str);
    if(mysql_num_rows($qexec)!=NULL)
    {
        $ans=mysql_result($qexec, $conn);
    }
    return $ans;
   }
   */
   
?>

<html>
<head>
<title>Contacts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (final template.psd) -->
<table id="Table_01" width="1367" height="1001" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="13">
			<img src="images/contact_01.gif" width="1366" height="43" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images/contact_02.gif" width="382" height="297" alt=""></td>
		<td>
			<a href="index.php">
				<img src="images/Home.gif" width="194" height="45" border="0" alt="Home"></a></td>
		<td rowspan="2">
			<img src="images/contact_04.gif" width="51" height="297" alt=""></td>
		<td>
			<a href="login.php">
				<img src="images/Login.gif" width="142" height="45" border="0" alt="Login"></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/contact_06.gif" width="69" height="297" alt=""></td>
		<td>
			<a href="register.php">
				<img src="images/Register.gif" width="177" height="45" border="0" alt="Register"></a></td>
		<td colspan="2" rowspan="3">
			<img src="images/contact_08.gif" width="49" height="298" alt=""></td>
		<td>
			<a href="contact.php">
				<img src="images/Contact.gif" width="187" height="45" border="0" alt="Contact"></a></td>
		<td rowspan="6">
			<img src="images/contact_10.gif" width="115" height="957" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/contact_11.gif" width="194" height="252" alt=""></td>
		<td>
			<img src="images/contact_12.gif" width="142" height="252" alt=""></td>
		<td rowspan="2">
			<img src="images/contact_13.gif" width="177" height="253" alt=""></td>
		<td rowspan="5">
			<img src="images/contact_14.gif" width="187" height="912" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="252" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/contact_15.gif" width="283" height="660" alt=""></td>
		<td colspan="6" rowspan="2" background="images/contacts.gif" width="543" height="522" >
        
        <div style="margin-left:15px; margin-top:5px;">
      <?php
      $qDoc="SELECT phone_number FROM co_ordinator WHERE block='-'";
      //$docNo= f_checknull($qDoc, $link);
      
      $qA="SELECT phone_number FROM co_ordinator WHERE block='A'";
      //$wA_No= f_checknull($qA, $link);
      
      $qB="SELECT phone_number FROM co_ordinator WHERE block='B'";
      //$wB_No= f_checknull($qB, $link);
      
      $qC="SELECT phone_number FROM co_ordinator WHERE block='C'";
      //$wC_No= f_checknull($qC, $link);
      
      $qD="SELECT phone_number FROM co_ordinator WHERE block='D'";
      //$wD_No= f_checknull($qD, $link);
      
      $qE="SELECT phone_number FROM co_ordinator WHERE block='E'";
      //$wE_No= f_checknull($qE, $link);
      
      
      
      $wA_No=$wB_No=$wC_No=$wD_No=$wE_No='    -unavailable-     ';
      
      $qexec=mysql_query($qDoc);
      if(mysql_num_rows($qexec)!=NULL)
      {
        $docNo=mysql_result($qexec, $link);
      }
      
      $qexec=mysql_query($qA);
      if(mysql_num_rows($qexec)!=NULL)
      {
        $wA_No=mysql_result($qexec, $link);
      }
      
      $qexec=mysql_query($qB);
      if(mysql_num_rows($qexec)!=NULL)
      {
        $wB_No=mysql_result($qexec, $link);
      }
      
      $qexec=mysql_query($qC);
      if(mysql_num_rows($qexec)!=NULL)
      {
        $wC_No=mysql_result($qexec, $link);
      }
      
      $qexec=mysql_query($qD);
      if(mysql_num_rows($qexec)!=NULL)
      {
        $wD_No=mysql_result($qexec, $link);
      }
      
      $qexec=mysql_query($qE);
      if(mysql_num_rows($qexec)!=NULL)
      {
        $wE_No=mysql_result($qexec, $link);
      }      
       
      ?>
<font face="Verdana, Geneva, sans-serif" color="white">
			Doctor: ____________________________   Ph:<?php  echo $docNo;?>
           <br><br> <br><br> Warden, Block A: _____________________Ph:<?php echo $wA_No;?>
            <br><br><br><br>  Warden, Block B: _____________________Ph:<?php echo $wB_No;?>
           <br><br> <br><br>              Warden, Block C: _____________________Ph:<?php echo $wC_No;?>
                                     <br><br> <br><br>Warden, Block D: _____________________Ph:<?php echo $wD_No;?>
                                             <br><br>   <br><br>  Warden, Block E: _____________________Ph:<?php echo $wE_No;?>            
           </font></div> 
		<td>
			<img src="images/contact_17.gif" width="12" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images/form.gif" width="198" height="529" alt=""></td>
		<td rowspan="3">
			<img src="images/contact_19.gif" width="40" height="659" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="521" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/contact_20.gif" width="12" height="138" alt=""></td>
		<td colspan="5">
			<img src="images/form-22.gif" width="531" height="8" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="8" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">
			<img src="images/contact_22.gif" width="729" height="130" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="130" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="283" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="12" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="87" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="194" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="51" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="142" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="57" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="12" height="1" alt=""></td>
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
		<td></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>