
@extends('backend.layout.main')

    @section('main_container')
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">

    
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="add_images" method="post" enctype="multipart/form-data" class="tm-edit-product-form">
                @csrf

                <div class="form-group mb-3">
                    <label
                      for="name"
                      >Image Name
                    </label>
                    <input
                      
                      name="name"
                      type="text"
                      class="form-control validate"
                      required
                    />  
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Image
                    </label>
                    <input
                      id="name"
                      name="file[]"
                      type="file"
                      class="form-control validate"
                      required
                      multiple
                    />  
                  </div>
                  <div class="form-group mb-3">
                
                  </div>
                  <div class="form-group mb-3">
                   
                  
                  </div>
                  <div class="row">
                   
                        </div>
                  </div>
                  
              </div>
              
              <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="{{url('backend/js/jquery-3.3.1.min.js')}}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{url('backend/jquery-ui-datepicker/jquery-ui.min.js')}}"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="{{url('backend/js/bootstrap.min.js')}}"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>

@endsection