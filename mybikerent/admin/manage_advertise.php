<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MANAGE Advertisement</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Advertise id</th>
											<th>custmore Name</th>
											<th>Area Name</th>
                                            <th>Vehicle Title</th>
                                            <th>Drive Type</th>
                                            <th>Vehicle No</th>
                                            <th>RC Book No</th>
                                            <th>Vehicle Pickup Address</th>
                                            <th>Fuel Type</th>
                                            <th>Rent Amount</th>
                                            <th>Images</th>
                                            <th>Created Date</th>
                                            <th>Updated Date</th>
                                           <!-- <th>Customer Id</th>
                                            <th>City Id</th>
                                            <th>Area Id</th>
                                            <th>Category id</th>-->
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            if(!empty($advertise_arr))
                                            {
                                                foreach ($advertise_arr as $data) 
                                                {
                                        ?>

                                            <tr>
                                                <td><?php echo $data->adv_id ?></td>
												<td><?php echo $data->cust_name ?></td>
												<td><?php echo $data->area_name ?></td>
                                                <td><?php echo $data->veh_title ?></td>
                                                <td><?php echo $data->drive_type ?></td>
                                                <td><?php echo $data->veh_no ?></td>
                                                <td><?php echo $data->rc_book ?></td>
                                                <td><?php echo $data->veh_pickup_add ?></td>
                                                <td><?php echo $data->fuel_type ?></td>
                                                <td><?php echo $data->rent ?></td>
                                                <td><img src="../website/images/upload/advertisement/<?php echo $data->file?>" width="50px" height="50px"></td>
                                                <td><?php echo $data->created_date ?></td>
                                                <td><?php echo $data->updated_date ?></td>

                                                <td><a href="delete?deladv_idbtn=<?php echo $data->adv_id?>" class="btn btn-danger">Delete</a></td>

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