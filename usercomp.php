<?php
session_start();
if(isset( $_SESSION['username'])&&isset($_SESSION['password']))
{
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    
    
}
 else {
   echo '<meta http-equiv = "refresh" content = "0;logoutadmin"/>';
     
 }
?>
<?php
if(isset($_POST['add']))
{
    $id=0;
   $sub=$_POST['sub'];
     $des=$_POST['des'];
    $pin=$_POST['pin'];
     $sql="SELECT * FROM `compliant`";
   include'dbconfig.php';
   $result=$conn->query($sql);
   if($result->num_rows>0)
   {
        while($row=$result->fetch_assoc()){
            $id=$row['id'];
        }
   }
    $id++;
     $pic = $_FILES['pic']['name'];
        $pic_loc = $_FILES['pic']['tmp_name'];
        $info = pathinfo($_FILES['pic']['name']);
        $ext = $info['extension'];
        $newname = "$id.".$ext;
        $folder="comppic/";
        $target=$folder.$newname;
        if(move_uploaded_file($pic_loc,$folder.$newname))
        {
         $sql = "INSERT INTO `compliant` (`id`, `sub`, `area`, `des`, `pic`, `userid`, `replay`, `status`) VALUES (NULL, '$sub', '$pin', '$des', '$target', '$username', '', 'Received');";
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Query Added Successfully\");</script>";
                 echo '<META http-equiv="refresh" content="0;usercomplaints">';
                
            }
             else{
         echo "<script type=\"text/javascript\">alert(\"Failed to Add Query\");</script>";
         echo '<META http-equiv="refresh" content="0;usercomplaints">';
    }
        }
          else{
         echo "<script type=\"text/javascript\">alert(\"Failed to Add Queries\");</script>";
         echo '<META http-equiv="refresh" content="0;usercomplaints">';
    }
            
     
    
   
    
}
else
{
    echo '<META http-equiv="refresh" content="0;usercomplaints">';
}
?>