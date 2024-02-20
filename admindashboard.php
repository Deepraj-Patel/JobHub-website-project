<?php 
include 'connect.php'; 
session_start();

error_reporting(0);
    $_SESSION['admin']='Admin';
    $query="select * from userdetails";
    $result=mysqli_query($conn,$query);
    $usercount=mysqli_num_rows($result);
     $user = mysqli_fetch_assoc($result);
    
     $query1="select * from companydetails ";
        $result1=mysqli_query($conn,$query1);
        $companycount=mysqli_num_rows($result1);
         $company = mysqli_fetch_assoc($result1);


         $query2="select * from temp_jobs ";
         $result2=mysqli_query($conn,$query2);
         $jobscount=mysqli_num_rows($result2);
          $jobs = mysqli_fetch_assoc($result2);

        
         ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="dstyle.css">
</head>
<body>
    <div class="container">
        
        <nav>
        
            <ul>
                <li><a href="#" class="logo">
                    <img src="" alt="Admin">
                    <div class="nav-item">DashBoard</div>
                </a></li>
                
                
                <div>&nbsp&nbsp&nbsp&nbsp Admin &nbsp&nbsp </div>
                
                <li><a href="jobhome.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="admindashboard.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                
                <li><a href="companylist.php">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Company List</span>
                </a></li>
                <li><a href="userlist.php">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">User List</span>
                </a></li>
                <li><a href="contactlist.php">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Messages</span>
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
            <div class="box">
           
            <div class="card-body">
                <section> 
               <br><br><br><br>
                
                <p>Number Of companies : <?php echo $companycount; ?></p> 
                <br><br><br><br>
                
                <p>Number Of users : <?php echo $usercount; ?></p> 
                <br><br><br><br>
                
                <p>Number Of jobs : <?php echo $jobscount; ?></p> 
                </section>
                
            </div>
            
                
                    
                
                
                
                
                
            </div>

        </div>
        
    </section>


    
</body>
</html>