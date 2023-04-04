
@extends('frontend.layout.main')

@section('main_container') 
         </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Login</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Login</p>
            </div>
        </div>
    </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Login Here</h2>
          </div>
          <div class="col-md-12">
    
            <form action="" method="post">
    
              <div class="p-3 p-lg-5 border">
              
        <div class="form-group row">
                  <div class="col-md-6">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                </div>
        
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit"  name="submit" class="btn btn-primary btn-lg btn-block" value="Login Here">
                  </div> 
          <div class="col-lg-12">
                    <a href="login" name="submit" > Not Register then Register Here</a>
                  </div> 
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    
@endsection
   