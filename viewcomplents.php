<?php include 'agentheader.php';?>
<section id="container">
	<div class="wrap-container">
		
		
		<section class="content-box box-3 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<h2 class="header t-center">View Complaint</h2>
					<div class="row">
						<div class="col-1-12">
                                                    <table width="100%" border="1">
                                                        <tr style="background: #7F8181;color: #ffffff"><th>Slno</th><th>Subject</th><th>Description</th><th>Area</th><th>Picture</th><th>Status</th><th width="50px"></th></tr>
                  <?php
                                             include 'dbconfig.php';
                                             $sql="SELECT * FROM `compliant` ORDER BY `compliant`.`status` DESC";
                                             $slno=0;
   $result=$conn->query($sql);
   if($result->num_rows>0)
   {
        while($row=$result->fetch_assoc()){
            $slno++;
            $sub=$row['sub'];
           $id=$row['id'];
            $area=$row['area'];
            $des=$row['des'];
            $pic=$row['pic'];
            $status=$row['status'];
            if($slno%2==0)
            {
                echo "<tr style=\"background: #F9F8A4;\">";
            }
            else{
                 echo "<tr>";
            }
            echo "<td>$slno</td><td>$sub</td><td>$des</td><td>$area</td><td><img src='$pic' width='200px'></td><td>$status</td><td>";
            if($status=="Received")
            {
                echo "<img src='images/accept.png' width='25px' onclick='Allotagent(\"$id\")'>";
            }
            echo "</td></tr>";
        }
   }
                                             ?>
              </table>
						</div>
				
					</div>
				</div>
			</div>
		</section>
	
	</div>
</section>
<?php include 'agentfooter.php';?>