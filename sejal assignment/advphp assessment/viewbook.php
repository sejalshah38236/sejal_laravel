<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12" align="center">
                <h3 class="header-line">VIEW BOOK LIST</h3>
                
                            </div>

        </div>
            <div class="row" >
                <div class="col-md-12" >
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>CATEGORY</th>
                                            <th>ID</th>
											<th>BOOK Name</th>
											<th>AUTHOR</th>
											<th>QTY</th>
											<th>PRICE</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                        if(!empty($book_arr))
                                        {
                                            foreach($book_arr as $data)
                                            {
                                        ?>
                                            <td><?php echo $data->category?></td>
											<td><?php echo $data->bid?></td>
											<td><?php echo $data->bname?></td>
											<td><?php echo $data->name?></td>
											<td><?php echo $data->quan?></td>
											<td><?php echo $data->price?></td>
                    
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