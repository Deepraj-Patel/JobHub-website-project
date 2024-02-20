
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
        $query1="select * from completeprofile ";
                $result1=mysqli_query($conn,$query1);
                $usercount=mysqli_num_rows($result1);



        if($usercount>0){
            echo " 

            <div class='box'>
                <table>
                <tr>
                <td colspan='7'> User List </td>
                </tr>

                <tr>
                    <th colspan='2'> Email</th>
                    <th colspan='2'>Applicant Name</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Gender</th>
                    
                 </tr>";
                 
                 while($apps = mysqli_fetch_assoc($result1)){
                 
                   echo " <tr>
                    <td colspan='2'>"   .$apps['email'].  "</td>
                    <td colspan='2'>"   .$apps['name'].  "</td>
                    <td>"   .$apps['mobile']. "</td>
                    <td>"   .$apps['address']. "</td>
                    <td>"   .$apps['gender']. "</td>
                    
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




























