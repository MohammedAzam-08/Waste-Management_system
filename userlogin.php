<?php
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
   $sql="select * from `user` where email='$username' and password='$password'";
   include'dbconfig.php';
   $result=$conn->query($sql);
   session_start();
   if($result->num_rows>0)
   {
       $_SESSION['username']=$username;
       $_SESSION['password']=$password;
       echo '<meta http-equiv = "refresh" content = "0;usercleanreport" />';
   }
    else
             {
             echo '<script>alert("invalid username or password")</script>';
              echo '<meta http-equiv = "refresh" content = "0;logoutuser" />';
                 }
   
    
}
?>