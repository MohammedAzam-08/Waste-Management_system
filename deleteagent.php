<?php
include 'dbconfig.php';
$id=$_GET['id'];
$sql = "DELETE FROM `municipal` where `username`='$id'";
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Agent Deleted Successfully\");</script>";
                 echo '<META http-equiv="refresh" content="0;viewagent">';
            }
            else{
                echo "<script type=\"text/javascript\">alert(\"Error Deleting\");</script>";
                 echo '<META http-equiv="refresh" content="0;viewagent">';
            }

