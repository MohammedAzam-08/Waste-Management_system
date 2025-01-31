<?php include 'userheader.php';?>
<section id="container">
	<div class="wrap-container">
		
		
		<section class="content-box box-3 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
                                     <form name="form1" id="ff" method="post" action="usercomp" enctype="multipart/form-data">
							<label class="row">
                                                            <div class="col-1-2">
                                                                    <div class="wrap-col">
                                                                            Subject:
                                                                    </div>
                                                            </div>
                                                            <div class="col-1-1">
                                                                    <div class="wrap-col">
                                                                            <input type="text" name="sub" id="username" placeholder="Enter Subject" required="required" />
                                                                    </div>
                                                            </div>
                                                    </label>
                                                    
                                                        <label class="row">
                                                            <div class="col-1-2">
                                                                    <div class="wrap-col">
                                                                            Description:
                                                                    </div>
                                                            </div>
                                                            <div class="col-1-1">
                                                                    <div class="wrap-col">
                                                                        <textarea name="des" id="password" placeholder="Enter Description" required="required"></textarea>
                                                                    </div>
                                                            </div>
                                                    </label>
                                                        <label class="row">
                                                            <div class="col-1-2">
                                                                    <div class="wrap-col">
                                                                           Select Picture:
                                                                    </div>
                                                            </div>
                                                            <div class="col-1-1">
                                                                    <div class="wrap-col">
                                                                            <input type="file" name="pic" id="password" placeholder="Enter Photot" required="required" />
                                                                    </div>
                                                            </div>
                                                    </label>
                                                        
                                                        <label class="row">
                                                            <div class="col-1-2">
                                                                    <div class="wrap-col">
                                                                            Area Pin:
                                                                    </div>
                                                            </div>
                                                            <div class="col-1-1">
                                                                    <div class="wrap-col">
                                                                            <input type="text" name="pin" id="password" placeholder="Enter Your Area Pin" required="required" />
                                                                    </div>
                                                            </div>
                                                    </label>

													<center><input class="sendButton" type="submit" name="add" value="Register"></center>
												</form>
					<h2 class="header t-center">View Agent</h2>
					<div class="row">
						<div class="col-1-12">
                                                    <table width="100%" border="1">
                                                        <tr style="background: #7F8181;color: #ffffff"><th>Slno</th><th>Sub</th><th>Des</th><th>Area</th><th>Picture</th><th>Status</th></tr>
                  <?php
                                             include 'dbconfig.php';
                                             $sql="SELECT * FROM `compliant` WHERE userid='$username'";
                                             $slno=0;
   $result=$conn->query($sql);
   if($result->num_rows>0)
   {
        while($row=$result->fetch_assoc()){
            $slno++;
            $area=$row['area'];
           $id=$row['id'];
            $sub=$row['sub'];
            $pic=$row['pic'];
            $des=$row['des'];
            $status=$row['status'];
            if($slno%2==0)
            {
                echo "<tr style=\"background: #F9F8A4;\">";
            }
            else{
                 echo "<tr>";
            }
            echo "<td>$slno</td><td>$sub</td><td>$des</td><td>$area</td><td><img src='$pic' width='400px'></td><td>$status</td></tr>";
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
<?php include 'userfooter.php';?>