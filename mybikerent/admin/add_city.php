<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD CITY</h4>
                
              </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Product
                        </div>
                        <div class="panel-body">
                             <form action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Select Country</label>
											<select class="form-control" id="c_id" name="c_id">
									<option>--Select Country--</option>
									<?php 
									 
									foreach($country_arr as $data)
									{
									?>
										<option value="<?php echo $data->c_id?>">
											<?php echo $data->c_name?>
										</option>
									<?php
									}
									?>
								</select>
							</div>
							 <div class="form-group">
								<label>City Name</label>
								<input class="form-control" type="text" name="city_name"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>City Code</label>
								<input class="form-control" type="text" name="city_code"/>
								<p class="help-block">Help text here.</p>
							</div>
                            
         
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="text" name="submit" value="ADD" />
									
								</div>
                            </form>
                            </div>
                        </div>
                   </div>
     
        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 