<?php 
include 'connect.php'; 
session_start();

error_reporting(0);
    $email=$_SESSION['cemail'];
    
    $query2="select * from updatecompanydetails where email='$email'";
    $result2=mysqli_query($conn,$query2);
    $count2=mysqli_num_rows($result2);
     $row2 = mysqli_fetch_assoc($result2);
     $_SESSION['logo']=$row2['logo'];
    
     $query="select * from companydetails where email='$email'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
         $row = mysqli_fetch_assoc($result);
         $_SESSION['cmname']=$row['name'];

         $l=30;
         if($count>0){
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
                    <img src="<?php echo $row2['logo']; ?>" alt="">
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
       

            <div class='box'>
                
                 
            <form action="cchangepassword.php" name="change" method="post" autocomplete="off" >
                <h3>Change Password</h3>
                
                
                <input type="password" required name="pass" maxlength="20" placeholder="enter your password" class="input">
                <input type="password" required name="c_pass" maxlength="20" placeholder="confirm your password" class="input">
                <br>
                <input type="submit" value="Change Now" name="change" class="btn">
            </form>






                

        </div>
        </div>
               
        </section>
        </div>

    
</body>
</html>
<?php   
require('connect.php');
session_start();
$email=$_SESSION['cemail'];
if(isset($_POST['change'])){

    $pw=$_POST['pass'];
    $cpw=$_POST['c_pass'];

    if(!empty('$pw')AND !empty('$cpw')){
        if($pw==$cpw){
            $sql="UPDATE companydetails SET password='$pw' WHERE email='$email'";
            if(mysqli_query($conn,$sql)){
                echo "<script>alert('password changed');</script>";
            }
            else{
                echo "<script>alert('something went wrong');</script>";
            }

        }
        else{
            echo "<script>alert('password and confirm password will be same');</script>";
        }




    }
    else{ 
        echo "<script>alert('please fill password first');</script>";
    }
}






?>