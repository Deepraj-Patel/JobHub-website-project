<?php

require 'connect.php';
// error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    $type=$_POST['type'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $otp=$_POST['otp'];
    $pw=$_POST['pass'];
    $cpw=$_POST['c_pass'];
    if(isset($_POST['otp'])){
        $query="SELECT email from userdetails where email='$email'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        if($count>0){
            echo '<script>alert("Employee Email id Already registered");
            </script>';
        }
        $query="SELECT email from companydetails where email='$email'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        if($count>0){
            echo '<script>alert("Employer Email id Already registered");
            </script>';
        }
        if($pw!=$cpw){


            echo '<script>alert("password and confirm password should be same");
            </script>';
        }
        // else{
        //     if($type=='public'){ 
            
        // $sql="INSERT INTO userdetails values('$name','$email','$mobile','$pw')";
        //     }
        //     else{
                
        //             $sql="INSERT INTO companydetails values('$name','$email','$mobile','$pw')";
                
        //     }
        //     if($conn->query($sql)===TRUE){
                
        //       echo '<script>alert("Successfully Registered");</script>';
        //     }
        //     else{
        //        echo '<script>alert("Somthing went wrong please try again");</script>';
        //     }
        // }
else{
    

    $status=false;
    $to=$email;
    $from="27rampatel@gmail.com";
    $fromName="Job Hub portal";
    $subject="Otp Authentication";
    $message="Your otp is : ".$otp;
    


    require 'path/to/your/project/vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2; // Enable verbose debug output
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $from;
    $mail->Password   = 'Deepraj@2001';
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;   // TCP port to connect to

    //Recipients
    $mail->setFrom($from, 'job hum portal');
    $mail->addAddress($to, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = 'otp sent successfully';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    
}

    

}
    if($status==true){
        echo ' <form>
            Enter otp
            <input type="number" name="checkotp" placeholder="Enter otp">
            <input type="hidden" name="otp" value=" '.$otp.' ">
            <button type="submit">Verify</button>
        
        
        
        
        </form> ';
        
    }  
?>
