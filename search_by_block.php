<?php
    session_start();
    $id=$_SESSION['id'];
    $usertype=$_SESSION['usertype'];
    require_once('connect.php');
    
   $link=f_sqlConnect(DB_username, DB_password, DB_name);
   
?>
<form action="search_by_block.php" method = "GET">
Enter block name : 
<input type="text" size="1" name="block"> 
</form>

<?php

if(isset($_GET['block'])&&!empty($_GET['block']))
{ 
$block=strtoupper($_GET['block']);
if($block=='A'||$block=='B'||$block=='C'||$block=='D'||$block=='E'){

$query = "SELECT * FROM `student` WHERE `block`='$block'";

if($query_run=mysql_query($query)){

if(mysql_num_rows($query_run)==NULL){
echo 'No results found !';
}
else{
while($query_row=mysql_fetch_assoc($query_run)){
$id=$query_row['id'];
$Fname=$query_row['Fname'];
$Mname=$query_row['Mname'];
$Lname=$query_row['Lname'];
$gender=$query_row['gender'];
$DOB=$query_row['DOB'];
$address=$query_row['address'];
$category=$query_row['category'];
$blood_group=$query_row['blood_group'];
$programme=$query_row['programme'];
$semester=$query_row['semester'];
$year=$query_row['year'];
$email=$query_row['email'];
$fees=$query_row['fees'];
$status=$query_row['status'];
$block=$query_row['block'];
$room_no=$query_row['room_no'];
$payment_date=$query_row['payment_date'];
$receipt_no=$query_row['receipt_no'];
echo 'ID : '.$id.'<br>';
echo 'Name : '.$Fname.' '.$Mname.' '.$Lname.'<br>' ;
echo 'Gender : '.$gender.'<br>' ;
echo 'Date of Birth : '.$DOB.'<br>' ;
echo 'Address : '.$address.'<br>' ;
echo 'Category : '.$category.'<br>' ;
echo 'Blood Group : '.$blood_group.'<br>' ;
echo 'Programme Details : '.$programme.' - Semester '.$semester.' - Year '.$year.'<br>' ;
echo 'Email Id : '.$email.'<br>' ;
echo 'Amount of Fees : '.$fees.'<br>' ;
echo 'Fee Status : '.$status.' - '.$payment_date.' - '.$receipt_no.'<br>' ;
echo 'Block And Room No. : '.$block.' - '.$room_no.'<br>' ;
echo '<br><br>';

}

} 
}
else{
echo mysql_error();
}
}
else{
echo 'No such Hostel Block !';
}
}
?>