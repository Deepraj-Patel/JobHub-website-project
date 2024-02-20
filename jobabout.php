<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="jobstyle.css">
</head>
<body>
    <!-- hrader section starts -->
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

    <!-- about us section start -->
<div class="section-title">about us</div>

    <section class="about">
        <img src="image/jobbk.jpeg" alt="">
        <div class="box">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore neque nostrum expedita animi
                 molestiae mollitia nemo sequi. Perspiciatis, esse facilis. Iure omnis veniam in officia fugit 
                 quia quisquam eum, assumenda ullam, doloribus natus suscipit placeat necessitatibus exercitationem
                  totam facilis, aspernatur nemo tempora earum harum possimus porro impedit qui. Autem, voluptatibus?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus facilis corrupti error 
                repellat amet earum veritatis, atque rerum recusandae soluta nam molestiae praesentium quisquam
                 adipisci qui hic? Rem, eos harum!</p>
                 
                    <a href="contact.php" class="btn">contact us</a>
        </div>
    </section>



    <!-- about us section ends -->

    <!-- review ection starts -->
    







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