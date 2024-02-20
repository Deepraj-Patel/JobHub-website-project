<?php 
include 'connect.php'; 
session_start();
error_reporting(0);
    $email=$_SESSION['email'];
    
     $query="select * from userdetails where email='$email'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
         $row = mysqli_fetch_assoc($result);

         $l=100;
         if($l==100){
            $l=120;
         }
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
                    <img src="image/web.png" alt="">
                    <div class="nav-item">DashBoard</div>
                </a></li>
                
                
                <div>&nbsp&nbsp&nbsp&nbsp <?php echo $row['name'] ;  ?>&nbsp&nbsp </div>
                
                <li><a href="#">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="userdashboard.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-wallet"></i>
                    <span class="nav-item">message</span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">applications</span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-tasks"></i>
                    <span class="nav-item">approval status</span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-edit"></i>
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
            <div class="box">
            <h1 class="heading">personal details</h1>
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                
                <table>
                    <tbody>
                        <tr>
                            <td>Company Name</td>
                            <td>:</td>
                            <td>
                                <?php echo $row['name'] ;  ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td> <?php echo $row['email'] ;  ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td> <?php echo $row['address'] ;  ?></td>
                        </tr>
                        <tr>
                            <td>Establishd in </td>
                            <td>:</td>
                            <td> <?php echo $row['hobbies'] ;  ?></td>
                        </tr>
                    </tbody>
                    
                </table>
                
            <ul>
                <div class="flex-btn">
                    <a href="viewjobs.html" class="btn">edit details</a>
                    
                </div>
            </div>
            
                
                    
                
                
                
                
                
            </div>

        </div>
        
    </section>


    
</body>
</html>