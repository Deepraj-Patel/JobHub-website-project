

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
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


    <!-- contact us section starts -->
    <div class="section-title">contact us</div>
    <section class="contact">
        <div class="box-container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <a href="tel:8462809273">8462809273</a>
                <a href="tel:1114567333">111-456-7333</a>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <a href="mailto:deeprajp94@gmail.com">deeprajp94@gmail.com</a>
                <a href="mailto:aniketinfo07@gmail.com">aniketinfo07@gmail.com</a>
                
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <a href="#">flat no. 1, a-1 building, jogeshwari, mumbai, india - 452010</a>
            </div>
            </div>
           <form action="contact.php" method="post">
            <h3>drop your message</h3>
            <div class="flex">
                <p>name <span>*</span></p>
                <input type="text" name="name" required maxlength="20" placeholder="enter your name" class="input">
            </div>
            <div class="flex">
                <p>email <span>*</span></p>
                <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="input">
            </div>
            <div class="flex">
                <p>message <span>*</span></p>
                <input type="number" name="number" required min="0" max="9999999999" maxlength="10" placeholder="enter your number" class="input">
            </div>
            <div class="flex">
                <p>role <span>*</span></p>
                <select name="role" required class="input">
                    <option value="employee">job seeker (employee)</option>
                    <option value="employer">job provider (employer)</option>
                </select>
                
            </div>
        
        <p>message <span>*</span></p>
        <textarea name="message" class="input" required maxlength="1000" placeholder="enter your message" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" name="send" class="btn">
    </form>
</div>
    </section>


    <!-- contact us section ends -->




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

<script src="js.js">

</script>
</body>
</html>
<?php 
require 'connect.php'; 
error_reporting(0);

    if(isset($_POST['send'])){ 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $role=$_POST['role'];
    $message=$_POST['message'];
    
    if(!empty('$name')AND !empty('$email')AND !empty('$number')AND !empty('role')AND !empty('$message')){ 

        $query = "INSERT INTO contact values('$name','$email','$number','$role','$message')";
        if($conn->query($query)===TRUE){
                
            echo '<script>alert("Successfully Send");</script>';
          }
          else{
             echo '<script>alert("Somthing went wrong please try again");</script>';
          }

    }

}






?>
