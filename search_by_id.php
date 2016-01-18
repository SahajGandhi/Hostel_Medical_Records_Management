<?php
    session_start();
    $Sid=$_SESSION['id'];
    $usertype=$_SESSION['usertype'];
    include('connect.php');
    
   $link=f_sqlConnect(DB_username, DB_password, DB_name);
   
?>
<p align="right"><a href="logout.php"><font size=3><strong>Logout</strong>  </a>&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;</font></p>

<form action="search_by_id.php" method = "GET">
Enter ID : 
<input type="text" size="11" name="id" > &emsp;&emsp;&emsp; 
<input type="submit" name="Submit"> 
</form>


<?php



if(isset($_GET['id'])&&!empty($_GET['id']))
{ 
//$name=strtoupper($_GET['name']);
$id=$_GET['id'];
if($id==$_GET['id']){

$query = mysql_query("SELECT user_type FROM `user` WHERE `id`='$id'");  
if(mysql_num_rows($query)==NULL){
echo 'Check ID !';
}
else
{
  
$user=mysql_result($query,$link );

if($user=='Student')
{
    
echo '<font type="Verdana" color=#0c8a7c><br><br><h2><u>Patient Details</u> </h2>';
$query = "SELECT * FROM `student` WHERE `id`='$id'";    
$query_run=mysql_query($query);
$query_row=mysql_fetch_assoc($query_run);


$id=$query_row['id'];
$Fname=$query_row['Fname'];
$Mname=$query_row['Mname'];
$Lname=$query_row['Lname'];
$gender=$query_row['gender'];
$DOB=new DateTime($query_row['DOB']);
$age=date_diff(new DateTime('now'), $DOB)->y;

$address=$query_row['address'];
$category=$query_row['category'];
//$age= cal($DOB, date_create('today'));

$programme=$query_row['programme'];
$semester=$query_row['semester'];
$year=$query_row['year'];
$email=$query_row['email'];

$blood_group=$query_row['blood_group'];
$block=$query_row['block'];
$room_no=$query_row['room_no'];


echo '<strong>ID : </strong> '.$id.'&emsp;&emsp;&emsp;';
echo '<strong>Name :</strong> '.$Fname.' '.$Mname.' '.$Lname.'<br><br>' ;
echo '<strong>Gender : </strong>'.$gender.'&emsp;&emsp;&emsp;' ;
echo '<strong>Age :</strong> '.$age.'<br><br>' ;
echo '<strong>Blood Group :</strong> '.$blood_group.'&emsp;&emsp;&emsp;' ;
echo '<strong>Block :</strong> '.$block.'&emsp;&emsp;&emsp;' ;
echo '<strong>Room No. :</strong> '.$room_no.'<br><br>' ;


echo '<strong>Address : </strong> '.$address.'<br><Br>';
echo '<strong>Category : </strong> '.$category.'&emsp;&emsp;&emsp;';
echo '<strong>Email Id :</strong> '.$email.'<br><br>' ;
echo '<strong>Programme Details : </strong>'.$programme.' - Semester '.$semester.' - Year '.$year.'<br><Br><Br>';
}
else if($user=='Employee')
{
    
echo '<font type="Verdana" color=#0c8a7c><br><br><h2><u>Patient Details</u> </h2>';
$query = "SELECT * FROM `employee` WHERE `id`='$id'";    
$query_run=mysql_query($query);
$query_row=mysql_fetch_assoc($query_run);


$id=$query_row['id'];
$Fname=$query_row['name'];
$gender=$query_row['gender'];
$DOB=new DateTime($query_row['DOB']);
$age=date_diff(new DateTime('now'), $DOB)->y;

$address=$query_row['address'];
$category=$query_row['category'];
//$age= cal($DOB, date_create('today'));

$post=$query_row['post'];
$department=$query_row['department'];

$blood_group=$query_row['b_Group'];
$block=$query_row['block'];
$room_no=$query_row['room_No'];


echo '<strong>ID : </strong> '.$id.'&emsp;&emsp;&emsp;';
echo '<strong>Name :</strong> '.$Fname.'<br><br>' ;
echo '<strong>Gender : </strong>'.$gender.'&emsp;&emsp;&emsp;' ;
echo '<strong>Age :</strong> '.$age.'<br><br>' ;
echo '<strong>Blood Group :</strong> '.$blood_group.'&emsp;&emsp;&emsp;' ;
echo '<strong>Block :</strong> '.$block.'&emsp;&emsp;&emsp;' ;
echo '<strong>Room No. :</strong> '.$room_no.'<br><br>' ;


echo '<strong>Address : </strong> '.$address.'<br><Br>';
echo '<strong>Category : </strong> '.$category.'&emsp;&emsp;&emsp;';
echo '<strong>Post :</strong> '.$post.'&emsp;&emsp;&emsp;' ;
echo '<strong>Department :</strong>'.$department.'<br><Br><Br>';   
    
}
else{
    
    echo 'Check ID !';
}

//copy
if($user=='Student'||$user=='Employee')
{
$query = mysql_query("SELECT * FROM prescription WHERE p_id='$id'") ; 
if(mysql_num_rows($query)==0)
{
echo " <center> No Visits! </center>";
}
else
{
	
echo '<table border="1" background="" width=12% style="table-layout:fixed; word-wrap:break-word; border-collapse:collapse; border: 2px solid #14c8b1; color:#0c8a7c;">        
<col width=50><col width=115><col width=100><col width=100><col width=350>
 
<tr>
<th><b>Presc No.</b></th>
<th><b>Date</b></th>
<th><b>Doctor</b></th>
<th><b>Illness</b></th>
<th><b>Medicine (Dosage)</b></th>
</tr>';

while($row = mysql_fetch_array($query))
{
	
$presc_no=$row['presc_no'];
$date=$row['date'];
$illness=$row['illness'];
$d_id=$row['d_id'];
$doctor=mysql_result(mysql_query("SELECT name FROM co_ordinator WHERE id='$d_id'"),0);
echo '<tr>
<td><div  style="width:95px;word-wrap:break-word;">'.$presc_no.'</td>
<td class="me"><div  style="width:110px;word-wrap:break-word;">'.$date.'</td>
<td class="me"><div style="width:100px; word-wrap:break-word;">'."Dr. ".$doctor.'</td>
<td class="me"><div  style="width:100px; word-wrap:break-word;">'.$illness.'</td>';

$query1=mysql_query("SELECT * FROM prescription_medicines WHERE presc_no='$presc_no'") ; 
    if(mysql_num_rows($query1)==0)
    {
         echo " <td>No Medicines </td>";
    }
    else
    {	
         echo '<td class="me"><div style="width:345px; word-wrap:break-word;">';
         while($row1 = mysql_fetch_array($query1))
        {   
            $medicine=$row1['medicine'];
            $dosage=$row1['dosage'];
            echo '<br>'.$medicine.' ('.$dosage.')';
         }

        echo '</div>';
        echo '</td>';  
    }

  echo '</tr>';  
}
echo '</table>';
}
}

//end copy
}

}
}
echo '</font>';
?>