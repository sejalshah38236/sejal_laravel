<?php
if(isset($_SESSION['cust_id']))
{
	echo "<script>
	window.location='index';
	</script>";
}
include_once('header.php');
?>
<script type="text/javascript">

</script>
	<div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>Signup Us</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Signup</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Signup Here</h2>
          </div>
          <div class="col-md-12">
            <form action="" id="form1" method="post" enctype="multipart/form-data">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="cust_fname" name="cust_name" data-bvalidator="required,alpha">
                  </div>
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black">Mobile <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="phone_no" name="phone_no" data-bvalidator="required,number">
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" data-bvalidator="required,email">
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" name="password" data-bvalidator="required,minlength[4],maxlength[8]">
                  </div>
                </div>
				<div class="form-group row">
				   <div class="col-md-4">
                    <label for="Pincode" class="text-black">Pincode <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="pincode" name="pincode" data-bvalidator="required,number">
                  </div>
                  <div class="col-md-4">
                    <label for="name" class="text-black">Adhaar Crad NO <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="adhaar_no" name="adhaar_no" data-bvalidator="required,number">
                  </div>
				  <div class="col-md-4">
                    <label for="Licence No" class="text-black">Licence No <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="driving_no" name="driving_no" data-bvalidator="required">
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male" 
					  data-bvalidator="required" data-bvalidator-msg="Select one radio button" >Male
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gender" value="Female">Female
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black">Lang <span class="text-danger">*</span></label>
                    <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="Hindi"
						data-bvalidator="min[1],required" data-bvalidator-msg="Select at least one checkboxes">Hindi
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="English" >English
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="Gujarati" >Gujarati
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
				  
				  <div class="col-md-6">
					<label for="Email" class="text-black">Select Country <span class="text-danger">*</span></label>
					<select class="form-control" id="c_id" name="c_id" onchange="getCity(this.value)" data-bvalidator="required">
						<option>----Select Country----</option>
						<?php
							foreach($country_arr as $f)
							{				
						?>
							<option value="<?php echo $f->c_id;?>">
											<?php echo $f->c_name;?>
							</option>
						<?php 
							}
						?>
					</select>
				  </div>
				  <div class="col-md-6">
					<label for="Email" class="text-black">Select City <span class="text-danger">*</span></label>
					<select class="form-control" id="city_id" name="city_id" onchange="getArea(this.value)" required>
						<option>----Select City----</option>
						
					</select>
				  </div>  
				  <div class="col-md-6">
					<label for="Email" class="text-black">Select Area <span class="text-danger">*</span></label>
					<select class="form-control" id="area_id" name="area_id" required>
						<option>----Select Area----</option>
						
					</select>
				  </div>
				  <div class="col-md-6">
					<label for="password" class="text-black">Upload profile <span class="text-danger">*</span></label>
					<input type="file" class="form-control" id="file" name="file" 
					data-bvalidator="extension[jpg:png],required" data-bvalidator-msg="Please select file of type .jpg, .png">
				  </div>
					
                </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="signup">
                  </div>
				   <div class="col-lg-12">
                    <a href="login" name="submit" > Allreday Register then login Here</a>
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
   