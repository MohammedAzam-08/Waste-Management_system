<?php
include 'dbconfig.php';
$id=$_GET['id'];
$sql = "UPDATE `compliant` SET status='Alloted' where `id`='$id'";
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Cleaner Alloted Successfully\");</script>";
                 echo '<META http-equiv="refresh" content="0;viewcomplents">';
            }
            else{
                echo "<script type=\"text/javascript\">alert(\"Error Alloting\");</script>";
                 echo '<META http-equiv="refresh" content="0;viewcomplents">';
            }

