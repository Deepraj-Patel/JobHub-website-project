<?php 
include 'connect.php'; 
session_start();
error_reporting(0);

$uem=$_GET['uem'];
$pst=$_GET['pst'];
$cnm=$_GET['cnm'];

    $sql="DELETE FROM `applied_jobs` WHERE applicant_email='$uem' AND company_name='$cnm' AND applied_post='$pst'";
    if($conn->query($sql)===TRUE){
        
        echo '<script>alert("Successfully Deleted");</script>';
       
      }
      else{
         echo '<script>alert("Somthing went wrong please try again");</script>';
      }



?>