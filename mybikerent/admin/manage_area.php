<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MANAGE LOCATION</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Location
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Area ID</th>
											<th>Country Name</th>
											<th>City Name</th>
                                            <th>Area Name</th>
											<th>Created Date</th>
                                            <th>Updated Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>

                                    </thead>


                                    <tbody>
                                             
                                        <?php
                                        if(!empty($location_arr))
                                        {
                                            foreach($location_arr as $data)
                                            {
                                        ?>
                                                <tr>    
                                                    <td><?php echo $data->area_id?></td>
													<td><?php echo $data->c_name?></td>
                                                    <td><?php echo $data->city_name ?></td>
                                                    <td><?php echo $data->area_name?></td>
													<td><?php echo $data->created_date?></td>
                                                    <td><?php echo $data->updated_date?></td>
                                                    <td><a href="editarea?btnedit=<?php echo $data->area_id?>" class="btn btn-primary">Edit</a></td>
                                                    <td><a href="delete?delarea_idbtn=<?php echo $data->area_id?>" class="btn btn-danger">Delete</a></td>

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