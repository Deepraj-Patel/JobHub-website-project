<?php 
include 'connect.php'; 
session_start();
error_reporting(0);
$em=$_SESSION['uemail'];


$logo=$_SESSION['logo'];
error_reporting(0);
    
     $query="select * from applied_jobs where applicant_email='$em'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        

         
         ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="dstyle.css">


    <style>
        table, th,td{
            border: 1px solid gray;
            text-align:center;
        }
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
                
                
                <div>&nbsp&nbsp&nbsp&nbsp <?php echo $row['name'] ;  ?>&nbsp&nbsp </div>
                
                <li><a href="jobhome.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="userdashboard.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="usercompleteprofile.php">
                <i class="fas fa-wallet"></i>
                    <span class="nav-item">Complete profile</span>
                </a></li>
                <li><a href="userappliedjobs.php">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Applied jobs</span>
                </a></li>
               
                <li><a href="edituserprofile.php">
                <i class="fas fa-tasks"></i>
                    <span class="nav-item">Edit Profile</span>
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
        <?php  
        if($count>0){
            echo " 

            <div class='box'>
                <table>

                <tr>
                    <th> Date</th>
                    <th colspan='2'>Applicant Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th colspan='2'>post</th>
                    <th>Status</th>
                    <th>Interview Date</th>
                    <th>Action</th>
                 </tr>";
                 
                 while($apps = mysqli_fetch_assoc($result)){
                 
                   echo " <tr>
                    <td>"   .$apps['applied_date'].  "</td>
                    <td colspan='2'>"   .$apps['applicant_name'].  "</td>
                    <td>"   .$apps['applicant_email']. "</td>
                    <td>"   .$apps['company_name']. "</td>
                    <td>"   .$apps['applied_post']. "</td>
                    <td colspan='2'>"   .$apps['status']. "</td>
                    <td >"   .$apps['interview_date']. "</td>
                    
                    <td><a href='delete.php?uem=$apps[applicant_email]&cnm=$apps[company_name]&pst=$apps[applied_post]' class='btn' style='width:100%;'>Remove</a></td>
                 </tr>
                 "; 
                 }


                
               "  </table>

        </div>
        </div>";
                }
                else{
                    echo "<script> alert('No Applications available'); </script>";
                }
        ?>
        </section>
        </div>

        
</body>
</html>