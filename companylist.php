
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="dstyle.css">
    <style>
        table, th,td{
            border: 1px solid gray;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <nav>
        
            <ul>
                <li><a href="#" class="logo">
                    <img src="" alt="Admin">
                    <div class="nav-item">DashBoard</div>
                </a></li>
                
                
                <div>&nbsp&nbsp&nbsp&nbsp Admin &nbsp&nbsp </div>
                
                <li><a href="jobhome.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="admindashboard.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                
                <li><a href="companylist.php">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Company List</span>
                </a></li>
                <li><a href="userlist.php">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">User List</span>
                </a></li>
                <li><a href="contactlist.php">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Messages</span>
                </a></li>
               
                
                <li><a href="logout.php" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a></li>
                
            </ul>
        </nav>
        <!-- jobs section starts -->
        <section class="jobs-container">
        
        <div class="box-container">
        <?php  
        include 'connect.php'; 
        error_reporting(0);
        $query1="select * from updatecompanydetails ";
                $result1=mysqli_query($conn,$query1);
                $companycount=mysqli_num_rows($result1);



        if($companycount>0){
            echo " 

            <div class='box'>
                <table>
                <tr>
                <td colspan='8'> Company List </td>
                </tr>

                <tr>
                    <th> Email</th>
                    <th colspan='2'>Company Name</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Location</th>
                    <th>Establish</th>
                    <th>Working</th>
                 </tr>";
                 
                 while($apps = mysqli_fetch_assoc($result1)){
                 
                   echo " <tr>
                    <td>"   .$apps['email'].  "</td>
                    <td colspan='2'>"   .$apps['name'].  "</td>
                    <td>"   .$apps['mobile']. "</td>
                    <td>"   .$apps['address']. "</td>
                    <td>"   .$apps['location']. "</td>
                    <td>"   .$apps['establish']. "</td>
                    <td>"   .$apps['working']. "</td>
                 </tr>
                 "; 
                 }


                
               "  </table>

        </div>
        </div>";
                }
                else{
                    echo "<script> alert('No Company Register'); </script>";
                }
        ?>
        </section>
        </div>
</body>

</body>
</html>


















    
            
            
                
