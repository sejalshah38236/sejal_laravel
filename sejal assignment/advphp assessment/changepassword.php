<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12" align="center">
                <h3 class="header-line">Change Password</h3>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                       
						<form action="" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
							 <div class="form-group">
	
								<label>Enter Old Password</label>
								<input class="form-control" type="password"/>
								
							</div>
						
							<div class="form-group">
								<label>Enter New Password</label>
								<input class="form-control" type="password" name="pass"  />
								<p class="help-block">Help Number here.</p>
							</div>
				
                           
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="number" name="submit" value="UPDATE"/>		
								</div>
                            </div>
							</form>
                        </div>
                   </div>

        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 