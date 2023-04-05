<!DOCTYPE html>
<html lang="en">

<?php
    include_once('header.php');
?>     


                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h3 class="m-b-10">Add Employee</h3>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                           
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Employee Form </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->
                                    <div class="page-body">
                                    <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                    
                        </div>
						<form method="post" enctype="multipart/form-data">
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>First Name</label>
								<input class="form-control" type="text" name="emp_fname"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Last Name</label>
								<input class="form-control" type="text" name="emp_lname"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Email Id</label>
								<input class="form-control" type="email" name="emp_email"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Mobile Number</label>
								<input class="form-control" type="text" name="emp_mobile"/>
								<p class="help-block">Help text here.</p>
							</div>
                           
							<div class="form-group">
                            <label>Address</label>
                             <div class="col-sm-12">
                             <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea" name="emp_add" ></textarea>
                            </div>

                            <div class="form-group row">
                            <div class="col-md-6">
                             <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
					        <div class="form-check">
					         <input type="radio" class="form-check-input" id="radio1" name="emp_gen" value="Male"  >Male
					         <label class="form-check-label" for="radio1"></label> 
					        </div>
					        <div class="form-check">
					        <input type="radio" class="form-check-input" id="radio1" name="emp_gen" value="Female">Female
					         <label class="form-check-label" for="radio1"></label>
					        </div>
                             </div>

						
                             </div>
                            <div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="emp_pass"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Confirm Password</label>
								<input class="form-control" type="password" name="emp_pass"/>
								<p class="help-block">Help text here.</p>
							</div>
                          
							
         
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="text" name="submit" value="ADD"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
    </div>
</div>
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
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
</body>

</html>
