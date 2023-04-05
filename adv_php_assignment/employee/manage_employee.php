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
                                            <h3 class="m-b-10">Manage Employee</h3>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
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
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                
                                            </div>
                      
                                        <!-- Hover table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3>Employees List  </h3>
                                           
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                            <th>Employee ID</th>
                                                             <th>First Name</th> 
                                                             <th>Last Name</th>                                           
                                                            <th>Email ID</th>
                                                            <th>Mobile No</th>
											                <th>Edit</th>
                                                           <th>Delete</th>
                                                            </tr>
                                                            </tr>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                        <?php
                                        if(!empty($employee_arr))
                                        {
                                            foreach($employee_arr as $data)
                                            {
                                        ?>
                                                <tr>    
                                                    <td><?php echo $data->emp_id?></td>
                                                    <td><?php echo $data->emp_fname?></td>
                                                    <td><?php echo $data->emp_lname?></td>                                                    
                                                    <td><?php echo $data->emp_email?></td>
                                                    <td><?php echo $data->emp_mobile?></td>
                                                    <td><a href="editemployee?btnedit=<?php echo $data->emp_id?>" class="btn btn-primary">Edit</a></td>
                                                    <td><a href="delete?delemp_idbtn=<?php echo $data->emp_id?>" class="btn btn-danger">Delete</a></td>

                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>   
                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
</body>

</html>
