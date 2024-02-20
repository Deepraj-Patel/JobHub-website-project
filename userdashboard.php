<?php 
include 'connect.php'; 
session_start();

error_reporting(0);
    $email=$_SESSION['uemail'];
    $query2="select * from completeprofile where email='$email'";
    $result2=mysqli_query($conn,$query2);
    $count2=mysqli_num_rows($result2);
     $row2 = mysqli_fetch_assoc($result2);
     if($count2==0){
        echo '<script>alert("Please complete profile first");
            </script>';
     }

     $_SESSION['logo']=$row2['image'];
    
     $query="select * from userdetails where email='$email'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
         $row = mysqli_fetch_assoc($result);

         $_SESSION['name']=$row['name'];

         $l=30;
         if($count2>0){
            $l=100;
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
                    <img src="<?php echo $row2['image']; ?>" alt="">
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
                    <span class="nav-item">applied jobs</span>
                </a></li>
                
                <li><a href="edituserprofile.php">
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
                <div class="percentage">Profile Complete :<span> <?php echo $l ?>% </span></div>
                <a href="edituserprofile.php"> <i class="fa fa-pen fa-xs edit"></i></a>
                
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
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
                            <td> <?php echo $row2['address'] ;  ?></td>
                        </tr>
                        <tr>
                            <td>Hobies</td>
                            <td>:</td>
                            <td> <?php echo $row2['hobbies'] ;  ?></td>
                        </tr>
                    </tbody>
                    
                </table>
                <div class="flex-btn">
                    <a href="changepassword.php" class="btn">change password</a>
                   
                    <a href="edituserprofile.php" class="btn">update profile</a>
                    
                </div>
            </div>
            
                
                    
                
                
                
                
                
            </div>

        </div>
        
    </section>


    
</body>
</html>