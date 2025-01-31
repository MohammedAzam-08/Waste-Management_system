<?php include 'adminheader.php';?>
<section id="container">
	<div class="wrap-container">
		
		
		<section class="content-box box-3 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<h2 class="header t-center">Add Agent</h2>
					<div class="row">
						<div class="col-1-12">
                                                    <form name="form1" id="ff" method="post" action="addmunicipaldb">
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
                                                                Address:
                                                        </div>
                                                </div>
                                                <div class="col-1-1">
                                                        <div class="wrap-col">
                                                            <textarea name="address" id="password" placeholder="Enter Address" required="required" ></textarea>
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
	
	</div>
</section>
<?php include 'adminfooter.php';?>