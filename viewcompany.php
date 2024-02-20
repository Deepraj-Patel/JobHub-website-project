<?php
require 'connect.php';
error_reporting(0);

$cname=$_GET['cname'];


        $query="select * from updatecompanydetails where name='$cname'";
        
                $result=mysqli_query($conn,$query);
                $company = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Company</title>
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
                <a href="jobabout.html">About us</a>
                <a href="jobs.php">all Jobs</a>
                <a href="contact.php">Contact us</a>
                <a href="login.php">account</a>

            </nav>
            <a href="#" class="btn" style="margin-top:0;">post job</a>
        </section>

    </header>

    <!-- header section ends -->


    <!-- company details section starts -->

    <section class="view-company">
        <h1 class="heading">company details</h1>
        <div class="details">
            <div class="info">
                <img src="<?php echo $company['logo']; ?>" alt="">
                <h3><?php echo $company['name'];   ?></h3>
                <p><i class="fas fa-map-marker-alt"></i><?php echo $company['address'];   ?></p>
            </div>
            <div class="description">
                <h3>about company</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo doloremque, 
                    perferendis voluptate, deleniti laudantium impedit veritatis consequuntur fuga labore fugiat. 
                    Quas, veniam in aperiam adipisci illo quae nesciunt itaque.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus sit ipsam aut dignissimos 
                        neque porro. Dolores excepturi maxime architecto.</p>
            </div>
            <ul>
                <li>3 jobs posted</li>
                <li>established at <?php echo $company['establish'];   ?></li>
                <li><?php echo $company['working'];   ?> working employee</li>
            </ul>

        </div>
    </section>

    <!-- company details section ends -->


    <section class="jobs-container">
        <h1 class="heading">latest jobs</h1>

       
        <div class="box-container">
 <?php
 $query="select * from temp_jobs where companyname='$cname'";
        
 $result=mysqli_query($conn,$query);
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
<!-- jobs section ends -->






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