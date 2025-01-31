<?php
include 'dbconfig.php';
$username=$_POST['username'];
$phno=$_POST['phno'];
$pin=$_POST['pin'];
$password=$_POST['password'];
$repass=$_POST['repass'];
if($password==$repass)
{
$sql = "INSERT INTO `cleaner` (`username`, `password`, `phno`,`pin`) VALUES ('$username', '$password', '$phno','$pin');";
    echo $sql;
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Cleaner Added Successfully\");</script>";
                 echo '<META http-equiv="refresh" content="0;cleanermanager">';
                
            }
             else{
         echo "<script type=\"text/javascript\">alert(\"Failed to Add Cleaner\");</script>";
         echo '<META http-equiv="refresh" content="0;cleanermanager">';
    }
}
else
{
     echo "<script type=\"text/javascript\">alert(\"Password Mismatch\");</script>";
         echo '<META http-equiv="refresh" content="0;cleanermanager">';
}
?>