<?php include 'agentheader.php';?>
<section id="container">
	<div class="wrap-container">
		<section class="content-box box-3 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<h2 class="header t-center">Add Cleaner</h2>
					<div class="row">
						<div class="col-1-12">
                                                    <form name="form1" id="ff" method="post" action="addcleanerdb">
                                        <label class="row">
                                                <div class="col-1-2">
                                                        <div class="wrap-col">
                                                                Username:
                                                        </div>
                                                </div>
                                                <div class="col-1-1">
                                                        <div class="wrap-col">
                                                                <input type="text" name="username" id="username" placeholder="Enter Username" required="required" />
                                                        </div>
                                                </div>
                                        </label>
                                        <label class="row">
                                                <div class="col-1-2">
                                                        <div class="wrap-col">
                                                                Password:
                                                        </div>
                                                </div>
                                                <div class="col-1-1">
                                                        <div class="wrap-col">
                                                                <input type="password" name="password" id="password" placeholder="Enter Password" required="required" />
                                                        </div>
                                                </div>
                                        </label>
                                        <label class="row">
                                                <div class="col-1-2">
                                                        <div class="wrap-col">
                                                                Password:
                                                        </div>
                                                </div>
                                                <div class="col-1-1">
                                                        <div class="wrap-col">
                                                                <input type="password" name="repass" id="password" placeholder="Confirm Password" required="required" />
                                                        </div>
                                                </div>
                                        </label>
                                                       <label class="row">
                                                <div class="col-1-2">
                                                        <div class="wrap-col">
                                                                Phone Number:
                                                        </div>
                                                </div>
                                                <div class="col-1-1">
                                                        <div class="wrap-col">
                                                            <input type="number" name="phno" id="password" placeholder="Enter Phone Number" required="required"/>
                                                        </div>
                                                </div>
                                        </label> 
                                                        <label class="row">
                                                <div class="col-1-2">
                                                        <div class="wrap-col">
                                                                Area PIN:
                                                        </div>
                                                </div>
                                                <div class="col-1-1">
                                                        <div class="wrap-col">
                                                            <input type="number" name="pin" id="password" placeholder="Enter Area PIN" required="required">
                                                        </div>
                                                </div>
                                        </label> 
                                        <center><input class="sendButton" type="submit" name="add" value="ADD"></center>
                                </form>
						</div>
				
					</div>
				</div>
			</div>
		</section>
		
		<section class="content-box box-3 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<h2 class="header t-center">View Cleaners</h2>
					<div class="row">
						<div class="col-1-12">
                                                    <table width="100%" border="1">
                                                        <tr style="background: #7F8181;color: #ffffff"><th>Slno</th><th>Username</th><th>Phone Number</th><th>Area</th></tr>
                  <?php
                                             include 'dbconfig.php';
                                             $sql="SELECT * FROM `cleaner`";
                                             $slno=0;
   $result=$conn->query($sql);
   if($result->num_rows>0)
   {
        while($row=$result->fetch_assoc()){
            $slno++;
            $cusername=$row['username'];
           $phno=$row['phno'];
            $pin=$row['pin'];;
            if($slno%2==0)
            {
                echo "<tr style=\"background: #F9F8A4;\">";
            }
            else{
                 echo "<tr>";
            }
            echo "<td>$slno</td><td>$cusername</td><td>$phno</td><td>$pin</td></tr>";
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