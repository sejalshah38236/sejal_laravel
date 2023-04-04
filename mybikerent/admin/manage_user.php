<?php
include_once('header.php');
?>

    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MANAGE USER</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
                                        <tr>
											<th>Profile</th>
                                            <th>User ID</th>
                                            <th>Name</th>
											<th>Email</th>
											<th>Gender</th>
                                            <th>Mobile</th>
                                            <th>Adhaar Number</th>
                                            <th>Driving Number</th>
                                            <th>Pincode</th>
                                             <th>Status</th>
                                             <th>Delete</th>
                                        </tr>

                                    </thead>


                                    <tbody>
                                             
                                        <?php
                                        if(!empty($user_arr))
                                        {
                                            foreach($user_arr as $data)
                                            {
                                        ?>
                                                <tr>    
													<td><img src="../website/images/upload/customer/<?php echo $data->file?>" width="50px" height="50px"></td>
                                                    <td><?php echo $data->cust_id?></td>
                                                    <td><?php echo $data->cust_name ?></td>
                                                    <td><?php echo $data->email?></td>
                                                    <td><?php echo $data->gender?></td>
                                                    <td><?php echo $data->phone_no?></td>
                                                    <td><?php echo $data->adhaar_no?></td>
                                                    <td><?php echo $data->driving_no?></td>
                                                    <td><?php echo $data->pincode?></td>
                                                    <td><a href="status?statusuidbtn=<?php echo $data->cust_id?>" class="btn btn-primary"><?php echo $data->status?></a></td>
                                                    <td><a href="delete?deluidbtn=<?php echo $data->cust_id?>" class="btn btn-danger">Delete</a></td>

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
 <?php
 include_once('footer.php');
 ?>    