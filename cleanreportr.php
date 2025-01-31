<?php include 'agentheader.php';?>
<section id="container">
	<div class="wrap-container">
		
		
		<section id="container">
	<div class="wrap-container">
		
		
		<section class="content-box box-3 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<h2 class="header t-center">View Clean Report</h2>
					<div class="row">
						<div class="col-1-12">
                                                    <table width="100%" border="1">
                                        <tr style="background: #7F8181;color: #ffffff"><th>Slno</th><th>Area Pin</th><th>Date Time</th><th>Status</th></tr>
                  <?php
                                             include 'dbconfig.php';
                                             $sql="SELECT * FROM `report`";
                                             $slno=0;
   $result=$conn->query($sql);
   if($result->num_rows>0)
   {
        while($row=$result->fetch_assoc()){
            $slno++;
            $areapin=$row['areapin'];
           $id=$row['username'];
            $date=$row['date'];
            $time=$row['time'];
            $cleanstatus=$row['cleanstatus'];
            if($slno%2==0)
            {
                echo "<tr style=\"background: #F9F8A4;\">";
            }
            else{
                 echo "<tr>";
            }
            echo "<td>$slno</td><td>$areapin</td><td>$date ($time)</td><td>$cleanstatus</td></tr>";
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