<?php 
include 'connect.php'; 
session_start();

error_reporting(0);
    $email=$_SESSION['cemail'];
    $query2="select * from updatecompanydetails where email='$email'";
        $result2=mysqli_query($conn,$query2);
        $count2=mysqli_num_rows($result2);
        $row2 = mysqli_fetch_assoc($result2);
        
     $query1="select * from companydetails where email='$email'";
        $result=mysqli_query($conn,$query1);
        $count=mysqli_num_rows($result);
         $row = mysqli_fetch_assoc($result);
         

         ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update company details</title>
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

        <?php if($count2>0){
            echo '<script>alert("already profile completed");</script>';
            
        } ?>
            <!-- jobs section starts -->
            <section class="profile-container">
      <header>complete profile</header>
      <form action="updatecompanydetails.php" class="form" method="post" name="completeprofile" enctype="multipart/form-data">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" value="<?php echo $row['name']; ?>" name="name" readonly required />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" value="<?php echo $row['email']; ?>" name="email" readonly required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" value="<?php echo $row['mobile'];  ?>" name="mobile"readonly required />
          </div>
          <div class="input-box">
            <label>Establishment Date</label>
            <input type="date"  name="establish"required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Location</h3>
          <div class="gender-option">
            
              <input type="radio" id="check-male" value="india" name="location" checked  />
              <label for="check-male">India</label>
           
            
              <input type="radio" id="check-female" value="foreign" name="gender" />
              <label for="check-female">Foriegn</label>
            
            
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter company address" name="address"required />
          
          
        
        <div class="input-box">
          <label>Working Employees</label>
          <input type="text" placeholder="Working Employees" name="emp" />
        </div>
        
          <div class="column">
          <div class="input-box">
            <label>Upload company Image</label>
            <input type="file"  name="image" accept=".jpg, .jpeg, .png" required />
          </div>
        </div>
         
       <input type="submit" value="Save" name="save" class="btn">
      </form>
    </section>
<?php
   
   if(isset($_POST['save'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $establish=$_POST['establish'];
    $location=$_POST['location'];
    $address=$_POST['address'];
    $emp=$_POST['emp'];
    
    
      
      $imagename = $_FILES["image"]["name"]; 
      $tmpimagename = $_FILES["image"]["tmp_name"];
      $folder = "companyimage/".$imagename;
      move_uploaded_file($tmpimagename, $folder);

    
        if(!empty('$name')AND !empty('$email')AND !empty('$mobile')AND !empty('$establish')AND !empty('$location')AND !empty('$address')){

            
        $sql="INSERT INTO updatecompanydetails values('$email','$name','$mobile','$address','$location','$establish','$emp','$folder')";
            if($conn->query($sql)===TRUE){
                
              echo '<script>alert("Successfully Registered");</script>';
            }
            else{
               echo '<script>alert("already Profile completed");</script>';
            }
        }
      
        else{
            echo '<script>alert("Fill required details first");</script>';
        }
      }


    
    
?>
  </body>
</html>



    
