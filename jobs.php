<?php 
include 'connect.php'; 
session_start();

error_reporting(0);
    
     $query="select * from temp_jobs";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
         

         
         ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Jobs</title>
    <link rel="stylesheet" href="jobstyle.css">
</head>
<body>
    <!-- header section starts -->
    <header class="header">
        
        <section class="flex">
           <div id="menu-btn" class="fa-solid fa-bars"></div>
            <a href="jobhome.php" class="logo">
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


    <section class="jobs-container">
        <h1 class="heading">All Jobs</h1>

       
        <div class="box-container">
        <?php
        while($row=mysqli_fetch_assoc($result)){ 
            echo " 
            <div class='box'>
                <div class='company'>
                    
                    <div>
                        <h3>" .$row["companyname"]."</h3>
                        
                    </div>
                </div>
                <h3 class='job-title'>" .$row["postname"]."</h3>
                <p class='location'><i class='fas fa-map-marker-alt'></i>
                <span>" .$row["address"]."</span></p>
                <div class='tags'>
                    <p><i class='fas fa-indian-rupee-sign'></i><span>" .$row["salary"]."</span></p>
                    <p><i class='fas fa-briefcase'></i><span>" .$row["jobtype"]."</span></p>
                    <p><i class='fas fa-clock'></i><span>" .$row["schedule"]."</span></p>
                </div>
                
                <div class='flex-btn'>
                    <a href = 'viewjobs.php? cname=$row[companyname]& cpost=$row[postname]' class='btn'>view details</a>
                    <button  name='save'><i class='far fa-heart'></i></button>
                </div>
                </div>

               
    
 ";
    }
        ?>
        
        

    </section>

    















    






  <!-- footer section starts   -->

  <footer class="footer">
    <section class="grid">
        <div class="box">
            <h3>quick links</h3>
            <a href="jobhome.php"><i class="fa-solid fa-angle-right"></i>home</a>
            <a href="jobabout.html"><i class="fa-solid fa-angle-right"></i>about</a>
            <a href="jobs.php"><i class="fa-solid fa-angle-right"></i>All jobs</a>
            <a href="jobhome.php#search"><i class="fa-solid fa-angle-right"></i>filter search</a>
            <a href="jobhome.php#latest"><i class="fa-solid fa-angle-right"></i>Latest Jobs</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            
           
            <a href="login.php"><i class="fa-solid fa-angle-right"></i>account</a>
            <a href="login.php"><i class="fa-solid fa-angle-right"></i>login</a>
            <a href="register.php"><i class="fa-solid fa-angle-right"></i>register</a>
            <a href="#"><i class="fa-solid fa-angle-right"></i>post job</a>
            <a href="jobhome.php"><i class="fa-solid fa-angle-right"></i>dashboard</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i>facebook</a>
            <a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i>twitter</a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i>instagram</a>
            <a href="https://www.linkdin.com"><i class="fab fa-linkedin"></i>linkedin</a>
            <a href="https://www.youtube.com"><i class="fab fa-youtube"></i>youtube</a>
        </div>
    </section>
    <div class="credit">&copy; copyright @ 2023 by <span>mr. web designer </span>
    all rights reserve
</div>
  </footer>
  <!-- footer section ends -->

<script src="js.js"></script>
<script>
    let dropdown_items = document.querySelectorAll('.job-filter form .dropdown-container .dropdown .lists .items');

    dropdown_items.forEach(items =>{
        items.onclick = () =>{
            items_parent = items.parentElement.parentElement;
            let output = items_parent.querySelector('.output');
            output.value = items.innerText;
        }
    });
</script>
</body>
</html>