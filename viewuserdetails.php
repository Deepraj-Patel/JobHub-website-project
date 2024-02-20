
<?php
require('connect.php');
session_start();
error_reporting(0);
$logo=$_SESSION['logo'];
$cmn=$_SESSION['cmname'];

$uem=$_GET['uem'];
$pst=$_GET['pst'];
$dt=$_GET['dt'];
$sql="SELECT *from completeprofile where email='$uem'";
$data=mysqli_query($conn,$sql);
$user = mysqli_fetch_assoc($data);

$sql2="SELECT *from applied_jobs where applicant_email='$uem' AND company_name='$cmn' AND applied_post='$pst'";
$data2=mysqli_query($conn,$sql2);
$user2 = mysqli_fetch_assoc($data2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="dstyle.css">


    <style>
       
    </style>
</head>
<body>
    <div class="container">
        
        <nav>
        
            <ul>
                <li><a href="#" class="logo">
                    <img src="<?php echo $logo; ?>" alt="">
                    <div class="nav-item">DashBoard</div>
                </a></li>
                
                
                <div>&nbsp&nbsp&nbsp&nbsp <?php echo $cmn ;  ?>&nbsp&nbsp </div>
                
                <li><a href="jobhome.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="companydashboard.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="updatecompanydetails.php">
                <i class="fas fa-wallet"></i>
                    <span class="nav-item">Update Details</span>
                </a></li>
                <li><a href="applications.php">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Applications</span>
                </a></li>
                <li><a href="postvacancy.php">
                <i class="fas fa-tasks"></i>
                    <span class="nav-item">Post Vacancy</span>
                </a></li>
                
                
                <li><a href="logout.php" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a></li>
                
            </ul>
        </nav>
         
            <!-- jobs section starts -->
            <section class="jobs-container">
        
            <div class="box-container">
           
    
                <div class='box'>
                    
                     
                <form action="viewuserdetails.php" name="update" method="post" autocomplete="off" >
                    <h3>Applicant Details</h3>

                    
                   
                    <span>Applicant Name : </span>
                    <input type="text" value="<?php echo $user['name']; ?>" name="a_name" maxlength="30" readonly class="input"style="width:30%;">
                    
                    <span>Applicant Email : </span>
                    
                    <input type="text" value="<?php echo $user['email']; ?>" name="a_email" maxlength="40" readonly class="input"style="width:30%;">
                    
                    <span>Company Name : </span>
                    <input type="text" value="<?php echo $user2['company_name']; ?>" name="c_name" maxlength="30" readonly class="input" style="width:30%;">

                    <span>Applied post : </span>
                    <input type="text" value="<?php echo $user2['applied_post']; ?>"name="a_post" maxlength="40" readonly class="input"style="width:35%;">

                    <span>Applied Date : </span>
                    <input type="text" value="<?php echo $user2['applied_date']; ?>" name="a_date" maxlength="40" readonly class="input"style="width:30%;">
                    
                    <span>Applicant Status : *</span>
                    <select name="status" class="input" required style="width:30%;">
                    <option  selected disabled >Select status</option>
                        <option value="Accepted">Accepted</option>
                        <option value="Rejected">Rejected</option>
                        <option value="Interview call">Interview call</option>
                    </select>

                    <span>Interview Date(if 
                    application accepted) : </span>
                    <input type="date" name="i_date" class="input" style="width:20%;">
                    <?php  echo "<a href='viewimage.php?img=$user[resume]' class='btn' style='width:22%;'>View Resume</a> "?>
                    <br>
                    <input type="submit" value="Update status" name="update" class="btn">
                </form>
    
            </div>
            </div>
                   
            </section>
            </div>
    </body>
</html>
<?php
if($_POST['update']){
    $aem=$_POST['a_email'];
    $cm=$_POST['c_name'];
    $ap=$_POST['a_post'];



    $status=$_POST['status'];
    $idate=$_POST['i_date'];
    if($status=='accepted'){ 
        if(empty($idate)){ 
        
        echo "<script>alert('status select accepted you need to put Interview date');</script>";
   
    }
    else{
        $query=" UPDATE applied_jobs SET status='$status', interview_date='$idate' WHERE applicant_email='$aem' AND company_name='$cm' AND applied_post='$ap' ";
    }
    }
    else{
        $query=" UPDATE applied_jobs SET status='$status', interview_date='$idate' WHERE applicant_email='$aem' AND company_name='$cm' AND applied_post='$ap' ";
    }
    if(mysqli_query($conn,$query)===TRUE){
        echo "<script>alert('Status Updated succesfully');</script>";
    }
    else{
        echo "<script>alert('Status not updated');</script>";
    }

}




?>
