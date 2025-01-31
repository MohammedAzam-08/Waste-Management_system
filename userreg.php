<?php
include 'dbconfig.php';
if(isset($_POST['add']))
{
    $email=$_POST['email'];
    $name=$_POST['name'];
     $phno=$_POST['phno'];
     $address=$_POST['address'];
     $pin=$_POST['pin'];
     $password=$_POST['password'];
     $repassword=$_POST['repassword'];
    
    if($password==$repassword)
    {
         $sql = "INSERT INTO `user` (`email`, `password`, `name`, `phno`, `address`, `pin`) VALUES ('$email', '$password', '$name', '$phno', '$address', '$pin');";
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"User Added Successfully\");</script>";
                 echo '<META http-equiv="refresh" content="0;user">';
                
            }
             else{
         echo "<script type=\"text/javascript\">alert(\"Failed to Add User\");</script>";
         echo '<META http-equiv="refresh" content="0;reguser">';
    }
    }
    else{
        echo "<script type=\"text/javascript\">alert(\"Password Mismatch\");</script>";
         echo '<META http-equiv="refresh" content="0;reguser">';
    }
            
     
    
   
    
}
?>

