<?php 
include 'connect.php'; 
session_start();
$cmname=$_SESSION['cmname'];
$logo=$_SESSION['logo'];
error_reporting(0);
    
     $query="select * from applied_jobs where company_name='$cmname'";
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
        
        .box input{
            width:100%;
        }
        .box form{
            width:8rem;
           
        }
        .box .btn{
            width:10rem;
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
                    <th>post</th>
                    <th>Status</th>
                    <th>Interview Date</th>
                    <th>Operation</th>
                   
                 </tr>";
                 
                 while($apps = mysqli_fetch_assoc($result)){
                 
                   echo " <tr>
                    <td>"   .$apps['applied_date'].  "</td>
                    <td colspan='2'>"   .$apps['applicant_name'].  "</td>
                    <td>"   .$apps['applicant_email']. "</td>
                    <td>"   .$apps['company_name']. "</td>
                    <td>"   .$apps['applied_post']. "</td>
                    <td>"   .$apps['status']. "</td>
                    <td>"   .$apps['interview_date']. "</td>
                    
                    <td>
                    
                  
                   <a href='viewuserdetails.php? uem=$apps[applicant_email]& pst=$apps[applied_post]& dt=$apps[applied_date]' class='btn' > 
                    <i class='fas fa-eye'></i>View Details </a>
                   
                    
                    </td>
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
