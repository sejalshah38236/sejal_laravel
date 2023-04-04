<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD AREA</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add AREA
                        </div>
						<form action="" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
							<div class="form-group">
								<label>Select City</label>
											<select class="form-control" id="city_id" name="city_id">
									<option>--Select City--</option>
									<?php 
									 
									foreach($city_arr as $data)
									{
									?>
										<option value="<?php echo $data->city_id?>">
											<?php echo $data->city_name?>
										</option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Area Name</label>
								<input class="form-control" type="text" name="area_name"/>
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
 <?php
 include_once('footer.php');
 ?> 