<?php 
session_start();
error_reporting(0);
if(!empty($_SESSION['uemail'])){

    header("Location:userdashboard.php");
}

if(!empty($_SESSION['cemail'])){

    header("Location:companydashboard.php");
}
if(!empty($_SESSION['admin'])){

    header("Location:admindashboard.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <a href="login.php" class="btn" style="margin-top:0;">Login</a>
        </section>

    </header>
    <!-- header section ends -->


    <!-- account section starts -->
    <div class="account-form-container">
        <section class="account-form">
            <form action="login.php" name="login" method="get">
                <h3>welcome back</h3>
                <div class="type">
                
                    <select name="type" >
                        <option selected disabled >Select account type</option>
                        <option value="public">public</option>
                        <option value="employer">employer</option>
                        <option value="admin">admin</option>
                    </select>
                </div>
                <input type="text" required name="email" maxlength="50" placeholder="enter your email" class="input">
                <input type="password" required name="pass" maxlength="20" placeholder="enter your password" class="input">
                <p>don't have an account? <a href="register.php">register now</a> </p>
                <input type="submit" value="login now" name="login" class="btn">
            </form>
        </section>
    </div>
    <!-- account section ends -->


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
<?php
    session_start();
    require 'connect.php';
    error_reporting(0);

    $type=$_GET['type'];
    $email=$_GET['email'];
    $pw=$_GET['pass'];
    

    if(isset($_GET['login'])){ 
         
   

        if(!empty('$email') and !empty('$pw')){
            if($type=='public'){

                

                $query="select * from userdetails where email='$email' AND password='$pw'";
        
                $result=mysqli_query($conn,$query);
        
                $count=mysqli_num_rows($result);
                if($count>0){
                    $_SESSION['uemail']=$email;

            header("Location:userdashboard.php");
                }
        else{
            echo '<script>alert("username and password invalid");
            </script>';
        }

    }
    else{
        if($type=='employer'){

            

            $query="select * from companydetails where email='$email' AND password='$pw'";
        
                $result=mysqli_query($conn,$query);
        
                $count=mysqli_num_rows($result);
                if($count>0){
                    $_SESSION['cemail']=$email;

            header("Location:companydashboard.php");
        }
        else{
            echo '<script>alert("username and password invalid");
            </script>';
        }

    
    }
     else{ 
     if($type=='admin'){

        

        $query="select * from adminlogin where username='$email' AND password='$pw' ";
    
            $result=mysqli_query($conn,$query);
    
            $count=mysqli_num_rows($result);
            if($count>0){
                $_SESSION['admin']='admin';

        header("Location:admindashboard.php");
    }
    else{
        echo '<script>alert("username and password invalid");
        </script>';
    }


}
}  
} 
    }
}
?>

</body>
</html>