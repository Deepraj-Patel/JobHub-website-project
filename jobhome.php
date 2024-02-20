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
    <title>Home</title>
    <link rel="stylesheet" href="jobstyle.css">
</head>
<body>
    <!-- heder section starts -->
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
    <!-- header section end -->

    <!-- home section starts -->
      <div class="home-container">
        <section class="home">
            <form action="jobhome.php" method="get" id="search">
                <h3>find your next job</h3>
                <p>job title <span>*</span></p>
                <input type="text" name="title" placeholder="keyword, category or company" required 
                maxlength="20" class="input">
                <p>job location</p>
                <input type="text" name="location" placeholder="city, state or country" required 
                maxlength="50" class="input">
                <input type="submit" value="search job" name="search" class="btn">
            </form>
        </section>
      </div>




      
        
        
        

    






















    <!-- home section end -->
    <!-- category sectin starts -->
    <section class="category">
        <h1 class="heading">job categories</h1>
        <div class="box-container">
            <a href="#" class="box">
            <i class="fas fa-code"></i>
            <div>
                <h3>development</h3>
                <span>2200 jobs</span>
            </div>
            </a>
            <a href="#" class="box">
            <i class="fas fa-pen"></i>
            <div>
                <h3>designer</h3>
                <span>500 jobs</span>
            </div>
            </a>
            <a href="#" class="box">
            <i class="fas fa-chalkboard-user"></i>
            <div>
                <h3>teacher</h3>
                <span>1500 jobs</span>
            </div>
            </a>
            <a href="#" class="box">
            <i class="fas fa-bullhorn"></i>
            <div>
                <h3>marketing</h3>
                <span>1200 jobs</span>
            </div>
            </a>
            <a href="#" class="box">
            <i class="fas fa-headset"></i>
            <div>
                <h3>service</h3>
                <span>3100 jobs</span>
            </div>
            </a>
            <a href="#" class="box">
            <i class="fas fa-wrench"></i>
            <div>
                <h3>engineer</h3>
                <span>400 jobs</span>
            </div>
            </a>
            <a href="#" class="box">
            <i class="fas fa-hand-holding-dollar"></i>
            <div>
                <h3>finance</h3>
                <span>1000 jobs</span>
            </div>
            </a>
            <a href="#" class="box">
            <i class="fas fa-person-digging"></i>
            <div>
                <h3>labour</h3>
                <span>4000 jobs</span>
            </div>
            </a>
            

        </div>
    </section>
    <!-- category section ends -->

    <?php
        if(isset($_GET['search'])){ 
            echo " 
            <section class='jobs-container'>
            <h1 class='heading'>Available Jobs</h1>
    
           
            <div class='box-container'>";
        $title=$_GET['title'];
        $location=$_GET['location'];
       

         $query2="select * from temp_jobs where address LIKE '$location%' AND companyname LIKE '$title%' OR postname LIKE '$title%' ";
         $result2=mysqli_query($conn,$query2);
         $count2=mysqli_num_rows($result2);
         if($count2>0){ 
        
       
        while($row2=mysqli_fetch_assoc($result2)){ 
            
           echo " 
            <div class='box'>
                <div class='company'>
                    
                    <div>
                        <h3>" .$row2["companyname"]."</h3>
                        
                    </div>
                </div>
                <h3 class='job-title'>" .$row2["postname"]."</h3>
                <p class='location'><i class='fas fa-map-marker-alt'></i>
                <span>" .$row2["address"]."</span></p>
                <div class='tags'>
                    <p><i class='fas fa-indian-rupee-sign'></i><span>" .$row2["salary"]."</span></p>
                    <p><i class='fas fa-briefcase'></i><span>" .$row2["jobtype"]."</span></p>
                    <p><i class='fas fa-clock'></i><span>" .$row2["schedule"]."</span></p>
                </div>
                
                <div class='flex-btn'>
                    <a href = 'viewjobs.php? cname=$row2[companyname]& cpost=$row2[postname]' class='btn'>view details</a>
                    <button  name='save'><i class='far fa-heart'></i></button>
                </div>
                </div>

               
    
 ";
 
            }
           
        }
        else{
            echo "<script> alert('Not available required jos'); </script>";
        }
        
    }
    

        ?>
  </section>;


    <!-- jobs section starts -->
    
    <!-- // while($row=mysqli_fetch_assoc($result)){ -->
    <section class="jobs-container">
        <h1 class="heading" id="latest">latest jobs</h1>

       
        <div class="box-container">
        <?php
        
       $i=0;
        while($row=mysqli_fetch_assoc($result)){ 
            if($i<6){ 
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
 $i++;
            }
    }

        ?>
        
        

    </section>
    <div style="text-align: center; margin-top: 2rem;">
        <a href="jobs.php" class="btn">view all</a>
</div>

    <!-- jobs section ends -->





    







  <!-- footer section starts   -->

  <footer class="footer">
    <section class="grid">
        <div class="box">
            <h3>quick links</h3>
            <a href="jobhome.php"><i class="fa-solid fa-angle-right"></i>home</a>
            <a href="jobabout.html"><i class="fa-solid fa-angle-right"></i>about</a>
            <a href="jobs.php"><i class="fa-solid fa-angle-right"></i>All jobs</a>
            <a href="#search"><i class="fa-solid fa-angle-right"></i>filter search</a>
            <a href="#latest"><i class="fa-solid fa-angle-right"></i>Latest Jobs</a>
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

<script type="text/javascript" src="js.js">

</script>
</body>
</html>