@extends('frontend.layout.main')

@section('main_container') 
         </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Signup Us</h6>
                <h1 class="display-5">Please Feel Free To Signup Us</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="bg-primary h-100 p-5">
                        <form action="{{url('/signup')}}" method="post" enctype="multipart/form-data">
							@csrf
                            <div class="row g-3">
								<div class="col-12">
                                    <input type="text" name="name" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;">
                                </div>
								<div class="col-12">
                                    <input type="email" name="unm" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="password" name="pass" class="form-control bg-light border-0 px-4" placeholder="Your Password" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select name="cid" class="form-control bg-light border-0 px-4" style="height: 55px;">
										<option>Select Country</option>
										@foreach($data as $d)
										<option value="{{$d->id}}">{{$d->cnm}}</option>
										@endforeach
									</select>
                                </div>
								
								<div class="col-12 text-white">
                                    Male :  <input type="radio" name="gen" value="Male" >
									Female : <input type="radio" name="gen" value="Female">
                                </div>
								<div class="col-12 text-white">
                                    Hindi :  <input type="checkbox" name="lag[]" value="Hindi" >
									English : <input type="checkbox" name="lag[]" value="English">
									Gujarati : <input type="checkbox" name="lag[]" value="Gujarati">
                                </div>
								<div class="col-12">
                                    <input type="file" name="file" class="form-control bg-light border-0 px-4" style="height: 55px;">
                                </div>
                               
                                <div class="col-12">
                                    <input class="btn btn-secondary w-100 py-3" type="submit" name="submit" value="Signup">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection