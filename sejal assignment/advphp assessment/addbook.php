<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12" align="center">
                <h3 class="header-line">SELECT CATEGORY</h3>
                
                            </div>

        </div>
            <div class="row" >
                <div class="col-md-5" align="center" >
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="col-md-12">
								  <form action="" method="post">
								  
									 <div class="form-group">
										<label>Select Category</label>
											<select class="form-control" id="cid" name="cid">
									<option>------Select Category------</option>
									<?php 
									 
									foreach($category_arr as $data)
									{
									?>
										<option value="<?php echo $data->cid?>">
											<?php echo $data->category?>
										</option>
									<?php
									}
									?>
								</select>
									 </div>
									 
									 <div class="form-group">
										<label>Book Name</label>
										<input class="form-control" type="text" name="bname"  />
									 </div>
									 
									 <div class="form-group">
										<label>Author</label>
										<input class="form-control" type="text" name="name"  />
									 </div>
									 
									 <div class="form-group">
										<label>Quantity</label>
										<input class="form-control" type="number" name="quan"  />
									 </div>
									 
									 <div class="form-group">
										<label>Price</label>
										<input class="form-control" type="number" name="price"  />
									 </div>
									
									
									<div class="form-group">		
										<input type="submit" name="submit2" class="btn btn-primary" value="ADD BOOK"/>
									</div>
								</form>	
								</div>
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