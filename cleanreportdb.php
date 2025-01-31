<?php
session_start();
if(isset( $_SESSION['username'])&&isset($_SESSION['password']))
{
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
     $sql="select * from `cleaner` where username='$username'";
   include'dbconfig.php';
   $result=$conn->query($sql);
  
   if($result->num_rows>0)
   {
        while($row=$result->fetch_assoc()){
            $pin=$row['pin'];
        }
   }
    
}
 else {
   echo '<meta http-equiv = "refresh" content = "0;logoutcleaner"/>';
     
 }
$date=$_POST['date'];
$time=$_POST['time'];
$status=$_POST['status'];

$sql = "INSERT INTO `report` (`id`, `areapin`, `date`, `time`, `cleanstatus`) VALUES (NULL, '$pin', '$date', '$time', '$status');";
    echo $sql;
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Clean Status Added Successfully\");</script>";
                 echo '<META http-equiv="refresh" content="0;cleanreport">';
                
            }
             else{
         echo "<script type=\"text/javascript\">alert(\"Failed to Add Status\");</script>";
         echo '<META http-equiv="refresh" content="0;cleanreport">';
    }

?>