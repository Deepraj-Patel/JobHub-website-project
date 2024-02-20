
<?php 
    $otp=rand(00000,99999);



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <form action="otp.php" name="register" method="post" autocomplete="off" >
                <h3>create new account</h3>
                <div class="type">
                
                    <select name="type" >
                        <option selected disabled >Select account type</option>
                        <option value="public">public</option>
                        <option value="employer">employer</option>
                        
                    </select>
                </div>
                <input type="text" required name="name" maxlength="20" placeholder="enter your name" class="input">
                <input type="email" required name="email" maxlength="50" placeholder="enter your email" class="input">
                <input type="hidden" name="otp" value="<?php echo $otp; ?>">
                <input type="number" required name="mobile" maxlength="10" placeholder="enter your number" class="input">
                <input type="password" required name="pass" maxlength="20" placeholder="enter your password" class="input">
                <input type="password" required name="c_pass" maxlength="20" placeholder="confirm your password" class="input">
                <p>already have an account? <a href="login.php">login now</a> </p>
                <input type="submit" value="register now" name="register" class="btn">
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

</body>
</html>
