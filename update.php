<?php
    session_start();
    $id=$_SESSION['id'];
    $usertype=$_SESSION['usertype'];
    if($usertype=='Student')
    {
        header("Location: update_s.php");
    }
    else if($usertype=='Employee'){
        header("Location: update_e.php");
    }
     else{
        header("Location: update_w.php");
    }

?>