<?php
if(empty($_SESSION['cust_id']))
{
	echo "<script>
	window.location='index';
	</script>";
}
include_once('header.php');
?>
	<div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>RENT ON BIKE</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index">HOME</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">RENT ON BIKE</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Bike Detail Here</h2>
          </div>
          <div class="col-md-12">
            <form action="" id="form1" method="post" enctype="multipart/form-data">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
				  <label for="Email" class="text-black">Select Category <span class="text-danger">*</span></label>
					<select class="form-control" id="cat_id" name="cat_id" data-bvalidator="required">
						<option>----Select Category----</option>
						<?php
							foreach($category as $data)
							{				
						?>
							<option value="<?php echo $data->cat_id;?>">
											<?php echo $data->cat_name;?>
							</option>
						<?php 
							}
						?>
					</select>                 
                  </div>
                  <div class="col-md-6">
                    <label for="Bike Number" class="text-black">Bike Number<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="veh_no" name="veh_no" data-bvalidator="required">
                  </div>
                </div>
				
				<div class="form-group row">
					<div class="col-md-6">					
					<label for="name" class="text-black">Bike Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="veh_title" name="veh_title" data-bvalidator="required">
				  </div>
                  <div class="col-md-6">
                   <label for="Licence No" class="text-black">Licence No <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lic_no" name="lic_no" data-bvalidator="required">
                  </div>
				  
                </div>
				
				
				<div class="form-group row">
					 <div class="col-md-6">
					<label for="name" class="text-black">Drive Type<span class="text-danger">*</span></label>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="drive_type" value="Owner" 
					  data-bvalidator="required" data-bvalidator-msg="Select one radio button" >Owner
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="drive_type" value="Other">Other
					  <label class="form-check-label" for="radio1"></label>
					</div>
					</div>
                   <div class="col-md-6">
                    <label for="fuel_type" class="text-black">Fuel Type<span class="text-danger">*</span></label>
                    <div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="fuel_type" value="Petrol"
						data-bvalidator="required" data-bvalidator-msg="Select one radio button" >Petrol
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="fuel_type" value="Disel" >Disel
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="fuel_type" value="EV" >EV
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
				</div>
				 
				 <div class="form-group row">
				  <div class="col-md-6">
					<label for="file" class="text-black">Upload RC Book <span class="text-danger">*</span></label>
					<input type="file" class="form-control" id="rc_book" name="rc_book" 
					data-bvalidator="extension[jpg:png:pdf],required" data-bvalidator-msg="Please select file of type .jpg, .png, .pdf">
				  </div>
					<div class="col-md-6">	
					<label for="file" class="text-black">Upload Bike Image<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="file" name="file" 
					data-bvalidator="extension[jpg:png],required" data-bvalidator-msg="Please select file of type .jpg, .png">
				  </div>       			  
                </div>
				
				<div class="form-group row">
				 <div class="col-md-6">	
					<label for="rent" class="text-black">Rent Amount<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="rent" name="rent" data-bvalidator="required,number">
				  </div>  
				 <div class="col-md-6">
                   <label for="rent_des" class="text-black">Rent Description <span class="text-danger">*</span></label>
					<textarea class="form-control py-3 px-4" rows="2" name="rent_des" placeholder="Rent Description" data-bvalidator="required"></textarea>
                  </div>	       		  
                </div>
             
				<div class="form-group row">
					<div class="col-md-6">					
					 <label for="veh_pickup_add" class="text-black">Pickup Address <span class="text-danger">*</span></label>
					<textarea class="form-control py-3 px-4" rows="3" name="veh_pickup_add" placeholder="Address" data-bvalidator="required"></textarea>
				  </div>        		  
                </div>
              				  
				 <div class="form-group row">
				  <div class="col-md-6">
					<label for="Email" class="text-black">Select City <span class="text-danger">*</span></label>
					<select class="form-control" id="city_id" name="city_id" onchange="getArea(this.value)" required>
						<option>----Select City----</option>
						<?php
							foreach($city as $f)
							{				
						?>
							<option value="<?php echo $f->city_id;?>">
											<?php echo $f->city_name;?>
							</option>
						<?php 
							}
						?>
					</select>
				  </div>  
				  <div class="col-md-6">
					<label for="Email" class="text-black">Select Area <span class="text-danger">*</span></label>
					<select class="form-control" id="area_id" name="area_id" required>
						<option>----Select Area----</option>
						
					</select>
				  </div>		  
                </div>
			
              <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="ADD BIKE">
                  </div>
				   
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>


<?php
include_once('footer.php');
?>
   