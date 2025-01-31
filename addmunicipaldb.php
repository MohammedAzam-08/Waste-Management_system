<?php
include 'dbconfig.php';
$username=$_POST['username'];
$address=$_POST['address'];
$password=$_POST['password'];
$repass=$_POST['repass'];
if($password==$repass)
{
$sql = "INSERT INTO `municipal` (`username`, `password`, `address`) VALUES ('$username', '$password', '$address');";
    echo $sql;
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Agent Added Successfully\");</script>";
                 echo '<META http-equiv="refresh" content="0;addmunicipal">';
                
            }
             else{
         echo "<script type=\"text/javascript\">alert(\"Failed to Add Agent\");</script>";
         echo '<META http-equiv="refresh" content="0;addmunicipal">';
    }
}
else
{
     echo "<script type=\"text/javascript\">alert(\"Password Mismatch\");</script>";
         echo '<META http-equiv="refresh" content="0;addmunicipal">';
}
?>