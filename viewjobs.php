<?php
require 'connect.php';
error_reporting(0);
session_start();
$cname=$_GET['cname'];
$cpost=$_GET['cpost'];

        $query="select * from temp_jobs where companyname='$cname' AND postname='$cpost'";
        
                $result=mysqli_query($conn,$query);
                $job = mysqli_fetch_assoc($result);
                $_SESSION['pst']=$job['postname'];             

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Job</title>
    <link rel="stylesheet" href="jobstyle.css">
</head>
<body>
    <!-- header section starts -->
    <header class="header">
        
        <section class="flex">
           <div id="menu-btn" class="fa-solid fa-bars"></div>
            <a href="jobhome.html" class="logo">
                <i class="fas fa-briefcase"></i>
                JobPage.
            </a>
            <nav class="navbar">
                <a href="jobhome.php">Home</a>
                <a href="jobs.php">all Jobs</a>
                <a href="login.php">account</a>
                <a href="contact.php">Contact us</a>
                <a href="jobabout.php">About us</a>
                
            </nav>
            <?php 
            session_start();
            if(!empty($_SESSION['uemail'])){ 
                echo ' 
            <a href="login.php" class="btn" style="margin-top:0;">'.$_SESSION['name'].'</a>';
            }
            else{
                if(!empty($_SESSION['cemail'])){ 
                    echo ' 
                <a href="login.php" class="btn" style="margin-top:0;">'.$_SESSION['cmname'].'</a>';
                }
                else{
                    if(!empty($_SESSION['admin'])){ 
                        echo ' 
                    <a href="login.php" class="btn" style="margin-top:0;">Admin</a>';
                    }
                    else{
                        echo ' 
                    <a href="login.php" class="btn" style="margin-top:0;">Login</a>';
                    }
                }
            }
           
            ?>
        </section>

    </header>

    <!-- header section ends -->



    <!-- view job section starts -->


    <section class="job-details">
        <h1 class="heading"><?php echo $cname;  ?></h1>
        <div class="details">
           <div class="job-info">
            <h3><?php echo $job['postname']; ?></h3>
            <?php echo "<a href='viewcompany.php?cname=$job[companyname]'>" .$job['companyname'].  "</a>"; ?>
            <p><i class="fas fa-marker-alt"></i><?php  echo $job['address']; ?></p>
           </div>
           <div class="basic-details">
            <h3>salary</h3>
            <p><?php  echo $job['salary']; ?> per month</p>
            <h3>benifits</h3>
            <p><?php  echo $job['benifits']; ?></p>
            <h3>job type</h3>
            <p><?php  echo $job['jobtype']; ?></p>
            <h3>schedule</h3>
            <p><?php  echo $job['schedule']; ?></p>
           </div>
           <ul>
            <h3>requirments</h3>
            <li>education : <span><?php  echo $job['requirement']; ?></span></li>
            
           </ul>
           <ul>
            <h3>qualifications</h3>
            <li><?php  echo $job['qualification']; ?></li>
            
           </ul>
           <ul>
            <h3>skills</h3>
            <li><?php  echo $job['skills']; ?></li>
            
           </ul>
           <div class="description">
            <h3>job description</h3>
            <p><?php  echo $job['description']; ?></p>
                <ul>
                    <li>Hiring <?php  echo $job['vacancy']; ?> candidates for this role</li>
                    
                </ul>
           </div>
           <form action="viewjobs.php" method="post" class="flex-btn">
            <!-- <input type="submit" value="apply now" name="apply" class="btn" > -->
            <?php echo "<a href='applied.php?cname=$job[companyname] & cpost=$job[postname]' class='btn'>Apply</a>"; ?>
            <button type="submit"class="save"><i class="far fa-heart"></i><span>save jobe</span></button>
           </form>
          
        </div>
    </section>
    <!-- view job section ends -->
  <!-- footer section starts   -->

  <footer class="footer">
    <section class="grid">
        <div class="box">
            <h3>quick links</h3>
            <a href="jobhome.html"><i class="i.fas.fa-angle-right"></i>home</a>
            <a href="jobabout.html"><i class="i.fas.fa-angle-right"></i>about</a>
            <a href="jobjobs.html"><i class="i.fas.fa-angle-right"></i>All jobs</a>
            <a href="jobcontact.html"><i class="i.fas.fa-angle-right"></i>filter search</a>
            <a href="#"><i class="i.fas.fa-angle-right"></i>home</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            
           
            <a href="#"><i class="i.fas.fa-angle-right"></i>account</a>
            <a href="joblogin.html"><i class="i.fas.fa-angle-right"></i>login</a>
            <a href="jobregister.html"><i class="i.fas.fa-angle-right"></i>register</a>
            <a href="#"><i class="i.fas.fa-angle-right"></i>post job</a>
            <a href="#"><i class="i.fas.fa-angle-right"></i>dashboard</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twiter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            <a href="#"><i class="fab fa-youtube"></i>youtube</a>
        </div>
    </section>
    <div class="credit">&copy; copyright @ 2023 by <span>mr. web designer</span>
    all rights reserve
</div>
  </footer>
  <!-- footer section ends -->

<script src="js.js">

</script>

</body>
</html>
