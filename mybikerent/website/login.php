<?php

if(isset($_SESSION['cust_id']))
{
  echo "<script>
  window.location='index';
  </script>";
}

include_once('header.php');
?>

    <title>Login</title>
    
    <form action="#" enctype="multipart/form-data" method="post">
    <div class="section-heading p-5">
              <h2><em>Login Here</em></h2>
              
            </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
    
            <form action="" id="" method="post" enctype="multipart/form-data">
    
              <div class="p-3 p-lg-5 border">
        <div class="form-group row">
                  <div class="col-md-6">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" >
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" name="password" >
                  </div>
                </div>
        
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit"  name="submit" class="btn btn-primary btn-lg btn-block" value="submit">
                  </div> 
          <div class="col-lg-12">
                    <a href="signup" name="submit" > Not Registered then Register Here</a>
                  </div> 
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    </form>
    
<?php
include_once('footer.php');
?>

