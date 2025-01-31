<?php include 'cleanerheader.php';?>
<section id="container">
	<div class="wrap-container">
		
		
		<section class="content-box box-3 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
                                    <div class="col-1-3">
                                     <form name="form1" id="ff" method="post" action="cleanreportdb">
							<label class="row">
                                                            <div class="col-1-2">
                                                                    <div class="wrap-col">
                                                                            Date:
                                                                    </div>
                                                            </div>
                                                            <div class="col-1-1">
                                                                    <div class="wrap-col">
                                                                            <input type="date" name="date" id="username" placeholder="Enter Date" required="required" />
                                                                    </div>
                                                            </div>
                                                    </label>
                                                    
                                                        <label class="row">
                                                            <div class="col-1-2">
                                                                    <div class="wrap-col">
                                                                            Time:
                                                                    </div>
                                                            </div>
                                                            <div class="col-1-1">
                                                                    <div class="wrap-col">
                                                                        <input type="time" name="time" id="password" placeholder="Enter Time" required="required"/>
                                                                    </div>
                                                            </div>
                                                    </label>
                                                        
                                                        
                                                        <label class="row">
                                                            <div class="col-1-2">
                                                                    <div class="wrap-col">
                                                                            Status of Clean:
                                                                    </div>
                                                            </div>
                                                            <div class="col-1-1">
                                                                    <div class="wrap-col">
                                                                            <input type="text" name="status" id="password" placeholder="Enter Clean Status" required="required" />
                                                                    </div>
                                                            </div>
                                                    </label>

													<center><input class="sendButton" type="submit" name="add" value="Register"></center>
												</form>
                                </div>
                                    <div class="col-1-3">&nbsp;</div>
						<div class="col-1-3">
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
	

<?php include 'cleanerfooter.php';?>