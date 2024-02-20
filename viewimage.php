
<?php
require('connect.php');
session_start();
error_reporting(0);
$logo=$_SESSION['logo'];
$cmn=$_SESSION['cmname'];
$image=$_GET['img'];

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
                    <a href="<?php   echo $image;  ?>"  Download class="btn" style="width:20%;"> <i class="fa-solid fa-print"></i> Download</a>
                    <br><br>
                     <img src="<?php   echo $image;  ?>" alt="" width="100%" >
                
            </div>
            </div>
                   
            </section>
            </div>
    </body>
</html>



