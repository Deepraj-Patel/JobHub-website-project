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
            <!-- jobs section starts -->
            <section class="profile-container">
      <header>complete profile</header>
      <form action="postvacancy.php" class="form" method="post" name="completeprofile" >
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
            <label>Posting Date</label>
            <input type="text" value=" <?php echo date('Y-m-d'); ?>  " name="date" readonly required />
          </div>
        </div>
        
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter company address" name="address"required />
          
          <div class="column">
          <div class="input-box">
            <label>Post Name</label>
            <input type="text" name="postname" required />
          </div>
          <div class="input-box">
            <label>Job Type</label>
            <input type="text"  name="jobtype"required />
          </div>
          <div class="input-box">
            <label>Salary</label>
            <input type="text"  name="salary"required />
          </div>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Schedule</label>
            <input type="text" name="schedule"  required />
          </div>
          <div class="input-box">
            <label>Benifits</label>
            <input type="text"  name="benifit"required />
          </div>
          <div class="input-box">
            <label>Requirement</label>
            <input type="text"  name="requirement"required />
          </div>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Qualification</label>
            <input type="text" name="qualification"  required />
          </div>
          <div class="input-box">
            <label>Skills</label>
            <input type="text"  name="skills"required />
          </div>
          <div class="input-box">
            <label>Vacancy</label>
            <input type="text"  name="vacancy"required />
          </div>
        </div>
        
        <div class="input-box">
          <label>Job Description</label>
          <input type="text" placeholder="Description" name="description" />
        </div>
        
          
         
       <input type="submit" value="Post Job" name="postjob" class="btn">
      </form>
    </section>
<?php
   
   if(isset($_POST['postjob'])){
    $name=$_POST['name'];
    $date=$_POST['date'];
    $address=$_POST['address'];
    $postname=$_POST['postname'];
    $jobtype=$_POST['jobtype'];
    
    $salary=$_POST['salary'];
    $schedule=$_POST['schedule'];
    $benifits=$_POST['benifit'];
    $requirement=$_POST['requirement'];
    $qualification=$_POST['qualification'];
    $skills=$_POST['skills'];
    $vacancy=$_POST['vacancy'];
    $description=$_POST['description'];
    
    
      
    
        if(!empty('$name')AND !empty('$date')AND !empty('$address')AND !empty('$postname')AND !empty('$jobtype')
        AND !empty('$salary')AND !empty('$schedule')AND !empty('$benifits')AND !empty('$requirement')
        AND !empty('$qualification')AND !empty('$skills')AND !empty('$vacancy')AND !empty('$description')){

            
        $sql="INSERT INTO temp_jobs values('$name','$date','$address','$postname','$jobtype','$salary','$schedule',
        '$benifits','$requirement','$qualification','$skills','$vacancy','$description')";
            if($conn->query($sql)===TRUE){
                
              echo '<script>alert("Successfully Posted");</script>';
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



    
