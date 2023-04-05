<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">EDIT EMPLOYEE</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Edit Employee
                        </div>
						<form method="post" enctype="multipart/form-data">
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>First Name</label>
								<input class="form-control" type="text" value="<?php echo $fetch->emp_fname?>" name="emp_fname"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Employee Last Name</label>
								<input class="form-control" type="text" value="<?php echo $fetch->emp_lname?>" name="emp_lname"/>
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
								<label>Employee Email Id</label>
								<input class="form-control" type="email" value="<?php echo $fetch->emp_email?>" name="emp_email"/>
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
								<label>Employee Mobile No</label>
								<input class="form-control" type="number" value="<?php echo $fetch->emp_mobile?>" name="emp_mobile"/>
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
								<label>Gender</label>
								
								<div class="form-check">
									
								<label class="form-check-label" for="radio1">Male</label>
								<input class="radio-button" type="radio" value="<?php echo $fetch->emp_gen?>" name="emp_gen" value="Male"/>
								<label class="form-check-label" for="radio1">Female</label>
								<input class="radio-button" type="radio" value="<?php echo $fetch->emp_gen?>" name="emp_gen" value="female"/>
					  
								</div>
								
							</div>	
         
                            <div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" value="<?php echo $fetch->pass?>" name="emp_pass"/>
								<p class="help-block">Help text here.</p>
							</div>

                          
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="text" name="submit" value="UPDATE"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
    </div>
    </div>
	
 <?php
 include_once('footer.php');
 ?> 
     <!-- Hover table card end -->
                                        
	<script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Custom js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>