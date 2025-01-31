<?php include 'adminheader.php';?>
<section id="container">
	<div class="wrap-container">
		
		
		<section class="content-box box-3 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<h2 class="header t-center">View Agent</h2>
					<div class="row">
						<div class="col-1-12">
                                                    <table width="100%" border="1">
                                        <tr style="background: #7F8181;color: #ffffff"><th>Slno</th><th>Name</th><th>Address</th><th></th></tr>
                  <?php
                                             include 'dbconfig.php';
                                             $sql="SELECT * FROM `municipal`";
                                             $slno=0;
   $result=$conn->query($sql);
   if($result->num_rows>0)
   {
        while($row=$result->fetch_assoc()){
            $slno++;
            $username=$row['username'];
           $id=$row['username'];
            $address=$row['address'];
            if($slno%2==0)
            {
                echo "<tr style=\"background: #F9F8A4;\">";
            }
            else{
                 echo "<tr>";
            }
            echo "<td>$slno</td><td>$username</td><td>$address</td><td><img src='images/deleteicon.jpg' width='25px' onclick='Delagent(\"$id\")'></td></tr>";
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
<?php include 'adminfooter.php';?>