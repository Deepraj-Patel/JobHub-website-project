<?php 
include 'connect.php'; 
session_start();
$logo=$_SESSION['logo'];
$nm=$_SESSION['name'];

// error_reporting(0);
    $email=$_SESSION['uemail'];
    $query2="select * from completeprofile where email='$email'";
    $result2=mysqli_query($conn,$query2);
    $count2=mysqli_num_rows($result2);
     $row2 = mysqli_fetch_assoc($result2);
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
                    <img src="<?php echo $logo ?>" alt="">
                    <div class="nav-item">DashBoard</div>
                </a></li>
                
                
                <div>&nbsp&nbsp&nbsp&nbsp <?php echo $nm ;  ?>&nbsp&nbsp </div>
                
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
   <?php  
        if($count2>0){ 
            echo ' 
   <section class="profile-container">
      <header>Edit profile</header>
      <form action="edituserprofile.php" class="form" method="post" name="edituserprofile" enctype="multipart/form-data">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" value=" '.$row2["name"]. '" name="fname" required />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" value="'.$row2["email"]. '" name="email" readonly required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" value="'.$row2["mobile"]. '" name="mobile" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" value = "'  .$row2["DOB"].  '"name="DOB"required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            
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
          <input type="text" placeholder="Enter street address" value="'.$row2["address"].'" name="address1"required />
          
          
          
          <div class="input-box qualification">
            <label for="">Qualification</label>
          <div class="column">
            <input type="text" value="10th" placeholder="10th" readonly name="10th"/>
            <input type="text" placeholder="Subject" value="'.$row2["10thsubject"].'" name="10thsubject" />
            <input type="number" placeholder="Passing Year" value="'.$row2["10thyear"].'" name="10thyear"/>
            <input type="text" placeholder="University/Institute" value="'.$row2["10thun"].'" name="10thun"/>
            <input type="text" placeholder="Percangate/CGPA"value="'.$row2["10thper"].'" name="10thper" />
          </div>
          <div class="column">
          <input type="text" value="12th" placeholder="12th"  value="'.$row2["12th"].'"readonly name="12th"/>
            <input type="text" placeholder="Subject" value="'.$row2["12thsubject"].'" name="12thsubject" />
            <input type="number" placeholder="Passing Year" value="'.$row2["12thyear"].'" name="12thyear"/>
            <input type="text" placeholder="University/Institute" value="'.$row2["12thun"].'" name="12thun"/>
            <input type="text" placeholder="Percangate/CGPA" value="'.$row2["12thper"].'" name="12thper" />
          </div>
          <div class="column">
          <input type="text" value="ug" placeholder="ug" value="'.$row2["ug"].'" readonly name="ug"/>
            <input type="text" placeholder="Subject"value="'.$row2["ugsubject"].'" name="ugsubject" />
            <input type="number" placeholder="Passing Year"value="'.$row2["ugyear"].'" name="ugyear"/>
            <input type="text" placeholder="University/Institute" value="'.$row2["ugun"].'" name="ugun"/>
            <input type="text" placeholder="Percangate/CGPA"value="'.$row2["ugper"].'" name="ugper" />
          </div>
          <div class="column">
          <input type="text" value="pg" placeholder="pg" value="'.$row2["pg"].'"readonly name="pg"/>
            <input type="text" placeholder="Subject"value="'.$row2["pgsubject"].'" name="pgsubject" />
            <input type="number" placeholder="Passing Year" value="'.$row2["pgyear"].'"name="pgyear"/>
            <input type="text" placeholder="University/Institute" value="'.$row2["pgun"].'" name="pgun"/>
            <input type="text" placeholder="Percangate/CGPA" value="'.$row2["pgper"].'"name="pgper" />
          </div>
          <div class="column">
          <input type="text" value="other" placeholder="other"value="'.$row2["other"].'" readonly name="other"/>
            <input type="text" placeholder="Subject" value="'.$row2["othersubject"].'" name="othersubject" />
            <input type="number" placeholder="Passing Year" value="'.$row2["otheryear"].'" name="otheryear"/>
            <input type="text" placeholder="University/Institute" value="'.$row2["otherun"].'" name="otherun"/>
            <input type="text" placeholder="Percangate/CGPA"value="'.$row2["otherper"].'" name="otherper" />
          </div>
        </div>
        <div class="input-box">
          <label>Experience</label>
          <input type="text" placeholder="Experience" value="'.$row2["experience"].'" name="exp" />
        </div>
        <div class="column">
          <input type="text"  placeholder="hobbies"value="'.$row2["hobbies"].'" required name="hobbies"/>
          <input type="text"  placeholder="skills" value="'.$row2["skills"].'" required name="skills"/>
            
          </div>
          <div class="column">
          <div class="input-box">
            <label>Upload Image</label>
            <input type="file"  name="image" value="'.$row2["image"].'" accept=".jpg, .jpeg, .png" required />
          </div>
          <div class="input-box">
            <label>Upload resume</label>
            <input type="file"  name="resume"value="'.$row2["resume"].'" accept=".jpg, .jpeg, .png" required />
          </div>
        </div>
         
       <input type="submit" value="Update" name="update" class="btn">
      </form>
    </section>';
        }
        else{
            echo '<script> alert("Please complete profile first"); </script>';
        }
        ?>

        </body>
        </html>
        <?php
   
   if(isset($_POST['update'])){
    $fname=$_POST['fname'];
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
    
        if(!empty('$fname')AND !empty('$email')AND !empty('$mobile')AND !empty('$dob')AND !empty('$gender')AND !empty('$address1')
        AND !empty('$tenth')AND !empty('$tenthsubject')AND !empty('$tenthyear')AND !empty('$tenthun')AND !empty('$tenthper')){


            
        $sql="UPDATE  completeprofile SET name='$fname',mobile='$mobile',DOB='$dob',gender='$gender',address='$address1',10th='$tenth',10thsubject='$tenthsubject', 10thyear=
        '$tenthyear',10thun='$tenthun',10thper='$tenthper',12th='$twel',12thsubject='$twelsubject',12thyear='$twelyear',12thun='$twelun',12thper='$twelper',ug='$ug',ugsubject='$ugsubject',ugyear='$ugyear',ugun='$ugun',ugper='$ugper',
        pg='$pg',pgsubject='$pgsubject',pgyear='$pgyear',pgun='$pgun',pgper='$pgper',other='$other',othersubject='$othersubject',otheryear='$otheryear',otherun='$otherun',otherper='$otherper',experience='$exp',hobbies='$hobbies',skills='$skills', resume='$resumefolder',image='$imagefolder' where email='$email'";

        $sql2="UPDATE userdetails set name='$fname', mobile='$mobile' where email='$email'" ;
            if(($conn->query($sql)===TRUE)AND ($conn->query($sql2))){
                
              echo '<script>alert("Successfully updated");</script>';
            }
            else{
               echo '<script>alert("somthing went wrong");</script>';
            }
        }
      
        else{
            echo '<script>alert("Fill required details first");</script>';
        }
      }


    
    
?>
