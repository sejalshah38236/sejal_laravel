﻿<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MANAGE EMPLOYEE</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Employee
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Name</th>                                           
                                            <th>Email ID</th>
                                            <th>Phone No</th>
											<th>Image</th>
                                            <th>Address</th>
                                            <th>Created Date</th>
                                            <th>Updated Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
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
                                                    <td><?php echo $data->emp_name?></td>                                                    
                                                    <td><?php echo $data->emp_email?></td>
                                                    <td><?php echo $data->e_phoneno?></td>
													<td><img src="emp_img/<?php echo $data->emp_img?>" width="100px" height="100px"></td>
                                                    <td><?php echo $data->emp_add?></td>
                                                    <td><?php echo $data->create_dt?></td> 
                                                   <td><?php echo $data->update_dt?></td>


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
                    <!--End Advanced Tables -->
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
