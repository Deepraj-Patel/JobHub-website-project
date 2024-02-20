<?php 
include 'connect.php'; 
session_start();
$logo=$_SESSION['logo'];

    $email=$_SESSION['uemail'];
    $query2="select * from completeprofile where email='$email'";
        $result2=mysqli_query($conn,$query2);
        $count2=mysqli_num_rows($result2);
        
     $query1="select * from userdetails where email='$email'";
        $result=mysqli_query($conn,$query1);
        $count=mysqli_num_rows($result);
         $row = mysqli_fetch_assoc($result);

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
                    <img src="<?php echo $logo ;  ?>" alt="">
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
        <?php if($count2>0){
            echo '<script>alert("already profile completed");</script>';
            
        } ?>
            <!-- jobs section starts -->
            <section class="profile-container">
      <header>complete profile</header>
      <form action="usercompleteprofile.php" class="form" method="post" name="completeprofile" enctype="multipart/form-data">
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
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="DOB"required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" value="male" name="gender" checked  />
              
              <label for="check-male">male</label>
            
              <input type="radio" id="check-female" value="female" name="gender" />
              <label for="check-female">Female</label>
           
           
              <input type="radio" id="check-other" value="other"name="gender" />
              <label for="check-other">prefer not to say</label>
           
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" name="address1"required />
          
          
          
          <div class="input-box qualification">
            <label for="">Qualification</label>
          <div class="column">
            <input type="text" value="10th" placeholder="10th" readonly name="10th"/>
            <input type="text" placeholder="Subject" name="10thsubject" />
            <input type="number" placeholder="Passing Year" name="10thyear"/>
            <input type="text" placeholder="University/Institute"  name="10thun"/>
            <input type="text" placeholder="Percangate/CGPA" name="10thper" />
          </div>
          <div class="column">
          <input type="text" value="12th" placeholder="12th" readonly name="12th"/>
            <input type="text" placeholder="Subject" name="12thsubject" />
            <input type="number" placeholder="Passing Year" name="12thyear"/>
            <input type="text" placeholder="University/Institute"  name="12thun"/>
            <input type="text" placeholder="Percangate/CGPA" name="12thper" />
          </div>
          <div class="column">
          <input type="text" value="ug" placeholder="ug" readonly name="ug"/>
            <input type="text" placeholder="Subject" name="ugsubject" />
            <input type="number" placeholder="Passing Year" name="ugyear"/>
            <input type="text" placeholder="University/Institute"  name="ugun"/>
            <input type="text" placeholder="Percangate/CGPA" name="ugper" />
          </div>
          <div class="column">
          <input type="text" value="pg" placeholder="pg" readonly name="pg"/>
            <input type="text" placeholder="Subject" name="pgsubject" />
            <input type="number" placeholder="Passing Year" name="pgyear"/>
            <input type="text" placeholder="University/Institute"  name="pgun"/>
            <input type="text" placeholder="Percangate/CGPA" name="pgper" />
          </div>
          <div class="column">
          <input type="text" value="other" placeholder="other" readonly name="other"/>
            <input type="text" placeholder="Subject" name="othersubject" />
            <input type="number" placeholder="Passing Year" name="otheryear"/>
            <input type="text" placeholder="University/Institute"  name="otherun"/>
            <input type="text" placeholder="Percangate/CGPA" name="otherper" />
          </div>
        </div>
        <div class="input-box">
          <label>Experience</label>
          <input type="text" placeholder="Experience" name="exp" />
        </div>
        <div class="column">
          <input type="text"  placeholder="hobbies" required name="hobbies"/>
          <input type="text"  placeholder="skills" required name="skills"/>
            
          </div>
          <div class="column">
          <div class="input-box">
            <label>Upload Image</label>
            <input type="file"  name="image" accept=".jpg, .jpeg, .png" required />
          </div>
          <div class="input-box">
            <label>Upload resume</label>
            <input type="file"  name="resume" accept=".jpg, .jpeg, .png" required />
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
    $dob=$_POST['DOB'];
    $gender=$_POST['gender'];
    $address1=$_POST['address1'];
   
    $tenth=$_POST['10th'];
    $tenthsubject=$_POST['10thsubject'];
    $tenthyear=$_POST['10thyear'];
    $tenthun=$_POST['10thun'];
    $tenthper=$_POST['10thper'];
    $twel=$_POST['12th'];
    $twelsubject=$_POST['12thsubject'];
    $twelyear=$_POST['12thyear'];
    $twelun=$_POST['12thun'];
    $twelper=$_POST['12thper'];
    $ug=$_POST['ug'];
    $ugsubject=$_POST['ugsubject'];
    $ugyear=$_POST['ugyear'];
    $ugun=$_POST['ugun'];
    $ugper=$_POST['ugper'];
    $pg=$_POST['pg'];
    $pgsubject=$_POST['pgsubject'];
    $pgyear=$_POST['pgyear'];
    $pgun=$_POST['pgun'];
    $pgper=$_POST['pgper'];
    $other=$_POST['other'];
    $othersubject=$_POST['othersubject'];
    $otheryear=$_POST['otheryear'];
    $otherun=$_POST['otherun'];
    $otherper=$_POST['otherper'];
    $exp=$_POST['exp'];
    $hobbies=$_POST['hobbies'];
    $skills=$_POST['skills'];
   
    
      
      $imagename = $_FILES["image"]["name"]; 
      $tmpimagename = $_FILES["image"]["tmp_name"];
      $imagefolder = "image/".$imagename;
      move_uploaded_file($tmpimagename, $imagefolder);

      $resumename = $_FILES["resume"]["name"]; 
      $tmpresumename = $_FILES["resume"]["tmp_name"];
      $resumefolder = "image/".$resumename;
      move_uploaded_file($tmpresumename, $resumefolder);
    
        if(!empty('$name')AND !empty('$email')AND !empty('$mobile')AND !empty('$dob')AND !empty('$gender')AND !empty('$address1')
        AND !empty('$tenth')AND !empty('$tenthsubject')AND !empty('$tenthyear')AND !empty('$tenthun')AND !empty('$tenthper')){

            
        $sql="INSERT INTO completeprofile values('$name','$email','$mobile','$dob','$gender','$address1','$tenth','$tenthsubject','
        $tenthyear','$tenthun','$tenthper','$twel','$twelsubject','$twelyear','$twelun','$twelper','$ug','$ugsubject','$ugyear','$ugun','$ugper',
        '$pg','$pgsubject','$pgyear','$pgun','$pgper','$other','$othersubject','$otheryear','$otherun','$otherper','$exp','$hobbies','$skills','$resumefolder','$imagefolder')";
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



    
