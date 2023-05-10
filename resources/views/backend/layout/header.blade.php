<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accounts - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="{{url('https://fonts.googleapis.com/css?family=Roboto:400,700')}}"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="{{('backend/css/fontawesome.min.css')}}" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{('backend/css/bootstrap.min.css')}}" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{('backend/css/templatemo-style.css')}}">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">

  @include('sweetalert::alert')
    <div class="" id="home">


      <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
          <a class="navbar-brand" href="index.html">
            <h1 class="tm-site-title mb-0"> Admin</h1>

            {{session('name')}}
          </a>


          <button
            class="navbar-toggler ml-auto mr-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars tm-nav-icon"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto h-100">
              <li class="nav-item">
                <a class="nav-link" href="adminindex">
                  <i class="fas fa-tachometer-alt"></i> Dashboard
                  <span class="sr-only">(current)</span>
                </a>
              </li>
             
                
                  
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Daily Report</a>
                  <a class="dropdown-item" href="#">Weekly Report</a>
                  <a class="dropdown-item" href="#">Yearly Report</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add_image ">
                  <i class="fas fa-shopping-cart"></i>Add Photos 
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="manage_photos">
                  <i class="far fa-user"></i>Manage Photos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index">
                  <i class="far fa-user"></i>Go to User Site
                </a>
              </li>

             
         
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link d-block" href="adminlogin">
                  Admin, <b>Logout</b>
                </a>
              </li>
            </ul> 
          </div>
        </div>
      </nav>
      
    <script src="{{url('backend/js/jquery-3.3.1.min.js')}}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{url('backend/js/bootstrap.min.js')}}"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
