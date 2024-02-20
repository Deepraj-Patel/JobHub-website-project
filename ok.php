
<?php 
include 'connect.php';
$query=" SELECT * from userdetails where email='deeprajp94@gmail.com' ";
$result=mysqli_query($conn,$query);
$job = mysqli_num_rows($result);

echo $job;

?>

